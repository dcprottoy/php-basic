<?php

/*
    # Constants can be defined with two procedure
        1. Is By Using the define function.
        2. by using the const key word.
    # With define function we can declare constants any where in file cause it can be run 
        run time.
    # On the other hand using const key word we have to define or declare it at the 
        beggening of the programme or file.cause it runs at the compile time.


*/

define('PREFIX', 'OPTION');


define(PREFIX . '_1', 1);
define(PREFIX . '_2', 2);
define(PREFIX . '_3', 3);

const RGB = ['red', 'green', 'blue'];