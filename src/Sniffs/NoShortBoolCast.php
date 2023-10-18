<?php

declare(strict_types=1);

namespace CodesnifferRules\Sniffs;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;

use const T_BOOLEAN_NOT;
use const T_WHITESPACE;

class NoShortBoolCast implements Sniff
{
    /** @return list<int> */
    public function register(): array
    {
        return [T_BOOLEAN_NOT];
    }

    public function process(File $phpcsFile, mixed $stackPtr): void
    {
        $tokens = $phpcsFile->getTokens();

        // Check if the next non-whitespace token is also a T_BOOLEAN_NOT
        $nextTokenPointer = $phpcsFile->findNext(T_WHITESPACE, $stackPtr + 1, null, true);

        if ($tokens[$nextTokenPointer]['code'] !== T_BOOLEAN_NOT) {
            return;
        }

        $error = 'Double negation (i.e., "!!") is prohibited.';
        $phpcsFile->addError($error, $stackPtr, 'Found');
    }
}
