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
  <div id="thanks">
    <img src="./RoyalMintsVIP/img/law.jpg" class="pc" alt="">
    <img src="./RoyalMintsVIP/img/sp-law.jpg" class="sp" alt="">
  </div>
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
  #thanks {
    width: 100%;
  }
  img {
    width: 100%;
    height: auto;
  }
  .sp {
    display: none;
  }
  @media screen and (max-width: 768px) {
    .pc {
      display: none;
    }
    .sp {
      display: block;
    }
  }
  </style>
