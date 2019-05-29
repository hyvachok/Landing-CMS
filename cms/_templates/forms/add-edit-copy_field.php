<?php defined('CORE') OR die('403'); ?>

<form method="POST" action="">

	<h2><?=Utils::pr($vars['page_header']);?></h2>

	<div class="form-group<?=Utils::pr($vars['invalid_fields']['parent']) ? ' has-error' : '';?>">
		<label for="parent">Родитель<span title="Это обязательное поле.">&nbsp;*</span></label>
		<select
		 id="parent"
		 class="form-control"
		 name="parent"
		 title="Выберите Родителя для этого Поля."
		 onchange="confirmLeave('on');">
			<?php

				$rm_yourself = Utils::pr($vars['rm_yourself_from_parents'], false);
				$parents = Content::getAllParents($rm_yourself);

				foreach($parents as $parent):

			?>

				<?php

					$selected_parent = '';

					if( Utils::pr($vars['sent_data']['parent']) == $parent['path'] )
					{
						$selected_parent = ' selected';
					}

				?>

				<option value="<?=Utils::pr($parent['path']);?>"<?=Utils::pr($selected_parent);?>><?=Utils::pr($parent['title']);?></option>

			<?php endforeach; ?>
		</select>

		<div class="help-block">Выберите Родителя для нового Поля.</div>
	</div>

	<div class="form-group<?=Utils::pr($vars['invalid_fields']['type']) ? ' has-error' : '';?>">
		<label for="type">Тип<span title="Это обязательное поле.">&nbsp;*</span></label>
		<select
		 id="type"
		 class="form-control"
		 name="type"
		 title="Выберите Тип этого поля."
		 onchange="confirmLeave('on');"
		 required>
			<?php foreach(Content::getFieldsTypes() as $field_name => $field_value): ?>

				<?php

					$selected_type = '';

					if( Utils::pr($vars['sent_data']['type']) == $field_value )
					{
						$selected_type = ' selected';
					}

				?>

				<option value="<?=Utils::pr($field_value);?>"<?=Utils::pr($selected_type);?>><?=Utils::pr($field_name);?></option>

			<?php endforeach; ?>
		</select>

		<div class="help-block">Выберите Тип нового поля.</div>
	</div>

	<div class="form-group<?=Utils::pr($vars['invalid_fields']['alias']) ? ' has-error' : '';?>">
		<label for="alias">Псевдоним<span title="Это обязательное поле.">&nbsp;*</span></label>
		<input
		 id="alias"
		 class="form-control"
		 name="alias"
		 type="text"
		 value="<?=Utils::pr($vars['sent_data']['alias']);?>"
		 title="Введите Псевдоним для этого Поля."
		 placeholder="Введите Псевдоним сюда"
		 onchange="confirmLeave('on');"
		 required
		 />
		<div class="help-block">Это необходимо для вызова нового поля во внутреннем интерфейсе программы.</div>
	</div>

	<div class="form-group<?=Utils::pr($vars['invalid_fields']['title']) ? ' has-error' : '';?>">
		<label for="title">Заголовок<span title="Это обязательное поле.">&nbsp;*</span></label>
		<input
		 id="title"
		 class="form-control"
		 name="title"
		 type="text"
		 value="<?=Utils::pr($vars['sent_data']['title']);?>"
		 title="Введите Заголовок для этого Поля."
		 placeholder="Введите заголовок сюда"
		 onchange="confirmLeave('on');"
		 required
		 />
		<div class="help-block">Название нового Поля на панели администратора.</div>
	</div>

	<div class="form-group<?=Utils::pr($vars['invalid_fields']['description']) ? ' has-error' : '';?>">
		<label for="description">Описание</label>
		<input
		 id="description"
		 class="form-control"
		 name="description"
		 type="text"
		 value="<?=Utils::pr($vars['sent_data']['description']);?>"
		 title="Введите описание для этого поля."
		 placeholder="Введите описание сюда"
		 onchange="confirmLeave('on');"
		 />
		<div class="help-block">Описание нового Поля на панели администратора.</div>
	</div>

	<div class="form-group<?=Utils::pr($vars['invalid_fields']['required']) ? ' has-error' : '';?>">
		<input
		 name="required"
		 type="hidden"
		 value="off"
		 />

		<input
		 id="required"
		 class="magic-checkbox"
		 name="required"
		 type="checkbox"
		 title="Установите этот флажок, если поле необходимо для заполнения.."
		 onchange="confirmLeave('on');"
		 <?=Utils::pr($vars['sent_data']['required']) == 'on' ? 'checked' : '';?>
		 />

		<label
		 for="required"
		 title="Установите этот флажок, если поле необходимо для заполнения.."
		>
			Обязательное поле<span title="Это обязательное поле.">&nbsp;*</span>
		</label>
		<p class="help-block">Не работает для Групповых Полей.</p>
	</div>

	<div class="buttons">
		<?php echo Utils::render(
			'elements/button_blue.php',
			 array(
			 	'text' => 'Сохранить',
			 	'title' => Utils::pr($vars['save_btn_text'])
			 )
		); ?>
		<?php echo Utils::render(
			'elements/button_white.php',
			 array(
			 	'text' => 'Отмена',
			 	'title' => Utils::pr($vars['cancel_btn_text']),
			 	'url' => Utils::getLink('cms/')
			 )
		); ?>
	</div>

</form>
