<?php 
    include '../app/controller/connection.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visita</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- icons Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
    <!-- Styles CSS -->
    <link rel="stylesheet" href="../assets/css/cadUsuario.css">

    <!-- JavaScript -->
    <script type="text/javascript" src="./assets/js/jquery-1.2.6.pack.js"></script>
    <script type="text/javascript" src="./assets/js/jquery.maskedinput-1.1.4.pack.js"></script>
    <script src="./assets/js/script.jS" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous" defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous" defer></script>

</head>
<body> 
    <!-- Formulário de cadastro -->
    <div class="info a">
       <h2 class="card-title">Cadastro de Visita</h2> 
    </div>
    
    <div class="row a">
        <div class="container form">
            <form action="../app/controller/insertVisita.php" method="post">
                <div class="mb-3">
                <label for="" class="form-label">Coordenador</label>
                <input type="text" class="form-control" name="coordenador" id="" placeholder="Coordenador" required>
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Quantidade de alunos</label>
                <input type="number" class="form-control" name="qtAluno" id="cpf" placeholder="Quantidade de alunos" required>
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Conteudo do dia</label>
                <input type="text" class="form-control" name="conteudoDia" id="" placeholder="Conteudo do dia" required>
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Nome do professor</label>
                <input type="text" class="form-control" name="nomeProf" id="" placeholder="Nome do professor" required>
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Telefone do Professor</label>
                <input type="tel" class="form-control" name="telProf" id="" placeholder="Telefone do Professor" required>
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Data da visita</label>
                <input type="date" class="form-control" name="dataVisita" id="" placeholder="Data da visita" required>
                </div>
                <button class="btn btn-primary" type="submit">Cadastrar</button>
            </form>
        </div>
    </div> 
    
    <!-- Tabela -->
    <div class="info b">
       <h2 class="card-title">Tabela de Visita</h2> 
    </div>
    
    <div class="row b">
        <div class="container tabela">
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Coordenador</th>
                <th scope="col">Qt alunos</th>
                <th scope="col">Conteudo</th>
                <th scope="col">Nome do professor</th>
                <th scope="col">Tel professor</th>
                <th scope="col">Data da visita</th>
                <th scope="col" colspan="2"><button class="btn btn-success">Gerar relatório</button></th>

                </tr>
            </thead>

    <?php
        try{
            $sql = $conn->prepare("SELECT * FROM visita");
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);

            foreach(new RecursiveArrayIterator($sql->fetchAll()) as $x => $row){
    ?>

            <tbody>
                <tr>
                <th scope="row"><?php echo $row['idVisita'];?></th>
                <td><?php echo $row['coordenador'];?></td>
                <td><?php echo $row['qtAluno'];?></td>
                <td><?php echo $row['conteudoDia'];?></td>
                <td><?php echo $row['nomeProf'];?></td>
                <td><?php echo $row['telProf'];?></td>
                <td><?php echo $row['dataVisita'];?></td>
                <td><a href="editarVisita.php?idVisita=<?php echo $row['idVisita'];?>"><button class="btn btn-warning">Editar</button></a></td>
                <td><a href="#" onclick="return confirm('Confirme para deletar');"><form action="../app/controller/deleteVisita.php" method="post"><input type="hidden" name="idVisita" value="<?php echo $row['idVisita'];?>"><button class="btn btn-danger" type="submit">Deletar</button></form></a></td>
                </tr>
            </tbody>

    <?php
            }//endfoeach
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }    
        $conn = null;
    ?>
        </table>
        </div>
    </div>    
</body>
</html>