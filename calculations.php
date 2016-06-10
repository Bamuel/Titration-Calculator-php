<?php
/**
 * Created by PhpStorm.
 * User: Elizabeth
 * Date: 9/06/2016
 * Time: 6:30 PM
 */
$base = $_GET["base"];
$baseconc = $_GET["conc"];

$acid = $_GET["acid"];
$acidamount = $_GET["amount"];
$acidresult1 = $_GET["acid1"];
$acidresult2 = $_GET["acid2"];
$acidresult3 = $_GET["acid3"];
$acidresultsum = $acidresult1 + $acidresult2 + $acidresult3;
$acidresultavg = $acidresultsum / 3;

$unknown = $_GET["unknown"];
$acidamount2 = $_GET["amount2"];
$acidresult4 = $_GET["acid4"];
$acidresult5 = $_GET["acid5"];
$acidresult6 = $_GET["acid6"];
$acidresultsum2 = $acidresult4 + $acidresult5 + $acidresult6;
$acidresultavg2 = $acidresultsum2 / 3;

$ratio = "1";

$concnaoh = $baseconc * $acidresultavg / $acidamount; //HCl
$concunknown = $concnaoh * $acidamount / $acidresultavg2;
echo $concnaoh . "mol";
echo "<br>";
echo $concunknown . "mol";