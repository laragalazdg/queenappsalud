<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Informe
 *
 * @ORM\Table(name="informe", indexes={@ORM\Index(name="IDX_7E75E1D966894848", columns={"ficha_salud_id"}), @ORM\Index(name="IDX_7E75E1D9A76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class Informe
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
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     */
    private $descripcion;

    /**
     * @var \FichaDeSalud
     *
     * @ORM\ManyToOne(targetEntity="FichaDeSalud")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ficha_salud_id", referencedColumnName="id")
     * })
     */
    private $fichaSalud;

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
     * @ORM\ManyToMany(targetEntity="Cita", inversedBy="informe")
     * @ORM\JoinTable(name="informe_cita",
     *   joinColumns={
     *     @ORM\JoinColumn(name="informe_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="cita_id", referencedColumnName="id")
     *   }
     * )
     */
    private $cita;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Estudio", inversedBy="informe")
     * @ORM\JoinTable(name="informe_estudio",
     *   joinColumns={
     *     @ORM\JoinColumn(name="informe_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="estudio_id", referencedColumnName="id")
     *   }
     * )
     */
    private $estudio;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cita = new \Doctrine\Common\Collections\ArrayCollection();
        $this->estudio = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
