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
    'permissions' => [
        'websocket_*' => 'Permite el acceso al websocket de este servidor.',
        'control_console' => 'Permite al usuario enviar datos a la consola del servidor.',
        'control_start' => 'Permite al usuario iniciar la instancia del servidor.',
        'control_stop' => 'Permite al usuario detener la instancia del servidor.',
        'control_restart' => 'Permite al usuario reiniciar la instancia del servidor.',
        'control_kill' => 'Permite al usuario eliminar la instancia del servidor.',
        'user_create' => 'Permite al usuario crear nuevas cuentas de usuario para el servidor.',
        'user_read' => 'Permite al usuario permiso para ver los usuarios asociados con este servidor.',
        'user_update' => 'Permite al usuario modificar otros usuarios asociados a este servidor.',
        'user_delete' => 'Permite al usuario eliminar otros usuarios asociados con este servidor.',
        'file_create' => 'Permite al usuario permiso para crear nuevos archivos y directorios.',
        'file_read' => 'Permite al usuario ver archivos y carpetas asociados con esta instancia de servidor, así como ver su contenido.',
        'file_update' => 'Permite al usuario actualizar archivos y carpetas asociados con el servidor.',
        'file_delete' => 'Permite al usuario eliminar archivos y directorios.',
        'file_archive' => 'Permite al usuario crear archivos comprimidos y descomprimir archivos existentes.',
        'file_sftp' => 'Permite al usuario realizar las acciones de archivos anteriores utilizando un cliente SFTP.',
        'allocation_read' => 'Permite el acceso a las páginas de gestión de asignación de servidores.',
        'allocation_update' => 'Permite permiso al usuario para realizar modificaciones en las asignaciones del servidor.',
        'database_create' => 'Permite permiso al usuario para crear una nueva base de datos para el servidor.',
        'database_read' => 'Permite permiso al usuario para ver las bases de datos del servidor.',
        'database_update' => 'Permite que un usuario tenga permiso para realizar modificaciones en una base de datos. Si el usuario tampoco tiene el permiso "Ver contraseña", no podrá modificar la contraseña.',
        'database_delete' => 'Permite que un usuario tenga permiso para eliminar una instancia de base de datos.',
        'database_view_password' => 'Permite que un usuario tenga permiso para ver la contraseña de una base de datos en el sistema.',
        'schedule_create' => 'Permite a un usuario crear una nueva programación para el servidor.',
        'schedule_read' => 'Permite que un usuario tenga permiso para ver los horarios de un servidor.',
        'schedule_update' => 'Permite que un usuario tenga permiso para realizar modificaciones en la programación de un servidor existente.',
        'schedule_delete' => 'Permite a un usuario eliminar una programación para el servidor.',
    ],
];
