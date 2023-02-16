<?php

namespace App\Abstracts\Observer;

abstract class Observer implements \SplObserver
{
    abstract public function update(\SplSubject $subject): void;
}
