<?php

$lang = array();

/*
|--------------------------------------------------------------------------
| General
|--------------------------------------------------------------------------
*/
$lang['title_ionize_installation'] = 		'Установка';

$lang['title_system_check'] = 		'Результаты проверки системы';
$lang['title_database_settings'] = 	'Настройки БД';
$lang['title_user_account'] = 	'Настройка администратора';
$lang['title_default_language'] = 	'Язык по умолчанию';
$lang['title_sample_data'] = 	'Установить пример сайта?';

$lang['button_next_step'] = 		'Следущий шаг';
$lang['button_skip_next_step'] = 	'Пропустить & Далее';
$lang['button_save_next_step'] = 	'Сохранить & Далее';
$lang['button_install_test_data'] = 	"Установить тестовые данные";
$lang['button_start_migrate'] = 		'Начать миграцию БД';

$lang['nav_check'] = 'Система';
$lang['nav_db'] = 'База данных';
$lang['nav_settings'] = 'Настройка';
$lang['nav_end'] = 'Финиш';
$lang['nav_data'] = 'Демо данные';


/*
|--------------------------------------------------------------------------
| System check
|--------------------------------------------------------------------------
*/
$lang['php_version'] = 			'PHP >= 5';
$lang['php_version_found'] = 	'Версия PHP';
$lang['mysql_support'] = 		'Поддержка MySQL';
$lang['mysql_version_found'] = 	'Версия MySQL';
$lang['file_uploads'] = 		'Загрузка файлов';
$lang['mcrypt'] = 				'Библиотека PHP Mcrypt';
$lang['gd_lib'] = 				'Библиотека PHP GD';
$lang['write_config_dir'] = 	'<b>/application/config/</b>';
$lang['write_files'] = 			'<b>/files/*</b>';
$lang['write_themes'] = 		'<b>/themes/*</b>';
$lang['config_check_errors'] = 	'Некоторые параметры не соответствуют требуемым.<br/>Пожалуйста, измените это.';
$lang['welcome_text'] = 		"<p>Добро пожаловать! Этот мастер поможет вам установить Ionize.</p>";
$lang['write_check_text'] = 	"<p>Следующим папкам и файлам требуется разрешение на запись...</p>";
$lang['title_folder_check'] = 	"Следующим папкам требуется разрешение на запись";
$lang['title_files_check'] = 	"Следующим файлам требуется разрешение на запись";

/*
|--------------------------------------------------------------------------
| Database
|--------------------------------------------------------------------------
*/
$lang['database_driver'] = 			'Драйвер';
$lang['database_hostname'] = 		'Хост';
$lang['database_name'] = 			'БД';
$lang['database_username'] = 		'Пользователь';
$lang['database_password'] = 		'Пароль';
$lang['database_create'] = 			'Создать БД';
$lang['title_database_create'] = 	'Создание БД';
$lang['db_create_text'] = 			"<p>Ionize установит или произведет миграцию вашей БД:</p><p><b class=\"highlight\">Новая установка</b>: БД будет создана с новыми таблицами<br/><b class=\"highlight2\">Обновление</b>: Следующий шаг проверит и обновит то, что нужно</p>";
$lang['db_create_prerequisite'] = 			"Пользователю нужны права на создание БД.<br/>Если БД существует, проверка не нужна.";
$lang['database_error_missing_settings'] = 	'Вы пропустили что-то.<br/>Заполните все поля !';
$lang['database_success_install'] = 		'<b class="ex">База данных, успешно установлена.</b>';
$lang['database_success_install_no_settings_needed'] = 		'<b class="ex">БД ОК.</b><br/>БД уже существует, шаг настройки веб-сайта будет пропущен.';
$lang['database_success_migrate'] = 		'<b class="ex">База данных обновлена.</b>';
$lang['database_error_coud_not_connect'] = 		'Подключение к БД с указанными данными не выполнено.';
$lang['database_error_database_dont_exists'] = 		"База данных не существует!";
$lang['database_error_writing_config_file'] = 		"<b>Ошибка:</b><br/>Файл <b style=\"color:#000;\">/application/config/database.php</b> недоступен для записи!<br/>Проверьте права доступа.";
$lang['database_error_coud_not_write_database'] = 		"<b>Ошибка :</b><br/> Невозможно записать данные в базу данных.<br/>Проверьте права доступа к БД.";
$lang['database_error_coud_not_create_database'] = "Программа установки не может создать базу данных. Проверьте имя базы данных или ваши права";
$lang['database_error_no_ionize_tables'] = 			"БД которую вы выбрали, возможно, не является БД Ionize. Проверьте еще раз.";
$lang['database_error_no_users_to_migrate'] = 		"Нет пользователей для апгрейда";
$lang['database_migration_from'] = 			'БД требуется обновление.<br/>Обновить с версии: ';
$lang['database_migration_text'] = 		"<p class=\"error\"><b>ЗАМЕЧАНИЕ:</b><br/> БД будет обновлена.<b><br/>Сделайте бекап БД до обновления.</p>";


