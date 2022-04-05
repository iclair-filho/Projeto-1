<?php
include 'header.php';
include '../app/controller/connection.php';
?>
     <div class="conteudo">
       <div class="container-fluid">
         <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar Escola</li>
          </ol>
        </nav> 
<?php 
$id = $_GET['idEscola'];
$sqlSelect = $conn->prepare("SELECT * FROM escola WHERE idEscola = $id");
$sqlselect->execute();
$sqlselect->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new RecursiveArrayIterator($sqlselect->fetchAll()) as $x => $row){
?>
        <div class="row">
          <div class="col-12">
            <div class="card mb-3">
              <div class="card-header">Escola</div>
                <div class="card-body text-primary">
                  <form class="row g-3" action="../app/controller/updateEscola.php" method="POST">
                  <input type="hidden" name="idEscola" value="<?php echo $row['idEscola'];?>">  
                  <div class="col-8">
                      <label for="exampleFormControlInput1" class="col-form-label-sm">Nome da Escola</label>
                      <input type="text" name="nomeEscola" class="form-control form-control-sm" id="exampleFormControlInput1" value="<?php echo $row['nomeEscola'];?>">
                    </div>
                    <div class="col-4">
                      <label for="exampleFormControlInput1" class="col-form-label-sm">Localidade</label>
                      <input type="text" name="localidade" class="form-control form-control-sm" id="exampleFormControlInput1"  value="<?php echo $row['localidade'];?>">
                    </div>
                    <div class="col-6">
                      <label for="exampleFormControlInput1" class="col-form-label-sm">Responsável</label>
                      <input type="text" name="responsavel" class="form-control form-control-sm" id="exampleFormControlInput1" value="<?php echo $row['responsavel'];?>" >
                    </div>
                    <div class="col-2 align-self-end">
                      <button type="submit" class="btn btn-primary btn-lg">Editar</button>
                    </div>
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