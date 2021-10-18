<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstadoCalendario
 *
 * @ORM\Table(name="estado_calendario")
 * @ORM\Entity
 */
class EstadoCalendario
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
     * @ORM\Column(name="nombre_estado", type="string", length=255, nullable=false)
     */
    private $nombreEstado;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Calendario", mappedBy="estadoCalendario")
     */
    private $calendario;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->calendario = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
