<?php 

/**
* Classe Articles
*/
class Articles{
	private $status;
	private $titulo;
	private $resumo;
	private $url;
	private $urlImagem;


	public function setStatus($status){
		$this->status = $status;
	}
	public function getStatus(){
		return $this->status;
	}

	public function setTitulo($titulo){
		$this->titulo = $titulo;
	}
	public function getTitulo(){
		return $this->titulo;
	}

	public function setResumo($resumo){
		$this->resumo = $resumo;
	}
	public function getResumo(){
		return $this->resumo;
	}

	public function setUrl($url){
		$this->url = $url;
	}
	public function getUrl(){
		return $this->url;
	}

	public function setUrlImagem($urlImagem){
		$this->urlImagem = $urlImagem;
	}
	public function getUrlImagem(){
		return $this->urlImagem;
	}

	// public function setSource($source){
	// 	$this->source = $source;
	// }
	// public function getSource(){
	// 	return $this->source;
	// }

	// public function setSortBy($sortBy){
	// 	$this->sortBy = $sortBy;
	// }
	// public function getSortBy(){
	// 	return $this->sortBy;
	// }

	// public function setAuthor($author){
	// 	$this->author = $author;
	// }
	// public function getAuthor(){
	// 	return $this->author;
	// }

	// public function setTitle($title){
	// 	$this->title = $title;
	// }
	// public function getTitle(){
	// 	return $this->title;
	// }

	// public function setDescription($description){
	// 	$this->description = $description;
	// }
	// public function getDescription(){
	// 	return $this->description;
	// }

	// public function setUrl($url){
	// 	$this->url = $url;
	// }
	// public function getUrl(){
	// 	return $this->url;
	// }

	// public function setUrlToImage($urlToImage){
	// 	$this->urlToImage = $urlToImage;
	// }
	// public function getUrlToImage(){
	// 	return $this->urlToImage;
	// }

	// public function setArticlesCol($articlescol){
	// 	$this->articlescol = $articlescol;
	// }
	// public function getArticlesCol(){
	// 	return $this->articlescol;
	// }

	// public function setPublishedAt($publishedAt){
	// 	$this->publishedAt = $publishedAt;
	// }
	// public function getPublishedAt(){
	// 	return $this->publishedAt;
	// }


}




 ?>