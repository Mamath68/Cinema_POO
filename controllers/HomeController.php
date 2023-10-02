<?php

// Ouvre le namespace Controller
namespace Controllers;

// fait appel a Session dans le namespace Core
use Core\Session;
// fait appel a AbstractController dans le namespace Core
use Core\AbstractController;
// fait appel a ControllerInterface dans le namespace Core
use Core\ControllerInterface;

// class HomeController hérite de la classe AbstractController et implémente ControllerInterface.
class HomeController extends AbstractController implements ControllerInterface
{

    public function index()
    {
        return [
            "view" => VIEW_DIR . "home.php",
        ];
    }

    public function mentions()
    {
        return [
            "view" => VIEW_DIR . "home/mentions_legal.php"
        ];
    }

    public function conditions()
    {
        return [
            "view" => VIEW_DIR . "home/conditions.php"
        ];
    }
}
