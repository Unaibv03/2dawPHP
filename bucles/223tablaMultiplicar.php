<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>223tablaMultiplicar.php</title>
    <style>

        table{
            border: 1px solid black;
            text-align: center;
        }

    </style>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>a *</th>
                <th>b =</th>
                <th> a * b</th>
            </tr>
        </thead>

        <tbody>

            <?php

                $aux=$_GET['numero'];
                for($i=1;$i<=$_GET['multiplos'];$i++){
            ?>
                <tr>
                    <th><?=$aux?>*</th>
                    <th><?=$i?>=</th>
                    <th><?=$aux*$i?></th>
                </tr>
                
                <?php }?>

            

        </tbody>

    </table>

</body>
</html>