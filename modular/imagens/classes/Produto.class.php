<?php
class Produto{
    private $pdo;

    public function __construct(){
        $dns    = "mysql:host=localhost;dbname=loja";
        $user   = "root";
        $pass   = "";
   
        try{
            $this->pdo = new PDO($dns, $user, $pass);
            //echo "Conexão feita com Sucesso!";
        }catch(PDOException $e){
            echo "Erro: ".$e->getMessage();
            exit();
        }
    }
    
    public function enviarProduto( $nome, $descricao, $foto = array() ){
        //inserir Produto na tabela Produto
        $sql = "INSERT INTO produto set nome = :n, descricao = :d, foto = :f";
        $sql = $this->pdo->prepare($sql);

        $sql->bindValue(':n', $nome);
        $sql->bindValue(':d', $descricao);
        $sql->bindValue(':f', $foto);
        
        $isOk = $sql->execute();
        
        if($isOk){
            $id_produto = $this->pdo->lastInsertId();
        }

        //inserir Imagem na tabela imagem
        if( count( $foto ) > 0 ){
            for ( $i = 0; $i < count($foto); $i++ ) { 
                $nome_foto = $foto[$i];
                $sql = "INSERT INTO imagem SET nome_imagem = :n, fk_id_produto = :p";
                $sql = $this->pdo->prepare($sql);
                $sql->bindValue(':n', $nome_foto);
                $sql->bindValue(':p', $id_produto);
                
                return $sql->execute();
            }

        }

    }    
}
