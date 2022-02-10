<?php

class MainDish extends Food
{
    /**
     * @var string
     */
    protected $name = 'main dish';

    /**
     * A short message about eating this main dish.
     *
     * @return string
     */

    public function eat(): string
    {
        $parentResult = parent::eat();
        return $parentResult . " It was filling.";
    }
}