<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>Mega Joker Casino</title>
    <link rel="shortcut icon" type="image/png" href="./images/favicon.ico" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/1.1.0/modern-normalize.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.min.css" />

    <!-- Yandex.Metrika counter -->
    <script src="js/YM.js"></script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/87229335" style="position:absolute; left:-9999px;" alt="YM" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
</head>

<?php

// Считываем строку в браузере и получаем данные
$url = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
$reffer = "https://".$_SERVER['HTTP_REFERER'];


if ($url === unparse_url(parse_url($url))) { }

// Функция распарсила данные на массивы
function unparse_url($parsed_url) { 
$host = isset($parsed_url['host']) ? $parsed_url['host'] : '';
$path = isset($parsed_url['path']) ? $parsed_url['path'] : '';
$query = isset($parsed_url['query']) ? '?' . $parsed_url['query'] : '';
$fragment = isset($parsed_url['fragment']) ? '#' . $parsed_url['fragment'] : '';

$str = $parsed_url['query'];
parse_str($str, $output);

// Переназначение массивов в переменные
$utm_source   = $output[utm_source];
$utm_medium   = $output[utm_medium];
$utm_campaign = $output[utm_campaign];
$utm_content  = $output[utm_content];
$utm_term   = $output[utm_term];
$utm_match   = $output[utm_match];
// $external_id   = $output[external_id];
$gclid   = $output[gclid];
$accid   = $output[accid];

?>

<?php
  echo '

<body>
    <header class="header">
        <div class="header__container">
            <h1 class="header__title">top online casino <br> brands 2022</h1>
        </div>
    </header>

    <main>
        <section class="section main">
            <div class="container main__block">
                <img srcset="./images/slotsstarburst.png 1x, ./images/slotsstarburst.png 2x"
                    src="./images/slotsstarburst.png" alt="Stars" class="main__slotsstar">

                <div class="main__box">
                    <div class="main__slots">
                        <img srcset="./images/HeySpin.png 1x, ./images/HeySpin.png 2x" src="./images/HeySpin.png"
                            alt="Brandlogo" class="main__logo">
                    </div>

                    <div class="main__items">
                        <ul>
                            <li class="main__item"><img srcset="./images/Stars.png 1x, ./images/Stars.png 2x"
                                    src="./images/Stars.png" alt="stars" class="main__5stars"></li>

                            <li class="main__item">
                                <p class="title__main">
                                    <span class="mark-color">100%</span> Up to <span class="mark-color">£50</span>
                                    +<br><span class="mark-color">100 </span>extra spins
                                    <a target="_blank" class="tc-addW desktop-addW"
                                        href="https://adv2click.com/6TQ3Vrzq?utm_term='.$utm_term.'&utm_campaign='.$utm_campaign.'&utm_match='.$utm_match.'&gclid='.$gclid.'&accid='.$accid.'">T&C’s
                                        apply</a>
                                    <span target="_blank" class="tc-addW mobile-addW tc-addW-1" data-window-open>T&C’s
                                        apply</span>
                                    <span class="addW-content addW-content-1">
                                        18+. New Players Only. Min. deposit £10. Max bonus allowed is £50. Offer
                                        duration upon receiving is valid for 2 weeks (14 days). Max Win from spins is
                                        £100. 35x wagering applies both for bonus and spins part. Spins are credited on
                                        specific games(Starburst). Spins expire after 24 hours if unused. Full T&Cs
                                        Apply.
                                    </span>
                                </p>
                            </li>

                            <li class="main__item-margin">
                                <form action="" target="_blank">
                                    <a href="https://adv2click.com/6TQ3Vrzq?utm_term='.$utm_term.'&utm_campaign='.$utm_campaign.'&utm_match='.$utm_match.'&gclid='.$gclid.'&accid='.$accid.'"
                                        target="_blank">
                                        <button class="button__main hvr-grow" type="button"
                                            style="margin-bottom: 0px;">Play now</button>
                            </li>
                            </a>
                            </form>
                    </div>
                    </ul>
                </div>
            </div>
        </section>

        <section class="grade section" id="grade">
            <div class="container">
                <h2 hidden>Rating</h2>
                <div class="grade__tc-links">
                    <a href="#grade" class="grade__link" data-window-open3>Advertiser Disclosure</a>
                    <a href="#grade" data-window-open2>18+ T&C Apply</a>
                </div>

                <!-- START OF THE BRANDS LIST-->
                <ul class="grade__list">

                    <!--
                <li>
                        <div class="grade__box">
                            <div class="grade__box-1">
                                <img srcset="./images/Casino888.png 1x, ./images/Casino888.png 2x" src="./images/Casino888.png"
                                    alt="Logo1" class="icon__grade width888">
                            </div>

                            <div class="grade__stars-box">
                                <ul class="grade__stars">
                                    <li>
                                        <p class="grade__text">rating:</p>
                                    </li>
                                    <li>

                                    <div class="grade__img-number">
                                            <img srcset="./images/starRating.png 1x, ./images/starRating.png 2x"
                                                src="./images/starRating.png" alt="Logo1" class="logo__starsRating">
                                            <p class="grade__number">9,7/10</p>
                                        </div>

                                    </li>
                                </ul>
                            </div>
                            <div class="grade__content">
                                <p class="title__main-margin" data-window-open15>
                                    <span class="mark-color">100%</span> up to <span class="mark-color">£100</span> +
                                    <br><span class="mark-color">88</span> Extra Spins
                                    <a target="_blank" class="tc-addW desktop-addW"
                                        href="https://adv2click.com/qHZYVJWV?utm_term={keyword}&external_id={external_id}&utm_campaign={campaignid}&utm_match={matchtype}&gclid={gclid}&accid={accid}">T&C’s
                                        apply</a>
                                    <span target="_balnk" class="tc-addW mobile-addW tc-addW-1">T&C’s
                                        apply</span>
                                    <span class="addW-content addW-content-1">1st time depositor at 888casino only • £20 min deposit • Claim within 48 hrs • Valid for selected games • Bonus wins capped at £500, excl. JP wins • 30x wagering – req. vary by game • Bonus expires within 90 days • Payment method & country restrictions apply • Withdrawal terms & T&Cs apply.
                                    </span>
                                </p>
                                <a href="https://adv2click.com/qHZYVJWV?utm_term={keyword}&external_id={external_id}&utm_campaign={campaignid}&utm_match={matchtype}&gclid={gclid}&accid={accid}"
                                    target="_blank">
                                    <button class="button__main hvr-grow" type="button">Play now</button></a>
                            </div>
                        </div>
                    </li> -->

                    <!-- ( Dr.Bet ) -->

                    <li>
                        <div class="grade__box">
                            <div class="grade__box-1">
                                <img srcset="./images/logoCL.png 1x, ./images/logoCL.png 2x" src="./images/logoCL.png"
                                    alt="Logo1" class="icon__grade icon__grade-width">
                            </div>

                            <div class="grade__stars-box">
                                <ul class="grade__stars">
                                    <li>
                                        <p class="grade__text">rating:</p>
                                    </li>

                                    <li>

                                        <div class="grade__img-number">
                                            <img srcset="./images/starRating.png 1x, ./images/starRating.png 2x"
                                                src="./images/starRating.png" alt="Logo1" class="logo__starsRating">
                                            <p class="grade__number">9,6/10</p>
                                        </div>



                                    </li>
                                </ul>
                            </div>



                            <div class="grade__content">
                                <p class="title__main-margin" data-window-open6>
                                    <span class="mark-color">100%</span> bonus up to <span
                                        class="mark-color">£150</span>
                                    +<br><span class="mark-color">50</span> extra spins
                                    <a target="_blank" class="tc-addW desktop-addW"
                                        href="https://adv2click.com/FTqP8HW7?utm_term='.$utm_term.'&utm_campaign='.$utm_campaign.'&utm_match='.$utm_match.'&gclid='.$gclid.'&accid='.$accid.'">T&C’s
                                        apply</a>
                                    <span target="_blank" class="tc-addW mobile-addW tc-addW-1">T&C’s
                                        apply</span>
                                    <span class="addW-content addW-content-1">

                                        18+. New UK customers only. Opt in required. Bonus can be claimed only once.
                                        Minimal deposit required of £10. Max bonus sum = £150. Bonus money must be
                                        turned over (wagered) 40 times before bonus funds or associated winnings can be
                                        withdrawn. Winnings from bonus spins must be turned over (wagered) 50 times
                                        before bonus funds or associated winnings can be withdrawn. 50 bonus spins will
                                        be credited automatiсally if bonus was activated and first deposit was made in
                                        48 hours after registration. Welcome Spins must be used in 24 hours after they
                                        were credited. Max. bet allowed £5 per bet/spin when wagering with bonus money.
                                        General T&C and General Promotion Terms apply. Play responsibly. This bonus is
                                        available till 31.01.2023.

                                    </span>
                                </p>
                                <a href="https://adv2click.com/FTqP8HW7?utm_term='.$utm_term.'&utm_campaign='.$utm_campaign.'&utm_match='.$utm_match.'&gclid='.$gclid.'&accid='.$accid.'"
                                    target="_blank">
                                    <button class="button__main hvr-grow" type="button">Play now</button>
                                </a>
                            </div>
                        </div>
                    </li>

                    <!--  START OF BRANDS LIST IN RATING LIST (  Leo Vegas  )-->
                    <li>
                        <div class="grade__box">
                            <div class="grade__box-1">
                                <img srcset="./images/LV.png 1x, ./images/LV.png 2x" src="./images/LV.png" alt="Logo2"
                                    class="icon__grade Leo">
                            </div>

                            <div class="grade__stars-box">
                                <ul class="grade__stars">
                                    <li>
                                        <p class="grade__text">rating:</p>
                                    </li>

                                    <li>

                                    <li>
                                        <div class="grade__img-number">
                                            <img srcset="./images/starRating2.png 1x, ./images/starRating2.png 2x"
                                                src="./images/starRating2.png" alt="Logo2" class="logo__starsRating">
                                            <p class="grade__number">9,5/10</p>
                                        </div>


                                    </li>
                                </ul>
                            </div>
                            <div class="grade__content">
                                <p class="title__main-margin" data-window-open7>
                                    <span class="mark-color">100%</span> bonus up to <span
                                        class="mark-color">£100</span>
                                    +<br><span class="mark-color">50</span> extra spins
                                    <a target="_blank" class="tc-addW desktop-addW"
                                        href="https://adv2click.com/pWbWXkgr?utm_term='.$utm_term.'&utm_campaign='.$utm_campaign.'&utm_match='.$utm_match.'&gclid='.$gclid.'&accid='.$accid.'">T&C’s
                                        apply</a>
                                    <span target="_balnk" class="tc-addW mobile-addW tc-addW-1">T&C’s
                                        apply</span>
                                    <span class="addW-content addW-content-1">T&Cs apply. New reg only. Claim 10
                                        free spins x10p each on Book of Dead (no deposit needed) within 3 days. Opt in &
                                        deposit £10, £25 or £50 within 7 days & further 7 days to wager cash stakes 35x
                                        to unlock reward (£50 on 2 deposits). 3 day exp. Wagering/game contributions
                                        vary. 25 wager-free spins x10p to added to Starburst with each qualifying
                                        deposit, 3 day expiry.
                                    </span>
                                </p>
                                <a href="https://adv2click.com/pWbWXkgr?utm_term='.$utm_term.'&utm_campaign='.$utm_campaign.'&utm_match='.$utm_match.'&gclid='.$gclid.'&accid='.$accid.'"
                                    target="_blank">
                                    <button class="button__main hvr-grow" type="button">Play now</button></a>
                            </div>
                        </div>
                    </li>

                    <!--  END OF BRAND IN RATING LIST ( HeySpin )-->


                    <!--  START OF BRAND IN RATING LIST ( Cherry)-->
                    <li>
                        <div class="grade__box">
                            <div class="grade__box-1">
                                <img srcset="./images/777.webp 1x, ./images/777.webp 2x" src="./images/777.webp"
                                    alt="Logo4" class="widthCherry wCh">
                            </div>

                            <div class="grade__stars-box">
                                <ul class="grade__stars">
                                    <li>
                                        <p class="grade__text">rating:</p>
                                    </li>

                                    <li>
                                        <div class="grade__img-number">
                                            <img srcset="./images/starRating3.png 1x, ./images/starRating3.png 2x"
                                                src="./images/starRating3.png" alt="Logo3" class="logo__starsRating">
                                            <p class="grade__number">9,4/10</p>
                                        </div>

                                    </li>

                                </ul>
                            </div>

                            <div class="grade__content">
                                <p class="title__main-margin" data-window-open9>
                                    <span class="mark-color"></span>up to <span class="mark-color">£1000</span>
                                    <br><span class="mark-color"></span> matchup bonus
                                    <a target="_blank" class="tc-addW desktop-addW"
                                        href="https://adv2click.com/zwMXVY2Z?utm_term='.$utm_term.'&utm_campaign='.$utm_campaign.'&utm_match='.$utm_match.'&gclid='.$gclid.'&accid='.$accid.'">T&C’s
                                        apply</a>
                                    <span target="_balnk" class="tc-addW mobile-addW tc-addW-1">T&C’s
                                        apply</span>
                                    <span class="addW-content addW-content-1">
                                        18+. New Players Only. £10 min fund, £2,000 max bonus, max bonus conversion
                                        equal to lifetime deposits (up to £250), 65x wagering requirements and full T&C
                                        Apply.
                                    </span>
                                </p>
                                <a href="https://adv2click.com/zwMXVY2Z?utm_term='.$utm_term.'&utm_campaign='.$utm_campaign.'&utm_match='.$utm_match.'&gclid='.$gclid.'&accid='.$accid.'"
                                    target="_blank">
                                    <button class="button__main hvr-grow" type="button">Play now</button></a>
                            </div>

                        </div>
                    </li>
                    <!--  END OF BRAND IN RATING LIST -->


                    <!--  BRANDS LIST  ( Winwindsor )-->
                    <li>
                        <div class="grade__box">
                            <div class="grade__box-1">
                                <img srcset="./images/ww.webp 1x, ./images/ww.webp 2x" src="./images/ww.webp"
                                    alt="Logo1" class="icon__grade width">
                            </div>

                            <div class="grade__stars-box">
                                <ul class="grade__stars">
                                    <li>
                                        <p class="grade__text">rating:</p>
                                    </li>
                                    <li>

                                        <div class="grade__img-number">
                                            <img srcset="./images/starRating5.png 1x, ./images/starRating5.png 2x"
                                                src="./images/starRating5.png" alt="Logo1" class="logo__starsRating">
                                            <p class="grade__number">9,3/10</p>
                                        </div>

                                    </li>
                                </ul>
                            </div>
                            <div class="grade__content">
                                <p class="title__main-margin" data-window-open8>
                                    <span class="mark-color"></span>up to <span class="mark-color">£1000</span>
                                    <br><span class="mark-color"></span> matchup bonus
                                    <a target="_blank" class="tc-addW desktop-addW"
                                        href="https://adv2click.com/M127KkXX?utm_term='.$utm_term.'&utm_campaign='.$utm_campaign.'&utm_match='.$utm_match.'&gclid='.$gclid.'&accid='.$accid.'">T&C’s
                                        apply</a>
                                    <span target="_balnk" class="tc-addW mobile-addW tc-addW-1">T&C’s
                                        apply</span>
                                    <span class="addW-content addW-content-1">18+. New Players Only. £10 min fund,
                                        £2,000 max bonus, max bonus conversion equal to lifetime deposits (up to £250),
                                        65x wagering requirements and full T&C Apply.
                                    </span>
                                </p>
                                <a href="https://adv2click.com/M127KkXX?utm_term='.$utm_term.'&utm_campaign='.$utm_campaign.'&utm_match='.$utm_match.'&gclid='.$gclid.'&accid='.$accid.'"
                                    target="_blank">
                                    <button class="button__main hvr-grow" type="button">Play now</button></a>
                            </div>
                        </div>
                    </li>
                    <!--  END OF BRAND IN RATING LIST -->



                </ul>

                <!-- END OF THE BRANDS LIST-->

            </div>
        </section>
    </main>

        ';
} 
?>

    <footer class="footer">
        <div class="footer__container">
            <div class="footer-tablet">
                <div class="footer__content text-uppercase">
                    <div>Gambling Can Be Addictive, Please Play Responsibly</div>
                    <!-- <p>FOR ADULTS ONLY(18+)</p> -->
                    <div><span id="year"></span> &copy; Megajokercasino.com</div>
                    <img srcset="./images/18.png 1x, ./images/18.png 2x" src="./images/18.png" alt="Age"
                        class="icon__footer-age">

                    <div id="footer">
                        <a href="https://www.begambleaware.org/">BE GAMBLE AWARE</a>
                        |
                        <a href="https://www.gamcare.org.uk/">Gamcare</a>
                        |
                        <a href="https://www.gamblingtherapy.org/en">Gambling Therapy</a>
                    </div>
                    <noindex>
                        <a href="#footer" data-window-open4>Privacy Policy</a>
                    </noindex>
                    |
                    <a href="#footer" data-window-open5>CONTACT US</a>
                </div>
            </div>
        </div>
    </footer>

    <div class="window__backcloth is-hidden" data-window>
        <div class="window" data-form-window>
            <span class="window__main-text">
                18+. New Players Only. Min. deposit £10. Max bonus allowed is £50. Offer duration upon receiving is
                valid for 2 weeks (14 days). Max Win from spins is £100. 35x wagering applies both for bonus and spins
                part. Spins are credited on specific games(Starburst). Spins expire after 24 hours if unused. Full T&Cs
                Apply.
                <a href="https://adv2click.com/6TQ3Vrzq?utm_term='.$utm_term.'&utm_campaign='.$utm_campaign.'&utm_match='.$utm_match.'&gclid='.$gclid.'&accid='.$accid.'"
                    target="_blank" class="window__link-btn">
                    <button class="button__main btn" type="button" style="margin-bottom: 0px;">Play now</button>
                </a>
                <span class="window__close" data-window-close>Close window</span>
            </span>
        </div>
    </div>

    <div class="window__backcloth2 is-hidden2" data-window2>
        <div class="window2" data-form-window2>
            <span class="window__main-text">
                T&Cs apply. New reg only. Claim 10 free spins x10p each on Book of Dead (no deposit needed) within 3
                days. Opt in & deposit £10, £25 or £50 within 7 days & further 7 days to wager cash stakes 35x to unlock
                reward (£50 on 2 deposits). 3 day exp. Wagering/game contributions vary. 25 wager-free spins x10p to
                added to Starburst with each qualifying deposit, 3 day expiry.
            </span>
            <span class="window__close2" data-window-close2>Close window</span>
        </div>
    </div>


    <div class="window__backcloth3 is-hidden3" data-window3>
        <div class="window3" data-form-window3>
            <span class="window__main-text">
                Megajokercasino.com is an autonomous online asset that compares limited-time offers of diverse casino
                locales to assist guests to discover the one that suits them best.
                We get certain recompense from the displayed brands. The order in which they show up on the site might
                depend on the compensation.
                These situation choices are too affected by our own conclusion, user experience, survey discoveries,
                conversion rate, and other factors. We do our best in order to supply the most significant information,
                in any case, our site can not and does not offer information approximately all competing offers
                accessible on the market.
            </span>
            <span class="window__close3" data-window-close3>Close window</span>
        </div>
    </div>

    <div class="window__backcloth4 is-hidden4" data-window4>
        <div class="window4" data-form-window4>

            <button type="button" class="button__window4" data-window-close4>
                <svg class="icon__close4">
                    <use href="./images/icons.svg#icon-close"></use>
                </svg>
            </button>

            <div style="padding: 10px;">
                <span class="window__main-text">
                    <p class="window__p">This privacy policy aimed to explain how jamminjarslot.com (“we”, “our” or
                        “us”)
                        uses and protects any data that visitors (“you”, “your”) provide us when you use our website.
                    </p>
                    <p class="window__p">
                        We may gather personal identification information from visitors of our website in the following
                        cases:
                    </p>
                    <ul class="window__ul">
                        <li style="display: list-item;
                            text-align: -webkit-match-parent; list-style: disc;">when you access our website, we may
                            collect IP address and Location data;</li>
                        <li style="display: list-item;
                            text-align: -webkit-match-parent; list-style: disc;">when a visitor contacts us and
                            provides personal
                            information such as email address or name; then we will only use this data to send you a
                            reply.</li>
                    </ul>
                    <h3>Cookies</h3>
                    <p class="window__p">We use “cookies” on this site. A cookie is a small text file which our website
                        sends to your hard drive
                        to help us keep track of your movements within the site and carry out research to improve our
                        marketing content,
                        products and services. Usage of a cookie does not concern any personal information of yours.</p>
                    <p class="window__p">
                        We use Google Analytics on our website, which in its turn uses cookies to track your behavior on
                        our site & your preferences.
                        This data then used by us to compile statistical marketing reports via Google Analytics.
                        We never share any data with third parties, however we are in no control of processing of such
                        data by Google.
                    </p>
                    <p class="window__p">
                        The settings of cookies can be changed in your browser should you wish to accept or reject all
                        cookies when you visit websites.
                    </p>
                    <p class="window__p">megajokercasino.com contains links to other websites.
                        When you use these links to leave our site, please be advised that we do not have any control
                        over other websites.
                        Therefore, we cannot be responsible for the protection and privacy
                        of any information which you provide when visiting such sites and such sites are not governed by
                        this privacy statement.</p>
                    <p class="window__p">
                        We may update this policy from time to time. The updated version will be placed on this page.
                    </p>
                    <p class="window__p">
                        This site is not intended for use by anyone under the age of 18.
                    </p>
                    <p class="window__p">
                        If you have any questions regarding this Privacy Policy, feel free to reach us
                    </p>
                    <!-- <span class="window__close4" data-window-close4>Close window</span> -->
                </span>
            </div>

        </div>
    </div>

    <div class="window__backcloth5 is-hidden5" data-window5>
        <div class="window5" data-form-window5>

            <button type="button" class="button__window5" data-window-close5>
                <svg class="icon__close5">
                    <use href="./images/icons.svg#icon-close"></use>
                </svg>
            </button>

            <form autocomplete="on" class="window__form5" action="send_mail.php" id="form" name="form" method="post">
                <p class="window__heading5">Please enter your details below</p>

                <label class="window__thumb5" for="forName">
                    <span class="window__label">Name*</span>
                    <input class="window__input5 _req" type="text" name="name" id="formName">

                    <svg class="icon__window-img">
                        <use href="./images/icons.svg#person"></use>
                    </svg>
                </label>

                <label class="window__thumb5" for="formEmail">
                    <span class="window__label">Email*</span>
                    <input type="email" name="email" id="formEmail" class="window__input5 _req _email">

                    <svg class="icon__window-img">
                        <use href="./images/icons.svg#icon-emailblack"></use>
                    </svg>
                </label>

                <label class="window__thumb5" for="formMessage">
                    <span class="window__label">Text</span>
                    <textarea name="message" id="formMessage" placeholder="Leave your text here"
                        class="window__area"></textarea>
                </label>

                <button type="submit" class="window-button__btn">Submit</button>
            </form>

        </div>
    </div>

    <div class="window__backcloth6 is-hidden6" data-window6>
        <div class="window6" data-form-window6>
            <span class="window__main-text">
                18+. New UK customers only. Opt in required. Bonus can be claimed only once. Minimal deposit required of
                £10. Max bonus sum = £150. Bonus money must be turned over (wagered) 40 times before bonus funds or
                associated winnings can be withdrawn. Winnings from bonus spins must be turned over (wagered) 50 times
                before bonus funds or associated winnings can be withdrawn. 50 bonus spins will be credited
                automatiсally if bonus was activated and first deposit was made in 48 hours after registration. Welcome
                Spins must be used in 24 hours after they were credited. Max. bet allowed £5 per bet/spin when wagering
                with bonus money. General T&C and General Promotion Terms apply. Play responsibly. This bonus is
                available till 31.01.2023.
                <a href="https://adv2click.com/FTqP8HW7?utm_term='.$utm_term.'&utm_campaign='.$utm_campaign.'&utm_match='.$utm_match.'&gclid='.$gclid.'&accid='.$accid.'"
                    target="_blank" class="window__link-btn">
                    <button class="button__main btn" type="button" style="margin-bottom: 0px;">Play now</button>
                </a>
                <span class="window__close6" data-window-close6>Close window</span>
            </span>
        </div>
    </div>

    <div class="window__backcloth7 is-hidden7" data-window7>
        <div class="window7" data-form-window7>
            <span class="window__main-text">
                T&Cs apply. New reg only. Claim 10 free spins x10p each on Book of Dead (no deposit needed) within 3
                days. Opt in & deposit £10, £25 or £50 within 7 days & further 7 days to wager cash stakes 35x to unlock
                reward (£50 on 2 deposits). 3 day exp. Wagering/game contributions vary. 25 wager-free spins x10p to
                added to Starburst with each qualifying deposit, 3 day expiry.
                <a href="https://adv2click.com/pWbWXkgr?utm_term='.$utm_term.'&utm_campaign='.$utm_campaign.'&utm_match='.$utm_match.'&gclid='.$gclid.'&accid='.$accid.'"
                    target="_blank" class="window__link-btn">
                    <button class="button__main btn" type="button" style="margin-bottom: 0px;">Play now</button>
                </a>
                <span class="window__close7" data-window-close7>Close window</span>
            </span>
        </div>
    </div>

    <div class="window__backcloth8 is-hidden8" data-window8>
        <div class="window8" data-form-window8>
            <span class="window__main-text">
                18+. New Players Only. £10 min fund, £2,000 max bonus, max bonus conversion equal to lifetime deposits
                (up to £250), 65x wagering requirements and full T&C Apply.
                <a href="https://adv2click.com/M127KkXX?utm_term='.$utm_term.'&external_id='.$external_id.'&utm_campaign='.$utm_campaign.'&utm_match='.$utm_match.'&gclid='. $gclid .'&accid='.$accid.'"
                    target="_blank" class="window__link-btn">
                    <button class="button__main btn" type="button" style="margin-bottom: 0px;">Play now</button>
                </a>
                <span class="window__close8" data-window-close8>Close window</span>
            </span>
        </div>
    </div>

    <div class="window__backcloth9 is-hidden9" data-window9>
        <div class="window9" data-form-window9>
            <span class="window__main-text">
                18+. New Players Only. £10 min fund, £2,000 max bonus, max bonus conversion equal to lifetime deposits
                (up to £250), 65x wagering requirements and full T&C Apply.
                <a href="https://adv2click.com/zwMXVY2Z?utm_term='.$utm_term.'&external_id='.$external_id.'&utm_campaign='.$utm_campaign.'&utm_match='.$utm_match.'&gclid='. $gclid .'&accid='.$accid.'"
                    target="_blank" class="window__link-btn">
                    <button class="button__main btn" type="button" style="margin-bottom: 0px;">Play now</button>
                </a>
                <span class="window__close9" data-window-close9>Close window</span>
            </span>
        </div>
    </div>

    <script src="./js/windows.js"></script>
    <script src="js/Date.js"></script>
</body>

</html>