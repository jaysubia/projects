<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ninja Gold Game
    </title>
    
<style>
    .actionBoxes{
        display:inline-block;
        width:100px;
        height:200px;
        border:solid black 1px;
    }

    #gold{
        width:50px;
        display:inline-block;
        border:solid black 1px;
    }

    #activityBox{
        border:solid black 1px;
        width:400px;
        height:200px;
        overflow-y:scroll;
    }



</style>




</head>
<body>
        <h2>Your Gold:</h2>
        <?php  echo $this->session->userdata('gold'); ?>
        <form action="/Submission/reset">
            <input type='submit' name='reset' value='Start Over'>
        </form>

   <div class="actionBoxes">
        <h5>Farm</h5>
        <p>(earns 10-20 gold)</p>
        <form action="/Submission/farm" method="post">
            <input type="submit" name="farm" value="Find Gold!"/>          
        </form>

    </div>
   </div>
   <div class="actionBoxes">
        <h5>Cave</h5>
        <p>(earns 5-10 gold)</p>
        <form action="/Submission/cave" method="post">
            <input type="submit" name="cave" value="Find Gold!"/>           
        </form>

    </div>
   </div>
   <div class="actionBoxes">
        <h5>House</h5>
        <p>(earns 2-5 gold)</p>
        <form action="/Submission/house" method="post">
            <input type="submit" name="house" value="Find Gold!"/>           
        </form>

    </div>
   </div>
   <div class="actionBoxes">
        <h5>Casino</h5>
        <p>(earns/takes -100-100 gold)</p>
        <form action="/Submission/casino" method="post">
            <input type="submit" name="casino" value="Find Gold!"/> 
        </form>

    </div>
    <h6>Activities</h6>
<div id="activityBox">
    <?php
            $reversed = array_reverse($this->session->userdata('activities'));
            foreach ($reversed as $activity) 
            {
                echo $activity . "<br>";       
            }
            
        ?>
</div>
</body>
</html>