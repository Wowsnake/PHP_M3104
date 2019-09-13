<?php
    include "index.php";
    start_page("calcul");
    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];
    $op = $_POST['op'];
    if('*'== $op)
    {

    }
    elseif('+'== $op)
    {

    }
    else
        {
            echo'<br/><strong>opérateur'.$op.'nongéré</strong>';
        }
    $operateurs = '*+-/';
    $operateurs[0];
    $operateurs[1];
    $operateurs[2];
    for($cpt=0;$cpt<=3;++$cpt)
    {
        echo'<input';
        if($cpt==0)
        {
            echo'checked="checked"';
        }
        echo'type="radio"name="op"value="'.$operateurs[$cpt].'"/>'.$operateurs[$cpt].'<br/>
        '."\n";}
    end_page();
    ?>