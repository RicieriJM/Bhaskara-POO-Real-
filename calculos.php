<?php

class calculos extends banco
{
    public function calculo_delta()
    {
        $this->delta = $this->b * $this->b - (4 * $this->a * $this->c);
    }
    
    public function calculo_x1()
    {
        $this->x1 = (-$this->b + sqrt($this->delta)) / (2 * $this->a);
    }
    
    public function calculo_x2()
    {
        $this->x2 = (-$this->b - sqrt($this->delta)) / (2 * $this->a);
    }
}


?>