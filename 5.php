<?php

$inp = readline("Enter string  :  ");

if(!preg_match("/[a-z]/i", $inp)){
    print "You should input only letters";
}

$letters = str_split(strtoupper($inp));
// ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).


function letterToDigits(array $letters):string
{
    $translateToDigit = '';
    foreach ($letters as $letter)
    {
        switch($letter)
        {
            case in_array($letter,['A','B','C']):
                $translateToDigit .= str_repeat('2',array_search($letter,['A','B','C'])+1);
                break;
            case in_array($letter,['D','E','F']):
                $translateToDigit .= str_repeat('3',array_search($letter,['D','E','F'])+1);
                break;
            case in_array($letter,['G','H','I']):
                $translateToDigit .= str_repeat('4',array_search($letter,['G','H','I'])+1);
                break;
            case in_array($letter,['J','K','L']):
                $translateToDigit .= str_repeat('5',array_search($letter,['J','K','L'])+1);
                break;
            case in_array($letter,['M','N','O']):
                $translateToDigit .= str_repeat('6',array_search($letter,['M','N','O'])+1);
                break;
            case in_array($letter,['P','Q','R','S']):
                $translateToDigit .= str_repeat('7',array_search($letter,['P','Q','R','S'])+1);
                break;
            case in_array($letter,['T','U','V']):
                $translateToDigit .= str_repeat('8',array_search($letter,['T','U','V'])+1);
                break;
            case in_array($letter,['W','X','Y','Z']):
                $translateToDigit .= str_repeat('9',array_search($letter,['W','X','Y','Z'])+1);
                break;
            default:
                break;

        }

    }
    return $translateToDigit;
}

echo PHP_EOL.letterToDigits($letters).PHP_EOL;

