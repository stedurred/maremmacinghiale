<?php

namespace MaremmaCinghialeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evento
 *
 * @ORM\Table(name="evento", uniqueConstraints={@ORM\UniqueConstraint(name="squadra", columns={"id", "id_squadra"})})
 * @ORM\Entity
 */
class Evento
{

    /**
     * @var string
     *
     * @ORM\Column(name="titolo", type="string", length=150, nullable=false)
     */
    private $titolo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_evento", type="datetime", nullable=false)
     */
    private $dataEvento;

    /**
     * @var float
     *
     * @ORM\Column(name="importo", type="float", precision=10, scale=0, nullable=false)
     */
    private $importo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_squadra", type="integer", nullable=false)
     */
    private $idSquadra;

    /**
     * @var string
     *
     * @ORM\Column(name="descrizione", type="string", length=500, nullable=true)
     */
    private $descrizione;

    /**
     * @var string
     *
     * @ORM\Column(name="url_foto", type="string", length=150, nullable=true)
     */
    private $urlFoto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ristoro_evento", type="boolean", nullable=true)
     */
    private $ristoroEvento;

    /**
     * @var integer
     *
     * @ORM\Column(name="tot_users_evento", type="integer", nullable=true)
     */
    private $totUsersEvento;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_users_evento", type="integer", nullable=false)
     */
    private $maxUsersEvento = '99';

    /**
     * @var integer
     *
     * @ORM\Column(name="catture_cinghiali", type="integer", nullable=true)
     */
    private $cattureCinghiali;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @return string
     */
    public function getTitolo()
    {
        return $this->titolo;
    }

    /**
     * @param string $titolo
     */
    public function setTitolo($titolo)
    {
        $this->titolo = $titolo;
    }

    /**
     * @return \DateTime
     */
    public function getDataEvento()
    {
        return $this->dataEvento;
    }

    /**
     * @param \DateTime $dataEvento
     */
    public function setDataEvento($dataEvento)
    {
        $this->dataEvento = $dataEvento;
    }

    /**
     * @return float
     */
    public function getImporto()
    {
        return $this->importo;
    }

    /**
     * @param float $importo
     */
    public function setImporto($importo)
    {
        $this->importo = $importo;
    }

    /**
     * @return int
     */
    public function getIdSquadra()
    {
        return $this->idSquadra;
    }

    /**
     * @param int $idSquadra
     */
    public function setIdSquadra($idSquadra)
    {
        $this->idSquadra = $idSquadra;
    }

    /**
     * @return string
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * @param string $descrizione
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;
    }

    /**
     * @return string
     */
    public function getUrlFoto()
    {
        return $this->urlFoto;
    }

    /**
     * @param string $urlFoto
     */
    public function setUrlFoto($urlFoto)
    {
        $this->urlFoto = $urlFoto;
    }

    /**
     * @return boolean
     */
    public function isRistoroEvento()
    {
        return $this->ristoroEvento;
    }

    /**
     * @param boolean $ristoroEvento
     */
    public function setRistoroEvento($ristoroEvento)
    {
        $this->ristoroEvento = $ristoroEvento;
    }

    /**
     * @return int
     */
    public function getTotUsersEvento()
    {
        return $this->totUsersEvento;
    }

    /**
     * @param int $totUsersEvento
     */
    public function setTotUsersEvento($totUsersEvento)
    {
        $this->totUsersEvento = $totUsersEvento;
    }

    /**
     * @return int
     */
    public function getMaxUsersEvento()
    {
        return $this->maxUsersEvento;
    }

    /**
     * @param int $maxUsersEvento
     */
    public function setMaxUsersEvento($maxUsersEvento)
    {
        $this->maxUsersEvento = $maxUsersEvento;
    }

    /**
     * @return int
     */
    public function getCattureCinghiali()
    {
        return $this->cattureCinghiali;
    }

    /**
     * @param int $cattureCinghiali
     */
    public function setCattureCinghiali($cattureCinghiali)
    {
        $this->cattureCinghiali = $cattureCinghiali;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}

