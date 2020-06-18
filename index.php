<?php

 require_once 'vendor/autoload.php';

 //cria uma instancia da classe Produto() localizada em \App\Model
 $produto = new \App\Model\Produto();

 //insere um id para o produto através do método setId()
 $produto->setId(9);

 //insere o nome de um produto através do método setNome()
 $produto->setNome('Notebook AlienWare');

 //insere a descrição de um produto através do método setDescricao()
 $produto->setDescricao('i9, 32GB');

 //cria uma instancia da classe ProdutoDao() localizada em \App\Model
$produtoDao = new \App\Model\ProdutoDao();

//através do método create() da classe ProdutoDao, cadastra um produto
//recebendo como parametro uma instancia da classe Produto ($produto)
//$produtoDao->create($produto);

//$produtoDao->update($produto);

$produtoDao->delete(6);

//através do método read() da classe ProdutoDao
//retorna os produtos cadastrados
$produtoDao->read();

foreach($produtoDao->read() as $produto){
    echo $produto['nome']."<br>".$produto['descricao']."<hr>";
}

