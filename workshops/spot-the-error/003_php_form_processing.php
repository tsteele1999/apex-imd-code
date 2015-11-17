<form action="003_form_processing.php" method="GET">
    <input name="my_value">
    <input type="submit">
</form>

<?php
    
    if (isset($_POST["my_value"])) {
        echo "You entered: " . $_POST["my_value"];
    }
?>
