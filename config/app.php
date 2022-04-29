<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name 应用名称
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |   该值是应用程序的名称。 当框架需要将应用程序的名称放置在通知中或应用程序或其包所需的任何其他位置时，使用此值。
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment  应用环境
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |   这个值决定了应用程序当前运行的“环境”。 这可能决定您希望如何配置应用程序利用的各种服务。 在你的".env"文件进行设置。
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode  应用调试模式
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |   当应用程序处于调试模式时，将在应用程序中发生的每个错误上显示带有堆栈跟踪的详细错误消息。 如果禁用，将显示一个简单的通用错误页面。
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL 生成应用访问链接
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |   当使用Artisan命令行工具时，控制台使用这个URL来正确地生成URL。 您应该将其设置为应用程序的根，以便在运行Artisan任务时使用。
    */

    'url' => env('APP_URL', 'http://localhost'),

    'asset_url' => env('ASSET_URL', null),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone  应用时区
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |   这里可以指定应用程序的默认时区，PHP日期和date-time函数将使用该时区。 我们已经为您设置了一个合理的默认值。
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration  应用本地语言环境配置
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |   应用程序本地语言设置决定翻译服务提供程序将使用的默认区域设置。 您可以将此值设置为应用程序支持的任何区域设置。
    */

    'locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale  应用应变语言环境
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |   回退区域设置确定在当前区域设置不可用时使用的区域设置。 您可以更改该值以对应于通过应用程序提供的任何语言文件夹
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Faker Locale  数据伪造
    |--------------------------------------------------------------------------
    |
    | This locale will be used by the Faker PHP library when generating fake
    | data for your database seeds. For example, this will be used to get
    | localized telephone numbers, street address information and more.
    |   Faker PHP库在为数据库种子生成假数据时将使用此区域设置。 例如，这将用于获取本地化的电话号码、街道地址信息等。
    */

    'faker_locale' => 'en_US',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key  加密密钥
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |   此密钥由Illuminate加密器服务使用，应设置为随机的32个字符串，否则这些加密的字符串将不安全。 请在部署应用程序之前执行此操作!
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers  自动装载服务提供商
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |   这里列出的服务提供者将在您的应用程序请求时自动加载。 请随意将您自己的服务添加到这个数组中，以向您的应用程序授予扩展功能。
    */

    'providers' => [

        /*
         * Laravel Framework Service Providers...
         * Laravel框架服务提供商...
         */
        Illuminate\Auth\AuthServiceProvider::class,                             // 身份验证服务
        Illuminate\Broadcasting\BroadcastServiceProvider::class,                // 广播服务
        Illuminate\Bus\BusServiceProvider::class,                               // BUS服务
        Illuminate\Cache\CacheServiceProvider::class,                           // 缓存服务
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,   // 控制台支持服务
        Illuminate\Cookie\CookieServiceProvider::class,                         // Cookie服务
        Illuminate\Database\DatabaseServiceProvider::class,                     // 数据库服务
        Illuminate\Encryption\EncryptionServiceProvider::class,                 // 加密服务
        Illuminate\Filesystem\FilesystemServiceProvider::class,                 // 文件系统服务
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,       // 基础服务
        Illuminate\Hashing\HashServiceProvider::class,                          // Hash服务
        Illuminate\Mail\MailServiceProvider::class,                             // 邮件服务
        Illuminate\Notifications\NotificationServiceProvider::class,            // 通知服务
        Illuminate\Pagination\PaginationServiceProvider::class,                 // 分页服务
        Illuminate\Pipeline\PipelineServiceProvider::class,                     // 管道服务
        Illuminate\Queue\QueueServiceProvider::class,                           // 队列服务
        Illuminate\Redis\RedisServiceProvider::class,                           // Redis服务
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,          // 密码重置服务
        Illuminate\Session\SessionServiceProvider::class,                       // Session服务
        Illuminate\Translation\TranslationServiceProvider::class,               // 翻译服务
        Illuminate\Validation\ValidationServiceProvider::class,                 // 验证服务
        Illuminate\View\ViewServiceProvider::class,                             // 视图服务

        /*
         * Package Service Providers...
         * 包服务提供商...
         */

        /*
         * Application Service Providers...
         * 应用服务提供商...
         */
        App\Providers\AppServiceProvider::class,            // 应用服务
        App\Providers\AuthServiceProvider::class,           // 身份验证服务
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,          // 事件服务
        App\Providers\RouteServiceProvider::class,          // 路由服务

    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases  类别名
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |   这个类别名数组将在应用程序启动时注册。 但是，您可以随意注册任意数量的别名，因为别名是“惰性”加载的，所以它们不会影响性能。
    */

    'aliases' => [

        'App' => Illuminate\Support\Facades\App::class,
        'Arr' => Illuminate\Support\Arr::class,
        'Artisan' => Illuminate\Support\Facades\Artisan::class,
        'Auth' => Illuminate\Support\Facades\Auth::class,
        'Blade' => Illuminate\Support\Facades\Blade::class,
        'Broadcast' => Illuminate\Support\Facades\Broadcast::class,
        'Bus' => Illuminate\Support\Facades\Bus::class,
        'Cache' => Illuminate\Support\Facades\Cache::class,
        'Config' => Illuminate\Support\Facades\Config::class,
        'Cookie' => Illuminate\Support\Facades\Cookie::class,
        'Crypt' => Illuminate\Support\Facades\Crypt::class,
        'Date' => Illuminate\Support\Facades\Date::class,
        'DB' => Illuminate\Support\Facades\DB::class,
        'Eloquent' => Illuminate\Database\Eloquent\Model::class,
        'Event' => Illuminate\Support\Facades\Event::class,
        'File' => Illuminate\Support\Facades\File::class,
        'Gate' => Illuminate\Support\Facades\Gate::class,
        'Hash' => Illuminate\Support\Facades\Hash::class,
        'Http' => Illuminate\Support\Facades\Http::class,
        'Js' => Illuminate\Support\Js::class,
        'Lang' => Illuminate\Support\Facades\Lang::class,
        'Log' => Illuminate\Support\Facades\Log::class,
        'Mail' => Illuminate\Support\Facades\Mail::class,
        'Notification' => Illuminate\Support\Facades\Notification::class,
        'Password' => Illuminate\Support\Facades\Password::class,
        'Queue' => Illuminate\Support\Facades\Queue::class,
        'RateLimiter' => Illuminate\Support\Facades\RateLimiter::class,
        'Redirect' => Illuminate\Support\Facades\Redirect::class,
        // 'Redis' => Illuminate\Support\Facades\Redis::class,
        'Request' => Illuminate\Support\Facades\Request::class,
        'Response' => Illuminate\Support\Facades\Response::class,
        'Route' => Illuminate\Support\Facades\Route::class,
        'Schema' => Illuminate\Support\Facades\Schema::class,
        'Session' => Illuminate\Support\Facades\Session::class,
        'Storage' => Illuminate\Support\Facades\Storage::class,
        'Str' => Illuminate\Support\Str::class,
        'URL' => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View' => Illuminate\Support\Facades\View::class,

    ],

];
