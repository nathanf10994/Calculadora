<!-- 
Pequeno projeto de calculadora feito em PHP
Developed by Nathan Ferreira
GitHub: nathanf10994
-->

<html>
    <body>

        <center>
            
        <h1>Calculadora</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

            <br>Digite o primeiro número:
            <input type="tel" id="numero1" name="numero1" required>
            
            <br><br>Digite o segundo número:
            <input type="tel" id="numero2" name="numero2" required>

            <br><br>Operação:
            <select id="operar" name="operar" required>
                <option></option>
                <option value="1">Somar</option>
                <option value="2">Subtrair</option>
                <option value="3">Multiplicar</option>
                <option value="4">Dividir</option>
            </select>
            
            <br><br>
            <input class="btn" type="submit" name="calcular" value="calcular">
            
        </form>

        <?php

            if(isset($_POST['calcular'])):
                
                $numero1 = $_POST['numero1'];
                $numero2 = $_POST['numero2'];
                $operar = $_POST['operar'];

                if($operar == 1):
                    $resultado = $numero1 + $numero2;
                    echo "<h2>O Resultado da soma é ".$resultado."</h2>";
                elseif($operar == 2):
                    $resultado = $numero1 - $numero2;
                    echo "<h2>O Resultado da subtração é ".$resultado."</h2>";
                elseif($operar == 3):
                    $resultado = $numero1 * $numero2;
                    echo "<h2>O Resultado da multiplicação é ".$resultado."</h2>";
                elseif($operar == 4):
                    $resultado = $numero1 / $numero2;
                    echo "<h2>O Resultado da divisão é ".$resultado."</h2>";
                endif;
            endif;
        ?>
        
        </center>
    </body>
</html>