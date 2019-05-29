<?php defined('CORE') OR die('403'); ?>

<label for="<?=$vars['name'];?>"><?=$vars['title'];?><?=$vars['required_str'];?></label>

<input
 id="<?=$vars['name'];?>"
 class="form-control"
 name="<?=$vars['name'];?>"
 type="text"
 value="<?=$vars['output'];?>"
 title="Введите текст для Поля &laquo;<?=$vars['title'];?>&raquo; сюда."
 placeholder="Введите текст сюда"
 onchange="confirmLeave('on');"
 />
 