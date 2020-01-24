<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../../header.php';
require_once '../../Autoloader.php';

if (isset($_GET)) {
    $op1 = addslashes($_GET['op1']);
    $op2 = addslashes($_GET['op2']);
    $operation = addslashes($_GET['operation']);

    $bs = new CalculationBusinessService();
    $calculation = new Calculation(0, $op1, $op2, $operation);
    $calculation->calculateResult();

    $calc_id = $bs->newCalculation($calculation);
    print_r($calc_id);

    if ($calc_id == - 1) {
        echo "Error in session";
        exit();
    } else {
        $_SESSION['calc_id'] = serialize($calc_id);
        header("Location: ../views/showResult.php");
    }
} else {
    echo "Nothing submitted by the form<br>";
}

echo "<a href='../views/showNewCalculationForm.php'>Return</a>";

?>

