<?php

namespace Domain\UseCase;

use Domain\Model\Home;
use Domain\Request\TestRequest;
use Domain\Response\TestResponse;
use Domain\Contract\TestPresenterInterface;

final class TestUseCase
{
    public function execute(TestRequest $request, TestPresenterInterface $presenter): void
    {
        $home = new Home($request->getHomeText());

        $text = Home::addExclamation($home->getHomeText());

        $presenter->present(new TestResponse($text));
    }
}
