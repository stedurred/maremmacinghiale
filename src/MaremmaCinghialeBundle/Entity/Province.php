<?php

namespace MaremmaCinghialeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Province
 *
 * @ORM\Table(name="province")
 * @ORM\Entity
 */
class Province
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_regione", type="integer", nullable=false)
     */
    private $idRegione;

    /**
     * @var string
     *
     * @ORM\Column(name="sigla_provincia", type="string", length=2, nullable=false)
     */
    private $siglaProvincia;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_provincia", type="string", length=50, nullable=false)
     */
    private $nomeProvincia;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

