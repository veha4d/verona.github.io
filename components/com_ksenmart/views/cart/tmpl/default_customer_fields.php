<?php 
/**
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
defined('_JEXEC') or die;

foreach($this->customer_fields as $customer_field){ ?>
<div class="control-group <?php echo $customer_field->class; ?>">
	<label class="control-label"><?php echo JText::_(($customer_field->system==1?'ksm_cart_shipping_field_':'').$customer_field->title); ?><?php echo $customer_field->required?' *':''; ?></label>
	<div class="controls">
        <?php if($customer_field->type == 'select'){ ?>
		<select class="selectbox" name="customer_fields[<?php echo $customer_field->id;?>]"<?php echo $customer_field->required?' required="true"':''; ?>>
			<?php foreach($customer_field->values as $value){ ?>
			<option value="<?php echo $value->id;?>" <?php echo $customer_field->value==$value->id?'selected':'';?>><?php echo $value->title; ?></option>
			<?php } ?>
		</select>
		<?php }else{ ?>
            <?php if($customer_field->title != 'phone'){ ?>
                <input type="text" class="inputbox" <?php echo ($customer_field->system==1?'id="customer_'.$customer_field->title.'"':'');?> name="customer_fields[<?php echo $customer_field->system==1?$customer_field->title:$customer_field->id;?>]" value="<?php echo $customer_field->value; ?>"<?php echo $customer_field->required?' required="true"':''; ?> />
            <?php }else{ ?>
                <div class="input-append">
                    <input type="text" id="customer_phone" size="25" name="customer_fields[<?php echo $customer_field->system==1?$customer_field->title:$customer_field->id;?>]" value="<?php echo empty($customer_field->value)?'7':$customer_field->value; ?>" required="true" />
                    <span class="add-on">
                        <input type="hidden" checked="true" />
                        <label id="descr"><?php echo JText::_('KSM_CART_TYPE_PHONE_NUMBER'); ?></label>
                    </span>
                </div>
            <?php } ?>
		<?php } ?>
    </div>
</div>
<?php } ?>