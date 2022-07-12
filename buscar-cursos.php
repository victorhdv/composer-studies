<?php
require 'vendor/autoload.php';


use GuzzleHttp\Client;
use Alura\BuscadorDeCursos\Buscador;
use Symfony\Component\DomCrawler\Crawler;

$cont= 0;
$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach ($cursos as $curso){
    $cont++;
    echo $curso . PHP_EOL;
}
echo "Total de cursos disponíveis relacionados com PHP: $cont" . PHP_EOL;