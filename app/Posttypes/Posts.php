<?php

namespace App\Posttypes;

use Assely\Posttype\Posttype;

class Posts extends Posttype
{
    /**
     * Posttype Slug.
     *
     * @var string
     */
    public $slug = 'post';

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
     * Specify posttype templates.
     *
     * @return array
     */
    public function templates()
    {
        return [
            // 'template-slug' => 'Template name'
        ];
    }
}
