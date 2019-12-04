<style>
    .photos_recettes{
        width:400px;
        height:200px;
    }
    /* Собственно сам слайдер */
.slider{
    max-width: 90%;
    position: relative;
    margin: auto;
    height: 300px;
    margin-bottom: 15px;
}
/* Картинка мастабируется по отношению к родительскому элементу */
.slider .item img {
    object-fit: cover;
    width: 100%;
    height: 300px;
    border: none !important;
    box-shadow: none !important;
}
/* Кнопки вперед и назад */
.slider .prev, .slider .next {
    cursor: pointer;
    position: absolute;
    top: 0;
    top: 50%;
    width: auto;
    margin-top: -22px;
    padding: 16px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
}
.slider .next {
    right: 0;
    border-radius: 3px 0 0 3px;
}
/* При наведении на кнопки добавляем фон кнопок */
.slider .prev:hover,
.slider .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
}
/* Заголовок слайда */
.slideText {
    position: absolute;
    color: #fff;
    font-size: 35px;
    /* Выравнивание текста по горизонтали и по вертикали*/
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    /* Тень*/
    text-shadow: 1px 1px 1px #000, 0 0 1em #000;
}
/* Кружочки */
.slider-dots {
    text-align: center;
}
.slider-dots_item{
    cursor: pointer;
    height: 12px;
    width: 12px;
    margin: 0 2px;
    background-color: #ddd;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
}
.active,
.slider-dots_item:hover {
    background-color: #aaa;
}
/* Анимация слайдов */
.slider .item {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
}
@-webkit-keyframes fade {
    from {
        opacity: .4
    }
    to {
        opacity: 1
    }
}
@keyframes fade {
    from {
        opacity: .4
    }
    to {
        opacity: 1
    }

   
}

</style>

<div class="slider">
    <div class="item">
    <a href="pages/main-snacks1.php"><img class="photos_recettes" src="images/snacks_repeat.png"></a>
        <div class="slideText">Apple Cinnamon Muffins</div>
    </div>

    <div class="item">
    <a href="pages/main-snacks2.php"><img class="photos_recettes" src="images/avocadoToast.jpg"></a>
        <div class="slideText">Avocado Toast</div>
    </div>

    <div class="item">
    <a href="pages/main-snacks3.php"><img class="photos_recettes" src="images/snack2.png"></a>
        <div class="slideText">Apple pie snack mix</div>
    </div>

    <a class="prev" onclick="minusSlide()">&#10094;</a>
    <a class="next" onclick="plusSlide()">&#10095;</a>
</div>

<div class="slider-dots">
    <span class="slider-dots_item" onclick="currentSlide(1)"></span> 
    <span class="slider-dots_item" onclick="currentSlide(2)"></span> 
    <span class="slider-dots_item" onclick="currentSlide(3)"></span> 
</div>




<script>/* Индекс слайда по умолчанию */
var slideIndex = 1;
showSlides(slideIndex);

/* Функция увеличивает индекс на 1, показывает следующй слайд*/
function plusSlide() {
    showSlides(slideIndex += 1);
}

/* Функция уменьшяет индекс на 1, показывает предыдущий слайд*/
function minusSlide() {
    showSlides(slideIndex -= 1);  
}

/* Устанавливает текущий слайд */
function currentSlide(n) {
    showSlides(slideIndex = n);
}

/* Основная функция слайдера */
function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("item");
    var dots = document.getElementsByClassName("slider-dots_item");
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
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}
</script>