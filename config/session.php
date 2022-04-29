<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Session Driver    默认Session驱动
    |--------------------------------------------------------------------------
    |
    | This option controls the default session "driver" that will be used on
    | requests. By default, we will use the lightweight native driver but
    | you may specify any of the other wonderful drivers provided here.
    |   此选项控制将根据请求使用的默认会话“驱动程序”。 默认情况下，我们将使用轻型本机驱动程序，但您可以指定此处提供的其他任何出色驱动程序。
    | Supported: "file", "cookie", "database", "apc",
    |            "memcached", "redis", "dynamodb", "array"
    |
    */

    'driver' => env('SESSION_DRIVER', 'file'),

    /*
    |--------------------------------------------------------------------------
    | Session Lifetime      Session生命周期配置
    |--------------------------------------------------------------------------
    |
    | Here you may specify the number of minutes that you wish the session
    | to be allowed to remain idle before it expires. If you want them
    | to immediately expire on the browser closing, set that option.
    |   在这里，您可以指定希望会话在到期之前保持空闲时间的分钟数。 如果您希望它们立即在浏览器关闭上过期，请设置该选项。
    */

    'lifetime' => env('SESSION_LIFETIME', 120),

    'expire_on_close' => false,

    /*
    |--------------------------------------------------------------------------
    | Session Encryption    会话加密配置
    |--------------------------------------------------------------------------
    |
    | This option allows you to easily specify that all of your session data
    | should be encrypted before it is stored. All encryption will be run
    | automatically by Laravel and you can use the Session like normal.
    |   此选项使您可以轻松地指定所有会话数据在存储之前应进行加密。 所有加密将由Laravel自动运行，您可以像正常情况一样使用会话。
    */

    'encrypt' => false,

    /*
    |--------------------------------------------------------------------------
    | Session File Location     会话文件位置
    |--------------------------------------------------------------------------
    |
    | When using the native session driver, we need a location where session
    | files may be stored. A default has been set for you but a different
    | location may be specified. This is only needed for file sessions.
    |   使用本机会话驱动程序时，我们需要一个可以存储会话文件的位置。 已为您设置默认值，但可以指定不同的位置。 这仅是文件会话。
    */

    'files' => storage_path('framework/sessions'),

    /*
    |--------------------------------------------------------------------------
    | Session Database Connection   会话数据库连接
    |--------------------------------------------------------------------------
    |
    | When using the "database" or "redis" session drivers, you may specify a
    | connection that should be used to manage these sessions. This should
    | correspond to a connection in your database configuration options.
    |   使用“数据库”或“redis”会话驱动程序时，您可以指定应用于管理这些会话的连接。 这应该对应于数据库配置选项中的连接。
    */

    'connection' => env('SESSION_CONNECTION', null),

    /*
    |--------------------------------------------------------------------------
    | Session Database Table    会话数据表
    |--------------------------------------------------------------------------
    |
    | When using the "database" session driver, you may specify the table we
    | should use to manage the sessions. Of course, a sensible default is
    | provided for you; however, you are free to change this as needed.
    |   使用“数据库”会话驱动程序时，您可以指定我们应该使用的表来管理会话。 当然，为您提供明智的默认值； 但是，您可以根据需要自由更改此操作。
    */

    'table' => 'sessions',

    /*
    |--------------------------------------------------------------------------
    | Session Cache Store   会话缓存存储
    |--------------------------------------------------------------------------
    |
    | While using one of the framework's cache driven session backends you may
    | list a cache store that should be used for these sessions. This value
    | must match with one of the application's configured cache "stores".
    |   在使用框架的一个缓存驱动的后端之一时，您可能会列出应用于这些会话的缓存存储。 该值必须与应用程序配置的缓存“存储”之一匹配。
    | Affects: "apc", "dynamodb", "memcached", "redis"
    |
    */

    'store' => env('SESSION_STORE', null),

    /*
    |--------------------------------------------------------------------------
    | Session Sweeping Lottery
    |--------------------------------------------------------------------------
    |
    | Some session drivers must manually sweep their storage location to get
    | rid of old sessions from storage. Here are the chances that it will
    | happen on a given request. By default, the odds are 2 out of 100.
    |   一些会话驱动程序必须手动扫描其存储位置，以摆脱存储的旧会话。 这是它会在给定请求中发生的机会。 默认情况下，概率是百分之二。
    */

    'lottery' => [2, 100],

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Name   Cookie名称
    |--------------------------------------------------------------------------
    |
    | Here you may change the name of the cookie used to identify a session
    | instance by ID. The name specified here will get used every time a
    | new session cookie is created by the framework for every driver.
    |   在这里，您可以更改用于通过ID识别会话实例的cookie的名称。 每次为每个驱动程序创建新的会话cookie时，此处指定的名称都会使用。
    */

    'cookie' => env(
        'SESSION_COOKIE',
        Str::slug(env('APP_NAME', 'laravel'), '_').'_session'
    ),

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Path   Cookie路径
    |--------------------------------------------------------------------------
    |
    | The session cookie path determines the path for which the cookie will
    | be regarded as available. Typically, this will be the root path of
    | your application but you are free to change this when necessary.
    |   会话cookie路径确定将视为可用的cookie的路径。 通常，这将是您应用程序的根路径，但是您可以在必要时自由更改此路径。
    */

    'path' => '/',

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Domain
    |--------------------------------------------------------------------------
    |
    | Here you may change the domain of the cookie used to identify a session
    | in your application. This will determine which domains the cookie is
    | available to in your application. A sensible default has been set.
    |   在这里，您可以更改用于标识应用程序中的会话的cookie域。 这将确定您的应用程序中可用于哪些cookie。 设置了明智的默认值。
    */

    'domain' => env('SESSION_DOMAIN', null),

    /*
    |--------------------------------------------------------------------------
    | HTTPS Only Cookies
    |--------------------------------------------------------------------------
    |
    | By setting this option to true, session cookies will only be sent back
    | to the server if the browser has a HTTPS connection. This will keep
    | the cookie from being sent to you when it can't be done securely.
    |   通过将此选项设置为true，只有在浏览器具有HTTPS连接的情况下，Session Cookie才会被发送回服务器。 当无法安全地完成时，这将使cookie无法发送给您。
    */

    'secure' => env('SESSION_SECURE_COOKIE'),

    /*
    |--------------------------------------------------------------------------
    | HTTP Access Only
    |--------------------------------------------------------------------------
    |
    | Setting this value to true will prevent JavaScript from accessing the
    | value of the cookie and the cookie will only be accessible through
    | the HTTP protocol. You are free to modify this option if needed.
    |   将此值设置为true将防止JavaScript访问Cookie的值，而Cookie只能通过HTTP协议访问。 如果需要，您可以自由修改此选项。
    */

    'http_only' => true,

    /*
    |--------------------------------------------------------------------------
    | Same-Site Cookies
    |--------------------------------------------------------------------------
    |
    | This option determines how your cookies behave when cross-site requests
    | take place, and can be used to mitigate CSRF attacks. By default, we
    | will set this value to "lax" since this is a secure default value.
    |   此选项确定您的cookie在发生跨站点请求时的行为方式，并且可以用于减轻CSRF攻击。 默认情况下，我们将将此值设置为“ LAX”，因为这是一个安全的默认值。
    | Supported: "lax", "strict", "none", null
    |
    */

    'same_site' => 'lax',

];
