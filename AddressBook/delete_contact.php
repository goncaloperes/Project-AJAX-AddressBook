<?php include('core/init.php'); ?>

<?php

//Create DB Object
$db = new Database;


//Run Query
$db->query("DELETE FROM `contacts`
                   WHERE id = :id");


//Bind Values
$db->bind(':id', $_POST['id']);


if($db->execute())
{
    echo "Contact was deleted";
}
else
    {
        echo "Could not delete contact";
    }
?>