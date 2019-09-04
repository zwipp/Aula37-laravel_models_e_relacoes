




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Esta view deve listar os produtos...</h1>

    <table>
        <thead>
            <td>id</td>
            <td>nome</td>
            <td>preço</td>
            <td>quantidade</td>
            <td>categoria</td>
        </thead>
        <tbody>
            @foreach($produtos as $p)
            <tr>
                <td> {{$p['id']}} </td>
                <td> {{$p['nome']}} </td>
                <td> {{$p['preco']}} </td>
                <td> {{$p['quantidade']}} </td>
                <td> {{$p['categoria']['nome']}} </td> <!-- usou matriz, entrando na tabela categoria e indo para o nome -->
            </tr>
            @endforeach
        </tbody>
    </table>
    {{dd($produtos)}} <!-- dd = emprime o valor da variavel e morre -->
</body>
</html>