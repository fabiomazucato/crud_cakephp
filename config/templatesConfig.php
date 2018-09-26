<?php

namespace config;

$config = [
    'Templates' => [
        'shortForm' => [
            'formstart'         => '<form {{attrs}}>',
            'label'             => '<label {{attrs}}>{{text}}</label>',
            'input'             => '<input type="{{type}}" name="{{name}}" {{attrs}} />',
            'select'            => '<select class="browser-default" name="{{name}}"{{attrs}}>{{content}}</select>',
            'inputContainer'    => '<div class="col s12 m4 l4 {{required}}" form-type="{{type}}"><div class="input-field">{{content}}</div></div>',
            'selectContainer'   => '<div class="col s12 m4 l4 {{required}}" form-type="{{type}}"><div class="browser-default">{{content}}</div></div>',
        ],
        'longForm' => [
            'formstart'         => '<form {{attrs}}>',
            'label'             => '<label {{attrs}}>{{text}}</label>',
            'input'             => '<input type="{{type}}" name="{{name}}" {{attrs}} />',
            'select'            => '<select class="browser-default" name="{{name}}"{{attrs}}>{{content}}</select>',
            'inputContainer'    => '<div class="col s12 m6 l6 {{required}}" form-type="{{type}}"><div class="input-field">{{content}}</div></div>',
            'selectContainer'   => '<div class="col s12 m6 l6 {{required}}" form-type="{{type}}"><div class="browser-default">{{content}}</div></div>',
        ],
        'fullForm' => [
            'formstart'         => '<form {{attrs}}>',
            'label'             => '<label {{attrs}}>{{text}}</label>',
            'checkbox'          => '<input type="checkbox" name="{{name}}" id="{{for}}" value="{{value}}"{{attrs}}><label for="{{for}}">{{label}}</label>',
            'input'             => '<input type="{{type}}" name="{{name}}" {{attrs}} />',
            'select'            => '<select class="browser-default" name="{{name}}"{{attrs}}>{{content}}</select>',
            'inputContainer'    => '<div class="input-field col s12 m12 l12">{{content}}<div class="after-label">{{help}}</div></div>',
            'selectContainer'   => '<div class="browser-default col s12 m12 l12">{{content}}<div class="after-label-select">{{help}}</div></div>',
        ],
        'customList' => [
            'formstart'         => '<form {{attrs}}>',
            'label'             => '<label {{attrs}}>{{text}}</label>',
            'checkbox'          => '<input type="checkbox" name="{{name}}" id="{{for}}" value="{{value}}"{{attrs}}><label for="{{for}}">{{label}}</label>',
            'input'             => '<input type="{{type}}" name="{{name}}" {{attrs}} />',
            'select'            => '<select class="browser-default" name="{{name}}"{{attrs}}>{{content}}</select>',
            'inputContainer'    => '{{content}}',
            'selectContainer'   => '{{content}}'
        ],
        
        // FORM TEMPLATE BY BOOTSTRAP COLUMNS
        
        'oneColForm' => [
            'formstart'         => '<form {{attrs}}>',
            'label'             => '<label {{attrs}}>{{text}}</label>',
            'input'             => '<input type="{{type}}" name="{{name}}" {{attrs}} />',
            'select'            => '<select class="browser-default" name="{{name}}"{{attrs}}>{{content}}</select>',
            'inputContainer'    => '<div class="col s12 m1 l1 {{required}}" form-type="{{type}}"><div class="input-field">{{content}}</div></div>',
            'selectContainer'   => '<div class="col s12 m1 l1 {{required}}" form-type="{{type}}"><div class="browser-default">{{content}}</div></div>'
        ],
        'twoColForm' => [
            'formstart'         => '<form {{attrs}}>',
            'label'             => '<label {{attrs}}>{{text}}</label>',
            'input'             => '<input type="{{type}}" name="{{name}}" {{attrs}} />',
            'select'            => '<select class="browser-default" name="{{name}}"{{attrs}}>{{content}}</select>',
            'inputContainer'    => '<div class="col s12 m2 l2 {{required}}" form-type="{{type}}"><div class="input-field">{{content}}</div></div>',
            'selectContainer'   => '<div class="col s12 m2 l2 {{required}}" form-type="{{type}}"><div class="browser-default">{{content}}</div></div>'
        ],
        'threeColForm' => [
            'formstart'         => '<form {{attrs}}>',
            'label'             => '<label {{attrs}}>{{text}}</label>',
            'input'             => '<input type="{{type}}" name="{{name}}" {{attrs}} />',
            'select'            => '<select class="browser-default" name="{{name}}"{{attrs}}>{{content}}</select>',
            'inputContainer'    => '<div class="col s12 m3 l3 {{required}}" form-type="{{type}}"><div class="input-field">{{content}}</div></div>',
            'selectContainer'   => '<div class="col s12 m3 l3 {{required}}" form-type="{{type}}"><div class="browser-default">{{content}}</div></div>'
        ],
        'fourColForm' => [
            'formstart'         => '<form {{attrs}}>',
            'label'             => '<label {{attrs}}>{{text}}</label>',
            'input'             => '<input type="{{type}}" name="{{name}}" {{attrs}} />',
            'select'            => '<select class="browser-default" name="{{name}}"{{attrs}}>{{content}}</select>',
            'inputContainer'    => '<div class="col s12 m4 l4 {{required}}" form-type="{{type}}"><div class="input-field">{{content}}</div></div>',
            'selectContainer'   => '<div class="col s12 m4 l4 {{required}}" form-type="{{type}}"><div class="browser-default">{{content}}</div></div>'
        ],
        'fiveColForm' => [
            'formstart'         => '<form {{attrs}}>',
            'label'             => '<label {{attrs}}>{{text}}</label>',
            'input'             => '<input type="{{type}}" name="{{name}}" {{attrs}} />',
            'select'            => '<select class="browser-default" name="{{name}}"{{attrs}}>{{content}}</select>',
            'inputContainer'    => '<div class="col s12 m5 l5 {{required}}" form-type="{{type}}"><div class="input-field">{{content}}</div></div>',
            'selectContainer'   => '<div class="col s12 m5 l5 {{required}}" form-type="{{type}}"><div class="browser-default">{{content}}</div></div>'
        ],
        'sixColForm' => [
            'formstart'         => '<form {{attrs}}>',
            'help'              => '<div class="after-label-select">{{content}}</div>',
            'label'             => '<label {{attrs}}>{{text}}</label>',
            'input'             => '<input type="{{type}}" name="{{name}}" {{attrs}} />',
            'select'            => '<select class="browser-default" name="{{name}}"{{attrs}}>{{content}}</select>',
            'inputContainer'    => '<div class="input-field col s6">{{content}}<div class="after-label">{{help}}</div></div>',
            'selectContainer'   => '<div class="browser-default col s6">{{content}}<div class="after-label-select">{{help}}</div></div>'
        ],
        'sevenColForm' => [
            'formstart'         => '<form {{attrs}}>',
            'label'             => '<label {{attrs}}>{{text}}</label>',
            'input'             => '<input type="{{type}}" name="{{name}}" {{attrs}} />',
            'select'            => '<select class="browser-default" name="{{name}}"{{attrs}}>{{content}}</select>',
            'inputContainer'    => '<div class="col s12 m7 l7 {{required}}" form-type="{{type}}"><div class="input-field">{{content}}</div></div>',
            'selectContainer'   => '<div class="col s12 m7 l7 {{required}}" form-type="{{type}}"><div class="browser-default">{{content}}</div></div>'
        ],
        'eightColForm' => [
            'formstart'         => '<form {{attrs}}>',
            'label'             => '<label {{attrs}}>{{text}}</label>',
            'input'             => '<input type="{{type}}" name="{{name}}" {{attrs}} />',
            'select'            => '<select class="browser-default" name="{{name}}"{{attrs}}>{{content}}</select>',
            'inputContainer'    => '<div class="col s12 m8 l8 {{required}}" form-type="{{type}}"><div class="input-field">{{content}}</div></div>',
            'selectContainer'   => '<div class="col s12 m8 l8 {{required}}" form-type="{{type}}"><div class="browser-default">{{content}}</div></div>'
        ],
        'nineColForm' => [
            'formstart'         => '<form {{attrs}}>',
            'label'             => '<label {{attrs}}>{{text}}</label>',
            'input'             => '<input type="{{type}}" name="{{name}}" {{attrs}} />',
            'select'            => '<select class="browser-default" name="{{name}}"{{attrs}}>{{content}}</select>',
            'inputContainer'    => '<div class="col s12 m9 l9 {{required}}" form-type="{{type}}"><div class="input-field">{{content}}</div></div>',
            'selectContainer'   => '<div class="col s12 m9 l9 {{required}}" form-type="{{type}}"><div class="browser-default">{{content}}</div></div>'
        ],
        'tenColForm' => [
            'formstart'         => '<form {{attrs}}>',
            'label'             => '<label {{attrs}}>{{text}}</label>',
            'input'             => '<input type="{{type}}" name="{{name}}" {{attrs}} />',
            'select'            => '<select class="browser-default" name="{{name}}"{{attrs}}>{{content}}</select>',
            'inputContainer'    => '<div class="col s12 m10 l10 {{required}}" form-type="{{type}}"><div class="input-field">{{content}}</div></div>',
            'selectContainer'   => '<div class="col s12 m10 l10 {{required}}" form-type="{{type}}"><div class="browser-default">{{content}}</div></div>'
        ],
        'elevenColForm' => [
            'formstart'         => '<form {{attrs}}>',
            'label'             => '<label {{attrs}}>{{text}}</label>',
            'input'             => '<input type="{{type}}" name="{{name}}" {{attrs}} />',
            'select'            => '<select class="browser-default" name="{{name}}"{{attrs}}>{{content}}</select>',
            'inputContainer'    => '<div class="col s12 m11 l11 {{required}}" form-type="{{type}}"><div class="input-field">{{content}}</div></div>',
            'selectContainer'   => '<div class="col s12 m11 l11 {{required}}" form-type="{{type}}"><div class="browser-default">{{content}}</div></div>'
        ],
        'twelveColForm' => [
            'formstart'         => '<form {{attrs}}>',
            'label'             => '<label {{attrs}}>{{text}}</label>',
            'input'             => '<input type="{{type}}" name="{{name}}" {{attrs}} />',
            'select'            => '<select class="browser-default" name="{{name}}"{{attrs}}>{{content}}</select>',
            'inputContainer'    => '<div class="col s12 m12 l12 {{required}}" form-type="{{type}}"><div class="input-field">{{content}}</div></div>',
            'selectContainer'   => '<div class="col s12 m12 l12 {{required}}" form-type="{{type}}"><div class="browser-default">{{content}}</div></div>'
        ],
        'default' => [ 
            'formstart'         => '<form {{attrs}}>',
            'label'             => '<label {{attrs}}>{{text}}</label>',
            'input'             => '<input type="{{type}}" name="{{name}}" {{attrs}} />',
            'select'            => '<select name="{{name}}"{{attrs}}>{{content}}</select>',
            'inputContainer'    => '{{content}}',
            'selectContainer'   => '{{content}}'
        ]
    ]
];
