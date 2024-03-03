<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'El :attribute debe ser aceptado.',
    'active_url' => 'El :attribute no es una URL válida.',
    'after' => 'El :attribute debe ser una fecha posterior a :date.',
    'after_or_equal' => 'El :attribute debe ser una fecha posterior o igual a:date.',
    'alpha' => 'El :attribute sólo puede contener letras.',
    'alpha_dash' => 'El :attribute sólo puede contener letras, números y guiones.',
    'alpha_num' => 'El :attribute sólo puede contener letras y números.',
    'array' => 'El :attribute debe ser una matriz.',
    'before' => 'El :attribute debe ser una fecha anterior a :date.',
    'before_or_equal' => 'El :attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'numeric' => 'El :attribute debe estar entre :min y :max.',
        'file' => 'El :attribute debe estar entre:min y :max kilobytes.',
        'string' => 'El :attribute debe estar entre :min y :max characters.',
        'array' => 'El :attribute debe tener entre :min y :max items.',
    ],
    'boolean' => 'El :attribute debe ser verdadero o falso.',
    'confirmed' => 'El :attribute la confirmación no coincide.',
    'date' => 'El :attribute no es una fecha válida.',
    'date_format' => 'El :attribute no coincide con el formato :format.',
    'different' => 'El :attribute y :other debe ser diferente.',
    'digits' => 'El :attribute debe ser de :digits dígitos.',
    'digits_between' => 'El :attribute debe estar entre :min y :max dígitos.',
    'dimensions' => 'El :attribute tiene dimensiones de imagen no válidas.',
    'distinct' => 'El :attribute campo tiene un valor duplicado.',
    'email' => 'El :attribute debe ser a valid email address.',
    'exists' => 'El :attribute seleccionado es inválido.',
    'file' => 'El :attribute debe ser un archivo.',
    'filled' => 'El :attribute campo es requerido.',
    'image' => 'El :attribute debe ser una imagen.',
    'in' => 'El :attribute seleccionado es inválido.',
    'in_array' => 'El :attribute campo no existe en :other.',
    'integer' => 'El :attribute debe ser un número entero',
    'ip' => 'El :attribute debe ser una dirección IP válida.',
    'json' => 'El :attribute debe ser una cadena JSON válida.',
    'max' => [
        'numeric' => 'El :attribute no puede ser mayor que :max.',
        'file' => 'El :attribute no puede ser mayor que :max kilobytes.',
        'string' => 'El :attribute no puede ser mayor que :max caracteres.',
        'array' => 'El :attribute no puede tener más de :max elementos.',
    ],
    'mimes' => 'El :attribute debe ser un archivo de tipo: :values.',
    'mimetypes' => 'El :attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'numeric' => 'El :attribute al menos debe ser :min.',
        'file' => 'El :attribute al menos debe ser :min kilobytes.',
        'string' => 'El :attribute al menos debe ser :min caracteres.',
        'array' => 'El :attribute debe tener al menos :min elementos.',
    ],
    'not_in' => 'El :attribute seleccionado es inválido.',
    'numeric' => 'El :attribute must be a number.',
    'present' => 'El :attribute field must be present.',
    'regex' => 'El :attribute format is invalid.',
    'required' => 'El :attribute field is required.',
    'required_if' => 'El :attribute field is required when :other is :value.',
    'required_unless' => 'El :attribute field is required unless :other is in :values.',
    'required_with' => 'El :attribute field is required when :values is present.',
    'required_with_all' => 'El :attribute field is required when :values is present.',
    'required_without' => 'El :attribute field is required when :values is not present.',
    'required_without_all' => 'El :attribute field is required when none of :values are present.',
    'same' => 'El :attribute and :other must match.',
    'size' => [
        'numeric' => 'El :attribute must be :size.',
        'file' => 'El :attribute must be :size kilobytes.',
        'string' => 'El :attribute must be :size characters.',
        'array' => 'El :attribute must contain :size items.',
    ],
    'string' => 'El :attribute must be a string.',
    'timezone' => 'El :attribute must be a valid zone.',
    'unique' => 'El :attribute has already been taken.',
    'uploaded' => 'El :attribute failed to upload.',
    'url' => 'El :attribute format is invalid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

    // Internal validation logic for Pterodactyl
    'internal' => [
        'variable_value' => ':env variable',
        'invalid_password' => 'La contraseña no es válida.',
    ],
];
