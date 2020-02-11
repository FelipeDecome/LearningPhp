<?php declare(strict_types=1)

class QueryDB
{

    public static function executeQuery(ConnDB $conn, QueryFactory $query): void
    {
        $conn->prepare($queryOperation);
    }

}
