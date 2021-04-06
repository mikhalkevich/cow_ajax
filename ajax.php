<?php
 require_once('config/config.php');
   $id = (int)$_POST['id'];
  $query = "SELECT * FROM maintexts WHERE id=$id"; //CRUD
  $adr = mysqli_query($dbconnect, $query);
  if(!$adr){
	  exit($query);
  }
  $tbl_maintext = mysqli_fetch_array($adr);
  //print_r($tbl_maintext);
?>
        <h2><?php echo $tbl_maintext['name']?></h2>
        <div id="content-body">
 <?php echo $tbl_maintext['body']?>
        </div>
<?php