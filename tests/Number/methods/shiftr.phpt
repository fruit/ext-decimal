--TEST--
Number::shiftr
--SKIPIF--
<?php
if (!extension_loaded("decimal")) echo "skip";
?>
--FILE--
<?php
require __DIR__ . "/../include/Number.php";

var_dump(Number::valueOf(4) >>  2);
var_dump(Number::valueOf(4) >> -2);

var_dump(Number::valueOf(4) >> "1");

var_dump(Number::valueOf(4)->shiftr( 2));
var_dump(Number::valueOf(4)->shiftr(-2));

var_dump(Number::valueOf(4)->shiftr("1"));
?>
--EXPECT--
Number::shiftr
object(Number)#2 (1) {
  ["value":protected]=>
  float(0.04)
}
Number::shiftr
object(Number)#1 (1) {
  ["value":protected]=>
  float(400)
}
Number::shiftr
object(Number)#2 (1) {
  ["value":protected]=>
  float(0.4)
}
Number::shiftr
object(Number)#1 (1) {
  ["value":protected]=>
  float(0.04)
}
Number::shiftr
object(Number)#2 (1) {
  ["value":protected]=>
  float(400)
}
Number::shiftr
object(Number)#1 (1) {
  ["value":protected]=>
  float(0.4)
}