<?php

namespace App\Form\FormExtension;

use Psr\Log\LoggerInterface;
use Symfony\Component\Form\AbstractType;
use App\EventSubscriber\HoneyPotSubscriber;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class HoneyPotType extends AbstractType
{

    private LoggerInterface $logger;
    private RequestStack $requestStack;

    public function __construct(LoggerInterface $logger, RequestStack $requestStack)
    {
        $this->logger = $logger;
        $this->requestStack = $requestStack;
    }

    protected const DELICIOUS_HONEY_CANDY_FOR_BOT = "phone";

    protected const FABULOUS_HONEY_CANDY_FOR_BOT = "faxnumber";

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add(self::DELICIOUS_HONEY_CANDY_FOR_BOT, TextType::class, $this->setHoneyPotFieldConfiguration())
            ->add(self::FABULOUS_HONEY_CANDY_FOR_BOT, TextType::class, $this->setHoneyPotFieldConfiguration())
            ->addEventSubscriber(new HoneyPotSubscriber($this->logger, $this->requestStack));
    }

    protected function setHoneyPotFieldConfiguration(): array
    {
        return [
            'attr' => [
                'autocomplete' => 'off',
                'tabindex' => '-1'
            ],
            'data' => 'fake data :(', //warning DELETE cette ligne apres test
            'mapped' => false,
            'required' => false
        ];
    }

}