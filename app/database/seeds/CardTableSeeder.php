<?php

class CardTableSeeder extends Seeder
{
  public function run()
  {
  
    DB::table('sides')->delete();
    DB::table('cards')->delete();
    
    $cid = Card::create(array())['id'];
    
    echo $cid;
    
    Side::create(array('card_id' => $cid,'descriptor' => 'front',
    'text'=>'front'));
    
    Side::create(array('card_id' => $cid,'descriptor' => 'back',
    'text'=>'back'));
    
    /*
    Card::create(array('front' => 'hello',
                          'back' => 'back of card',
                          'count' => 10));
                          
    Card::create(array('front' => 'hello',
                      'back' => 'konnichiha',
                      'count' => 10));
                      */
    /*    
    for ($i=0; $i<1000; $i++) {
        Card::create(array('front' => 'hello',
                      'back' => 'konnichiha',
                      'count' => 10));
    }
    */
    /*
    
    */
  }
}
