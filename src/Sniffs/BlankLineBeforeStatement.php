<?php

declare(strict_types=1);

namespace CodesnifferRules\Sniffs;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;

use const T_BREAK;
use const T_WHITESPACE;

class BlankLineBeforeStatement implements Sniff
{
    /** @return list<int> */
    public function register(): array
    {
        return [T_BREAK];
    }

    public function process(File $phpcsFile, mixed $stackPtr): void
    {
        $tokens    = $phpcsFile->getTokens();
        $prevToken = $phpcsFile->findPrevious(T_WHITESPACE, $stackPtr - 1, null, true);

        if ($tokens[$prevToken]['line'] !== $tokens[$stackPtr]['line']) {
            return;
        }

        $error = 'Expected 1 newline before break statement; 0 found';
        $phpcsFile->addError($error, $stackPtr, 'MissingNewline');
    }
}
