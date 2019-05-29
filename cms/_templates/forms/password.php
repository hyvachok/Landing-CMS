<?php defined('CORE') OR die('403'); ?>

<form method="POST" action="">

	<h2>Пароль</h2>

	<div class="form-group">
		<label for="pwd1">Новый пароль</label>
		<input
		 id="pwd1"
		 class="form-control"
		 name="pwd1"
		 type="password"
		 title="Введите новый пароль."
		 placeholder="Новый пароль"
		 value="<?=Utils::pr($vars['sent_data']['pwd1']);?>"
		 autofocus
		 required
		 />
		<div class="help-block">Пожалуйста введите новый пароль сюда.</div>
	</div>

	<div class="form-group">
		<label for="pwd2">Подтвердите новый пароль</label>
		<input
		 id="pwd2"
		 class="form-control"
		 name="pwd2"
		 type="password"
		 title="Введите новый пароль сюда."
		 placeholder="Новый пароль ещё раз"
		 value="<?=Utils::pr($vars['sent_data']['pwd2']);?>"
		 required
		 />
		<div class="help-block">Пожалуйста введите новый пароль сюда ещё раз.</div>
	</div>

	<div class="buttons">
		<?php echo Utils::render(
			'elements/button_blue.php',
			 array('text' => 'Сохранить', 'title' => 'Сохранить новый пароль.')
		); ?>

		<?php echo Utils::render(
			'elements/button_white.php',
			 array(
			 	'text' => 'Отмена',
			 	'title' => 'Отменить изменение пароль.',
			 	'url' => Utils::getLink('cms/')
			 )
		); ?>
	</div>

</form>
