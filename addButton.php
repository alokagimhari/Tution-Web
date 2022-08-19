<?php 
//Header
include_once('header.php');

//Database
include_once('config.php');
//function
include_once('zoom_function.php');


//Show All Button
$result = fun::AllButton($con);
//Edit Button
fun::editButton($con);
if(isset($_GET['did'])){
  $id = $_GET['did'];
  fun::deleteButton($con,$id);
}
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $link = "elink";
  $date = "edate";
  $edit = fun::getEdit($con,$id);
  $link_id = $edit['id'];
  $link_data = $edit['link'];
  $date_data = $edit['date'];
}else{

  $link = "link";
  $date = "date";
  $link_id = "";
  $link_data = "";
  $date_data = "";
  //Add Button
  fun::addNew($con);  
}
//Delete Button
?>
<br/>
<div class="container">
<button id="home" class="btn btn-primary"><a href="home.html" style="text-decoration:none; color: white;">Logout</a></button>
</div>
<div class="container">
  <div class="row mt-5">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header bg-primary text-white">
          Add Zoom Button Link
        </div>
        <div class="card-body">
         <form action="addButton.php" method="POST">
            <input type="hidden" name="id" value="<?= $link_id ?>" />
            <div class="mb-3">
              <label for="Inputurl" class="form-label">Button Url</label>
              <input type="text" class="form-control" id="Inputurl" name="<?= $link ?>" value="<?= $link_data ?>" placeholder="Enter Zoom Url" required>
            </div>
            <div class="mb-3">
              <label for="Inputdate" class="form-label">Date</label>
              <input type="date" class="form-control" id="Inputdate" name="<?= $date ?>" value="<?= $date_data ?>" placeholder="Select Date" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header bg-primary text-white">
          All Zoom Button Link
        </div>
        <div class="card-body">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Url</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  if(!empty($result)){
  $i = 1;
  foreach ($result as $row) {
   ?>
  
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><a href="<?= $row['link']; ?>"> <?= $row['link']; ?></a></td>
      <td><?= $row['date']; ?></td>
      <td><a href="addButton.php?id=<?= $row['id']; ?>">Edit</a>  / <a href="addButton.php?did=<?= $row['id']; ?>">Delete</a></td>
    </tr>
    <?php }} ?>
  </tbody>
</table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once('footer.php'); ?>