<?php

namespace CodesnifferRules\Sniffs;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;

class NoShortBoolCast implements Sniff
{
    public function register()
    {
        return [T_BOOLEAN_NOT];
    }

    public function process(File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();

        // Check if the next non-whitespace token is also a T_BOOLEAN_NOT
        $nextTokenPointer = $phpcsFile->findNext(T_WHITESPACE, $stackPtr + 1, null, true);

        if ($tokens[$nextTokenPointer]['code'] === T_BOOLEAN_NOT) {
            $error = 'Double negation (i.e., "!!") is prohibited.';
            $phpcsFile->addError($error, $stackPtr, 'Found');
        }
    }
}
