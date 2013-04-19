<?php
/*
|--------------------------------------------------------------------------
| Ionize Connect library Language file
|
| This lang file can be replaced by a theme one.
| Simply copy this file in the folder /themes/your_theme/language/xx/
| and modify the translations elements.
|
|--------------------------------------------------------------------------
*/

// Main library language elements
$lang['connect_login_failed'] = 'The login information you provided could not be authenticated. Either the username or the password you entered are wrong. Please try again.';
$lang['connect_access_denied'] = 'You have been denied access to %s';
$lang['connect_missing_parameters']	= 'The parameter(s) %s was missing';
$lang['connect_parameter_error'] = 'The parameter passed to %s is wrong.';
$lang['connect_user_save_impossible'] = 'We were not able to save your data into our system, please try again or contact us.';
$lang['connect_user_already_exists'] = 'There is already a user existing in our system with the same data. Please try to use another username or email address.';
$lang['connect_blocked'] = 'You have been blocked because of too many failed login, please try again %s';
$lang['connect_cannot_ban_yourself'] = 'You cannot ban yourself.';
$lang['connect_register_success'] = 'You have successfully registered.';
$lang['connect_register_success_verify_user'] = 'You have successfully registered but we must verify your data. An e-mail has been sent to you, please check it and click the activation link in the message to activate your account.';

// Activation mail to Admin
$lang['connect_admin_mail_subject'] = 'Регистрация';
$lang['connect_admin_mail_title'] = 'Регистрация';
$lang['connect_admin_mail_intro'] = 'Зарегистрированный пользователь на сайте.';
$lang['connect_admin_mail_nom'] = 'Имя';
$lang['connect_admin_mail_login'] = 'логин';
$lang['connect_admin_mail_email'] = 'Email';
$lang['connect_admin_mail_activation_link'] = 'Ссылка активации';

// Activation mail to User
$lang['connect_user_mail_subject'] = 'Ваша регистрация';
$lang['connect_user_mail_activated'] = 'Аккаунт активирован';
$lang['connect_act_user_mail_title'] = 'Добро пожаловать!';
$lang['connect_act_user_mail_intro'] = 'Вы зарегистрировались на нашем сайте.';
$lang['connect_act_user_mail_text'] = 'Чтобы подтвердить вашу регистрацию, нажмите на ссылку активации.';
$lang['connect_act_user_mail_activation_link'] = 'Ссылка активации';

// Registration confirmation mail to User
$lang['connect_wait_user_mail_title'] = 'Добро пожаловать!';
$lang['connect_wait_user_mail_intro'] = 'Зарегистрированный пользователь на сайте.';
$lang['connect_wait_user_mail_text'] = 'Ваш аккаунт будет активирован администратором в ближайшее время.';

// Registration views
$lang['connect_user_registration_title'] = 'Регистрация завершена';
$lang['connect_user_registration_message'] = 'В письме вы получите инструкции по дальнейшей активации аккаунта.';

// Activation views
$lang['connect_home_page'] = 'Главная страница';
$lang['connect_activation_title'] = 'Аккаунт активирован';
$lang['connect_user_activated_message'] = 'Ваш аккаут активирован.<br/>Вы можете войти с главной страницы';
$lang['connect_user_activated_error'] = 'Something went wrong with the account you are trying to activate. Maybe have you already activated it, or maybe are you using the wrong informations? Try to login with your account informations, or verify the email we\'ve sent to you and try again.';

$lang['connect_admin_activated_message'] = 'This account is activated now.<br/>A mail was just sent to the user to inform him.';
$lang['connect_admin_activated_error'] = 'Something went wrong with the account you are trying to activate.Maybe have you already activated it, or maybe are you using the wrong informations?';

