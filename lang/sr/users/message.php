<?php
/**
* Language file for user error/success messages
*
*/

return [

    'user_exists'              => 'Korisnik ve? postoji!',
    'user_not_found'           => 'Korisnik [:id] ne postoji.',
    'user_login_required'      => 'Prijava je neuspje�na, poku�ajte ponovno',
    'user_password_required'   => 'Lozinka je obavezna',
    'insufficient_permissions' => 'Zabrane psristupa.',
    'banned'              => 'banovan',
    'suspended'             => 'suspendovan',

    'success' => [
        'create'    => 'Korisnik je uspje�no kreiran.',
        'update'    => 'Korisnik je uspje�no izmjenjen.',
        'delete'    => 'Korisnik je uspje�no obrisan.',
        'ban'       => 'Korisnik je uspje�no banovan.',
        'unban'     => 'Korisnik je uspje�no debanovan.',
        'suspend'   => 'Korisnik je uspje�no suspendovan.',
        'unsuspend' => 'Korisnik je uspje�no desuspendovan.',
        'restored'  => 'Korisnik je uspje�no vra?en.'
    ],

    'error' => [
        'create'    => 'Desila se gre�ka prilikom stvaranja korisnika. Poku�ajte kasnije.',
        'update'    => 'Desila se gre�ka prilikom izmjene korisnika. Poku�ajte kasnije.',
        'delete'    => 'Desila se gre�ka prilikom brisanja korisnika. Poku�ajte kasnije.',
        'unsuspend' => 'Desila se gre�ka prilikom povratka iz ssuspenzije korisnika. Poku�ajte kasnije.'
    ],

];
