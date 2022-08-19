<?php include_once("config.php");
include_once('header.php');
include_once('zoom_function.php');
$button = fun::getButton($con);
if(!empty($button)){
?>
    <button id="home" class="btn btn-primary btn-lg"><a href="home.php" style="text-decoration:none;">Logout</a></button>

    <div class="container text-center mt-5">
    <a href="<?= $button['link'] ?>" class='btn btn-primary btn-lg' target="_blank">Join Class</a>
    </div>
    
<?php } include_once('footer.php'); ?>
<script>
</script>