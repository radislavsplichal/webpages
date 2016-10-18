<?php 
/**
* 
*/
class Article
{
	
	function __construct($title, $author, $text, $date)
	{
		$this->title = $title;
		$this->author = $author;
		$this->text = $text;
		$this->date = $date;
	}
	


}

$article1 = new Article ("fuck", "Radek","STRINg","timestap");
var_dump(get_object_vars($article1))
?>