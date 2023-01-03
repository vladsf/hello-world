<?php

declare(strict_types=1);

namespace Vladsf\HelloWorld\Tests\Cli;

use PHPUnit\Framework\TestCase;
use Vladsf\HelloWorld\Cli\Args;
use Vladsf\HelloWorld\Language;

class ArgsTest extends TestCase
{
    /** @test */
    public function itCanParseLanguageArg(): void
    {
        $testArgv = [Args::ARG_LANG => Language::LANG_ENGLISH];
        $expected = Language::LANG_ENGLISH;
        $actual   = (new Args($testArgv))->getLanguageCode();
        self::assertSame($expected, $actual);
    }

    /** @test */
    public function itExceptsOnInvalidArg(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid argument foo');
        new Args(['foo=bar']);
    }
}