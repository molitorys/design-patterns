<?php

namespace DesignPatterns\Command\ElectronicDevice\Command;

interface CommandInterface
{
    public function execute(): void;
    public function undo(): void;
}