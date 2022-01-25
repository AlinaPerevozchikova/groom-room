<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>groom-room</title>
  <link href="./public/css/style.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <header>
      <div class="header">
        <h1 class="header-logo">GROOMING</h1>
        <p class="headr-text">Service fot dogs and cats</p>
      </div>
      <div class="menu">
        <a href="./index.php" class="menu-glav">ГЛАВНАЯ</a>
        <a href="./public/vkhod.php" class="menu-vhot">ВХОД</a>
      </div>
    </header>
    <div class="border"></div>
    <div class="content">
      <section>
        <div class="section">
          <div class="left-sec">
            <div class="left-sec_text">Профессиональная укладка<br>для ваших домашних<br>питомцев</div>
          </div>
          <div class="section-right">
            <div class="section-right_text">Создайте заявку</div>
            <div class="right-sec">
              <form action="" class="right-form">
                <input class="right-form-text" type="text" v-bind:value="vNickname" v-on:input="inNickname"
                  placeholder="Кличка животного" />
                <input class="right-form-text" type="text" v-bind:value="vService" v-on:input="inService"
                  placeholder="Услуга" />
                <button class="right-form-sub" type="button" @click="button">Записаться</button>
              </form>
            </div>
          </div>
        </div>
      </section>
      <div class="content-work">
        <h3 class="content-work_title">Наши работы</h3>
        <div class="content-work_gallery">
          <div class="content-gallery">
            <img src="./public/img/man.jpeg" alt="" class="gallery_img">
            <div class="gallery_service ser">Услуга: исклюзивный маникюр</div>
          </div>
          <div class="content-gallery">
            <img src="./public/img/ok.jpg" alt="" class="gallery_img">
            <div class="gallery_service ser">Услуга: индивидуальная стрижка и окраска</div>
          </div>
          <div class="content-gallery">
            <img src="./public/img/spa.jpg" alt="" class="gallery_img">
            <div class="gallery_service ser">Услуга: спа</div>
          </div>
        </div>
        <h3 class="content-work_title">Ваши заявки</h3>
        <div class="content-work_two">
          <div class="content-gallery" v-for="text in services">
            <img class="gallery_img" :src="text.url" alt="">
            <div class="gallery_text">{{text.name}}</div>
            <div class="gallery_service">Название услуги:</div>
            <select>
              <option>
                {{text.service}}
              </option>
              <option>маникюр</option>
              <option>стрижка</option>
              <option>окраска</option>
              <option>спа</option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="footer-text">groom-salon.com 2000-2999</div>
  </footer>
  </div>
  </div>


  <script src="./public/js/vue.js"></script>
  <script src="./public/js/script.js"></script>

</body>

</html>