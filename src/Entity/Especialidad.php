<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Especialidad
 *
 * @ORM\Table(name="especialidad")
 * @ORM\Entity
 */
class Especialidad
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
     * @ORM\Column(name="nombre_especialidad", type="string", length=255, nullable=false)
     */
    private $nombreEspecialidad;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Estudio", mappedBy="especialidad")
     */
    private $estudio;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Medico", mappedBy="especialidad")
     */
    private $medico;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->estudio = new \Doctrine\Common\Collections\ArrayCollection();
        $this->medico = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
