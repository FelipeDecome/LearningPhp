<?php declare(strict_types=1)

namespace Mvc\Source\Database;

interface QueryFactory
{
    abstract public function prepareQuery(Type $args): self;
}
