<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap w/ Vite</title>


    @vite([
        'resources/css/app.css', 
        'resources/js/app.js',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        ])
        </head>
<body>
    <!-- As a link -->
<div class="container ">
    <div class="row">
        <div class="col">




        <nav class="navbar navbar-expand-lg bg-primary">

            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#" >SISTEMA WEB</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-white" href="#">Consultar</a>
                    </li>

                
                </ul>
                </div>
            </div>
            </nav>

            <div class="container">
            <div class="row">
                <div class="col">

                    <br>

                    <h4>Cadastrar- Agendamento de Potenciais Clientes</h4>
                    <p>Sistema utilizado para agendamento de serviços</p>
                    <br>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" >
                    </div>


                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Telefone:</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="(xx)xxxxx-xxxx" >
                    </div>

                    <p>Origem:</p>
                    <select class="form-select" aria-label="Default select example">
                    <option selected>Celular</option>
                    <option value="1">Notebook</option>
                    <option value="2">Computador</option>
                    </select>

                    
                    <br>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Data do contato:</label>
                        <input type="date" class="form-control" id="formGroupExampleInput" >
                    </div>
                    
                    
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Observação:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
            </div>



            





        </div>
    </div>
</div>







</body>
</html>