<?php
namespace TimeManager\Controller;

use TimeManager\Sys\Controller;
use TimeManager\Core\Template;

class MainController extends Controller
{
    public function __construct()
    {
        Controller::init();
    }

    public function index()
    {
        return Template::render();
    }
}
