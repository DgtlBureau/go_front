<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");

$ip = $_SERVER['HTTP_CLIENT_IP']
    ? $_SERVER['HTTP_CLIENT_IP']
    : ($_SERVER['HTTP_X_FORWARDED_FOR']
        ? $_SERVER['HTTP_X_FORWARDED_FOR']
        : $_SERVER['REMOTE_ADDR']);
if ($ip != '92.119.90.196') {
    die(bin2hex(random_bytes(20)));
}
?>
<div class="container_detail">
    <div class="row_detail">
        <div class="detail_back">В каталог</div>
        <div class="detail_main">
            <div class="detail_slider">
                <div class="slider">
                    <div class="item_slider">
                        <img src="/local/templates/new_ru/img/shop_banner.png" alt="Первый слайд">
                        <div class="slideText">Заголовок слайда 1</div>
                    </div>
                    <div class="item_slider">
                        <img src="/local/templates/new_ru/img/shop_banner.png" alt="Второй слайд">
                        <div class="slideText">Заголовок слайда 2</div>
                    </div>
                    <div class="item_slider">
                        <img src="/local/templates/new_ru/img/shop_banner.png" alt="Третий слайд">
                        <div class="slideText">Заголовок слайда 3</div>
                    </div>
                    <div class="item_slider">
                        <img src="/local/templates/new_ru/img/shop_banner.png" alt="Третий слайд">
                        <div class="slideText">Заголовок слайда 3</div>
                    </div>
                </div>

                <div class="slider-dots">
                    <span class="slider-dots_item" onclick="currentSlide(1)">
                        <img src="/local/templates/new_ru/img/shop_banner.png" alt="">
                    </span> 
                    <span class="slider-dots_item" onclick="currentSlide(2)">
                        <img src="/local/templates/new_ru/img/shop_banner.png" alt="">
                    </span> 
                    <span class="slider-dots_item" onclick="currentSlide(3)">
                        <img src="/local/templates/new_ru/img/shop_banner.png" alt="">
                    </span>
                    <span class="slider-dots_item" onclick="currentSlide(4)">
                        <img src="/local/templates/new_ru/img/shop_banner.png" alt="">
                    </span> 
                </div>
            </div>
            <div class="detail_info">
                <div class="detail_title">Футболка с принтом</div>
                <div class="article">Артикул: 5689865</div>
                <div class="size_choose">
                    <div class="title_small">Выберите размер</div>
                    <ul class="size_items">
                        <li class="size_item">XS</li>
                        <li class="size_item">XS</li>
                        <li class="size_item">XS</li>
                        <li class="size_item">XS</li>
                        <li class="size_item">XS</li>
                    </ul>
                </div>
                <div class="print_block">
                    <div class="title_small">Выберите размер</div>
                    <div class="jercy_select">
                        <select name="" id="" class="jercy" placeholder="Ваша надпись">
                            <option value="">тест</option>
                            <option value="">тест</option>
                            <option value="">тест</option>
                        </select>
                    </div>
                    <div class="jercy_input">
                        <input type="text" class="family" placeholder="Фамилия">
                        <input type="text" class="name" placeholder="Имя">
                    </div>
                </div>
                <div class="price_block">
                    <div class="price">2 500 ₽</div>
                    <div class="basket_button">
                        <svg width="26" class="basket_svg" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.5556 0L25.8475 23.2558C25.9272 24.6895 24.8295 25.9163 23.3958 25.996C23.3237 25.9993 23.3237 25.9993 23.2515 26H2.6C1.16406 26 0 24.8359 0 23.4C0.000333719 23.3639 0.000500579 23.3459 0.00100097 23.3279C0.00150135 23.3098 0.00233526 23.2918 0.00400308 23.2558L1.29599 0H24.5556ZM3.75523 2.60008L2.59967 23.4001H23.2512L22.0957 2.60008H3.75523ZM9.02676 5.2002H6.42676V8.4502C6.42676 11.5711 9.44697 14.3002 12.9268 14.3002C16.4065 14.3002 19.4268 11.5711 19.4268 8.4502V5.2002H16.8268V8.4502C16.8268 10.0731 15.0261 11.7002 12.9268 11.7002C10.8274 11.7002 9.02676 10.0731 9.02676 8.4502V5.2002Z" fill="#000"></path>
                        </svg>
                        <a href="" class="basket_url">Купить</a>
                    </div>
                </div>
                <div class="desc_block">
                    <div class="title_small">Описание товара</div>
                    <p class="desc">Несколько лет назад мы решили популяризировать любительский хоккей и создать престижный дивизион с шикарным</p> 
                </div>
                <div class="structure">
                    <div class="bold">Состав</div>
                    <p class="desc">100% хлопок</p>
                </div>
                <div class="delivery">
                    
                    Доставка в пункты выдачи или курьером
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Собственно сам слайдер */
.slider{
    max-width: 100%;
    position: relative;
    margin-bottom: 15px;
}
/* Картинка мастабируется по отношению к родительскому элементу */
.slider .item_slider img {
    object-fit: cover;
    width: 100%;
    height: 100%;
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
.slider-dots_item{
    cursor: pointer;
    width: 130px;
    vertical-align: middle;
    margin: 0 2px;
    height: 130px;
    display: inline-block;
    transition: background-color 0.6s ease;
}

.slider-dots_item img {
    height: 100%;
    width: 100%;
    object-fit: cover;
}

.active,
.slider-dots_item:hover {
    background-color: rgba(255, 255, 255, 0.8);
}
/* Анимация слайдов */
.slider .item {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
}

.item_slider {
    height: 400px;
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

.container_detail {
    width: 100%;
    margin: 0 auto;
}

.row_detail {
    padding: 100px 20px 25px;
}

.detail_main {
    display: flex;
}

.detail_slider {
    width: 39%;
    padding-right: 10px;
}

.detail_info {
    width: 60%;
    background-color: #141414;
    padding: 20px 55px 0;
}

.slider-dots {
    width: 100%;
    white-space: nowrap;
    overflow: hidden;
    overflow-x: auto;
}


::-webkit-scrollbar {
  width: 3px;
  height:3px;
  background-color: #ccc;
  margin-top:10px;
}


::-webkit-scrollbar-thumb {
    margin-top:10px;
    background-color: #fff;
    border-radius: 9em;
    box-shadow: inset 1px 1px 10px #4b4b4b93;
}

.detail_title {
    font-size: 2em;
    font-weight: 600;
    padding-bottom: 10px;
}

.article {
    font-size: 0.8em;
    color: rgba(255, 255, 255, 0.8);
}

.title_small {
    font-weight: 600;
    padding-top: 25px;
    font-size: 1.2em;
}

li {
    list-style: none;
}

ul.size_items {
    display: flex;
    width: 250px;
    justify-content: space-around;
    padding-top: 12px;
}

li.size_item {
    border: 1px solid #cfcfcf;
    padding: 10px;
    font-size: 0.7em;
}

.price_block {
    display: flex;
    width: 350px;
    align-items: center;
    padding-top: 35px;
    justify-content: space-between;
}

.price {
    font-size: 1.5em;
    font-weight: 700;
}

.basket_button {
    padding: 5px 40px 10px;
    background-color: #fff;
    align-items: center;
    display: flex;
}

svg.basket_svg {
    width: 20px;
    padding-right: 8px;
    padding-top: 3px;
}

a.basket_url {
    color: #010101;
    font-size: 0.8em;
    font-weight: 500;
}

p.desc {
    font-size: 1em;
    color: rgba(255, 255, 255, 0.8);
    padding-top: 13px;
    width: 400px;
}

.structure {
    padding-top: 10px;
    font-size: 0.9em;
}

.bold {
    font-size: 1.1em;
    padding-top: 10px;
}

.delivery {
    padding: 20px 0 30px;
    font-size: 1em;
}

.jercy_select {
    padding: 20px 0;
}

select.jercy {
    background-color: #232323;
    border: #232323;
    color: #fff;
    padding: 13px;
    width: 310px;
}

input.family {
    background-color: #232323;
    border: #232323;
    width: 160px;
    padding: 13px;
}

input.name {
    background-color: #232323;
    border: #232323;
    padding: 13px;
    width: 94px;
}

select::-ms-expand {
  display: none;
}

@media (max-width: 800px) {
    .detail_main {
        display: block;
    }
    .detail_slider {
        width: 100%;
        margin-bottom: 30px;
        padding-right: 0;
    }
    .detail_info {
        width: 95%;
        padding: 20px 18px 0;
    }
    .slider-dots_item {
        cursor: pointer;
        height: 12px;
        width: 12px;
        margin: 0 8px;
        background-color: rgba(255, 255, 255, 0.4);
        display: inline-block;
        transition: background-color 0.6s ease;
    }
    .slider-dots {
        text-align: center;
    }
    .slider-dots_item img {
        display: none;
    }
    .active {
        background-color: rgba(255, 255, 255, 0.8);
    }
    .price_block{
        width: auto;
    }
    p.desc{
        width: auto;
    }
    .item_slider {
        height: 280px;
    }
}

</style>







<script>
    /* Индекс слайда по умолчанию */
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
    var slides = document.getElementsByClassName("item_slider");
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

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>