<?php
session_start();
ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);
$server="http://".$_SERVER['HTTP_HOST']."/";
require_once "topo.php";
require_once "assets/src/Pessoa.php";
require_once "assets/src/PessoaFisica.php";
require_once "assets/src/PessoaJuridica.php";
require_once "clientes.php";

if(isset($_POST['ordenar'])){

    $lista_clientes= $cliente->OrdenarArray($_POST['ordenar'], $clientes);
    $_SESSION['lista_clientes']= $lista_clientes;
}
else{
    $_SESSION['lista_clientes']=$clientes;
    $lista_clientes=$clientes;
}

?>


<p><strong>Listagem de Clientes</strong></p>
<form method="POST">
    <div id="mae">
        <table class="footable">
            <thead>
            <tr>
                <th>
                    <span>Nome/Empresa</span>
                </th>
                <th>
                    <span>Tipo</span>
                </th>

            </tr>

            <tbody>
            <?php
            foreach($lista_clientes as $lista){

                if($lista->tipo =='F'){
                    $chave=$lista->cpf;
                    $texto=$lista->nome;
                    $tipo="Pessoa Física";
                }
                else{
                    $chave=$lista->cnpj;
                    $texto=$lista->empresa;
                    $tipo="Pessoa Jurídica";
                }

                ?>
                <tr>
                    <td><a href="#myModal" data-toggle="modal" data-title="Clique aqui para visualizar o cadastro" class="tooltip" onclick="Dados('<?php echo $chave ;?>');"><?php echo $texto ;?></a></td>
                    <td><?php echo $tipo ;?></td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>

        <br /><br />

        <table class="table">
            <tr>
                <td>
                    <select name="ordenar" class="form-control">
                        <option value="ASC">Crescente</option>
                        <option value="DESC">Decrescente</option>
                    </select>
                </td>
                <td>

                    <input type='submit' value="Ordenar" class="btn">
                </td>
            </tr>
        </table>

    </div>
</form>
<br />


<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-body">
        <div id="conteudo"></div>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Fechar</button>

    </div>
</div>
<?php
require_once 'rodape.php';
?>
