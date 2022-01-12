<?php

namespace Tests\Unit;

use Tests\TestCase;

class UserHomeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_add_to_cart()
    {
        
        $response=$this->call('POST','/addtocart',[
            "user_id"=>"111",
            "medicine_id"=>"111",
            "quantity"=>"1",
        ]);

        $response->assertStatus($response->status(),302);
        
    }
    public function test_place_order()
    {
        
        $response=$this->call('POST','/placeorder',[
            'medicine'=>'medname',
            'price'=>'111',
            'quantity'=>'1',
            'username'=>'name',
            'phone'=>'1111',
            'address'=>'address',
        ]);

        $response->assertStatus($response->status(),302);
        
    }

    
    
}
