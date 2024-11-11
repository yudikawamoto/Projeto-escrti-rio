<?php 

require_once('Item.php');
require_once('Documento.php');
require_once('Objeto.php');
require_once('Pasta.php');
require_once('Gaveta.php');
require_once('Armario.php');
require_once('Escritorio.php');


$escritório1 = new Escritorio();

$armario1 = new Armario();
$armario2 = new Armario();
$gaveta1 = new Gaveta();
$gaveta2 = new Gaveta();

$gaveta1->adicionarItem(new Documento("Documento: ", "Informações sobre o estórico de vida de Cleiton Atualizado", "2023-01-15"));
$gaveta1->adicionarItem(new Objeto("Caneta", "Feita na Faber-Castell ", 0,50 ));
$gaveta2->adicionarItem(new Pasta("Relatórios Empresa", "Informações confidencias sobre a empresa", "Trabalho"));
$gaveta2->adicionarItem(new Documento("Informações", "Informações será visualizada apenas por pessoas de cargo alto", "2024-05-20"));

$armario1->adicionarGaveta($gaveta1);
$armario1->removerGaveta(1);
$armario2->adicionarGaveta($gaveta2);
$armario2->removerGaveta(0);

$escritório1->adicionarArmario($armario1);
$escritório1->removerArmario(0);

$escritório1->listarArmarios();
$escritório1->auditoria();
