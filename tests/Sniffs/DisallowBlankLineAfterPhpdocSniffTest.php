<?php

namespace CodesnifferRulesTest\Sniffs;

use CodesnifferRules\Sniffs\BlankLineBeforeStatement;
use CodesnifferRules\Sniffs\DisallowBlankLineAfterPhpdocSniff;
use SlevomatCodingStandard\Sniffs\TestCase;

class DisallowBlankLineAfterPhpdocSniffTest extends TestCase
{
    protected static function getSniffClassName(): string
    {
        return DisallowBlankLineAfterPhpdocSniff::class;
    }

    public function testLeadsNoErrors(): void
    {
        $report = self::checkFile(__DIR__ . '/../data/DisallowBlankLineAfterPhpdocTest.NoErrors.php');

        $errors = $report->getErrors();
        self::assertEmpty($errors);
    }


    public function testDocBlockHasEmptyLineAfterLeadsToError(): void
    {
        $report = self::checkFile(__DIR__ . '/../data/DisallowBlankLineAfterPhpdocTest.Error.php');

        var_dump($report->getErrors());

        $errors = $report->getErrors();
        self::assertSame([], $errors);
    }
}
