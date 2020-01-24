<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../../header.php';
require_once '../../Autoloader.php';
?>

<link rel="stylesheet" type="text/css" href="../../custom-styles.css">
<head>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
	integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
	crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css"
	href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8"
	src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
</head>
<table id="calculations" class="display">

	<thead>

		<tr>
			<th>ID</th>
			<th>Operand 1</th>
			<th>Operation</th>
			<th>Operand 2</th>
			<th>Result</th>
		</tr>

	</thead>

	<tbody>

<?php
$calculationBS = new CalculationBusinessService();

$calculations = $calculationBS->getAllCalculations();

foreach ($calculations as $c) {
    echo "<tr>";

    echo "<td>" . $c->getId() . "</td>";
    echo "<td>" . $c->getOp1() . "</td>";
    echo "<td>" . $c->getOperation() . "</td>";
    echo "<td>" . $c->getOp2() . "</td>";
    echo "<td>" . $c->getResult() . "</td>";
}

?>

</tbody>

</table>

<script>
$(document).ready( function () {
    $('#calculations').DataTable();
} );
</script>