<?php


if (isset($_POST['count']))
{
    $count = $_POST['count'];
}

else
{
    $count = 1;
}



if (isset ($_POST['numbers']))
{
    $numbers = true;
}
else
{
    $numbers = false;
}


// Pulls in word text file
if ($words = file('text.txt'))
{

$scramble = [];

// creating arrays for the other values
$number = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
$symbols = ['!', '@', '#', '$', '^', '&', '*', '(', ')'];


    for($i = 0; $i < $count; $i++)
    {

        $max = count($words) - 1;
        $rand = rand(0,$max);

        $letter = $words[$rand];

        array_push($scramble, $letter);

        //symbol array checkbox results
        if (isset($_POST['cbb']))
        {
            $ransym= array_rand ($symbols);
            $ransymresult = $symbols[$ransym];
            $ranarray = array ($ransymresult);

            echo $ransymresult;
        }
        //number array checkbox results
        if (isset($_POST['cba']))
        {
            $ransym2= array_rand ($number);
            $ransymresult2 = $number[$ransym2];
            $ranarray2 = array ($ransymresult2);

            echo $ransymresult2;
        }



        echo $letter . '<br />';
    }


}

