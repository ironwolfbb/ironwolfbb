
<?php    
include ($_SERVER['DOCUMENT_ROOT']. '/templates/header.php');
?>

<?php
include 'registr.php';
/* var_dump($_POST); */
include 'autorization.php';

?>
<br>


<br>
<?php
if(isset( $_GET['res'])){
    var_dump( cutString($line, $length, $appends ));
    echo '<br>';
    echo '<br>';
    echo '<br>';
    include $_SERVER['DOCUMENT_ROOT']. '/function/002_array_to_sort.php';
    };
?>
<?php 
include ($_SERVER['DOCUMENT_ROOT']. "/templates/footer.php");
?>
