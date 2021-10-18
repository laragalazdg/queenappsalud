<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medico
 *
 * @ORM\Table(name="medico")
 * @ORM\Entity
 */
class Medico
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
     * @ORM\Column(name="nombre_medico", type="string", length=255, nullable=false)
     */
    private $nombreMedico;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_medico", type="string", length=255, nullable=false)
     */
    private $apellidoMedico;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Especialidad", inversedBy="medico")
     * @ORM\JoinTable(name="medico_especialidad",
     *   joinColumns={
     *     @ORM\JoinColumn(name="medico_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="especialidad_id", referencedColumnName="id")
     *   }
     * )
     */
    private $especialidad;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->especialidad = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
