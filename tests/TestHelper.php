<?php

declare(strict_types=1);

namespace CodesnifferRulesTest;

use function is_array;

final class TestHelper
{
    /** @param list<mixed> $errors */
    public static function extractMessage(array $errors): string|null
    {
        foreach ($errors as $key => $value) {
            if ($key === 'message') {
                return $value;
            }

            if (! is_array($value)) {
                continue;
            }

            $result = self::extractMessage($value);
            if ($result !== null) {
                return $result;
            }
        }

        return null;
    }
}
