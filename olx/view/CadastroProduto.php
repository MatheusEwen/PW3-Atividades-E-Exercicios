<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Cadastro Produtos</title>
</head>
<body>
<?php
include_once "menu.php";
?>

<div class="container">
    <div class="row mt-3">
        <div class="col-sm-8 mx-auto">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Cadastro de Anúncios
                </div>
                <div class="card-body">
                    <form action="index.php?classe=ProdutoController&metodo=cadastrarProduto" method="post">
                        <div class="col">
                            <div class="form-group">
                                <label>Título</label>
                                <input type="text" class="form-control" name="titulo" placeholder="Informe o título do anúncio">
                            </div>
                            <div class="form-group">
                                <label>Descrição</label>
                                <textarea name="descricao" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Preço</label>
                                <input type="number" step="any" class="form-control" name="preco" placeholder="Informe o preço do produto">
                            </div>
                            <div class="form-group">
                                <label>Categoria</label>
                                <select name="codcategoria" class="form-control">
                                    <?php 
                                    foreach($dadosCategoria as $value)
                                    {
                                        echo "<option value='$value->codcategoria'>$value->nomecategoria</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Anuncante</label>
                                <select name="codanunciante" class="form-control">
                                <?php 
                                foreach($dadosAnunciante as $value)
                                {
                                    echo "<option value='$value->codanunciante'>$value->nome</option>";
                                }
                                ?>
                            </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Gravar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>       
    </div>
</div>  

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- CKEditor -->
<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'descricao' );
</script>
</body>
</html>