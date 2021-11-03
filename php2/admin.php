<?php 
include_once "conection.php";

$id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
$consult = $cone->query("SELECT * FROM cadastro WHERE id = '$id'");
$linha = $consult->fetch(PDO::FETCH_ASSOC);


try {
    $stmp = $cone->query("SELECT * FROM cadastro");
        echo "<div id='div1'><table border='1' id='tabela'><tr><td>Nome</td><td>Email</td><td>Ações</td></tr>";
    
            while ($linha = $consult ->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr><td>$linha[nome]</td><td>$linha[email]</td>      
                <td><a href='formEditar.php?id=$linha[id]'>Editar</a><td><a href='excluir.php?id=$linha[id]'>Excluir</a></td></tr><br>";
                    
            }
            echo "</table></div>";
} 
catch (PDOException $erro) {
    echo "Erro: ".$erro->getMessage();
}



?>