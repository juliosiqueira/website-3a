<?php

	if($explode[0] == 'resultado-em-campo'){
		
		include "nav/resultado-em-campo.php";
		
	} else if($explode[0] == 'noticia'){
		
		include "nav/noticia.php";
		
	} else if($explode[0] == 'home'){
		
		include "nav/home.php";
		
	} else if($explode[0] == 'todos-resultados'){
		
		include "nav/todos-resultados.php";
		
	} else if($explode[0] == 'linhas-produtos'){
		
		include "nav/linhas-produtos.php";
		
	} else if($explode[0] == 'detalhe-produto'){
		
		include "nav/detalhe-produto.php";
		
	} else if($explode[0] == 'filtro-produtos'){
		
		include "nav/filtro-produtos.php";
		
	} else {
		
		echo "pagina não existente!";
	}

?>