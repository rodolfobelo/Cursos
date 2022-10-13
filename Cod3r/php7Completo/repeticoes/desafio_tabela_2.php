<div class="titulo">Desafio Tabela #02</div>

<form action="#" method="post">
    <div>
        <label for="linhas">Linhas</label>
        <input type="number" value="<?= $_POST['linhas'] ?? 5 ?>" name="linhas" id="linhas">
    </div>
    <div>
        <label for="colunas">Colunas</label>
        <input type="number" value="<?= $_POST['colunas'] ?? 5 ?>" name="colunas" id="colunas">
    </div>
    <button>Gerar Tabela</button>
</form>


<table>
<?php
    $linhas = intval($_POST['linhas']);
    $colunas = intval($_POST['colunas']);

    $numero = 1;

    for($i = 0; $i < $linhas; $i++){
        echo "<tr>";
        for ($j=0; $j < $colunas; $j++) { 
            echo "<td>$numero</td>";
            $numero++;
        }
        echo "</tr>";
    }
?>
</table>

<style>
    form * {
        font-size: 1.8rem;
    }

    form > div {
        margin-bottom: 10px;
    }
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        border: 1px solid #444;
        padding: 10px 20px;
    }

    .corPar {
        background-color: #808080;
    }

    .corImpar {
        background-color: #FFFFFF;
    }
</style>