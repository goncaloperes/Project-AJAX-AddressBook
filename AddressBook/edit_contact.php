<?php include('core/init.php'); ?>

<?php


//Create DB Object
$db = new Database;


//Run Query
$db->query("UPDATE `contacts`
                  SET 
			          first_name 		= :first_name,
			          last_name		    = :last_name,
			          email		 	    = :email,
			          phone		 	    = :phone,
			          address1 		    = :address1,
			          address2 		    = :address2,
			          city		 	    = :city,
			          state 			= :state,
			          zipcode 		    = :zipcode,
			          contact_group 	= :contact_group,
			          notes 			= :notes 
			      WHERE id = :id
			      ");


//Bind Values
$db->bind(':first_name', $_POST['first_name']);
$db->bind(':last_name', $_POST['last_name']);
$db->bind(':email', $_POST['email']);
$db->bind(':phone', $_POST['phone']);
$db->bind(':address1', $_POST['address1']);
$db->bind(':address2', $_POST['address2']);
$db->bind(':city', $_POST['city']);
$db->bind(':state', $_POST['state']);
$db->bind(':zipcode', $_POST['zipcode']);
$db->bind(':contact_group', $_POST['contact_group']);
$db->bind(':notes', $_POST['notes']);
$db->bind(':id', $_POST['id']);

if($db->execute())
{
    echo "Contact was updated";
}
else
    {
        echo "Could not update contact";
    }

?>