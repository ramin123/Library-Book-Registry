<?php
/**
* Language file for role error/success messages
*
*/

return [

    'role_exists'        => 'Role already exists!',
    'role_not_found'     => 'Role [:id] does not exist.',
    'role_name_required' => 'The name field is required',
    'users_exists'        => 'Role contains users, role can not be deleted',

    'success' => [
        'create' => 'Role was successfully created.',
        'update' => 'Role was successfully updated.',
        'delete' => 'Role was successfully deleted.',
    ],

    'delete' => [
        'create' => 'There was an issue creating the role. Please try again.',
        'update' => 'There was an issue updating the role. Please try again.',
        'delete' => 'There was an issue deleting the role. Please try again.',
    ],

    'error' => [
        'role_exists' => 'A role already exists with that name, names must be unique for roles.',
        'role_role_exists' => 'Another role with same slug exists, please choose another name',
        'no_role_exists' => 'No Role exists with that id.',

    ],

];
