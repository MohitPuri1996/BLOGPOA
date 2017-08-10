<?php 
include("connections/connections.php");
if(isset($_GET['cat'])){
  $s=str_replace("_and_", " & ",$_GET['cat']);
 
$category=mysqli_real_escape_string($connect,$s);
$query="SELECT * FROM posts WHERE category='$s'";

}


?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Plan of Action</title>

    <link href="css/blog.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
   
           
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <div id="category">
     <?php include("menu.php");?>
    <br>
    <br>
    <br>
    <!--Banner Ends-->
    <div class="container" id="content">
        
         <br>
        
 <h1 style="text-align:center"><?php echo $s;?></h1>
         <?php 
         
         
//$query="SELECT * FROM posts WHERE category='$category'";

$result1=mysqli_query($connect,$query);
//echo $result1;
        while ($row = mysqli_fetch_assoc($result1)){


          ?>
       
    <div class='pro_part col-xs-12 col-sm-6 col-md-4 col-lg-4'>
    <?php if(isset($row['imgname'])){
                if($row['imgname']=="no")
                    $img="img/poa.jpg";
                else
                $img ="img/".$row['imgname'];
            ?>
      <div class='h1' id='try' style='background-image: url("<?php echo $img;?>")';
background-position: center;background-size:cover;'><a href='post.php'></a><?php }?>

<div class='h2'>
          <div class='fl'><span><a href="post.php?pid=<?php echo $row['id'];?>">  <?php echo $row['category'];?></a></span></div><br>

<div class='f2'><span><a href="post.php?pid=<?php echo $row['id'];?>">  <?php echo $row['title'];?>.</a></span></div><br>
          <div class='f3'><span><a href="post.php?pid=<?php echo $row['id'];?>"> <?php echo $row['author'];?></a></span></div>  </div>
    
       
       <div class='clear'></div>
      </div>
    </div>
<?php 
          

}            ?>
        
        <div class="row load">
            <div class="col-xs-12 col-sm-12 col-lg-4 col-md-4 col-lg-offset-4 col-md-offset-4"> <a href="#" class="btn btn-lg btn-success">LOAD MORE</a></div></div>

                 
        <div class="row">
            <div id="left-wrapper" class="col-xs-12 col-sm-12 col-lg-8 col-md-8">

                <section id="right">

                    <div class="mini-posts">

                        <h2 id="heading">Browse Our Other Genres</h2><br/>

                        
                        <!-- Mini Post -->


                        <article class="mini-post col-xs-12 col-sm-12 col-lg-6 col-md-6">

                            <header>
                                <h3><a href="" id="genre">Lifestyle</a></h3>
                            </header>
                            <a href="" class="image"><img src="img/lifestyle.jpg" alt="" /></a>
                        </article>



                        <article class="mini-post col-xs-12 col-sm-12 col-lg-6 col-md-6">

                            <header>
                                <h3><a href="" id="genre">Entertainment</a></h3>
                            </header>
                            <a href="" class="image"><img src="img/enter.jpg" alt="" /></a>
                        </article>



                        <article class="mini-post col-xs-12 col-sm-12 col-lg-6 col-md-6">

                            <header>
                                <h3><a href="" id="genre">Art,Culture &amp; Heritage</a></h3>
                            </header>
                            <a href="" class="image"><img src="img/art.jpg" alt="" /></a>
                        </article>

                        <article class="mini-post col-xs-12 col-sm-12 col-lg-6 col-md-6">

                            <header>
                                <h3><a href="" id="genre">Health &amp; Wellness</a></h3>
                            </header>
                            <a href="" class="image"><img src="img/health.jpg" alt="" /></a>
                        </article>



                        <article class="mini-post col-xs-12 col-sm-12 col-lg-6 col-md-6">

                            <header>
                                <h3><a href="" id="genre">Fashion &amp; Beauty</a></h3>
                            </header>
                            <a href="" class="image"><img src="img/fashion2.jpg" alt="" /></a>
                        </article>

                        <article class="mini-post col-sm-12 col-xs-12 col-lg-6 col-md-6">

                            <header>
                                <h3><a href="" id="genre">Travel &amp; Adventure</a></h3>
                            </header>
                            <a href="" class="image"><img src="img/travel2.jpg" alt="" /></a>
                        </article>

                    </div>
                </section>


            </div>
            <div id="right-wrapper" class="col-xs-12 col-sm-12 col-lg-4 col-md-4">

                <!-- Posts List -->
                <section id="right" class="row">
                    <div>
                        <br>
<ul class="posts col-xs-12 col-sm-12 col-lg-12 col-md-12">

                            <h1 id="heading">Reccent Post</h1>

                            <?php 
                            $p=1;

$query="SELECT * FROM posts LIMIT 4";
$result=mysqli_query($connect,$query);
                            while ($row = mysqli_fetch_assoc($result)){
                            ?>
                                <li style='padding:5px;'>
                                        <article>
                                            <header>
<HEAD>
                                                <h3><a href='post.php?pid=<?php echo $row['id'];?>' id='genre'><?php echo $row['title'];?></a></h3>
                                                <p><?php echo $row['author'];?></p>
                                                <time class='published' datetime='2017-08-2'><?php echo $row['date'];?></time>

                                               
                                                <time class='published' ><?php echo $row['category'];?></time>
<!-- d6b50480983b95cf39058442325e382bbaf57ae4-->
                                            </header>
                                            
                                            <a href='post.php?pid=<?php echo $row['id'];?>' class='image'><img src='<?php echo"img/".$row['imgname'];?>' alt='' /></a>
                                        </article>
                                    </li>
                              <?php 
                            }
                        ?>

                        </ul>                    </div>
                </section>


            </div>
        </div>
    </div>


         <?php include("footer.html");?>
                    </div>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>