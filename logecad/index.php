<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Dravec Cyber Security</title>
    </head>
    <body>
        <div class="login">
            <div class="login__content">
                <div class="login__img">
                    <img src="./assets/img/logo.png" alt="">
                </div>

                <div class="login__forms">
                    <form action="./php/login.php" class="login__registre" id="login-in" method="post">
                        <h1 class="login__title">Login</h1>
    
                        <div class="login__box">
                            <i class='bx bx-at login__icon'></i>
                            <input type="name" name="email" placeholder="Email" class="login__input">
                        </div>
    
                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input type="password" name="password" placeholder="Senha" class="login__input">
                        </div>

                        <a href="#" class="login__forgot">Esqueceu a senha?</a>

                        
                        <input type="submit" value="Fazer Login" class="login__button">
                        
                        <div>
                            <span class="login__account">Não tem uma conta?</span>
                            <span class="login__signin" id="sign-up">Cadastrar</span>
                        </div>
                    </form>

                    <form action="./php/register.php" class="login__create none" id="login-up" method="post">
                        <h1 class="login__title">Criar Conta</h1>
    
                        <div class="login__box">
                            <i class='bx bx-user login__icon'></i>
                            <input type="name" name="name" placeholder="Usuario" class="login__input">
                        </div>
    
                        <div class="login__box">
                            <i class='bx bx-at login__icon'></i>
                            <input type="email" name="email" placeholder="Email" class="login__input">
                        </div>

                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input type="password" name="password" placeholder="Senha" class="login__input">
                        </div>

                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input type="password" name="passwordrpt" placeholder="Repita a senha" class="login__input">
                        </div>

                        <input type="submit" value="Cadastrar" class="login__button">

                        <div>
                            <span class="login__account">Já tem uma conta?</span>
                            <span class="login__signup" id="sign-in">Entrar</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>