<?php

namespace MaremmaCinghialeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Squadra
 *
 * @ORM\Table(name="squadra", uniqueConstraints={@ORM\UniqueConstraint(name="numero", columns={"numero", "id_atc"})})
 * @ORM\Entity
 */
class Squadra
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=50, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=5, nullable=false)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="url_foto", type="string", length=150, nullable=true)
     */
    private $urlFoto;

    /**
     * @var integer
     *
     * @ORM\Column(name="catture_cinghiali", type="integer", nullable=true)
     */
    private $cattureCinghiali = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_atc", type="integer", nullable=false)
     */
    private $idAtc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="trn_date", type="date", nullable=false)
     */
    private $trnDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="tot_users_squadra", type="integer", nullable=true)
     */
    private $totUsersSquadra;

    /**
     * @var float
     *
     * @ORM\Column(name="quota_annuale", type="float", precision=10, scale=0, nullable=true)
     */
    private $quotaAnnuale;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

