<?php
$computers = [
		'Ноутбуки' => [
			[
				'vendor' => 'ASUS',
				'model' => 'X554LJ',
				'memory' => 4,
				'screen' => 15,
				'hdd' => 500,
				'OS' => 'Microsoft Windows 10',
				'price' => 40000,
				'photo' => 'http://www.technocity.ru/upload/resize_cache/iblock/7e0/400_400_1/z0000079381.jpg'
			],
			[
				'vendor' => 'Acer',
				'model' => 'ES1-571-P9S3',
				'memory' => 8,
				'screen' => 15,
				'hdd' => 1000,
				'OS' => 'Linux',
				'price' => 25000,
				'photo' => 'http://www.technocity.ru/upload/resize_cache/iblock/36e/400_400_1/z0000101288.jpg'
			],
			[
				'vendor' => 'Lenovo',
				'model' => 'IdeaPad Y700',
				'memory' => 12,
				'screen' => 15,
				'hdd' => 1000,
				'OS' => 'Microsoft Windows 10',
				'price' => 95000,
				'photo' => 'http://www.technocity.ru/upload/resize_cache/iblock/4a6/400_400_1/z0000092186.jpg'
			]
		],
	'Системные блоки' => [
			[
				'cpu' => 'AMD Sempron 2650 1.45 ГГц x2',
				'video' => 'RadeOn R3',
				'memory' => 2,
				'hdd' => 5000,
				'OS' => null,
				'price' => 14000
			],
			[
				'cpu' => 'Intel Celeron N3050',
				'video' => 'HD Graphics',
				'memory' => 4,
				'hdd' => 500,
				'OS' => null,
				'price' => 17000
			]
			
		]
	];

?>
<html>
<meta charset="UTF-8">
<head>
<style>
	div.header {
		font-size: 36px;
		font-weight: bold;
		padding-top: 10px;
		color: blue;
	}
	div.value {
		font-size: 20px;
		color: Navy;
	}
	div.photo {
		float: left;
		width: 300px;
	}
	img.image {
		height: 150px;
	}
	div.info {
		float: left;
		width: 500px;;
	}
	div.caption {
		float: left;
		padding-top: 3px;
		padding-left: 3px;
		width: 200px;
		font-weight: bold;
		color: MidnightBlue; 
	}
	div.item {
		width: 100%;
		overflow: auto;
		padding-top: 10px;
	}
	div.property {
		overflow: hidden;
	}
	div.odd {
		background-color: ivory;
	}
	div.even {
		background-color: azure;
	}
	div.price {
		font-size: 36px;
		font-weight: bold;
		padding-top: 20px;
	}
</style>
</head>
<body>
<?php
	$i = 1;
	foreach ($computers as $header => $items) {
		echo '<div class="header">'.$header."</div>";
		foreach ($items as $item) {
			if ($i % 2 == 0) {
				$rowClass = " even";
			} else {
				$rowClass = " odd";
			}
			$i++;
			echo "<div class='item".$rowClass."'>";
			if ($header == "Ноутбуки") {
				echo "<div class='photo'><img class='image' src='".$item["photo"]."'/></div>";
				echo "<div class='info'>";
				if (isset($item["vendor"])) {
					echo "<div class='caption'>Производитель:</div><div class='value'>".htmlspecialchars($item["vendor"])."</div>";
				}
				
				if (isset($item["model"])) {
					echo "<div class='caption'>Модель:</div><div class='value'>".htmlspecialchars($item["model"])."</div>";
				}
				
				if (isset($item["memory"])) {
					echo "<div class='caption'>Память:</div><div class='value'>".$item["memory"]." Гб</div>";
				}
				
				if (isset($item["hdd"])) {
					echo "<div class='caption'>Жесткий диск:</div><div class='value'>".$item["hdd"]." Гб</div>";
				}
				
				if (isset($item["screen"])) {
					echo "<div class='caption'>Диагональ:</div><div class='value'>".$item["screen"]."\"</div>";
				}
				
				if (isset($item["OS"])) {
					echo "<div class='caption'>Операционная система:</div><div class='value'>".htmlspecialchars($item["OS"])."</div>";
				}
				echo "</div>";
				
				if (isset($item["price"])) {
					echo "<div class='price'>".number_format($item["price"], 0, ',', ' ')." руб.</div>";
				}
			} elseif ($header = "Системные блоки") {
				echo "<div class='info'>";
				if (isset($item["cpu"])) {
					echo "<div class='caption'>Процессор:</div><div class='value'>".htmlspecialchars($item["cpu"])."</div>";
				}
				
				if (isset($item["video"])) {
					echo "<div class='caption'>Видеокарта:</div><div class='value'>".htmlspecialchars($item["video"])."</div>";
				}
				
				if (isset($item["memory"])) {
					echo "<div class='caption'>Память:</div><div class='value'>".$item["memory"]." Гб</div>";
				}
				
				if (isset($item["hdd"])) {
					echo "<div class='caption'>Жесткий диск:</div><div class='value'>".$item["hdd"]." Mб</div>";
				}
				
				if (isset($item["OS"])) {
					echo "<div class='caption'>Операционная система:</div><div class='value'>".htmlspecialchars($item["OS"])." Гб</div>";
				}
				echo "</div>";
				
				if (isset($item["price"])) {
					echo "<div class='price'>".number_format($item["price"], 0, ',', ' ')." руб.</div>";
				}
			}
			echo "</div>";
		}
	}
?>
</body>		
</html>