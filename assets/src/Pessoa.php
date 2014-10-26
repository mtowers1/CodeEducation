<?php
Abstract class Pessoa
{

    protected $cep;
    protected $endereco;
    protected $numero;
    protected $complemento;
    protected $bairro;
    protected $cidade;
    protected $estado;
    protected $tipopessoa;
    protected $grau;
    protected $clientes;

    protected $cepCobranca;
    protected $enderecoCobranca;
    protected $numeroCobranca;
    protected $complementoCobranca;
    protected $bairroCobranca;
    protected $cidadeCobranca;
    protected $estadoCobranca;

    public final function getCep()
    {
     return $this->cep;
    }

    public final function setCep($cep)
    {
        $this->cep = $cep;
    }

    public final function getEndereco()
    {
        return $this->endereco;
    }

    public final function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public final function getNumero()
    {
        return $this->numero;
    }

    public final function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public final function getComplemento()
    {
        return $this->complemento;
    }

    public final function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }

    public final function getBairro()
    {
        return $this->bairro;
    }

    public final function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    public final function getCidade()
    {
        return $this->cidade;
    }

    public final function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    public final function getEstado()
    {
        return $this->estado;
    }

    public final function setEstado($estado)
    {
        $this->estado = $estado;
    }


    /* Endereço de Cobrança*/

    public final function getCepCobranca()
    {
        return $this->cepCobranca;
    }

    public final function setCepCobranca($cepCobranca)
    {
        $this->cepCobranca = $cepCobranca;
    }

    public final function getEnderecoCobranca()
    {
        return $this->enderecoCobranca;
    }

    public final function setEnderecoCobranca($enderecoCobranca)
    {
        $this->enderecoCobranca = $enderecoCobranca;
    }

    public final function getNumeroCobranca()
    {
        return $this->numeroCobranca;
    }

    public final function setNumeroCobranca($numeroCobranca)
    {
        $this->numeroCobranca = $numeroCobranca;
    }

    public final function getComplementoCobranca()
    {
        return $this->complementoCobranca;
    }

    public final function setComplementoCobranca($complementoCobranca)
    {
        $this->complementoCobranca = $complementoCobranca;
    }

    public final function getBairroCobranca()
    {
        return $this->bairroCobranca;
    }

    public final function setBairroCobranca($bairroCobranca)
    {
        $this->bairro = $bairroCobranca;
    }

    public final function getCidadeCobranca()
    {
        return $this->cidadeCobranca;
    }

    public final function setCidadeCobranca($cidadeCobranca)
    {
        $this->cidadeCobranca = $cidadeCobranca;
    }

    public final function getEstadoCobranca()
    {
        return $this->estadoCobranca;
    }

    public final function setEstadoCobranca($estadoCobranca)
    {
        $this->estadoCobranca = $estadoCobranca;
    }

    public function ProcuraCliente($chave,$clientes) {

        $vl =false;

        for($i=0;$i<count($clientes);$i++){
           // echo $clientes[$i]->tipo."<br />";
            if($clientes[$i]->tipo=='F'){
                $chave_array=$clientes[$i]->cpf;
            }
            else{
                $chave_array=$clientes[$i]->cnpj;
            }
            if( $chave==$chave_array){
                $dados_cliente = $clientes[$i];
                $vl =true;

            }

        }

        if($vl){
            return $dados_cliente;
        }
        else{
            return false;
        }
    }

    public function OrdenarArray($ordem, $clientes)
    {

        if($ordem=='ASC'){
            ksort($clientes);
            return $clientes;
        }
        else{
            krsort($clientes);
            return $clientes;
        }


    }

    abstract protected function tipoPessoa();
    abstract protected function setgrauEmpresa($grau);
    //abstract protected function setDados();
    abstract protected function getDados();


} 