<?php
echo "Имя файла ".__FILE__. PHP_EOL;
echo "Строка ".__LINE__. PHP_EOL;

$c = <<<EOD
  Привет, Мир!
  Hello, World!
  Bonjour, Le Monde!
EOD;
echo $c. PHP_EOL;

$a = 'Рыба';
$b = 'человек';
echo $a. ' рыбою сыта, а '. $b . ' человеком.';