<?php
/**
* Language file for auth error messages
*
*/

return [

    'account_already_exists' => 'Een account met dit e-mail adres bestaat al.',
    'account_not_found'      => 'Gebruikersnaam en/of wachtwoord zijn incorrect.',
    'account_not_activated'  => 'Dit gebruikersaccount is nog niet geactiveerd.',
    'account_suspended'      => 'Dit gebruikersaccount is geschorts, omdat er teveel foutieve aanmeld pogingen zijn gedaan. Probeer het over [:delay] seconden opnieuw',
    'account_banned'         => 'Dit gebruikersaccount is verband.',

    'signin' => [
        'error'   => 'Er is een probleem voortgekomen toen u probeerde in te loggen. Probeer het nogmaals.',
        'success' => 'U bent succesvol ingelogd.',
    ],

    'signup' => [
        'error'   => 'Er is een probleem voortgekomen toen uw account gemaakt werd. Probeer het nogmaals.',
        'success' => 'Uw account is met succes gemaakt.',
    ],

        'forgot-password' => [
            'error'   => 'Er is een probleem voortgekomen tijdens het verkrijgen van de token voor het resetten van uw wachtwoord. Probeer het nogmaals.',
            'success' => 'Wachtwoord herstel e-mail succesvol verstuurd.',
        ],

        'forgot-password-confirm' => [
            'error'   => 'Er is een probleem voortgekomen tijdens het resetten van uw wachtwoord. Probeer het nogmaals.',
            'success' => 'Uw wachtwoord is met succes gereset.',
        ],

    'activate' => [
        'error'   => 'Er is een probleem voortgekomen tijdens het activeren van uw account. Probeer het nogmaals.',
        'success' => 'Uw account is succesvol geactiveerd.',
    ],

];
