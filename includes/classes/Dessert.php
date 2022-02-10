<?php 

class Dessert extends Food
{
    /**
     * @var string
     */
    protected $name = 'dessert';

    /**
     * A short message about eating this dessert.
     *
     * @return string
     */
    public function eat(): string
    {
        $parentResult = parent::eat();
        return $parentResult . " It was very sweet.";
    }
}