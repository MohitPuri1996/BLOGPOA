<?php
include("includes/header.php");

if(isset($_GET['submit'])){
echo "hi";
$postname=$_GET['postname'];
$category=str_replace("_and_", " & ",$_GET['select']);//echo(str_replace("_and_", " & ",$row['catname']))
$date=$_GET['date'];
$body=$_GET['body'];
$aname=$_GET['aname'];
$imgname=$_GET['imgname'];

echo $aname,$body;

$error="";
$result="";
$success="";
try{
if(empty($postname)||empty($category)||empty($date)||empty($body)||empty($aname)){

    $error="Enter Complete details";
}

$postname=mysqli_escape_string($connect,(filter_var(strip_tags($postname),FILTER_SANITIZE_STRIPPED)));
 $category=mysqli_escape_string($connect,filter_var(strip_tags($category),FILTER_SANITIZE_STRIPPED));
    $date=mysqli_escape_string($connect,filter_var(strip_tags($date),FILTER_SANITIZE_STRIPPED));
 $body=mysqli_escape_string($connect,filter_var(strip_tags($body),FILTER_SANITIZE_STRIPPED));
 $aname=mysqli_escape_string($connect,filter_var(strip_tags($aname),FILTER_SANITIZE_STRIPPED));
 $imgname=mysqli_escape_string($connect,filter_var(strip_tags($imgname),FILTER_SANITIZE_STRIPPED));



//echo "<br>result" .$result;

if(empty($error)){  
echo "hi";
$sql="INSERT INTO posts(title,category,date,body,author,imgname) VALUES('$postname','$category','$date','$body','$aname','$imgname')";

echo "hi ";
$result=mysqli_query($connect,$sql);
if ($result) {
    echo "j";
    $success= "data has been successfullyy inserted";
   mysqli_close($connect);
}
echo "bye";}}
catch(\Exception $e){
    echo $e;



}


}


?>


<?php include("includes/sidebar.php");?>

        <div class="grid_10">
        
            <div class="box round first grid">
                <h2>Add New Post</h2>
                <div class="block">               
                 <form action="addpost.php" method="get">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Enter Post Title..." name="postname"class="medium" />
                            </td>
                        </tr>
                     
                        <tr>
                            <td>
                                <label>Category</label>
                            </td>
                            <td>
                                <select id="select" name="select">
                                    <option value="0" selected>Select</option>
                                <?php 

                                    
                                 while ($row = mysqli_fetch_assoc($result1)) {
  ?>
                                    <option value=<?php echo(str_replace(" & ","_and_",$row['catname']));?>><?php echo $row['catname'];?></option>
                                    <?php }?>
                                </select>
                            </td>
                        </tr>
                   
                    
                        <tr>
                            <td>
                                <label>Date Picker</label>
                            </td>
                            <td>
                                <input type="text" name="date"/>
                            </td>
                        </tr>
                       
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea name="body"  cols="100" rows="30"></textarea>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Author Name</label>
                            </td>
                            <td>
                                <input type="text" name="aname" placeholder="Enter Author name..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Image Name</label>
                            </td>
                            <td>
                                <input type="text" name="imgname" placeholder="Enter Image name..." class="medium" />
                            </td>
                        </tr>
                     
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
    <div id="site_info">
        <p>
         &copy; Copyright <a href="http://trainingwithliveproject.com">Training with live project</a>. All Rights Reserved.
        </p>
    </div>
</body>
</html>
