<?php

namespace MaremmaCinghialeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cane
 *
 * @ORM\Table(name="cane")
 * @ORM\Entity
 */
class Cane
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=30, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="url_foto", type="string", length=150, nullable=true)
     */
    private $urlFoto;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="anni", type="integer", nullable=false)
     */
    private $anni;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=200, nullable=false)
     */
    private $note;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

