<?php
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_pie.php');
$salary= $_POST['sal'];
/*$wk= $salary/4;
//echo $wk;
*/

$housing= $_POST['w1housing']+$_POST['w2housing']+$_POST['w3housing']+$_POST['w4housing']/4;
$utilities= $_POST['w1utilities']+$_POST['w2utilities']+$_POST['w3utilities']+$_POST['w4utilities']/4;
$household= $_POST['w1household']+$_POST['w2household']+$_POST['w3household']+$_POST['w4household']/4;
$groceries= $_POST['w1groceries']+$_POST['w2groceries']+$_POST['w3groceries']+$_POST['w4groceries']/4;
$living= $_POST['w1living']+$_POST['w2living']+$_POST['w3living']+$_POST['w4living'];
$transportation= $_POST['w1transport']+$_POST['w2transport']+$_POST['w3transport']+$_POST['w4transport']/4;
$healthcare= $_POST['w1health']+$_POST['w2health']+$_POST['w3health']+$_POST['w4health']/4;
$personal_loan= $_POST['w1loan']+$_POST['w2loan']+$_POST['w3loan']+$_POST['w4loan']/4;
$eatingout= $_POST['w1eat']+$_POST['w2eat']+$_POST['w3eat']+$_POST['w4eat']/4;
$entertainment= $_POST['w1entertain']+$_POST['w2entertain']+$_POST['w3entertain']+$_POST['w4entertain']/4;
$children= $_POST['w1child']+$_POST['w2child']+$_POST['w3child']+$_POST['w4child']/4;
$debtpayment= $_POST['w1debt']+$_POST['w2debt']+$_POST['w3debt']+$_POST['w4debt']/4;

$total= ($housing*4)+($utilities*4)+($household*4)+($groceries*4)+($living*4)+($transportation*4)+($healthcare*4)+($personal_loan*4)+($eatingout*4)+($entertainment*4)+($children*4)+($debtpayment*4);
//echo $housing;
//echo $utilities;
//echo $household;
//echo $groceries;
//echo $living;
//echo $transportation;
//echo $healthcare;
//echo $personal_loan;
//echo $eatingout;
//echo $entertainment;
//echo $children;
//echo $debtpayment;
if ($total>$salary)
{
	header('Location:http://localhost/ExpenseTracker/expense-tracker.html');
}
 $data= array($housing, $utilities, $household, $groceries, $living, $transportation, $healthcare, $personal_loan, $eatingout, $entertainment, $children, $debtpayment);
//$data = array($a,$_POST['w1utilities'], $_POST['w1household'],$_POST['w1groceries'],$_POST['w1living'],$_POST['w1transport'],$_POST['w1health'],$_POST['w1loan'],$_POST['w1eat'],$_POST['w1entertain'],$_POST['w1child'],$_POST['w1debt']);
//$data2 = array($_POST['w2housing'],$_POST['w2utilities'], $_POST['w2household'],$_POST['w2groceries'],$_POST['w2living'],$_POST['w2transport'],$_POST['w2health'],$_POST['w2loan'],$_POST['w2eat'],$_POST['w2entertain'],$_POST['w2child'],$_POST['w2debt']); 
$graph = new PieGraph(900,800);
$lb1= array("Housing\n%.1f%%","Utilities\n%.1f%%","HouseHold\n%.1f%%","Groceries\n%.1f%%","Living\n%.1f%%","Transport\n%.1f%%","HealthCare\n%.1f%%","PersonalLoan\n%.1f%%","EatingOut\n%.1f%%","Entertainment\n%.1f%%","Children%.1f%%","DebtPayment%.1f%%");
$graph->SetShadow();
$graph->title->Set("Expense_Tracker");
$p1 = new PiePlot($data);
$p1->SetLabels($lb1);
$p1->ExplodeAll();
$graph->Add($p1);
$graph->Stroke();
//$pieplot->SetSize(0.5);
//$pieplot->SetCenter(0.5, 0.4);
/*$graph2 = new PieGraph(500, 400);
$graph2->SetShadow();
$graph2->title->Set("Week 2");
$p2 = new PiePlot($data2);
$graph2->Add($p2);
$graph2->Stroke(); */ 
?>
