<?php
/**
 * Cart manager
 * 
 * @author HauTruong
 *
 */
class Cart_manager {
	
	protected $CI;
	protected $cart_content;
	public function __construct()
	{
		if (! isset($_SESSION))
		{
			session_start();
		}
		$this->CI = & get_instance();
		$this->cart_content = (isset($_SESSION['cart_content'])) ? $_SESSION['cart_content'] : [];
	}
	
	/**
	 * Insert
	 * add to cart session
	 * 
	 * @param array $arrData
	 */
	public function insert($arrData)
	{
		if (isset($arrData['id']))
		{
			$is_exist = FALSE;
			
			foreach ($this->cart_content as &$item)
			{
				if ($arrData['id'] == $item['id'])
				{
					$is_exist = TRUE;
					$item['quantity'] += $arrData['quantity'];
				}
			}
			if (! $is_exist)
			{
				array_push($this->cart_content, $arrData);
			}
			$_SESSION['cart_content'] = $this->cart_content;
		}
	}
	
	/**
	 * Get cart content
	 * 
	 * @return array
	 */
	public function get_cart_content()
	{
		return $this->cart_content;
	}
	
	/**
	 * Delete_all
	 */
	public function delete_all()
	{
		unset($_SESSION['cart_content']);
	}
}