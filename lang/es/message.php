<?php
/**
 * Language file for item error/success messages
 *
 */

return [

    'exists'        => 'El Registro ya existe!',
    '_not_found'     => 'El Registro [:id] no existe.',
    '_name_required' => 'El campo nombre es requerido',

    'success' => [
        'create' => 'El Registro fué creado correctamente.',
        'update' => 'El Registro fué actualizado correctamente.',
        'delete' => 'El Registro fué borrado correctamente.',
    ],

    'delete' => [
        'create' => 'Hubo un problema creando el Registro. Intente nuevamente.',
        'update' => 'Hubo un problema actualizando el Registro. Intente nuevamente.',
        'delete' => 'Hubo un problema borrando Registro. Intente nuevamente.',
    ],

    'error' => [
        'item_exists' => 'Existe un Registro con ese nombre, el nombre debe ser único por Registro.',
    ],

];
