<?php

namespace MaremmaCinghialeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Regioni
 *
 * @ORM\Table(name="regioni")
 * @ORM\Entity
 */
class Regioni
{
    /**
     * @var string
     *
     * @ORM\Column(name="regione", type="string", length=50, nullable=false)
     */
    private $regione;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

