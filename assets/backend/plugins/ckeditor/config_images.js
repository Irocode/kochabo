/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */



CKEDITOR.editorConfig = function (config) {


config.extraPlugins = 'doksoft_image';
    // Define changes to default configuration here. For example:
    config.language = 'de';
        config.uiColor = '#85b81d';

    config.resize_enabled = true;


    //config.forcePasteAsPlainText = true;

    config.doksoft_image_img_resize_show = true; // false by default

  config.myordner = "test";

    config.doksoft_image_default_img_resize = true;
config.doksoft_image_default_img_resize_width = 300;
config.doksoft_image_default_img_resize_height = 300;
config.doksoft_image_default_img_resize_enlarge = false;

config.doksoft_image_allowed_ext = 'jpg,jpeg,gif,png,bmp,tif,tiff';

config.doksoft_image_template = '<img src="{IMAGE}" />';


    // Toolbar groups configuration.



    config.toolbarGroups = [
      
     
       
      


      
        
    ];


config.toolbar_name = [  [ 'doksoft_image']  ];




    config.extraPlugins = 'pbckcode';
    config.pbckcode = {

        modes: [
            ['HTML', 'html'],
            ['CSS', 'css'],
            ['JS', 'javascript'],
            ['PHP', 'php'],
            ['C#', 'csharp'],
            ['XML', 'xml'],
            ['SQL', 'sql']
        ],
        highlighter: "PRETTIFY"
    };
};















