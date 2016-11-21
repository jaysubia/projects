<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generator</title>
    <style type="text/css">
       #container{


       }

       h4,h1{
        text-align: center;
       }

       

        #container{
        border: 1px solid;
        width:500px;
        margin-left: auto;
        margin-right:auto;
        }

        input{
        margin-left: 930px;
        margin-top:20px;
        margin-bottom: 20px;
        }

        a{
        margin-left: 950px;
        margin-top:40px;
        }
    </style>

    <?php
     if($this->session->userdata('string')){

        $string=$this->session->userdata('string');
     }else{

            $string='';
     }



    ?>
</head>
<body>
   
    
        
<form action="/Random/random_string" method="post">
        <h4>Random Word (Attempt #<?=$counter?>)</h4>
        <div id="container">
        <h1><?=$string?></h1>
        </div>
        <input type="submit" value="Generate!">
    </form>
    

    <a href="/Random/reset">Reset</a>

</body>
</html>