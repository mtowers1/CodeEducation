<?php
$cliente = new PessoaFisica;

$cliente->setNome('Michael Torres');
$cliente->setCpf('11111111111');
$cliente->setCep('07386-820');
$cliente->setEndereco('Rua ântonio Águ');
$cliente->setNumero('218');
$cliente->setComplemento('casa 2');
$cliente->setBairro('Jardim Adalgisa');
$cliente->setCidade('São Paulo');
$cliente->setEstado('SP');
$cliente->setgrauEmpresa(5);
$clientes[]=$cliente->getDados();


$cliente->setNome('Maria Zuleide');
$cliente->setCpf('22222222222');
$cliente->setCep('17386-910');
$cliente->setEndereco('Rua gustavo biel');
$cliente->setNumero('200');
$cliente->setComplemento('');
$cliente->setBairro('Jardim Aruda');
$cliente->setCidade('Belo Horizonte');
$cliente->setEstado('MG');
$cliente->setgrauEmpresa(2);
$clientes[]=$cliente->getDados();


$cliente->setNome('Kal-el Torres');
$cliente->setCpf('44444444444');
$cliente->setCep('20386-110');
$cliente->setEndereco('Rua ântonio Águ');
$cliente->setNumero('218');
$cliente->setComplemento('');
$cliente->setBairro('Jardim Arrui');
$cliente->setCidade('São Paulo');
$cliente->setEstado('SP');
$cliente->setgrauEmpresa(5);
$clientes[]=$cliente->getDados();

$cliente->setNome('Flaviane Fernanda');
$cliente->setCpf('33333333333');
$cliente->setCep('17386-910');
$cliente->setEndereco('Av raposo tavares');
$cliente->setNumero('200');
$cliente->setComplemento('');
$cliente->setBairro('Raposo');
$cliente->setCidade('Piracicaba');
$cliente->setEstado('SP');
$cliente->setgrauEmpresa(4);
$cliente->setCepCobranca('14784-587');
$cliente->setEnderecoCobranca('Av do café');
$cliente->setNumeroCobranca('2000');
$cliente->setComplementoCobranca('Apto 22A');
$cliente->setBairroCobranca('Parque imperial');
$cliente->setCidadeCobranca('Piracicaba');
$cliente->setEstadoCobranca('SP');
$clientes[]=$cliente->getDados();


$cliente->setNome('Giraya Sensei');
$cliente->setCpf('66666666666');
$cliente->setCep('17386-210');
$cliente->setEndereco('Rua estácio de sá');
$cliente->setNumero('87');
$cliente->setComplemento('');
$cliente->setBairro('Oeste');
$cliente->setCidade('Konoha');
$cliente->setEstado('OE');
$cliente->setgrauEmpresa(5);
$cliente->setCepCobranca('14784-587');
$cliente->setEnderecoCobranca('Av do café');
$cliente->setNumeroCobranca('2000');
$cliente->setComplementoCobranca('Apto 22A');
$cliente->setBairroCobranca('Parque imperial');
$cliente->setCidadeCobranca('Piracicaba');
$cliente->setEstadoCobranca('SP');
$clientes[]=$cliente->getDados();


$cliente2 = new PessoaJuridica();

$cliente2->setEmpresa('Maiconsoft');
$cliente2->setCnpj('11145678910141');
$cliente2->setCep('01135-020');
$cliente2->setEndereco('Rua conego vicente');
$cliente2->setNumero('410');
$cliente2->setComplemento('');
$cliente2->setBairro('Barra funda');
$cliente2->setCidade('São Paulo');
$cliente2->setEstado('SP');
$cliente2->setgrauEmpresa(3);
$clientes[]=$cliente2->getDados();

$cliente2->setEmpresa('Towers Software');
$cliente2->setCnpj('11154798910365');
$cliente2->setCep('58745-040');
$cliente2->setEndereco('Rua barão vicente');
$cliente2->setNumero('4410');
$cliente2->setComplemento('');
$cliente2->setBairro('Barra da tijuca');
$cliente2->setCidade('Rio de Janeiro');
$cliente2->setEstado('RJ');
$cliente2->setgrauEmpresa(1);
$clientes[]=$cliente2->getDados();


$cliente2->setEmpresa('Ábacos Automação');
$cliente2->setCnpj('11754798910487');
$cliente2->setCep('01135-020');
$cliente2->setEndereco('Rua conego miguel');
$cliente2->setNumero('410');
$cliente2->setComplemento('');
$cliente2->setBairro('Barra Funda');
$cliente2->setCidade('São Paulo');
$cliente2->setEstado('SP');
$cliente2->setgrauEmpresa(2);
$clientes[]=$cliente2->getDados();


$cliente = new PessoaFisica;

$cliente->setNome('Francisco Gonçalves');
$cliente->setCpf('77777777777');
$cliente->setCep('07386-820');
$cliente->setEndereco('Rua ester');
$cliente->setNumero('111');
$cliente->setComplemento('casa 1');
$cliente->setBairro('Jardim Estér');
$cliente->setCidade('São Paulo');
$cliente->setEstado('SP');
$cliente->setgrauEmpresa(4);
$clientes[]=$cliente->getDados();

$cliente->setNome('Daniela Vieira');
$cliente->setCpf('10000000000');
$cliente->setCep('58786-920');
$cliente->setEndereco('Rua da barbie');
$cliente->setNumero('1000');
$cliente->setComplemento('casa 1');
$cliente->setBairro('Jardim Estér');
$cliente->setCidade('São Paulo');
$cliente->setEstado('SP');
$cliente->setgrauEmpresa(4);
$clientes[]=$cliente->getDados();

//print_r($clientes);