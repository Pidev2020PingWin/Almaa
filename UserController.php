<?php


namespace UserBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function HomeAction()
    {
        return $this->render('@User/HomePage/homepage.html.twig' );
    }
}