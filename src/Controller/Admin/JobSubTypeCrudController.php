<?php

namespace App\Controller\Admin;

use App\Entity\JobSubType;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class JobSubTypeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return JobSubType::class;
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
