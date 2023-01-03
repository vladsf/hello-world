<?php

declare(strict_types=1);

namespace Vladsf\HelloWorld;

interface OutputInterface
{
    public function sendOutput(MessageProviderInterface $messageProvider): void;
}