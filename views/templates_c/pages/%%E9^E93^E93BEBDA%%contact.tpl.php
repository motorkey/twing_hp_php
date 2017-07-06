<?php /* Smarty version 2.6.30, created on 2017-07-06 12:33:54
         compiled from contact.tpl */ ?>
<html lang="ja">

<head>
<meta charset="utf-8">
<title>お問い合わせ - 中小企業向けの採用支援なら | 株式会社ツイング</title>
<meta name="description" content=".....">
<meta name="keywords" content="...,...">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/initialize.css">
<link rel="stylesheet" href="/css/base.css">
<link rel="icon" href="/img/favicon.ico">
<link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
<script type="text/javascript" src="/node_modules/jquery/dist/jquery.min.js"></script>
<script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/top.js"></script>
<script type="text/javascript" src="/js/contact.js"></script>
</head>

<body class="contact" data-apy="spyscroll">

<header class="topHeader topHeader--sp">
  <div class="topHeader__logo">
    <a href="top.html">
      <img class="topHeader__logo__image" src="
      /img/logo.png" alt="logo">
    </a>
  </div>
  <nav>
    <div class="topHeader__hamburger hamburger hamburger--open">
      <span class="hamburger__line hamburger__line--top"></span>
      <span class="hamburger__line hamburger__line--mid"></span>
      <span class="hamburger__line hamburger__line--bot"></span>
    </div>
    <div class="topHeader__hamburger__menu">
      <ul class="hamburger__gnavs">
        <a href="company-top" class="link-underline--cancel">
          <li class="hamburger__gnavs__item">企業の方へ</li>
        </a>
        <a href="student-top" class="link-underline--cancel">
          <li class="hamburger__gnavs__item">学生の方へ</li>
        </a>
        <a href="university-top" class="link-underline--cancel">
          <li class="hamburger__gnavs__item">大学の方へ</li>
        </a>
        <a href="news" class="link-underline--cancel">
          <li class="hamburger__gnavs__item">ニュース</li>
        </a>
        <a href="about.html" class="link-underline--cancel">
          <li class="hamburger__gnavs__item">会社概要</li>
        </a>
        <a href="profile" class="link-underline--cancel">
          <li class="hamburger__gnavs__item">プロフィール</li>
        </a>
        <a href="contact.html" class="link-underline--cancel">
          <li class="hamburger__gnavs__item">お問い合わせ</li>
        </a>
      </ul>
    </div>
  </nav>
</header>

<div class="contact-page__title">
  <div class="topSection__title">
    <h2 class="topSection__title__inner contact__title--sp">CONTACT</h2>
    <div class="topSection__title__horizontal-line horizontal-line contact--sp__horizontal-line--none">
      <span class="horizontal-line__inner js-horizontal-line-slide-in"></span>
    </div>
  </div>
  <div class="topSection__under-text">お問い合わせ先</div>
</div>

