<?php

function showGenre($genre)
{
    if ($genre == 1)
        return "masculin";
    else if ($genre == 2)
        return "féminin";
}

function showType($type)
{
    if ($type == 0)
        return "ambigu";
    else if ($type == 1)
        return "masculin";
    else
        return "féminin";
}

function checkGenre($data)
{
    if ($data[0] === 'M') 
        return (1);
    else if ($data[0] === 'F')
        return (2);
}

function checkType($data)
{
    if ($data === "M")
        return (1);
    else if ($data === "F")
        return (2);
    else 
        return (0);    
}