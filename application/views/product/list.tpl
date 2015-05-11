{* Extend our master template *} {extends file="layout/master.tpl"} {*
This block is defined in the master.php template *} {block name=title}
List Product {/block} {* This block is defined in the master.php
template *} {block name=body}

<div class="w-row">
	<div class="w-col w-col-9">
		<h1>List of product</h1>
	</div>
</div>
{if isset($msg_error_check_product)}
	<div class="w-row">
		<div class="w-col w-col-9 alert alert-danger">
			{$msg_error_check_product}
		</div>
	</div>
{/if}
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
	<div class="w-col w-col-3">
		<div>
			<strong>Price</strong>
		</div>
	</div>
	<div class="w-col w-col-3">
		<div>
			<strong>Quantity</strong>
		</div>
	</div>
</div>
{foreach $lst_product as $product}
<div class="w-row">
	<div class="w-col w-col-1">
		<div>{$product->id}</div>
	</div>
	<div class="w-col w-col-5">
		<div>{$product->name}</div>
	</div>
	<div class="w-col w-col-3">
		<div>{$product->sale_price}</div>
	</div>
	<div class="w-col w-col-3">
		<div class="w-form">
			{$base_url|cat:'cart/add_to_cart'|form_open:'class=form-horizontal'}
				<input class="w-input" id="pro1_quantity" type="text" name="product_quantity"
					placeholder="Enter product's quantity" style="width: 180px;">
				<input type="hidden" value="{$product->id}" name="product_id">
				<input type="hidden" value="{$product->name}" name="product_name">
				<input type="hidden" value="{$product->sale_price}" name="product_price">
				<input class="w-button" type="submit" value="Add to Cart" data-wait="Please wait...">
			{''|form_close}
			<div class="w-form-done">
				<p>Thank you! Your submission has been received!</p>
			</div>
			<div class="w-form-fail">
				<p>Oops! Something went wrong while submitting the form :(</p>
			</div>
		</div>
	</div>
</div>
{/foreach}
<div class="w-row">
	<div class="w-col w-col-9"></div>
	<div class="w-col w-col-3">
		<div class="w-form">
			{$base_url|cat:'cart/detail'|form_open:'class=form-horizontal'}
				<input class="w-button" type="submit" value="Checkout"
					data-wait="Please wait..." style="background-color: blue">
			{''|form_close}
			<div class="w-form-done">
				<p>Thank you! Your submission has been received!</p>
			</div>
			<div class="w-form-fail">
				<p>Oops! Something went wrong while submitting the form :(</p>
			</div>
		</div>
	</div>
</div>
{/block}
