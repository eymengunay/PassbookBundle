<?php

namespace Eo\PassbookBundle\Tests\Factory;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FactoryTest extends WebTestCase
{
    public function testIndex()
    {
        // Create kernel
        $kernel = static::createKernel();
        $kernel->boot();

        // Set container
        $container = $kernel->getContainer();

        // Get factory service
        $factory = $container->get('eo_passbook.pass_factory');

        $this->assertEquals("/tmp", $factory->getOutputPath());
    }
}
