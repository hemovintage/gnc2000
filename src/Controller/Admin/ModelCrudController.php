<?php

namespace App\Controller\Admin;

use App\Entity\Model;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;

class ModelCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Model::class;
    }
    
    public function configureFields(string $pageName): iterable
    {
       // yield AssociationField::new("brand");
        yield TextField::new("name");
        yield BooleanField::new("enabled");
    }
    
}
