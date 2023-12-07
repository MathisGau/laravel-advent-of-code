<?php

namespace App\Solutions\Year_2023;

class Solution_01
{
    public function silver(string $data): string
    {
       //On sépare les lignes
       $lines = explode("\n", $data);
       $result = 0;
       foreach ($lines as $key => $line) {
           if ($line != "") {
               //On sépare les caractères
               $chars = str_split($line);
               $firstNumber = null;
               foreach ($chars as $key => $char) {
                   if (is_numeric($char)) {
                       if (!$firstNumber) {
                           $firstNumber = $char;
                       }
                       $lastNumber = $char;
                   }
               }
               $concatenatedNumbers = $firstNumber . $lastNumber;
               $result += $concatenatedNumbers;
           }
       }

       return $result;
    }

    public function gold(string $data): string
    {
         //On sépare les lignes
         $lines = explode("\n", $data);
         $result = 0;
         foreach ($lines as $key => $line) {
             if ($line != "") {
                 $searching = [
                     "one" => 1,
                     "two" => 2,
                     "three" => 3,
                     "four" => 4,
                     "five" => 5,
                     "six" => 6,
                     "seven" => 7,
                     "eight" => 8,
                     "nine" => 9,
                     "1" => 1,
                     "2" => 2,
                     "3" => 3,
                     "4" => 4,
                     "5" => 5,
                     "6" => 6,
                     "7" => 7,
                     "8" => 8,
                     "9" => 9,
                 ];
                 $firstNumber = 0;
                 $firstNumberPosition = PHP_INT_MAX;
                 $lastNumber = 0;
                 $lastNumberPosition = PHP_INT_MIN;
                 foreach (array_keys($searching) as $search) {
                     $firstOccurenceOfSearch = strpos($line, $search);
                     if ($firstOccurenceOfSearch !== false && $firstNumberPosition > $firstOccurenceOfSearch) {
                         $firstNumberPosition = $firstOccurenceOfSearch;
                         $firstNumber = $searching[$search];
                     }
 
                     $lastOccurenceOfSearch = strrpos($line, $search);
                     if ($lastOccurenceOfSearch !== false && $lastNumberPosition < $lastOccurenceOfSearch) {
                         $lastNumberPosition = $lastOccurenceOfSearch;
                         $lastNumber = $searching[$search];
                     }
                 }
 
                 $result += ($firstNumber . $lastNumber);
             }
         }
 
         return $result;
    }
}
