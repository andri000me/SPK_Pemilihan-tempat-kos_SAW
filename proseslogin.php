 <?php 

require_once('koneksi.php');
session_start();
    if (isset($_POST['submit'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];


        if (empty($_POST['username']) || empty($_POST['password'])) {
            header("location:login.php?empty= tolong diisi");
        }else{

                $query = "SELECT * FROM user WHERE 
                username='".$_POST['username']."' and password='".$_POST['password']."'";
                $result = mysqli_query($dbconnect, $query);
                if (mysqli_fetch_assoc($result)) {
                    
                    $_SESSION['User'] = $_POST['username'];
                    header("location:index.php");
                }else{
                    header("location:login.php?Invalid= Tolong dicek kembali username dan password");
                }
        }
    }else{
      echo "Tidak bekerja";
    }

   ?>