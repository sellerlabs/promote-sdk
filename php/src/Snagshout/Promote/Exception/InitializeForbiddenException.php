<?php

/**
 * Copyright 2016-2018, Snagshout <developers@snagshout.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Merchant package
 */

namespace Snagshout\Promote\Exception;

class InitializeForbiddenException extends \RuntimeException implements ClientException
{
    private $error;

    public function __construct(\Snagshout\Promote\Model\Error $error)
    {
        parent::__construct('Something went wrong', 403);
        $this->error = $error;
    }

    public function getError()
    {
        return $this->error;
    }
}
