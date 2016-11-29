<?php

namespace App\Posttypes;

use Assely\Posttype\Posttype;

class Pages extends Posttype
{
    /**
     * Posttype Slug.
     *
     * @var string
     */
    public $slug = 'page';

    /**
     * Specify posttype list columns.
     *
     * @return \Assely\Column\Column[]
     */
    public function columns()
    {
        return [
            //
        ];
    }

    /**
     * Specify page templates.
     *
     * @return array
     */
    public function templates()
    {
        return [
            // 'template' => 'Template title'
        ];
    }
}
