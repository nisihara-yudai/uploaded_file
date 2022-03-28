<?php
$file = $_FILES['picture'];
?>

name : <?php echo $file['name']; ?>
<?php echo '<br>'; ?>
type : <?php echo $file['type']; ?>
<?php echo '<br>'; ?>
tmp_name : <?php echo $file['tmp_name']; ?>
<?php echo '<br>'; ?>
error : <?php echo $file['error']; ?>
<?php echo '<br>'; ?>
size : <?php echo $file['size']; ?>

<?php
$ext = substr($file['name'],-4);
if($ext == '.git' || $ext == '.jpg' || $ext == '.png'){
  $filepath = './'. $file['name'];
  $success = move_uploaded_file($file['tmp_name'],$filepath);
}else{
  print("拡張子が.git, .jpg, .pngのいずれかのファイルをアップロードして下さい");
}

if($success){
  print "<br/>";
  print "<img src=".$filepath."width='50%'>";
}else{
  print "※ファイルアップロードに失敗しました";
}
?>