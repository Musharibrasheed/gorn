<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => 'These credentials do not match our records.',
    'password' => 'The provided password is incorrect.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',

    'account_already_exists' => 'An account with this email already exists.',
    'account_not_found'      => 'Username or password is incorrect.',
    'account_not_activated'  => 'This user account is not activated, please verify your email by clicking on the link sent through email.',
    'account_suspended'      => 'User account suspended because of too many login attempts. Try again after [:delay] seconds',
    'account_banned'         => 'This user account is banned.',

    'signin' => array(
        'error'   => 'There was a problem while trying to log you in, please try again.',
        'success' => 'You have successfully logged in.',
    ),

    'signup' => array(
        'error'   => 'There was a problem while trying to create your account, please try again.',
        'success' => 'Account sucessfully created.',
    ),

        'forgot-password' => array(
            'error'   => 'There was a problem while trying to get a reset password code, please try again.',
            'sent'          => 'We have already sent a reset password link.',
            'success' => 'Password recovery email successfully sent.',
        ),

        'forgot-password-confirm' => array(
            'error'   => 'There was a problem while trying to reset your password, please try again.',
            'success' => 'Your password has been successfully reset.',
        ),

    'activate' => array(
        'error'   => 'There was a problem while trying to activate your account, please try again.',
        'success' => 'Your account has been successfully activated.',
    ),

];
