<?php
/**
* Language file for auth error messages
*
*/

return [

    'account_already_exists' => 'An account with this email already exists.',
    'account_not_found' => 'Email or password is incorrect.',
    'account_email_not_found' =>'Email is incorrect.',
    'account_not_activated'  => 'This user account is not activated.',
    'account_suspended'      => 'User account suspended because of too many login attempts. Try again after [:delay] seconds',
    'account_banned'         => 'This user account is banned.',

    'signin' => [
        'error'   => 'There was a problem while trying to log you in, please try again.',
        'success' => 'You have successfully logged in.',
    ],

    'login' => [
        'error'   => 'There was a problem while trying to log you in, please try again.',
        'success' => 'You have successfully logged in.',
    ],

    'signup' => [
        'error'   => 'There was a problem while trying to create your account, please try again.',
        'success' => 'Account sucessfully created, Before proceeding you need to verify your account.',
    ],

        'forgot-password' => [
            'error'   => 'There was a problem while trying to get a reset password code, please try again.',
            'success' => 'Password recovery email successfully sent.',
        ],

        'forgot-password-confirm' => [
            'error'   => 'There was a problem while trying to reset your password, please try again.',
            'success' => 'Your password has been successfully reset.',
        ],

    'activate' => [
        'error'   => 'There was a problem while trying to activate your account, please try again.',
        'success' => 'Your account has been successfully activated.',
    ],

    'contact' => [
        'error'   => 'There was a problem while trying to submit the contact form, please try again.',
        'success' => 'Your contact details has been successfully sent. ',
    ],
];
