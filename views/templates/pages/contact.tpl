<html lang="ja">

<head>
<meta charset="utf-8">
<title>お問い合わせ - 中小企業向けの採用支援なら | 株式会社ツイング</title>
<meta name="description" content="中小企業向けの採用支援サイト。企業、学生、大学を繋ぐプラットフォーム">
<meta name="keywords" content="中小企業 採用 twing ツイング 株式会社ツイング 株式twing ついんぐ 株式会社ついんぐ 採用支援 就活 転職 学生 企業 大学 就職サイト 就活サイト">
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
{include file='common/header.tpl'}
<div class="contact-page__title">
  <div class="topSection__title">
    <h2 class="topSection__title__inner contact__title--sp">CONTACT</h2>
    <div class="topSection__title__horizontal-line horizontal-line contact--sp__horizontal-line--none">
      <span class="horizontal-line__inner js-horizontal-line-slide-in"></span>
    </div>
  </div>
  <div class="topSection__under-text">お問い合わせ先 </div>
  <div class="topSection__under-notice">※必ず全項目を入力してください。</div>
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
      <form class="contactForm" action="/confirm.php" method="POST">
        <div class="contactForm__item">
          <label class="contactForm__form-label" for="univ_name">大学名</label>
          <input type="text" name="univ_name" class="contactForm__form" id="univ_name" autofocus>
        </div>
        <div class="contactForm__item">
          <label class="contactForm__form-label" for="univ_department">学部・学科</label>
          <input type="text" name="univ_department" class="contactForm__form" id="department">
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
          <select name="select_request" class="contactForm__form contactForm__form-select" id="request">
            <option value="イベント参加希望">イベント参加</option>
            <option value="個人面談希望">個人面談希望</option>
            <option value="その他希望">その他</option>
          </select>
        </div>
        <div class="contactForm__item contactForm__item__btn">
          <input type="submit" value="内容を送信" class="contactForm__btn">
        </div>
      </form>
    </div>
    <div id="tab3" class="tab-pane">
      <form class="contactForm" action="/confirm.php" method="POST">
        <div class="contactForm__item">
          <label class="contactForm__form-label" for="univ_name">大学名</label>
          <input type="text" name="univ_name" class="contactForm__form" id="univ_name" autofocus>
        </div>
        <div class="contactForm__item">
          <label class="contactForm__form-label" for="univ_job_department">部署</label>
          <input type="text" name="univ_job_department" class="contactForm__form" id="department">
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
  </div>
</div>
{include file='common/footer.tpl'}
</body>

</html>
