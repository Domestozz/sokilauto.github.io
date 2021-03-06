<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.2.0.352
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Отправка Question Form',
	'heading' => 'Отправка новой формы',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Отмечено',
		'checkbox_unchecked' => 'Флажок не установлен',
		'submitted_from' => 'Формы, отправленные с веб-сайта: %s',
		'submitted_by' => 'IP-адрес посетителя: %s',
		'too_many_submissions' => 'Недопустимо высокое количество отправок с этого IP-адреса за последнее время',
		'failed_to_send_email' => 'Не удалось отправить сообщение эл. почты',
		'invalid_reCAPTCHA_private_key' => 'Недействительный закрытый ключ reCAPTCHA.',
		'invalid_field_type' => 'Неизвестный тип поля \'%s\'.',
		'invalid_form_config' => 'Недопустимая конфигурация поля \"%s\".',
		'unknown_method' => 'Неизвестный метод запроса сервера'
	),
	'email' => array(
		'from' => 'andriysokil.wm@gmail.com',
		'to' => 'andriysokil.wm@gmail.com'
	),
	'fields' => array(
		'custom_U342' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Ваше ім\'я',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Ваше ім\'я\' не может быть пустым.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Ваш електронний адрес',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Ваш електронний адрес\' не может быть пустым.',
				'format' => 'Поле \'Ваш електронний адрес\' содержит недействительное сообщение эл. почты.'
			)
		),
		'custom_U334' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Повідомлення',
			'required' => false,
			'errors' => array(
			)
		)
	)
);

process_form($form);
?>
