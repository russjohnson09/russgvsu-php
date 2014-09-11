<?php

  //by default this model will link to the cards table
  class Card extends Eloquent
  {
     protected $fillable = array('front','back'); 
  }
