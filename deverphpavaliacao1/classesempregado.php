<?php
class Empregado {
    private $nome;
    private $sobrenome;
    private $salarioMensal;

    // Construtor
    public function __construct($nome, $sobrenome, $salarioMensal) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->salarioMensal = $salarioMensal;
    }

    // Métodos Get e Set para o nome
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    // Métodos Get e Set para o sobrenome
    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    // Métodos Get e Set para o salário mensal
    public function getSalarioMensal() {
        return $this->salarioMensal;
    }

    public function setSalarioMensal($salarioMensal) {
        $this->salarioMensal = $salarioMensal;
    }

    // Método para calcular o salário anual
    public function getSalarioAnual() {
        return $this->salarioMensal * 12;
    }

    // Método para aplicar aumento no salário
    public function aplicarAumento($porcentagem) {
        $this->salarioMensal *= (1 + ($porcentagem / 100));
    }
}

?>
