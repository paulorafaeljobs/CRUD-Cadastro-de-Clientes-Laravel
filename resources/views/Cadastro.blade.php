<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&family=Montserrat:wght@300&family=Open+Sans:ital,wght@1,300&family=Outfit:wght@100&family=Pacifico&family=Poppins:wght@300&family=Raleway:wght@200;400&family=Reem+Kufi&display=swap" rel="stylesheet">
    <title>Cadastrar</title>
</head>
<body>
<style>
    *{font-family: 'Montserrat', sans-serif;padding:0;margin:0;}
    table{width:90%;margin:auto;margin-top:50px;}
    header{align-items:center;display:flex;justify-content: space-around;background-color: #0275d8;height:60px;}
    li{list-style: none;margin-left:15px;}
    ul {display:flex;}
    a{text-decoration:none;color:white;font-size:25px;}
    .but{width:60px;height:30px;color:white;background-color: #0275d8;border:none;}
    .Conteiner{width:80%;margin:auto;margin-top:40px;}
    .box{display:flex;width:100%;margin:10px;}
    .box > div {width:100%;margin:auto;text-align:left;}
    .box > div > input{width:90%;padding:10px;}
    .btn{width:400px;padding:10px;margin:10px;background-color: #0275d8;color:white;border:none;font-size:20px;}
</style>
<header>
    <a href="/">Sistema de Cadastro</a>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/cadastro">Cadastrar</a></li>
    </ul>
</header>
<div class="Conteiner">
    <form action="create" method="post" enctype="multipart/form-data">
        @csrf
            <div class="box">
                <div><p>Nome:</p><input type="text" name="nome"></div>            
                <div><p>Filiacão:</p><input type="text" name="filiacao"></div>
            </div>
            <div class="box">
                <div><p>CPF:</p><input type="text" name="cpf"></div>
                <div><p>Nascimento:</p><input type="text" name="nascimento"></div>
            </div>
            <div class="box">
                <div><p>Endereço:</p><input type="text" name="endereco"></div>
                <div><p>Bairro</p><input type="text"  name="bairro"></div>
            </div>
            <div class="box">
                <div><p>Cep:</p><input type="text" name="cep"></div>
                <div><p>Municipio:</p><input type="text" name="municipio"></div>
            </div>
            <div class="box">
                <div><p>Email:</p><input type="text" name="email"></div>
                <div><p>Telefone:</p><input type="text" name="tel"></div>
            </div>
                <button class="btn" type="submit">Salvar</button>
    </form>
</div>
</body>
</html>