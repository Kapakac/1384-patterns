<?php

declare(strict_types=1);

namespace App\Abstracts\Observer;

abstract class Observer implements \SplObserver
{
    abstract public function update(\SplSubject $subject): void;
}
