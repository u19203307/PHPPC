<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CARTILLA DE PLATOS</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>

<script>
	<?php
		echo "alert('Despues de la elección, llame a uno de los mozos para tomar su pedido.')";
	?>
</script>

<?php 
	echo "<h1>Loncco</h1>";
	echo "<h4>Picantería</h4>";
?>

<pre>
	<code>
	<?php 
		echo "<h2>Platos de Carta</h2>";
		echo "<br>";
	?>
	</code>
</pre>


<div class="grid-auto-fill mb-150">	

	<?php
		$letra = 'letra'
	?>

<div class="card">
		<div class="img-cnt">
			<img src="https://jameaperu.com/wp-content/uploads/2019/09/cuy-chactado_700x467.jpg" alt="">
		</div>
		<div class="text-cnt">
				<?php 'echo style="color:black;","align-self: center;"';
					$plato = (object)["Tiltulo"=>"<h2>CUY CHACTADO</h2>","info" =>"Se trata de un cuy frito en abundante aceite, hasta alcanzar un punto crocante, bajo una piedra que hace las veces de tapa. ​ Se suele acompañar con papas hervidas, maíz y salsas de ají, como la crema de huacatay."]; 
					echo $plato -> Tiltulo;
					echo $plato -> info;
				?>
			</div>
	</div>

	<div class="card">
		<div class="img-cnt">
			<img src="https://comidaperuanaweb.org/wp-content/uploads/2018/10/Receta-de-Solterito-Arequipen%CC%83o-1-1.jpg" alt="">
		</div>
		<div class="text-cnt">
		<?php 'echo style="color:black;","align-self: center;"';
				echo "<h2>SOLTERO DE QUESO</h2>";
				echo "<p> El plato es de muy simple ejecución, contiene solo habas cocidas, cebolla, tomate, queso fresco, papas y choclo cocidos, rocoto y perejil picado y un aliño ácido.</p>";
			?>
		</div>
	</div>
	
	<div class="card">
		<div class="img-cnt">
			<img src="https://img-global.cpcdn.com/recipes/1478510_169f43c3ceb34d13/1200x630cq70/photo.jpg" alt="">
		</div>
		<div class="text-cnt">
				<?php 'echo style="color:black;","align-self: center;"';
					$info = array("<h2>CHUPE DE CAMARONES</h2>","Es una sopa espesa y picante que lleva como ingredientes principales camarones de río, papa amarilla, queso fresco, leche, habas, arvejas, choclo, arroz y huevo, además de un aderezo a base de ají colorado y huacatay.");
					echo $info[0];
					echo $info[1]; 
				?>
			</div>
	</div>
	
	<div class="card">
		<div class="img-cnt">
			<img src="https://recetas.7maravillasgastronomicas.com/wp-content/uploads/2019/12/locro-de-pecho-arequipa.jpg" alt="">
		</div>
		<div class="text-cnt">
				<?php 'echo style="color:black;","align-self: center;"';
					$plato = (object)["Tiltulo"=>"<h2>LOCRO DE PECHO</h2>","info" =>"Para preparar este delicioso plato de locro de pecho se necesita como ingrediente principal carne pecho de res, papa, ají colorado molido, ajo, entre otros ingredientes. La consistencia de este plato es espesa esto se debe a que las papas van desmenuzadas y se acompaña con arroz blanca."]; 
					echo $plato -> Tiltulo;
					echo $plato -> info;
				?>
			</div>
	</div>

	<div class="card">
		<div class="img-cnt">
			<img src="https://comidasperuanas.net/wp-content/uploads/2017/06/Chicharron-de-cerdo.jpg" alt="">
		</div>
		<div class="text-cnt">
				<!--Arreglo con propiedades-->
				<?php 'echo style="color:black;","align-self: center;"';
					$platillo = array("Tiltulo" => "<h2>CHICHARRON DE CANCHO</h2>","info" =>"Se preparan cortando la grasa de cerdo en trozos pequeños, luego se ponen en un perol con sal, agua y se le agrega algunas porciones de carne. Pero en realidad, el llamado chicharrón, era la parte de la grasa, frita, que había destilado toda su manteca, la que se colaba y se guardaba en latas especiales.");
					echo "$platillo[Tiltulo]";
					echo "$platillo[info]";
				?>
			</div>
	</div>	

	<div class="card">
		<div class="img-cnt">
			<img src="https://www.peruhop.com/wp-content/uploads/escribano-1-790x395.jpg" alt="">
		</div>
		<div class="text-cnt">
				<!--Arreglo con propiedades-->
				<?php 'echo style="color:black;","align-self: center;"';
					$platillo = array("Tiltulo" => "<h2>ESCRIBANO</h2>","info" =>"Piense en esto como la versión de Arequipeña de una ensalada de papas. La palabra escribano significa “secretario judicial” y la leyenda cuenta que este platillo se inspiró en los abogados y secretarios de Arequipa que, absortos en sus conversaciones sobre el trabajo, mezclaban accidentalmente las papas, los tomates y los pimientos rocoto que normalmente se servían como entremeses en el momento.");
					echo "$platillo[Tiltulo]";
					echo "$platillo[info]";
				?>
			</div>
	</div>

	<div class="card">
		<div class="img-cnt">
			<img src="https://www.peruhop.com/wp-content/uploads/Ocopa-1-790x395.jpg" alt="">
		</div>
		<div class="text-cnt">
				<!--Arreglo con propiedades-->
				<?php 'echo style="color:black;","align-self: center;"';
					$platillo = array("Tiltulo" => "<h2>OCOPA</h2>","info" =>"Similar a otro plato peruano llamado Papa a la Huancaina, la ocopa es un aperitivo que consiste en papa cubierta con una salsa picante especial y se sirve fría. La salsa es una mezcla interesante de ají, ajo, cebolla, huacatay (un tipo de hierba sudamericana), maní, leche, queso y galletas de soda. La ocopa es uno de los platos estrella de Arequipa y es un gran plato pequeño para comenzar una comida.");
					echo "$platillo[Tiltulo]";
					echo "$platillo[info]";
				?>
			</div>
	</div>

	<div class="card">
		<div class="img-cnt">
			<img src="https://t1.rg.ltmcdn.com/es/images/8/1/3/img_adobo_arequipeno_16318_orig.jpg" alt="">
		</div>
		<div class="text-cnt">
			<?php 'echo style="color:black;","align-self: center;"';
				echo "<h2>ADOBO</h2>";
				echo "<p> Se trata de un adobo de carne de cerdo, lomo o pierna, marinada en especias, como ajo, ají panca o rocoto, y vinagre o chicha de guiñapo. la cual se fríe y se cuece en una olla de barro con el líquido donde se ha marinado. También se puede hornear en vez de freír y cocer, aunque untado en una mezcla de manteca y ají panca1​ Suele servirse en el desayuno. Se acompaña con pan de tres cachetes, que sirve para mojar en la salsa.</p>";
			?>
		</div>
	</div>

	<div class="card">
		<div class="img-cnt">
			<img src="https://www.peruhop.com/wp-content/uploads/Rocoto-Relleno-1-790x395.jpg" alt="">
		</div>
		<div class="text-cnt">
				<?php 'echo style="color:black;","align-self: center;"';
					$plato = (object)["Tiltulo"=>"<h2>ROCOTO RELLENO</h2>","info" =>"Uno de los platos más emblemáticos de Arequipa es el rocoto relleno, un tipo de pimiento relleno. A diferencia de muchas recetas de pimientos rellenos que usan pimientos dulces, esta usa el rocoto, un pimiento rojo que es más de diez veces más picante que el jalapeño. Los pimientos se cuecen en agua y vinagre para eliminar la mayor cantidad de picante posible, pero definitivamente conservan un poco de su chispa. El relleno más común es una mezcla de carne, mantequilla, crema y nueces. Rocoto Relleno también se suele cubrir con una rodaja de queso derretido."]; 
					echo $plato -> Tiltulo;
					echo $plato -> info;
				?>
			</div>
	</div>
	
