<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1" name="viewport">

    <title>Trading | CC3</title>
    <meta content="CC3" name="description">

    <?php include('./_head.php') ?>
</head>
<body class="<?= htmlspecialchars($theme) ?> <?= htmlspecialchars($menuType) ?>">

<div class="full_page <?php if($isVerticalPage){ ?> full_page__vertical <?php } ?>">

    <?php
    $currentPage = 'trading';
    if($isVerticalPage){
        include('_header_v.php');
    } else {
        include('_header.php');
    }?>

    <main class="main_page main_page__trading">
        <div class="trade_top">
            <div class="tt_account">
                <div class="tt_account__title">Your Account Funds</div>
                <div class="dropdown" >
                    <button id="tabDropdownBtn" class="btn btn_dd dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        Compte PREMIUM 2025 GBP
                    </button>
                    <ul class="dropdown-menu dropdown-select" role="tablist">
                        <li><a class="dropdown-item" href="#">Compte PREMIUM 2025 GBP</a></li>
                        <li><a class="dropdown-item" href="#">Compte PREMIUM 2026 GBP</a></li>
                        <li><a class="dropdown-item" href="#">Compte PREMIUM 2027 GBP</a></li>
                    </ul>
                </div>
            </div>

            <div class="tt_middle">
                <div class="tt_info">
                    <div class="tt_info__item">
                        <div class="tt_info__label">Balance</div>
                        <div class="tt_info__value tt_info__value_green">84 846 021.26 £</div>
                    </div>
                    <div class="tt_info__item">
                        <div class="tt_info__label">Margin Level</div>
                        <div class="tt_info__value">1 002 507.32 £</div>
                    </div>
                    <div class="tt_info__item">
                        <div class="tt_info__label">Equity</div>
                        <div class="tt_info__value">1 002 507.32 £</div>
                    </div>
                    <div class="tt_info__item">
                        <div class="tt_info__label"> Open P&L</div>
                        <div class="tt_info__value tt_info__value_red">6 466.04 £</div>
                    </div>
                    <div class="tt_info__item">
                        <div class="tt_info__label">Used Margin</div>
                        <div class="tt_info__value">1 002 507.32 £</div>
                    </div>
                    <div class="tt_info__item">
                        <div class="tt_info__label">Free Margin</div>
                        <div class="tt_info__value">1 002 507.32 £</div>
                    </div>
                </div>
            </div>

            <div class="tt_real">
                <div class="tt_real__block">
                    Real: # 25072466 GBP
                </div>
            </div>
        </div>
        <div class="tt_container" x-data="tradingFunc">
            <div class="tt_contant" >
                <div class="tt_card tt_assets" >
                    <div class="tt_assets__tools">
                        <div class="tt_assets__tabs">
                            <button class="tt_assets__tab w1200_show" :class="{ 'tt_assets__tab_active': showTab === 'chart' }" @click="toggleTab('chart')">
                                <div class="tt_assets__tab_item">
                                    Chart
                                </div>
                            </button>
                            <button class="tt_assets__tab"  :class="{ 'tt_assets__tab_active': showTab === 'favorites' }" @click="toggleTab('favorites')">
                                <div class="tt_assets__tab_fav w1200_hide">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="0.4">
                                            <path d="M16.8168 6.8385C16.7465 6.6223 16.6138 6.43176 16.4354 6.29087C16.2569 6.14998 16.0408 6.06505 15.8142 6.04678L11.6657 5.71209L10.064 1.83857C9.97741 1.62751 9.82998 1.44697 9.64049 1.31991C9.45099 1.19284 9.228 1.125 8.99985 1.125C8.7717 1.125 8.5487 1.19284 8.35921 1.31991C8.16972 1.44697 8.02229 1.62751 7.93567 1.83857L6.33536 5.71139L2.18481 6.04678C1.95783 6.06597 1.74155 6.15173 1.56309 6.2933C1.38463 6.43486 1.25191 6.62595 1.18156 6.84261C1.11122 7.05928 1.10638 7.29188 1.16765 7.51128C1.22891 7.73068 1.35356 7.92712 1.52598 8.076L4.69004 10.8062L3.72606 14.8886C3.67215 15.1104 3.68535 15.3432 3.76399 15.5574C3.84262 15.7717 3.98315 15.9578 4.16773 16.092C4.35232 16.2263 4.57263 16.3027 4.8007 16.3115C5.02877 16.3203 5.25432 16.2611 5.44872 16.1415L8.9995 13.9562L12.5524 16.1415C12.7469 16.2597 12.9719 16.3177 13.1993 16.3083C13.4267 16.2988 13.6462 16.2222 13.8301 16.0883C14.0141 15.9543 14.1543 15.7689 14.2331 15.5554C14.3119 15.342 14.3257 15.1099 14.2729 14.8886L13.3054 10.8055L16.4695 8.07529C16.6433 7.92667 16.7691 7.7298 16.8309 7.50963C16.8928 7.28945 16.8879 7.05588 16.8168 6.8385ZM15.7382 7.22311L12.314 10.1762C12.2359 10.2435 12.1779 10.331 12.1461 10.4291C12.1144 10.5272 12.1102 10.6321 12.134 10.7324L13.1803 15.148C13.183 15.1541 13.1833 15.161 13.181 15.1673C13.1788 15.1736 13.1743 15.1788 13.1683 15.1818C13.1557 15.1916 13.1522 15.1895 13.1416 15.1818L9.29411 12.8158C9.2055 12.7613 9.10352 12.7324 8.9995 12.7324C8.89548 12.7324 8.7935 12.7613 8.70489 12.8158L4.85739 15.1832C4.84684 15.1895 4.84403 15.1916 4.83067 15.1832C4.82474 15.1802 4.82019 15.175 4.81796 15.1687C4.81574 15.1624 4.81601 15.1555 4.81872 15.1494L5.86497 10.7338C5.88881 10.6335 5.88463 10.5286 5.85289 10.4305C5.82115 10.3324 5.76306 10.2449 5.68497 10.1776L2.26075 7.22451C2.25231 7.21748 2.24458 7.21115 2.25161 7.18936C2.25864 7.16756 2.26426 7.17037 2.27481 7.16896L6.76919 6.80615C6.87227 6.79731 6.97092 6.76021 7.05428 6.69893C7.13764 6.63765 7.20249 6.55456 7.24169 6.45881L8.97278 2.26748C8.9784 2.25553 8.98051 2.2499 8.99739 2.2499C9.01426 2.2499 9.01637 2.25553 9.022 2.26748L10.7573 6.45881C10.7969 6.5546 10.8621 6.63759 10.9459 6.69864C11.0296 6.75968 11.1286 6.7964 11.2319 6.80475L15.7263 7.16756C15.7368 7.16756 15.7432 7.16756 15.7495 7.18795C15.7558 7.20834 15.7495 7.21607 15.7382 7.22311Z" fill="black"/>
                                        </g>
                                    </svg>
                                </div>
                                <div class="tt_assets__tab_item w1200_show">
                                    Favorites
                                </div>
                            </button>
                            <button class="tt_assets__tab" :class="{ 'tt_assets__tab_active': showTab === 'all_assets' }" @click="toggleTab('all_assets')">
                                <div class="tt_assets__tab_item">
                                    All Assets
                                </div>
                            </button>
                        </div>
