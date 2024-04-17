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
?>