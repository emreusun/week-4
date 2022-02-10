<?php

class Coffee extends Dessert
{
    /**
     * @var string
     */
    protected $name = 'coffee';

    /**
     * A short message about eating this coffee.
     *
     * @return string
     */
    public function eat(): string
    {
        $parentResult = parent::eat();
        return $parentResult . " It was very sweet.";
    }
}