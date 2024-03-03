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
    'email' => [
        'title' => 'Actualiza tu correo electrónico',
        'updated' => 'Su dirección de correo electrónico ha sido actualizada.',
    ],
    'password' => [
        'title' => 'Cambia tu contraseña',
        'requirements' => 'Su nueva contraseña debe tener al menos 8 caracteres.',
        'updated' => 'Su contraseña ha sido actualizada.',
    ],
    'two_factor' => [
        'button' => 'Configurar la verificación en dos pasos',
        'disabled' => 'La verificación en dos pasos ha sido deshabilitada en su cuenta. Ya no se le pedirá que proporcione un token al iniciar sesión.',
        'enabled' => '¡Se ha habilitado la verificación en dos pasos en su cuenta! A partir de ahora, al iniciar sesión se te pedirá que proporciones el código generado por tu dispositivo.',
        'invalid' => 'El token proporcionado no era válido.',
        'setup' => [
            'title' => 'Configurar verificación en dos pasos',
            'help' => '¿No puedes escanear el código? Introduce el siguiente código en su aplicación:',
            'field' => 'Introducir token',
        ],
        'disable' => [
            'title' => 'Deshabilitar la verificación en dos pasos',
            'field' => 'Introducir token',
        ],
    ],
];
