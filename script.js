let score = 0;

function handleClick() {
  score++;
  const scoreElement = document.getElementById('score');
  scoreElement.innerText = score;
}

// Добавляем обработчик события 'touchstart' для предотвращения приближения экрана при быстрых нажатиях
document.getElementById('clickButton').addEventListener('touchstart', function(event) {
  event.preventDefault(); // Предотвращаем стандартное действие браузера
  handleClick(); // Вызываем функцию обработки клика
});

// Добавляем обработчик события 'click' для обычных кликов мышью
document.getElementById('clickButton').addEventListener('click', handleClick);
