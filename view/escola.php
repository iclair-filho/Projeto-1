<?php
include 'header.php';
include '../app/controller/connection.php';
?>
     <div class="conteudo">
       <div class="container-fluid">
         <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Escola</li>
          </ol>
        </nav> 
        <div class="row">
          <div class="col-12">
            <div class="card mb-3">
              <div class="card-header">Escola</div>
                <div class="card-body text-primary">
                  <form class="row g-3" action="../app/controller/insertEscola.php" method="POST">
                    <div class="col-4">
                      <label for="exampleFormControlInput1" class="col-form-label-sm">Setor</label>
                      <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                    <div class="col-8">
                      <label for="exampleFormControlInput1" class="col-form-label-sm">Nome da Escola</label>
                      <input type="text" name="nomeEscola" class="form-control form-control-sm" id="exampleFormControlInput1">
                    </div>
                    <div class="col-4">
                      <label for="exampleFormControlInput1" class="col-form-label-sm">Localidade</label>
                      <input type="text" name="localidade" class="form-control form-control-sm" id="exampleFormControlInput1">
                    </div>
                    <div class="col-6">
                      <label for="exampleFormControlInput1" class="col-form-label-sm">Responsável</label>
                      <input type="text" name="responsavel" class="form-control form-control-sm" id="exampleFormControlInput1">
                    </div>
                    <div class="col-2 align-self-end">
                      <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
                    </div>
                    </div>                 
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Id Escola</th>
                      <th scope="col">Setor</th>
                      <th scope="col">Escola</th>
                      <th scope="col">Localidade</th>
                      <th scope="col">Responsável</th>
                      <th scope="col">Ações</th>                      
                    </tr>
                  </thead>
<?php 
  try{
    $sqlSelect = $conn->prepare("SELECT * FROM escola");
    $sqlSelect->execute();
    $sqlSelect->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new RecursiveArrayIterator($sqlSelect->fetchAll()) as $x => $row){

?>                  
                  <tbody>
                    <tr>
                      <th scope="row"><?php echo $row['idEscola'];?></th>
                      <td><?php echo "setor";?></td>
                      <td><?php echo $row['nomeEscola'];?></td>
                      <td><?php echo $row['localidade'];?></td>
                      <td><?php echo $row['responsavel'];?></td>
                      <td>
                        <a href="#"><i class='bx bxs-edit bg-warning'></i></a>
                        <a href="#" onclick="return confirm('Deseja realmente deletar esta Escola?')"><form action="../app/controller/deleteEscola.php" method="post"><input type="hidden" name="idEscola" value="<?php echo $row['idEscola'];?>"><button type="submit"><i class='bx bxs-trash bg-danger'></i></button></form></a>
                      </td>                                        
                    </tr>
                  </tbody>
<?php 
    }
  }catch(PDOException $e){
    echo "Error: " . $e->getMessage();
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