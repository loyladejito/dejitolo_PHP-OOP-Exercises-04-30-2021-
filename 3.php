<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Niconne&display=swap" rel="stylesheet">

    <title>Login Form</title>
    <style>
    
    </style>
</head>

<body>
    <h5>
        <?php
            class EmailValidation{
                public $email;
                public $regex= "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";

                public function check(){
                    if(isset($_POST['post'])){
                    $email=$_POST['email'];
                    if(preg_match( "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",$email)){                 
                        echo "<div class='alert alert-success text-center' role='alert'>Valid Email Address!</div>";
                    }else{
                        echo "<div class='alert alert-danger text-center' role='alert'>Invalid Email Address! Please Try Again!</div>";
                    }
                }
                }
            }
            $emailcheck= new EmailValidation();
            $emailcheck->check();
        ?>
    </h5>

    <div class="container mt-5 text-center justify-align-content-center w-50">
        <div class="card border-info" style="width: 35rem;">
            <h1 class="card-title card-header border-danger bg-success text-light">3. EMAIL VALIDATION</h1><br>
                <div class="card-body">
                    <form method="POST" name="post">
                        <div class="form-group">
                            <label><h5><b>Enter Email:</b></h5></label>
                            <input type="text" class="form-control w-50 border-info" style="float:right; margin-right:12%;margin-left:-8%" name="email" id="email"  placeholder="Email Address ...">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-info border-dark text-white"name="post" >SUBMIT</button><br><br>
                    </form>
                </div>
        </div>
    </div>        
</body>

<style>
*{
    font-family: "Lucida Console", "Courier New", monospace;
}
</style>

</html>