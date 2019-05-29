<?php defined('CORE') OR die('403'); ?>

<input
 name="<?=$vars['name'];?>"
 type="hidden"
 value="off"
 />

<input
 id="<?=$vars['name'];?>"
 class="magic-checkbox"
 name="<?=$vars['name'];?>"
 type="checkbox"
 title="Выберите значения для Поля &laquo;<?=$vars['title'];?>&raquo;."
 onchange="confirmLeave('on');"
 <?=($vars['output'] == 'on') ? 'checked' : '';?>
 />

<label
 for="<?=$vars['name'];?>"
 title="Выберите значения для Поля &laquo;<?=$vars['title'];?>&raquo;."
>
	<?=$vars['title'];?><?=$vars['required_str'];?>
</label>
