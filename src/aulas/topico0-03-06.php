<?php
/*
objeto: qualquer coisa
todo e qualquer objeto tem um atributo, suas caracteristicas
método: uma ação
classe: a planta do objeto ou o projeto

todo método tem (), atributos nao.
todo atributo é uma variavel*

herança: uma classe com métodos e atributos que se repetem entre 

polimorfismo: mesmas ações executadas de maneiras diferentes
*/

class Produto {
    // Atributos (propriedades)
    public string $nome;
    public float $preco;
    private int $estoque;

    // Construtor — executado ao criar o objeto
    public function __construct(string $nome, float $preco, int $estoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    // Método público
    public function exibir(): void {
        echo "Produto: {$this->nome} <br> Preço: R$ {$this->preco} <br> Estoque: {$this->estoque}<br>";
    }

    // Getter para atributo privado
    public function getEstoque(): int {
        return $this->estoque;
    }
    public function setEstoque(int $estoque): void {
        $this->estoque += $estoque;
    }
}

// Criando objetos
$p1 = new Produto("Notebook", 3500.00, 10);
$p2 = new Produto("Mouse", 89.90, 50);
$meucelular = new Produto("Celular da silva", 5000.00, 3);

$p1->exibir();
echo "<hr>";
$p2->exibir();
echo "<hr>";
$meucelular->nome="Motorola PT 500";
$meucelular->preco=100;
echo "Estoque: ".$meucelular->getEstoque(); //atributo privado nao pode ser alterado
$meucelular->setEstoque(8);
echo "<br>";
$meucelular->exibir();
?>