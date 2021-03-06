<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('invoicePayment/view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('invoiceId')); ?>:</b>
	<?php echo CHtml::encode($data->invoiceId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	$<?php echo number_format(CHtml::encode($data->amount), 2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paymentMethod')); ?>:</b>
	<?php echo CHtml::encode($data->paymentMethod); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paymentDate')); ?>:</b>
	<?php echo CHtml::encode($data->paymentDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastModified')); ?>:</b>
	<?php echo CHtml::encode($data->lastModified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastUpdatedBy')); ?>:</b>
	<?php echo CHtml::encode($data->lastUpdatedBy); ?>
	<br />

	*/ ?>

</div>