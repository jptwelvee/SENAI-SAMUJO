<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">

            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    <form action="logar.php" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="">Login usuario</label><br>
                                <input type="text" name ="login_usu" id="" class="form-control " placeholder="Insira seu login">
                            </div>
                            <div class="form-group">
                                <label for="" >Senha:</label><br>
                                <input type="password" name ="senha_usu" id="" class="form-control " placeholder="Insira sua senha">
                            </div>
                            <div class="form-group">
                            <button type="submit" class="btn btn-success" value= "">LOGIN</button> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>