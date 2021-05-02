<?php

namespace Presentation\Presenter;

use Presentation\VueModel\TestVueModel;
use Domain\Contract\TestResponseInterface;
use Domain\Contract\TestPresenterInterface;

final class TestPresenter implements TestPresenterInterface
{
    private TestVueModel $viewModel;

    public function present(TestResponseInterface $response): void
    {
        $this->viewModel = new TestVueModel($response->getHomeText());
    }

    public function getViewModel(): TestVueModel
    {
        return $this->viewModel;
    }
}
