<?php
    //dazdazd//
    include 'index.php';
    start_page("calculatrice");
    $operateurs = '*+-/';
    echo '
    <form action = "calcul.php" method = "post">
    <input type = "text" name = "op1" ><br>
    <input type = "text" name = "op2" ><br>';
    for($cpt=0;$cpt<=3;++$cpt)
    {
        echo'<input';
        if($cpt==0)
        {
            echo'checked="checked"';
        }
        echo'type="radio"name="op"value="'.$operateurs[$cpt].'"/>'.$operateurs[$cpt].'<br/>
        '."\n";}
    echo '</form>';
    end_page();
    ?>
