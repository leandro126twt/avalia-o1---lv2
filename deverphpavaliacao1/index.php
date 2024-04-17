<?php

class Fatura {
    private $numero;
    private $descricao;
    private $quantidade;
    private $precoPorItem;

    // Construtor
    public function __construct($numero, $descricao, $quantidade, $precoPorItem) {
        $this->numero = $numero;
        $this->descricao = $descricao;
        $this->quantidade = $quantidade;
        $this->precoPorItem = $precoPorItem;
    }

    // Métodos Get e Set para o número da fatura
    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    // Métodos Get e Set para a descrição
    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    // Métodos Get e Set para a quantidade
    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    // Métodos Get e Set para o preço por item
    public function getPrecoPorItem() {
        return $this->precoPorItem;
    }

    public function setPrecoPorItem($precoPorItem) {
        // Se o preço por item não for positivo, configurá-lo como 0.0
        $this->precoPorItem = ($precoPorItem > 0) ? $precoPorItem : 0.0;
    }

    // Método para calcular o total da fatura
    public function getTotalFatura() {
        // Se a quantidade ou o preço por item não forem positivos, configurar o total como 0
        $total = ($this->quantidade > 0 && $this->precoPorItem > 0) ? $this->quantidade * $this->precoPorItem : 0.0;
        return $total;
    }
}

// Demonstração da classe Fatura
$fatura1 = new Fatura("001", "Teclado", 2, 25.5);
echo "Número da Fatura: " . $fatura1->getNumero() . "<br>";
echo "Descrição: " . $fatura1->getDescricao() . "<br>";
echo "Quantidade: " . $fatura1->getQuantidade() . "<br>";
echo "Preço por Item: " . $fatura1->getPrecoPorItem() . "<br>";
echo "Total da Fatura: " . $fatura1->getTotalFatura() . "<br>";

// Criação de um objeto Empregado
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

// Demonstração da classe Empregado
$empregado1 = new Empregado("João", "Silva", 3000);
$empregado2 = new Empregado("Maria", "Santos", 4000);

echo "<br>Salário anual do empregado 1: " . $empregado1->getSalarioAnual() . "<br>";
echo "Salário anual do empregado 2: " . $empregado2->getSalarioAnual() . "<br>";

// Aplicando aumento de 10%
$empregado1->aplicarAumento(10);
$empregado2->aplicarAumento(10);

echo "<br>Salário anual do empregado 1 após aumento: " . $empregado1->getSalarioAnual() . "<br>";
echo "Salário anual do empregado 2 após aumento: " . $empregado2->getSalarioAnual() . "<br>";
?>
