<?php

namespace App\EventListeners;

use Pimcore\Model\DataObject\Beauty;

class MyObjectListener
{

    public function beforeUpdate(\Pimcore\Event\Model\DataObjectEvent $event)
    {
        $object = $event->getObject();

        if ($object instanceof Beauty) {
            if ($object->getmanufacturing_date() > $object->getexpiration_date()) {
                throw new \Exception("expiration date cannot be less than manufacturing date");
            }
        }
    }
}