<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class CurrenciesController extends TestCase
{

    /**
     * Test All Currency API.
     *
     * @return void
     */
    public function testAllCurrency()
    {
        $response = $this->get(route('all_currency'));
        $response->assertStatus(200);
    }


}
