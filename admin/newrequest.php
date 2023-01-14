<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
error_reporting(0);

$conn = mysqli_connect("localhost","root","","studentconcession");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
	die('Could not connect: '.mysqli_connect_error());  
}

if($_GET['approve']){
    $tn=$_GET['approve'];
    $result = mysqli_query($conn, "UPDATE requestnew SET stat='Approved' WHERE fname= '$tn' ");
}
elseif($_GET['reject']){
    $tn=$_GET['reject'];
    $result = mysqli_query($conn, "UPDATE requestnew SET stat='Disapproved' WHERE fname= '$tn' ");
}


$result = mysqli_query($conn, "SELECT * FROM requestnew");
?>

<div class = "content">
            <div class = "container">
            <h1> Renewal Requests</h1>
             <?php
             error_reporting(0);
if (mysqli_num_rows($result) > 0) {
?> 
                <table class="table table-hover" >
                    <thead>
                        <tr>
                            
                            <th>Surname</th>             
                            <th>Firstname</th>
                            <th>Date of birth</th>
                            <th>Degree</th>
                            <th>Year</th>
                            <th>Duration</th>
                            <th>Class</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Adhaar</th>
                            <th>ID card</th>
                            <th>Status</th>
                                                      
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                        if($row['stat']=='Pending'){
                            echo '<tr>';
                            echo '<td>' . $row['surname'] . '</td>';                    
                            echo '<td>' . $row['fname'] . '</td>';                    
                            echo '<td>' . $row['dob'] . '</td>';                    
                            echo '<td>' . $row['degree'] . '</td>';                    
                            echo '<td>' . $row['years'] . '</td>';                    
                            echo '<td>' . $row['duration'] . '</td>';                    
                            echo '<td>' . $row['class'] . '</td>';                    
                            echo '<td>' . $row['sfrom'] . '</td>';                    
                            echo '<td>' . $row['sto'] . '</td>';                    
                            echo '<td><a href="http://localhost/php_workspace/Railway_concession_portal/' . $row['adhar'] . '">Adhaar</a></td>';                    
                            echo '<td><a href="http://localhost/php_workspace/Railway_concession_portal/' . $row['id'] . '">ID</a></td>';   
                            echo '<td>' . $row['stat'] . '</td>';
                            echo '<td>
                                    <a href="newrequest.php?approve=' . $row['fname'] . '" data-color="#265ed7">Approve</a>
                                    <a href="newrequest.php?delete=' . $row['fname'] . '" data-color="#e95959">Disapprove</a>
                                </td>';
                         
                            echo '</tr>'; 

                            $i++;
                        }
                    }
                      
                    ?>
                    </tbody>
                </table>
                    <?php 
                    error_reporting(0);
                }
                    else{
                    echo 'No New Request Remaining';
                    
                    }?>
                
               
            </div>
        </div>
        
                
               
            </div>
        </div>
        <script>

        </script>
    </body>
</html>