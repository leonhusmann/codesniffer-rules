<?php

namespace CodesnifferRulesTest\Sniffs;

use CodesnifferRules\Sniffs\BlankLineBeforeStatement;
use SlevomatCodingStandard\Sniffs\TestCase;

class BlankLineBeforeStatementTest extends TestCase
{
    protected static function getSniffClassName(): string
    {
        return BlankLineBeforeStatement::class;
    }

    public function testDefaultSettingsNoErrors(): void
    {
        $report = self::checkFile(__DIR__ . '/../data/BlankLineBeforeStatementTest.NoErrors.php');

        $errors = $report->getErrors();
        self::assertEmpty($errors);
    }


    public function testDefaultSettingsMissingNewlineBetween(): void
    {
        $report = self::checkFile(__DIR__ . '/../data/BlankLineBeforeStatementTest.MissingNewlineBetween.php');

        $errors = $report->getErrors();
        self::assertSame([], $errors);
    }
}
