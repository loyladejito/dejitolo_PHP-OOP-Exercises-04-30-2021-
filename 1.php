<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <title>PHP OOP</title>
  </head>
  <body>
     <div class="container mt-5 text-center">
          <div class="card border-info" style="width: 38rem;">
               <h1 class="card-title card-header bg-success text-light">1. CALCULATE THE DIFFERENCE BETWEEN TWO DATES</h1>
               <div class="card-body">
                    <p class="card-text">
                         <?php


                              class Date{
                                   public $edate,$sdate;

                                   public function compareDate(){
                                        $sdate=new DateTime("1981-11-03");
                                        echo "<h5>Date 1: ".date_format($sdate,"Y/m/d")."</h5>";
                                        $edate=new DateTime("2013-09-04");
                                        echo "<h5>&nbsp;Date 2: ".date_format($edate,"Y/m/d")."</h5><br><hr>";
                                        $difference = $sdate->diff($edate);
                                        echo "<h3 class='text-warning'>Difference: </h3>" . "<h4 class='text-primary'>" . $difference->y . " years, " . $difference->m." months, ".$difference->d." days </h4>"; 

                                   }
                              }

                              $result= new Date();
                              $result->compareDate();
                         ?>
                    </p>
               </div>
          </div>
     </div>

<style>
*{
    font-family: "Lucida Console", "Courier New", monospace;
}
.container{
     margin-left: 26%;
     margin-right: 24%;
}
</style>
  </body>
</html>
