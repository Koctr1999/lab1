<?php
// PHP ��������� ��� ������ �������
// � �������� ��������

  

  
// ������� ��� �������
// ������� ��������

function areaTrapezium($a, $b, $h)

{

    return (1.0 / 2 * ($a + $b) * $h);

}

// ��� ��������

$a = 5; $b = 15;$c = 11;

$d = 4; $h = 20;

echo ("Area of Trapezium = "); 

echo(areaTrapezium($a, $b, $h));

echo("\n");

?>