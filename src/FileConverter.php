<?php namespace Katas;

class FileConverter
{
    public static function getVariables(string $fileName): array
    {
        $myFile = fopen("../$fileName.txt", "r") or die("Unable to open file!");

        [$numberOfRows, $numberOfBombs] = array_map('intval', explode(' ', fgets($myFile)));

        while(!feof($myFile)) {
            $minesMap[] = str_split(fgets($myFile));
        }

        return [$numberOfRows, $numberOfBombs, $minesMap ?? []];
    }
}