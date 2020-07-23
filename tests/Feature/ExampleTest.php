<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Cache;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OraginsationTest extends TestCase
{
    /** @test */
    // public function an_oragnisation_can_be_created()
    // {
    //     $this->withoutExceptionHandling();

    //     $response = $this->post('/api/organisations', [
    //         'oragnisationName' => 'ABC',
    //         'currency' => 'usd'
    //     ]);

    //     $response->assertStatus(200);

    //     $organisationEncoded = Cache::get('organisation1');
    //     $organisationDecoded = json_decode($organisationEncoded, true);

    //     $this->assertEquals('ABC', $organisationDecoded['oragnisationName']);
    // }

    /** @test */
    public function an_oragnisation_can_be_fetched_by_name()
    {
        $this->withoutExceptionHandling();

        $organisationName = 'ABC';

        $response = $this->post('/api/organisations', [
            'oragnisationName' => $organisationName,
            'currency' => 'usd'
        ]);

        $response->assertStatus(200);

        $response = $this->get("/api/organisations/$organisationName");

        $response->assertStatus(200);

        dd($response);


        // $organisationEncoded = Cache::get('organisation1');
        // $organisationDecoded = json_decode($organisationEncoded, true);

        // $this->assertEquals('ABC', $organisationDecoded['oragnisationName']);
    }
}
