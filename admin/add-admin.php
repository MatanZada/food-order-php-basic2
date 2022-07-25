<?php include("./partials/menu.php"); ?>
<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>

        <br><br>

        <form action="" method="POST">

            <table>
                <tr>
                    <td><label>Full Name: <input type="text" name="full_name" placeholder="Enter Your Full Name"></label></td>
                </tr>
                <tr>
                    <td><label>Username: <input type="text" name="username" placeholder="Enter Your User Name"></label></td>
                </tr>
                <tr>
                    <td><label>Password: <input type="password" name="password" placeholder="Enter Your Password"></label></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>
    </div>
</div>


<?php include("./partials/footer.php"); ?>

<?php

//process the value from form and save it in database.
//check whether the button is clicked or not.

if (isset($_POST['submit'])) {
    //button click 
    //echo "button Clicked";

    //Getting the value from the form. 

    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']); //password encryption with MD5

    //2. SQL query to Save the data into database
    $sql = "INSERT INTO `tbl_admin`(`full_name`, `username`, `password`) VALUES ('$full_name','$username','$password')";

    // var_dump($sql);
    // $sql = "INSERT INTO `tbl_admin` SET
    //     full_name='$full_name',
    //     username='$username',
    //     password='$password',
    // ";

    //3. executing query and saving the data into database
    $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    //4. check whether the (query is executed) data is inserted or not and display appropriate massage

    if ($res == TRUE) {
        //data inserted
        echo "data inserted";
        //create a session variable to display message
        // $_SESSION['add'] = "Admin added successfully";
        //redirect page to manage admin
        // header("Location:" . SITEURL . 'admin/manage-admin.php');
    } else {
        //failed to inserted data
        echo "data not inserted";
        //create a session variable to display message
        // $_SESSION['add'] = "failed to add admin";
        //redirect page to Add admin
        // header("Location:" . SITEURL . 'admin/add-admin.php');
    }

    //Printing the SQL query to the screen. 
    // echo $sql;
}


?>