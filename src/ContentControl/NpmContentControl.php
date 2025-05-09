<?php declare(strict_types=1);

namespace ManageNpm\ContentControl;

use Base3Manager\ContentControl\AbstractContentControl;

class NpmContentControl extends AbstractContentControl {

        // Implementation of IBase

        public function getName(): string {
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

