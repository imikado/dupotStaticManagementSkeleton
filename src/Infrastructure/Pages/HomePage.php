<?php

namespace My\Infrastructure\Pages;

use Dupot\StaticManagementFramework\Page\PageAbstract;
use Dupot\StaticManagementFramework\Render\Layout;
use Dupot\StaticManagementFramework\Render\View;

class HomePage extends PageAbstract
{


    protected $layout = null;

    public function __construct()
    {
        $this->layout = new Layout(__DIR__ . '/Layouts/default.php');
    }



    public function index()
    {

        $view = new View(
            __DIR__ . '/View/home.php',
            []
        );

        $this->layout->appendContext('contentList', $view);

        return $this->render();
    }



    public function render()
    {

        echo $this->layout->render();
    }
}
