<?php 


$nome = 'TreinaWeb Cursos';

// Passou

if( strncasecmp($nome, 'Trei', 4) === 0) {

    echo 'Passou 1';

}


// Não passou

if( strncasecmp($nome, 'Tein', 4) === 0) {
 
   echo 'Passou 2';

}