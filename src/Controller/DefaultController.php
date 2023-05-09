<?php

namespace App\Controller;

use App\Model\WallpaperModel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    public function __construct(private WallpaperModel $model)
    {
        
    }
    
    #[Route('/', name: 'app_default')]
    public function index(): Response
    {
        $wallpapers = $this->model->getAll();

        return $this->render('default/index.html.twig', [
            'wallpapers' => $wallpapers,
        ]);
    }

    #[Route('/filter-wallpapers')]
    public function filterWallpapers(Request $request): JsonResponse
    {
        $category = $request->query->get('category');
        $result = $category === 'all' ? $this->model->getAll() : $this->model->getWallpapersByCategory($category);
        return new JsonResponse($result);
    }
}
