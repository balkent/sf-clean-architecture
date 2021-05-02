<?php

namespace Domain\Contract;

use Domain\Contract\TestResponseInterface;

interface TestPresenterInterface
{
    public function present(TestResponseInterface $response): void;
}
