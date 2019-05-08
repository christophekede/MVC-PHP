<?php
// if(isset($_FILES['file']) && isset($_POST['submit'])){
// header("Content-Type: application/octet-stream");
// header("Content-Transfer-Encoding: Binary");
// header("Content-disposition: attachment; filename=\"file.jpg\""); 
// echo readfile($_FILES["file"]["tmp_name"]);

// }

?>

<?php require APPROOT.'/views/inc/header.php'; ?>
<h1><?= $data['title'] ?></h1>
<ul>
<?php foreach ($data['posts'] as $post) {
  echo "<li>$post->title </li>";
} ?>
</ul>


<select onchange='disable()'>
  <option value="0" selected>--Choix</option>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="vw">VW</option>
  <option value="audi" >Audi</option>
</select>

<form action="" method="post" enctype="multipart/form-data">
  <input type="file" name="file" id="" disabled>
  <div>
    <input type="submit" name="submit" >
  </div>

</form>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
  
      
        
      function disable(){
        if( $("select").val() != 0 ){
                    $('form input[type="file"]').prop("disabled", false);
                }else {
                  $('form input[type="file"]').prop("disabled", true);
                }  
      }

     
                
                
             
            
        
 
</script>


<?php require APPROOT.'/views/inc/footer.php'; ?>

