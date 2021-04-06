<?php
  require_once('templates/top.php');
  $url = $_GET['url'];
  $query = "SELECT * FROM maintexts WHERE url='$url'"; //CRUD
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
  require_once('templates/buttom.php');
?>