</div>

<h1>Postres</h1>

<pre>
	<code>
	<?php
		echo "<h2>Postres de Arequipa</h2>";
		echo "<br>";
	?>
	</code>
</pre>

<div class="grid-auto-fill mb-150">

<div class="card">
		<div class="img-cnt">
			<img src="https://sommelier.com.pe/wp-content/uploads/alfajor-de-manjar.jpg" alt="">
		</div>
		<div class="text-cnt">
				<?php 'echo style="color:black;","align-self: center;"';
					$platillo = array("Tiltulo" => "<h2>ALFAJORES</h2>","info" =>" También denominado alfajor de miel o alfajor de la curva, por su forma sinuosa. ​ Su origen se encuentra en el Valle del Tambo en Arequipa. Las galletas son elaboradas con harina de maíz y trigo, y se rellena con miel o manjarblanco.");
					echo "$platillo[Tiltulo]";
					echo "$platillo[info]";
				?>
			</div>
	</div>
	
	<div class="card">
		<div class="img-cnt">
			<img src="https://loslonccos.com.pe/wp-content/uploads/2020/01/Bunuelos-arequipa-loslonccos.jpg" alt="">
		</div>
		<div class="text-cnt">
				<?php 'echo style="color:black;","align-self: center;"';
					$platillo = array("Tiltulo" => "<h2>BUÑUELOS</h2>","info" =>"El buñuelo es un dulce de sartén de origen español. Consiste en una masa de harina en forma circular frita. La masa puede mezclarse con agua, leche, huevo o levadura. Puede llevar un relleno que puede ser dulce o salado, por ejemplo manzana o pescado.");
					echo "$platillo[Tiltulo]";
					echo "$platillo[info]";
				?>	
			</div>
	</div>
	
	<div class="card">
		<div class="img-cnt">
			<img src="https://www.muniarequipa.gob.pe/wp-content/uploads/2021/01/3N8A8086-scaled.jpg" alt="">
		</div>
		<div class="text-cnt">
				<?php 'echo style="color:black;","align-self: center;"';
					$plato = (object)["Tiltulo"=>"<h2>QUESO HELADO</h2>","info" =>"El queso helado, o helado de tarro,​ es un dulce lácteo helado que, a pesar de denominarse de tal manera, no lleva queso entre sus ingredientes principales.​ Su textura es cremosa y generalmente se prepara de forma artesanal, combinándolo con diversos sabores, aunque ya existen empresas dedicadas a la elaboración de este postre en forma industrializada.​"]; 
					echo $plato -> Tiltulo;
					echo $plato -> info;
				?>
			</div>
	</div>

	<div class="card">
		<div class="img-cnt">
			<img src="https://media-cdn.tripadvisor.com/media/photo-p/0d/5f/c2/34/chocolates-la-iberica.jpg" alt="">
		</div>
		<div class="text-cnt">
				<?php 'echo style="color:black;","align-self: center;"';
					$info = array("<h2>LA IBÉRICA</h2>","No olvidamos ni los chocolates, turrones o mazapanes de La Ibérica. Esta fábrica es toda una institución y su creación se remonta a inicios del siglo XX. En Arequipa está en todos lados, en cada esquina van a encontrar una pequeña tienda. ¿Nuestros favoritos? Las pastas de mazapán llamadas quesitos, elaboradas con almendras o castañas de la selva peruana. Y, por supuesto, las barras de Milky.");
					echo $info[0];
					echo $info[1]; 
				?>
			</div>
	</div>

	<div class="card">
		<div class="img-cnt">
			<img src="https://www.peruhop.com/wp-content/uploads/Mazamorra_morada-1-790x395.jpg" alt="">
		</div>
		<div class="text-cnt">
				<?php 'echo style="color:black;","align-self: center;"';
					$info = array("<h2>MAZAMORRA DE AIRAMPO</h2>","Esta es la interpretación Arequipeña de la mazamorra tradicional, un postre similar a la gelatina que es popular en todo el Perú. Esta versión utiliza las semillas de cactus airampo junto con frutos secos y frescos. Luego, la mezcla se espesa con harina de mandioca. Estos ingredientes locales únicos crean una versión interesante de esta delicia, que se hace más comúnmente con maíz morado. La mazamorra de airampo se suele servir caliente y espolvoreada con un poco de canela.");
					echo $info[0];
					echo $info[1]; 
				?>
			</div>
	</div>
	
