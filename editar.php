<?php
session_start();
ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);
if(!isset($_POST['chave'])){
    if(strlen($_POST['chave'])<=11){
        echo 'CPF não enviado';
    }
    else{
        echo 'CNPJ não enviado';
    }

    exit();
}
require_once "assets/src/Pessoa.php";
require_once "assets/src/PessoaFisica.php";
$cliente = new PessoaFisica;

$lista_de_clientes = $cliente->ProcuraCliente($_POST['chave'], $_SESSION['lista_clientes']);


if($lista_de_clientes !=false){

    if($lista_de_clientes->tipo=='F'){
    ?>

    <b>Nome:</b> <?php echo $lista_de_clientes->nome;?><br />
    <b>CPF:</b> <?php echo $lista_de_clientes->cpf;?><br />
    <?php
    }
    else{
    ?>
    <b>Empresa:</b> <?php echo $lista_de_clientes->empresa;?><br />
    <b>CPNJ:</b> <?php echo $lista_de_clientes->cnpj;?><br />
        <?php
    } ?>
    <b>CEP:</b> <?php echo $lista_de_clientes->cep;?><br />
    <b>Endereço:</b> <?php echo $lista_de_clientes->endereco;?><br />
    <b>Número:</b> <?php echo $lista_de_clientes->numero;?><br />
    <b>Complemento:</b> <?php echo $lista_de_clientes->complemento;?><br />
    <b>Bairro:</b> <?php echo $lista_de_clientes->bairro;?><br />
    <b>Cidade:</b> <?php echo $lista_de_clientes->cidade;?><br />
    <b>Estado:</b> <?php echo $lista_de_clientes->estado;?><br />
    <b>Tipo:</b> <?php if($lista_de_clientes->tipo=='F'){echo "Pessoa Física";}else{echo "Pessoa Jurídica";}?><br />
    <b>Grau de importância:</b> <?php echo $lista_de_clientes->grau;?> Estrela(s)<br />

    <?php
    if($lista_de_clientes->cepCobranca !=""){
    ?>
        <b>CEP de Cobrança:</b> <?php echo $lista_de_clientes->cepCobranca;?><br />
        <b>Endereço de Cobrança:</b> <?php echo $lista_de_clientes->enderecoCobranca;?><br />
        <b>Número de Cobrança:</b> <?php echo $lista_de_clientes->numeroCobranca;?><br />
        <b>Complemento de Cobrança:</b> <?php echo $lista_de_clientes->complementoCobranca;?><br />
        <b>Bairro de Cobrança:</b> <?php echo $lista_de_clientes->bairroCobranca;?><br />
        <b>Cidade de Cobrança:</b> <?php echo $lista_de_clientes->cidadeCobranca;?><br />
        <b>Estado de Cobrança:</b> <?php echo $lista_de_clientes->estadoCobranca;?><br />
    <?php
    }
    ?>

<?php } else{?>
    <h2>Cadastro não existente!</h2>
<?php }
?>
