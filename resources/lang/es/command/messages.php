<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 * TRANSLATED BY JAIE55
 * https://github.com/Jaie55
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'location' => [
        'no_location_found' => 'No se pudo encontrar un registro que coincida con el código corto proporcionado',
        'ask_short' => 'Código corto de ubicación',
        'ask_long' => 'Descripción de la ubicación',
        'created' => 'Creó exitosamente una nueva ubicación (:name) con una identificación de :id.',
        'deleted' => 'Eliminó con éxito la ubicación solicitada.',
    ],
    'user' => [
        'search_users' => 'Ingrese un nombre de usuario, ID de usuario o dirección de correo electrónico',
        'select_search_user' => 'ID del usuario a eliminar (Pulsa \'0\' para volver a buscar)',
        'deleted' => 'Usuario eliminado exitosamente del panel.',
        'confirm_delete' => '¿Está seguro de que desea eliminar este usuario del panel?',
        'no_users_found' => 'No se encontraron usuarios para el término de búsqueda proporcionado.',
        'multiple_found' => 'Se encontraron varias cuentas para el usuario proporcionado y no se pudo eliminar un usuario debido al indicador --no-interaction.',
        'ask_admin' => '¿Este usuario es administrador?',
        'ask_email' => 'Email Address',
        'ask_username' => 'Nombre de usuario',
        'ask_name_first' => 'Nombre',
        'ask_name_last' => 'Apellido',
        'ask_password' => 'Contraseña',
        'ask_password_tip' => 'Si desea crear una cuenta con una contraseña aleatoria enviada por correo electrónico al usuario, vuelva a ejecutar este comando (CTRL+C) y pase el indicador `--no-password`.',
        'ask_password_help' => 'Las contraseñas deben tener al menos 8 caracteres y contener al menos una letra mayúscula y un número.',
        '2fa_help_text' => [
            'Este comando deshabilitará la verificación en dos pasos para la cuenta de un usuario si está habilitada. Esto solo debe usarse como comando de recuperación de cuenta si el usuario no puede acceder a su cuenta.',
            'Si esto no es lo que quería hacer, presione CTRL+C para salir de este proceso.',
        ],
        '2fa_disabled' => 'La verificación en dos pasos ha sido desactivada para :email.',
    ],
    'schedule' => [
        'output_line' => 'Despachando trabajo para la primera tarea en `:schedule` (:hash).',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Borrando el archivo de copia de seguridad :file.',
    ],
    'server' => [
        'rebuild_failed' => 'Solicitud de reconstrucción para ":name" (#:id) o nodo ":node" falló con error: :message',
        'reinstall' => [
            'failed' => 'Solicitud de reinstalación de ":name" (#:id) en nodo ":node" falló con error: :message',
            'confirm' => 'Está a punto de realizar una reinstalación en un grupo de servidores. ¿Desea continuar?',
        ],
        'power' => [
            'confirm' => 'Está a punto de realizar una :action contra :count servidores. ¿Desea continuar?',
            'action_failed' => 'Solicitud de acción para ":name" (#:id) en nodo ":node" falló con error: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'Host SMTP (e.j. smtp.gmail.com)',
            'ask_smtp_port' => 'Puerto SMTP',
            'ask_smtp_username' => 'Usuario SMTP',
            'ask_smtp_password' => 'Contraseña SMTP',
            'ask_mailgun_domain' => 'Dominio Mailgun',
            'ask_mailgun_secret' => 'Secreto Mailgun',
            'ask_mandrill_secret' => 'Mandrill Secret',
            'ask_postmark_username' => 'Postmark API Key',
            'ask_driver' => '¿Qué controlador se debe utilizar para enviar correos electrónicos?',
            'ask_mail_from' => 'Dirección de correo desde la cual se originan',
            'ask_mail_name' => 'Nombre que debería de aparecer en los correos electrónicos',
            'ask_encryption' => 'Método de cifrado a utilizar',
        ],
        'database' => [
            'host_warning' => 'Se recomienda encarecidamente no utilizar "localhost" como host de su base de datos, ya que hemos visto frecuentes problemas de conexión de socket. Si desea utilizar una conexión local, debe utilizar "127.0.0.1".',
            'host' => 'Host de la base de datos',
            'port' => 'Puerto de la base de datos',
            'database' => 'Nombre de la base de datos',
            'username_warning' => 'El uso de la cuenta "root" para conexiones MySQL no sólo está muy mal visto, sino que esta aplicación tampoco lo permite. Necesitará haber creado un usuario de MySQL para este software.',
            'username' => 'Nombre de usuario de la base de datos',
            'password_defined' => 'Parece que ya tienes definida una contraseña de conexión MySQL, ¿te gustaría cambiarla?',
            'password' => 'Contraseña de la base de datos',
            'connection_error' => 'No se puede conectar al servidor MySQL usando las credenciales proporcionadas. El error devuelto fue ":error".',
            'creds_not_saved' => 'Sus credenciales de conexión NO se han guardado. Deberá proporcionar información de conexión válida antes de continuar.',
            'try_again' => '¿Volver e intentarlo de nuevo?',
        ],
        'app' => [
            'settings' => '¿Habilitar el editor de configuración basado en UI?',
            'author' => 'Correo electrónico del autor del huevo',
            'author_help' => 'Proporcione la dirección de correo electrónico de donde deben ser los huevos exportados por este panel. Esta debe ser una dirección de correo electrónico válida.',
            'app_url_help' => 'La URL de la aplicación DEBE comenzar con https:// o http:// dependiendo de si está utilizando SSL o no. Si no incluye el esquema, sus correos electrónicos y otro contenido se vincularán a la ubicación incorrecta.',
            'app_url' => 'URL de la aplicación',
            'timezone_help' => 'La zona horaria debe coincidir con una de las zonas horarias admitidas por PHP. Si no está seguro, consulte http://php.net/manual/en/timezones.php.',
            'timezone' => 'Zona horaria de la aplicación',
            'cache_driver' => 'Controlador de caché',
            'session_driver' => 'Conductor de sesión',
            'queue_driver' => 'Conductor de cola',
            'using_redis' => 'Ha seleccionado el controlador Redis para una o más opciones. Proporcione información de conexión válida a continuación. En la mayoría de los casos, puede utilizar los valores predeterminados proporcionados a menos que haya modificado su configuración.',
            'redis_host' => 'Host Redis',
            'redis_password' => 'Contraseña Redis',
            'redis_pass_help' => 'De forma predeterminada, una instancia del servidor Redis no tiene contraseña, ya que se ejecuta localmente y es inaccesible para el mundo exterior. Si este es el caso, simplemente presione Enter sin ingresar ningún valor.',
            'redis_port' => 'Puerto Redis',
            'redis_pass_defined' => 'Parece que ya hay una contraseña definida para Redis. ¿Le gustaría cambiarla?',
        ],
    ],
];
