<?php include "lib/header.php" ?>


<?php 

    $message = '';
    $pos = '';

    if(isset($_POST['register'])){
        //take the data from the table 
        $username       = $_POST['fullname'];
        $position       = $_POST['position'];
        $position2      = $_POST['position2'];
        $designation    = $_POST['designation'];
        $address        = $_POST['address'];
        $email          = $_POST['email'];
        $contact        = $_POST['contact'];
        $facebook       = $_POST['facebook'];
        $twitter        = $_POST['twitter'];
        $google         = $_POST['google'];
        // for image or file type data 
        $image          = $_FILES['image']['name'];
        $image_tmp      = $_FILES['image']['tmp_name'];
        // file size 
        $file_size      = $_FILES['image']['size'];
        // file type 
        $file_type      = $_FILES['image']['type'];
        $file_ext       = strtolower(end(explode('.',$_FILES['image']['name'])));
        //image extension type 
        $extensions     = array("jpeg","jpg","png");
        // check file extension 
        if(in_array($file_ext,$extensions) === false){
            $message="extension not allowed, please choose a JPG, JPEG or PNG file.";
        }
        // check image file size 
        if($file_size > 2097152){
            $message='File size must be excately 2 MB';
        }

        if(empty($message) == true){
            //random number generator
            $number = rand(0,10000000);
            //set a random no infront of the image name
            $updatedName = $number.$image;
            // move image into the directory
            move_uploaded_file($image_tmp,"../img/comity/$updatedName");

            if(empty($username) || empty($designation) || empty($address) || empty($email) || empty($contact) || empty($updatedName)){
                $message = '<div class="alert alert-warning">Please Fillup all the Informations Correctly</div>';
            }else{
          
                $query = "INSERT INTO user (user_name,user_position,user_designation,user_address,user_mail,user_phone,facebook,    twitter,google,user_photo) VALUES ('$username','$position','$designation','$address','$email','$contact','$facebook','$twitter','$google','$updatedName')";
                $user_input = mysqli_query($conn, $query);

                if( !$user_input ){
                    die("Query Failed ". mysqli_error($conn));
                    $text="query failed";
                }
                else{
                    header("Location: view_all_member.php");
                    exit();
                }
                    
            }

        }else{
            echo $message;
        }
    }
?>


<!--Main content section start here-->
<div class="main-content">

    <div class="card">
      
        <div class="col-md-8 offset-md-2">
                    <span class="anchor" id="formUserEdit"></span>
                    <hr class="my-5">
                    <h3>Add a new member</h3>
                    <?php 
                        echo $message;
                    ?>
                    <!-- form user info -->
                    <div class="card card-outline-secondary">
                       
                        <div class="card-body">
                            <form class="form" role="form" method = "POST" enctype = "multipart/form-data" autocomplete="off" accept-charset="utf-8">

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Full Name</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" name="fullname" type="text" placeholder="Full Name" required="required">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Position</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" name="position" type="text" placeholder="Position" required="required">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Designation</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" name="designation" type="text" placeholder="Designation" required="required">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Address</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" name="address" type="text" placeholder="Address" required="required">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" name="email" type="email" placeholder="email@gmail.com" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Contact No</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" name="contact" type="text" placeholder="Contact Number" required="required">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Profile Photo</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="file" name="image" value="" required="required">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="form-group col-md-3 offset-md-3">
                                        <div class="col-lg-9">
                                            <input class="form-control" name="address" type="text" placeholder="facebook link">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <div class="col-lg-9">
                                            <input class="form-control" name="address" type="text" placeholder="twitter">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <div class="col-lg-9">
                                            <input class="form-control" name="address" type="text" placeholder="google">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-9">
                                        <button type="submit" name="register" class="btn btn-md btn-primary" value="register">Register</button>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                    <!-- /form user info -->

                </div>
        
    </div>


</div>
<!--main content section end here-->
<?php include "lib/footer.php" ?>
