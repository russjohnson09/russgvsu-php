<?php

  //by default this model will link to the cards table
  class Card extends Eloquent
  {
     protected $fillable = []; //count not included
     
     public function sides()
     {
      return $this->hasMany('Side');
     }
     
  }
