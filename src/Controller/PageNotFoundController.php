<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageNotFoundController extends Controller
{

    public function pageNotFoundAction()
    {
        return $this->redirectToRoute('homepage');
    }

}