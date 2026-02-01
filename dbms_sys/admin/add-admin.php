<?php include('partials/menu.php');?>
<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>

        <form action="" method="POST">
            <table>
                <tr>
                    <td>full name:</td>
                    <td><input type="text" name="fullname" placeholder="enter your name"> </td>
                </tr>
                <tr>
                    <td>username:</td>
                    <td><input type="text" name="username" placeholder="your username"> </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" placeholder="enter your name"> </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="add admin">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php include('partials/footer.php');?>


<?php

//process the vaule from Form and save it in database

if(isset($_POST['submit']))
    {
        //get the data from the Form
        $fullname=$_POST['fullname'];
        $username=$_POST['username'];
        $password=$_POST['password'];

        //sql query to save data into databasw
 
        $sql="INSERT INTO tbl_admin SET
        full_name='$fullname',
        username='$username',
        password='$password'";

            //executing query and saving data into database
              $res=mysqli_query($conn,$sql) or die(mysqli_error());

if($res==TRUE){
$_SESSION['add']="Admin Added Successfully";
header("location:".SITEURl.'admin/manage-admin.php');
}
    else{
        $_SESSION['add']="Failed to Added Successfully";
header("location:".SITEURl.'admin/add-admin.php');

    }
    }


?>