<?php

namespace App\Controller\Admin;

use App\Entity\Vehicle;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use PhpParser\Node\Scalar\MagicConst\Line;

class VehicleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Vehicle::class;
    }


    public function configureFields(string $pageName): iterable
    {
        
        yield TextField::new("firstname");
        yield TextField::new("lastname");
        yield TextField::new("phone");
        yield TextField::new("email");
        yield AssociationField::new("model");
        yield TextField::new("numberPlate");
        yield BooleanField::new("enabled");
    }

}
