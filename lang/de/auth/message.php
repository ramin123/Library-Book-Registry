<?php
/**
* Language file for auth error messages
*
*/

return [

    'account_already_exists' => 'Ein Konto mit dieser E-Mail ist bereits vorhanden.',
    'account_not_found'      => 'Benutzer Email nicht bekannt.',
    'account_not_activated'  => 'Dieses Benutzerkonto ist nicht aktiviert.',
    'account_suspended'      => 'Zu viele Anmeldeversuche. Versuchen Sie es erneut in [:delay] Sekunden',
    'account_banned'         => 'Dieses Benutzerkonto ist gesperrt.',

    'signin' => [
        'error'   => 'Es gab ein Problem beim Einloggen, bitte versuchen Sie es erneut.',
        'success' => 'Sie haben sich erfolgreich eingeloggt.',
    ],

    'login' => [
        'error'   => 'Es gab ein Problem beim Einloggen, bitte versuchen Sie es erneut.',
        'success' => 'Sie haben sich erfolgreich eingeloggt.',
    ],

    'signup' => [
        'error'   => 'Benutzerkonto konnte nicht erstellt werden, bitte versuchen Sie es erneut.',
        'success' => 'Benutzerkonto erfolgreich erstellt.',
    ],

        'forgot-password' => [
            'error'   => 'Es gab ein Problem beim Senden Ihres Passwort Code, bitte versuchen Sie es erneut.',
            'success' => 'Passwort-Wiederherstellung E-Mail erfolgreich gesendet.',
        ],

        'forgot-password-confirm' => [
            'error'   => 'Es gab ein Problem beim zurücksetzen Ihres Passworts, bitte versuchen Sie es erneut.',
            'success' => 'Ihr Passwort wurde erfolgreich zurückgesetzt.',
        ],

    'activate' => [
        'error'   => 'Es gab ein Problem beim aktivieren Ihres Benutzerkonto, bitte versuchen Sie es erneut.',
        'success' => 'Ihr Benutzerkonto wurde erfolgreich aktiviert.',
    ],

    'contact' => [
        'error'   => 'Es gab ein Problem mit dem Kontakt Formular, bitte versuchen Sie es erneut.',
        'success' => 'Ihre Kontaktdaten wurde erfolgreich gesendet.',
    ],
];
