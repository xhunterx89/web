<?php
	$this->breadcrumbs = array('Sign Up');
?>

<div class="form">
	<?php
		$form = $this->beginWidget('CActiveForm',
			array(
				'id'=>'frm-signup',
				'method'=>'post',
				'enableAjaxValidation'=>true,
				'enableClientValidation'=>true,
				'htmlOptions'=>array(
						'validateOnSubmit'=>true,
					),
				)
		);
		echo $form->errorSummary($model);
	?>

	<div class="row">
		<?php
			echo $form->labelEx($model,'username');
			echo $form->textField($model,'username');
			echo $form->error($model,'username');
		?>
	</div>

	<div class="row">
		<?php
			echo $form->labelEx($model,'email');
			echo $form->textField($model,'email');
			echo $form->error($model,'email');
		?>
	</div>

	<div class="row">
		<?php
			echo $form->labelEx($model,'password');
			echo $form->passwordField($model,'password');
			echo $form->error($model,'password');
		?>
	</div>

	<div class="row">
		<?php
			echo $form->labelEx($model,'confirm_password');
			echo $form->passwordField($model,'confirm_password');
			echo $form->error($model,'confirm_password');
		?>
	</div>

	<div class="row">
		<?php
			$this->widget('CCaptcha');
			echo $form->labelEx($model,'verify_code');
			echo $form->textField($model,'verify_code');
			echo $form->error($model,'verify_code');
		?>
	</div>

	<div class="row button">
		<?php
			echo CHtml::submitButton('Submit');
			//echo CHtml::resetButton('Reset');
		?>
	</div>
	<?php
		$this->endWidget();
	?>
</div>