<?php

/**
 * Landing CMS
 *
 * A simple CMS for Landing Pages.
 *
 * @package    Landing CMS
 * @author     Ilia Chernykh <landingcms@yahoo.com>
 * @copyright  2017, Landing CMS (https://github.com/Elias-Black/Landing-CMS)
 * @license    https://opensource.org/licenses/LGPL-2.1  LGPL-2.1
 * @version    Release: 0.0.6
 * @link       https://github.com/Elias-Black/Landing-CMS
 */

defined('CORE') OR die('403');

// Messages for User Class
$MESSAGE['user:invalid_password']		= 'Неверный пароль.';
$MESSAGE['user:invalid_data']			= 'Неверные данные.';
$MESSAGE['user:all_fields_required']	= 'Все поля обязательны для заполнения.';
$MESSAGE['user:passwords_not_match']	= 'Пароль и Подтверждение пароля не совпадают.';
$MESSAGE['user:create_password']		= 'Создайте пароль';
$MESSAGE['user:saved_successfully']		= 'Пароль успешно сохранён.';

// Messages for DB Class
$MESSAGE['db:not_readable_password_db']	= 'Невозможно прочитать из базы данных паролей. Проверьте разрешения у <a href="%s" target="_blank">этого</a> помощника.';
$MESSAGE['db:not_writable_password_db']	= 'Невозможно записать в базу данных паролей. Проверьте разрешения у <a href="%s" target="_blank">этого</a> помощника.';

$MESSAGE['db:not_readable_private_db']	= 'Невозможно прочитать из Частной базы данных. Проверьте разрешения у <a href="%s" target="_blank">этого</a> помощника.';
$MESSAGE['db:not_writable_private_db']	= 'Невозможно записать в Частную базы данных. Проверьте разрешения у <a href="%s" target="_blank">этого</a> помощника.';

$MESSAGE['db:not_writable_public_db']	= 'Невозможно записать в общедоступную базу данных. Проверьте разрешения у <a href="%s" target="_blank">этого</a> помощника.';

$MESSAGE['db:saved_successfully']		= 'Сохранено успешно.';

// Messages for Content Class
$MESSAGE['content:required_field']					= 'Поле &laquo;%s&raquo; обязательно для заполнения.';
$MESSAGE['content:required_fields']					= 'Поля "Родитель", "Тип", "Псевдоним" и "Заголовок" обязательны для заполнения.';
$MESSAGE['content:required_field_tip']				= 'Это обязательное поле.';
$MESSAGE['content:reserved_alias']					= 'Псевдоним не может содержать это слово <a href="http://php.net/manual/en/reserved.variables.php" target="_blank">Здесь</a> большинство запрещенных слов.';
$MESSAGE['content:forbidden_alias']					= 'Псевдоним содержить запрещенное поле.';
$MESSAGE['content:alias_has_separator']				= 'Псевдоним не может содержать это слово.';
$MESSAGE['content:invalid_alias_string']			= 'Некорректный Псевдоним. Имена псевдонимов следуют тем же  <a href="http://php.net/manual/en/language.variables.basics.php" target="_blank">правилам</a>, что и и имена переменных в PHP.';
$MESSAGE['content:invalid_alias']					= 'Некорректный Псевдоним.';
$MESSAGE['content:parent_is_absent']				= 'Этот Родитель отсутствует.';
$MESSAGE['content:invalid_parent']					= 'Недействительный родитель.';
$MESSAGE['content:parent_already_has_the_child']	= 'У Родителя уже есть дочерний элемент от этого псевдонима.';
$MESSAGE['content:copying_info']					= 'Чтобы продолжить копирование поля, укажите другой Родитель или Псевдоним, чтобы не создавать дубликат.';

// Messages for Controllers
$MESSAGE['edit_c:page_header']	= 'Редактирование полей.';
$MESSAGE['edit_c:save_btn']		= 'Сохранить изменения поля.';
$MESSAGE['edit_c:cancel_btn']	= 'Отменить изменения поля.';

$MESSAGE['copy_c:page_header']	= 'Копирование поля.';
$MESSAGE['copy_c:save_btn']		= 'Сохранить и добавить скопированное поле.';
$MESSAGE['copy_c:cancel_btn']	= 'Отменить копирование поля.';

$MESSAGE['add_c:page_header']	= 'Добавление нового поля';
$MESSAGE['add_c:save_btn']		= 'Сохраните и добавьте новое поле.';
$MESSAGE['add_c:cancel_btn']	= 'Отмена добавления нового поля.';

// Messages for Templates
$MESSAGE['template:leave_prevention']	= 'Вы хотите покинуть эту страницу с несохраненными Полями?';
