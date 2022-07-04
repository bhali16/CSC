
<?php 
Class Database
{
    private $user ;
    private $host;
    private $pass ;
    private $db;

    public function __construct()
    {
        $this->user = "root";
        $this->host = "localhost";
        $this->pass = "root";
        $this->db = "club";
    }
    public function connect()
    {
        $link = mysql_connect($this->user, $this->host, $this->pass, $this->db);
        return $link;
    }
}
?>

