<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../../header.php";
require_once '../../Autoloader.php';

?>
<div class="container">
	<h2>New Calculation</h2>

	<form action="../handlers/processNewCalculation.php">

		<div class="form-group">
			<label for="street">Operand 1</label> 
			<input type="text" class="form-control" id="op1" placeholder="Operand 1" name="op1">
		</div>

		<div class="form-group" id="oper">
			<label for="oper">Operation</label> 
			<select name="operation">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
			</select>
		</div>
		
		<div class="form-group">
			<label for="city">Operand 2</label> 
			<input type="text" class="form-control" id="op2" placeholder="Operand 2" name="op2">
		</div>

		<button type="submit" class="btn btn-dark">Submit</button>

	</form>

</div>