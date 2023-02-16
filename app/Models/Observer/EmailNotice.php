<?php

namespace App\Models\Observer;

use App\Abstracts\Observer\Observer;

class EmailNotice extends Observer
{
    public function update(\SplSubject $subject): void
    {
        echo '(E-MAIL) Delivery date has been changed to ' . $subject->deliveryAt->format('Y-m-d')  . '<br>';
    }
}
