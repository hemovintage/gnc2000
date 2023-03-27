<?php

namespace App\Controller\Admin;

use App\Entity\Brand;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class BrandCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Brand::class;
    }

    // #[Route('/brand', name: 'Brand Crud')]
    // public function index(): Response
    // {
    //      $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
    //      return $this->redirect($adminUrlGenerator->setController(BrandCrudController::class)->generateUrl());
    // }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
