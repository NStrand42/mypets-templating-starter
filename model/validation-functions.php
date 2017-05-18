<?php

/*
 *Validate Color
 *
 *@param String color
 *@return boolean
 */

   function validColor($color)
   {
      $colors = array("prurple", "pink", "green");
      return in_array($color, $colors);
   }
   
   function validType($type)
   {
      return !empty($type) && ctype_alpha($type);
    
   }
   
   function validPetNanme($petName)
   {
    
    $name = trim($petName);
    
    return (strlen($petName) > 1) && ctype_alnum($petName);
   }