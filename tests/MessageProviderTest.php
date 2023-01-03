<?php

declare(strict_types=1);

namespace Vladsf\HelloWorld\Tests;

use Generator;
use PHPUnit\Framework\TestCase;
use Vladsf\HelloWorld\Language;
use Vladsf\HelloWorld\MessageProvider;

class MessageProviderTest extends TestCase
{
    /**
     * @dataProvider
     * @return Generator<Language>
     */
    public function provideLanguage(): Generator
    {
        foreach (Language::LANGUAGES as $languageCode) {
            yield $languageCode => [new Language($languageCode)];
        }
    }

    /**
     * @test
     * @dataProvider provideLanguage
     */
    public function itCanProvideEnglishMessages(Language $language): void
    {
        $actual = (new MessageProvider($language))->getMessage();
        self::assertNotEmpty($actual);
    }
}