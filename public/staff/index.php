<?php require_once('../../private/initialize.php'); ?>

<?php $page_style= 'Staff Menu'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
    <div id="main-menu">
        <h2>Main Menu</h2>
        <ul>
            <li><a href="<?php echo url_for('/staff/subjects/index.php'); ?>">Subjects</a>
            <li><a href="<?php echo url_for('/staff/pages/index.php'); ?>">Staff</a>
        
        </ul>
    </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>