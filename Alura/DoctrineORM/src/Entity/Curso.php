<?php

namespace Felipe\Doctrine\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @Entity
 */
class Curso
{

    /**
     * @Id
     * @GeneratedValue
     * @Column (type="integer")
     */
    private $id;

    /**
     * Column (type="string")
     */
    private $name;

    /**
     * @ManyToMany (targetEntity="Aluno", inversedBy="cursos")
     */
    private $alunos;

    public function __construct()
    {
        $this->aluno = new ArrayCollection();
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

    public function addAluno(Aluno $aluno): self
    {

        if ($this->alunos->contains($aluno)) {
            return $this;
        }

        $this->alunos->add($aluno);
        $aluno->addCurso($this);

        return $this;
    }

    public function getAlunos(): Collection
    {
        return $this->alunos;
    }
}
