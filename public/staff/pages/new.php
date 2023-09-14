<?php

require_once('../../../private/initialize.php');


$menu_name = '';
$position = ' ';
$visible = '';

if(is_post_request()) {
    // Handle form values sent by new.php

    $menu_name = $_POST['menu_name'] ?? '';

    echo "Form parameters<br />";
    echo "Menu name: " . $menu_name ."<br />";
}


?>

<?php $page_title = 'Create Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>