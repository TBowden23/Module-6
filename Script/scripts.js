const game = () => {
    let playerScore = 0;
    let computerScore = 0;
    let moves = 0;
    
 
    // Function to start gamer
    const playGame = () => {
        const fireBtn = document.querySelector('.fire');
        const waterBtn = document.querySelector('.water');
        const earthBtn = document.querySelector('.earth');
        const playerOptions = [fireBtn,waterBtn,earthBtn];
        const computerOptions = ['fire','water','earth']
    
         
        // Function to start playing game
        playerOptions.forEach(option => {
            option.addEventListener('click',function(){
                
                const movesLeft = document.querySelector('.movesleft');
                moves++;
                movesLeft.innerText = `Moves Left: ${5-moves}`;
                 
 
                const choiceNumber = Math.floor(Math.random()*3);
                const computerChoice = computerOptions[choiceNumber];

                // Function to check who wins
                winner(this.innerText,computerChoice)
                 
                // Calling gameOver function after 10 moves
                if(moves == 5){
                    gameOver(playerOptions,movesLeft);
                }
            })
        })

    }

    // Function to decide winner
    const winner = (player,computer) => {
        const result = document.querySelector('.winner');
        const playerScoreBoard = document.querySelector('.p-count');
        const computerScoreBoard = document.querySelector('.c-count');
        player = player.toLowerCase();
        computer = computer.toLowerCase();
        if(player === computer){
            result.textContent = 'Tie'
        }
        else if(player == 'fire'){
            if(computer == 'water'){
                result.textContent = 'Computer Won';
                computerScore++;
                computerScoreBoard.textContent = computerScore;

            }else{
                result.textContent = 'Player Won'
                playerScore++;
                playerScoreBoard.textContent = playerScore;
            }
        }
        else if(player == 'earth'){
            if(computer == 'fire'){
                result.textContent = 'Computer Won';
                computerScore++;
                computerScoreBoard.textContent = computerScore;
            }else{
                result.textContent = 'Player Won';
                playerScore++;
                playerScoreBoard.textContent = playerScore;
            }
        }
        else if(player == 'water'){
        if(computer == 'earth'){
            result.textContent = 'Computer Won';
            computerScore++;
            computerScoreBoard.textContent = computerScore;
        }else{
            result.textContent = 'Player Won';
            playerScore++;
            playerScoreBoard.textContent = playerScore;
        }
    }
}

// Function to run when game is over
const gameOver = (playerOptions,movesLeft) => {

    const chooseMove = document.querySelector('.move');
    const result = document.querySelector('.winner');
    const reloadBtn = document.querySelector('.restart');

    playerOptions.forEach(option => {
        option.style.display = 'none';
    })

  
    chooseMove.innerText = 'Game Over!!'
    movesLeft.style.display = 'none';

    if(playerScore > computerScore){
        result.style.fontSize = '2rem';
        result.innerText = 'You Won The Game'
        result.style.color = '#308D46';
    }
    else if(playerScore < computerScore){
        result.style.fontSize = '2rem';
        result.innerText = 'You Lost The Game';
        result.style.color = 'red';
    }
    else{
        result.style.fontSize = '2rem';
        result.innerText = 'Tie';
        result.style.color = 'grey'
    }
    reloadBtn.innerText = 'Restart';
    reloadBtn.style.display = 'flex'
    reloadBtn.addEventListener('click',() => {
        window.location.restart();
    })
}


 // Calling playGame function inside game
 playGame();
 
}

// // Calling the game function
 game();
