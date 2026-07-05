<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Http;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
       //$response = $this->post('/submit');
        $test_input =  '{"name":"sivakami"}';
        $response = $this->followingRedirects()->postJson('/submit', [
            'json' => '{"name":"sivakami"}'
            
        ]);
        
        // echo "header";
        //echo $response->headers->get('Location');
        //$response->getResponseHeader('Location');
        $html = $response->getContent();
        preg_match('/http?:\/\/[^\s"<]+/', $html, $match);
        //print_r($match);exit;
        if (!empty($match))
        {
            $url = $match[0];
            echo $url;
       } 
       else 
       {
           echo "No URL found.";
       }

        // $response->dump();
  
        $test_output= Http::get($url);
        //echo $test_output->body();
        $this->assertEquals($test_input,$test_output);
        //$test_output->assertStatus(200);
        // $response->assertJson([

        //     'updated' => true,

        // ]);
    }
}
