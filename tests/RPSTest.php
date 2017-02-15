<?php
    require_once "src/RPS.php";

    class RPSTest extends PHPUnit_Framework_TestCase
    {

        function test_draw()
        {

            // /Arrange
            $test_RPS = new RPS;
            $input1= "rock";
            $input2= "rock";

            // /Act
            $result = $test_RPS->turn($input1, $input2);

            // /Assert
            $this->assertEquals("draw", $result);

        }

        function test_match()
        {
            //arrange
            $test_RPS = new RPS;
            $input1="rock";
            $input2="paper";

            //Act
            $result = $test_RPS->turn($input1, $input2);

            //assert
            $this->assertEquals("player2", $result);
        }
    }


?>
