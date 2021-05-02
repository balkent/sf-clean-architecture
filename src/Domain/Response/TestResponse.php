<?php

namespace Domain\Response;

use Domain\Contract\TestResponseInterface;

final class TestResponse implements TestResponseInterface
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
