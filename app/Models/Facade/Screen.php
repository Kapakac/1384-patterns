<?php

declare(strict_types=1);

namespace App\Models\Facade;

class Screen
{
    public function up(): string
    {
        return 'Screen up';
    }

    public function down(): string
    {
        return 'Screen down';
    }
}
