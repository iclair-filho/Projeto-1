<?php
include 'header.php';
include '../app/controller/connection.php';
?>
     <div class="conteudo">
       <div class="container-fluid">
         <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Setor</li>
          </ol>
        </nav> 
<?php
$id = $_GET['idSetor'];
$sqlSelect = $conn->prepare("SELECT * FROM setor WHERE idSetor = '$id'");
$sqlSelect->execute();
$sqlSelect->setFetchMode(PDO::FETCH_ASSOC);

foreach(new RecursiveArrayIterator($sqlSelect->fetchAll()) as $x => $row){

?>        
        <div class="row">
          <div class="col-12">
            <div class="card mb-3">
              <div class="card-header">Setor</div>
                <div class="card-body text-primary">
                  <form class="row g-3" action="../app/controller/updateSetor.php" method="POST">
                      <input type="hidden" name="idSetor" value="<?php echo $row['idSetor'];?>">
                    <div class="col-5">
                      <label class="visually-hidden">Setor</label>
                      <input type="text" name="setor" class="form-control form-control-sm" id="setor" placeholder="Descrição" value="<?php echo $row['setor'];?>">
                    </div>
                    <div class="col-5">
                      <label for="staticEmail2" class="visually-hidden">Localidade</label>
                      <input type="text" name="localidade" class="form-control form-control-sm" id="localidade" placeholder="Localidade" value="<?php echo $row['localidade'];?>">
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