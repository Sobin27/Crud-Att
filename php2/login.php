<?php 
include_once "conection.php";
require 'Usuario.class.php';
    
if (empty($_POST['nome']) || empty($_POST['email'])){
    header('Location:formlogin.php');
    exit();
}
        else{

            $stmp = new Usuario();
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);

        if($stmp->login($nome,$email) == true){
            if(isset($_SESSION['idUser'])){
                header("Location:paineldelogin.php");
            }else{
                header("Location:formlogin.php");
            }
        }
            else{
                header("Location:formlogin.php");
                echo "<h1>Credências inválidas</h1>";
            
            }



        }

    /*else{

        $nome = filter_var($_POST['nome']);
        $email = filter_var($_POST['email']);
        $nome = $cone->real_escape_string($_POST['nome']);
        $email = $cone->real_escape_string($_POST['email']);
        

       $verifi = "SELECT * FROM cadastro WHERE nome = '$nome' AND email = '$email' ";
       $sql_query = $cone->query($verifi) or die("Falha na execução do código SQL: " .$erro->getMessage());

       $quantidade = $sql_query->num_rows;

       if($quantidade == 1){
           $usuario = $sql_query->fetch_assoc();
   
           if(!isset($_SESSION)){
               session_start();
           }
   
           $_SESSION['user'] = $usuario;
   
           header("Location: paineldelogin.php");
   
       }
        else{
           echo "Falha ao logar! Email ou senha incorretos";
        }
    }*/




?>