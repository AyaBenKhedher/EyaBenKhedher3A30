<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    #[Route('/category', name: 'app_category')]
    public function index(): Response
    {
        return $this->render('category/index.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }
    
    #[Route('/categoryshow/{category}', name: 'show_categoy')]
    public function showCategory($category)
    {
        return new Response("Category:".$category);
    }

    #[Route('/list', name: 'list')]
    public function listCategory()
    {
        $category= "list of category";
        return $this->render("category/list.html.twig",array("cat"=>$category));
    }

}
