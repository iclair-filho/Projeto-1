<?php
include 'header.php';
include '../app/controller/connection.php'
?>
<div class="conteudo">
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item"><a href=#>Cadastro</a></li>
                <li class="breadcrumb-item active" aria-current="page">Visitas</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">Visita</div>
                    <div class="card-body">
                        <form class="row g-3" action="../app/controller/insertVisita.php" method="POST">
                            <div class="col-md-4 col-sm-12">
                                <label for="exampleFormControlInput1" class="col-form-label-sm">Setor</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    name="setor" id="setor">
                                    <option selected>-- Selecione o Setor --</option>
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
                            <div class="col-md-8 col-sm-12">
                                <label for="exampleFormControlInput1" class="col-form-label-sm">Nome da Escola</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    name="nomeEscola" id="nomeEscola">
                                    <option value="">Escolha a Escola</option>

                                </select>
                            </div>
                            <div class="col-6">
                                <label for="exampleFormControlInput1" class="col-form-label-sm">Professor</label>
                                <input type="text" name="nomeProf" class="form-control form-control-sm" id="nomeProf"
                                    placeholder="Professor" required>
                            </div>
                            <div class="col-6">
                                <label for="exampleFormControlInput1" class="col-form-label-sm">Telefone
                                    (professor)</label>
                                <input type="tel" name="telProf" class="form-control form-control-sm" id="telProf"
                                    placeholder="Telefone (professor)" required>
                            </div>
                            <div class="col-6">
                                <label for="exampleFormControlInput1" class="col-form-label-sm">N??mero de alunos</label>
                                <input type="number" name="qtAluno" class="form-control form-control-sm" id="qtAluno"
                                    placeholder="N??mero de alunos" required>
                            </div>
                            <div class="col-6">
                                <label for="exampleFormControlInput1" class="col-form-label-sm">Data da visita</label>
                                <input type="date" name="dataVisita" class="form-control form-control-sm"
                                    id="dataVisita" required>
                            </div>
                            <div class="col-6">
                                <label for="exampleFormControlTextarea1" class="col-form-label-sm">Conte??do do
                                    dia</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    name="conteudoDia" placeholder="Conteudo do dia " required></textarea>
                            </div>
                            <div class="col-2 align-self-end">
                                <button type="submit" class="btn btn-primary btn-sm mb-3">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover" id="tabela_javascript">

                        <thead>
                            <tr>
                                <th scope="col">Setor</th>
                                <th scope="col">Escola</th>
                                <th scope="col">Professor</th>
                                <th scope="col">N?? Alunos</th>
                                <th scope="col">Conte??do do Dia</th>
                                <th scope="col">Data da Visita</th>
                                <th scope="col">A????es</th>
                            </tr>
                        </thead>
                        <?php
    try{
        $sqlSelect = $conn->prepare("SELECT * FROM visita v 
        join setor s on v.idSetor = s.idSetor
        join escola e on v.idEscola = e.idEscola");
        $sqlSelect->execute();
        $sqlSelect->setFetchMode(PDO::FETCH_ASSOC);

        foreach(new RecursiveArrayIterator($sqlSelect->fetchAll()) as $x => $row){
            $date = date_create($row['dataVisita']);



?>
                        <tbody>
                            <tr>
                                <td><?php echo $row['setor']?></td>
                                <td><?php echo $row['nomeEscola']?></td>
                                <td><?php echo $row['nomeProf'];?></td>
                                <td><?php echo $row['qtAluno'];?></td>
                                <td class="col-md-4"><?php echo $row['conteudoDia'];?></td>
                                <td><?php echo date_format($date,"d/m/Y");?></td>
                                <td>
                                    <a href="editarVisita.php?idVisita=<?php echo $row['idVisita']; ?>"><i
                                            class='bx bxs-edit bg-warning'></i></a>
                                    <a href="../app/controller/deleteVisita.php?idVisita=<?php echo $row['idVisita'];?>"
                                        onclick="return confirm('Deseja realmente deletar essa Visita?')"><i
                                            class='bx bxs-trash bg-danger'></i></a>
                                    <a href="../app/controller/relatorioVisita.php?idVisita=<?php echo $row['idVisita']; ?>"
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
<?php
include 'footer.php';
?>


<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
google.load("jquery", "3.6.0");
</script>

<script type="text/javascript">

$(function() {
    $('#setor').change(function() {
        if ($(this).val()) {
            $('#nomeEscola').hide();
            $('.carregando').show();
            $.getJSON('../app/controller/script_escola.php?search=', {
                setor: $(this).val(),
                ajax: 'true'
            }, function(j) {
                var options = '<option value="">Escolha a Escola</option>';
                for (var i = 0; i < j.length; i++) {
                    options += '<option value="' + j[i].idEscola + '">' + j[i].nomeEscola +
                        '</option>';
                }
                $('#nomeEscola').html(options).show();
                $('.carregando').hide();
            });
        } else {
            $('#nomeEscola').html('<option value="">??? Escolha a Escola ???</option>');
        }
    });
});
</script>