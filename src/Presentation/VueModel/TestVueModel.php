<?php

namespace Presentation\VueModel;

final class TestVueModel
{
    private string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function getHomeText()
    {
        return  $this->text;
    }
}
