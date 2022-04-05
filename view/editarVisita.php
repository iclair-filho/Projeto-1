<?php
include 'header.php';
include '../app/controller/connection.php'
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
                            <form action="../app/controller/insertVisita.php" method="post">
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
                                        <input type="text" name="nomeEscola" class="form-control form-control-sm"
                                            id="">
                                    </div>
                                </div>
                                <div class="row g-1">
                                    <div class="col-8">
                                        <label for="" class="col-form-label-sm">Professor</label>
                                        <input type="text" name="nomeProf" class="form-control form-control-sm"
                                            id="">
                                    </div>
                                    <div class="col-4">
                                        <label for="" class="col-form-label-sm">Telefone
                                            (Professor)</label>
                                        <input type="tel" name="telProf" class="form-control form-control-sm"
                                            id="">
                                    </div>
                                </div>
                                <div class="row g-1">
                                    <div class="col-2">
                                        <label for="" class="col-form-label-sm">Número de
                                            Alunos</label>
                                        <input type="number" name="qtAluno" class="form-control form-control-sm" id="">
                                    </div>
                                    <div class="col-2">
                                        <label for="" class="col-form-label-sm">Data da
                                            Visita</label>
                                        <input type="date" name="dataVisita" class="form-control form-control-sm" id="">
                                    </div>
                                    <div class="col-8">
                                        <label for="exampleFormControlTextarea1" class="col-form-label-sm">Conteúdo
                                            do dia</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            name="conteudoDia"></textarea>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center gap-2 mt-3">
                                        <button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
                                        <button type="reset" class="btn btn-warning btn-sm">Limpar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        