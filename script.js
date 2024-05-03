let score = 0;

function handleClick() {
  score++;
  const scoreElement = document.getElementById('score');
  scoreElement.innerText = score;
}

document.getElementById('clickButton').addEventListener('click', handleClick);
