<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Register spatie permission service provider?
    |--------------------------------------------------------------------------
    | Set this value to true to register Spatie\Permission\PermissionServiceProvider.
    | Remember to manually register the service provider in your config/app.php file
    | if this value is set to false.
    |
    */
    'register_spatie_permission_service_provider' => true,

    /*
    |--------------------------------------------------------------------------
    | Register Laravel passport service provider?
    |--------------------------------------------------------------------------
    | Set this value to true to register Laravel\Passport\PassportServiceProvider.
    | Remember to manually register the service provider in your config/app.php
    | file if this value is set to false.
    |
    */
    'register_laravel_passport_service_provider' => true,

    /*
    |--------------------------------------------------------------------------
    | Register Acacha Stateful Service Provider?
    |--------------------------------------------------------------------------
    | Set this value to true to register Acacha\Stateful\Providers\StatefulServiceProvider.
    | Remember to manually register the service provider in your config/app.php file if
    | this value is set to false.
    |
    */

    'register_acacha_stateful_service_provider' => true,

    /*
    |--------------------------------------------------------------------------
    | Register Google Service Provider?
    |--------------------------------------------------------------------------
    | Set this value to true to register PulkitJalan\Google\GoogleServiceProvider::class.
    | Remember to manually register the service provider in your config/app.php file if
    | this value is set to false and you want Google API support.
    |
    */
    'register_google_service_provider' => true,

    /*
    |-------------------------------------------------------------------------------------------------
    | Register Acacha  Stateful Service Provider?
    |-------------------------------------------------------------------------------------------------
    | This option will make public user invitations functionality so unauthenticated and unprivileged
    | users can invite other users.
    |
    | This functionallity is protected by rate limiting.
    */

    'users_can_invite_other_users' => true,

    /*
    |-------------------------------------------------------------------------------------------------
    | Users Migration source database connection
    |-------------------------------------------------------------------------------------------------
    | The connection name of source database connection name.
    |
    */

    'source_database_connection_name' => 'ebre_escool',

   /*
   |-------------------------------------------------------------------------------------------------
   | Google Apps/Suite domain.
   |-------------------------------------------------------------------------------------------------
   | The Google Apps/Suite domain.
   |
   */

    'google_apps_domain' => env('GOOGLE_APPS_DOMAIN', 'iesebre.com'),

    /*
   |-------------------------------------------------------------------------------------------------
   | Google apps admin user email
   |-------------------------------------------------------------------------------------------------
   | The Google Apps admin user email used to access to Google Apps.
   |
   */

    'google_apps_admin_user_email' => env('GOOGLE_APPS_ADMIN_USER_EMAIL', 'sergitur@iesebre.com'),

    /*
    |-------------------------------------------------------------------------------------------------
    | Google apps user email used to check connection to Google Apps.
    |-------------------------------------------------------------------------------------------------
    | The Google Apps user email used to check connection to Google Apps.
    |
    */

    'google_apps_user_email_to_check_connection' =>
        env('GOOGLE_APPS_USER_EMAIL_TO_CHECK_CONNECTION', 'stur@iesebre.com'),

    /*
    |-------------------------------------------------------------------------------------------------
    | Google apps users per page.
    |-------------------------------------------------------------------------------------------------
    | Google apps default value for users for page when paginating.
    |
    */

    'google_apps_users_per_page' => 15,

    /*
    |-------------------------------------------------------------------------------------------------
    | Google apps users max results per page.
    |-------------------------------------------------------------------------------------------------
    | Google apps max results per page. Be careful Google Apps doesn't not allow more than 500
    |
    */

    'google_apps_users_maxResults' => 500,
];
