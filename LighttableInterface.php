<?php

interface LighttableInterface
{
    public function switchOn(int $percentage): int;
    public function SwitchOff(int $percentage): int;
}