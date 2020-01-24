<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../../header.php';
require_once '../../Autoloader.php';
?>

<link rel="stylesheet" type="text/css" href="../../custom-styles.css">
<body>
	<table class="table">

		<thead>

			<tr>
				<th>Operand 1</th>
				<th>Operation</th>
				<th>Operand 2</th>
				<th>Result</th>
			</tr>

		</thead>

		<tbody>

<?php
    $calculationBS = new CalculationBusinessService();
    $calc_id = unserialize($_SESSION['calc_id']);

    $c = $calculationBS->getCalculation($calc_id);
    echo "<tr>";
    
    echo "<td>" . $c->getOp1() . "</td>";
    echo "<td>" . $c->getOperation() . "</td>";
    echo "<td>" . $c->getOp2() . "</td>";
    echo "<td>" . $c->getResult() . "</td>";

?>

</tbody>

	</table>

</body>
