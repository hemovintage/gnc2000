<?php

namespace App\Controller\Admin;

use App\Entity\Vehicle;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class VehicleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Vehicle::class;
    }

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
