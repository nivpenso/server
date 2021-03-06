<?php

/*
 * This file is part of the Drift Server
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 */

declare(strict_types=1);

namespace Drift\Server\Tests;

use Drift\Server\Adapter\SymfonyKernel\SymfonyKernelAdapter;
use Symfony\Component\HttpKernel\Kernel;

/**
 * Class FakeSymfonyAdapter.
 */
class FakeSymfonyAdapter extends SymfonyKernelAdapter
{
    /**
     * @param string $environment
     * @param bool   $debug
     *
     * @return Kernel
     */
    protected static function createKernelByEnvironmentAndDebug(
        string $environment,
        bool $debug
    ): Kernel {
        return new FakeKernel($environment, $debug);
    }
}
