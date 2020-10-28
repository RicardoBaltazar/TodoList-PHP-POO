<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <title>Lista de tarefas</title>
</head>
<body>
    <div class="home-page">
        <header>
            <nav>
                <div class="nav-wrapper ">
                    <a href="#" class="brand-logo">Lista de Tarefas</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="signup.php">Cadastre - se</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <section>
                <div class="row">
                    <form method="post" action="login_connect.php" class="col s12">
                        <h4>Login</h4>
                        <div class="row">
                            <div class="input-field col s12">
                                <input  name="name" type="text" class="validate" required>
                                <label for="name">Nome</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" name="email" type="email" class="validate" required>
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" name="password" type="password" class="validate" required>
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Fazer Login</button>
                    </form>
                </div>
                
            </section>
        </main>
    </div>
</body>
</html>