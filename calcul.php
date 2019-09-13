<?php
    include "index.php";
    start_page("calcul");
    $op1 = $_GET['op1'];
    $op2 = $_GET['op2'];
    $op = $_GET['op'];
    $action = $_GET['action'];
    echo $action;
    if('*'== $op)
    {
        $res = $op1 * $op2;
    }
    elseif('+'== $op)
    {
        $res = $op1 + $op2;
    }
    else
        {
            echo'<br/><strong>opérateur'.$op.'nongéré</strong>';
        }
    if (isset($res)) echo $op1. $action . $op2 . '=' . $res;
    end_page();
    ?>