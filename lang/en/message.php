<?php
/**
 * Language file for item error/success messages
 *
 */

return [

    'exists'        => 'Item already exists!',
    '_not_found'     => 'Item [:id] does not exist.',
    '_name_required' => 'The name field is required',

    'success' => [
        'create' => 'Item was successfully created.',
        'update' => 'Item was successfully updated.',
        'delete' => 'Item was successfully deleted.',
    ],

    'delete' => [
        'create' => 'There was an issue creating the Item. Please try again.',
        'update' => 'There was an issue updating the Item. Please try again.',
        'delete' => 'There was an issue deleting the Item. Please try again.',
    ],

    'error' => [
        'item_exists' => 'An Item already exists with that name, names must be unique for Items.',
    ],

];
