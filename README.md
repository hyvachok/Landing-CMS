**Больше не поддерживается**
**Это только перевод, оригинальная Landing CMS находится [здесь](https://github.com/Elias-Black/Landing-CMS "здесь")**

# Landing CMS
Простая CMS для Landing Pages.

**v0.0.6** Осторожно! Пока это альфа-версия.

### Привет, чуваки!
Я написал эту CMS для себя и хочу поделиться ею со всеми.
Landing CMS - это простой инструмент для управления страницами. Он не использует никаких баз данных. Все данные хранятся в текстовых файлах. Вам нужен только веб-сервер с PHP 5.2 или новее (поддержка 7 и 7.3)!!

[![Donate](https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=QGKZW29YXRDCL)

---

### Установка
Для использования CMS необходимо скопировать все файлы из этого репозитория в корневую директорию вашего сайта. Далее вам нужны права на конфигурирование.

Для проверки конфигураций можно воспользоваться помощником: открыть`https://your_site.com/install.php`
![Помощник по установке](https://github.com/Elias-Black/Landing-CMS/blob/gh-pages/screenshots/installation.png"Помощник по установке")

Вы должны установить 777 разрешение для загрузки и для папок БД:
- assets/\_cms/uploads/tinymce/source/
- assets/\_cms/uploads/tinymce/thumbs/
- cms/\_db/

Если помощник показал, что все сделано, перейдите на панель Admin: `https://your_site.com/cms/`

Теперь вам нужно создать свой пароль.
![Создание пароля](https://github.com/Elias-Black/Landing-CMS/blob/gh-pages/screenshots/creating-password.png "Создание пароля")

**Все готово!**Вы можете создать свое первое поле и использовать его в своем коде..
![Добро пожаловать в Landing CMS](https://github.com/Elias-Black/Landing-CMS/blob/gh-pages/screenshots/clean-cms.png "Добро пожаловать в Landing CMS")

***

### Как пользоваться
На панели Администрирования можно создавать поля с 7 различными форматами:
- Строка (String)
- Многострочный текст (Multiple line text)
- Поле WYSIWYG (WYSIWYG Field)
- Чекбокс (Checkbox)
- Цветовая палитра (Color Picker)
- Загрузчик файлов (File Uploader)
- Группа полей (Group of Fields)

При создании поля вам необходимо ввести Псевдоним.
![Добавление нового Поля](https://github.com/Elias-Black/Landing-CMS/blob/gh-pages/screenshots/adding-field.png "Добавление нового Поля")

Заполненная панель администратора будет выглядеть следующим образом
![Заполненная CMS](https://github.com/Elias-Black/Landing-CMS/blob/gh-pages/screenshots/filled-cms.png "Заполненная CMS")

Затем, когда вы захотите использовать ваши поля в своих файлах, вам нужно подключить контроллер к вашему файлу..

**Пример:**
```php
<?php

// Соединение с публичным контроллером
require_once('assets/controller.php');

?>

<html>
  ...
```
### Текст
Вы можете вызывать свои Поля (Fields) с помощью Алиасов (Alias).

**Пример:**

```php
<html>
  <head>
    <title><?=$get['title'];?></title>
    ...
```

![Демонстрационная страница](https://github.com/Elias-Black/Landing-CMS/blob/gh-pages/screenshots/demo-page.png "Демонстрационная страница")
### Checkbox
Если Вы хотите использовать чекбокс, необходимо изменить его значение на 'on'.

**Пример:**
```php
<body>

...

  <?php if($get['maintenance_mode'] == 'on'): ?>
    <h1>Попробуйте еще раз позднее</h1>
  <?php else: ?>
    <h1>Привет, Мир!</h1>
  <?php endif; ?>

...

</body>
```

### Группы
Если Вы создали группу, то можете вызвать из неё необходимые элементы.

**Пример:**
```php
<p>
   <?=$get['main_group']['item1'];?>
</p>
```

Вы так же можете перебирать все элементы групп. (Подгрупп и Полей).

**Пример:**
```php
<?php foreach($get['main_group'] as $name => $item): ?>
   <ul>
      <li><b><?=$name;?>:</b> <?=$item;?>;</li>
   </ul>
<?php endforeach; ?>
```

### Модули
Если Вам необходимо использовать модули, Вы можете создать их в папке `modules`. Для использования собственных Полей (Fields) в своих модулях следует подключить базу данных до подключения этих модулей.

**Пример:**
```php
<?php

// Соединение с публичным контроллером
require_once('assets/controller.php');

// Подключение модуля
require_once('modules/rand_num.php');

?>

  <html>
    <head>

  ...

  <b>Модуль случайных чисел:</b> <?=$rand_num;?>

  ...
```

Так что... На мой взгляд, этой функциональности достаточно для всех страниц.
Если вы так не думаете, вы можете развить мой проект или предложить мне некоторые функции);
***

### Сочетания клавиш
Для ускорения работы с CMS можно использовать следующие горячие клавиши:
-`special-key` + `s` - сохранить;
- `special-key` + `n` - новое Поле (Field);
- `special-key` + `z` - отмена;

Вы можете найти специальные клавиши для вашего браузера. [здесь](https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/accesskey "accesskey - HTML: HyperText Markup Language | MDN").

### Языки
Вы можете перевести CMS на любые языки. Как это сделать:
- Перейти в `cms/_lang`;
- Создайте папку с именем языка, например `en`;
- В новой папке создайте `main.php` файл;
- Заполните `main.php` файл по аналогии с `cms/_lang/en/main.php`;
- Обновите константу `LANGUAGE` в файле `cms/_classes/utils.class.php` с именем языкового каталога;

### To do

v 0.0.7:

- Fix Color Picker and File Uploader for IE9;
- Add Security Key to Responsive File Manager;
- Add JS-less accessebility for File Uploader;
- Fix Ghost Bug for Color Picker (sometimes just does not work);
- Add supporting RGB/RGBA/HEX to Color Picker;

v 1.0:

- Add Admin icon to frontend;
- Add Plugins support
- Add Drag'n'Drop for Groups and Fields sorting;

v 2.0

- Add Pages;

***

### Благодарности
- [TinyMCE](https://github.com/tinymce/tinymce "TinyMCE project on GitHub.") for the WYSIWYG editor;
- [Responsive File Manager](http://www.responsivefilemanager.com/ "Responsive File Manager site.") for TinyMCE external filemanager;
- [Tovic / color-picker](https://github.com/tovic/color-picker "A simple color picker plugin written in pure JavaScript, for modern browsers.") for the Color Picker;
- [Forsigner / magic-check](https://github.com/forsigner/magic-check "Beautify Radio and Checkbox with pure CSS.") for beautiful Checkboxes;
- [Bootstrap](https://github.com/twbs/bootstrap "Bootstrap project on GitHub.") for Admin panel styles.
