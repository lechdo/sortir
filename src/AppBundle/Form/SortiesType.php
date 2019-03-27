<?php

namespace AppBundle\Form;

use AppBundle\Entity\Lieu;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class SortiesType extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("nom", TextType::class, [
                "label"=>"Nom de la sortie :"
            ])
            ->add("dateDebut", DateTimeType::class, [
                "label"=> "Date de la sortie :",
                "widget" => "single_text",
            ])

            ->add("dateCloture", DateTimeType::class, [
                "label"=> "Date de clôture des inscriptions :",
                "widget" => "single_text",
            ])

            ->add("nbInscriptionsMax", IntegerType::class, [
                "label"=>"Nombre d'inscriptions max :"
            ])
            ->add("duree", IntegerType::class, [
                "label"=>"Durée :",
                "required"=>false

            ])
            ->add("description", TextType::class,[
                "label"=>"Description & infos :"
            ])

            ->add("lieu", EntityType::class, [
                "class"=>Lieu::class,
                "label"=> "Lieu :"
            ])

            ->add("Enregistrer", SubmitType::class)
            ->add("Publier", SubmitType::class,[
                "label"=>"Publier la sortie"
            ])
            ->add("Annuler", SubmitType::class);

    }
}




