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


namespace Base3\ManageNpm\ContentControl;

use Base3\Base3Manager\ContentControl\AbstractContentControl;

class NpmContentControl extends AbstractContentControl {

        // Implementation of IBase

        public static function getName(): string {
                return "npmcontentcontrol";
        }

	// Implementation of AbstractContentControl

        protected function getPath(): string {
                return DIR_PLUGIN . 'ManageNpm';
        }

        protected function getTemplate(): string {
                return 'ContentControl/NpmContentControl.php';
        }

}

