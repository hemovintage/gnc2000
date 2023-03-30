<?php

namespace App\Controller\Admin;

use App\Entity\Job;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class JobCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Job::class;
    }


    public function configureFields(string $pageName): iterable
    {
        yield AssociationField::new("customer");
        yield AssociationField::new("vehicle");
        yield AssociationField::new("technician");
        yield DateField::new("expirationDate");
        yield TextField::new("description");
        yield TextField::new("price");
        yield TextField::new("status");
    }

}
