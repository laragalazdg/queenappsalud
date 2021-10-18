<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Permiso
 *
 * @ORM\Table(name="permiso", indexes={@ORM\Index(name="IDX_FD7AAB9EA76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class Permiso
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechayhora", type="datetime", nullable=false)
     */
    private $fechayhora;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_autorizado", type="string", length=255, nullable=false)
     */
    private $nombreAutorizado;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255, nullable=false)
     */
    private $token;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TipoPermiso", inversedBy="permiso")
     * @ORM\JoinTable(name="permiso_tipo_permiso",
     *   joinColumns={
     *     @ORM\JoinColumn(name="permiso_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="tipo_permiso_id", referencedColumnName="id")
     *   }
     * )
     */
    private $tipoPermiso;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tipoPermiso = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
