<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
  <link rel="stylesheet" href="./RoyalMintsVIP/style.css" media="screen and (max-width: 768px)" >
</head>
<body>
  <div id="index">
    <div class="pc">
      <img src="https://cdn.discordapp.com/attachments/759981236063043594/1157716805859680481/pc-main-min.jpg" alt="">
      <button class="header-button about" onclick="scrollByPercentage(8)"></button>
      <button class="header-button campaign" onclick="scrollByPercentage(15)"></button>
      <button class="header-button features" onclick="scrollByPercentage(22)"></button>
      <button class="header-button voice" onclick="scrollByPercentage(41)"></button>
      <button class="header-button price" onclick="scrollByPercentage(15)"></button>
      <button class="header-button buynow click-area"></button>
      <div class="click-area pc-area1">
      </div>
      <div class="click-area pc-area2">
      </div>
      <div class="click-area pc-area3">
      </div>
    </div>
    <div class="sp">
      <div class="click-area sp-area1">
      </div>
      <div class="click-area sp-area2">
      </div>
      <div class="click-area sp-area3">
      </div>
      <div class="click-area sp-area4">
      </div>
      <div class="click-area sp-area5">
      </div>
      <img src="./RoyalMintsVIP/img/sp-buynow.jpg" class="header" alt="">
      <div class="sp-spacer"></div>
      <img src="./RoyalMintsVIP/img/sp-mainvisual.jpg" alt="">
      <img src="./RoyalMintsVIP/img/sp-about.jpg" alt="">
      <img src="./RoyalMintsVIP/img/sp-campaign.jpg" alt="">
      <img src="./RoyalMintsVIP/img/sp-features-01.jpg" alt="">
      <img src="./RoyalMintsVIP/img/sp-features-02.jpg" alt="">
      <img src="./RoyalMintsVIP/img/sp-features-03.jpg" alt="">
      <img src="./RoyalMintsVIP/img/sp-voice-01.jpg" alt="">
      <img src="./RoyalMintsVIP/img/sp-voice-02.jpg" alt="">
      <img src="./RoyalMintsVIP/img/sp-campaign.jpg" alt="">
      <img src="./RoyalMintsVIP/img/sp-qa-01.jpg" alt="">
      <img src="./RoyalMintsVIP/img/sp-qa-02.jpg" alt="">
      <img src="./RoyalMintsVIP/img/sp-campaign.jpg" alt="">
      <img src="./RoyalMintsVIP/img/image.jpg" alt="">
      <img src="./RoyalMintsVIP/img/sp-buynow.jpg" alt="">
    </div>
    <dialog id="dialog">
      <div class="dialog_inner">
        <stripe-buy-button
          buy-button-id="buy_btn_1NsJ04AUc6SfmWZAyvn9ix7E"
          publishable-key="pk_live_51Nq6mzAUc6SfmWZAETWhXRP4DiAVo2VXDxoGPcrYtMd0gglYsrVFvIDMdWhRizxTyf5YBYoGtBctx7rPhfk9BQg000T1IP27Lt"
        >
        </stripe-buy-button>
      </div>
    </dialog>
  </div>
  <script async
    src="https://js.stripe.com/v3/buy-button.js">
  </script>
  <?php wp_footer(); ?>
</body>
</html>
<script>
  const clickElements = document.getElementsByClassName('click-area');
  for (let i = 0; i < clickElements.length; i++) {
        clickElements[i].addEventListener('click', () => {
          dialog.showModal();
        });
      }
  dialog.addEventListener('click', (e) => {
    if (!e.target.closest('.dialog_inner')) {
      dialog.close();
    }
  });
  const scrollByPercentage = (percentage) => {
    const scrollableElement = document.getElementById('index');
    const scrollAmount = (percentage / 100) * scrollableElement.scrollHeight;
    window.scrollBy(0, scrollAmount);
  }
  // メディアクエリの条件を設定
const mediaQuery = window.matchMedia("(max-width: 768px)");

// .pcクラスと.spクラスの要素を取得
const pcElements = document.querySelectorAll(".pc");
const spElements = document.querySelectorAll(".sp");

// メディアクエリがマッチしたときのコールバック関数
function handleMediaQueryChange(event) {
  if (event.matches) {
    // メディアクエリがマッチした場合の処理
    pcElements.forEach((element) => {
      element.style.display = "none"; // .pcクラスの要素を非表示にする
    });
    spElements.forEach((element) => {
      element.style.display = "flex"; // .spクラスの要素を表示する
    });
  } else {
    // メディアクエリがマッチしない場合の処理
    pcElements.forEach((element) => {
      element.style.display = "flex"; // .pcクラスの要素を表示する
    });
    spElements.forEach((element) => {
      element.style.display = "none"; // .spクラスの要素を非表示にする
    });
  }
}

// メディアクエリの状態に変更があった場合にコールバック関数を呼び出す
mediaQuery.addListener(handleMediaQueryChange);

// 初期状態でメディアクエリの状態を確認
handleMediaQueryChange(mediaQuery);

</script>
<style>
  body {
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #000;
  }
  #index {
    width: 100%;
  }
  .pc {
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
  }
  .sp {
    width: 100%;
    display: none;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
  }
  img {
    width: 100%;
    height: auto;
  }
  .pc-area1 {
    width: 44vw;
    height: 15vw;
    position: absolute;
    top: 93vw;
    cursor: pointer;
    z-index: 100;
    /* background-color: aliceblue; */
  }
  .pc-area2 {
    width: 44vw;
    height: 15vw;
    position: absolute;
    top: 290vw;
    cursor: pointer;
    z-index: 100;
    /* background-color: aliceblue; */
  }
  .pc-area3 {
    width: 44vw;
    height: 15vw;
    position: absolute;
    top: 440vw;
    cursor: pointer;
    z-index: 100;
    /* background-color: aliceblue; */
  }
  .sp-area1 {
    width: 34vw;
    height: 15vw;
    position: absolute;
    top: 0vw;
    right: 0;
    cursor: pointer;
    z-index: 100;
    /* background-color: aliceblue; */
  }
  .sp-area2 {
    width: 90vw;
    height: 33vw;
    position: absolute;
    top: 330vw;
    cursor: pointer;
    z-index: 100;
    /* background-color: aliceblue; */
  }
  .sp-area3 {
    width: 90vw;
    height: 33vw;
    position: absolute;
    top: 1200vw;
    cursor: pointer;
    z-index: 100;
    /* background-color: aliceblue; */
  }
  .sp-area4 {
    width: 90vw;
    height: 33vw;
    position: absolute;
    top: 1540vw;
    cursor: pointer;
    z-index: 100;
    /* background-color: aliceblue; */
  }
  .sp-area5 {
    width: 35vw;
    height: 16vw;
    position: absolute;
    top: 1622vw;
    right: 0;
    cursor: pointer;
    z-index: 100;
    /* background-color: aliceblue; */
  }
  dialog {
    padding: 0;
  }
  .header {
    position: fixed;
    top: 0;
  }
  .sp-spacer {
    width: 100%;
    height: 40px;
  }
  .header-button {
    width: 8%;
    height: 60px;
    position: absolute;
    z-index: 100;
    cursor: pointer;
    border: none;
    background-color: transparent;
    outline: none;
  }
  .about {
    top: 0px;
    left: 42%;
  }
  .campaign {
    top: 0px;
    left: 51%;
  }
  .features {
    top: 0px;
    left: 61%;
  }
  .voice {
    top: 0px;
    left: 71%;
  }
  .price {
    top: 0px;
    left: 80%;
  }
  .buynow {
    top: 0px;
    left: 88%;
  }
</style>