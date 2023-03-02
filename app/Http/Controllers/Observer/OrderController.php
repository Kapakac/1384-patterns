<?php

namespace App\Http\Controllers\Observer;

use App\Models\Observer\OrderRepository;
use App\Models\Observer\EmailNotice;
use App\Http\Controllers\Controller;
use App\Models\Observer\SMSNotice;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OrderController extends Controller
{
    /**
     * Просто хардкодный пример ТОЛЬКО для демо-отображения паттерна "Наблюдатель"
     */
    public function index(Request $request)
    {
        $orderRepository = new OrderRepository();
        $orderRepository->attach(new EmailNotice());
        $orderRepository->attach(new SMSNotice());
        $orderRepository->changeDatetime(Carbon::now()->addDays(5));
    }
}
