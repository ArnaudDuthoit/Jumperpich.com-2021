<?php


namespace App\EventSubscriber;

use App\Entity\Projet;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Security;

class MixeSubscriber implements EventSubscriberInterface
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public static function getSubscribedEvents()
    {
        return [

            BeforeEntityPersistedEvent::class => ['setUser']

        ];
    }

    public function setUser(BeforeEntityPersistedEvent $event)
    {
        $entity = $event->getEntityInstance();
        if ($entity instanceof Projet) {
            $entity->setUser($this->security->getUser());
        }
    }
}
