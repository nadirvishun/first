<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?
	$xml=simplexml_load_file("../menu.xml");
	/*echo $xml->menu[0]->category[0]->subcategory[0]->item[0]->price;
	echo "<br/>";
	foreach($xml->menu[0]->category[0]->subcategory[0]->item as $item){
		//echo $item->price,'<br/>';	
	}*/
//	$result=$xml->xpath("/menus/menu/category/subcategory/item/price");
		//	var_dump($result);
	foreach($xml->menu->category as $category){
		print("<li>");
		print($category["type"]);
		print(":");
		print("<ul>");
		//foreach($xml->menu->category->subcategory as $subcategory){
		foreach($category->subcategory as $subcategory){
			echo "<li>";
			print($subcategory["type"]);
			print(":");
			print("<ul>");	
			foreach($subcategory->item as $item){
				print("<li>");
				print($item["name"]);
				print(":");
				foreach($item->price as $price){
					print("<a href=''>");
					print($price["size"]);
					print("</a>");
					print("|");
				}
				print("</li>");	
			}			
			print("</ul>");
			print("</li>");
		}
		print("</ul>");
		echo ("</li>");
	}
?>
</body>
</html>
