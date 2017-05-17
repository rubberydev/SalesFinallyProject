<?php
require_once("../jpgraph/src/jpgraph.php");
require_once("../jpgraph/src/jpgraph_bar.php");

$month = retrieveSales("Month");
$earned = retrieveSales("Earnings");

$graphic = new Graph(800,640);
$graphic->ClearTheme();

$graphic->SetScale("textlin");

$upper = array(0, 4000000, 8000000, 12000000, 16000000, 20000000);
$lower = array(2000000, 6000000, 10000000, 14000000, 18000000, 22000000);
$yScaleLabels = array("0-2", "0-4", "4-8", "8-12", "12-16", "16-20");

$graphic->yaxis->SetTickPositions($upper, $lower, $yScaleLabels);
$graphic->SetBox(false);
$graphic->xaxis->SetTickLabels($month);

$graphic->yaxis->title->set("Millions");
$graphic->xaxis->title->set("Months");

$bars = new BarPlot($earned);
$bars->SetColor("black");
$bars->SetFillColor("cadetblue");
$bars->SetWidth(50);
$graphic->title->set("Sales per month");
$graphic->title->SetFont(FF_DEFAULT,FS_ITALIC,18);
$graphic->add($bars);

$graphic->Stroke();

function retrieveSales($column) {

  $con = new mysqli('localhost', 'lucho','123456', 'FirstConnection');
  $array = array();

  $salesSQL = "SELECT * FROM Sales";
  $resSales = $con->query($salesSQL);
  if($resSales->num_rows > 0) {
         while($sale = $resSales->fetch_assoc()){
            array_push($array, $sale[$column]);
       }
       $con->close();
  }
  return $array;
}

//Julian Herrera - Luis Alejandro Ramirez - Alexis Hernandez.
?>