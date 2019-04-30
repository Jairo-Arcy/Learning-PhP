<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Crud Veiculos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="materialize/css/materialize.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="src/style.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<nav class="">
    <div class="nav-wrapper  indigo darken-4 navbar">
      <a href="#!" class="brand-logo center">Veiculos</a>
      <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Visualizar<i class="material-icons right">remove_red_eye</i></a></li>
        <li><a href="sobre.html">Sobre<i class="material-icons right">info</i></a></li>
      </ul>
    </div>
    
    <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="images/office.jpg">
      </div>
      <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
      <a href="#name"><span class="white-text name">John Doe</span></a>
      <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>
  </nav>
    <nav class="searchBar ">
    <div class="nav-wrapper indigo darken-4" style="border-top:1px solid silver">
      <form action="" method="POST">
        <div class="input-field indigo darken-4">
          <input id="search" type="search" name="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
    </nav>
    <div class="login container center hide">
        <div class="card-panel"  style="transform: translateY(150px)">
        <h5 class="">Login</h5>
        <form action="" method="POST" name="form2">
          <div class="row">
            <div class="input-field col s12">
             <input id="email" type="email" class="validate" name="email">
            <label for="email">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="password" type="password" class="validate" name="pass">
              <label for="password">Password</label>
            </div>
          </div>   
          <input class="green btn waves-effect hoverable" type="submit" onclick="return validar()"  value="Entrar">
        </div>
        </div>
        </form>

    </div>
  <div class="container center">
    <div class="card-panel">
    <table class="centered">
        <thead>
          <tr>
              <th>Modelo</th>
              <th>Marca</th>
              <th>Ano</th>
              <th>Preço</th>
              <th>Ações</th>
              <th>Informações</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <?php
          if(!isset($_POST) == ''){
          include  "conexao.php";
          try{
            $show = $conn -> prepare("SELECT * from carros");            
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if($show -> execute()) {
              while($rs = $show -> fetch(PDO::FETCH_OBJ)) {
                echo "<tr>";
                echo "<td> ".$rs ->modelo."   </td>
                      <td> ".$rs ->marca." </td>
                      <td> ".$rs ->ano." </td>
                      <td> ".$rs ->valor." </td>
                      <td><a class=\"btn-floating btn-medium green tooltipped\" data-position=\"left\" data-tooltip=\"Editar\" href=\"update.php?id=".$rs->id."\"><i class=\"material-icons\">mode_edit</i></a> <a class=\"btn-floating btn-medium tooltipped red\" data-position=\"right\" data-tooltip=\"Deletar\" href=\"delete.php?id=".$rs->id."\"><i class=\"material-icons\">delete</i></a></td>
                      <td><a class=\"waves-effect waves-light btn modal-trigger\" href=\"#modal3\">Modal</a></td>
                     </tr> ";
              }
            }             
          } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
          }
        }
        ?>

          </tr>


        </tbody>
        <div id="modal3" class="modal bottom-sheet">
          <div class="modal-content">
            <h4>Modal Header</h4>
            <p class="left">Modelo: Civic</p><br>
            <p class="left">Marca: Honda</p>
            <p class="left">Ano: 2016</p><br>
            <p class="left">Valor: 70.000 R$</p><br>
            <p class="left">Data do Cadastro: 10/07/2019</p><br>
            
          </div>
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
        </div>
    </div>
      </table>


      
    
      <div class="fixed-action-btn" id="btn">
  <a class="btn-floating btn-large red">
    <i class="large material-icons indigo">menu</i>
  </a>
  <ul>
    <li><a class="btn-floating yellow darken-1 tooltipped" data-position="left" data-tooltip="Novo Carro" href="add.php "><i class="material-icons">add</i></a></li>
    <li><a class="btn-floating tooltipped" data-position="left" data-tooltip="Editar dados"><i class="material-icons">mode_edit</i></a></li>
    <li><a class="btn-floating tooltipped red modal-trigger" data-position="left" data-tooltip="Deletar dados" href="#modal1"><i class="material-icons">delete</i></a></li>
  </ul>
</div>

<form action="delete.php" method="POST">
<div id="modal1" class="modal indigo darken-4">
  <div class="modal-content">
    <h4 class="white-text">Deletar Dados</h4>
    <Span class="white-text">Tem certeza que deseja deletar todos os dados??</Span>
  </div>
  <div class="modal-footer indigo">
    <input  class="modal-close waves-effect waves-green btn white-text red hoverable" type="submit" value="Sim" name="DeleteAll">
    <a href="#!" class="modal-close waves-effect waves-green btn black-text hoverable">Não</a>
  </div>
</div>
</form>
        
      

 <div class="tap-target  indigo " data-target="btn">
    <div class="tap-target-content">
      <h5>Olá!</h5>
      <p>Clique no menu para Fazer As ações</p>
    </div>
  </div>
</div>  
    </div>
  </div>




<script src="materialize/js/materialize.js"></script>
<script src="src/script.js"></script>
<script>
            function validar() {
              search = document.querySelector('.searchBar');
              navBar = document.querySelector('nav');
              log = document.querySelector('.login')
              container = document.querySelector('.container');
              var email = form2.email.value;
              var pass = form2.pass.value;
              var validate = true;
             if (email === '') {
                form2.email.focus();
                M.toast(
                    {
                        html: "email Vazio",
                        classes: "red"
                    }
                )
                return false;
            }else if (pass === '') {
                form2.pass.focus();
                M.toast(
                    {
                        html: "É preciso inserir uma senha!",
                        classes: "red"
                    }
                )
                return false;
            }else  {
              return true;
            }
            if(validate === true){
              container.className = "container center";
              search.className = "searchBar";
              navBar.className = "";
              log.className = "login container center hide";

            }
        }
    

</script>

</body>
</html>