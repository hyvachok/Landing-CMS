<?php defined('CORE') OR die('403'); ?>

<form method="POST" action="">

	<h2>Авторизация</h2>

	<div class="form-group">
		<input
		 id="password"
		 class="form-control"
		 name="password"
		 type="password"
		 title="Введите пароль сюда."
		 placeholder="Введите пароль сюда"
		 autofocus
		 required
		 />
	</div>

	<div class="buttons">
		<?php echo Utils::render(
			'elements/button_blue.php',
			 array('text' => 'Войти', 'title' => 'Войти и открыть CMS.')
		); ?>

		<?php echo Utils::render(
			'elements/button_white.php',
			 array(
			 	'text' => 'Отмена',
			 	'title' => 'Открыть сайт.',
			 	'url' => Utils::getLink()
			 )
		); ?>
	</div>

</form>
