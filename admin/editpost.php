<?php include("includes/header.php");

//include("/../connections/connections.php");
if(isset($_POST['idsubmit'])){
$result2="";
$id=$_POST['id'];
echo $id;
     
$query2="SELECT * FROM posts WHERE id='$id'";
 $result2 = mysqli_query($connect,$query2);   
}

if(isset($_POST['submit'])){
echo "hi";
$id=$_POST['id'];
$postname=$_POST['postname'];
$category=$_POST['select'];
$date=$_POST['date'];
$body=$_POST['body'];
$aname=$_POST['aname'];
$imgname=$_POST['imgname'];

echo $aname;

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




//echo "<br>result" .$result;

if(empty($error)){  
echo "hi";
$sql="UPDATE posts SET title='$postname',category='$category',date='$date',body='$body',author='$aname',imgname='$imgname' WHERE id='$id';";

echo "hi ";
$result=mysqli_query($connect,$sql);
if ($result) {
    echo "j";
    $success= "updated";
   mysqli_close($connect);
    header("Location: addpost.php");
}
echo "bye";}}
catch(\Exception $e){
    echo $e;



}


}
?>

<?php include("includes/sidebar.php");?>
        <div>
        <form action="editpost.php" method="post">
        <input type="text" name="id">
        <input type="submit" name="idsubmit">
            
        </form>    
        </div>
        
        <div class="grid_10">
        
            <div class="box round first grid">
                <h2>Add New Post</h2>
                <div class="block">               
                 <form action="editpost.php" method="post">
                    <table class="form">
                       <?php 
                     
if(isset($_POST['idsubmit'])||isset($_POST['submit'])){
while($rows = mysqli_fetch_array($result2,MYSQL_ASSOC))
                        {   
                                        $title=$rows['title']; $body=$rows['body'];$author=$rows['author'];

                   ?>

                        <tr>
                            <td>
                                <label>ID</label>
                            </td>
                            <td>
                                <input type="text" value=<?php echo ($rows['id']); ?> name="id"/>
                            </td>
                        </tr>
                                         
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Enter Post Title..."   name="postname" class="medium" 
                                value="<?php echo $title ?>" />
                            </td> 
                        </tr>
                     
                        <tr>
                            <td>
                                <label>Category</label>
                            </td>
                            <td>
                                <input type="text" value=<?php echo ($rows['category']); ?> name="select"/>
                            </td>
                        </tr>
                   
                    
                        <tr>
                            <td>
                                <label>Date Picker</label>
                            </td>
                            <td>
                                <input type="text" value="<?php echo ($rows['date']); ?>" name="date"/>
                            </td>
                                                    </tr>
                                                   
                                                    <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea name="body" cols="100"  rows="30" ><?php echo $rows['body']; ?></textarea>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <label>Author Name</label>
                            </td>
                            <td>
                                <input type="text" name="aname" placeholder="Enter Author name..." class="medium" 
                                value="<?php echo $author ?>" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Image Name</label>
                            </td>
                            <td>
                                <input type="text" name="imgname" placeholder="Enter Image name..." class="medium" 
                                value="<?php echo $rows['imgname']; ?>" />
                            </td>
                        </tr>
                     
                                <tr>
 <?php } }?>                           <td></td>
                            <td>        
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div><div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            $('.datatable').dataTable();
            setSidebarHeight();
        });
    </script>
    <div id="site_info">
      <p>
         &copy; Copyright <a href="http://trainingwithliveproject.com">Training with live project</a>. All Rights Reserved.
        </p>
    </div>
       
</body>
</html>
