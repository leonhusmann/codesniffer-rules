<?php

declare(strict_types=1);

namespace CodesnifferRules\Sniffs;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;

class BlankLineBeforeStatement implements Sniff
{
    public function register()
    {
        return [T_BREAK];
    }

    public function process(File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();
        $prevToken = $phpcsFile->findPrevious(T_WHITESPACE, ($stackPtr - 1), null, true);

        if ($tokens[$prevToken]['line'] === $tokens[$stackPtr]['line']) {
            $error = 'Expected 1 newline before break statement; 0 found';
            $phpcsFile->addError($error, $stackPtr, 'MissingNewline');
        }
    }
}
