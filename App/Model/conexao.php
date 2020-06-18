<?php

namespace App\Model;

class Conexao{

    private static $instance;

    //verifica se já existe uma instancia da conexão
    //se existir, ele retorna a instancia, que é o atributo $instance
    //se não existir, ele irá criar uma nova
    public static function getConn(){
        //utiliza-se o self:: quando se trabalha com um método estático
        if(!isset(self::$instance)){
            //se não houver a instancia, o atributo $instance receberá uma
            //nova instancia da classe PDO
            //e já passa os parametros host, nome do banco, charset, usuario e senha
            self::$instance = new \PDO('mysql:host=localhost;dbname=pdo;charset=utf8','root', 'kubl4kh4n');
        }
            //se já houver a instancia, ela será retornada
            return self::$instance;
    }
}