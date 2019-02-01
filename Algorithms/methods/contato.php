<!DOCTYPE HTML>

<html>

<head>
    <meta charset="utf-8">
    <title>PHP Básico - TreinaWeb Cursos</title>
</head>

<body>

    <!-- Definição do formulário -->

    <form action="processaContato.php" method="get">

        <!-- Definição dos campos -->
        <fieldset>

            <!-- Campo nome -->
            <p>
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" />
            </p>

            <!-- Campo email -->
            <p>
                <label for="email">E-mail: </label>
                <input type="text" name="email" id="email" />
            </p>

            <!-- Botão para submeter o formulário -->
            <p><input type="submit" value="Enviar" /></p>
        </fieldset>

    </form>

</body>

</html>