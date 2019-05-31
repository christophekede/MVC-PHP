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



<?php require APPROOT.'/views/inc/footer.php'; ?>

