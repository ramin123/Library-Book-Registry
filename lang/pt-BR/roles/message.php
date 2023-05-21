<?php
/**
 * Language file for role error/success messages
 */

return [

    'role_exists'        => 'O grupo já Existe!',
    'role_not_found'     => 'O Grupo [:id] não Existe.',
    'role_name_required' => 'O campo Nome é obrigatório',
    'users_exists'        => 'O grupo contém usuários, não pode ser apagado',

    'success' => [
        'create' => 'Grupo criado com sucesso.',
        'update' => 'Grupo atualizado com sucesso.',
        'delete' => 'Grupo apagado com sucesso.',
    ],

    'delete' => [
        'create' => 'Houve um erro ao criar o Grupo. Por favor, tente novamente.',
        'update' => 'Houve um erro ao atualizar o Grupo. Por favor, tente novamente.',
        'delete' => 'Houve um erro ao apagar o Grupo. Por favor, tente novamente.',
    ],

    'error' => [
        'role_exists' => 'Um grupo ja existe com esse nome, nomes devem ser únicos para os Grupos.',
    ],

];
