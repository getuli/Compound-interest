<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de juros compostos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>





    <header>
        <div id="cabecalho">

        <a class="a" href="http://127.0.0.1/calculadora%20de%20tempo/project2/layout.php">Home</a>
        <a class="a" href="https://pt.wikipedia.org/wiki/Juro#:~:text=Diferente%20da%20taxa%20de%20juros,que%20n%C3%A3o%20s%C3%A3o%20continuamente%20compostas).">Informações</a>
        <a class="a" href="https://brasilescola.uol.com.br/matematica/juros-compostos.htm">Sobre</a>
        </div>

    </header>
    <main><section>
    <div class="corpo">
            <h2>Cálculo de juros compostos</h2>
            <h3> Diferentemente dos juros simples, onde os ganhos ou custos são calculados apenas sobre o valor inicial, os juros compostos levam em consideração não apenas o juro principal, mas também os juros acumulados em períodos anteriores.</h3>

        </div>

    </section>

    <div class="corpomeio">
    <div class=" form">
        <div>
        <form action="index.php" method="get">
        <h2>Cáculo de juros Compostos </h2>
        <div>
            <label for="valorinicial">valor inicial </label>
            <span>R$</span>
            <input id="valorinicial" type="number" name="valorinicial">
        </div> 
        <div
            class="posicaodiv2">
            <label for="taxadejuros">Taxa de juros  </label>
            <span>%<span>
            <input id="taxadejuros" type="number" name="taxadejuros">
        </div> 
        <div class="posicaodiv1">
            <label  class="valormensal" for="valormensal">valor mensal </label>
            <span>R$</span>
            <input id="valormensal" type="number" name="valormensal">
        </div>
        <div>
            <label for="periodo">  periodo em <strong>Anos</strong> </label>
            <input id="periodo"  type="number" name="periodo"> 
            <input id="bot" type="submit" value="Enviar">
        </div>    
                  
       
   
    </div>
   
    
        

    </main>
    <footer class="rodape">
        <div >
            <a href="https://www.linkedin.com/in/get%C3%BAlio-machado-a08076202/">Linkedin</a>
            <a href="https://github.com/getuli"> Github</a>
        </div>

    </footer>
    
</body>
</html>