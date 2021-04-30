<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
*{
    font-family: "Lucida Console", "Courier New", monospace;
}

.form-group{
    align-content: center;
    padding: 4%;
}
</style>
<body>

    <div class="container mt-5 text-center justify-align-content-center w-50">
        <div class="card border-info" style="width: 35rem;">
            <h1 class="card-title card-header bg-success text-light">2. ADD OPTION TO DROPDOWN ELEMENT</h1><br>
                <div class="card-body">
                    <form method="POST" name="post">
                        <label style="float:left;margin-top:-5%;margin-left:4%;font-weight:bold;color:magenta;">Dropdown Options: </label>
                        <div class="form-group" >
                            <select class="form-select form-select w-50 border-primary" style="float:left; margin-top:-3%">
                                <?php
                                    session_start();
                                        
                                    class userInput{                                           
                                        public $userInput;
                                            function __construct($userInput){
                                                $this->userInput = $userInput;
                                            }

                                            function addOption(){
                                                if(!isset($_SESSION['option'])){
                                                    $_SESSION['option'] = [];
                                                }
                                                array_push($_SESSION['option'],$this->userInput);
                                                            
                                                foreach ($_SESSION['option'] as $value) {
                                                    echo '<option value="'.$value.'">"'.$value.'"</option>' ;
                                                }
                                            }
                                        }

                                        if(isset($_POST['submit'])){
                                            $userInput = $_POST['input'];
                                            $input = new userInput($userInput);
                                            $input->addOption();
                                        }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control mt-3 mb-2 w-70" name="input" placeholder="Enter data">
                            <input type="submit" name="submit" value="SUBMIT" class="btn btn-outline-danger login_btn">
                        </div>
                
                    </form>
                </div>
        </div>
    </div>

</body>

</html>