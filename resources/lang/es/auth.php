<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Pagination Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the paginator library to build
    | the simple pagination links. You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    | TRANSLATED BY JAIE55
    | https://github.com/Jaie55
    */

    'sign_in' => 'Iniciar sesión',
    'go_to_login' => 'Ir a Iniciar sesión',
    'failed' => 'No se pudo encontrar ninguna cuenta que coincida con esas credenciales.',

    'forgot_password' => [
        'label' => '¿Has olvidado tu contraseña?',
        'label_help' => 'Ingrese la dirección de correo de su cuenta para recibir instrucciones sobre cómo restablecer su contraseña.',
        'button' => 'Recuperar cuenta',
    ],

    'reset_password' => [
        'button' => 'Restablecer e iniciar sesión',
    ],

    'two_factor' => [
        'label' => 'Verificación en dos pasos',
        'label_help' => 'Esta cuenta requiere de verificación en dos pasos para poder continuar. Ingresa el código generado por su dispositivo.',
        'checkpoint_failed' => 'El token de verificación en dos pasos no es válido.',
    ],

    'throttle' => 'Demasiados intentos de inicio de sesión. Por favor inténtalo de nuevo en :seconds segundos.',
    'password_requirements' => 'La contraseña debe tener al menos 8 caracteres y debe ser exclusiva de este sitio.',
    '2fa_must_be_enabled' => 'El administrador ha requerido que la verificación en dos pasos esté habilitada para poder utilizar el panel.',
];
