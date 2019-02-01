<?php

var_dump( SHA1(uniqid(mt_rand(), TRUE)) ); /* precisão dessa geração é muito grande. A chance de um valor desse se repetir é 
quase inimaginável. Mas não adentraremos nisso por agora. Aguarde que veremos isso nos próximos módulos de PHP. */