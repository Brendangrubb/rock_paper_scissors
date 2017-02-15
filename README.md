# **Rock, Paper, Scissors**
#### Charles Peden & Brendan Grubb, 2/10/2017

&nbsp;
## Description
Recreate the game Rock, Paper, Scissors. For anyone who has never played it, here are the rules:

It is played by 2 people. Each person chooses "Rock", "Paper", or "Scissors" by forming a shape with their hand.
They choose at the same time, so that each person doesn't know what the other person has picked.
If one person chooses "Rock" and the other person picks "Scissors" then "Rock" wins. It's a game of combinations:

Rock v. Scissors = Rock wins
Rock v. Paper = Paper wins
Paper v. Scissors = Scissors wins

If both people choose the same thing, then it is a draw and nobody wins.


&nbsp;
## Specifications

|Behavior|Input|Output|
|--------|-----|------|
| Program recognizes when both users have entered the same input and declares a draw | player 1: rock, player2: rock | draw |
| Program parses input from both users and correctly declares a winner and a loser | player 1: rock player2: paper | player2 wins |


&nbsp;
## Setup/Installation Requirements
##### _To view and use this application:_
* You will need the dependency manager Composer installed on your computer to use this application. Go to [getcomposer.org] (https://getcomposer.org/) to download Composer for free.
* Go to my [Github repository] (https://github.com/Brendangrubb/address_book)
* Download the zip file via the green button
* Unzip the file and open the **_rock_paper_scissors-master_** folder
* Open Terminal, navigate to **_rock_paper_scissors-master_** project folder, type **_composer install_** and hit enter
* Navagate Terminal to the **_rock_paper_scissors-master_/web_** folder and set up a server by typing **_php -S localhost:8000_**
* Type **_localhost:8000_** into your web browser
* The application will load and be ready to use!

&nbsp;
## Known Bugs
* No known bugs

&nbsp;
## Technologies Used
* PHP
* Silex
* Twig
* Composer
* Bootstrap
* CSS
* HTML

&nbsp;
_If you have any questions or comments about this program, you can contact me at [brendangrubb@gmail.com](mailto:brendangrubb@gmail.com)._

Copyright (c) 2017 Brendan Grubb

This software is licensed under the GPL license
