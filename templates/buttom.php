    </div>
    <div class="col">
<div class="card">
  <img src="media/img/cow_widget.jpg" class="card-img-top" alt="test">
  <div class="card-body">
    <h5 class="card-title">Корова</h5>
    <p class="card-text">Виджет про корову.</p>
    <a href="#" class="btn btn-primary">Перейти сюда</a>
  </div>
</div>
    </div>
  </div>
</div>
    </div>
    <div id="footer">
<?php
	$query = "SELECT * FROM maintexts";
	  $adr = mysqli_query($dbconnect, $query);
  if(!$adr){
	  exit($query);
  }
  while($tbl_text = mysqli_fetch_array($adr)){
	  echo "<a href='#' class='tbl_link' data-id=".$tbl_text['id'].">";
	  echo $tbl_text['name'];
	  echo "</a> | ";
  }
?>
	<hr />
          <a href="/products.php">Продукты</a>
		mikhalkevich@ya.ru &copy; <?=date('Y-m-d')?>
		<p><a href="#top" id="top">Top</a>
		</p>
    </div>
	<script src="media/js/jquery-3.5.1.min.js"></script> 
	<script src="media/bootstrap/js/bootstrap.min.js"></script> 
	<script src="media/js/main.js"></script>
	<script src="media/js/modal.js?time=<?=time()?>"></script>
	<script src="media/js/player.js?url=7"></script>
	<script>
$(function(){
	$('.menu a').click(function(){
		console.log('test');
		$( ".page" ).scrollTop( 0 );
	})
})	

	 let body = document.querySelector('body');
	 let my_a = document.querySelector('#top');
		my_a.addEventListener('click', function(elem){
	     elem.preventDefault();  
		 console.log(body.offsetTop, body.offsetLeft);
	 	 window.scroll({top:body.offsetTop,left:body.offsetLeft});
	 });  
	</script>
</body>
</html>