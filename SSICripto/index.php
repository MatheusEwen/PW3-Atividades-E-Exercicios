<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criptografia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row mt-3 ">
    <div class="col">
        <form action="index.php" method="post">
        <div class="card border-secondary mb-3" style="max-width: 18rem;">
        <div class="card-header mt-2">Criptografe textos!</div>
        <div class="card-body text-secondary">
        <h5 class="card-title">Insira seu texto</h5>
        <input type="text" name="texto">
        <h5 class="card-title">Escolha a criptografia</h5>
        <select class="form-control" name="select">
            <option value="1">Criptografia Base64</option>
            <option value="2">Criptografia MD5</option>
            <option value="3">Criptografia SHA-1</option>
            <option value="4">Criptografia PASSWORD_HASH</option>
        </select>
        
        <button type="submit" class="btn btn-primary mt-2 text-center " >Criptografar</button>

        </form>
        </div>
        </div>
       
    </div>
    
</div>
<?php 
        $tex = $_POST["texto"];
        $tipo = $_POST["select"];
        if($tipo == 1){
            
           echo " O texto digitado foi: $tex, na Base64 fica: <br> ".base64_encode($tex);

        }
        if($tipo == 2){
            
            echo " O texto digitado foi: $tex, em MD5 fica: <br> ".md5($tex);
         }
         if($tipo == 3){
            
            echo " O texto digitado foi: $tex, em SHA-1 fica: <br> ".sha1($tex);
 
         }
         if($tipo == 4){
            
            echo " O texto digitado foi: $tex, em password_hash fica: <br> ".password_hash($tex, PASSWORD_DEFAULT);
 
         }
        
    ?>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>