<?php

namespace MauticPlugin\EmailsQCounterBundle\Controller;

use Mautic\CoreBundle\Controller\CommonController;
use MauticPlugin\EmailsQCounterBundle\Service\EmailsQueueCounterService;

class EmailsQCounterController extends CommonController
{
    private EmailsQueueCounterService $service;

    public function __construct(EmailsQueueCounterService $service)
    {
        $this->service = $service;
    }

    public function indexAction()
    {
        $count = $this->service->countEmailsLeft();

        return $this->delegateView([
            'viewParameters' => [
                'count' => $count
            ],
            'contentTemplate' => 'EmailsQCounterBundle:Settings:index.html.php'
        ]);
    }
}
