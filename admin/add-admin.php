<!-- Maded by Quan Nguyen on 27/9/2023 -->

<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>

        <br /><br />
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name</td>
                    <td><input type="text" name="full_name" placeholder="Enter your name"></td>

                </tr>
                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" placeholder="Your Username">
                    </td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="text" name="password" placeholder="Your Password">
                    </td>
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


<?php include('partials/footer.php'); ?>
<?php 
    //process the value from Form and Save it in Database
    //Check whether the button is clicked or not
    
    if(isset($_POST['submit']))
    {
        // BUtton Clicked
        
        //1. Get data from Form
        $full_name = $_POST['full_name'];    //nhận giá trị full_name từ ô
        $username = $_POST['username'] ;      //nhận gia trị username từ ô nhập
        $password = md5($_POST['password']);   //password encryption with md5

        //2. SQL query to save the data into database
        $sql = "INSERT INTO tbl1_admin SET
            full_name = '$full_name',
            username = '$username',
            password = '$password'
        ";
        //echo $sql;

        //3. execute Query and save data in database
        $conn = mysqli_connect('localhost', 'username','password') or die(mysqli_error()); //database connection
        $db_select = mysqli_select_db($conn, 'DBNAME') or die(mysqli_error());
        $res = mysqli_query($conn, $sql) or die(mysqli_error());


    }else{
        //Button not clicked
        echo "Button not clicked";
    }

?>