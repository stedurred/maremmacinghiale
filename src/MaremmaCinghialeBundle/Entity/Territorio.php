<?php

namespace MaremmaCinghialeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Territorio
 *
 * @ORM\Table(name="territorio")
 * @ORM\Entity
 */
class Territorio
{
    /**
     * @var string
     *
     * @ORM\Column(name="comprensorio", type="string", length=2000, nullable=false)
     */
    private $comprensorio;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_provincia", type="integer", nullable=false)
     */
    private $idProvincia;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

