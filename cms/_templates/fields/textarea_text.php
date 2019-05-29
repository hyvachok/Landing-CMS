<?php defined('CORE') OR die('403'); ?>

<label for="<?=$vars['name'];?>"><?=$vars['title'];?><?=$vars['required_str'];?></label>

<textarea
 id="<?=$vars['name'];?>"
 class="form-control"
 name="<?=$vars['name'];?>"
 rows="7"
 title="Введите текст для Поля &laquo;<?=$vars['title'];?>&raquo; сюда."
 placeholder="Введите текст сюда"
 onchange="confirmLeave('on');"><?=$vars['output'];?></textarea>
 