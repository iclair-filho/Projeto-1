<?php
include 'header.php';
include '../app/controller/connection.php';
?>
     <div class="conteudo">
       <div class="container-fluid">
         <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href=#>Cadastro</a></li>
            <li class="breadcrumb-item active" aria-current="page">Usuários</li>
          </ol>
        </nav> 
<?php
$id = $_GET['idUsuario'];
$sqlSelect = $conn->prepare("SELECT * FROM usuario WHERE idUsuario = '$id'");
$sqlSelect->execute();
$sqlSelect->setFetchMode(PDO::FETCH_ASSOC);

foreach(new RecursiveArrayIterator($sqlSelect->fetchAll()) as $x => $row){

?>        
        <div class="row">
          <div class="col-12">
            <div class="card mb-3">
              <div class="card-header">Usuários</div>
                <div class="card-body text-primary">
                  <form class="row g-3" action="../app/controller/updateUsuario.php" method="POST">
                      <input type="hidden" name="idUsuario" value="<?php echo $row['idUsuario'];?>">
                    <div class="col-5">
                      <label class="col-form-label-sm">Nome Completo</label>
                      <input type="text" name="nomeUsuario" value="<?php echo $row['nomeUsuario'];?>" class="form-control form-control-sm" id="nomeUsuario" placeholder="Nome Completo">
                    </div>
                    <div class="col-5">
                      <label for="staticEmail2" class="col-form-label-sm">CPF</label>
                      <input type="text" name="cpf" value="<?php echo $row['cpf'];?>" class="form-control form-control-sm" id="cpf" placeholder="CPF">
                    </div>
                    <div class="col-5">
                      <label for="staticEmail2" class="col-form-label-sm">Telefone</label>
                      <input type="tel" name="telUsuario" value="<?php echo $row['telUsuario'];?>" class="form-control form-control-sm" id="telUsuario" placeholder="Telefone">
                    </div>
                    <div class="col-2">
                      <button type="submit" class="btn btn-primary btn-sm mb-3">Editar</button>
                    </div>
                  </form>
                </div>                
              </div>
            </div>
          </div>           
<?php
}
?>          
<?php
include 'footer.php';
?>