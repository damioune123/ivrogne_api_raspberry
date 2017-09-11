<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductPatchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
        $builder->add('productCategory');
        $builder->add('barcode');
        $builder->add('productPromotionAdmin');
        $builder->add('productPromotionUser');
        $builder->add('amountAvailableInStock');
        $builder->add('productRealPrice');
        $builder->add('productQuantityCl');
        $builder->add('productAlcoolPercentage');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Product',
            'csrf_protection' => false
        ]);
    }
}