<?php use Octicons\Octicon; ?>
<body>
<header>
<nav class="navbar navbar-default navbar-static-top">
    <div class="hamburg" onclick="openPop('navimenu')"><?=Octicon::three_bars(); ?></div>
    <div class="container">
        <ul class="nav navbar-nav" id="navimenu">
            <li><a href="<?= $init->baseDir ?>/hako-main.php"><?=Octicon::home(); ?> TOP</a></li>
            <li><a href="<?= $init->baseDir ?>/hako-main.php#login"><?=Octicon::sign_in(); ?> 自分の島へ</a></li>
            <li><a href="<?= $init->baseDir ?>/hako-main.php#reise"><?=Octicon::milestone(); ?> 観光</a></li>
            <li><a href="<?= $init->baseDir ?>/hako-main.php?mode=conf"><?=Octicon::gear(); ?> 島の登録・設定変更</a></li>
            <li><a href="<?= $init->baseDir ?>/hako-ally.php"><?=Octicon::bookmark(); ?> 同盟管理</a></li>
            <li><a href="<?= $init->baseDir ?>/hako-main.php?mode=log"><?=Octicon::report(); ?> 最近の出来事</a></li>
            <!-- <li><a href="https://github.com/Sotalbireo/hakoniwa/wiki" target="_blank">Wiki</a></li> -->
            <li><a href="<?= $init->baseDir ?>/manual/"><?=Octicon::question(); ?> マニュアル</a></li>
        </ul>
    </div>
</nav>
</header>
<div class="top_spacer"></div>
<div class="container">
<?php if (DEBUG) {
    dump($_GET, $_POST);
} ?>
