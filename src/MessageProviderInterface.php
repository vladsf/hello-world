<?php

declare(strict_types=1);

namespace Vladsf\HelloWorld;

interface MessageProviderInterface
{
    /**
     * Get the hello world message in the configured Language
     */
    public function getMessage(): string;
}