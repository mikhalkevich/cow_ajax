<?php
  require_once('templates/top.php');
?>
        <h2>Отзывы</h2>
        <div id="content-body">
 <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="message">Сообщение</label>
    <textarea class="form-control" id="message"></textarea>
  </div> 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
<?php
  require_once('templates/buttom.php');
?>