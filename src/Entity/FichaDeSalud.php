<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FichaDeSalud
 *
 * @ORM\Table(name="ficha_de_salud")
 * @ORM\Entity
 */
class FichaDeSalud
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
     * @var string|null
     *
     * @ORM\Column(name="medico", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $medico = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="alergias", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $alergias = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="grupo_sanguineo", type="string", length=3, nullable=true, options={"default"="NULL"})
     */
    private $grupoSanguineo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="factor_sanguineo", type="string", length=3, nullable=true, options={"default"="NULL"})
     */
    private $factorSanguineo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion_salud", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $descripcionSalud = 'NULL';

    /**
     * @ORM\OneToOne(targetEntity=User::class, cascade={"persist", "remove"})
     */
    private $usuario;

    public function getUsuario(): ?User
    {
        return $this->usuario;
    }

    public function setUsuario(?User $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }


}
