<?php
/**
 * Language file for role error/success messages
 */

return [

    'role_exists'        => 'Gruppe existiert bereits!',
    'role_not_found'     => 'Gruppe [: id] ist nicht vorhanden.',
    'role_name_required' => 'Der Feldname ist erforderlich',
    'users_exists'        => 'Gruppe enthält Benutzer! Die Gruppe kann nicht gelöscht werden',

    'success' => [
        'create' => 'Gruppe wurde erfolgreich erstellt.',
        'update' => 'Gruppe wurde erfolgreich aktualisiert.',
        'delete' => 'Gruppe wurde erfolgreich gelöscht.',
    ],

    'delete' => [
        'create' => 'Es gab ein Probelm beim erstellen der Gruppe. Bitte versuchen Sie es nocheinmal.',
        'update' => 'Es gab ein Probelm beim aktualisieren der Gruppe. Bitte versuchen Sie es nocheinmal.',
        'delete' => 'Es gab ein Probelm beim löschen der Gruppe. Bitte versuchen Sie es nocheinmal..',
    ],

    'error' => [
        'role_exists' => 'Eine Gruppe mit diesem Namen existiert bereits, bitte verwenden Sie ein anderen Gruppennamen.',
    ],

];
