<?php

namespace App\Form\reissuevoucher;

use App\Entity\reissuevoucher\Voucher;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VoucherType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('reason', ChoiceType::class, [
                'label' => 'Reason',
                'choices' => [
                    'Lost' => 'Lost',
                    'Stolen' => 'Stolen',
                    'Damaged' => 'Damaged',
                    'Other' => 'Other',
                ],
                'expanded' => true,
                'multiple' => false,
                'attr' => ['class' => 'form-check'],
            ])
            ->add('name', TextType::class, ['label' => 'Name : ', 'attr' => ['class' => 'form-control']])
            ->add('idNumber', TextType::class, ['label' => 'ID/Passport Number : ','attr' => ['class' => 'form-control'],])
            ->add('giftCardNumber', TextType::class, ['label' => 'Gift Card Number : ','attr' => ['class' => 'form-control'],])
            ->add('originalIssuingStore', TextType::class, ['label' => 'Original Issuing Store : ','attr' => ['class' => 'form-control'],])
            ->add('dateOfPurchase', DateType::class, ['label' => 'Date of Purchase : ','attr' => ['class' => 'form-control'],])
            ->add('timeOfPurchase', TimeType::class, ['label' => 'Time of Purchase : ','attr' => ['class' => 'form-control'],])
            ->add('valueLoadedOnCard', TextType::class, ['label' => 'Value Loaded on Card : ','attr' => ['class' => 'form-control'],])
            ->add('furtherDetails', TextareaType::class, ['label' => 'Any Further Details : ','attr' => ['class' => 'form-control'],])
            ->add('requestedBy', TextType::class, ['label' => 'Requested By : ','attr' => ['class' => 'form-control'],])
            ->add('requestedBySignature', TextType::class, ['label' => 'Requested By Signature : ','attr' => ['class' => 'form-control'],])
            ->add('requestedDate', DateType::class, ['label' => 'Requested Date : ','attr' => ['class' => 'form-control'],])
            ->add('newEvoucherReference', TextType::class, ['label' => 'New eVoucher Reference : ','attr' => ['class' => 'form-control'],])
            ->add('newEvoucherDate', DateType::class, ['label' => 'New eVoucher Date : ','attr' => ['class' => 'form-control'],])
            ->add('cardLinkedTo', TextType::class, ['label' => 'Card Linked To : ','attr' => ['class' => 'form-control'],])
            ->add('deliveredTo', TextType::class, ['label' => 'Delivered To : ','attr' => ['class' => 'form-control'],])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Voucher::class,
        ]);
    }
}


