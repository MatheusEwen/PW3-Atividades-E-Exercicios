<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--CSS DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <title>Consulta Produtos</title>
</head>
<body>
<?php
include_once "menu.php";
?>
<div class="container">
    <div class="row mt-3">
        <div class="col-sm-10 mx-auto">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Consulta de Anúncios
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="tabela">
                        <thead>
                            <th>Título</th>
                            <th>Preço</th>
                            <th>Categoria</th>
                            <th>Anunciante</th>
                            <th>Ações</th>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($dadosProduto as $key => $value) {
                                echo "<tr>
                                        <td>$value->titulo</td>
                                        <td>R$ " . number_format($value->preco, 2, ",", ".") . "</td>
                                        <td>$value->nomecategoria</td>
                                        <td>$value->nome</td>
                                        <td>
                                            <a onclick=\"return confirm('Deseja excluir?')\" class='btn btn-danger btn-sm' href='index.php?classe=ProdutoController&metodo=excluirProduto&codproduto=$value->codproduto'>Excluir</a>
                                            <a href='index.php?classe=ProdutoController&metodo=editarProduto&codproduto=$value->codproduto' class='btn btn-warning btn-sm'>Editar</a>
                                        </td>
                                    </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
   

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!-- DataTables JS--> 
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script>
$('#tabela').DataTable({
    "language": {
        "sProcessing":    "Procesando...",
        "sLengthMenu":    "Mostrando _MENU_ registros",
        "sZeroRecords":   "Nenhum registro encontrado",
        "sEmptyTable":    "Nenhum registro encontrado",
        "sInfo":          "Mostrando _START_ até _END_ de _TOTAL_ registros",
        "sInfoEmpty":     "Mostrando registros de 0 até 0 de 0 registros",
        "sInfoFiltered":  "(Filtrados de _MAX_ registros)",
        "sInfoPostFix":   "",
        "sSearch":        "Buscar:",
        "sUrl":           "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Carregando...",
        "oPaginate": {
            "sFirst":    "Primero",
            "sLast":    "Último",
            "sNext":    "Próximo",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending":  ": Ordenar de maneira crescente",
            "sSortDescending": ": Ordenar de maneira decrescente"
        }
    }
});
</script>
</body>
</html>