</div>

<h1>Bebidas</h1>

<pre>
	<code>
	<?php
		echo "<h2>bebidas de Arequipa</h2>";
		echo "<br>";
	?>
	</code>
</pre>

<div class="grid-auto-fill mb-150">
	
	<div class="card">
		<div class="img-cnt">
			<img src="https://www.peruhop.com/wp-content/uploads/anis-najar-1-790x395.jpg" alt="">
		</div>
		<div class="text-cnt">
				<?php 'echo style="color:black;","align-self: center;"';
					$info = array("<h2>ANIS NAJAR</h2>","Anis Najar es una forma de anís (un licor con sabor a anís) que se elabora en Arequipa. Tiene un sabor seco y un contenido de alcohol especialmente alto para un licor. Normalmente se bebe como digestivo o después de las comidas.");
					echo $info[0];
					echo $info[1]; 
				?>
			</div>
	</div>

	<div class="card">
		<div class="img-cnt">
			<img src="https://www.peruhop.com/wp-content/uploads/kola-escosia-1-1-790x395.jpg" alt="">
		</div>
		<div class="text-cnt">
				<?php 'echo style="color:black;","align-self: center;"';
					$plato = (object)["Tiltulo"=>"<h2>KOLA ESCOCESA</h2>","info" =>"Sí, Arequipa incluso tiene su propia gaseosa para competir con la Inca Kola que es popular en todo Perú. La Kola Escocesa, se produce en el pueblo de Yura cerca de Arequipa desde la década de 1950. Tiene un sabor afrutado y es un poco menos dulce que su competidor más conocido Inca Kola."]; 
					echo $plato -> Tiltulo;
					echo $plato -> info;
				?>
			</div>
	</div>

	<div class="card">
		<div class="img-cnt">
			<img src="https://www.peruhop.com/wp-content/uploads/chicha-1-790x395.jpg" alt="">
		</div>
		<div class="text-cnt">
				<?php 'echo style="color:black;","align-self: center;"';
					$platillo = array("Tiltulo" => "<h2>CHICHA DE JORA</h2>","info" =>"Esta es la versión local de la chicha, la bebida a base de maíz omnipresente en todo el Perú. La chicha de guiñapo se diferencia de la chicha de jora y la chicha morada más comunes porque utiliza un tipo especial de maíz que normalmente crece en la región de Arequipa. Se fermenta durante un par de días, lo que le confiere una baja graduación alcohólica de alrededor del 2-3%. El sabor es ligero y dulce, y combina bien con la comida picante de Arequipa.");
					echo "$platillo[Tiltulo]";
					echo "$platillo[info]";
				?>	
			</div>
	</div>

	<div class="card">
		<div class="img-cnt">
			<img src="https://www.peruhop.com/wp-content/uploads/pisco-sour-vaso-corto-790x395.jpg" alt="">
		</div>
		<div class="text-cnt">
				<?php 'echo style="color:black;","align-self: center;"';
					$platillo = array("Tiltulo" => "<h2>PISCO ACHOLADO</h2>","info" =>"El pisco se bebe en todo el Perú, pero muchas personas no se dan cuenta de que existen múltiples tipos de este popular brandy de uva. El pisco acholado es el tipo que se elabora en la región de Arequipa. Este tipo menos conocido utiliza una mezcla de variedades de uva, a diferencia de un monovarietal como el pisco tradicional. Esto le da al pisco acholado una gama de sabores más compleja e interesante en comparación con las variedades costeras. Normalmente se toma de la misma forma que cualquier otro tipo de pisco: en pisco sour, chilcano, etc.");
					echo "$platillo[Tiltulo]";
					echo "$platillo[info]";
				?>
			</div>
	</div>
	
	
</div>



<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
</body>
</html>
