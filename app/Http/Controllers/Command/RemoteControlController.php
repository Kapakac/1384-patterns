<?php

declare(strict_types=1);

namespace App\Http\Controllers\Command;

use App\Models\Command\LightOffCommand;
use App\Models\Command\StereoOffCommand;
use App\Models\Command\StereoOnCommand;
use App\Models\Command\LightOnCommand;
use App\Models\Command\RemoteControl;
use App\Http\Controllers\Controller;
use App\Models\Command\Stereo;
use App\Models\Command\Light;
use Illuminate\Http\Request;

class RemoteControlController extends Controller
{
    /**
     * Просто хардкодный пример ТОЛЬКО для демо-отображения паттерна "Команда"
     */
    public function index(Request $request)
    {
        $remote = new RemoteControl();

        $light = new Light();
        $lightOn = new LightOnCommand($light);
        $lightOff = new LightOffCommand($light);

        $stereo = new Stereo();
        $stereoOn = new StereoOnCommand($stereo);
        $stereoOff = new StereoOffCommand($stereo);

        $remote->setCommand(0, $lightOn, $lightOff);
        $remote->buttonWasPressed(0);
        $remote->offButtonWasPressed(0);
        $remote->undoButtonWasPushed();

        $remote->setCommand(1, $stereoOn, $stereoOff);
        $remote->buttonWasPressed(1);
        $remote->offButtonWasPressed(1);
        $remote->undoButtonWasPushed();

        dd($remote->printSlots());
    }
}
