<?php 
/**
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
defined('_JEXEC') or die;
?>
<article class="unit row-fluid">
	<div class="top row-fluid">
		<?php echo $this->loadTemplate('title');?>		
		<?php echo $this->loadTemplate('toplinks');?>
	</div>
	<div class="row-fluid top_prd_block">
        <?php echo $this->loadTemplate('gallery'); ?>
		<div class="info span6">
			<form action="<?php echo $this->product->add_link_cart; ?>" method="post" class="form-horizontal">
				<?php echo $this->loadTemplate('info');?>	
				<?php echo $this->loadTemplate('prices');?>	
    			<input type="hidden" name="price" value="<?php echo $this->product->price; ?>">	
    			<input type="hidden" name="id" value="<?php echo $this->product->id; ?>">	
    			<input type="hidden" name="product_packaging" class="product_packaging" value="<?php echo $this->product->product_packaging; ?>">
			</form>
		</div>
	</div>
	<?php echo $this->loadTemplate('social');?>
    <?php echo $this->loadTemplate('tabs'); ?>
    <?php if (count($this->product->sets) > 0) { ?>
        <?php echo $this->loadTemplate('sets'); ?>
	<?php } ?>
</article>
<?php echo $this->loadTemplate('related'); ?>