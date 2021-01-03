

<!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
  <title>Home Page.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="style1.css" type="text/css">
   <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>
  <div id="background"></div>
  <div class="nav">
                <a class="a active" href="#">Home</a>
                <a class="b" href="#"> <i>Upload images</i></a>
                <a class="c" href="#"><i>Gallery</i></a>
                <a class="d" href="#"><i>ContactUs</i></a>
                
            </div>

            <div class="Upload">
              <h1><p>Image File Uploading.</p></h1>
              <form method="POST" action="?"  enctype="multipart/form-data"> 
              <input type="file"  name="file"  value="" /> <br>
            <br><br>
               
               <input type="submit" name="upload" value="Upload">

               <?php
			    $localhost="localhost";
			    $dbusername="root";
			    $dbpassword="";
			    $dbname="test";

			    $conn=mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
			  
			  if(isset($_POST["upload"])){

			   	$filename=$_FILES['file']['name'];

			   $filetmpname=$_FILES['file']['tmp_name'];
			   	$folder="upload/";
			   	move_uploaded_file($filetmpname,$folder.$filename);
			   	
			   
				 

				   	$sql="INSERT INTO image(file) VALUES ('$filename')";

				   $qry=mysqli_query($conn,$sql);

				   if($qry){
				   		if(move_uploaded_file($_FILES['file']['tmp_name'],$filename)){
				   			echo "image uploaded!..";
				   		}
				   		else{
				   			echo "not Uploaded..";
				   		}
   	
  						 }
   	 

  					 }

               ?>
              
                

                 </form> 
               

          

           </div> 

           <div class="contact">
                        <div class="contactform">
                            <form action="connect.php" method="post" id="postmethod">
                                <input type="text"  placeholder="First Name" class="inputtext" name="FirstName" required>
                                <input type="text"  placeholder="Last Name" class="inputtext"name="LastName" required> 
                                
                                <input type="email" placeholder=" Enter your Email" class="inputtext" name="Email" required>
                                
                                <textarea name="" id="" cols="04" rows="06" class="inputmessage" name="TextInput" placeholder="Your Message!!!...." required></textarea>

                                <input type="button"  value="Submit" class="submitbutton" id="submit" >
                            </form>
                        </div>
                    </div>

                      <div class="gallery">
                 	<h1><b><i>Gallery..</i></b></h1>

                 	<br><br>
                 	<p>while clicking on the images (single or double click), it will download automatically.</p>
                 	<?php
                 	$folder="upload/";
                 	if(is_dir($folder)){
			   		if($open=opendir($folder))
			   		{
			   			while (($file= readdir($open))!=false){
			   				# code...
			   				if ($file=='.'|| $file=='..') continue; 

			   				//while clicking on the images it will download automatically.

			   				echo '<a href="upload/'.$file.' " download="upload/'.$file.'" >
			   				<img src="upload/'.$file.'"  align="absbottom" width="150" height=150 style=" line-height:10px; float:left; padding-left: 10px;  display:block;  <br>" >';
			   					
			   				
			   			}
			   			closedir($open);
			   		}
			   	}
                 	?>
                 </div>
                    

                


            
  
   <script src="main1.js"></script> 
</body>
</html>