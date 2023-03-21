<?php

declare(strict_types=1);

namespace App\Models\Command;

use App\Contracts\Command\Command;

class RemoteControl
{
    const COUNT_BUTTONS = 5;
    private Command $slot;
    public ?Command $undoCommand;

    private array $onCommands;
    private array $offCommands;

    public function __construct()
    {
        $this->onCommands = range(1, self::COUNT_BUTTONS);
        $this->offCommands = range(1, self::COUNT_BUTTONS);

        for ($i = 0; $i < self::COUNT_BUTTONS; $i++) {
            $this->onCommands[$i] = fn() => null;
            $this->offCommands[$i] = fn() => null;
        }
    }

    public function setCommand(int $slot, Command $onCommand, Command $offCommand): void
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function buttonWasPressed(int $slot): void
    {
        $this->onCommands[$slot]->execute();
        $this->undoCommand = $this->onCommands[$slot];
    }

    public function offButtonWasPressed(int $slot): void
    {
        $this->offCommands[$slot]->execute();
        $this->undoCommand = $this->offCommands[$slot];
    }

    public function undoButtonWasPushed(): void
    {
        $this->undoCommand->undo();
    }

    public function printSlots(): array
    {
        $information = [];

        for ($i = 0; $i < self::COUNT_BUTTONS; $i++) {
            $information["Slot $i"] = get_class($this->onCommands[$i]) . ' - ' . get_class($this->offCommands[$i]);
        }

        return $information;
    }
}
