<?php
/**
 * Language file for role error/success messages
 */

return [

    'role_exists'        => 'Rolee déja existant!',
    'role_not_found'     => "Le rolee [:id] n'existe pas.",
    'role_name_required' => 'Le champ nom est requis',
    'users_exists'        => 'Ce rolee contient des utilisateurs, il ne peut pas être supprimé',

    'success' => [
        'create' => 'Le rolee a bien été crée.',
        'update' => 'Le blog a bien été mis à jour.',
        'delete' => 'Le blog a bien été supprimé.',
    ],

    'delete' => [
        'create' => 'Il y a eu un problème lors de la création du rolee. Merci de réessayer.',
        'update' => 'Il y a eu un problème lors de la mise à jour du rolee. Merci de réessayer.',
        'delete' => 'Il y a eu un problème lors de la suppréssion du rolee. Merci de réessayer.',
    ],

    'error' => [
        'role_exists' => 'Un rolee avec ce nom existe déja, les noms doivent être uniques pour les rolees.',
    ],

];
