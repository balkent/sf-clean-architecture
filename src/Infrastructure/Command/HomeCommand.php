<?php

namespace Infrastructure\Command;

use Domain\Request\TestRequest;
use Domain\UseCase\TestUseCase;
use Presentation\Presenter\TestPresenter;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HomeCommand extends Command
{
    protected static $defaultName = 'home:text';

    private TestUseCase $useCase;

    public function __construct(TestUseCase $useCase)
    {
        parent::__construct();

        $this->useCase = $useCase;
    }

    protected function configure(): void
    {
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $request = new TestRequest('Wellcome');
        $presenter = new TestPresenter();

        $this->useCase->execute($request, $presenter);

        echo $presenter->getViewModel()->getHomeText();

        return Command::SUCCESS;
    }
}
