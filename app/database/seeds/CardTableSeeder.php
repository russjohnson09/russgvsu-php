<?php

class CardTableSeeder extends Seeder
{
  public function run()
  {
    DB::table('cards')->delete();
    
    Card::create(array('front' => 'hello',
                          'back' => 'back of card',
                          'count' => 10));
                          
    Card::create(array('front' => 'hello',
                      'back' => 'konnichiha',
                      'count' => 10));
    for ($i=0; $i<1000; $i++) {
        Card::create(array('front' => 'hello',
                      'back' => 'konnichiha',
                      'count' => 10));
    }
    /*
    
    */
  }
}
