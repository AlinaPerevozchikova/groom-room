<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>groom-room</title>
  <link href="./css/vkhod.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <header>
      <div class="header">
        <h1 class="header-logo">GROOMING</h1>
        <p class="headr-text">Service fot dogs and cats</p>
      </div>
      <div class="menu">
        <a href="./public/index.html" class="menu-glav">ГЛАВНАЯ</a>
        <a href="./public/vkhod.html" class="menu-vhot">ВХОД</a>
      </div>
    </header>
    <div class="border"></div>
    <div class="content">
      <section>
        <div class="section">
          <div class="left-sec">
            <div class="left-sec_text">Войдите или зарегистрируйтесь</div>
            <p class="left-sec_subtext">Чтобы получить возможность<br>добавить заявку</p>
          </div>
          <div class="section-two">
            <img class="section-img" src="img/1.jpg" alt="">
            <div class="section-right">
              <div class="section-right_text">
                <a href="#" class="section-right_text-vkhod">Вход</a>
                <a href="#" class="section-right_text-reg">Регистрация</a>
              </div>
              <div id="right-sec_reg">
                <form action="">
                  <input type="login" class="login" v-bind:value="vLogin" v-on:input="inLogin" placeholder="Логин">
                  <input type="password" class="password" v-bind:value="vPassword" v-on:input="inPassword"
                    placeholder="Пароль">
                  <button class="right-sub" type="button" @click="click">Войти</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <footer>
      <div class="footer-text">groom-salon.com 2000-2999</div>
    </footer>
  </div>
  </div>

  <script src="./js/vue.js"></script>
  <script src="./js/script.js"></script>

</body>

</html>