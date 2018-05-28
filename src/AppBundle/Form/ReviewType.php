<?php
/**
 * Created by PhpStorm.
<<<<<<< HEAD
 * User: wilder20
 * Date: 28/05/18
 * Time: 16:17
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

=======
 * User: takne
 * Date: 14/05/18
 * Time: 16:06
 */
namespace AppBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
>>>>>>> 996c611a09205c2a960c08c0fe9a0b0de2a8465f
class ReviewType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('userRated')
            ->add('reviewAuthor')
<<<<<<< HEAD
            ->add('text', TextareaType::class, array('attr'=> array('maxlenght'=>250, 'label'=> 'Description')))
            ->add('publicationDate', DateType::class, array('data'=> new \DateTime('now')))
            ->add('note', IntegerType::class, array('attr'=> array('min' => 0, 'max' => 10, 'label' => 'Note')));
    }
    /**
    * {@inheritdoc}
    */
=======
            ->add('text')
            ->add('publicationDate')
            ->add('note');
    }/**
 * {@inheritdoc}
 */
>>>>>>> 996c611a09205c2a960c08c0fe9a0b0de2a8465f
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Review'
        ));
    }
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_review';
    }
}