<?php

namespace Algoritma\Bundle\TrainingBundle\EventListener\Customer;

use Doctrine\Common\Util\ClassUtils;
use Oro\Bundle\CustomerBundle\Provider\CustomerConfigurationFormProvider;
use Oro\Bundle\SalesBundle\Entity\Opportunity;
use Oro\Bundle\UIBundle\Event\BeforeListRenderEvent;
use Oro\Bundle\UIBundle\Event\BeforeViewRenderEvent;
use Oro\Bundle\SalesBundle\Provider\Customer\ConfigProvider as CustomerConfigProvider;

class CustomerFieldsViewListener
{

    public function __construct(
        private CustomerConfigProvider $customerConfigProvider
    )
    {
    }

    public function addFields(BeforeListRenderEvent $event)
    {
        $template = $event->getEnvironment()->render(
            '@AlgoritmaTraining/Customer/customer_fields.html.twig',
            ['form' => $event->getFormView()]
        );

        $event->getScrollData()->addSubBlockData(0, '0', $template);
    }
}