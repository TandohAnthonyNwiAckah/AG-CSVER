<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;

use App\Http\Controllers\CountriesController;
use Tests\TestCase;

class CountriesControllerTest extends TestCase
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


    /**
     * Test View.
     *
     * @return void
     */
    public function testView()
    {
        $data = (new CountriesController)->view(1);

        $this->assertEmpty($data);
    }


}
