<?php

include "util/RequestRouter.php";
	//include na classe requestRouter

   echo json_encode((new RequestRouter)->route());
   /* json_encode = retorna a representação json de um valor
   Retorna a string contendo a representação json de um value
   cria um objeto da classe Request Router e chama o metodo route*/