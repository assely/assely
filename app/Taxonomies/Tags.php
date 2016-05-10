<?php

namespace App\Taxonomies;

use Assely\Taxonomy\Taxonomy;

class Tags extends Taxonomy
{
    /**
     * Taxonomy slug.
     *
     * @var string
     */
    public $slug = 'post_tag';

    /**
     * Describe taxonomy relationships.
     *
     * @return self
     */
    public function relation()
    {
        return $this->belongsTo(['App\Posttypes\Posts']);
    }

    /**
     * Taxonomy arguments.
     *
     * @return array
     */
    public function arguments()
    {
        return [
            'hierarchical' => true,
        ];
    }

    /**
     * Register taxonomy custom fields.
     *
     * @return \Assely\Field\Field[]
     */
    public function fields()
    {
        return [
            //
        ];
    }

    /**
     * Register taxonomy list columns.
     *
     * @return \Assely\Column\Column[]
     */
    public function columns()
    {
        return [
            //
        ];
    }
}
