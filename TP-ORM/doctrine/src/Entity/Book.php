<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Book
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer', nullable: false, options: ['unsigned' => true])]
    protected ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    protected string $name = '';
}
