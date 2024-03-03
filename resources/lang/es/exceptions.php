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

    'daemon_connection_failed' => 'Hubo una excepción al intentar comunicarse con el servidor, lo que generó un código de respuesta HTTP/:code. Esta excepción se ha registrado.',
    'node' => [
        'servers_attached' => 'Un nodo no debe tener servidores vinculados a él para poder ser eliminado.',
        'daemon_off_config_updated' => 'La configuración del servidor <strong>se ha actualizado</strong>, sin embargo, se encontró un error al intentar actualizar automáticamente el archivo de configuración en el servidor. Deberá actualizar manualmente el archivo de configuración (config.yml) para que el servidor aplique estos cambios.',
    ],
    'allocations' => [
        'server_using' => 'Actualmente hay un servidor asignado. Una asignación solo se puede eliminar si no hay ningún servidor asignado actualmente.',
        'too_many_ports' => 'No se admite agregar más de 1000 puertos en un solo rango a la vez.',
        'invalid_mapping' => 'La asignación proporcionada para :port no era válida y no se pudo procesar.',
        'cidr_out_of_range' => 'La notación CIDR sólo permite máscaras entre /25 y /32.',
        'port_out_of_range' => 'Los puertos en una asignación deben ser mayores que 1024 y menores o iguales a 65535.',
    ],
    'nest' => [
        'delete_has_servers' => 'Un nido con servidores activos conectados no se puede eliminar del panel.',
        'egg' => [
            'delete_has_servers' => 'Un huevo con servidores activos adjuntos no se puede eliminar del panel.',
            'invalid_copy_id' => 'El huevo seleccionado para copiar un script no existe o está copiando un script en sí.',
            'must_be_child' => 'La directiva "Copiar configuración de" para este huevo debe ser una opción secundaria para el nido seleccionado.',
            'has_children' => 'Este huevo es padre de uno o más huevos. Elimine esos huevos antes de eliminar este.',
        ],
        'variables' => [
            'env_not_unique' => 'La variable de entorno: nombre debe ser exclusiva de este huevo.',
            'reserved_name' => 'La variable de entorno: nombre está protegida y no se puede asignar a una variable.',
            'bad_validation_rule' => 'La regla de validación ":rule" no es una regla válida para esta aplicación.',
        ],
        'importer' => [
            'json_error' => 'Se produjo un error al intentar analizar el archivo JSON: :error.',
            'file_error' => 'El archivo JSON proporcionado no era válido.',
            'invalid_json_provided' => 'El archivo JSON proporcionado no tiene un formato que pueda reconocerse.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'No se permite editar su propia cuenta de subusuario.',
        'user_is_owner' => 'No puede agregar al propietario del servidor como subusuario para este servidor.',
        'subuser_exists' => 'Un usuario con esa dirección de correo electrónico ya está asignado como subusuario para este servidor.',
    ],
    'databases' => [
        'delete_has_databases' => 'No se puede eliminar un servidor host de base de datos que tenga bases de datos activas vinculadas.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'El intervalo de tiempo máximo para una tarea encadenada es de 15 minutos.',
    ],
    'locations' => [
        'has_nodes' => 'No se puede eliminar una ubicación que tenga nodos activos asociados.',
    ],
    'users' => [
        'node_revocation_failed' => 'No se pudieron revocar las claves en <a href=":link">Nodo #:node</a>. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'No se pudieron encontrar nodos que cumplieran los requisitos especificados para la implementación automática.',
        'no_viable_allocations' => 'No se encontraron asignaciones que cumplieran los requisitos para el despliegue automático.',
    ],
    'api' => [
        'resource_not_found' => 'El recurso solicitado no existe en este servidor.',
    ],
];
