<?php

namespace Domain\Model;

final class Home
{
    private string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function getHomeText(): string
    {
        return  $this->text . ' word';
    }

    public static function addExclamation(string $text): string
    {
        return  $text . '!';
    }
}
