<?php

namespace Felipe\Doctrine\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Felipe\Doctrine\Entity\Cliente;

/**
 * @Entity
 */
class Cursos
{

    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;

    /**
     * @Column(type="string")
     */
    private $name;

    /**
     * @ManyToMany(targetEntity="Cliente", inversedBy="cursos")
     */
    private $clientes;

    public function __construct()
    {
        $this->clientes = new ArrayCollection();
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

    public function addCliente(Cliente $cliente): self
    {
        if ($this->clientes->contains($cliente)) {
            return $this;
        }

        $this->clientes->add($cliente);
        $cliente->addCurso($this);

        return $this;
    }

    public function getClientes(): Cliente
    {
        return $this->clientes;
    }

}
