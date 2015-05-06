<?php
// ------------------------------------ 
//  General settings settings
// ------------------------------------

return array(

  // ----------------------------------
  //  Debug
  // ----------------------------------

  'debug' => true,


  // ----------------------------------
  //  Default controller
  // ----------------------------------

  'controller' => 'hello',
  'method' => 'index', // same as action


  // ----------------------------------
  //  Timezone & Date format
  // ----------------------------------
  
  'timezone'    => 'Europe/Copenhagen',
  'date_format' => 'Y-m-d H:i:s',


  // ----------------------------------
  //  HTTPS
  // ----------------------------------
  'ssl' => true,


  // ----------------------------------
  // Classmap for core classes
  // ----------------------------------
  'classmap' => array(
    'Database',
    'View',
    'Time',
  ),

);