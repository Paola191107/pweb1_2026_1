<?php
    include '../header.php';
?>
<div class = "col">
    <form action="resultadoFormAluno.php" method="get">
        <h3>Formulario Aluno</h3>
        <div class = "col-6">
            <label for= "nome"> Nome </label>
            <input type = "text" email = "Email" class="form-control">
        </div>

        <div class = "col-6">
            <label for= "nome"> Email </label>
            <input type = "text" email = "Email" class="form-control">
        </div>
        
        <div class = "col-6">
            <label for= "nome"> Telefone </label>
            <input type = "text" telefone = "Telefone" class="form-control">
        </div>
        
        <div class = "col-6">
            <label for= "nome"> Senha </label>
            <input type = "text" senha = "Senha" class="form-control">
        </div>
        <div class= "mt-2">
        <button type = "submit" class="btn btn-primary">Salvar</button>
    </div>
</form>
<?php
include '../footer.php';
?>