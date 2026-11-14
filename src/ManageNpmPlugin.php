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


namespace Base3\ManageNpm;

use Base3\CoreFoundation\Api\IContainer;
use Base3\Base3Manager\Plugin\AbstractPlugin;

class ManageNpmPlugin extends AbstractPlugin {

	// Implementation of IPlugin

	public function init() {
		$this->container
			->set(self::getName(), $this, IContainer::SHARED);
	}

	// Implementation of ICheck

	public function checkDependencies(): array {
		return array(
			"Check" => "Ok"
		);
	}
}
