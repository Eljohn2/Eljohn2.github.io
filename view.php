<?php
include'connection.php';
?>
<Style>
table{
    font-family: Arial, sans-serif;
            background-image:url(database.png);
            background-size:100%;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
}
td {
    color:black;
    font:bold;
    text-align:left;

}

</Style>
<table  border="5px" cellpadding="10px" cellspacing="5">
    <tr>
        <th>Full Name</th>
        <th>Course</th>
        <th>ID Number </th>
      
    </tr>
<?php
$query  = "SELECT * FROM php";
$data=mysqli_query($conn, $query);
$result="mysqli_num rows($query)";
if ($result){
    while($row= mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $row['Fullname']; ?>
            <td><?php echo $row['course']; ?>
            <td><?php echo $row['IDnumber']; ?>
         </td> 
        </tr>
        <?php
    }
}
else
{
    ?>
    <tr>
       <td>No record found</td>

    </tr>
    <?php
}
?>
</table>
