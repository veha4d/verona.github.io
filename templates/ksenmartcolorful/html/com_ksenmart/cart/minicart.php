<?php defined( '_JEXEC' ) or die( '=;)' );
    $Itemid = KSSystem::getShopItemid();
    $link = JRoute::_('index.php?option=com_ksenmart&view=cart&Itemid='.$Itemid);
?>
<a href="<?php echo $link; ?>">
	<span id="orders_padding">
		<b class="muted minicart_orders"><?php echo $this->cart->total_prds; ?></b>
	</span>
	<!-- <small class="muted">Перетащите сюда товары</small> -->
</a>