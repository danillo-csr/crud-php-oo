<?php

namespace App\Model;

class ProdutoDao{

    public function create(Produto $p){

        //atribui uma inserção ao atributo $sql
        $sql = 'INSERT INTO produtos(nome, descricao) VALUES (?, ?)';  
        /*
            o atributo $sql é passado como parametro para
            o método prepare(), que é instanciado da classe PDO
            através do objeto $instance que é
            retornado pelo método getConn() da classe Conexao
        */
        $stmt = Conexao::getConn()->prepare($sql);

        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getDescricao());

        $stmt->execute();

    }

    public function read(){
 
        //a consulta $sql recebe todos (*) os registros da tabela produtos
        $sql = 'SELECT * FROM produtos';

        //igual ao que acontece no método create
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        //verifica se o número de registros é maior que 0
        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            //retorna um array com os registros
            return $resultado;
        }else{
            //se não houver nenhum registro, retorna um array vazio
            return []; 
        }

    }

    public function update(Produto $p){

        $sql = 'UPDATE produtos SET nome = ?, descricao = ? WHERE id = ?';

        $stmt = Conexao::getConn()->prepare($sql);

        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getDescricao());
        $stmt->bindValue(3, $p->getId());

        $stmt->execute();
        

    }

    public function delete($id){

        $sql = 'DELETE FROM produtos WHERE id = ?';
        
        $stmt = Conexao::getConn()->prepare($sql);

        $stmt->bindValue(1, $id);

        $stmt->execute();

    }
}