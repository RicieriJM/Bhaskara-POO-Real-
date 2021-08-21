<?php

class dados extends calculos
{
    public function exibe()
    {
        $this->calculo_delta();
        $this->calculo_x1();
        $this->calculo_x2();

        $this->insere();
    }
}

?>