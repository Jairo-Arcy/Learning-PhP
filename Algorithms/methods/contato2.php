<?php 
$cursos = array("PHP", "CSS", "JavaScript", "HTML5", "jQuery", "MySQL");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PHP Básico</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!--Definição do Formulário-->
  <form action="contato2.php" method="get">
    <!--Definição do campos-->
    <fieldset>
      <?php foreach($cursos as $indice => $curso):?>
        <p>
          <input type="checkbox" name="cursos[]" id="c<?=$indice;?>" value="<?=$curso;?>"/> 
          <label for="c<?$indice;?>"><?=$curso;?></label>
        </p>
      <?php endforeach;?>
      <!--Botão para submter o formulário-->
      <p><input type="submit" value="Enviar"/><p>
    </fieldset>
  </form>  
</body>
</html>