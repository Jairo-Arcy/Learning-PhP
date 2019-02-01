<?php

var_dump(round(2.4));           // 2
var_dump(round(5.5));           // 6
var_dump(round(5.6));           // 6
var_dump(round(5.4));           // 5
var_dump(round(3.6, 0));        // 4
var_dump(round(3.665, 1));      // 3.7
var_dump(round(3.665, 2));      // 3.67

// Arredondando frações para cima

var_dump(ceil(3.665));  // 4
var_dump(ceil(3.66));   // 4
var_dump(ceil(3.45));   // 4
var_dump(ceil(3.2));    // 4
var_dump(ceil(-2.12));  // -2

// Arredondando frações para baixo

var_dump(floor(3.665));  // 3
var_dump(floor(3.66));   // 3
var_dump(floor(3.45));   // 3
var_dump(floor(3.2));    // 3
var_dump(floor(-2.12));  // -3