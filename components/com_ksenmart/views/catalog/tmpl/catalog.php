<?php 
/**
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
defined('_JEXEC') or die;
?>
<div class="catalog">
	<h3><?php echo JText::_('KSM_CATALOG_TITLE');?></h3>
    <?php echo $this->loadTemplate('sortlinks', 'default'); ?>
    <div class="row-fluid layout_<?php echo $this->layout_view; ?> layout_block" data-layout="<?php echo $this->layout_view; ?>">
        <?php if(!empty($this->rows)){ ?>
        <ul class="thumbnails items catalog-items">
    	<?php foreach($this->rows as $product){ ?>
            <?php echo $this->loadTemplate('item', 'default', array('product' => $product, 'params' => $this->params)); ?>
    	<?php } ?>
        </ul>
        <?php }else{ ?>
        <?php echo $this->loadTemplate('noproducts', 'default'); ?>
        <?php } ?>
    </div>
    <?php echo $this->loadTemplate('pagination', 'default'); ?>
</div>