<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <title>Document</title>
</head>

<body>
   
    <div class="container"><br>
    <h1 class="text-center">4. VERIFY PASSED FORMED AND DISPLAY INPUT VALUES</h1>
            <h2 style="margin-left:18%;font-weight:bold;color:#05f047;margin-bottom:-2%;">FILL-UP FORM</h2>
        <div class="row py-5 align-items-center" style="margin-left:9%;">
    
            <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                <form action="" name="post" method="POST">
                    <div class="row">
               
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0 ">
                                    <i class="fa fa-user text-muted " style="padding:10px;"></i>
                                </span>
                            </div>
                            <input id="name" type="text" name="name" placeholder="Name" class="form-control bg-white border-left-0 border-md border-info" style="padding:10px">
                        </div>

                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-map-marker text-muted" style="padding:10px;"></i>
                                </span>
                            </div>
                            <input id="address" type="text" name="address" placeholder=" Address" class="form-control bg-white border-left-0 border-md border-info" style="padding:10px" >
                        </div>

                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                            </div>
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted" style="padding:10px;"></i>
                                </span>
                            <input id="age" type="number" name="age" placeholder="Age"
                                class="form-control bg`-white border-left-0 border-md border-info" style="padding:10px">
                        </div>
  
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-phone text-muted" style="padding:10px;"></i>
                                </span>
                            </div>
                            <input id="contact" type="number" name="contact" placeholder="Contact Number"
                                class="form-control bg-white border-left-0 border-md border-info" style="padding:10px">
                        </div>

                        <div class="form-group col-lg-12 mx-auto mb-0">
                           <button class="btn btn-primary" name="post"><b>SUBMIT</b></button>
                        </div>

                    </div>
                </form>                          
            </div>
            <div class="col-md-7 col-lg-6 ml-auto">
                <div class="card border-primary bg-transparent border-success text-light mt-1" style="margin:50px;">
                    <div class="card-header text-center border-success"><h4><b>USER DATA<b></h4></div>
                    <div class="card-body">
                        <h4>
                            <?php
                                class FormVerification{
                                    public $name;
                                    public $address;
                                    public $age;
                                    public $contact;

                                    public function check(){
                                        if(isset($_POST['post'])){
                                            $name=$_POST['name'];
                                            $address=$_POST['address'];
                                            $age=$_POST['age'];
                                            $contact=$_POST['contact'];
                                            if(!empty($name) && (!empty($address)) && (!empty($age)) && (!empty($contact))){
                                                echo "<b class='text-info'>Name: &nbsp;&nbsp;</b>".$name;
                                                echo "<br><br><b class='text-info'>Address: &nbsp;&nbsp;</b>".$address;
                                                echo "<br><br><b class='text-info'>Age: &nbsp;&nbsp;</b>".$age;
                                                echo "<br><br><b class='text-info'>Contact Number: &nbsp;&nbsp; </b>".$contact;
                                            } 
                                        }
                                    }
                                } 
                                    
                                $form=new FormVerification();
                                $form->check();       
                            ?>
                        </h4>
                    </div>
                </div>
            </div>            
        </div>
    </div>

</body>
<style>
body{
    background-image: url('https://www.itl.cat/pngfile/big/226-2262901_png-abstract-background-hd.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
    font-family: monospaced;
}

.container{
    border: 2px solid white;
    box-shadow: 10px 10px 5px grey;
    margin-top:3%;
}

.container{
    background: rgb(4,0,0);
background: linear-gradient(0deg, rgba(4,0,0,0.9612219887955182) 0%, rgba(118,21,86,1) 34%, rgba(45,224,253,0.7651435574229692) 100%);
}

</style>
</html>