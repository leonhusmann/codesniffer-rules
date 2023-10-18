<?php

declare(strict_types=1);

namespace CodesnifferRulesTest\Sniffs;

use CodesnifferRules\Sniffs\NoShortBoolCast;
use CodesnifferRulesTest\TestHelper;
use SlevomatCodingStandard\Sniffs\TestCase;

class NoShortBoolCastTest extends TestCase
{
    protected static function getSniffClassName(): string
    {
        return NoShortBoolCast::class;
    }

    public function testNoErrors(): void
    {
        $report = self::checkFile(__DIR__ . '/../data/NoShortBoolCast.NoErrors.php');

        $errors = $report->getErrors();
        self::assertEmpty($errors);
    }

    public function testShortBoolCast(): void
    {
        $report = self::checkFile(__DIR__ . '/../data/NoShortBoolCast.ShortBoolCast.php');

        $errors = $report->getErrors();
        self::assertCount(1, $errors);

        self::assertSame('Double negation (i.e., "!!") is prohibited.', TestHelper::extractMessage($errors));
    }
}
