<?php
include 'header.php';
include '../app/controller/connection.php';
?>
     <div class="conteudo">
       <div class="container-fluid">
         <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Setor</li>
          </ol>
        </nav> 
<!-- Cadastro setor -->        
        <div class="row">
          <div class="col-12">
            <div class="card mb-3">
              <div class="card-header">Setor</div>
                <div class="card-body text-primary">
                  <form class="row g-3" action="../app/controller/insertSetor.php" method="POST">
                    <div class="col-5">
                      <label class="visually-hidden">Setor</label>
                      <input type="text" name="setor" class="form-control form-control-sm" id="setor" placeholder="Descrição">
                    </div>
                    <div class="col-5">
                      <label for="staticEmail2" class="visually-hidden">Localidade</label>
                      <input type="text" name="localidade" class="form-control form-control-sm" id="localidade" placeholder="Localidade">
                    </div>
                    <div class="col-2">
                      <button type="submit" class="btn btn-primary btn-sm mb-3">Cadastrar</button>
                    </div>
                  </form>
                </div>                
              </div>
            </div>
          </div>
<!-- Tabela setor -->          
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Nome do setor</th>
                      <th scope="col">Localidade</th>
                      <th scope="col">Ações</th>
                    </tr>
                  </thead>
<?php
  try{
    $sqlSelect = $conn->prepare("SELECT * FROM setor");
    $sqlSelect->execute();
    $sqlSelect->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new RecursiveArrayIterator($sqlSelect->fetchAll()) as $x => $row){

?>                  
                  <tbody>
                    <tr>
                      <td><?= $row['setor'];?></td>
                      <td><?= $row['localidade'];?></td>
                      <td>
                        <a href="editarSetor.php?idSetor=<?= $row['idSetor'];?>"><i class='bx bxs-edit bg-warning'></i></a>
                        <a onclick="return confirm('Deseja excluir?')" href="../app/controller/deleteSetor.php?idSetor=<?= $row['idSetor'] ?>"><i class='bx bxs-trash bg-danger'></i></a>
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