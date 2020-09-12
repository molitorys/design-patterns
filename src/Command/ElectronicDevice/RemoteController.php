<?php

namespace DesignPatterns\Command\ElectronicDevice;

use DesignPatterns\Command\ElectronicDevice\Command\CommandInterface;

class RemoteController
{
    public function press(CommandInterface $command): void
    {
        $command->execute();
    }

    public function pressUndo(CommandInterface $command): void
    {
        $command->undo();
    }
}