/*
|--------------------------------------------------------------------------
| Settings
|--------------------------------------------------------------------------
*/
$lang['lang_code'] = 		'Код (2 симв.)';
$lang['lang_name'] = 		'Метка';
$lang['settings_default_lang_title'] = 		'Язык по умолчанию';
$lang['settings_default_lang_text'] = 		'Вашему веб сайту требуется язык по умолчанию.<br/>Вы можете посетить <a target="_blank" href="http://en.wikipedia.org/wiki/ISO_639-1">страницу ISO 639-1 Википедии</a> для получения информации о кодах.';
$lang['settings_error_missing_lang_code'] = "Код язык является обязательным";
$lang['settings_error_missing_lang_name'] = "Код язык является обязательным";
$lang['settings_error_lang_code_2_chars'] = "Код язык должен быть на 2 символов. Пример : \"ru\"";
$lang['settings_error_write_rights'] = "Нет прав записи к файлу <b>/application/config/language.php</b>. Проверьте права и попробуйте снова.";
$lang['settings_error_write_rights_config'] = "Нет прав записи к файлу <b>/application/config/config.php</b>. Проверьте права и попробуйте снова.";
$lang['settings_error_admin_url'] = "URL админ-панели должен содержать только буквы и цифры, без пробелов и специальных символов";
$lang['settings_admin_url_title'] = 		'URL админ-панели';
$lang['settings_admin_url_text'] = 		'Настоятельно рекомендуется изменить.';
$lang['admin_url'] = 'Admin URL';

/*
|--------------------------------------------------------------------------
| User
|--------------------------------------------------------------------------
*/
$lang['user_introduction'] = 	'Вы сможете входить в админ-панель используя пользователя, которого создадите на этом шаге.';
$lang['username'] = 			'Логин (мин. 4 симв.)';
$lang['screen_name'] = 			'Полное имя';
$lang['email'] = 				'Email';
$lang['password'] = 			'Пароль (мин. 4 симв.)';
$lang['password2'] = 			'Подтвердите пароль';
$lang['user_error_missing_settings'] = 			'Пожалуйста, заполните все поля !';
$lang['user_error_not_enough_char'] = 			'Логин или пароль должны быть больше 4 символов!';
$lang['user_error_email_not_valid'] = 			'Email введен не верно, попробуйте еще раз.';
$lang['user_error_passwords_not_equal'] = 		'Пароль и подтверждение не совпадают.';
$lang['user_info_admin_exists'] = 		'Администратор существует в базе.<br/>Вы можете пропустить этот шаг, если не хотите создавать или обновлять учетную запись администратора.';
$lang['encryption_key'] = 			'Ключ шифрования';
$lang['encryption_key_text'] = 		"Ionize требуется ключ шифрования 128 бит.<br />Этот ключ защитит кофиденциальную информацию.<br/>Он будет записан в файл <b>/application/config/config.php</b>.";
$lang['no_encryption_key_found'] = 	"Ключ шифрования не найден. Учетная запись пользователя не перенесена. <b>Вы должны создать нового Администратора</b>.";


/*
|--------------------------------------------------------------------------
| Data
|--------------------------------------------------------------------------
*/
$lang['data_install_intro'] = 	"<p>Если вы устанавливаете Ionize первый раз, мы настоятельно рекомендуем установить образец сайта.<br/>Сайт включает : </p><ul><li>Полный набор данных, полезных для тестирования Ionize,</li><li>1 тему оформления</li></ul>";
$lang['title_skip_this_step'] = "Пропустить этот шаг";

$lang['title_finish'] = 		'Установка завершена';
$lang['finish_text'] = 			'<b>ВАЖНО</b>: <br/>Вы должны удалить папку "<b>/install</b>" вручную, до того, как перейдете к сайту или админ-панели.';
$lang['button_go_to_admin'] = 	'Перейти в админ-панель';
$lang['button_go_to_site'] = 	'Перейти к сайту';
