<?php defined('CORE') OR die('403'); ?>

<?php foreach($vars['fields'] as $alias => $field): ?>

	<?php
		$field['parents'] = Utils::pr($vars['parents'], array());
		$field['parents'][] = $alias;
		$field['name'] = Content::getNameAsString($field['parents']);
	?>

	<div class="form-group<?=Utils::pr($vars['invalid_fields'][$field['name']]) ? ' has-error' : '';?>">

		<?php if( $field['type'] == 'fields_group' ): ?>

			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="pull-right panel-controls">
						<a
						 class="group-controll js_move_field_up"
						 href="?moveFieldUp=<?=$field['name'];?>"
						 title="Переместить &laquo;<?=$field['title'];?>&raquo; наверх.">
							<img src="<?=Utils::getLink('assets/_cms/img/icon-up-white.png');?>" alt="Up">
						</a>
						<a
						 class="group-controll js_move_field_down"
						 href="?moveFieldDown=<?=$field['name'];?>"
						 title="Переместить &laquo;<?=$field['title'];?>&raquo; вниз.">
							<img src="<?=Utils::getLink('assets/_cms/img/icon-down-white.png');?>" alt="Down">
						</a>
						<a
						 class="group-controll"
						 href="<?=Utils::getLink('cms/edit-field/?name='.$field['name']);?>"
						 title="Редактировать Группу &laquo;<?=$field['title'];?>&raquo;.">
							<img src="<?=Utils::getLink('assets/_cms/img/icon-edit-white.png');?>" alt="Edit">
						</a>
						<a
						 class="group-controll"
						 href="<?=Utils::getLink('cms/copy-field/?name='.$field['name']);?>"
						 title="Копировать Группу &laquo;<?=$field['title'];?>&raquo;.">
							<img src="<?=Utils::getLink('assets/_cms/img/icon-copy-white.png');?>" alt="Copy">
						</a>
						<a
						 class="group-controll js_group_toggle"
						 href="?<?=Utils::pr($field['open'])?'closeGroup':'openGroup';?>=<?=$field['name'];?>"
						 title="Открыть/Закрыть Группу &laquo;<?=$field['title'];?>&raquo;.">
							<?php $src = Utils::pr($field['open']) ? Utils::getLink('assets/_cms/img/icon-collapse.png') : Utils::getLink('assets/_cms/img/icon-increase.png');?>
							<img
							 data-opened="<?=Utils::getLink('assets/_cms/img/icon-collapse.png');?>"
							 data-closed="<?=Utils::getLink('assets/_cms/img/icon-increase.png');?>"
							 src="<?=$src;?>"
							 alt="Switch">
						</a>
						<a
						 class="group-controll danger js_delete_field"
						 href="?delete=<?=$field['name'];?>"
						 title="Удалить Группу &laquo;<?=$field['title'];?>&raquo;."
						 data-confirm-title="Вы действительно хотите удалить Группу &laquo;<?=$field['title'];?>&raquo; ?">
							<img src="<?=Utils::getLink('assets/_cms/img/icon-delete-white.png');?>" alt="Delete">
						</a>
					</div>
					<h3 class="panel-title"><?=$field['title'];?></h3>
				</div>
				<div
				 id="<?=$field['name'];?>"
				 class="panel-body<?=Utils::pr($field['open'])?'':' hidden';?>">

					<?php
						$info['parents'] = $field['parents'];
						$info['fields'] = $field['output'];
						$info['invalid_fields'] = Utils::pr( $vars['invalid_fields'], array() );

						echo Utils::render(
							"fields/{$field['type']}.php",
							 $info
						);
					?>

				</div>
			</div>
			<p class="help-block"><?=$field['description'];?></p>

		<?php else: ?>

			<div class="pull-right panel-controls">
				<a
				 class="field-controll js_move_field_up"
				 href="?moveFieldUp=<?=$field['name'];?>"
				 title="Переместить Поле &laquo;<?=$field['title'];?>&raquo; наверх.">
					<img src="<?=Utils::getLink('assets/_cms/img/icon-up-black.png');?>" alt="Up">
				</a>
				<a
				 class="field-controll js_move_field_down"
				 href="?moveFieldDown=<?=$field['name'];?>"
				 title="Переместить Поле &laquo;<?=$field['title'];?>&raquo; вниз.">
					<img src="<?=Utils::getLink('assets/_cms/img/icon-down-black.png');?>" alt="Down">
				</a>
				<a
				 class="field-controll"
				 href="<?=Utils::getLink('cms/edit-field/?name='.$field['name']);?>"
				 title="Редактировать Поле &laquo;<?=$field['title'];?>&raquo;.">
					<img src="<?=Utils::getLink('assets/_cms/img/icon-edit-black.png');?>" alt="Edit">
				</a>
				<a
				 class="field-controll"
				 href="<?=Utils::getLink('cms/copy-field/?name='.$field['name']);?>"
				 title="Копировать Поле &laquo;<?=$field['title'];?>&raquo;.">
					<img src="<?=Utils::getLink('assets/_cms/img/icon-copy-black.png');?>" alt="Copy">
				</a>
				<a
				 class="field-controll danger js_delete_field"
				 href="?delete=<?=$field['name'];?>"
				 title="Удалить Поле &laquo;<?=$field['title'];?>&raquo;."
				 data-confirm-title="Do you want to delete &laquo;<?=$field['title'];?>&raquo; Field?">
					<img src="<?=Utils::getLink('assets/_cms/img/icon-delete-red.png');?>" alt="Delete">
				</a>
			</div>
			<?php
				if( isset($_POST[$field['name']]) )
				{
					$field['output'] = Utils::replaceQuotesInStr($_POST[$field['name']]);
				}

				$field['required_str'] = '';
				if( Utils::pr($field['required']) == 'on' )
				{
					$field['required_str'] = '<span title="Это обязательное Поле.">&nbsp;*</span>';
				}

				echo Utils::render(
					 "fields/{$field['type']}.php",
					  $field
				);
			?>
			<p class="help-block"><?=$field['description'];?></p>

		<?php endif; ?>

	</div>

<?php endforeach; ?>
