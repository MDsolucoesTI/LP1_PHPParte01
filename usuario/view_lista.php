<html>
    <head>
        <title><?= $titulo ?></title>
    </head>
    <body>
        <h1>Conteudo cadastrado no banco de dados</h1>

        <?php if(isset($retornoExc)) { ?>
            <h3><?= $retornoExc ?> </h3>
        <?php } ?>

        <p>
            <a href="index.php?r=usuario&p=cadastrar">
                Cadastrar novo usuário
            </a>
        </p>

        <table border="1" cellpadding="5" cellspacing="5" width="550">
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Idade</td>
                <td> - </td>
            </tr>
            <?php foreach($dados as $linha) { ?>
                <tr>
                    <td><?= $linha['id'] ?></td>
                    <td><?= $linha['nome'] ?></td>
                    <td><?= $linha['idade'] ?></td>
                    <td>
                        <a href="index.php?r=usuario&p=excluir&codigo=<?= $linha['id'] ?>" onclick="return confirm('Deseja realmente excluir o registro?')">
                        Excluir
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>