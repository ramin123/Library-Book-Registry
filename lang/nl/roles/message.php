<?php
/**
 * Language file for role error/success messages
 */

return [

    'role_exists'        => 'Groep bestaat al!',
    'role_not_found'     => 'Groep met [:id] bestaat niet.',
    'role_name_required' => 'Veldnaam moet ingevuld worden!',
    'users_exists'        => 'Deze groep bevat gebruikers en kan niet verwijdert worden.',

    'success' => [
        'create' => 'Groep is succesvol gemaakt.',
        'update' => 'Groep is succesvol geüpdatet.',
        'delete' => 'Groep is succesvol verwijderd.',
    ],

    'delete' => [
        'create' => 'Er is een fout voortgekomen tijdens het maken van de groep. Probeer het nogmaals.',
        'update' => 'Er is een fout voortgekomen tijdens het updaten van de groep. Probeer het nogmaals.',
        'delete' => 'Er is een fout voortgekomen tijdens het verwijderen van de groep. Probeer het nogmaals.',
    ],

    'error' => [
        'role_exists' => 'Een groep met deze naam bestaat al. Alle groepnamen moeten uniek zijn.',
    ],

];
