<?php

namespace Tests\Feature;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ApiFuncionarioTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testListFuncionario()
    {
        $response = $this->json('GET','/api/funcionarios');

        $response->assertStatus(200);
       
    }
}
