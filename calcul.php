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

    end_page();
    ?>