<?php

namespace Tests\Unit;

use Tests\TestCase;

class AdminTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_medicine_upload()
    {
        $response=$this->call('POST','/uploadmedicine',[
            "title"=>"title",
            "price"=>"price",
            "description"=>"description",
            
        ]);
        $response->assertStatus($response->status(),302);
    }
    public function test_medicine_update()
    {
        $response=$this->call('POST','/updatemed',[
            "title"=>"title",
            "price"=>"price",
            "description"=>"description",
            
        ]);
        $response->assertStatus($response->status(),302);
    }
    public function test_inventory(){
        $response=$this->call('GET','/inventory');
        $response->assertStatus($response->status(),302);
    }
    public function test_search(){
        $response=$this->call('GET','/search');
        $response->assertStatus($response->status(),302);
    }
}
