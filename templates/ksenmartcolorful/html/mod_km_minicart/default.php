<?php defined('_JEXEC') or die; ?>
<div id="minicart" class="well">
	<a href="<?php echo $link; ?>">
		<span id="orders_padding">
			<span class="muted minicart_orders"><strong><!-- Корзина --><?php echo $cart->total_prds; ?></strong></span>
		</span>
		<!-- <small class="muted"> Перетащите сюда товары</small> -->
	</a>
</div>