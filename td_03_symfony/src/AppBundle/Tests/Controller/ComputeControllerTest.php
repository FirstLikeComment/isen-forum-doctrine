<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ComputeControllerTest extends WebTestCase
{
    public function testFibonacci()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/fibonacci');
    }

}
