<?php
echo "fo";

return array(

  /*
   |--------------------------------------------------------------------------
   | Extension
   |--------------------------------------------------------------------------
   |
   | File extension for Twig view files.
   |
   */
    'extension' => 'twig',


  /*
   |--------------------------------------------------------------------------
   | Twig options
   |--------------------------------------------------------------------------
   |
   | Standard Twig settings; http://twig.sensiolabs.org/doc/api.html#environment-options
   |
   */
    'options' => array(

        // When set to true, the generated templates have a __toString() method
        // that you can use to display the generated nodes.
        // default: Config::get('app.debug')
        'debug' => Config::get('app.debug'),

        // The charset used by the templates.
        // default: utf-8
        'charset' => 'utf-8',

        // The base template class to use for generated templates.
        // default: ZaCoZa\TwigBridge\TwigTemplate
        'base_template_class' => 'ZaCoZa\TwigBridge\TwigTemplate',

        // An absolute path where to store the compiled templates, or false to disable caching.
        // default: $app['path.storage'].'/views/twig'
        'cache' => app('path.storage').'/views/twig',

        // When developing with Twig, it's useful to recompile the template
        // whenever the source code changes. If you don't provide a value
        // default: Config::get('app.debug')
        'auto_reload' => Config::get('app.debug'),

        // If set to false, Twig will silently ignore invalid variables
        // (variables and or attributes/methods that do not exist) and
        // replace them with a null value. When set to true, Twig throws an exception instead.
        // default: Config::get('app.debug')
        'strict_variables' => Config::get('app.debug'),

        // If set to true, auto-escaping will be enabled by default for all templates.
        // default: true
        'autoescape' => true,

        // A flag that indicates which optimizations to apply
        // (default to -1 -- all optimizations are enabled; set it to 0 to disable)
        'optimizations' => -1,
    ),


  /*
   |--------------------------------------------------------------------------
   | Functions & Filters
   |--------------------------------------------------------------------------
   |
   | List of Functions & Filters that are made available to your Twig templates.
   | Supports string or closure.
   |
   */
    'functions' => array(
        // Urls
        'route',
        'action',
        'asset',
        'url',
        'link_to',
        'link_to_asset',
        'link_to_route',
        'link_to_action',
        'secure_asset',
        'secure_url',
        // Translation
        'trans',
        'trans_choice',
        // Miscellaneous
        'csrf_token',
        'head',
        // Kochabo Custom
        'image_tag' => function($url, $title = null, $attributes = array(), $secure = null){ 
            echo app('html')->image("assets/frontend/new/images/".$url, $title, $attributes, $secure);
          }
    ),

    'filters' => array(
        //Strings
        'camel_case',
        'snake_case',
        'studly_case',
        'str_finish',
        'str_plural',
        'str_singular'
    ),

    'facades' => array(
        'Auth',
        'Config',
        'Form',
        'HTML',
        'Input',
        'Lang',
        'Route',
        'Str',
        'URL',
        'Session',
    ),


  /*
   |--------------------------------------------------------------------------
   | MtHaml configuation
   |--------------------------------------------------------------------------
   |
   | MtHaml is a PHP implementation of the HAML language which can target multiple languages.
   | Currently supported targets are PHP and Twig, and new ones can be added easily.
   |
   | https://github.com/arnaud-lb/MtHaml
   |
   */
   'MtHaml' => array(
      // Enable or not the MtHaml extension
      // default: true
      'enable' => true,

      // MtHaml escapes everything by default. 
      // Since Twig already supports auto escaping it is recommended to enable it in Twig and disable it in MtHaml
      // default: false
      'enable_escaper' => false,

      // Configuration for filters
      //
      // Example: 
      // array(
      //   'coffee' => new MtHaml\Filter\CoffeeScript(new CoffeeScript\Compiler);
      // )
      //
      // See more: https://github.com/arnaud-lb/MtHaml#filters
      // default: array()
      'filters' => array(),
    ),
);
