<?php

namespace AppBundle\EventListener;


use AppBundle\Entity\User;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;

class RemoveListener
{
    public function preRemove(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();

        if (!$entity instanceof User) {
            return;
        }
        if ($entity->getUsername() === 'admin') {
            throw new \Exception('Can\'t delete admin user');
        }
    }
}
