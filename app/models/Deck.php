<?php

  //by default this model will link to the cards table
  class Deck extends Eloquent
  {
     protected $fillable = [];
     
     public function cards()
     {
      return $this->hasMany('Card');
     }
     
  }
