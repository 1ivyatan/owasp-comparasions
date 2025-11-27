<?php

namespace App\Enums\Registration;

enum Priority: string
{
    case LOW = 'low';
    case MED = 'med';
    case HIGH = 'high';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function valuesString(string $delimiter): array
    {
        return implode($delimiter, array_column(self::cases(), 'value'));
    }
}
