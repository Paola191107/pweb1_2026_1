<?php
include './header.php';
include_once "./database/db.class.php";

$db = new db('usuario');
$success = '';
$actionError = '';
$errors = [];
$data = (object) [
    'id' => '',
    'nome' => '',
    'email' => '',
    'telefone' => ''
];
$data = [];

if (!empty($_GET['id'])) {
    $data = $db->find($_GET['id']);
}

if (!empty($_POST)) {
    $data = (object) $_POST;
    // var_dump($_POST);
    //exit;
    try {

        if (empty($_POST['nome'])) {
            $errors[] = "<li>O nome é obrigatório</li>";
        }

        if (empty($_POST['email'])) {
            $errors[] = "<li>O email é obrigatório</li>";
        }

         if (empty($_POST['senha'])) {
            $errors[] = "<li>A senha é obrigatória</li>";

            if(strlen($_POST['senha']) < 3) {
                $errors[] = "<li>A senha deve conter no mínimo 3 caracteres</li>";
            }
        }

        if (empty($errors)) {
            $dados =[
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'telefone' => $_POST['telefone'] ? $_POST['telefone'] : '',
                'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT),
            ];

    
                $db->update($_POST);
                $success = "usuario cadastrado com sucesso! Redirecione para o login...";
            
            redirect('./login.php');
        }
    } catch (PDOException $e) {
        $error = $e->getMessage();
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}

?>

<div class="row">
    <?php actionMessage($success, $actionError) ?>
    <?php showValidationError($errors) ?>

    <form action="registrar.php" method="post">
        <h3>Registrar Usuário</h3>
        <div class="col-6">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" value="<?php echo getFormValue('nome', $data); ?>">
        </div>
        <div class="col-6">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo getFormValue('email', $data); ?>">
        </div>
        <div class="col-6">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" class="form-control" value="<?php echo getFormValue('telefone', $data); ?>">
        </div>
         <div class="col-6">
            <label for="telefone">Senha</label>
            <input type="text" name="senha" class="form-control" value="<?php echo getFormValue('senha', $data); ?>">
        </div>
        <div class="mt-2">
            <button type="submit" class="btn btn-success">Salvar</button>
            Ja tem uma conta? <a href="./UsuarioList.php" class="btn btn-primary"> Faça login aqui </a>
        </div>


    </form>

</div>

<?php
include './footer.php';
?>