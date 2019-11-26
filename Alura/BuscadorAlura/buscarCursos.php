<?php 

require 'vendor/autoload.php';

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['verify' => 'C:/Users/Felipe/GoogleDrive/wamp/www/Projetos/LearningPHP/Alura/BuscadorAlura/cacert.pem', 'base_uri' => 'https://www.alura.com.br/']); //para corrigir erro com certificado ['verify' => 'C:\Users\Felipe\Downloads\cacert.pem']
$crawler = new Crawler();



$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach ($cursos as $curso) {
    echo $curso . "<br>";
}

?>