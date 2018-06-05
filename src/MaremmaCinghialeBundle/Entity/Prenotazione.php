<?php

namespace MaremmaCinghialeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prenotazione
 *
 * @ORM\Table(name="prenotazione")
 * @ORM\Entity
 */
class Prenotazione
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=true)
     */
    private $idUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_prenotazione", type="datetime", nullable=false)
     */
    private $dataPrenotazione;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_evento", type="integer", nullable=false)
     */
    private $idEvento;

    /**
     * @var string
     *
     * @ORM\Column(name="stato", type="string", length=20, nullable=false)
     */
    private $stato;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_ip", type="string", length=15, nullable=true)
     */
    private $customerIp;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

