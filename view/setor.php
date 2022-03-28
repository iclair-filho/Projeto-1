<?php
include 'header.php';
?>
     <div class="conteudo">
       <div class="container-fluid">
         <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Setor</li>
          </ol>
        </nav> 
        <div class="row">
          <div class="col-12">
            <div class="card mb-3">
              <div class="card-header">Setor</div>
                <div class="card-body text-primary">
                  <form class="row g-3">
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
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Setor</th>
                      <th scope="col">Localidade</th>
                      <th scope="col">Ações</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>
                        <a href="#"><i class='bx bxs-edit bg-warning'></i></a>
                        <a href="#"><i class='bx bxs-trash bg-danger'></i></a>
                      </td>
                      
                    </tr>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>
                        <a href="#"><i class='bx bxs-edit bg-warning'></i></a>
                        <a href="#"><i class='bx bxs-trash bg-danger'></i></a>
                      </td>
                      
                    </tr>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>
                        <a href="#"><i class='bx bxs-edit bg-warning'></i></a>
                        <a href="#"><i class='bx bxs-trash bg-danger'></i></a>
                      </td>
                      
                    </tr>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
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