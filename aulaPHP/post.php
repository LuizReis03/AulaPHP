 <pre>
 <?php
print_r($_POST);

$nome = $_POST['nome'];
$senha = $_POST['password'];
$email = $_POST['email'];

if($email == "unicesumar@email.com" && $senha == 1234 && $nome == "Luiz"){
    echo "Logado com sucesso!";
}
        
?>
</pre>
