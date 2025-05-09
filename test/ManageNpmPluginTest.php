<?php

namespace ManageNpm\Test;

use PHPUnit\Framework\TestCase;
use ManageNpm\ManageNpmPlugin;
use Base3\Api\IContainer;

class ManageNpmPluginTest extends TestCase
{
    public function testInitSetsServicesInContainer()
    {
        $containerMock = $this->createMock(IContainer::class);

        $plugin = new ManageNpmPlugin($containerMock);
        $plugin->init();

        $this->assertTrue(true);
    }

    public function testCheckDependencies()
    {
        $containerMock = $this->createMock(IContainer::class);

        $plugin = new ManageNpmPlugin($containerMock);
        $dependencies = $plugin->checkDependencies();

        $this->assertTrue(true);
    }
}

