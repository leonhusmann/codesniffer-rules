<?php

declare(strict_types=1);

namespace CodesnifferRules\Sniffs;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;

class DisallowBlankLineAfterPhpdocSniff implements Sniff
{
    public function register()
    {
        return [T_DOC_COMMENT];
    }

    public function process(File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();

        // Find the next non-whitespace token after the PHPDoc comment.
        $nextToken = $phpcsFile->findNext(T_WHITESPACE, ($stackPtr + 1), null, true);

        if ($tokens[$nextToken]['line'] === $tokens[$stackPtr]['line'] + 1) {
            $error = 'No blank line allowed after PHPDoc comment';
            $phpcsFile->addError($error, $stackPtr, 'BlankLineAfterPhpDoc');
        }
    }
}
