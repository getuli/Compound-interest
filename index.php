<!DOCTYPE html>
<html lang="en">

<?php 
    $valorinicial = isset($_GET['valorinicial']) ? floatval($_GET['valorinicial']) : 0;
    $taxadejuros = isset($_GET['taxadejuros']) ? floatval($_GET['taxadejuros']) : 0;
    $valormensal = isset($_GET['valormensal']) ? floatval($_GET['valormensal']) : 0;
    $periodo = isset($_GET['periodo']) ? intval($_GET['periodo']) : 0;

    $valorfinal = $valorinicial * (1 + ($taxadejuros / 100)) ** $periodo;
  
    $valormensal2 = $valorinicial;
    $fi = 0;

    for ($i = 1; $i <= $periodo; $i++) {
        $f = $valormensal2 * ($taxadejuros / 100);
        
        $valormensal2 = $valormensal2 * (1 + $taxadejuros / 100) + $valormensal;

        $fi += $f;
    }
   
    $t = $valormensal * $periodo + $valorinicial;
    $as = $fi  + $t;
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="styless.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        table {
            border-collapse: collapse;
            width: 40%;
            position: absolute;
            margin-left: 8%;
            margin-top: 5%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <header>
        <div id="cabecalho">
            <a class="a" href="http://127.0.0.1/calculadora%20de%20tempo/project2/layout.php">Home</a>
            <a class="a" href="https://pt.wikipedia.org/wiki/Juro#:~:text=Diferente%20da%20taxa%20de%20juros,que%20n%C3%A3o%20s%C3%A3o%20continuamente%20compostas).">Informações</a>
            <a class="a" href="https://brasilescola.uol.com.br/matematica/juros-compostos.htm">Sobre</a>
        </div>
    </header>

    <div class="info">
        <div>
            <div>
                <p>Valor Inicial</p>
                <b><?php echo "$valorinicial R$" ?></b>
            </div>
            <div>
                <p>Taxa em %</p>
                <b><?php echo "$taxadejuros %" ?></b>
            </div>
            <div>
                <p>Valor Mensal</p>
                <b><?php echo "$valormensal R$" ?></b>
            </div>
            <div>
                <p>Período</p>
                <b><?php echo "$periodo Anos" ?></b>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th><p>Resultados</p></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>total investido</td>
                    <td><?= number_format($t, 2, ",", ".") ?></td>
                </tr>
                <tr>
                    <td>total ganho em juros mensal</td>
                    <td><?= number_format($fi, 2, ",", ".") ?></td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong><?= number_format($as, 2, ",", ".") ?></strong></td>
                </tr>
            </tbody>
        </table>
    </div>

    <footer class="rodape">
        <div>
            <a href="https://www.linkedin.com/in/get%C3%BAlio-machado-a08076202/">Linkedin</a>
            <a href="https://github.com/getuli"> Github</a>
        </div>
    </footer>
</body>
</html>
