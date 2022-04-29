<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults   验证默认值
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |   该选项控制应用程序的默认身份验证“守卫”和密码重置选项。 您可以根据需要更改这些默认值，但对于大多数应用程序来说，它们是一个完美的开始。
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards     身份验证警卫
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |   接下来，可以为应用程序定义每个身份验证保护。 当然，这里已经为您定义了一个很棒的默认配置，它使用会话存储和Eloquent用户提供者
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |   所有身份验证驱动程序都有一个用户提供者。 这定义了如何从数据库或此应用程序用于持久化用户数据的其他存储机制中实际检索用户。
    | Supported: "session"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers    用户服务提供商
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |   所有身份验证驱动程序都有一个用户提供者。 这定义了如何从数据库或此应用程序用于持久化用户数据的其他存储机制中实际检索用户。
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |   如果你有多个用户表或模型，你可以配置多个表示每个模型/表的源。 然后可以将这些源分配给您定义的任何额外的身份验证保护。
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords       重置密码
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |   如果应用程序中有多个用户表或模型，并且希望基于特定的用户类型拥有单独的密码重置设置，则可以指定多个密码重置配置。
    | The expire time is the number of minutes that each reset token will be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |   过期时间是每个重置令牌被认为有效的分钟数。 这个安全特性使Token保持较短时间，因此它们被猜测的时间更少。 您可以根据需要更改它。
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout     密码确认超时
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | times out and the user is prompted to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |   在这里，您可以定义密码确认超时和用户被提示通过确认屏幕重新输入密码之前的秒数。 默认，超时时间为3小时。
    */

    'password_timeout' => 10800,

];
