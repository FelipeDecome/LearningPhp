<?php

namespace Felipe\Doctrine\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Felipe\Doctrine\Entity\Cursos;
use Felipe\Doctrine\Entity\Telefone;

/**
 * @Entity
 */
class Cliente
{
    /**
     * @Id
     * @generatedValue
     * @Column(type="integer")
     */
    private $id;

    /**
     * @Column(type="string")
     */
    private $name;

    /**
     * @OneToMany(targetEntity="Telefone", mappedBy="cliente", cascade={"remove", "persist"})
     */
    private $telefones;

    /**
     * @ManyToMany(targetEntity="Cursos", mappedBy="clientes")
     */
    private $cursos;

    public function __construct()
    {
        $this->telefones = new ArrayCollection();
        $this->cursos = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    public function addTelefone(Telefone $telefone): self
    {
        $this->telefones->add($telefone);
        $telefone->setCliente($this);

        return $this;
    }

    public function getTelefones(): Collection
    {
        return $this->telefones;
    }

    public function addCurso(Cursos $curso): self
    {

        if ($this->cursos->contains($curso)) {
            return $this;
        }

        $this->cursos->add($curso);
        $curso->addCliente($this);

        return $this;
    }

    public function getCursos(): Collection
    {
        return $this->cursos;
    }
}
