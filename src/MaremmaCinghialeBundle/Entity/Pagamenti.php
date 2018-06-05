<?php

namespace MaremmaCinghialeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pagamenti
 *
 * @ORM\Table(name="pagamenti")
 * @ORM\Entity
 */
class Pagamenti
{
    /**
     * @var string
     *
     * @ORM\Column(name="txn_id", type="string", length=20, nullable=false)
     */
    private $txnId;

    /**
     * @var string
     *
     * @ORM\Column(name="importo_pagamento", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $importoPagamento;

    /**
     * @var string
     *
     * @ORM\Column(name="stato_pagamento", type="string", length=25, nullable=false)
     */
    private $statoPagamento;

    /**
     * @var string
     *
     * @ORM\Column(name="id_prenotazione", type="string", length=25, nullable=false)
     */
    private $idPrenotazione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_pagamento", type="datetime", nullable=false)
     */
    private $dataPagamento;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

