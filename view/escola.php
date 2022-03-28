<?php
include 'header.php';
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
                  <form class="row g-3">
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
                      <input type="text" name="nome_escola" class="form-control form-control-sm" id="exampleFormControlInput1">

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
                      <th scope="col">Setor</th>
                      <th scope="col">Escola</th>
                      <th scope="col">Localidade</th>
                      <th scope="col">Responsável</th>
                      <th scope="col">Ações</th>
                      
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <th scope="row">Rural</th>
                      <td>Escola Dom Pedro de Alcantara</td>
                      <td>Escola Dom Pedro de Alcantara</td>
                      <td>Rua Marechal Rondon, 66</td>
                      <td>
                        <a href="#"><i class='bx bxs-edit bg-warning'></i></a>
                        <a href="#"><i class='bx bxs-trash bg-danger'></i></a>
                      </td>
                      
                    </tr>
                    <tr>
                      <th scope="row">Rural</th>
                      <td>Escola Dom Pedro de Alcantara</td>
                      <td>Escola Dom Pedro de Alcantara</td>
                      <td>Rua Marechal Rondon, 66</td>
                      <td>
                        <a href="#"><i class='bx bxs-edit bg-warning'></i></a>
                        <a href="#"><i class='bx bxs-trash bg-danger'></i></a>
                      </td>
                      
                    </tr>
                    <tr>
                      <th scope="row">Rural</th>
                      <td>Escola Dom Pedro de Alcantara</td>
                      <td>Escola Dom Pedro de Alcantara</td>
                      <td>Rua Marechal Rondon, 66</td>
                      <td>
                        <a href="#"><i class='bx bxs-edit bg-warning'></i></a>
                        <a href="#"><i class='bx bxs-trash bg-danger'></i></a>
                      </td>
                      
                    </tr>
                    <tr>
                      <th scope="row">Rural</th>
                      <td>Escola Dom Pedro de Alcantara</td>
                      <td>Escola Dom Pedro de Alcantara</td>
                      <td>Rua Marechal Rondon, 66</td>
                      <td>
                        <a href="#"><i class='bx bxs-edit bg-warning'></i></a>
                        <a href="#"><i class='bx bxs-trash bg-danger'></i></a>
                      </td>
                      
                    </tr>
                    <tr>
                      <th scope="row">Rural</th>
                      <td>Escola Dom Pedro de Alcantara</td>
                      <td>Escola Dom Pedro de Alcantara</td>
                      <td>Rua Marechal Rondon, 66</td>
                      <td>
                        <a href="#"><i class='bx bxs-edit bg-warning'></i></a>
                        <a href="#"><i class='bx bxs-trash bg-danger'></i></a>
                      </td>
                      
                    </tr>
                    <tr>
                      <th scope="row">Rural</th>
                      <td>Escola Dom Pedro de Alcantara</td>
                      <td>Escola Dom Pedro de Alcantara</td>
                      <td>Rua Marechal Rondon, 66</td>
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

    
<?php
include 'footer.php';
?>