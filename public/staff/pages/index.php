<?php require_once( "../../../private/initialize.php") ?>

<!doctype html>
<?php $page_style='Staff Menu'; ?>
<?php include(SHARED_PATH . '../../../private/shared/staff_header.php'); ?>
<?php 

$pages = [
          ["ID" => "1", "Position" => "1", "Visible" => "true", "Name" => "Globe Bank"],
          ["ID" => "2", "Position" => "2", "Visible" => "true", "Name" => "History"],
          ["ID" => "3", "Position" => "3", "Visible" => "true", "Name" => "Leadership"],
          ["ID" => "4", "Position" => "4", "Visible" => "true", "Name" => "Contact Us"]
        ];


?>
<html lang="en">
<head>
    <title><?php echo $page_title; ?></title>
    <meta charset = "utf-8">
</head>
<body>

<table class="list">
    <tr>
        <th>ID</th>
        <th>Position</th>
        <th>Visible</th>
        <th>Name</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </tr>


<?php  foreach($pages as $page) {?>
    <tr>
        <td><?php echo h($page["ID"]); ?></td>
        <td><?php echo h($page["Position"]); ?></td>
        <td><?php echo h($page["Visible"] == 1 ? 'true' : 'false'); ?></td>
        <td><?php echo h($page["Name"]); ?>
        <td><a class="action" href="<?php echo url_for('/staff/pages/show.php?id=' . h(u($page["ID"])) ); ?>">View</a></td>
        <td><a class="action" href="">Edit</a></td>
        <td><a class="action" href="">Delete</a></td>

    </tr>
<?php } ?>
</table>

</body>
<?php include(SHARED_PATH. '../../../private/shared/staff_footer.php'); ?>
</html> 