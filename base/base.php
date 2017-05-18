<?php 

require_once($rootdirectory.'database/database.php');

//Chave da API
$query = array(
  "api-key" => "583fec1886ad4bdc9ddc03d3386a91f4"
);
//URL API
$url = "https://api.nytimes.com/svc/topstories/v2/home.json". "?". http_build_query($query);


//  Inicializa o cURL e baixa a API
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL,$url);
$result=curl_exec($ch);
curl_close($ch);

//Salva os dados adquiridos do JSON em um vetor de objetos
$resultados = json_decode($result, true);

//Articles
//Seta os arquivos do article
for ($i=0; $i < count($resultados); $i++) { 
    $articles = new Articles();
    $articles->setTitulo($resultados['results'][$i]['title']);
    $articles->setResumo($resultados['results'][$i]['abstract']);
    $articles->setUrl($resultados['results'][$i]['url']);
    $articles->setUrlImagem($resultados['results'][$i]['multimedia'][4]['url']);
    
    $database = new Database();
    $database->inserir($articles);
}
// foreach ($resultados as $dados) {
//     $articles = new Articles();
//     $articles->setStatus('OK');
//     $articles->setTitulo($resultados['results']['title']);
//     $articles->setResumo($resultados['results']['abstract']);
//     $articles->setUrl($resultados['results'][0]['url']);
//     $articles->setUrlImagem($resultados['results'][0]['multimedia'][0]['url']);
//     // Chama database e salva no banco
//     $database = new Database();
//     $database->inserir($articles);
// }

?>