<?php
class PessoaFisica extends Pessoa
{

    protected $cpf;
    protected $nome;


    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf=$cpf;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome=$nome;
    }

    protected function tipoPessoa(){
        $this->tipopessoa = "F";
    }
    public function setgrauEmpresa($grau){
        $this->grau = $grau;
    }

    public function getgrauEmpresa(){
        return $this->grau;
    }


    public function getDados(){
        return (object) array('nome' => $this->getNome(),
            'cpf' => $this->getCpf(),
            'cep' => $this->getCep(),
            'endereco' => $this->getEndereco(),
            'numero' => $this->getNumero(),
            'complemento' => $this->getComplemento(),
            'bairro' => $this->getBairro(),
            'cidade' => $this->getCidade(),
            'estado' => $this->getEstado(),
            'tipo' => 'F',
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