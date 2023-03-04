<?php

declare(strict_types=1);

namespace App\Models\Singleton;

use Exception;

final class Boiler
{
    private static ?Boiler $instance = null;

    public static function getInstance(): Boiler
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function __construct(
        private bool $empty = true, protected bool $boiled = false
    )
    {
    }

    private function __clone()
    {
    }

    public function __wakeup()
    {
        throw new Exception("Cannot unserialize singleton");
    }

    public function fill(): void
    {
        if ($this->isEmpty()) {
            $this->empty = false;
            $this->boiled = false;
        }
    }

    public function drain(): void {
        if (!$this->isEmpty() && $this->isBoiled()) {
            $this->empty = true;
        }
    }

    public function boil(): void {
        if (!$this->isEmpty() && !$this->isBoiled()) {
            $this->boiled = true;
        }
    }

    public function isEmpty(): bool
    {
        return $this->empty;
    }

    public function isBoiled(): bool
    {
        return $this->boiled;
    }
}
