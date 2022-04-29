<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths 视图存储路径
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |   大多数模板系统从磁盘加载模板。 在这里，您可以指定一系列路径，应检查您的视图。 当然，通常已经为您注册了通常的Laravel视图路径。
    */

    'paths' => [
        resource_path('views'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path    编译视图的路径
    |--------------------------------------------------------------------------
    |
    | This option determines where all the compiled Blade templates will be
    | stored for your application. Typically, this is within the storage
    | directory. However, as usual, you are free to change this value.
    |   此选项确定将为您的应用程序存储所有编译的叶片模板。 通常，这在存储目录内。 但是，像往常一样，您可以自由更改此值。
    */

    'compiled' => env(
        'VIEW_COMPILED_PATH',
        realpath(storage_path('framework/views'))
    ),

];
