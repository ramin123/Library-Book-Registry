<?php
/**
 * Language file for role error/success messages
 */

return [

    'role_exists'        => 'El grupo ya existe!',
    'role_not_found'     => 'El grupo [:id] no existe.',
    'role_name_required' => 'El campo nombre es requerido',
    'users_exists'        => 'El grupo contiene usuarios, no puede ser borrado',

    'success' => [
        'create' => 'El grupo fué creado correctamente.',
        'update' => 'El grupo fué actualizado correctamente.',
        'delete' => 'El grupo fué borrado correctamente.',
    ],

    'delete' => [
        'create' => 'Hubo un problema al crear el grupo. Intente nuevamente',
        'update' => 'Hubo un problema al actualizar el grupo. Intente nuevamente',
        'delete' => 'Hubo un problema al borrar el grupo. Intente nuevamente',
    ],

    'error' => [
        'role_exists' => 'Ya hay un grupo con ese nombre, los nombres de grupo deben ser únicos.',
    ],

];
