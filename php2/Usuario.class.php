<?php 

class Usuario{
    public function login($nome, $email){

        global $cone;

        $verifi = "SELECT * FROM cadastro WHERE nome = :nome AND email = :email";
        $verifi = $cone->prepare($verifi);

        $verifi->bindValue("nome", $nome);
        $verifi->bindValue("email", $email);
        $verifi->execute();

        if($verifi->rowCount() > 0){
            $dado = $verifi->fetch();

            $_SESSION['idUser'] = $dado['id'];
            
            return true;
        }
            else{
                return false;
            }



    }
}

?>