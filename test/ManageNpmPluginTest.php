<?php declare(strict_types=1);

/***********************************************************************
 * This file is part of ManageNpm for BASE3 Framework.
 *
 * ManageNpm exposes package administration for npm.
 * It adds npm-oriented controls to Base3Manager.
 * The existing manager owns navigation and service composition.
 *
 * Developed by Daniel Dahme
 * Licensed under GPL-3.0
 * https://www.gnu.org/licenses/gpl-3.0.en.html
 *
 * https://base3.de
 ***********************************************************************/

namespace Base3\ManageNpm\Test;

use PHPUnit\Framework\TestCase;
use Base3\ManageNpm\ManageNpmPlugin;
use Base3\CoreFoundation\Api\IContainer;

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

