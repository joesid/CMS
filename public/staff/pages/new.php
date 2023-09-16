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

<div id="content">

    <a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>"&laquo; Back to List</a>

    <div class="page new">
        <h1>Create Page</h1>

        <form action="<?php echo url_for('/staff/pages/new.php');?> method="post">
        <dl>
            <dt>Menu Name</dt>
            <dd><input type="text" name="menu_name" value="<?php echo h($menu_name); ?>" />
            </dd>
        </dl>
        <div id="operations">
            <input type="submit" value="Create Page" />
        </div>
    </form>
    </div>
</div>
<?php include(SHARED_PATH . '/staff_header.php'); ?>