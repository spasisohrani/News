<?php
class ViewComments{

	public static function CommentsForm(){
	echo '<form action="insertcomments">
	<input type="hidden" name="id" value="'.$_GET['id'].'">
		Teie kommentaat:<input type="text" name="comment">
	<input type="submit" value="Saada"> </form>';
}
}