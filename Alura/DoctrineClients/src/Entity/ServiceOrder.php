<?php

// namespace Felipe\Doctrine\Entity;

// use Felipe\Doctrine\Entity\Cliente;

// /**
//  * @Entity
//  */
// class ServiceOrder
// {

//     /**
//      * @Id
//      * @GeneratedValue
//      * @Column(type="integer")
//      */
//     private $id;

//     /**
//      * @Column(type="string")
//      */
//     private $number;

//     /**
//      * @Column(type="string")
//      */
//     private $data_solicitado;

//     /**
//      * @OneToMany(targetEntity="Cliente")
//      */
//     private $cliente;

//     public function getId(): int
//     {
//         return $this->id;
//     }

//     public function getNumber(): string
//     {
//         return $this->number;
//     }

//     public function setNumber($number): self
//     {
//         $this->number = $number;

//         return $this;
//     }

//     public function getData_solicitado(): string
//     {
//         return $this->data_solicitado;
//     }

//     public function setData_solicitado($data_solicitado): self
//     {
//         $this->data_solicitado = $data_solicitado;

//         return $this;
//     }

//     public function getCliente(): Cliente
//     {
//         return $this->cliente;
//     }

//     public function setCliente(Cliente $cliente): self
//     {
//         $this->cliente = $cliente;

//         return $this;
//     }
// }
