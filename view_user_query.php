<?php
$title= "View Query";
require "session.php";
require "templates/header.php";

    $query = "SELECT * FROM querydb where user_id=".$_SESSION['id']."";
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
			<table class='table-bordered' style="width: 75%;text-align: center;">
				<tr>
					<td><strong>Sr. No.</strong></td>
                    <td><strong>Lab or Classroom</strong></td>
                    <td><strong>View</strong></td>
                    <td><strong>Description</strong></td>
                    <td><strong>Status</strong></td>
				</tr>
    <?php
	$counter = 1;
	while($user = mysqli_fetch_assoc($result)){
		?><tr>
			<td><?php echo $counter?></td>
            <td><?php echo $user['laborclass']?></td>
            <td style="test-align:center"><img src="<?php echo $user['image']?>" alt="Image" width="100" height="100"></td> 
            <td><?php echo $user['description']?></td>
            <td><?php echo $user['status']?></td>
        <?php
        echo    "</tr>";
        $counter++;
	}   
	echo "</table></center>";
    ?>
        <br><br>
        <h2 style="text-align:center;color:green">Thanks for your Query</h2>
        </div>
    </section>

    <?php
    }
    else{
    $_SESSION['error'] = "No Queries till date! Please add any";
    header("Location: index.php");
    die();
    }
	require "templates/footer.php";
?>