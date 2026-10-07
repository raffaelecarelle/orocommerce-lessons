<?php

namespace Algoritma\Bundle\TrainingBundle\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
use Oro\Bundle\EntityConfigBundle\Metadata\Attribute\Config;

#[Entity(repositoryClass: MyAwesomeEntityRepository::class)]
#[Table(name: 'my_awesome_entity')]
#[Config]
class MyAwesomeEntity
{
    #[Column(type: Types::INTEGER)]
    #[Id]
    #[GeneratedValue]
    private ?int $id = null;

    #[Column(type: Types::STRING, length: 255)]
    private ?string $name = null;

    #[Column(type: Types::TEXT)]
    private ?string $description = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}