<div class="contactNav">
  <div class="navPadding">
    <ul class="nav nav-tabs">
      <li class="nav-item active">
        <a href="#tab1" class="nav-link bg-info contactNav__title" data-toggle="tab">企業の方</a>
      </li>
      <li class="nav-item">
        <a href="#tab2" class="nav-link bg-info contactNav__title" data-toggle="tab">学生の方</a>
      </li>
      <li class="nav-item">
        <a href="#tab3" class="nav-link bg-info contactNav__title" data-toggle="tab">大学の方</a>
      </li>
    </ul>
  </div>

  <div class="tab-content contentBorder">
    <div id="tab1" class="tab-pane active">
      <form class="contactForm" action="/confirm.php" method="POST">
        <div class="contactForm__item contactForm--company">
          <label class="contactForm__form-label" for="company_name">御社名</label>
          <input type="text" name="company_name" class="contactForm__form" id="company_name" autofocus>
        </div>
        <div class="contactForm__item">
          <label class="contactForm__form-label" for="department">部署</label>
          <input type="text" name="department" class="contactForm__form" id="department">
        </div>
        <div class="contactForm__item">
          <label class="contactForm__form-label" for="name">お名前</label>
          <input type="text" name="name" class="contactForm__form" id="name">
        </div>
        <div class="contactForm__item">
          <label class="contactForm__form-label" for="email">メールアドレス</label>
          <input type="email" name="email" class="contactForm__form" id="email">
        </div>
        <div class="contactForm__item">
          <label class="contactForm__form-label" for="phone_number">電話番号</label>
          <input type="tel" name="phone_number" class="contactForm__form" id="phone_number">
        </div>
        <div class="contactForm__item">
          <label class="contactForm__form-label form-label--alignTop" for="request">ご要望</label>
          <textarea type="text" name="request" class="contactForm__form contactForm__form-require" id="request"></textarea>
        </div>
        <div class="contactForm__item contactForm__item__btn">
          <input type="submit" value="内容を送信" class="contactForm__btn">
        </div>
      </form>
    </div>
    <div id="tab2" class="tab-pane">
      <div class="contactForm">
        <div class="contactForm__item">
          <label class="contactForm__form-label" for="company_name">大学名</label>
          <input type="text" name="company_name" class="contactForm__form" id="univ_name" autofocus>
        </div>
        <div class="contactForm__item">
          <label class="contactForm__form-label" for="department">学部・学科</label>
          <input type="text" name="department" class="contactForm__form" id="department">
        </div>
        <div class="contactForm__item">
          <label class="contactForm__form-label" for="email">メールアドレス</label>
          <input type="email" name="email" class="contactForm__form" id="email">
        </div>
        <div class="contactForm__item">
          <label class="contactForm__form-label" for="phone_number">電話番号</label>
          <input type="tel" name="phone_number" class="contactForm__form" id="phone_number">
        </div>
        <div class="contactForm__item">
          <label class="contactForm__form-label" for="request">問い合わせ理由</label>
          <select name="request" class="contactForm__form" id="request">
            <option value="a">イベント参加</option>
            <option value="b">個人面談希望</option>
            <option value="c">その他</option>
          </select>
        </div>
        <div class="contactForm__item contactForm__item__btn">
          <input type="submit" value="内容を送信" class="contactForm__btn">
        </div>
      </div>
    </div>
    <div id="tab3" class="tab-pane">
      <div class="contactForm">
        <div class="contactForm__item">
          <label class="contactForm__form-label" for="company_name">大学名</label>
          <input type="text" name="company_name" class="contactForm__form" id="univ_name" autofocus>
        </div>
        <div class="contactForm__item">
          <label class="contactForm__form-label" for="department">部署</label>
          <input type="text" name="department" class="contactForm__form" id="department">
        </div>
        <div class="contactForm__item">
          <label class="contactForm__form-label" for="name">お名前</label>
          <input type="text" name="name" class="contactForm__form" id="name">
        </div>
        <div class="contactForm__item">
          <label class="contactForm__form-label" for="email">メールアドレス</label>
          <input type="email" name="email" class="contactForm__form" id="email">
        </div>
        <div class="contactForm__item">
          <label class="contactForm__form-label" for="phone_number">電話番号</label>
          <input type="tel" name="phone_number" class="contactForm__form" id="phone_number">
        </div>
        <div class="contactForm__item">
          <label class="contactForm__form-label form-label--alignTop" for="request">ご要望</label>
          <textarea type="text" name="request" class="contactForm__form contactForm__form-require" id="request"></textarea>
        </div>
        <div class="contactForm__item contactForm__item__btn">
          <input type="submit" value="内容を送信" class="contactForm__btn">
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="footer">
  <div class="footer--left">
    <div class="footer__logo">
      <img class="footer__logo__image", src="/img/logo-2.png" alt="logo">
    </div>
  </div>
  <div class="footer--right footer__gnavs">
    <ul class="footer__gnavs--left">
      <li class="footer__gnavs__item">・
        <a href="company-top" class="link-underline--cancel">企業の方へ</a>
      </li>
      <li class="footer__gnavs__item">・
        <a href="student-top" class="link-underline--cancel">学生の方へ</a>
      </li>
      <li class="footer__gnavs__item">・
        <a href="university-top" class="link-underline--cancel">大学の方へ</a>
      </li>
    </ul>
    <ul class="footer__gnavs--right">
      <li class="footer__gnavs__item">・
        <a href="news.html" class="link-underline--cancel">ニュース</a>
      </li>
      <li class="footer__gnavs__item">・
        <a href="about.html" class="link-underline--cancel">会社概要</a>
      </li>
      <li class="footer__gnavs__item">・
        <a href="#" class="link-underline--cancel">プロフィール</a>
      </li>
      <li class="footer__gnavs__item">・
        <a href="contact.html" class="link-underline--cancel">お問い合わせ</a>
      </li>
    </ul>
  </div>
  <div class="footer__copyright">
    <span>© 2017 Anivia Works</span>
  </div>
</footer>

</body>

</html>