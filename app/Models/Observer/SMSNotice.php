<?php

namespace App\Models\Observer;

use App\Abstracts\Observer\Observer;

class SMSNotice extends Observer
{
    public function update(\SplSubject $subject): void
    {
        echo '(SMS) Delivery date has been changed to ' . $subject->deliveryAt->format('Y-m-d') . '<br>';
    }
}
