<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('memberid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->memberid), array('view', 'id'=>$data->memberid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firstname')); ?>:</b>
	<?php echo CHtml::encode($data->firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastname')); ?>:</b>
	<?php echo CHtml::encode($data->lastname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('about')); ?>:</b>
	<?php echo CHtml::encode($data->about); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('photo')); ?>:</b>
	<?php echo CHtml::encode($data->photo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zip')); ?>:</b>
	<?php echo CHtml::encode($data->zip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dob')); ?>:</b>
	<?php echo CHtml::encode($data->dob); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('age')); ?>:</b>
	<?php echo CHtml::encode($data->age); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('signed_up')); ?>:</b>
	<?php echo CHtml::encode($data->signed_up); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recipes')); ?>:</b>
	<?php echo CHtml::encode($data->recipes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('articles')); ?>:</b>
	<?php echo CHtml::encode($data->articles); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photos')); ?>:</b>
	<?php echo CHtml::encode($data->photos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('videos')); ?>:</b>
	<?php echo CHtml::encode($data->videos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('testimonials')); ?>:</b>
	<?php echo CHtml::encode($data->testimonials); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('friends')); ?>:</b>
	<?php echo CHtml::encode($data->friends); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('viewed')); ?>:</b>
	<?php echo CHtml::encode($data->viewed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spclicks')); ?>:</b>
	<?php echo CHtml::encode($data->spclicks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spviews')); ?>:</b>
	<?php echo CHtml::encode($data->spviews); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('howto')); ?>:</b>
	<?php echo CHtml::encode($data->howto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meta_keywords')); ?>:</b>
	<?php echo CHtml::encode($data->meta_keywords); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meta_title')); ?>:</b>
	<?php echo CHtml::encode($data->meta_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meta_desc')); ?>:</b>
	<?php echo CHtml::encode($data->meta_desc); ?>
	<br />

	*/ ?>

</div>