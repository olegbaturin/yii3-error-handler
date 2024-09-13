<?php

declare(strict_types=1);

use Yiisoft\ErrorHandler\ErrorResponseFactory;
use Yiisoft\ErrorHandler\ErrorResponseFactoryInterface;
use Yiisoft\ErrorHandler\Renderer\HtmlRenderer;
use Yiisoft\ErrorHandler\ThrowableRendererInterface;

/**
 * @var array $params
 */

return [
    ThrowableRendererInterface::class => HtmlRenderer::class,
    ErrorResponseFactoryInterface::class => ErrorResponseFactory::class,
];
