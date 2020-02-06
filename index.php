<?php
    // require "include/dbconfig.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mini-Project</title>
    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
    <!--Bootsrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <div class="container  mt-5">
        <h3>Add Info</h3>
        <div id="message" ></div>
        
        <div class="justify-content-center ">
            <form method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control w-25" id="name" value="">
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" class="form-control w-25" id="email" value="">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control w-25" id="pwd" value="">
                </div>
                <button type="submit" class="btn btn-primary" id="btn">Submit</button>
            </form>
        </div>
        
    </div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
<script src="jquery-3.3.1.min.js"></script>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->


<script>

    $(document).ready(function(){
        
        $('#btn').click(function(e){
            e.preventDefault();
            var name=$('#name').val();
            var email=$('#email').val();
            var pwd=$('#pwd').val();
            if(name=="" || email=="" || pwd==""){
                alert("Please Fill all fields");
            }else{
                
                $.ajax({
                    url:'crud.php',
                    method:'post',
                    data:{name:name,email:email,pwd:pwd},
                    success:function(response){
                        $('#message').html(response);
                    }
                });
            }
            
        });
    });
</script>
</body>
</html>