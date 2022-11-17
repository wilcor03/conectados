<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use Illuminate\Testing\Fluent\AssertableJson;

use App\Services\ConectadoswebService;

use Mockery;
use Mockery\MockInterface;

use App\Services\ConectUser;
use DateTime;

//use Illuminate\Support\Facades\Http;
//use Illuminate\Testing\TestResponse;

//use Illuminate\Http\Response;

class ExternalApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function it_users_end_point_can_return_json_paginate_list()
    {
    
        $response = $this->getJson('/api/users')->assertOk();


        /*$this->instance(
            ConectadoswebService::class,
            Mockery::mock(ConectadoswebService::class, function (MockInterface $mock) {
                $mock->shouldReceive('getUsers')->once()->andReturn(
                    (new ConectUser())
                    ->setId(1)
                    ->setSegmentationId(5)
                    ->setProgramId(1)
                    ->setUserId(2)
                    ->setCreatedAt(new DateTime("2021-05-10 12:07:31"))
                );
            })
        );*/

        //$response = $this->get('api/accounts');

        //$response->assertJson(array $data);

        //$response
        //->assertJson(fn (AssertableJson $json) =>            
          //  $json->first(fn ($json) =>                 
            //    $json->where("id", 1)
                    //->whereType('id', 'integer')
                    //->where("segmentation_id", 5)
                    //->where("program_id", 1)
                    //->where("user_id", 2)
                    //->whereType("h2a_token", "string")
              //      ->etc()
           // )
        //);

        //$response->assertStatus(200);



        //dd($response);


        /*Http::fake(["https://test.conectadosweb.com.co/users/token" => Http::response([
                "id"                => 1,
                "segmentation_id"   => 5,
                "program_id"        => 1,
                "user_id"           => 2
            ]),
        ]);*/

        //dd(Http::get("https://test.conectadosweb.com.co/users/token")->json());
        //$response = Http::get("https://test.conectadosweb.com.co/users")->json();
        //dd($response);

        /*dd(Response::HTTP_NOT_FOUND, "EERER");
        
        $response->assertNotFound();

        dd($response->status());*/

        /*if($response->status() === TestResponse::)
        {

        }*/

        /*$response = $this->getJson('api/test-users');

        //Http::assertSentCount(1);

        $response = $this->getJson('api/test-users');

        $response
        ->assertJson(fn (AssertableJson $json) =>            
            $json->first(fn ($json) =>                 
                $json->where("id", 1)
                    ->whereType('id', 'integer')

                    ->where("segmentation_id", 5)
                    ->where("program_id", 1)
                    ->where("user_id", 2)
                    ->whereType("h2a_token", "string")
                    ->etc()
            )
        );

        $response->assertStatus(200);*/
        
    }
}
