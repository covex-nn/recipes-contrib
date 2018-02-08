<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\NotificationBundle\Entity\BaseMessage;

/**
 * @ORM\Entity
 * @ORM\Table(name="notification__message")
 */
class SonataNotificationMessage extends BaseMessage
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var int
     */
    protected $id;

    public function getId()
    {
        return $this->id;
    }
}
