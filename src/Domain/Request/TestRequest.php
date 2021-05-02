<?php

namespace Domain\Request;

final class TestRequest
{
    private string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function getHomeText(): string
    {
        return  $this->text;
    }
}
