<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;


$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-signup">
	<h1><?= Html::encode($this->title) ?></h1>
	<p>Please fill up to register</p>
	<div class="row">
		<div class="col-lg-5">
			<?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
				<?= $form->field($model, 'username') -> textInput() -> hint('Please Enter Name') ?>
				<?= $form->field($model, 'password') -> passwordInput() ?>
				<?= $form->field($model, 'confirm_password') -> passwordInput() ?>
				<?= $form->field($model, 'name') -> label('Name') ?>
				<?= $form->field($model, 'email')-> input('email') ?>
				<?= $form->field($model, 'role')->dropdownList(['1' => 'Staff', '2' => 'User'], ['prompt' => '---Select Data---']) ?>
				<?= $form->field($model, 'security_question')->dropdownList(['1' => 'Are you dog?', '2' => 'Are you cat?'], ['prompt' => '---Select Data---']) ?>
				<?= $form->field($model, 'security_answer') -> textInput() ?>
				<div class="form-group">
					<?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
					<button type="submit" class="btn btn-danger" name="signup-button">Signup</button>
				</div>
			<?php ActiveForm::end(); ?>
		</div>
	</div>
</div>