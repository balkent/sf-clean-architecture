<?php

namespace Infrastructure\Controller;

use Domain\Request\TestRequest;
use Domain\UseCase\TestUseCase;
use Presentation\Presenter\TestPresenter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    /**
     * @Route("/", name="home")
     */
    public function index(TestUseCase $useCase): Response
    {
        $request = new TestRequest('Hello');
        $presenter = new TestPresenter();

        $useCase->execute($request, $presenter);

        return new Response(
            '<html><body>'. $presenter->getViewModel()->getHomeText().'</body></html>'
        );
    }
}
