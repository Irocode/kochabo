/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function (config) {

    // Define changes to default configuration here. For example:
    config.language = 'de';
    //config.uiColor = '#2a323a';

    config.resize_enabled = true;

    // Toolbar groups configuration.
    config.toolbarGroups = [
     
       
       
       
        { name: 'insert' },
        '/',
      
    ];

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
