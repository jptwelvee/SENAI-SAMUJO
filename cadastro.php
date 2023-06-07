<!DOCTYPE html>
<html lang='Pt-Br'>
    <head>
        <title>CADASTRO USUARIO</title>
        <link rel="schortcut icon" type="image/png" href="img/8413196.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  
        <link rel="stylesheet" href="">
    </head>
    <body>

        <div class='container'>
            <h1 style="text-align:center;">CADASTRO DE USUARIO</h1>
            <br><br>
            <form action="CRUD/cad_usu.php" method="post">
            <div class = "form-grup offset-md-3">
                <div class="col-md-6">
                    <label for="">Nome do usuario</label>
                    <br>
                    <input type="text" name ="nome_usu" id="" class="form-control">

                </div>            
            </div>
            <div class = "form-grup offset-md-3">
                <div class="col-md-6">
                    <label for="">Login</label>
                    <br>
                    <input type="text" name ="login_usu" id="" class="form-control">

                </div>               
            </div>
            <div class = "form-grup offset-md-3">
                <div class="col-md-6">
                    <br>
                    <label for="">senha:</label>
                    <br>
                    <input type="text" name ="senha_usu" id="" class="form-control ">
                </div>                 
            </div>
            <div class = "form-grup offset-md-3">
              
                <div class="col-md-6">
                    <br>
                    <button type="submit" class="btn btn-success" value= "">CADASTRAR USUARIO</button>          
                    <a href="login.php" class="btn btn-primary" >VOLTAR AO LOGIN</a>
                </div>     
                                    
                </div>            
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>        
    </body>
</html>