<?php
/**
 * Cart controller
 * 
 * @author HauTruong
 *
 */
class Cart extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('form');
		$this->load->library('login_manager');
		//load libraries cart
		$this->load->library('cart_manager');
		
		if (! $this->login_manager->check_login())
		{
			redirect(base_url().'login');
		}
		
		$this->data['user_logined'] = $_SESSION['sess_login']['username'];
		
		$this->data['has_product_in_cart'] = TRUE;
		$this->data['cart_content'] = $this->cart_manager->get_cart_content();
		if (empty($this->data['cart_content']))
		{
			$this->data['has_product_in_cart'] = FALSE;
		}
	}
	
	/**
	 * add_to_cart
	 * add product to cart
	 */
	public function add_to_cart()
	{
		try
		{
			//check method
			if (strtoupper($_SERVER['REQUEST_METHOD']) === 'GET')
			{
				redirect(base_url().'product/list');
			}
			
			$product_id = $this->input->post('product_id', TRUE);
			
			$this->load->library('form_validation');
			$this->form_validation->set_rules('product_quantity', 'quantity', "required|is_natural|greater_than[0]|check_stock_quantity[$product_id]");
			if (FALSE == $this->form_validation->run())
			{
				$_SESSION['msg_error_check_product'] = $this->form_validation->error_string();
				redirect(base_url().'product/list');
			}
			else
			{
				//get value from POST
				$product_quantity = $this->input->post('product_quantity', TRUE);
				$product_name = $this->input->post('product_name', TRUE);
				$product_price = $this->input->post('product_price', TRUE);
				
				//prepare data cart
				$cart_product = array(
							'id'=> $product_id,
							'quantity' => $product_quantity,
							'name' => $product_name,
							'price' => $product_price
						);
				//insert cart
				$this->cart_manager->insert($cart_product);
				
				//redirect action cart_detail
				redirect(base_url().'cart/detail');
			}
		}
		catch (Exception $e)
		{
			log_message('error', $e->getMessage());
			show_error($e->getMessage());
		}
	}
	
	/**
	 * delete_cart
	 * Delete all product in cart
	 */
	public function delete_cart()
	{
		if (strtoupper($_SERVER['REQUEST_METHOD']) === 'GET')
		{
			redirect(base_url().'product/list');
		}
		else
		{
			$this->cart_manager->delete_all();
		}
		
	}

	/**
	 * detail cart
	 * detail of cart
	 */
	public function detail_cart()
	{
		try
		{
			//paser view cart details
			$this->parser->parse("cart/cart_detail.tpl", $this->data);
		}
		catch (Exception $e)
		{
			log_message('error', $e->getMessage());
			show_error($e->getMessage());
		}
	}
	
	/**
	 * check_coupon
	 * 
	 */
	public function check_coupon()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('coupon', 'coupon', 'is_exist[tbl_coupon.code]|check_unused_coupon|check_expired_coupon');
		$this->form_validation->run();
		//paser view cart details
		$this->detail_cart();
	}
	
	/**
	 * Store
	 * Insert into db
	 */
	public function store()
	{
		try
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('address', 'Address', 'required');
			$this->form_validation->set_rules('coupon', 'coupon', 'is_exist[tbl_coupon.code]|check_unused_coupon|check_expired_coupon');
			if (FALSE == $this->form_validation->run())
			{
				$this->parser->parse("cart/cart_detail.tpl", $this->data);
			}
			else
			{
				//get data post form request
				$coupon_code = $this->input->post('coupon', TRUE);;
				$address = $this->input->post('address', TRUE);
					
				//get id of coupon
				$this->load->model('Coupondao');
				$coupon_id = $this->Coupondao->get_id_by_code($coupon_code);
					
				//get discount from coupon
				$this->load->model('Coupon_typedao');
				$discount = $this->Coupon_typedao->get_discount_by_id($coupon_id);
					
					
				//prepare data insert to order detail
				$cart_content = $this->data['cart_content'];
				$total_price = 0;
				$arr_order_detail = array();
				foreach ($cart_content as $key=>$item)
				{
					$order_detail = array();
					$order_detail['quantity'] = $item['quantity'];
					$order_detail['product_id'] = $item['id'];
					$order_detail['order_id'] = 0;
					$total_price += $item['quantity'] * $item['price'];
			
					array_push($arr_order_detail, $order_detail);
				}
					
				//prepare data insert to order
				$data_order = array();
				$data_order['coupon_id'] = $coupon_id;
				$data_order['user_id']	 = $_SESSION['sess_login']['user_id'];
				$data_order['discount']	 = $discount;
				$data_order['total_payment'] = $total_price * (1 - $discount/100);
				
				//load model
				$this->load->model('Orderdao');
				$order_id = $this->Orderdao->insert_order($data_order, $arr_order_detail);
				if ($order_id)
				{
					$this->cart_manager->delete_all();
					$msg = "Your order Id is %s has been received and is currently in verification process.";
					$msg = sprintf($msg, $order_id);
				}
				else
				{
					$msg = 'Inser Fail';
				}
				$this->data['msg_regist_order'] = $msg;
				
				$this->parser->parse("cart/cart_detail.tpl", $this->data);
			}
		}
		catch (Exception $e)
		{
			log_message('error', $e->getMessage());
			show_error($e->getMessage());
		}
	}
}