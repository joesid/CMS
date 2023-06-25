<?php require_once('../../../private/initialize.php'); ?> 


<a href="<?php echo url_for('/staff/pages/index.php'); ?>">Back to List</a><br />
<?php 

$id = $_GET["ID"] ?? '1';


echo htmlspecialchars(u("Page ID = " . $id));

?>