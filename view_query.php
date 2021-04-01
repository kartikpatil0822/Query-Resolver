<?php
$title= "View Query";
require "session.php";
require "templates/header.php";

    $query = "SELECT * FROM querydb where id=".$_GET['id']."";
	$result = mysqli_query($con,$query) or $err = mysqli_error($con);
	if(isset($err)){
		$_SESSION['error'] = "Unable to fetch Query!Please try again";
        header('Location: index.php');
        die();
		
    }


    while($user = mysqli_fetch_assoc($result)){
        if($user['status']=='pending'){
    ?>
    <section id="hero" class="clearfix" style="padding-top: 20px;">
    <div class="container" style="text-align: center">
        <table style="margin-left: 40%;margin-bottom: 20px;">
        <tr>
            <td>Lab Or Classroom: </td>
            <td><input type="text" value="<?php echo $user['laborclass']?>"></td>
        </tr>
        <tr>
            <td>Image: </td>
            <td><!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                View Image
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Image</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="text-align: center">
                                <img src="<?php echo $user['image']?>" alt="Image" width="700" height="500">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>  
                </div>
            </td>
        </tr>
        <tr>
            <td>Description: </td>
            <td><input type="text" value="<?php echo $user['description']?>"></td>
        </tr>
        <tr>
        
            <td style="padding-left:40%"><a href='update_query.php?id="<?php echo $user['id']?>"'><button type='button' class='btn btn-success'>Resolved</button></td>
        </tr>
        </table>
    </div>
</section>
    <?php    
        }
        else{
            $_SESSION['flash'] = "No Queries till date";
            header("Location: index.php");
            die();
        }
	}

	require "templates/footer.php";
?>