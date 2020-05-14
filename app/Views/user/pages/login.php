<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor Guincho - LOGIN</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> /assets/css/login.css" >
</head>

<body>
    <div class='div_form'>

    <img src="" alt="">
        <h1>LOGIN</h1>
        <form method='POST' action=<?= base_url('home/login') ?>>
            <input type="login" placeholder='Usuário' name='user'>    
            <input type="password" placeholder='Senha' name='password'>
            <input id="button_login" type="submit" value='Entrar'>
            
        </form>

    </div>

    
</body>

</html>