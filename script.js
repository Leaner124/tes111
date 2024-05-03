let score = 0;

function handleClick() {
  score++;
  const scoreElement = document.getElementById('score');
  scoreElement.innerText = score;
  scoreElement.style.fontSize = '30px';
  setTimeout(() => {
    scoreElement.style.fontSize = '36px';
  }, 300);
}

document.getElementById('clickButton').addEventListener('click', handleClick);
