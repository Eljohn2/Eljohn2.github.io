<?php
include'connection.php';
?>
<!DOCTYPE html>
<html >
<head>
    
    <title>MySQLI Connection</title>
    <style>
         body {
            background-image: url(database.png);
            background-size: 100%;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: rgb(0, 0, 0,0.5);
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        label{
            color:black;
            font-size: 20px;
        }
    input{  
        color:blue;  
    }
    
    </style>
</head>
<body>
    <div>
       
        <form action="" method="POST">
            <h1>Student Database</h1>
             <label for="Name">Full Name: </label><br>
            <input type="text" name="fullname">
            <br>
            <label for="name">Course: </label ><br>
            <input type="text" name="course"
            ><br>
            <label for="name">ID Number: </label ><br>
            <input type="text" name="IDnumber"
            ><br><br> 

            <input  type="submit" name ="btn_save" value="Submit">
           <button><a href="view.php">view</a></button>
        </form>
    </div> 
    <?php
if (isset($_POST['btn_save'])){
    $fname = $_POST['fullname'];
    $course = $_POST['course'];
    $idn = $_POST['IDnumber'];

    $query= "INSERT INTO php (FullName,Course,IDNumber) VALUES('$fname','$course','$idn')";
    $data = mysqli_query($conn,$query);
    if($data){
        ?>
        <script type="text/javascript">
            alert("Record has been succesfully added");
    </script>
    <?php        
}
else
 {
    ?>
    <script type="text/javascript">
        alert("Please try again");
</script>
<?php
 }
}
?>
</body>
</html>

