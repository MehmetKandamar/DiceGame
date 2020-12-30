<!DOCTYPE html>
<html lang="en">
<title>Dice Game</title>
<link rel="stylesheet" type="text/css" href="style.css" >
<body>
<div id="all">
    <h1 id="heading">This is not only a game but also last chance to be a rich man!<br><small>The only thing you are going to do is to guess which number the dice will roll.</small></h1>

    <form action="" method="post">
        <div id="test-container">
            <p>MAKE YOUR GUESS: </p>
            <label for="select">
                <select class="form-control" id="select" name="dice">
                    <option value="">Choose</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </label>
            <button id="submit"  type="submit" name="roll" class="btn">Roll!</button>
        </div>
        <div id="ph">
            <?php
            $rand = rand(1,6);
            if(isset($_POST['roll']))
            {
                $dice = $_POST['dice'];
                if($dice == $rand)
                {
                    echo "<br>" . "Yeahhhh! You made the right choice, it is " . $rand . "!";
                }
                else{
                    echo "<br>" . "Sorry but you are wrong! The number rolled by the dice was " . $rand . " but the number you entered was " . $dice . "!";
                }
            }
            ?>
            <br>
            <br>
            <br>
            <?php
            switch ($rand){
                case '1' : ?><img src="zar1.jpg" alt="Dice number 1"><?php
                    break;
                case '2' :?><img src="zar2.png" alt="Dice number 2"><?php
                    break;
                case '3' : ?><img src="zar3.png" alt="Dice number 3"><?php
                    break;
                case '4' :?><img src="zar4.png" alt="Dice number 4"><?php
                    break;
                case '5' : ?><img src="zar5.png" alt="Dice number 5"><?php
                    break;
                case '6' :?><img src="zar6.png" alt="Dice number 6"><?php
                    break;
            }

            ?>
        </div>
    </form>
</div>
</body>
</html>

