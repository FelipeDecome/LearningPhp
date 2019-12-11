<?php

namespace Felipe\Doctrine\Entity;

/**
 * @Entity
 */

class Telefone
{
    /**
     * @Id
     * @GeneratedValue
     * @Column (type="integer")
     */
    private $id;
    /**
     * @Column (type="string")
     */
    private $numero;
    /**
     * @ManyToOne (targetEntity="Aluno", inversedBy="telefones")
     */
    private $aluno;

    public function getId(): int
    {
        return $this->id;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function setNumero(Telefone $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getAluno(): Aluno
    {
        return $this->aluno;
    }

    public function setAluno(Aluno $aluno): self
    {
        $this->aluno = $aluno;
        return $this;
    }
}
