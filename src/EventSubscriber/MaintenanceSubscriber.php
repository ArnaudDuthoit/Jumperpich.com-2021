<?php

namespace App\EventSubscriber;

use Twig\Environment;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class MaintenanceSubscriber implements EventSubscriberInterface
{

    private const AUTHORIZED_IP = '127.0.0.2';
    private Environment $twig;
    private string $maintenanceOn;


    public function __construct(Environment $twig, string $maintenanceOn)
    {
        $this->twig = $twig;
        $this->maintenanceOn = $maintenanceOn;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            RequestEvent::class => 'onKernelRequest'
        ];
    }

    public function onKernelRequest(RequestEvent $event): void
    {

        $userIP=$event->getRequest()->getClientIp();

        if (!file_exists($this->maintenanceOn) || $userIP === self::AUTHORIZED_IP) {
            return;
        }

        try {
            $maintenanceTemplate = $this->twig->render('maintenance/site_under_maintenance.html.twig');
        } catch (LoaderError $e) {
        } catch (RuntimeError $e) {
        } catch (SyntaxError $e) {
        }

        $response = new Response($maintenanceTemplate, Response::HTTP_SERVICE_UNAVAILABLE);
        $event->setResponse($response);
        $event->stopPropagation();

    }

}

