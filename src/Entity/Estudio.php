<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estudio
 *
 * @ORM\Table(name="estudio", indexes={@ORM\Index(name="IDX_BF0B1A291E011DDF", columns={"cita_id"})})
 * @ORM\Entity
 */
class Estudio
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
     * @ORM\Column(name="nombre_estudio", type="string", length=255, nullable=false)
     */
    private $nombreEstudio;

    /**
     * @var string
     *
     * @ORM\Column(name="url_archivo", type="string", length=255, nullable=false)
     */
    private $urlArchivo;

    /**
     * @var string
     *
     * @ORM\Column(name="formato", type="string", length=255, nullable=false)
     */
    private $formato;

    /**
     * @var \Cita
     *
     * @ORM\ManyToOne(targetEntity="Cita")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cita_id", referencedColumnName="id")
     * })
     */
    private $cita;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Especialidad", inversedBy="estudio")
     * @ORM\JoinTable(name="estudio_especialidad",
     *   joinColumns={
     *     @ORM\JoinColumn(name="estudio_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="especialidad_id", referencedColumnName="id")
     *   }
     * )
     */
    private $especialidad;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Informe", mappedBy="estudio")
     */
    private $informe;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->especialidad = new \Doctrine\Common\Collections\ArrayCollection();
        $this->informe = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