<!--                        <div class="tt_assets__toggle">-->
<!--                            <button class="tt_assets__toggle_btn">-->
<!--                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                                    <path d="M11.6484 14.2269C11.7007 14.2791 11.7421 14.3412 11.7704 14.4094C11.7987 14.4777 11.8133 14.5509 11.8133 14.6248C11.8133 14.6987 11.7987 14.7719 11.7704 14.8402C11.7421 14.9085 11.7007 14.9705 11.6484 15.0228C11.5962 15.0751 11.5341 15.1165 11.4658 15.1448C11.3975 15.1731 11.3244 15.1876 11.2504 15.1876C11.1765 15.1876 11.1033 15.1731 11.0351 15.1448C10.9668 15.1165 10.9047 15.0751 10.8525 15.0228L5.22747 9.39779C5.17517 9.34555 5.13369 9.28351 5.10538 9.21523C5.07707 9.14694 5.0625 9.07375 5.0625 8.99982C5.0625 8.9259 5.07707 8.85271 5.10538 8.78442C5.13369 8.71613 5.17517 8.6541 5.22747 8.60186L10.8525 2.97686C10.958 2.87131 11.1012 2.81201 11.2504 2.81201C11.3997 2.81201 11.5429 2.87131 11.6484 2.97686C11.754 3.0824 11.8133 3.22556 11.8133 3.37482C11.8133 3.52409 11.754 3.66725 11.6484 3.77279L6.42068 8.99982L11.6484 14.2269Z" fill="black"/>-->
<!--                                </svg>-->
<!--                            </button>-->
<!--                        </div>-->
                    </div>
                    <div x-show="showTab !== 'chart'" class="tt_assets__search">
                        <button class="tt_assets__search_btn">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.1479 15.3519L12.6273 11.8321C13.6477 10.6071 14.1566 9.03577 14.048 7.44512C13.9394 5.85447 13.2217 4.36692 12.0443 3.29193C10.8668 2.21693 9.32029 1.63725 7.72635 1.67348C6.13241 1.7097 4.6138 2.35904 3.48642 3.48642C2.35904 4.6138 1.7097 6.13241 1.67348 7.72635C1.63725 9.32029 2.21693 10.8668 3.29193 12.0443C4.36692 13.2217 5.85447 13.9394 7.44512 14.048C9.03577 14.1566 10.6071 13.6477 11.8321 12.6273L15.3519 16.1479C15.4042 16.2001 15.4663 16.2416 15.5345 16.2699C15.6028 16.2982 15.676 16.3127 15.7499 16.3127C15.8238 16.3127 15.897 16.2982 15.9653 16.2699C16.0336 16.2416 16.0956 16.2001 16.1479 16.1479C16.2001 16.0956 16.2416 16.0336 16.2699 15.9653C16.2982 15.897 16.3127 15.8238 16.3127 15.7499C16.3127 15.676 16.2982 15.6028 16.2699 15.5345C16.2416 15.4663 16.2001 15.4042 16.1479 15.3519ZM2.81242 7.87492C2.81242 6.87365 3.10933 5.89487 3.6656 5.06234C4.22188 4.22982 5.01253 3.58094 5.93758 3.19778C6.86263 2.81461 7.88053 2.71435 8.86256 2.90969C9.84459 3.10503 10.7466 3.58718 11.4546 4.29519C12.1626 5.00319 12.6448 5.90524 12.8401 6.88727C13.0355 7.8693 12.9352 8.8872 12.5521 9.81225C12.1689 10.7373 11.52 11.528 10.6875 12.0842C9.85497 12.6405 8.87618 12.9374 7.87492 12.9374C6.53271 12.9359 5.24591 12.4021 4.29683 11.453C3.34775 10.5039 2.81391 9.21712 2.81242 7.87492Z" fill="black"/>
                            </svg>
                        </button>
                        <input type="text" class="tt_assets__search_input" placeholder="Search">
                    </div>
                    <div x-show="showTab === 'favorites'" class="tt_assets__list">
                        <div class="tt_assets__list_row tt_assets__list_head">
                            <div class="tt_assets__list_td tt_assets__list_td_code">Code</div>
                            <div class="tt_assets__list_td tt_assets__list_td_name">Name</div>
                            <div class="tt_assets__list_td tt_assets__list_td_fav"></div>
                            <div class="tt_assets__list_td tt_assets__list_td_price">Price</div>
                            <div class="tt_assets__list_td tt_assets__list_td_var">Variation</div>
                        </div>
                        <div class="tt_assets__list_body">
                            <?php for($i=0;$i<20;$i++){ ?>
                                <div class="tt_assets__list_row">
                                    <div class="tt_assets__list_td tt_assets__list_td_code">GBPUSD</div>
                                    <div class="tt_assets__list_td tt_assets__list_td_name">GBP/USD</div>
                                    <div class="tt_assets__list_td tt_assets__list_td_fav">
                                        <div class="tt_assets__favorite"></div>
                                    </div>
                                    <div class="tt_assets__list_td tt_assets__list_td_price">1.00138 £</div>
                                    <div class="tt_assets__list_td tt_assets__list_td_var tt_assets__list_td_var_green">
                                        <span>+ 0.00651% </span>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="tt_assets__list_row">

                            </div>
                        </div>
                    </div>
                    <div x-show="showTab === 'all_assets'" class="tt_assets__list">
                        <div class="tt_assets__list_row tt_assets__list_head">
                            <div class="tt_assets__list_td tt_assets__list_td_code">Code</div>
                            <div class="tt_assets__list_td tt_assets__list_td_name">Name</div>
                            <div class="tt_assets__list_td tt_assets__list_td_fav"></div>
                            <div class="tt_assets__list_td tt_assets__list_td_price">Price</div>
                            <div class="tt_assets__list_td tt_assets__list_td_var">Variation</div>
                        </div>
                        <div class="tt_assets__list_body">
                            <?php for($i=0;$i<20;$i++){ ?>
                                <div class="tt_assets__list_row">
                                    <div class="tt_assets__list_td tt_assets__list_td_code">EURUSD</div>
                                    <div class="tt_assets__list_td tt_assets__list_td_name">EUR/USD</div>
                                    <div class="tt_assets__list_td tt_assets__list_td_fav"></div>
                                    <div class="tt_assets__list_td tt_assets__list_td_price">1.00138 £</div>
                                    <div class="tt_assets__list_td tt_assets__list_td_var tt_assets__list_td_var_red">
                                        <span>- 0.00651% </span>
                                    </div>
                                </div>
                                <div class="tt_assets__list_row">
                                    <div class="tt_assets__list_td tt_assets__list_td_code">GBPUSD</div>
                                    <div class="tt_assets__list_td tt_assets__list_td_name">GBP/USD</div>
                                    <div class="tt_assets__list_td tt_assets__list_td_fav">
                                        <div class="tt_assets__favorite"></div>
                                    </div>
                                    <div class="tt_assets__list_td tt_assets__list_td_price">1.00138 £</div>
                                    <div class="tt_assets__list_td tt_assets__list_td_var tt_assets__list_td_var_green">
                                        <span>+ 0.00651% </span>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="tt_assets__list_row">

                            </div>
                        </div>
                    </div>
                    <div x-show="showTab === 'chart'" id="ttChartMobile" class="tt_chart__mobile"></div>
                </div>

                <div id="ttChartDesktop" class="tt_card tt_chart w1200_hide">
                    <div class="trading_chart_container">
                        <img class="tt_chart__img" src="./images/chart.jpg" alt="">
                    </div>
                </div>

                <div class="tt_card tt_action">
                    <div x-show="actionType === 'default'" class="tt_action__default">
                        <div class="tta_info">
                            <div class="tta_info__top">
                                <div class="tta_info__main">
                                    <div class="tta_info__image">
                                        <img src="./assets/img/svg/trading.svg" alt="">
                                    </div>
                                    <div class="tta_info__code">EUR/USD</div>
                                    <div class="tta_info__name">EUR/USD</div>
                                </div>

                                <button class="tta_info__btn_favorite"
                                        :class="{ 'tta_info__btn_favorite_active': isFavorite }"
                                        @click="toggleFavorite">
                                </button>
                            </div>
                            <div class="tta_info__course">
                                <div class="tta_info__course_main">0.88150 £</div>
                                <div class="tta_info__course_diff tta_info__course_diff_plus">0.00173% / 0.00002 £</div>
                            </div>
                            <div class="tta_info__margin">154,48650 USD</div>
                            <div class="tta_info__btns">
                                <button
                                        class="tta_info__btn tta_info__btn_short"
                                        @click="setShort"
                                >
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.520833" y="0.520833" width="18.9583" height="18.9583" rx="9.47917" stroke="white" stroke-width="1.04167"/>
                                        <path d="M16.4586 8.85429V13.021C16.4586 13.1591 16.4037 13.2916 16.3061 13.3892C16.2084 13.4869 16.0759 13.5418 15.9378 13.5418H11.7711C11.633 13.5418 11.5005 13.4869 11.4028 13.3892C11.3052 13.2916 11.2503 13.1591 11.2503 13.021C11.2503 12.8828 11.3052 12.7503 11.4028 12.6527C11.5005 12.555 11.633 12.5001 11.7711 12.5001H14.6806L9.68779 7.50729L7.45211 9.74362C7.40374 9.79204 7.3463 9.83046 7.28307 9.85667C7.21984 9.88288 7.15207 9.89637 7.08362 9.89637C7.01518 9.89637 6.9474 9.88288 6.88417 9.85667C6.82095 9.83046 6.7635 9.79204 6.71513 9.74362L2.02763 5.05612C1.9299 4.95839 1.875 4.82584 1.875 4.68763C1.875 4.54942 1.9299 4.41687 2.02763 4.31914C2.12536 4.22141 2.25791 4.1665 2.39612 4.1665C2.53433 4.1665 2.66688 4.22141 2.76461 4.31914L7.08362 8.6388L9.3193 6.40247C9.36767 6.35404 9.42511 6.31563 9.48834 6.28942C9.55157 6.26321 9.61934 6.24972 9.68779 6.24972C9.75623 6.24972 9.82401 6.26321 9.88724 6.28942C9.95047 6.31563 10.0079 6.35404 10.0563 6.40247L15.417 11.7638V8.85429C15.417 8.71616 15.4718 8.58368 15.5695 8.48601C15.6672 8.38833 15.7997 8.33346 15.9378 8.33346C16.0759 8.33346 16.2084 8.38833 16.3061 8.48601C16.4037 8.58368 16.4586 8.71616 16.4586 8.85429Z" fill="white"/>
                                    </svg>
                                    <span>0.88200 £</span>
                                </button>
                                <button
                                        class="tta_info__btn tta_info__btn_long"
                                        @click="setLong"
                                >
                                    <span>0.88200 £</span>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1388_782)">
                                            <path d="M16.4586 11.1457V6.97904C16.4586 6.84091 16.4037 6.70843 16.3061 6.61075C16.2084 6.51308 16.0759 6.45821 15.9378 6.45821H11.7711C11.633 6.45821 11.5005 6.51308 11.4028 6.61075C11.3052 6.70843 11.2503 6.84091 11.2503 6.97904C11.2503 7.11717 11.3052 7.24965 11.4028 7.34733C11.5005 7.445 11.633 7.49987 11.7711 7.49987H14.6806L9.68779 12.4927L7.45211 10.2564C7.40374 10.208 7.3463 10.1695 7.28307 10.1433C7.21984 10.1171 7.15207 10.1036 7.08362 10.1036C7.01518 10.1036 6.9474 10.1171 6.88417 10.1433C6.82095 10.1695 6.7635 10.208 6.71513 10.2564L2.02763 14.9439C1.9299 15.0416 1.875 15.1742 1.875 15.3124C1.875 15.4506 1.9299 15.5831 2.02763 15.6809C2.12536 15.7786 2.25791 15.8335 2.39612 15.8335C2.53433 15.8335 2.66688 15.7786 2.76461 15.6809L7.08362 11.3612L9.3193 13.5975C9.36767 13.646 9.42511 13.6844 9.48834 13.7106C9.55157 13.7368 9.61934 13.7503 9.68779 13.7503C9.75623 13.7503 9.82401 13.7368 9.88724 13.7106C9.95047 13.6844 10.0079 13.646 10.0563 13.5975L15.417 8.2362V11.1457C15.417 11.2838 15.4718 11.4163 15.5695 11.514C15.6672 11.6117 15.7997 11.6665 15.9378 11.6665C16.0759 11.6665 16.2084 11.6117 16.3061 11.514C16.4037 11.4163 16.4586 11.2838 16.4586 11.1457Z" fill="white"/>
                                        </g>
                                        <rect x="0.520833" y="-0.520833" width="18.9583" height="18.9583" rx="9.47917" transform="matrix(1 0 0 -1 0 18.9583)" stroke="white" stroke-width="1.04167"/>
                                        <defs>
                                            <clipPath id="clip0_1388_782">
                                                <rect width="20" height="20" rx="10" transform="matrix(1 0 0 -1 0 20)" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="tta_params">
                            <div class="tta_params_row">
                                <div class="tta_params_col">
                                    <div class="tta_label">Units (BTC)</div>
                                    <div class="tta_block">
                                        <input type="text" class="tta_input">
                                        <button class="tta_button">-</button>
                                        <button class="tta_button">+</button>
                                    </div>
                                </div>
                                <div class="tta_params_col">
                                    <div class="tta_label">Amount ($)</div>
                                    <div class="tta_block">
                                        <input type="text" class="tta_input">
                                        <div class="tta_block__curr">$</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tta_params_">
                                <div class="range-wrapper">
                                    <div class="range-container">

                                        <!-- Значение -->
                                        <div class="range-value"
                                             :style="`left: ${thumbPosition}px`">
                                            <span x-text="'x'+rangeValue"></span>
                                        </div>

                                        <!-- Ползунок -->
                                        <input
                                                type="range"
                                                min="1"
                                                max="1000"
                                                x-model="rangeValue"
                                                class="range-slider"
                                        >

                                        <!-- Закрашенная часть -->
                                        <div class="range-fill"
                                             :style="`width: ${thumbPosition}px`"></div>
                                    </div>

                                    <!-- Мин / Макс -->
                                    <div class="range-labels">
                                        <span x-text="min+'x'"></span>
                                        <span x-text="max+'x'"></span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tta_inputs">
                            <div class="tta_item_row">
                                <div class="tta_item_col">
                                    <div class="tta_item_col__sw">
                                        <div class="tta_item_col__lbl">TP</div>
                                        <label class="tta_cc_switch">
                                            <input class="tta_cc_checkbox" data-protected_type="tp" type="checkbox">
                                            <span class="tta_cc_slider"></span>
                                        </label>
                                    </div>

                                </div>
                                <div class="tta_item_col_center"></div>
                                <div class="tta_item_col">
                                    <div class="tta_item_col__sw">
                                        <div class="tta_item_col__lbl">SL</div>
                                        <label class="tta_cc_switch">
                                            <input class="tta_cc_checkbox" data-protected_type="sl" type="checkbox">
                                            <span class="tta_cc_slider tta_cc_slider_sl"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="tta_item_row">
                                <div class="tta_item_col">
                                    <input type="text" class="tta_input tta_input_n">
                                </div>
                                <div class="tta_item_col_center">
                                    <div class="tta_item__label">Course</div>
                                </div>
                                <div class="tta_item_col">
                                    <input type="text" class="tta_input tta_input_n">
                                </div>
                            </div>
                            <div class="tta_item_row">
                                <div class="tta_item_col">
                                    <input type="text" class="tta_input tta_input_n">
                                </div>
                                <div class="tta_item_col_center">
                                    <div class="tta_item__label">Unit</div>
                                </div>
                                <div class="tta_item_col">
                                    <input type="text" class="tta_input tta_input_n">
                                </div>
                            </div>
                            <div class="tta_item_row">
                                <div class="tta_item_col">
                                    <input type="text" class="tta_input tta_input_n">
                                </div>
                                <div class="tta_item_col_center">
                                    <div class="tta_item__label">Gain/Lose  $</div>
                                </div>
                                <div class="tta_item_col">
                                    <input type="text" class="tta_input tta_input_n">
                                </div>
                            </div>
                            <div class="tta_item_btn">
                                <button class="btn_cc_submit" :class="{
                                btn_cc_submit__short: tradeType === 'short',
                                btn_cc_submit__long: tradeType === 'long'
                                }"
                                @click="createPosition()"
                                >Passer l'ordre maintenant</button>
                            </div>
                        </div>
                        <div class="tta_order">
                            <div class="tta_order__title">Order summary</div>
                            <div class="tta_order__row">
                                <div class="tta_order__label">Leverage</div>
                                <div class="tta_order__value">1:3</div>
                            </div>
                            <div class="tta_order__row">
                                <div class="tta_order__label">Open Price</div>
                                <div class="tta_order__value">1.0534</div>
                            </div>
                            <div class="tta_order__row">
                                <div class="tta_order__label">Take Profit</div>
                                <div class="tta_order__value">$17557</div>
                            </div>
                            <div class="tta_order__row">
                                <div class="tta_order__label">Spread</div>
                                <div class="tta_order__value">0.02 %  + 0.00£ per transaction</div>
                            </div>
                        </div>
                    </div>
                    <div x-show="actionType === 'confirmation'" class="tt_action__confirmation">
                        <div class="ttc_box">
                            <div class="ttc_title">Vendre</div>
                            <div class="ttc_info">
                                <div class="tta_info__top mb-4">
                                    <div class="tta_info__main">
                                        <div class="tta_info__image">
                                            <img src="/assets/img/svg/trading.svg" alt="">
                                        </div>
                                        <div class="tta_info__code">EUR/USD</div>
                                        <div class="tta_info__name">EUR/USD</div>
                                    </div>
                                </div>
                                <div class="tta_info__course">
                                    <div class="tta_info__course_main">0.88150 £</div>
                                    <div class="tta_info__course_diff tta_info__course_diff_plus">0.00173%</div>
                                </div>
                                <div class="tta_info__margin">Spread : 1.05 %</div>
                                <div class="tta_info__margin">+ 0.00 € per transaction</div>
                            </div>
                            <div class="ttc_scs">Votre transaction est réalisée avec succès!</div>
                            <div class="ttc_btns">
                                <button class="btn btn-primary w-100" @click="confirmPosition()">Fermer</button>
                            </div>
                        </div>
                    </div>
                    <div x-show="actionType === 'success'" class="tt_action__confirmation">
                        <div class="ttc_box">
                            <div class="ttc_title">Acheter</div>
                            <div class="ttc_icon_scs">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M57.2092 18.2284C71.0795 21.2929 81.5037 32.2793 83.8742 46.3314C84.2555 48.5914 84.3005 49.4953 84.205 52.9574C84.1243 55.8773 83.9763 57.5197 83.6598 59.0043C82.2678 65.5342 78.9682 71.6839 74.3477 76.36C69.3989 81.3684 62.8617 84.7944 55.9827 85.9844C50.7701 86.8864 44.6306 86.4138 39.646 84.7273C29.2909 81.2235 21.4259 73.2841 17.9825 62.8596C15.6954 55.9351 15.6954 48.0806 17.9825 41.1561C21.9553 29.1285 32.0302 20.3031 44.3697 18.0417C47.5181 17.4648 54.192 17.5619 57.2092 18.2284ZM47.5504 20.9918C40.209 21.6921 33.844 24.7332 28.5895 30.0512C24.9306 33.7539 22.6856 37.4175 21.0963 42.2784C19.9892 45.664 19.5775 48.3019 19.5775 52.0079C19.5775 60.5043 22.6245 67.928 28.5895 73.9646C32.2483 77.6676 35.8683 79.9396 40.6714 81.548C43.9972 82.6618 46.6152 83.0786 50.2852 83.0786C58.6964 83.0786 66.012 80.0054 71.9808 73.9646C75.6397 70.2618 77.8847 66.5983 79.474 61.7373C80.5811 58.3517 80.9929 55.7138 80.9929 52.0079C80.9929 43.5115 77.9458 36.0878 71.9808 30.0512C68.322 26.3482 64.7021 24.0762 59.8989 22.4677C56.0213 21.1693 51.4358 20.6211 47.5504 20.9918ZM66.5303 38.6406C68.5409 39.6547 69.451 41.8893 68.7584 44.1128C68.4342 45.1532 67.7693 45.8839 58.8127 55.0447C53.5338 60.4441 48.9048 65.0557 48.5259 65.2926C47.588 65.8794 46.1342 66.0507 44.9195 65.718C44.0207 65.4718 43.3765 64.8934 38.1464 59.6377C34.9674 56.4432 32.2126 53.5011 32.0244 53.0998C30.5685 49.9947 32.7076 46.522 36.0763 46.522C36.6745 46.522 37.5113 46.669 37.9362 46.8486C38.4153 47.0511 40.1364 48.6125 42.4681 50.9599L46.2278 54.7447L54.0421 46.8138C59.1934 41.5855 62.1404 38.748 62.6902 38.4872C63.8873 37.919 65.2037 37.9715 66.5303 38.6406Z" fill="#00B83E"/>
                                </svg>
                            </div>
                            <div class="ttc_scs">Votre transaction est réalisée avec succès!</div>
                            <div class="ttc_btns">
                                <button class="btn btn-primary w-100" @click="successPosition()">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tt_history">
                <div class="tt_card">
                    <div class="table-scroll tt_table__box">
                        <table class="tt_table">
                            <thead>
                            <tr>
                                <th>Symbole</th>
                                <th>Ticket</th>
                                <th>Temps</th>
                                <th>Type</th>
                                <th>Volume</th>
                                <th>Prix</th>
                                <th>S/L</th>
                                <th>T/P</th>
                                <th>Cours actuel</th>
                                <th>Profit</th>
                                <th class="tt_table__center">Close</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php for($i=0;$i<20;$i++){ ?>
                                    <tr>
                                        <td class="tt_table__bold">CCY:EURUSD</td>
                                        <td>036908437970</td>
                                        <td>14-01-2025 02:19</td>
                                        <td>Achat</td>
                                        <td>100.00</td>
                                        <td>0.83758 £</td>
                                        <td>
                                            <a href="#" class="tt_btn_svg" @click.prevent="openSL()">
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.6571 3.43909L8.56274 1.34424C8.49309 1.27458 8.41041 1.21932 8.3194 1.18162C8.22839 1.14392 8.13085 1.12451 8.03235 1.12451C7.93384 1.12451 7.8363 1.14392 7.7453 1.18162C7.65429 1.21932 7.5716 1.27458 7.50196 1.34424L1.7218 7.12487C1.65185 7.19426 1.5964 7.27686 1.55866 7.36787C1.52092 7.45889 1.50164 7.5565 1.50196 7.65502V9.74987C1.50196 9.94878 1.58097 10.1395 1.72163 10.2802C1.86228 10.4208 2.05304 10.4999 2.25196 10.4999H4.3468C4.44533 10.5002 4.54294 10.4809 4.63395 10.4432C4.72496 10.4054 4.80757 10.35 4.87696 10.28L10.6571 4.49987C10.7268 4.43022 10.782 4.34753 10.8197 4.25653C10.8574 4.16552 10.8768 4.06798 10.8768 3.96948C10.8768 3.87097 10.8574 3.77343 10.8197 3.68242C10.782 3.59142 10.7268 3.50873 10.6571 3.43909ZM2.40711 7.49987L6.37696 3.53002L7.1593 4.31237L3.18946 8.28174L2.40711 7.49987ZM2.25196 8.40502L3.5968 9.74987H2.25196V8.40502ZM4.50196 9.59471L3.71961 8.81237L7.68946 4.84252L8.4718 5.62487L4.50196 9.59471ZM9.00196 5.09471L6.90711 2.99987L8.03211 1.87487L10.127 3.96924L9.00196 5.09471Z" fill="black"/>
                                                </svg>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#" class="tt_btn_svg" @click.prevent="openTP()">
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.6571 3.43909L8.56274 1.34424C8.49309 1.27458 8.41041 1.21932 8.3194 1.18162C8.22839 1.14392 8.13085 1.12451 8.03235 1.12451C7.93384 1.12451 7.8363 1.14392 7.7453 1.18162C7.65429 1.21932 7.5716 1.27458 7.50196 1.34424L1.7218 7.12487C1.65185 7.19426 1.5964 7.27686 1.55866 7.36787C1.52092 7.45889 1.50164 7.5565 1.50196 7.65502V9.74987C1.50196 9.94878 1.58097 10.1395 1.72163 10.2802C1.86228 10.4208 2.05304 10.4999 2.25196 10.4999H4.3468C4.44533 10.5002 4.54294 10.4809 4.63395 10.4432C4.72496 10.4054 4.80757 10.35 4.87696 10.28L10.6571 4.49987C10.7268 4.43022 10.782 4.34753 10.8197 4.25653C10.8574 4.16552 10.8768 4.06798 10.8768 3.96948C10.8768 3.87097 10.8574 3.77343 10.8197 3.68242C10.782 3.59142 10.7268 3.50873 10.6571 3.43909ZM2.40711 7.49987L6.37696 3.53002L7.1593 4.31237L3.18946 8.28174L2.40711 7.49987ZM2.25196 8.40502L3.5968 9.74987H2.25196V8.40502ZM4.50196 9.59471L3.71961 8.81237L7.68946 4.84252L8.4718 5.62487L4.50196 9.59471ZM9.00196 5.09471L6.90711 2.99987L8.03211 1.87487L10.127 3.96924L9.00196 5.09471Z" fill="black"/>
                                                </svg>
                                            </a>
                                        </td>
                                        <td>0.76123 £</td>
                                        <td>-98.13613 £</td>
                                        <td class="tt_table__center">
                                            <a href="#" class="tt_btn_svg">
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.3996 10.473C11.5229 10.5963 11.5921 10.7635 11.5921 10.9378C11.5921 11.1122 11.5229 11.2794 11.3996 11.4027C11.2763 11.526 11.1091 11.5952 10.9347 11.5952C10.7604 11.5952 10.5932 11.526 10.4699 11.4027L6.99778 7.92948L3.52458 11.4016C3.40129 11.5249 3.23408 11.5941 3.05973 11.5941C2.88538 11.5941 2.71817 11.5249 2.59489 11.4016C2.4716 11.2783 2.40234 11.1111 2.40234 10.9367C2.40234 10.7624 2.4716 10.5952 2.59489 10.4719L6.06809 6.99979L2.59598 3.52659C2.4727 3.4033 2.40344 3.23609 2.40344 3.06174C2.40344 2.88739 2.4727 2.72018 2.59598 2.5969C2.71927 2.47362 2.88648 2.40436 3.06083 2.40436C3.23518 2.40436 3.40239 2.47362 3.52567 2.5969L6.99778 6.0701L10.471 2.59635C10.5943 2.47307 10.7615 2.40381 10.9358 2.40381C11.1102 2.40381 11.2774 2.47307 11.4007 2.59635C11.524 2.71964 11.5932 2.88685 11.5932 3.0612C11.5932 3.23555 11.524 3.40276 11.4007 3.52604L7.92747 6.99979L11.3996 10.473Z" fill="black"/>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="modal modal_cc fade" id="modalSLTP" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-bottom">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Bitcoin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="tta_item_row">
                        <div class="tta_item_col">
                            <div class="tta_item_col__sw">
                                <div class="tta_item_col__lbl">TP</div>
                                <label class="tta_cc_switch">
                                    <input class="tta_cc_checkbox" data-protected_type="tp" type="checkbox">
                                    <span class="tta_cc_slider"></span>
                                </label>
                            </div>

                        </div>
                        <div class="tta_item_col_center"></div>
                        <div class="tta_item_col">
                            <div class="tta_item_col__sw">
                                <div class="tta_item_col__lbl">SL</div>
                                <label class="tta_cc_switch">
                                    <input class="tta_cc_checkbox" data-protected_type="sl" type="checkbox">
                                    <span class="tta_cc_slider tta_cc_slider_sl"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="tta_item_row">
                        <div class="tta_item_col">
                            <input type="text" class="tta_input tta_input_n">
                        </div>
                        <div class="tta_item_col_center">
                            <div class="tta_item__label">Course</div>
                        </div>
                        <div class="tta_item_col">
                            <input type="text" class="tta_input tta_input_n">
                        </div>
                    </div>
                    <div class="tta_item_row">
                        <div class="tta_item_col">
                            <input type="text" class="tta_input tta_input_n">
                        </div>
                        <div class="tta_item_col_center">
                            <div class="tta_item__label">Unit</div>
                        </div>
                        <div class="tta_item_col">
                            <input type="text" class="tta_input tta_input_n">
                        </div>
                    </div>
                    <div class="tta_item_row">
                        <div class="tta_item_col">
                            <input type="text" class="tta_input tta_input_n">
                        </div>
                        <div class="tta_item_col_center">
                            <div class="tta_item__label">Gain/Lose  $</div>
                        </div>
                        <div class="tta_item_col">
                            <input type="text" class="tta_input tta_input_n">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<script type="text/javascript" src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="./assets/js/app.js"></script>

<script>
    function tradingFunc() {
        return {
            showTab: 'all_assets',

            init() {
                this.moveChart()
                this.getContainerWidth()
                window.addEventListener('resize', () => {
                    this.moveChart()
                    this.getContainerWidth()
                })
            },

            moveChart() {
                const chart = document.querySelector('.trading_chart_container')
                const mobile = document.getElementById('ttChartMobile')
                const desktop = document.getElementById('ttChartDesktop')

                if (!chart || !mobile || !desktop) return

                if (window.innerWidth < 1200) {
                    if (!mobile.contains(chart)) {
                        mobile.appendChild(chart)
                        this.showTab = 'chart'
                    }
                } else {
                    if (!desktop.contains(chart)) {
                        desktop.appendChild(chart)
                        this.showTab = 'all_assets'
                    }
                }
            },

            // checkScreenWidth() {
            //     if (window.innerWidth < 1200) {
            //         this.showTab = 'chart'
            //     }else{
            //         this.showTab = 'all_assets'
            //     }
            // },

            toggleTab(tab) {
                this.showTab = tab
            },

            isFavorite: false,
            toggleFavorite() {
                this.isFavorite = !this.isFavorite
            },

            /* RANGE */
            rangeValue: 200,
            min: 1,
            max: 1000,
            containerWidth: 0,

            getContainerWidth() {
                const container = document.querySelector('.range-container')
                if (container) {
                    this.containerWidth = container.offsetWidth
                }
            },

            get rangePercent() {
                return (this.rangeValue - this.min) / (this.max - this.min) * 100
            },

            get thumbPosition() {
                const percent = (this.rangeValue - this.min) / (this.max - this.min)
                return (this.containerWidth - 20) * percent + 9
            },

            /* TRADE TYPE */
            tradeType: null, // 'short' | 'long'

            setShort() {
                this.tradeType = 'short'
            },

            setLong() {
                this.tradeType = 'long'
            },

            /* ACTION FLOW */
            actionType: 'default',

            createPosition() {
                this.actionType = 'confirmation'
            },

            confirmPosition() {
                this.actionType = 'success'
            },

            successPosition() {
                this.tradeType = null
                this.actionType = 'default'
            },

            openSL() {
                showModal('modalSLTP')
            },

            openTP() {
                showModal('modalSLTP')
            }
        }
    }
</script>


<script type="text/javascript" src="./assets/js/alpinejs.min.js"></script>


</body>
</html>