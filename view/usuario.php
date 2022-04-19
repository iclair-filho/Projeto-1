<?php
include 'header.php';
include '../app/controller/connection.php';
?>

     <div class="conteudo">
       <div class="container-fluid">
         <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item"><a href=#>Cadastro</a></li>
            <li class="breadcrumb-item active" aria-current="page">Usuários</li>
          </ol>
        </nav> 
<!-- Cadastro usuário -->        
        <div class="row">
          <div class="col-12">
            <div class="card mb-3">
              <div class="card-header">Usuários</div>
                <div class="card-body text-primary">
                  <form class="row g-3" action="../app/controller/insertUsuario.php" method="POST">
                    <div class="col-5">
                      <label class="col-form-label-sm">Nome Completo</label>
                      <input type="text" name="nomeUsuario" class="form-control form-control-sm" id="nomeUsuario" placeholder="Nome Completo">
                    </div>
                    <div class="col-5">
                      <label for="staticEmail2" class="col-form-label-sm">CPF</label>
                      <input type="text" name="cpf" id="cpf" class="form-control form-control-sm" placeholder="CPF">
                    </div>
                    <div class="col-5">
                      <label for="staticEmail2" class="col-form-label-sm">Telefone</label>
                      <input type="tel" name="telUsuario" class="form-control form-control-sm" id="telUsuario" placeholder="Telefone">
                    </div>
                    <div class="col-5">
                      <label for="staticEmail2" class="col-form-label-sm">Senha</label>
                      <input type="password" name="senha" class="form-control form-control-sm" id="senha" placeholder="Senha">
                    </div>
                    <div class="col-5">
                      <label for="staticEmail2" class="col-form-label-sm">Confirmar Senha</label>
                      <input type="password" name="confirmarsenha" class="form-control form-control-sm" id="confirmarsenha" placeholder="Confirmar Senha">
                    </div>
                    <div class="col-2">
                      <button type="submit" class="btn btn-primary btn-sm mb-3">Cadastrar</button>
                    </div>
                  </form>
                </div>                
              </div>
            </div>
          </div>
<!-- Tabela usuario -->          
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover" id="tabela_javascript">
                  <thead>
                    <tr>
                      <th scope="col">Nome Completo</th>
                      <th scope="col">CPF</th>
                      <th scope="col">Telefone</th>
                      <th scope="col">Ações</th>
                    </tr>
                  </thead>
<?php
  try{
    $sqlSelect = $conn->prepare("SELECT * FROM usuario");
    $sqlSelect->execute();
    $sqlSelect->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new RecursiveArrayIterator($sqlSelect->fetchAll()) as $x => $row){

?>                  
                  <tbody>
                    <tr>
                      <td><?= $row['nomeUsuario'];?></td>  
                      <td><?= $row['cpf'];?></td>
                      <td><?= $row['telUsuario'];?></td>
                      <td>
                        <a href="editarUsuario.php?idUsuario=<?= $row['idUsuario'];?>"><i class='bx bxs-edit bg-warning'></i></a>
                        <a onclick="return confirm('Deseja excluir?')" href="../app/controller/deleteUsuario.php?idUsuario=<?= $row['idUsuario'] ?>"><i class='bx bxs-trash bg-danger'></i></a>
                        <a href="../app/controller/relatorioUsuario.php?idUsuario=<?php echo $row['idUsuario']; ?>"
                                        target=_blank><i class='bx bxs-report bg-info'></i></a>
                      </td>                     
                    </tr>
                  </tbody>
<?php
    }
  }catch(PDOException $e){
    echo "Echo: " . $e->getMessage();
  }
  $conn = null;
?>                  
                </table>
              </div>
            </div>
          </div>        
        </div>        
       </div>            
      </div>    
<?php
include 'footer.php';
?>