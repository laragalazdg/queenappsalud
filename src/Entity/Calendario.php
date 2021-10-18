<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calendario
 *
 * @ORM\Table(name="calendario", indexes={@ORM\Index(name="IDX_2F19AB8CA76ED395", columns={"user_id"}), @ORM\Index(name="IDX_2F19AB8CA745B947", columns={"tipo_calendario_id"})})
 * @ORM\Entity
 */
class Calendario
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
     * @ORM\Column(name="fecha_ultima_menstr", type="date", nullable=false)
     */
    private $fechaUltimaMenstr;

    /**
     * @var int
     *
     * @ORM\Column(name="duracion_ciclo", type="smallint", nullable=false)
     */
    private $duracionCiclo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_concepcion", type="date", nullable=false)
     */
    private $fechaConcepcion;

    /**
     * @var \TipoCalendario
     *
     * @ORM\ManyToOne(targetEntity="TipoCalendario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_calendario_id", referencedColumnName="id")
     * })
     */
    private $tipoCalendario;

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
     * @ORM\ManyToMany(targetEntity="EstadoCalendario", inversedBy="calendario")
     * @ORM\JoinTable(name="calendario_estado_calendario",
     *   joinColumns={
     *     @ORM\JoinColumn(name="calendario_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="estado_calendario_id", referencedColumnName="id")
     *   }
     * )
     */
    private $estadoCalendario;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->estadoCalendario = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
