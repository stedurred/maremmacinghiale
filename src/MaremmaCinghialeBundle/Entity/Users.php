<?php

namespace MaremmaCinghialeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", uniqueConstraints={@ORM\UniqueConstraint(name="email", columns={"email"}), @ORM\UniqueConstraint(name="username", columns={"username"})})
 * @ORM\Entity
 */
class Users
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fb_user_id", type="integer", nullable=true)
     */
    private $fbUserId;

    /**
     * @var string
     *
     * @ORM\Column(name="fb_user_name", type="string", length=100, nullable=true)
     */
    private $fbUserName;

    /**
     * @var string
     *
     * @ORM\Column(name="fb_user_email", type="string", length=50, nullable=true)
     */
    private $fbUserEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="fb_user_first_name", type="string", length=50, nullable=true)
     */
    private $fbUserFirstName;

    /**
     * @var string
     *
     * @ORM\Column(name="fb_user_last_name", type="string", length=50, nullable=true)
     */
    private $fbUserLastName;

    /**
     * @var string
     *
     * @ORM\Column(name="fb_access_token", type="string", length=250, nullable=true)
     */
    private $fbAccessToken;

    /**
     * @var integer
     *
     * @ORM\Column(name="fb_user_page_id", type="integer", nullable=true)
     */
    private $fbUserPageId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_atc", type="integer", nullable=false)
     */
    private $idAtc;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_squadra", type="integer", nullable=true)
     */
    private $idSquadra;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=false)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="trn_date", type="datetime", nullable=false)
     */
    private $trnDate;

    /**
     * @var string
     *
     * @ORM\Column(name="url_foto", type="string", length=150, nullable=true)
     */
    private $urlFoto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="capocaccia", type="boolean", nullable=true)
     */
    private $capocaccia = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="canaio", type="boolean", nullable=true)
     */
    private $canaio = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="admin_squadra", type="boolean", nullable=true)
     */
    private $adminSquadra = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="admin_page", type="boolean", nullable=true)
     */
    private $adminPage = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="catture_cinghiali", type="integer", nullable=false)
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


}

