<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Crud Veiculos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    
</head>
<body>
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
<nav>
    <div class="nav-wrapper  indigo darken-4 z-depth-2">
      <a href="#!" class="brand-logo center">Veiculos</a>
      <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Visualizar</a></li>
        <li><a href="sobre.html">Sobre</a></li>
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
  <div class="container center">
    <div class="card-panel">
    <form name="form1" action="insert.php" method="POST">
    <input type="hidden" name="id"/> 
        <div class="row">
        <div class="col s12 l12">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">airport_shuttle</i>
          <input type="text" id="modelo" name="modelo" class="autocomplete">
          <label for="modelo">Modelo</label>
        </div>
      </div>
    </div>
    <div class="col s12 l12">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">call_to_action</i>
          <input type="text" id="marca" name="marca" class="autocomplete">
          <label for="marca">Marca</label>
        </div>
      </div>
    </div>
    <div class="col s12 l6">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">date_range</i>
          <input type="number" id="ano" name="ano" class="autocomplete">
          <label for="ano">Ano</label>
        </div>
      </div>
    </div>
    <div class="col s12 l6">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">monetization_on</i>
          <input type="number" id="preco" name="preco" class="autocomplete">
          <label for="preco">Preço</label>
        </div>
      </div>
    </div>
    <div class="col s12 l12 right">
      <div class="row">
        <div class="input-field col s12">
                <input class="btn right  indigo darken-4 hoverable" type="submit" onclick="return validar()" value="Inserir"/>
        </div>
      </div>
    
    </div>
    </form>
   

       
   </div> 


<script src="materialize/js/materialize.js"></script>
<script src="src/script.js"></script>
<script>
   function validar() {
            var modelo = form1.modelo.value;
            var marca = form1.marca.value;
            var ano = form1.ano.value;
            var preco = form1.preco.value;

            if (modelo === '') {
                form1.modelo.focus();
                M.toast(
                    {
                        html: "insira o modelo no campo!",
                        classes: "red"
                    }
                )
                return false;
            } else if (marca === '') {
                form1.marca.focus();
                M.toast(
                    {
                        html: "Insira a marca no campo!",
                        classes: "red"
                    }
                )
                return false;
            } else if (ano === '') {
                form1.ano.focus();
                M.toast(
                    {
                        html: "É preciso que se informe o ano do veiculo!!",
                        classes: "red"
                    }
                )
                return false;


            }else if (preco === '') {
                form1.preco.focus();
                M.toast(
                    {
                        html: "Insira um Preco no Veiculo !",
                        classes: "red"
                    }
                )
                return false;
            }else {
              M.toast(
                    {
                        html: "Cadastro realizado com Sucesso!",
                        classes: "green"
                    }
                )
            }
        }

</script>
</body>
</html>