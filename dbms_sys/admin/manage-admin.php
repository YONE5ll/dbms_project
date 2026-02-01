<?php include('partials/menu.php');?>
   <div class="main-content" >
    <div class="wrapper">
        <h1>Manage admin</h1>


        <?php
        if(isset($_SESSION['add'])){
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }
?>
    <a href="add-admin.php" class="btn-primary">Add admin</a>
    <table class="table-full">
        <tr>
            <th>S.N</th>
            <th> full name</th>
            <th>username</th>
            <th>actions</th>
            
        </tr>

        <?php
        $sql="SELECT * FROM tbl_admin";

        $res=mysqli_query($conn,$sql);

        if($res==TRUE){
            //count rows to check whether we have data in database
            $count=mysqli_num_rows($res);//function to get all the rows in the database

            if($count>0){
                while($rows=mysqli_fetch_assoc($res)){
                    //while loop to get all the data from the database
                    //this loop will run as long as there is data in the database
//getting individual data
                    $id=$rows['id'];
                    $fullname=$rows['full_name'];
                    $username=$rows['username'];

                    ?>
 <Tr>
            <td><?php echo $id ?></td>
            <td><?php echo $fullname;?></td>
            <td><?php echo $username;?></td>
            <td>
               <a href="#" class="btn-secondary">Update admin</a>
               <a href="#" class="btn-secondary">Delete admin</a>
                
            </td>
        </Tr>
                    <?php
                }
            }
        }
        ?>

    </table>

 <?php include('partials/footer.php');?>


























