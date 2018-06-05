<?php

namespace MaremmaCinghialeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Atc
 *
 * @ORM\Table(name="atc")
 * @ORM\Entity
 */
class Atc
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_territorio", type="integer", nullable=false)
     */
    private $idTerritorio;

    /**
     * @var string
     *
     * @ORM\Column(name="sigla_atc", type="string", length=4, nullable=false)
     */
    private $siglaAtc;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_atc", type="string", length=150, nullable=false)
     */
    private $nomeAtc;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

