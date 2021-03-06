<?php /* Smarty version 2.6.30, created on 2017-08-01 01:43:32
         compiled from common/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_image', 'common/header.tpl', 4, false),)), $this); ?>
<header class="topHeader topHeader--sp">
  <div class="topHeader__logo">
    <a href="/pages/index">
      <?php echo smarty_function_html_image(array('file' => '/img/logo.png','alt' => 'logo','class' => 'topHeader__logo__image'), $this);?>

    </a>
  </div>
  <nav>
    <div class="topHeader__hamburger hamburger">
      <span class="hamburger__line hamburger__line--top"></span>
      <span class="hamburger__line hamburger__line--mid"></span>
      <span class="hamburger__line hamburger__line--bot"></span>
    </div>
    <div class="topHeader__hamburger__menu">
      <ul class="hamburger__gnavs">
        <a href="companyTop" class="link-underline--cancel">
          <li class="hamburger__gnavs__item">企業の方へ</li>
        </a>
        <a href="studentTop" class="link-underline--cancel">
          <li class="hamburger__gnavs__item">学生の方へ</li>
        </a>
        <a href="universityTop" class="link-underline--cancel">
          <li class="hamburger__gnavs__item">大学の方へ</li>
        </a>
        <a href="/pages/news" class="link-underline--cancel">
          <li class="hamburger__gnavs__item">ニュース</li>
        </a>
        <a href="/pages/about" class="link-underline--cancel">
          <li class="hamburger__gnavs__item">会社概要</li>
        </a>
        <a href="/pages/people" class="link-underline--cancel">
          <li class="hamburger__gnavs__item">プロフィール</li>
        </a>
        <a href="/pages/contact" class="link-underline--cancel">
          <li class="hamburger__gnavs__item">お問い合わせ</li>
        </a>
      </ul>
    </div>
  </nav>
</header>