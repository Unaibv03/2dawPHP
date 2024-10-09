<?php

echo "<style>

    table, td{
    border: 1px solid black;
    }

    </style>
";

$arrayPersonas=['Marcos' => 168,
                    'Unai' => 175,
                        'Javi' => 180,
                            'Steven' => 180,
                                'Maria' => 160];
                            
$alturaMedia=0;
$media=0;
echo "<table> ";

foreach($arrayPersonas as $key => $valor){

    echo "<tr>
    
        <td>

            $key
        
        </td>

        <td>
            $valor
        </td>

    </tr>";

    $alturaMedia+=$valor;
    
}      

$media = $alturaMedia/count($arrayPersonas);

echo "

<tr>

<td>
    La media es: 
</td>

<td>
 $media
</td>

</tr>

</table>";

?>