<?php

class Produto {


public $descrição;
public $estoque;
public $preço;

public function aumentarEstoque ($valor) {
  $this->estoque += $valor;

}

public function diminuirEstoque ($valor) {
  $this->estoque -= $valor;

}

public function reajustarPreco ($percentual) {
  $this->preço += ($percentual*$this->preço)/100;

}

}
$produto=new Produto;
$produto->descrição =" Audi A3 ";
$produto->estoque= 12;
$produto->preço= 300000;


echo 'O estoque da ' . $produto->descrição . 'é ' . $produto->estoque . '<br>';
echo 'O preço da ' . $produto->descrição . 'é ' . $produto->preço ;
echo '<br>';

$produto->aumentarEstoque(10);
$produto->diminuirEstoque(5);
$produto->reajustarPreco(50);

echo 'O estoque da ' . $produto->descrição . 'é ' . $produto->estoque . '<br>';
echo 'O preço da ' . $produto->descrição . 'é ' . $produto->preço ;

?>