<!DOCTYPE html>
<?php
$FirstNumber = $_POST['FNumber'];
$SecondNumber = $_POST['SNumber'];
$operator = $_POST['operator'];
$CalculatorResult = '';
if (is_numeric($FNumber) && is_numeric($SNumber)) {
switch ($operator) {
case "Sum":
$CalculatorResult = $FNumber + $SNumber;
break;
case "Subtraction":
$CalculatorResult = $FNumber - $SNumber;
break;
case "Multiplication":
$CalculatorResult = $FNumber * $SNumber;
break;
case "Division":
$CalculatorResult = $FNumber / $SNumber;
}
}
?>
<body>
<div id="page-wrap">
<h1>عدد را وارد کنید و عمل آن را مشخص کنید</h1>
<form action="" method="post" id="quiz-form">
<p>
<input type="number" name="FNumber" id="FNumber" required="required" value="<?php echo $FNumber; ?>" /> <b>First Number</b>
</p>
<p>
<input type="number" name="SNumber" id="SNumber" required="required" value="<?php echo $SNumber; ?>" /> <b>Second Number</b>
</p>
<p>
<input readonly="readonly" name="CalculatorResult" value="<?php echo $CalculatorResult; ?>"> <b>CalculatorResult</b>
</p>
<input type="submit" name="operator" value="Sum" />
<input type="submit" name="operator" value="Subtraction" />
<input type="submit" name="operator" value="Multiplication" />
<input type="submit" name="operator" value="Division" />
</form>
</div>
</body>
</html>