<?php






$escritorio = new Escritorio();

$armario1 = new Armario();
$armario2 = new Armario();
$gaveta1 = new Gaveta();
$gaveta2 = new Gaveta();

$gaveta1->adicionarItem(new Documento("Relatório", "Relatório anual de 2023", "2023-01-01"));
$gaveta1->adicionarItem(new Objeto("Caneta", "Caneta esferográfica azul", 0.015));
$gaveta2->adicionarItem(new Pasta("Projetos", "Pastas de projetos em andamento", "Trabalho"));
$gaveta2->adicionarItem(new Documento("Proposta", "Proposta comercial", "2023-02-01"));


$armario1->adicionarGaveta($gaveta1);
$armario2->adicionarGaveta($gaveta2);

$escritorio->adicionarArmario($armario1);
$escritorio->adicionarArmario($armario2);

$escritorio->listarArmarios();

$escritorio->auditoria();
