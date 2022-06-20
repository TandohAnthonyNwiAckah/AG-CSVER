<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;

use Tests\TestCase;

class CountriesController extends TestCase
{
    /**
     * Test All Country API.
     *
     * @return void
     */
    public function testAllCountry()
    {
        $response = $this->get(route('all_country'));
        $response->assertStatus(200);
    }


}
