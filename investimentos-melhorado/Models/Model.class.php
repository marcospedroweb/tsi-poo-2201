<?php
include_once __DIR__ . '/../config/db.php';

//Nessa classe abstract é "semelhante" ao uso de interfaces
//Essa classe abstrata servirá como base para ser herdada por outros classes [models]
abstract class Model extends PDO
{
    //No caso, essa classe está herdando a classe PDO do php, que traz conexão do banco

    protected string $tabela; // atributo obrigatorio para a classe que herdar essa classe


    public function __construct()
    {

        if (!defined('DSN') || !defined('DB_USER') || !defined('DB_PASS')) {
            die('Não há arquivo de configuração do BD');
        }
        //Como essa classe herdou o [PDO], é necessario passar os parametros que o PDO pede
        //Utilizamos o [parent::] para se referir ao pai dessa classe, ou seja, a classe que ela herdou
        //chamo o construct dessa classe pai e passo os parametros que ela precisa
        parent::__construct(DSN, DB_USER, DB_PASS);
    }

    //A classe que herdar esta classe abstrata, DEVE ter um metodo [inserir] com parametro [array $dados] e DEVE retornar um int
    abstract function inserir(array $dados): ?int;
    //A classe que herdar esta classe abstrata, DEVE ter um metodo [atualizar] com parametros [int $id e array $dados] e DEVE retornar um booleano
    abstract function atualizar(int $id, array $dados): bool;
    //A classe que herdar esta classe abstrata, DEVE ter um metodo [listar] com parametro [int $id, default null] e DEVE retornar um array
    abstract function listar(int $id = null): ?array;
    //A classe que herdar esta classe abstrata, DEVE ter um metodo [apagar] com parametro [int $id] e DEVE retornar um booleano
    function apagar(int $id): bool
    {
        $stmt = $this->prepare("DELETE FROM {$this->tabela} WHERE id = :id");

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        if ($stmt->rowCount() > 0) {

            return true;
        } else {

            return false;
        }
    }
}
