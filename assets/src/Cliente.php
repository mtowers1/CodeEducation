<?php
// Classe Clientes
class Clientes {

    // Atributos

    public $nome;
    public $cpf;
    public $endereco;
    public $idade;
    public $sexo;
    public $cidade;
    public $estado;
    public $lista_clientes;

    /* Métodos */
    public function ListaDeClientes(){
       $lista_clientes = array(
            array('nome'=>'Michael Torres','cpf'=>'11111111111','endereco'=>'Rua ântonio Águ, 218','idade'=>'27','sexo'=>'M','cidade'=>'São Paulo','estado'=>'SP'),
            array('nome'=>'Maria Zuleide','cpf'=>'22222222222','endereco'=>'Rua gustavo biel, 200','idade'=>'52','sexo'=>'F','cidade'=>'Belo Horizonte','estado'=>'MG'),
            array('nome'=>'Flaviane Fernanda','cpf'=>'33333333333','endereco'=>'Av raposo tavares, 400','idade'=>'27','sexo'=>'F','cidade'=>'Piracicaba','estado'=>'SP'),
            array('nome'=>'Kal-el Torres','cpf'=>'44444444444','endereco'=>'Rua ântonio Águ, 218','idade'=>'1','sexo'=>'M','cidade'=>'São Paulo','estado'=>'SP'),
            array('nome'=>'Bruce Lee','cpf'=>'55555555555','endereco'=>'Rua pirapora, 54','idade'=>'7','sexo'=>'M','cidade'=>'São Paulo','estado'=>'SP'),
            array('nome'=>'Giraya Sensei','cpf'=>'66666666666','endereco'=>'Rua estácio de sá, 87','idade'=>'67','sexo'=>'M','cidade'=>'Konoha','estado'=>'OE'),
            array('nome'=>'Francisco Gonçalves','cpf'=>'77777777777','endereco'=>'Rua ester, 111','idade'=>'53','sexo'=>'M','cidade'=>'São Paulo','estado'=>'SP'),
            array('nome'=>'Juan Vieira','cpf'=>'88888888888','endereco'=>'Rua ântonio lopez, 410','idade'=>'15','sexo'=>'M','cidade'=>'Salvador','estado'=>'BA'),
            array('nome'=>'Cláudia Vieira','cpf'=>'99999999999','endereco'=>'Rua vish maria, 500','idade'=>'21','sexo'=>'F','cidade'=>'Fortaleza','estado'=>'CE'),
            array('nome'=>'Daniela Vieira','cpf'=>'10000000000','endereco'=>'Rua da barbie, 1000','idade'=>'6','sexo'=>'F','cidade'=>'São Paulo','estado'=>'SP')

        );


        return $lista_clientes;
    }

    public function ProcuraCliente($cpf) {

        $clientes = $this->ListaDeClientes();
        $vl =false;

        for($i=0;$i<count($clientes);$i++){

            if( array_search($cpf, $clientes[$i]) !== false){
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


} 