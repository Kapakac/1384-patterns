<?php

declare(strict_types=1);

namespace App\Http\Controllers\Proxy;

use App\Http\Controllers\Controller;
use App\Models\Proxy\PersonProxy;
use App\Models\Proxy\Person;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    /**
     * Просто хардкодный пример ТОЛЬКО для демо-отображения паттерна "Заместитель"
     */
    public function index(Request $request)
    {
        $result = [];

        $person = new Person();
        $person->setHotOrNotRating(5);

        $result['rating(before proxy)'] = $person->getHotOrNotRating();

        $personProxy1 = new PersonProxy($person, 'Gena');
        $personProxy1->setHotOrNotRating(5);

        $personProxy2 = new PersonProxy($person, 'Rick');
        $personProxy2->setHotOrNotRating(5);

        $result['rating(after proxy)'] = $person->getHotOrNotRating();

        return dd($result);
    }
}

