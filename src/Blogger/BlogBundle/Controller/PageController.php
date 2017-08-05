<?php

/**
 * Created by PhpStorm.
 * User: Дом
 * Date: 08.07.2017
 * Time: 16:08
 */

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this ->render('BloggerBlogBundle:Page:index.html.twig');
    }
}
