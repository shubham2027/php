
<html>
    <body>
    <form action="" method="post">
        <h3>ONLINE QUIZ</h3>
        <p>WHAT IS 8+2=</p>
        <input type="radio" name="question1" value="10">10<br>
        <input type="radio" name="question1" value="8">8<br>
        <input type="radio" name="question1" value="12">12<br>
        <input type="radio" name="question1" value="9">9<br>
        <p>WHAT IS 5*2=</p>
        <input type="radio" name="question2" value="10">10<br>
        <input type="radio" name="question2" value="8">8<br>
        <input type="radio" name="question2" value="12">12<br>
        <input type="radio" name="question2" value="9">9<br>
        <p>WHAT IS 10-2=</p>
        <input type="radio" name="question3" value="10">10<br>
        <input type="radio" name="question3" value="8">8<br>
        <input type="radio" name="question3" value="12">12<br>
        <input type="radio" name="question3" value="9">9<br>
        
        <input type="submit" name="submit" id="submit" value="Submit">
    </form>
    <?php
    
    if (isset($_POST['submit'])) {
        $answers = array(
            'question1' => '10',
            'question2' => '10',
            'question3' => '8'
        );
        $score = 0;
        foreach ($answers as $key => $value) {
            if (isset($_POST[$key]) && $_POST[$key] == $value) {
                $score++;
            }
        }
        echo "Your score is: " . $score . "/3";
    }
    ?>
        
    </body>
</html>
