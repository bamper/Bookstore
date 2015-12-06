<?php echo $this->Form->create('Author', array('type' => 'file')); ?>
	<div class="add">
	<?php echo $this->Form->input('firstname', array('label' => 'Prénom', 'class' => 'form-control')); ?>
	<?php echo $this->Form->input('lastname', array('label' => 'Nom', 'class' => 'form-control')); ?>
	<?php echo $this->Form->label('biography', 'Biographie'); ?>
	<?php echo $this->Form->textarea('biography', array('class' => 'form-control', 'rows' => '10')); ?>
	<?php echo $this->Form->input('id'); ?>
	<?php echo $this->Form->input('image_file', array('type' => 'file', 'value' => $this->request->data['Author']['image'], 'label' => 'Photo', 'class' => 'form-control')); ?>
	<?php echo $this->Form->submit('Modifier', array('class' => 'btn btn-lg btn-primary btn-block')); ?>
	</div>
<?php echo $this->Form->end(); ?>