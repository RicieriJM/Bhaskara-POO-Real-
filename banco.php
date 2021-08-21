<?php

class banco
{
    function conexao()
    {
        $this->con = new PDO ('mysql:dbname=bhaskara; host=localhost', 'root', '');
    }
  
    public function insert()
    {
        $query = 'insert into calculo (a, b, c, delta, x1, x2) values (';
        $query .= $this->a;
        $query .= ',';
        $query .= $this->b;
        $query .= ',';
        $query .= $this->c;
        $query .= ',';
        $query .= $this->delta;
        $query .= ',';
        $query .= $this->x1;
        $query .= ',';
        $query .= $this->x2;
        $query .= ')';
    
        return $query;
    }

    public function insere()
    {
        $this->conexao();
        $sqlQuery = $this->insert();
        $this->con->query($sqlQuery);
    }
}

?>