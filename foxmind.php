<?php
/*
Template Name: foxmind
*/
?>

<!-- Здесь html/php код шаблона -->

<?php get_header('child'); ?>
<body <?php body_class(); ?>>
<img id="img" src="http://localhost/wordpress/wp-content/uploads/2018/09/logo.png" width="47" height="52" alt="logo">
<div id="header">
    <a id="menu_on" href="#nav">
    <div class="icon-container"><svg viewBox="0 0 8 8" class="icon">
        <use xlink:href="#menu">
        <path d="M0 1v1h8v-1h-8zm0 2.969v1h8v-1h-8zm0 3v1h8v-1h-8z" id="menu"></path>
    </use></svg>
    </div>
    </a>
</div>
<div id="nav">
    <a id="close" href="#close">
        <div class="icon-container">
            <svg viewBox="0 0 8 8" class="icon">
                <use xlink:href="#x"></use>
                <path d="M1.406 0l-1.406 1.406.688.719 1.781 1.781-1.781 1.781-.688.719 1.406 1.406.719-.688 1.781-1.781 1.781 1.781.719.688 1.406-1.406-.688-.719-1.781-1.781 1.781-1.781.688-.719-1.406-1.406-.719.688-1.781 1.781-1.781-1.781-.719-.688z" id="x"></path>
            </svg>
        </div>
    </a>
        <ul>
            <li><a href="#nav">ГЛАВНАЯ СТРАНИЦА</a></li>
            <li><a href="#nav">СТРАНИЦА 1</a></li>
            <li><a href="#nav">СТРАНИЦА 2</a></li>
            <li><a href="#nav">СТРАНИЦА 3</a></li>
            <li><a href="#nav">СТРАНИЦА 4</a></li>
        </ul>
</div>
</div>
<div id="contain" class="contain">
     <div id="contain_header">
     <h3 id="h3">ЦЕНТР ОБУЧЕНИЯ</h3>
    </div>
    <div id="left" class="left">
        <div id="div_point_left">
        <a id="point_left" href="#left">&#9658</a>
        </div>
        <div id="left_content">
        <div class="block">
        <h4>ЛЕВЫЙ БЛОК</h4>
        </div>
        <ul>
            <li><a href="#left">ГАЛЕРЕЯ</a></li>
            <li><a href="#left">ОБУЧЕНИЕ</a></li>
            <li><a href="#left">ТЕСТЫ</a></li>
            <li><a href="#left">СОБЫТИЯ</a></li>
        </ul>
        </div>
    </div>
    <div id="right" class="right">
        <div id="right_content">
        <div>
         <div class="block">
        <h4>ПРАВЫЙ БЛОК</h4>
        </div>
        </div>
        <ul>
            <li><a href="#right">ГАЛЕРЕЯ</a></li>
            <li><a href="#right">ОБУЧЕНИЕ</a></li>
            <li><a href="#right">ТЕСТЫ</a></li>
            <li><a href="#right">СОБЫТИЯ</a></li>
        </ul>
          </div>
          <div id="div_point_right">
        <a id="point_right" style="float: right; display: none;" href="#right">&#9668</a>
    </div>
    </div>
</div>
</body>
</html>
