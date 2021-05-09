<?php include('includes/header.php');?>
<div class="page db-social albums">
<?php include('includes/header_section.php');?>
    <!-- Begin Page Content -->
    <div class="page-content d-flex align-items-stretch">
        <?php include('includes/navbar.php');?>
    </div>
        <!-- End Left Sidebar -->
        <!-- Begin Content -->
        <div class="content-inner compact">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-11">
                        <!-- Begin Page Header-->
                        <div class="page-header pr-0 pl-0">
                            <div class="d-flex align-items-center">
                                <h2 class="page-header-title"><?php echo $_GET['name'];?></h2>
                            </div>
                 
                        </div>
                        <div class="gallery" style="background-color: white"><br><br>
                        <?php 
                        // Image extensions
                        $image_extensions = array("png","jpg","jpeg","gif");
                        $id=$_GET['id'];
                        $name=$_GET['name'];
                        $count = 1;
                        $sql="select * from images where holder_id='$id' and album_name='$name'";
                        $result=mysqli_query($connect,$sql);
                        while($row=mysqli_fetch_array($result))
                        {
                            $location=$row['location'];
                            $image_name=$row['image_name'];
                        
                        ?>
                            <!-- Image -->
                            <a href="<?= $location; ?>">
                            &nbsp;&nbsp;&nbsp;&nbsp;<img src="../controller/uploads/album/<?php echo $image_name;?>" target="_blank" width="200px" height="200px">&nbsp;
                            </a> 
                            <?php
                                // Break
                                if( $count%4 == 0){
                                ?>
                                    <div class="clear"><br></div>
                                <?php    
                                }
                                $count++;     
                         } echo'<br> <br><br> <br>'; ?>   
                                
                        </div> <br> 
                    </div>
                </div>
            </div>
        </div>
</div>
        
        <?php include('includes/footer.php');?>
        <!-- Script -->
        <script type='text/javascript'>
        $(document).ready(function(){
             $('.gallery').photobox('a',{ time:0 });
            
        });
        </script>

        <!-- Script -->
        <script src='layout/jquery-3.3.1.js' type='text/javascript'></script> 
        <script type="text/javascript" src="layout/photobox/jquery.photobox.js"></script>