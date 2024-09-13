<?php

declare(strict_types=1);

namespace Yiisoft\ErrorHandler;

use Throwable;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

interface ErrorResponseFactoryInterface
{
    /**
     * Generates a response with error information.
     */
    public function createResponse(Throwable $t, ServerRequestInterface $request): ResponseInterface;
}
