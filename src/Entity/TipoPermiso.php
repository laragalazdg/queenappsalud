<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoPermiso
 *
 * @ORM\Table(name="tipo_permiso")
 * @ORM\Entity
 */
class TipoPermiso
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
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     */
    private $descripcion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Permiso", mappedBy="tipoPermiso")
     */
    private $permiso;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->permiso = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
