<?php
include 'header.php';
?>
<div class="conteudo">
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Visitas</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header d-flex align-content-center justify-content-between mb-0">
                        <div>Visitas</div>
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">Cadastrar</button>

                    </div>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="card-body">


                            <form action="" method="post">
                                <div class="row g-1">
                                    <div class="col-3">
                                        <label for="" class="col-form-label-sm">Setor</label>
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-9">
                                        <label for="" class="col-form-label-sm">Nome da
                                            Escola</label>
                                        <input type="text" name="nome_escola" class="form-control form-control-sm"
                                            id="">

                                    </div>

                                </div>

                                <div class="row g-1">
                                    <div class="col-8">
                                        <label for="" class="col-form-label-sm">Professor</label>
                                        <input type="text" name="nome_professo" class="form-control form-control-sm"
                                            id="">
                                    </div>
                                    <div class="col-4">
                                        <label for="" class="col-form-label-sm">Telefone
                                            (Professor)</label>
                                        <input type="tel" name="tel_professo" class="form-control form-control-sm"
                                            id="">
                                    </div>

                                </div>

                                <div class="row g-1">
                                    <div class="col-2">
                                        <label for="" class="col-form-label-sm">Número de
                                            Alunos</label>
                                        <input type="number" name="n_aluno" class="form-control form-control-sm" id="">

                                    </div>
                                    <div class="col-2">
                                        <label for="" class="col-form-label-sm">Data da
                                            Visita</label>
                                        <input type="date" name="dt_visita" class="form-control form-control-sm" id="">

                                    </div>
                                    <div class="col-8">
                                        <label for="exampleFormControlTextarea1" class="col-form-label-sm">Conteúdo
                                            do dia</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            name="conteudo"></textarea>

                                    </div>
                                    <div class="col-12 d-flex justify-content-center gap-2 mt-3">

                                        <button type="submit" class="btn btn-success btn-sm">Incluir</button>
                                        <button type="reset" class="btn btn-warning btn-sm">Limpar</button>


                                    </div>

                                </div>





                            </form>

                        </div>




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
                                <th scope="col">Setor</th>
                                <th scope="col">Escola</th>
                                <th scope="col">Professor</th>
                                <th scope="col">Nº Alunos</th>
                                <th scope="col">Data da Visita</th>
                                <th scope="col">Ações</th>


                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row">Rural</th>
                                <td>Escola Dom Pedro de Alcantara</td>
                                <td>José de Alencar da Silva</td>
                                <td>250</td>
                                <td>25-01-2022</td>
                                <td>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editarVisita"
                                        data-bs-whatever="@mdo"><i class='bx bxs-edit bg-warning'></i></a>
                                    <a href="#"><i class='bx bxs-trash bg-danger'></i></a>
                                </td>

                            </tr>
                            <tr>
                                <th scope="row">Rural</th>
                                <td>Escola Dom Pedro de Alcantara</td>
                                <td>José de Alencar da Silva</td>
                                <td>250</td>
                                <td>25-01-2022</td>
                                <td>
                                    <a href="#"><i class='bx bxs-edit bg-warning'></i></a>
                                    <a href="#"><i class='bx bxs-trash bg-danger'></i></a>
                                </td>

                            </tr>
                            <tr>
                                <th scope="row">Rural</th>
                                <td>Escola Dom Pedro de Alcantara</td>
                                <td>José de Alencar da Silva</td>
                                <td>250</td>
                                <td>25-01-2022</td>
                                <td>
                                    <a href="#"><i class='bx bxs-edit bg-warning'></i></a>
                                    <a href="#"><i class='bx bxs-trash bg-danger'></i></a>
                                </td>

                            </tr>
                            <tr>
                                <th scope="row">Rural</th>
                                <td>Escola Dom Pedro de Alcantara</td>
                                <td>José de Alencar da Silva</td>
                                <td>250</td>
                                <td>25-01-2022</td>
                                <td>
                                    <a href="#"><i class='bx bxs-edit bg-warning'></i></a>
                                    <a href="#"><i class='bx bxs-trash bg-danger'></i></a>
                                </td>

                            </tr>
                            <tr>
                                <th scope="row">Rural</th>
                                <td>Escola Dom Pedro de Alcantara</td>
                                <td>José de Alencar da Silva</td>
                                <td>250</td>
                                <td>25-01-2022</td>
                                <td>
                                    <a href="#"><i class='bx bxs-edit bg-warning'></i></a>
                                    <a href="#"><i class='bx bxs-trash bg-danger'></i></a>
                                </td>

                            </tr>





                        </tbody>
                    </table>
                </div>

            </div>

        </div>


    </div>

</div>


</div>

<!-- Modal -->
<div class="modal fade" id="editarVisita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-x">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Atualizar Cadastro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <div class="modal-body">


                    <div class="row g-1">
                        <div class="col-md-12">
                            <label for="" class="col-form-label-sm">Setor</label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col--md-12">
                            <label for="" class="col-form-label-sm">Nome da
                                Escola</label>
                            <input type="text" name="nome_escola" class="form-control form-control-sm" id="">

                        </div>

                    </div>

                    <div class="row g-1">
                        <div class="col-8">
                            <label for="" class="col-form-label-sm">Professor</label>
                            <input type="text" name="nome_professo" class="form-control form-control-sm" id="">
                        </div>
                        <div class="col-4">
                            <label for="" class="col-form-label-sm">Telefone
                                (Professor)</label>
                            <input type="tel" name="tel_professo" class="form-control form-control-sm" id="">
                        </div>

                    </div>

                    <div class="row g-1">
                        <div class="col-6">
                            <label for="" class="col-form-label-sm">Número de
                                Alunos</label>
                            <input type="number" name="n_aluno" class="form-control form-control-sm" id="">

                        </div>
                        <div class="col-6">
                            <label for="" class="col-form-label-sm">Data da
                                Visita</label>
                            <input type="date" name="dt_visita" class="form-control form-control-sm" id="">

                        </div>
                        <div class="col-12">
                            <label for="exampleFormControlTextarea1" class="col-form-label-sm">Conteúdo
                                do dia</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                name="conteudo"></textarea>

                        </div>


                    </div>






                </div>
                <div class="modal-footer">

                    <button type="submit" class="btn btn-warning" data-bs-dismiss="modal">Atualizar</button>

                </div>
            </form>
        </div>
    </div>
</div>

<script>
var exampleModal = document.getElementById('editarVisita')
exampleModal.addEventListener('show.bs.modal', function(event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var recipient = button.getAttribute('data-bs-whatever')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var modalTitle = exampleModal.querySelector('.modal-title')
    var modalBodyInput = exampleModal.querySelector('.modal-body input')

    modalTitle.textContent = 'New message to ' + recipient
    modalBodyInput.value = recipient
})
</script>


<?php
include 'footer.php';
?>