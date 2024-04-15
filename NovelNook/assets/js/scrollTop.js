// Показываем кнопку, если прокручена хотя бы половина страницы
  window.onscroll = function() {scrollFunction()};
  
  function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      document.getElementById("scrollToTopBtn").style.display = "block";
    } else {
      document.getElementById("scrollToTopBtn").style.display = "none";
    }
  }
  
  // Прокрутка вверх при нажатии на кнопку
  function scrollToTop() {
    document.body.scrollTop = 0; // Для Safari
    document.documentElement.scrollTop = 0; // Для Chrome, Firefox, IE и Opera
  }