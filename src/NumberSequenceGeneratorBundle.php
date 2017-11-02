<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\NumberSequenceGeneratorBundle;

class NumberSequenceGeneratorBundle extends \Pimcore\Extension\Bundle\AbstractPimcoreBundle implements \Pimcore\Extension\Bundle\PimcoreBundleInterface
{
    public function getInstaller()
    {
        return $this->container->get(Installer::class);
    }
}
