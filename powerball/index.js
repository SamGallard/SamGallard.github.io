//POWERBALL NUMBERS

const button = document.getElementById("button");
const whiteBalls = document.querySelectorAll(".myLabels");
const redBall = document.getElementById("redball");

const min = 1;
const maxWhiteBall = 69;
const maxRedBall = 26;


button.onclick = function(){
    let generatedWhiteBalls = [];

    for (let i=0; i < 5; i++) {
        let ranWBall;
        
        do {
            ranWBall = Math.floor(Math.random()* maxWhiteBall) + min;
        }
        while (generatedWhiteBalls.includes(ranWBall));
        generatedWhiteBalls.push(ranWBall);
        
        whiteBalls[i].textContent = addLeadingZero(ranWBall);
    }

    let randomRedBall = Math.floor(Math.random() * maxRedBall) + min;
    redBall.textContent = addLeadingZero(randomRedBall);
};

function addLeadingZero(number) {
    return(number < 10 ? "0":"") + number;
}
