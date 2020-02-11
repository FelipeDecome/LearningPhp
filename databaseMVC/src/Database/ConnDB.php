<?php declare(strict_types=1)

namespace Mvc\Source\Database;

use Mvc\Source\Exceptions\Database\DatabaseConnException;

class ConnDB
{

    private $db_host;
    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_charset;

    public $conn;

    public function __construct(String $db_host, String $db_name, String $db_user, String $db_pass = null, String $db_charset = 'utf-8')
    {
        $this->db_host = $db_host;
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_utf = $db_utf;
    }

    public static function conn(): ConnDB
    {
        self::conn = new Mysqli(self::db_host, self::db_user, self::db_pass, self::db_name);
        try {
            self::conn->set_charset(self::db_charset);
        } catch (\Exception $e) {
            throw new DatabaseConnException("Error Processing Request", 1, $e);
        }
    }

}
