<?php

class Project001Test extends TestCase 
{

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testCanOpenHomePage()
    {
        $response = $this->call('GET', '/');

        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testCanOpenPageForProject()
    {
        $response = $this->call('GET', '/project001');

        $this->assertEquals(200, $response->getStatusCode());
    }

}