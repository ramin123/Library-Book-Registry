<?php
/**
 * Language file for item error/success messages
 *
 */

return [

    'exists'        => 'Item bestaat al!',
    '_not_found'     => 'Item [:id] bestaat niet.',
    '_name_required' => 'Het veld naam is vereist',

    'success' => [
        'create' => 'Item is succesvol gemaakt.',
        'update' => 'Item is succesvol geüpdatet',
        'delete' => 'Item is succesvol verwijderd.',
    ],

    'delete' => [
        'create' => 'Er was een probleem met het maken van het item. Probeer het opnieuw.',
        'update' => 'Er was een probleem met het updaten van het item. Probeer het opnieuw.',
        'delete' => 'Er was een probleem met het verwijderen van het item. Probeer het opnieuw.',
    ],

    'error' => [
        'item_exists' => 'Een item met die naam bestaat al, alle items moeten een unieke naam hebben.',
    ],

];
