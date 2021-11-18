<?php
echo "decimal : ";
var_dump(1234);
echo "octal : ";
var_dump(01234);
echo "hexadecimal : ";
var_dump(0x1A);
echo "binary : ";
var_dump(0b11111111);
echo "underscore : ";
var_dump(1_2_3456_7);


echo "floating point : ";
var_dump(1_23.234);
echo "underscore floating point : ";
var_dump(1.234);
echo "floating point dengan E notation Plus (1.2 x 1000) : ";
var_dump(1.2e3);
echo "floating point dengan E notation Plus (7 x 0.001) : ";
var_dump(7e-3);

echo "interger overflow 32bit (gk ngefek karena komputer ini 64 bit: ";
var_dump(2147483648);
echo "interger overflow 64bit : ";
var_dump(9223372036854775808);