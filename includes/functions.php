<?php
function parseUBBC($item){
	$item = stripslashes($item);
	$item = preg_replace("/\n/i", "<br/>", $item);
	$item = preg_replace("/\[b\](.+?)\[\/b\]/i", "<b>\\1</b>", $item);
	$item = preg_replace("/\[i\](.+?)\[\/i\]/i", "<i>\\1</i>", $item);
	$item = preg_replace("/\[u\](.+?)\[\/u\]/i", "<u>\\1</u>", $item);
	$item = preg_replace("/\[right\](.+?)\[\/right\]/i", "<div align='right'>\\1</div>", $item);
	$item = preg_replace("/\[center\](.+?)\[\/center\]/i", "<div align='center'>\\1</div>", $item);
	$item = preg_replace("/\[size=(.+?)\](.+?)\[\/size\]/i", "<font size='\\1'>\\2</font>", $item);
	$item = preg_replace("/\[img\](.+?)\[\/img\]/i", "<img src='\\1' alt='(Image)'/>", $item);
	$item = preg_replace("/(\n|\s|<br\/>)(http:\/\/|www.)(.+?)(<b|\s|\n)/i", "\\1<a href='http://\\3' target='_blank'>http://\\3</a>\\4", $item);
	$item = preg_replace("/\[url\](http:\/\/|www.)(.+?)\[\/url\]/i", "<a href='http://\\2' target='_blank'>http://\\2</a>", $item);
	$item = preg_replace("/\[url=(http:\/\/|www.)(.+?)\](.+?)\[\/url\]/i", "<a href='http://\\2' target='_blank'>\\3</a>", $item);
	$item = preg_replace("/\[link\](http:\/\/|www.)(.+?)\[\/link\]/i", "<a href='http://\\2' target='_self'>http://\\2</a>", $item);
	$item = preg_replace("/\[link=(http:\/\/|www.)(.+?)\](.+?)\[\/link\]/i", "<a href='http://\\2' target='_self'>\\3</a>", $item);
	$item = preg_replace("/\[br\]/i", "<br/>", $item);
	$item = preg_replace("/\[hr\]/i", "<hr align='center' width='75%' size='1' color='421010'/>", $item);
	return $item;
}
?>