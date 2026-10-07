<?php
echo "Exercicio 2 ";
class Retangulo
{
    private $altura;
    private $largura;

    public function __construct($altura, &largura)
    {
        $this -> altura = $altura;
        $this -> largura = $largura;

    }
    public function Calculararea()
    {
        return $this -> altura * $this -> largura;
    }

    public CalcularPerimetro()
    {
        return 2 * ($this -> altura + $this -> largura);
    }
}
?>