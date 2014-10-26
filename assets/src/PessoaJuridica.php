<?php

class PessoaJuridica extends Pessoa
{

    protected $cnpj;
    protected $empresa;

    public function getCnpj(){
        return $this->cnpj;
    }

    public function setCnpj($cnpj){
        $this->cnpj=$cnpj;
    }

    public function getEmpresa(){
        return $this->empresa;
    }

    public function setEmpresa($empresa){
        $this->empresa=$empresa;
    }

    protected function tipoPessoa(){
        $this->tipopessoa = "J";
    }
    public function setgrauEmpresa($grau){
        $this->grau = $grau;
    }

    public function getgrauEmpresa(){
        return $this->grau;
    }


    public function getDados(){
        return (object) array('empresa' => $this->getEmpresa(),
            'cnpj' => $this->getCnpj(),
            'cep' => $this->getCep(),
            'endereco' => $this->getEndereco(),
            'numero' => $this->getNumero(),
            'complemento' => $this->getComplemento(),
            'bairro' => $this->getBairro(),
            'cidade' => $this->getCidade(),
            'estado' => $this->getEstado(),
            'tipo' => 'J',
            'grau' => $this->getgrauEmpresa(),
            'cepCobranca' => $this->getcepCobranca(),
            'enderecoCobranca' => $this->getenderecoCobranca(),
            'numeroCobranca' => $this->getnumeroCobranca(),
            'complementoCobranca' => $this->getcomplementoCobranca(),
            'bairroCobranca' => $this->getbairroCobranca(),
            'cidadeCobranca' => $this->getcidadeCobranca(),
            'estadoCobranca' => $this->getestadoCobranca(),
        );
    }
} 