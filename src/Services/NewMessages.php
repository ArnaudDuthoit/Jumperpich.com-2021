<?php
/**
 * Created by PhpStorm.
 * User: arnau
 * Date: 26/04/2019
 * Time: 09:28
 */

namespace App\Services;

use App\Entity\Contact;
use App\Repository\ContactRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Security;


class NewMessages extends ContactRepository
{
    public $val;


    /**
     * NewMessages constructor.
     * @param ManagerRegistry $registry
     * @param Security $security
     */
    public function __construct(ManagerRegistry $registry, Security $security)
    {
        parent::__construct($registry, Contact::class);

    }

    public function getCountMessages()
    {

        return  $this->CountUnreadCount();
    }
}