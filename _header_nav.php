<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link <?php setActiveNavLink('dashboard') ?>" aria-current="page" href="/">Tableau de bord</a>
    </li>
    <li class="nav-item dropdown dropdown-hover">
        <a class="nav-link dropdown-toggle <?php setActiveNavLink('fond_plans') ?>" href="#"  data-bs-toggle="dropdown" >
            Mes comptes
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="fond-plans.php">Ouvrir un compte</a></li>
            <li><a class="dropdown-item" href="plan-clients.php">Voir mes comptes</a></li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="#">Arbitrage</a>
    </li>
    <li class="nav-item dropdown dropdown-hover">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" >
            PLACEMENTS & ETFs
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Liste des placements</a></li>
            <li><a class="dropdown-item" href="#">Historique des investissements</a></li>
            <li><a class="dropdown-item" href="#">Demandes en cours</a></li>
        </ul>
    </li>
    <li class="nav-item dropdown dropdown-hover">
        <a class="nav-link dropdown-toggle" href="#"  data-bs-toggle="dropdown" >
            Bourses & Cryptomonnaies
        </a>
        <ul class="dropdown-menu">
            <li class="nav_client_history_stock">
                <a href="/client/history-stock.php"  class="market-toggle dropdown-item">Historique</a>
            </li>
            <li class="nav-item dropdown dropdown-hover">
                <a href="/client/stocks/themeblack21.php?dataMarket=NASDAQ"  class="dropdown-item btn_htn_with_arrow js_htn_open_submenu"  data-bs-toggle="dropdown"  data-market="Stocks">Actions</a>
                <ul class="dropdown-menu ">
                    <li class="nav-item dropdown dropdown-hover">
                        <a href="#"  class="dropdown-item btn_htn_with_arrow js_htn_open_submenu_2" data-bs-toggle="dropdown"  data-market="Exchanges">Marchés</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/client/stocks/themeblack21.php?dataMarket=NASDAQ"  class="dropdown-item" data-market="NASDAQ">
                                    Marché boursier NASDAQ                                    </a>
                            </li>
                            <li>
                                <a href="/client/stocks/themeblack21.php?dataMarket=FWB"  class="dropdown-item" data-market="FWB">
                                    Bourse de Francfort                                    </a>
                            </li>
                            <li>
                                <a href="/client/stocks/themeblack21.php?dataMarket=XETR"  class="dropdown-item" data-market="XETR">
                                    ExchangeElectronicTrading                                    </a>
                            </li>
                            <li>
                                <a href="/client/stocks/themeblack21.php?dataMarket=TSX"  class="dropdown-item" data-market="TSX">
                                    Bourse de Toronto                                    </a>
                            </li>
                            <li>
                                <a href="/client/stocks/themeblack21.php?dataMarket=NYSE"  class="dropdown-item" data-market="NYSE">
                                    Bourse de New York                                    </a>
                            </li>
                            <li>
                                <a href="/client/stocks/themeblack21.php?dataMarket=CSE"  class="dropdown-item" data-market="CSE">
                                    Canadian Securities Exchange                                    </a>
                            </li>
                            <li>
                                <a href="/client/stocks/themeblack21.php?dataMarket=BSE"  class="dropdown-item" data-market="BSE">
                                    Bourse de Bombay                                    </a>
                            </li>
                            <li>
                                <a href="/client/stocks/themeblack21.php?dataMarket=MIL"  class="dropdown-item" data-market="MIL">
                                    Bourse de Milan                                    </a>
                            </li>
                            <li>
                                <a href="/client/stocks/themeblack21.php?dataMarket=BIST"  class="dropdown-item" data-market="BIST">
                                    Bourse d'Istanbul                                    </a>
                            </li>
                            <li>
                                <a href="/client/stocks/themeblack21.php?dataMarket=TSXV"  class="dropdown-item" data-market="TSXV">
                                    TSX Venture Exchange                                    </a>
                            </li>
                            <li>
                                <a href="/client/stocks/themeblack21.php?dataMarket=LSE"  class="dropdown-item" data-market="LSE">
                                    Bourse de Londres (Sociétés du Royaume-Uni)                                    </a>
                            </li>
                            <li>
                                <a href="/client/stocks/themeblack21.php?dataMarket=SSE"  class="dropdown-item" data-market="SSE">
                                    Shanghai Stock Exchange                                    </a>
                            </li>
                            <li>
                                <a href="/client/stocks/themeblack21.php?dataMarket=SZSE"  class="dropdown-item" data-market="SZSE">
                                    Shenzhen Stock Exchange                                    </a>
                            </li>
                            <li>
                                <a href="/client/stocks/themeblack21.php?dataMarket=ASX"  class="dropdown-item" data-market="ASX">
                                    Australian Securities Exchange                                    </a>
                            </li>
                            <li>
                                <a href="/client/stocks/themeblack21.php?dataMarket=SAU"  class="dropdown-item" data-market="SAU">
                                    Saudi Exchange (Tadawul)                                    </a>
                            </li>
                            <li>
                                <a href="/client/stocks/themeblack21.php?dataMarket=SIX"  class="dropdown-item" data-market="SIX">
                                    SIX Swiss Exchange                                    </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown dropdown-hover">
                        <a href="#"  class="dropdown-item btn_htn_with_arrow js_htn_open_submenu_2" data-bs-toggle="dropdown"  data-market="Industries">Industries</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/client/stocks/themeblack21.php?dataMarketList=biotechnology"  class="dropdown-item" data-market="biotechnology">
                                    Biotechnologie                                    </a>
                            </li>
                            <li>
                                <a href="/client/stocks/themeblack21.php?dataMarketList=chemicals"  class="dropdown-item" data-market="chemicals">
                                    Chemicals                                    </a>
                            </li>
                            <li>
                                <a href="/client/stocks/themeblack21.php?dataMarketList=residential-construction"  class="dropdown-item" data-market="residential-construction">
                                    Residential Construction                                    </a>
                            </li>
                            <li>
                                <a href="/client/stocks/themeblack21.php?dataMarketList=specialty-industrial-machinery"  class="dropdown-item" data-market="specialty-industrial-machinery">
                                    Specialty Industrial Machinery                                    </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li id="nav_lvl2_CC" class="js_htn_show_lvl_2">
                <a href="/client/trade/themeblack21.php"  class="dropdown-item " data-market="CC">Cryptocurrencies</a>
            </li>
            <li id="nav_lvl2_forex" class="js_htn_show_lvl_2">
                <a href="/client/forex/themeblack21.php"  class="dropdown-item " data-market="forex">Forex</a>
            </li>
            <li id="nav_lvl2_METALS" class="js_htn_show_lvl_2">
                <a href="/client/metals/themeblack21.php"  class="dropdown-item " data-market="METALS">Métaux précieux</a>
            </li>
            <li id="nav_lvl2_Indices" class="js_htn_show_lvl_2">
                <a href="/client/indices/themeblack21.php"  class="dropdown-item " data-market="Indices">Indices</a>
            </li>
            <li id="nav_lvl2_Futures" class="js_htn_show_lvl_2">
                <a href="/client/futures/themeblack21.php"  class="dropdown-item btn_htn_with_arrow js_htn_open_submenu" data-market="Futures">Contrats à terme</a>
                <ul class="dropdown-menu">
                    <li id="nav_lvl3_Futures_agricultural" class="js_htn_show_lvl_3">
                        <a href="/client/futures/themeblack21.php?dataList=agricultural"  class="dropdown-item " data-market="Futures_agricultural">Produits agricoles</a>
                    </li>
                    <li id="nav_lvl3_Futures_energy" class="js_htn_show_lvl_3">
                        <a href="/client/futures/themeblack21.php?dataList=energy"  class="dropdown-item " data-market="Futures_energy">Énergie</a>
                    </li>
                    <li id="nav_lvl3_Futures_currencies" class="js_htn_show_lvl_3">
                        <a href="/client/futures/themeblack21.php?dataList=currencies"  class="dropdown-item " data-market="Futures_currencies">Devises</a>
                    </li>
                    <li id="nav_lvl3_Futures_world-indices" class="js_htn_show_lvl_3">
                        <a href="/client/futures/themeblack21.php?dataList=world-indices"  class="dropdown-item " data-market="Futures_world-indices">Indices Internationaux</a>
                    </li>
                    <li id="nav_lvl3_Futures_interest-rates" class="js_htn_show_lvl_3">
                        <a href="/client/futures/themeblack21.php?dataList=interest-rates"  class="dropdown-item " data-market="Futures_interest-rates">Taux d'intérêt</a>
                    </li>
                </ul>
            </li>
            <li id="nav_lvl2_Commodities" class="js_htn_show_lvl_2">
                <a href="/client/commodities/themeblack21.php"  class="dropdown-item " data-market="Commodities">Commodities</a>
            </li>
        </ul>
    </li>
    <li class="nav-item dropdown dropdown-hover">
        <a class="nav-link dropdown-toggle" href="#"  data-bs-toggle="dropdown" >
            Crypto-monnaies
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Acheter maintenant</a></li>
            <li><a class="dropdown-item" href="#">Mon Portefeuille / Wallet</a></li>
            <li><a class="dropdown-item" href="#">Historique des transactions</a></li>
            <li><a class="dropdown-item" href="#">Transmettre vos crypto monnaies</a></li>
        </ul>
    </li>
    <li class="nav-item dropdown dropdown-hover">
        <a class="nav-link dropdown-toggle" href="#"  data-bs-toggle="dropdown" >
            Messagerie
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/support/create-ticket.php">Ecrire un message</a></li>
            <li><a class="dropdown-item" href="/support/tickets.php">Conversation en cours</a></li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php setActiveNavLink('personal-information') ?>" aria-current="page" href="personal-information.php">Mon Profil</a>
    </li>
</ul>