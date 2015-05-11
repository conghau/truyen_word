{* Extend our master template *} {extends file="layout/master.tpl"}
{*This block is defined in the master.php template *} {block name=title}
Cart Detail {/block} {* This block is defined in the master.php
template*}
{block name=body}
<div class="w-row">
	<div class="w-col w-col-9">
		<h1>Checkout</h1>
	</div>
</div>
{if isset($msg_regist_order)}
<div class="w-row">
	<div class="w-col w-col-9 alert alert-danger">
		{$msg_regist_order}
	</div>
</div>
{/if}
{if $has_product_in_cart eq TRUE}
<div class="w-row">
	<div class="w-col w-col-1">
		<div>
			<strong>No</strong>
		</div>
	</div>
	<div class="w-col w-col-5">
		<div>
			<strong>Product</strong>
		</div>
	</div>
	<div class="w-col w-col-2">
		<div>
			<strong>Price</strong>
		</div>
	</div>
	<div class="w-col w-col-2">
		<div>
			<strong>Quantity<br></strong>
		</div>
	</div>
	<div class="w-col w-col-2">
		<div>
			<strong>Total Price</strong>
		</div>
	</div>
</div>
{$total_price = 0} {foreach $cart_content as $key=>$item}
<div class="w-row">
	<div class="w-col w-col-1">
		<div>{$key +1}</div>
	</div>
	<div class="w-col w-col-5">
		<div>{$item['name']}</div>
	</div>
	<div class="w-col w-col-2">
		<div>{$item['price']} $</div>
	</div>
	<div class="w-col w-col-2">
		<div>{$item['quantity']}</div>
	</div>
	<div class="w-col w-col-2">
		<div>{math equation="x*y" x=$item['price'] y=$item['quantity']}$</div>
	</div>
</div>
{$total_price = $total_price + $item['price']* $item['quantity']}
{/foreach}
<div class="w-row">
	<div class="w-col w-col-1"></div>
	<div class="w-col w-col-5"></div>
	<div class="w-col w-col-2"></div>
	<div class="w-col w-col-2">
		<div>
			<strong>Total Price:</strong>
		</div>
	</div>
	<div class="w-col w-col-2">
		<div>
			<strong>{$total_price}$</strong>
		</div>
	</div>
</div>
<div class="w-row">
	<div class="w-col w-col-9">
		<div class="w-form">
			{$base_url|cat:'cart/check_coupon'|form_open:'class=form-horizontal'}
				{form_error('coupon','<p class="alert alert-danger"> ※ ','</p>')}
				<div>Please enter coupon if needed</div>
				<input class="w-input" id="coupon" type="text"
					placeholder="Coupon code" name="coupon" value="{set_value('coupon')}"> 
				<input class="w-button" type="submit" value="Check Coupon"
					data-wait="Please wait...">
			{''|form_close}
			<div class="w-form-done">
				<p>Thank you! Your submission has been received!</p>
			</div>
			<div class="w-form-fail">
				<p>Oops! Something went wrong while submitting the form :(</p>
			</div>
		</div>
	</div>
	<div class="w-col w-col-3" vertical-align="true"></div>
</div>
<div class="w-row">
	<div class="w-col w-col-9"></div>
	<div class="w-col
w-col-3" vertical-align="true"></div>
</div>
<div class="w-row">
	<div class="w-col w-col-9">
		<div class="w-form">
{$base_url|cat:'cart/store'|form_open:' id=form-regist'}
			<div>Enter address information&nbsp;(*)</div>
{form_error('address','<p class="alert alert-danger"> ※ ','</p>')}
				<textarea class="w-input" id="address"
					placeholder="Enter your address" name="address"></textarea>
{''|form_close}
		</div>
	</div>
	<div class="w-col w-col-3"></div>
</div>
{else}
<div class="w-row">
	<h3>No have product in cart !</h3>
</div>
{/if}
<div class="w-row">
	<div class="w-col w-col-9"></div>
	<div class="w-col w-col-3">
		<div class="w-form">
			
			<div class="w-row">
			{$base_url|cat:'product/list'|form_open:'class=form-horizontal'}
				<div class="w-col w-col-8">
					<input class="w-button" type="submit" value="Continue Shopping"
						data-wait="Please wait...">
				</div>
			{''|form_close}
{if $has_product_in_cart eq TRUE}
				<div class="w-col w-col-4">
					<input class="w-button" id="regist-store" type="button" onclick="done()"
						value="Register Order" data-wait="Please wait..."
						style="background-color: blue">
				</div>
{/if}
			</div>
			
			<div id="done" class="w-form-done">
				<p>Your order id is 1 has been received and is currently in
					verification process.</p>
			</div>
			<div id="fail" class="w-form-fail">
				<p>Oops! Something went wrong while submitting the form :(</p>
			</div>
		</div>
	</div>
</div>
{/block}
{block name=javascript}
<script type="text/javascript">
$(document).ready(function(){
	$('#regist-store').click(function(){
		$('<input />').attr('type', 'hidden')
			.attr('name', 'coupon').attr('value', $('#coupon').val()).appendTo('#form-regist');
		$('#form-regist').submit();
	});

});
</script>
{/block}
