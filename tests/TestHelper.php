<?php

declare(strict_types=1);

namespace CodesnifferRulesTest;

final class TestHelper
{
    static function extractMessage(array $errors): string|null
    {
        foreach ($errors as $key => $value) {
            if ($key === 'message') {
                return $value;
            }

            if (is_array($value)) {
                $result = self::extractMessage($value);
                if ($result !== null) {
                    return $result;
                }
            }
        }

        return null;
    }
}