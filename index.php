<?php
/**
 * Created by PhpStorm.
 * User: Elizabeth
 * Date: 9/06/2016
 * Time: 5:18 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Titration Calculator</title>
</head>
<body>
<pre>Please put amount in mL</pre>
<form action="calculations.php" method="get">
    Base
    <select name="base">
        <option value="NaOH">NaOH</option>
    </select>
    <br>
    mol: <input type="number" step="any" name="conc">
    <br>
    <br>
    Acid
    <select name="acid">
        <option value="HCl">HCl</option>
    </select>
    Amount: <input type="number" step="any" placeholder="25" name="amount">
    <br>
    Test1: <input type="number" step="any" name="acid1">
    Test2: <input type="number" step="any" name="acid2">
    Test3: <input type="number" step="any" name="acid3">
    <br>
    <br>
    Unknown *Acid*
    <select name="unknown">
        <option value="CH3COOH">CH3COOH</option>
    </select>
    Amount: <input type="number" step="any" placeholder="25" name="amount2">
    <br>
    Test1: <input type="number" step="any" name="acid4">
    Test2: <input type="number" step="any" name="acid5">
    Test3: <input type="number" step="any" name="acid6">
    <br>
    <br>
    <input type="submit">
</form>

</body>
</html>