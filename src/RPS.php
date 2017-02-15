<?php
    class RPS
    {
        public $player1_input;
        public $player2_input;

        function __construct($player1_input, $player2_input)
        {
            $this->player1_input = $player1_input;
            $this->player2_input = $player2_input;
        }


        function turn($player1_input, $player2_input)
        {
            $possible_plays =   [['p1'=>'rock', 'p2'=>'paper', 'win'=>'player2'],
                                ['p1'=>'rock', 'p2'=>'scissors', 'win'=>'player1'],
                                ['p1'=>'paper', 'p2'=>'scissors', 'win'=>'player2'],
                                ['p1'=>'paper', 'p2'=>'rock', 'win'=>'player1'],
                                ['p1'=>'scissors', 'p2'=>'rock', 'win'=>'player2'],
                                ['p1'=>'scissors', 'p2'=>'paper', 'win'=>'player1']];


            if($player1_input == $player2_input)
            {
                return "draw";
            } else {
                foreach($possible_plays as $play){
                    if ($player1_input == $play["p1"] && $player2_input == $play["p2"])
                    {
                        return $play["win"];
                    }
                }
            }
        }
    }

?>
