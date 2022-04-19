<?php
include 'header.php';
include '../app/controller/connection.php';
?>
<div class="conteudo">
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Escola</li>
            </ol>
        </nav>
        <div class="row">
            <!-- Cadastro Escola -->

            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">Escola</div>
                    <div class="card-body text-primary">
                        <form class="row g-3" action="../app/controller/insertEscola.php" method="POST">
                            <div class="col-4">
                                <label for="exampleFormControlInput1" class="col-form-label-sm">Setor</label>
                                <select class="form-select form-select-sm" name="idSetor"
                                    aria-label=".form-select-sm example">
                                    <option selected> -- Selecione um Setor ---</option>
                                    <?php
                                      try{
                                        $sqlSetor = $conn->prepare("SELECT * FROM setor");
                                        $sqlSetor->execute();
                                        $sqlSetor->setFetchMode(PDO::FETCH_ASSOC);

                                        foreach(new RecursiveArrayIterator($sqlSetor->fetchAll()) as $x => $row){
                                          
                                    ?>
                                    <option value="<?= $row['idSetor'];?>"><?php echo $row['setor'];?></option>
                                    <?php
                                        }
                                      }catch(PDOException $e){
                                        echo "Error: " . $e->getMessage();
                                      }
                                    ?>
                                </select>
                            </div>
                            <div class="col-8">
                                <label for="exampleFormControlInput1" class="col-form-label-sm">Nome da Escola</label>
                                <input type="text" name="nomeEscola" class="form-control form-control-sm"
                                    id="exampleFormControlInput1">
                            </div>
                            <div class="col-4">
                                <label for="exampleFormControlInput1" class="col-form-label-sm">Localidade</label>
                                <input type="text" name="localidade" class="form-control form-control-sm"
                                    id="exampleFormControlInput1">
                            </div>
                            <div class="col-6">
                                <label for="exampleFormControlInput1" class="col-form-label-sm">Responsável</label>
                                <input type="text" name="responsavel" class="form-control form-control-sm"
                                    id="exampleFormControlInput1">
                            </div>
                            <div class="col-2 align-self-end">
                                <button type="submit" class="btn btn-primary btn-sm">Cadastrar</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>

            <!-- Tabela Escola -->

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover" id="tabela_javascript">
                            <thead>
                                <tr>
                                    <th scope="col">Setor</th>
                                    <th scope="col">Escola</th>
                                    <th scope="col">Localidade</th>
                                    <th scope="col">Responsável</th>
                                    <th scope="col">Ações</th> 
                                </tr>
                            </thead>
                            <?php 
  try{
    $sqlSelect = $conn->prepare("SELECT * FROM escola e join setor s on e.idSetor=s.idSetor");
    $sqlSelect->execute();
    $sqlSelect->setFetchMode(PDO::FETCH_ASSOC);
    
    foreach(new RecursiveArrayIterator($sqlSelect->fetchAll()) as $x => $row){
      

?>
                            <tbody>
                                <tr>
                                    <td><?= $row['setor'];?></td>
                                    <td><?php echo $row['nomeEscola'];?></td>
                                    <td><?php echo $row['localidadeEscola'];?></td>
                                    <td><?php echo $row['responsavel'];?></td>
                                    <td>
                                        <a href="editarEscola.php?idEscola=<?php echo $row['idEscola']; ?>"><i
                                                class='bx bxs-edit bg-warning'></i></a>
                                        <a href="../app/controller/deleteEscola.php?idEscola=<?php echo $row['idEscola'];?>"
                                            onclick="return confirm('Deseja realmente deletar esta Escola?')"><i
                                                class='bx bxs-trash bg-danger'></i></a>
                                        <a href="../app/controller/relatorioEscola.php?idEscola=<?php echo $row['idEscola']; ?>"
                                        target=_blank><i class='bx bxs-report bg-info'></i></a>
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



</div>
<?php
include 'footer.php';
?>