<?php
class Food
{
    /**
     * @var string
     */
 protected $name = 'food';

 /**
  * A short message about eating this food item.
  *
  * @return string
  */
 public function eat (): string
 {
        return 'you ate the' . $this->name . "!";
 }
}