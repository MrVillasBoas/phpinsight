<?php 

	require_once($rootdirectory.'database/conexao.php');
	require_once($rootdirectory.'model/articles.php');

	$results = array();

	/**
	* Classe de controle do banco de dados
	*/
	class Database
	{

		public function inserir(Articles $articles){
			try {
				$sql = "INSERT INTO articles (titulo, resumo, url, urlimagem) VALUES (:titulo, :resumo, :url, :urlimagem)";

				$stmt = Conexao::getInstance()->prepare($sql);

				$stmt->bindValue( ':titulo', $articles->getTitulo() );
				$stmt->bindValue( ':resumo', $articles->getResumo() );
				$stmt->bindValue( ':url', $articles->getUrl() );
				$stmt->bindValue( ':urlimagem', $articles->getUrlImagem() );

				$result = $stmt->execute();
				if ( ! $result )
				{
				    var_dump( $stmt->errorInfo() );
				    exit;
				}
			} catch (Exception $e) {
				echo "Erro ao inserir dados. /n".$e->getMessage();
			}
		}

		public function selecionarNewYorkTimes(){
			try {
				$results = array();
				$sql = "SELECT * FROM articles LIMIT 3";

				$stmt = Conexao::getInstance()->query($sql);
				$i=0;
				if($stmt) {
					while($dados = $stmt->fetch(PDO::FETCH_OBJ)) {
						$article = new Articles();
		
						$article->setTitulo($dados->titulo);
						$article->setResumo($dados->resumo);
						$article->setUrl($dados->url);
						$article->setUrlImagem($dados->urlimagem);	

						echo '<div class="4u 12u(medium)"><!-- Box -->
						<section class="box feature">
							<a href="'.$article->getUrl().'" class="image featured" target="_blank"><img src="'.$article->getUrlImagem().'" alt="'.$article->getTitulo().'" /></a>
							<div class="inner">
								<header>
									<h2>'.$article->getTitulo().'</h2>
									<p>The New York Times</p>
								</header>
								<p>'.$article->getResumo().'</p>
							</div>
						</section></div>';
					}
					return $results;
				}
			} catch (Exception $e) {
				echo "Erro ao selecionar dados. /n".$e->getMessage();
			}
		}

		public function selecionar($id){
			try {
				$sql = "SELECT * FROM articles WHERE $id";

				$stmt = Conexao::getInstance()->prepare($sql);

				$result = $stmt->query($sql);
				$dados = $result->fetch(PDO::FETCH_ASSOC);
			} catch (Exception $e) {
				echo "Erro ao selecionar dados. /n".$e->getMessage();
			}
		}
	}
?>