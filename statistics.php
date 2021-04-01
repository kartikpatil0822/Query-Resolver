<?php
$title= "Statistics";
require "session.php";
require "templates/header.php";

    $query = "SELECT * FROM querydb";
	$result = mysqli_query($con,$query) or $err = mysqli_error($con);
	if(isset($err)){
		$_SESSION['error'] = "Unable to fetch Query!Please try again";
        header('Location: index.php');
        echo $err;
        die();
		
    }

    ?>
    <section id="hero" class="clearfix">
        
    <?php
    $pendingcount=0;
    $solvedcount=0;
    if (mysqli_num_rows($result) > 0) {
	while($user = mysqli_fetch_assoc($result)){
		if($user['status']=='pending'){
            $pendingcount++;
        }
        else if($user['status']=='accepted'){
            $solvedcount++;
        }
	}
	?>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Queries to Solve</h5>
                    <h1 class="card-text" style="color:red"><?php echo $pendingcount?></h1>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Solved Queries</h5>
                    <h1 class="card-text" style="color:green"><?php echo $solvedcount?></h1>
                </div>
                </div>
            </div>
        </div>
    </div>    
    </section>
    <?php
    }
    else{
        $_SESSION['error'] = "No Queries till date!";
        header("Location: index.php");
        die();
    }
	require "templates/footer.php";
?>