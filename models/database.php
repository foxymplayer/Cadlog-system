<?php
class Database{
    //ultiliza padrão singleton, cujo o objetivo é garantir que apenas uma instanceia de clase seja criada durante a execução do programa, e que essa instancia seja ultilizada sempre que necessario//
    private static $instance = null;

    //metodo publico que retorna a conecção com BD//
    public static function getConnection(){
        if(!self::$instance){
            $host     ='localhost';
            $db       ='sistema_usuario';
            $user     ='root';
            $password ='';

            //a conexão usa o driver mysql (mysql:) e as informações de host

            self::$instance = new PDO("mysql:host=$host;dbname=$db", $user, $password);

        // define o modo de erro  para exeções, facilitando a depuração e tratamento de erro//
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
}
?>