<?php

namespace App\Controller\Admin;

use App\Entity\JobType;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class JobTypeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return JobType::class;
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
