<?php
namespace App\Controllers;
use App\Core\CoreController;
use App\Traits\Controller;
use App\Traits\Twig;
use App\Traits\View;
class BaseController extends CoreController
{
    use Controller, Twig, View;
}