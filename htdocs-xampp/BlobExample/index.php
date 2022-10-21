<html>
  <body>
    <?php 
    $con=mysqli_connect('localhost','root','','blob_example');
    if(isset($_FILES["file"]))
    {
       $fileName=basename($_FILES["file"]["name"]); //Get File Name 
       $fileType=pathinfo($_FILES["file"]["name"],PATHINFO_EXTENSION);//Get File Extension
       
       $fileType=strtolower($fileType); //convert to lowercase
       $uploadFile=$fileName.rand(1000,10000).".".$fileType; //Set File name with Random Number
       
       //Check File Size greater than 300KB
       if($_FILES["file"]["size"]>300000){
      echo "Upload Failed.File Size is too Large!!!";
       }
       //Check File Extension
       else if($fileType != 'jpg'&&$fileType != 'jpeg'&&$fileType != 'png' && $fileType != 'gif'){
      echo "Upload Failed.Invalid File!!!";
       }
       
       //Upload File
       else{
      $imgData =addslashes (file_get_contents($_FILES['file']['tmp_name']));
      $sql="insert into users(image) values('{$imgData}')";
      if($con->query($sql)){
        echo "{$fileName} Upload Success";
      }
      }
    }
    ?>
    
    <form method='post' action='<?php echo $_SERVER["REQUEST_URI"]; ?>' enctype='multipart/form-data'>
     <input type='file' name='file' required>
     <input type='submit' value='Upload' >
    </form>
  </body>
</html>

<?php 
 $sql="select * from users";
 $res=$con->query($sql);
 if($res->num_rows>0){
   while($row=$res->fetch_assoc()){
	echo "<img src='data:image;base64,".base64_encode($row["image"])."' style='height:180px;width:200px;margin-left:22px;'>";
   }
 }
?>