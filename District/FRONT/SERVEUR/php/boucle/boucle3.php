<?php

function table($nbr, $nbr2)
{
    $table = '<table border="1">';
    for ($a=0; $a <= $nbr; $a++) {
        $table .= '<tr>';
        for ($b=0; $b <= $nbr2 ; $b++) {
            if ($b==0&&$a!=0)
            {
            $table .='<th>'.$a.'</th>';
            }else if ($b!=0&&$a==0)
            {
             $table.='<th>'.$b.'</th>';
            }else if ($a==0 && $b==0)
            {
                $table.='<th>'.$a*$b.'</th>';
            }else
            {
                $table .= '<td>'.$a*$b.'</td>';
            }
            
        }
    }
    $table .= '</table>';
    return $table;
}

echo table(9, 9);

?>