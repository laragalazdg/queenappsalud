<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cita
 *
 * @ORM\Table(name="cita", indexes={@ORM\Index(name="IDX_3E379A62A76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class Cita
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
     * @ORM\Column(name="fecha_cita", type="date", nullable=false)
     */
    private $fechaCita;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="hora_cita", type="time", nullable=true, options={"default"="NULL"})
     */
    private $horaCita = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="anotaciones", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $anotaciones = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="conclusion", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $conclusion = 'NULL';

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
     * @ORM\ManyToMany(targetEntity="Informe", mappedBy="cita")
     */
    private $informe;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->informe = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
