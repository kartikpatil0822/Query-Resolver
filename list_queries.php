<?php
$title= "Query List";
require "session.php";
require "templates/header.php";

    $query = "SELECT * FROM querydb";
	$result = mysqli_query($con,$query) or $err = mysqli_error($con);
	if(isset($err)){
		$_SESSION['error'] = "Unable to fetch Query!Please try again";
        header('Location: index.php');
        die();
    }

if (mysqli_num_rows($result) > 0) {
    ?>
    <section id="hero" class="clearfix">
        <div class="container-fluid">
			<center>
			<table class='table-bordered' style="width: 75%">
				<tr>
					<td><strong>Sr. No.</strong></td>
					<td><strong>Email</strong></td>
                    <td><strong>Lab or Classroom</strong></td>
                    <td><strong>View</strong></td>
				</tr>
    <?php
	$counter = 1;
	while($user = mysqli_fetch_assoc($result)){
        if($user['status']=='pending'){
		echo "<tr>
			<td>".$counter."</td>
            <td>".$user['user_email']."</td>
            <td>".$user['laborclass']."</td>
            <td><a href='view_query.php?id=".$user['id']."'><button type='button' class='btn btn-success'>View</button></td>";
            echo    "</tr>";
            $counter++;
        }
        else{
            $_SESSION['flash'] = "No Queries till date";
            header("Location: index.php");
            die();
        }
	}
    
	echo "</table></center>";
    ?>
        <br><br>
        <h2 style="text-align:center;color:red">Your pending Queries</h2>
        </div>
    </section>    
<?php
    }
    else{
        $_SESSION['flash'] = "No Queries till date";
        header("Location: index.php");
        die();
    }
	require "templates/footer.php";
?>