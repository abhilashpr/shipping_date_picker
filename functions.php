<?php
include 'config.php';
//$date - Y-m-d format
function getShippingDate($orderDate, $oderTime)
{
    require 'config.php';

    $day = date('l', strtotime($orderDate));

    if (in_array($day, $holidays))
    {
        $result= $next_thursday = date('Y-m-d', strtotime("next thursday", strtotime($orderDate)));
    }
    else
    {

        $choosed_hour = date('H', strtotime($oderTime));

        if ($choosed_hour < 11)
        {

            $result= $orderDate;

        }
        else
        {

            if ($day == "Thursday")
            {

                $result= $next_friday = date('Y-m-d', strtotime("next friday", strtotime($orderDate)));
            }
            else
            {
                $result= $next_thursday = date('Y-m-d', strtotime("next thursday", strtotime($orderDate)));
            }

        }

    }


    return $result;

}

?>
