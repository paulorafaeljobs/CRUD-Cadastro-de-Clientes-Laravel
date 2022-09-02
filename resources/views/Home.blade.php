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
    <title>Sistema de Cadastro</title>
    <style>
        *{font-family: 'Montserrat', sans-serif;padding:0;margin:0;}
        table{width:90%;margin:auto;margin-top:50px;}
        header{align-items:center;display:flex;justify-content: space-around;background-color: #0275d8;height:60px;}
        li{list-style: none;margin-left:15px;}
        ul {display:flex;}
        a{text-decoration:none;color:white;font-size:25px;}
        .but{width:60px;height:30px;color:white;background-color: #0275d8;border:none;}
    </style>
</head>
<body>
    <header>
        <a href="/">Sistema de Cadastro</a>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/cadastro">Cadastrar</a></li>
        </ul>
    </header>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Filiação</th>
            <th>CPF</th>
            <th>Nascimento</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cep</th>
            <th>Municipio</th>
            <th>Email</th>
            <th>Telefone</th>
            <th></th>
            <th></th>
        </tr>
            @foreach($Cadastros as $value)
                <tr>
                    <td >{{ $value->id }}</td>
                    <td >{{ $value->nome }}</td>
                    <td >{{ $value->filiacao }}</td>
                    <td>{{ $value->cpf }}</td>
                    <td>{{ $value->nascimento }}</td>
                    <td>{{ $value->endereco }}</td>
                    <td>{{ $value->bairro }}</td>
                    <td>{{ $value->cep }}</td>
                    <td>{{ $value->municipio }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->tel }}</td>
                    <td><a href="/editar/{{ $value->id}}"><button class="but" >Editar</button></a></td>
                    <td><a href="/del/{{ $value->id}}"><button class="but" >Excluir</button></a></td>
                </tr>
            @endforeach
    </table>
</body>
</html>