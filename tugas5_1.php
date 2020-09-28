<?php
$inputtrue = "true";
$inputfalse = "false";
$true = 1;
$false = 0;
$hasil1 = printf(false&&false);
$hasil2 = printf(false||false);
$hasil3 = printf(false&&true);
$hasil4 = printf(false||true);
$hasil5 = printf(true&&false);
$hasil6 = printf(true||false);
$hasil7 = printf(true&&true);
$hasil8 = printf(true||true);

echo "<p>Tabel Logika 1111</p>";
echo"<table border=1>
<tr>
    <td>Input true</td>
    <td>Input 2</td>
    <td>AND</td>
    <td>OR</td>
</tr>
<tr>
    <td>$inputfalse</td>
    <td>$inputfalse</td>
    <td>$hasil1</td>
    <td>$hasil2</td>
</tr>
<tr>
    <td>$inputfalse</td>
    <td>$inputtrue</td>
    <td>$hasil3</td>
    <td>$hasil4</td>
</tr>
<tr>
    <td>$inputtrue</td>
    <td>$inputfalse</td>
    <td>$hasil5</td>
    <td>$hasil6</td>
    
</tr>
<tr>
    <td>$inputtrue</td>
    <td>$inputtrue</td>
    <td>$hasil7</td>
    <td>$hasil8</td>
    
</tr>
<table>"

?>