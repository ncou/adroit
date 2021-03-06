<?php

/**
 * This file is part of the Adroit package.
 *
 * (c) bitExpert AG
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types = 1);

namespace bitExpert\Adroit\Responder\Resolver;

use bitExpert\Adroit\Resolver\Resolver;

/**
 * A responder resolver will provide a {@link \bitExpert(Adriot\Action\Action} instance
 * for the given $actionToken,
 *
 * @api
 */
interface ResponderResolver extends Resolver
{
}
