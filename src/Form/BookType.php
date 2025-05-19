<?php

namespace App\Form;

use App\Entity\Author;
use App\Entity\Book;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('publicationDate', null, [
                'widget' => 'single_text',
            ])
            ->add('category', ChoiceType::class, [
                'choices' => [
                    'Science-Fiction' => 'sci-fi',
                    'Mystery' => 'mystery',
                    'Auto-biography' => 'auto-biography',
                    'Romance' => 'Romance'
                ],
            ])
            ->add('author', EntityType::class, [
                'class' => Author::class,
                'choice_label' => 'username',
            ]);
        if ($options['is_edit'] === true) {
            $builder->add('published', CheckboxType::class, [
                'required' => false,
                'label' => 'Published',
            ]);
        }
    }

    public
    function configureOptions(
        OptionsResolver $resolver
    ): void {
        $resolver->setDefaults([
            'data_class' => Book::class,
            'is_edit' => false,
        ]);
    }
}
