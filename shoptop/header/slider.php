<div class="adaptivn-slayder">
  <div class="parag">
  <img src="https://cdn2.downdetector.com/static/uploads/logo/Google-new_19.png" alt="Первый слайд">
  <div class="beksun-slayda">Ключевой кадр</div>
  </div>

  <div class="parag">
  <img src="https://cdn2.downdetector.com/static/uploads/logo/Google-new_19.png" alt="Второй слайд">
  <div class="beksun-slayda">Название темы</div>
  </div>

  <div class="parag">
  <img src="https://cdn2.downdetector.com/static/uploads/logo/Google-new_19.png" alt="Третий слайд">
  <div class="beksun-slayda">Заголовок слайда</div>
  </div>

  <a class="prev" onclick="minusSlide()">❮</a>
  <a class="next" onclick="plusSlide()">❯</a>
</div>

<div class="uneizmen-akemada">
  <span class="noguma-pomoki-kadra" onclick="currentSlide(1)"></span>  
  <span class="noguma-pomoki-kadra" onclick="currentSlide(2)"></span>  
  <span class="noguma-pomoki-kadra" onclick="currentSlide(3)"></span>  
</div>


<script type="text/javascript">
  var slideIndex = 1;
showSlides(slideIndex);

function plusSlide() {
  showSlides(slideIndex += 1);
}

function minusSlide() {
  showSlides(slideIndex -= 1);  
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("parag");
  var dots = document.getElementsByClassName("noguma-pomoki-kadra");
  if (n > slides.length) {
  slideIndex = 1
  }
  if (n < 1) {
  slideIndex = slides.length
  }
  for (i = 0; i < slides.length; i++) {
  slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
  dots[i].className = dots[i].className.replace("deystvuyus", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " deystvuyus";
}
  
</script>