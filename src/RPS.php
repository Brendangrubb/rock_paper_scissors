<?php
    class RPS
    {
        function turn($player1_input, $player2_input)
        {
            $possible_plays =
            [['rock', 'paper', 'player2'],
            ['rock', 'scissors', 'player1'],
            ['paper', 'scissors', 'player2'],
            ['paper', 'rock', 'player1'],
            ['scissors', 'rock', 'player2'],
            ['scissors', 'paper', 'player1']];

            if($player1_input == $player2_input)
            {
                return "draw";
            } else {
                foreach($possible_plays as $play){
                    if ($player1_input == $play[0] && $player2_input == $play[1])
                    {
                        return $play[2];
                    }
                }
            }
        }
    }

?>
