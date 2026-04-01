<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1" name="viewport">

    <title>Fond plans | CC3</title>
    <meta content="CC3" name="description">

    <?php include('./_head.php') ?>
</head>
<body class="<?= htmlspecialchars($theme) ?> <?= htmlspecialchars($menuType) ?>">

<div class="full_page <?php if($isVerticalPage){ ?> full_page__vertical <?php } ?>">

    <?php
    $currentPage = 'fond_plans';
    if($isVerticalPage){
        include('_header_v.php');
    } else {
        include('_header.php');
    }?>

    <main class="main_page">
        <div class="container_1200">
            <div x-data="fondPlansFunc()">


                <div class="fp_block">
                    <div class="fp_block__list">
                        <div class="page_head">
                            <h1 class="page_h1">Votre argent en direct !</h1>
                            <div class="page_subtitle">Suivez vos capitaux en temps réel pour obtenir les meilleurs résultats d'investissement.</div>
                        </div>
                        <div class="fp_head">
                            <h2 class="fp_title">Liste de vos comptes</h2>
                            <div class="fp_buttons">
                                <button class="fp_button" :class="{ 'fp_button__active': viewType === 'list' }" @click="viewType = 'list'">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.875 6C7.875 5.70163 7.99353 5.41548 8.2045 5.2045C8.41548 4.99353 8.70163 4.875 9 4.875H20.25C20.5484 4.875 20.8345 4.99353 21.0455 5.2045C21.2565 5.41548 21.375 5.70163 21.375 6C21.375 6.29837 21.2565 6.58452 21.0455 6.7955C20.8345 7.00647 20.5484 7.125 20.25 7.125H9C8.70163 7.125 8.41548 7.00647 8.2045 6.7955C7.99353 6.58452 7.875 6.29837 7.875 6ZM20.25 10.875H9C8.70163 10.875 8.41548 10.9935 8.2045 11.2045C7.99353 11.4155 7.875 11.7016 7.875 12C7.875 12.2984 7.99353 12.5845 8.2045 12.7955C8.41548 13.0065 8.70163 13.125 9 13.125H20.25C20.5484 13.125 20.8345 13.0065 21.0455 12.7955C21.2565 12.5845 21.375 12.2984 21.375 12C21.375 11.7016 21.2565 11.4155 21.0455 11.2045C20.8345 10.9935 20.5484 10.875 20.25 10.875ZM20.25 16.875H9C8.70163 16.875 8.41548 16.9935 8.2045 17.2045C7.99353 17.4155 7.875 17.7016 7.875 18C7.875 18.2984 7.99353 18.5845 8.2045 18.7955C8.41548 19.0065 8.70163 19.125 9 19.125H20.25C20.5484 19.125 20.8345 19.0065 21.0455 18.7955C21.2565 18.5845 21.375 18.2984 21.375 18C21.375 17.7016 21.2565 17.4155 21.0455 17.2045C20.8345 16.9935 20.5484 16.875 20.25 16.875ZM5.25 4.875H3.75C3.45163 4.875 3.16548 4.99353 2.9545 5.2045C2.74353 5.41548 2.625 5.70163 2.625 6C2.625 6.29837 2.74353 6.58452 2.9545 6.7955C3.16548 7.00647 3.45163 7.125 3.75 7.125H5.25C5.54837 7.125 5.83452 7.00647 6.0455 6.7955C6.25647 6.58452 6.375 6.29837 6.375 6C6.375 5.70163 6.25647 5.41548 6.0455 5.2045C5.83452 4.99353 5.54837 4.875 5.25 4.875ZM5.25 10.875H3.75C3.45163 10.875 3.16548 10.9935 2.9545 11.2045C2.74353 11.4155 2.625 11.7016 2.625 12C2.625 12.2984 2.74353 12.5845 2.9545 12.7955C3.16548 13.0065 3.45163 13.125 3.75 13.125H5.25C5.54837 13.125 5.83452 13.0065 6.0455 12.7955C6.25647 12.5845 6.375 12.2984 6.375 12C6.375 11.7016 6.25647 11.4155 6.0455 11.2045C5.83452 10.9935 5.54837 10.875 5.25 10.875ZM5.25 16.875H3.75C3.45163 16.875 3.16548 16.9935 2.9545 17.2045C2.74353 17.4155 2.625 17.7016 2.625 18C2.625 18.2984 2.74353 18.5845 2.9545 18.7955C3.16548 19.0065 3.45163 19.125 3.75 19.125H5.25C5.54837 19.125 5.83452 19.0065 6.0455 18.7955C6.25647 18.5845 6.375 18.2984 6.375 18C6.375 17.7016 6.25647 17.4155 6.0455 17.2045C5.83452 16.9935 5.54837 16.875 5.25 16.875Z" fill="black"/>
                                    </svg>
                                </button>
                                <button class="fp_button" :class="{ 'fp_button__active': viewType === 'table' }" @click="viewType = 'table'">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.75 3.375H5.25C4.75272 3.375 4.27581 3.57254 3.92417 3.92417C3.57254 4.27581 3.375 4.75272 3.375 5.25V18.75C3.375 19.2473 3.57254 19.7242 3.92417 20.0758C4.27581 20.4275 4.75272 20.625 5.25 20.625H18.75C19.2473 20.625 19.7242 20.4275 20.0758 20.0758C20.4275 19.7242 20.625 19.2473 20.625 18.75V5.25C20.625 4.75272 20.4275 4.27581 20.0758 3.92417C19.7242 3.57254 19.2473 3.375 18.75 3.375ZM18.375 10.875H13.125V5.625H18.375V10.875ZM10.875 5.625V10.875H5.625V5.625H10.875ZM5.625 13.125H10.875V18.375H5.625V13.125ZM13.125 18.375V13.125H18.375V18.375H13.125Z" fill="black"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="fp_list" :class="{ 'fp_list__table': viewType === 'table' }">
                            <div class="fp_item fp_item__animated">
                                <div class="fp_item__box fp_item__box_oa">
                                    <div class="fp_item__top">
                                        <div class="fp_item__top_name">Plan test turbo</div>
                                        <div class="fp_item__top_amount">+110,000.00 €</div>
                                    </div>
                                    <div class="fp_item__btn">
                                        <a href="#" @click.prevent="showOpenAccountModal('plan_1')" class="btn btn-primary pt-2 pb-2">
                                            Cliquer pour voir les détails
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.9722 9.59717L7.34717 15.2222C7.18866 15.3807 6.97367 15.4697 6.74951 15.4697C6.52535 15.4697 6.31036 15.3807 6.15185 15.2222C5.99335 15.0637 5.9043 14.8487 5.9043 14.6245C5.9043 14.4003 5.99335 14.1854 6.15185 14.0269L11.1799 9.00021L6.15326 3.97217C6.07478 3.89368 6.01252 3.80051 5.97004 3.69796C5.92757 3.59541 5.9057 3.48551 5.9057 3.37451C5.9057 3.26352 5.92757 3.15361 5.97004 3.05106C6.01252 2.94852 6.07478 2.85534 6.15326 2.77685C6.23175 2.69837 6.32492 2.63611 6.42747 2.59364C6.53001 2.55116 6.63992 2.5293 6.75092 2.5293C6.86191 2.5293 6.97182 2.55116 7.07437 2.59364C7.17691 2.63611 7.27009 2.69837 7.34857 2.77685L12.9736 8.40185C13.0521 8.48033 13.1144 8.57355 13.1569 8.67616C13.1994 8.77877 13.2212 8.88875 13.221 8.9998C13.2209 9.11085 13.1989 9.22078 13.1561 9.32329C13.1134 9.4258 13.0509 9.51887 12.9722 9.59717Z" fill="white"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="fp_item fp_item__animated">
                                <div class="fp_item__box fp_item__box_oa">
                                    <div class="fp_item__top">
                                        <div class="fp_item__top_name">Compte Premium 2023</div>
                                        <div class="fp_item__top_amount">+110,000.00 €</div>
                                    </div>
                                    <div class="fp_item__btn">
                                        <a href="#" @click.prevent="showOpenAccountModal('plan_2')" class="btn btn-primary pt-2 pb-2">
                                            Cliquer pour voir les détails
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.9722 9.59717L7.34717 15.2222C7.18866 15.3807 6.97367 15.4697 6.74951 15.4697C6.52535 15.4697 6.31036 15.3807 6.15185 15.2222C5.99335 15.0637 5.9043 14.8487 5.9043 14.6245C5.9043 14.4003 5.99335 14.1854 6.15185 14.0269L11.1799 9.00021L6.15326 3.97217C6.07478 3.89368 6.01252 3.80051 5.97004 3.69796C5.92757 3.59541 5.9057 3.48551 5.9057 3.37451C5.9057 3.26352 5.92757 3.15361 5.97004 3.05106C6.01252 2.94852 6.07478 2.85534 6.15326 2.77685C6.23175 2.69837 6.32492 2.63611 6.42747 2.59364C6.53001 2.55116 6.63992 2.5293 6.75092 2.5293C6.86191 2.5293 6.97182 2.55116 7.07437 2.59364C7.17691 2.63611 7.27009 2.69837 7.34857 2.77685L12.9736 8.40185C13.0521 8.48033 13.1144 8.57355 13.1569 8.67616C13.1994 8.77877 13.2212 8.88875 13.221 8.9998C13.2209 9.11085 13.1989 9.22078 13.1561 9.32329C13.1134 9.4258 13.0509 9.51887 12.9722 9.59717Z" fill="white"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="fp_item fp_item__animated">
                                <div class="fp_item__box fp_item__box_oa">
                                    <div class="fp_item__top">
                                        <div class="fp_item__top_name">Plan test turbo</div>
                                        <div class="fp_item__top_amount">+110,000.00 €</div>
                                    </div>
                                    <div class="fp_item__btn">
                                        <a href="#" @click.prevent="showOpenAccountModal('plan_3')" class="btn btn-primary pt-2 pb-2">
                                            Cliquer pour voir les détails
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.9722 9.59717L7.34717 15.2222C7.18866 15.3807 6.97367 15.4697 6.74951 15.4697C6.52535 15.4697 6.31036 15.3807 6.15185 15.2222C5.99335 15.0637 5.9043 14.8487 5.9043 14.6245C5.9043 14.4003 5.99335 14.1854 6.15185 14.0269L11.1799 9.00021L6.15326 3.97217C6.07478 3.89368 6.01252 3.80051 5.97004 3.69796C5.92757 3.59541 5.9057 3.48551 5.9057 3.37451C5.9057 3.26352 5.92757 3.15361 5.97004 3.05106C6.01252 2.94852 6.07478 2.85534 6.15326 2.77685C6.23175 2.69837 6.32492 2.63611 6.42747 2.59364C6.53001 2.55116 6.63992 2.5293 6.75092 2.5293C6.86191 2.5293 6.97182 2.55116 7.07437 2.59364C7.17691 2.63611 7.27009 2.69837 7.34857 2.77685L12.9736 8.40185C13.0521 8.48033 13.1144 8.57355 13.1569 8.67616C13.1994 8.77877 13.2212 8.88875 13.221 8.9998C13.2209 9.11085 13.1989 9.22078 13.1561 9.32329C13.1134 9.4258 13.0509 9.51887 12.9722 9.59717Z" fill="white"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="fp_item fp_item__animated">
                                <div class="fp_item__box fp_item__box_oa">
                                    <div class="fp_item__top">
                                        <div class="fp_item__top_name">Compte Premium 2023</div>
                                        <div class="fp_item__top_amount">+110,000.00 €</div>
                                    </div>
                                    <div class="fp_item__btn">
                                        <a href="#" @click.prevent="showOpenAccountModal('plan_4')" class="btn btn-primary pt-2 pb-2">
                                            Cliquer pour voir les détails
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.9722 9.59717L7.34717 15.2222C7.18866 15.3807 6.97367 15.4697 6.74951 15.4697C6.52535 15.4697 6.31036 15.3807 6.15185 15.2222C5.99335 15.0637 5.9043 14.8487 5.9043 14.6245C5.9043 14.4003 5.99335 14.1854 6.15185 14.0269L11.1799 9.00021L6.15326 3.97217C6.07478 3.89368 6.01252 3.80051 5.97004 3.69796C5.92757 3.59541 5.9057 3.48551 5.9057 3.37451C5.9057 3.26352 5.92757 3.15361 5.97004 3.05106C6.01252 2.94852 6.07478 2.85534 6.15326 2.77685C6.23175 2.69837 6.32492 2.63611 6.42747 2.59364C6.53001 2.55116 6.63992 2.5293 6.75092 2.5293C6.86191 2.5293 6.97182 2.55116 7.07437 2.59364C7.17691 2.63611 7.27009 2.69837 7.34857 2.77685L12.9736 8.40185C13.0521 8.48033 13.1144 8.57355 13.1569 8.67616C13.1994 8.77877 13.2212 8.88875 13.221 8.9998C13.2209 9.11085 13.1989 9.22078 13.1561 9.32329C13.1134 9.4258 13.0509 9.51887 12.9722 9.59717Z" fill="white"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</div>

<div class="modal fade modal_960" x-data="openAccountModal" id="openAccount" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ouvrir un compte</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="oa_info">
                    <div class="oa_name">Compte Premium 2023</div>
                    <div class="oa_price">+17,370.76 €</div>
                </div>
                <div class="tab_body mb-2">
                    <div class="av_inreview">
                        <div class="av_inreview__img av_inreview__img_2">
                            <img src="./images/image_fp.jpg" alt="">
                        </div>
                        <div class="av_inreview__info">
                            <div class="av_title_2">Compte Premium 2023</div>
                            <div class="av_text_3">
                                Lorem ipsum dolor sit amet consectetur. Sit tortor diam leo scelerisque quis habitasse. Ornare sed volutpat massa dolor dictum tortor erat parturient et. Elit auctor cursus quis quam morbi a curabitur. Adipiscing quisque turpis at velit at velit. Dictum congue semper risus lectus dignissim. Felis tempus in massa tincidunt eget urna purus eget. Enim est dolor id nunc. Commodo malesuada sem eu volutpat.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project_car__row mb-4">
                    <div class="project_car__col">
                        <div class="project_car__item">
                            <div class="project_car__item_title">Montant min.</div>
                            <div class="project_car__item_value">
                                0.00 €
                                &rArr;
                                5 000 000.00 €
                            </div>
                        </div>
                    </div>
                    <div class="project_car__col">
                        <div class="project_car__item">
                            <div class="project_car__item_title">Garantie à hauteur de</div>
                            <div class="project_car__item_value">100.0%</div>
                        </div>
                    </div>
                    <div class="project_car__col">
                        <div class="project_car__item">
                            <div class="project_car__item_title">Effet de levier applicable</div>
                            <div class="project_car__item_value">1</div>
                        </div>
                    </div>
                    <div class="project_car__col">
                        <div class="project_car__item">
                            <div class="project_car__item_title">Libération des fonds</div>
                            <div class="project_car__item_value">3 mois</div>
                        </div>
                    </div>
                    <div class="project_car__col">
                        <div class="project_car__item">
                            <div class="project_car__item_title">Minimum de positions</div>
                            <div class="project_car__item_value">5</div>
                        </div>
                    </div>
                    <div class="project_car__col">
                        <div class="project_car__item">
                            <div class="project_car__item_title">Bonus immédiat</div>
                            <div class="project_car__item_value">0.0%</div>
                        </div>
                    </div>
                </div>

                <template x-if="status === 1">
                    <div  class="dep_gray_block">
                        <div class="oa_s1__block">
                            <div class="fpt_label text-center">Insérer le montant en</div>
                            <div class="project_input_group">
                                <input type="text" x-model="amount" class="project_input_group__input " value="">
                                <span class="project_input_group__curr">$</span>
                            </div>

                            <div class="inv_error mb-0 mt-2" x-if="error" x-text="error"></div>
                            <div class="oa_s1__lt">
                                Après avoir inséré le montant que vous souhaitez créditer à votre compte puis "Valider", vous devez vous rapprocher de votre conseiller pour finaliser les modalités d'encaissement.
                            </div>
                            <button class="btn btn-primary w-100" @click="add()">
                                <svg class="me-2" width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.22253 0.0362784C6.24958 0.200083 5.51526 0.841641 4.85026 2.10885C4.64999 2.49046 3.4018 5.3829 3.4018 5.46539C3.4018 5.47165 3.48799 5.45863 3.59337 5.43645C3.69876 5.41423 4.44512 5.38371 5.25206 5.36861L6.71917 5.34112L7.79287 2.84146C8.3834 1.46666 8.87608 0.305604 8.88766 0.26134C8.90457 0.196657 8.86585 0.170919 8.69073 0.130216C8.12778 -0.000638373 7.6306 -0.0324616 7.22253 0.0362784ZM9.7619 0.583945C9.7395 0.641371 9.27297 1.72855 8.72512 2.9999C8.17728 4.27121 7.72904 5.32092 7.72904 5.33255C7.72904 5.34418 8.99386 5.35369 10.5397 5.35369C13.4555 5.35369 14.2182 5.3852 14.8282 5.53093C15.0264 5.5783 15.1935 5.61215 15.1994 5.60625C15.247 5.55874 15.3043 4.81779 15.2799 4.56695C15.1652 3.38926 14.4904 2.57673 13.0151 1.84015C12.6196 1.64268 10.1548 0.589895 9.90398 0.511283C9.82384 0.486176 9.79404 0.501412 9.7619 0.583945ZM3.76241 6.80318C2.31932 7.01256 0.9044 8.12137 0.335007 9.48905C0.00730853 10.2762 0.00027662 10.3332 6.167e-06 12.2052C-0.000264286 13.7557 0.00798458 13.9412 0.0997582 14.4484C0.497729 16.6482 1.66266 17.8694 3.76241 18.2882C4.64282 18.4638 5.14271 18.4788 9.46445 18.4591C13.1264 18.4424 13.6562 18.4313 13.9945 18.364C15.4966 18.0654 16.4792 17.4863 17.1143 16.5254C17.8208 15.4565 18.0371 14.3079 17.995 11.8489C17.9752 10.6977 17.9651 10.5727 17.8588 10.1714C17.4308 8.55549 16.2281 7.33313 14.635 6.895L14.1974 6.77465L9.12638 6.76766C6.14618 6.76356 3.9346 6.77821 3.76241 6.80318ZM9.34509 9.57902C9.63389 9.79466 9.64349 9.83239 9.65864 10.811L9.67256 11.7093H10.5347C11.3047 11.7093 11.4167 11.719 11.583 11.7995C11.9321 11.9685 12.0644 12.4012 11.8717 12.744C11.6949 13.0586 11.6087 13.0823 10.5801 13.0987L9.66729 13.1133L9.66657 14.0228C9.66585 14.8807 9.66012 14.9422 9.56515 15.1078C9.31511 15.5439 8.69884 15.561 8.41735 15.1397C8.31913 14.9927 8.31503 14.9487 8.31503 14.0466V13.1067L7.44732 13.1057C6.68929 13.1048 6.55551 13.0937 6.389 13.0181C6.18359 12.9249 6.03403 12.7265 5.98882 12.4872C5.94469 12.2537 6.12585 11.9364 6.37507 11.8107C6.5629 11.716 6.63362 11.7093 7.44561 11.7093H8.31503V10.8244C8.31503 9.997 8.32134 9.92925 8.41216 9.78235C8.60053 9.47751 9.07162 9.37483 9.34509 9.57902Z" fill="white"/>
                                </svg>
                                Ajouter
                            </button>
                        </div>
                        <div class="oa_s1__text">
                            Le montant doit être compris entre <span>0€</span> et <span>5000000€</span> pour profiter des avantages de ce compte.
                            <br />
                            Le règlement doit être effectué dans les <span>48 heures</span> pour valider votre dépôt de fonds.
                            <br />
                            <span>Pour commencer immédiatement à investir, veuillez valider votre compte de garantie en cliquant ici.</span>
                        </div>
                    </div>
                </template>

                <template x-if="status === 2">
                    <div>
                        <div class="dep_gray_block">
                            <div class="oa_edit_block">
                                <div class="oa_edit_text">Montant en: <span class="color_theme">10000 €</span></div>
                                <button class="btn btn-primary ps-4 pe-4" @click="edit()">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.7594 5.73184L14.268 2.24122C14.1519 2.12511 14.0141 2.03301 13.8624 1.97018C13.7107 1.90734 13.5482 1.875 13.384 1.875C13.2198 1.875 13.0572 1.90734 12.9056 1.97018C12.7539 2.03301 12.6161 2.12511 12.5 2.24122L2.86641 11.8748C2.74983 11.9905 2.65741 12.1281 2.59451 12.2798C2.5316 12.4315 2.49948 12.5942 2.50001 12.7584V16.2498C2.50001 16.5813 2.6317 16.8993 2.86612 17.1337C3.10054 17.3681 3.41849 17.4998 3.75001 17.4998H16.875C17.0408 17.4998 17.1997 17.434 17.3169 17.3168C17.4342 17.1995 17.5 17.0406 17.5 16.8748C17.5 16.7091 17.4342 16.5501 17.3169 16.4329C17.1997 16.3157 17.0408 16.2498 16.875 16.2498H9.00938L17.7594 7.49981C17.8755 7.38373 17.9676 7.24592 18.0304 7.09425C18.0933 6.94257 18.1256 6.78 18.1256 6.61583C18.1256 6.45165 18.0933 6.28908 18.0304 6.13741C17.9676 5.98573 17.8755 5.84792 17.7594 5.73184ZM10.625 5.88341L11.9289 7.18731L5.31251 13.8037L4.0086 12.4998L10.625 5.88341ZM3.75001 16.2498V14.0084L5.99141 16.2498H3.75001ZM7.50001 15.9912L6.19688 14.6873L12.8125 8.07091L14.1164 9.37481L7.50001 15.9912ZM15 8.49122L11.5094 4.99981L13.3844 3.12481L16.875 6.61622L15 8.49122Z" fill="white"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="">
                            <ul class="nav nav-tabs nav-tabs-horizontal" id="profileTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="htab1" data-bs-toggle="tab" data-bs-target="#oa_bank_transfer"
                                            type="button" role="tab" aria-controls="home" aria-selected="true">Vierement bancaire</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="htab2" data-bs-toggle="tab" data-bs-target="#oa_crypto_transfer"
                                            type="button" role="tab" aria-controls="profile" aria-selected="false">Transfert de crypto-monnaie</button>
                                </li>
                            </ul>

                            <div class="tab-content tabs_deposit" id="depositTabContent">
                                <div class="tab-pane fade show active" id="oa_bank_transfer" role="tabpanel" aria-labelledby="htab1">
                                    <div class="tab_body mb-4">
                                        <div class="av_inreview">
                                            <div class="av_inreview__img">
                                                <img src="./assets/img/svg/personal_bank_info.svg" alt="">
                                            </div>
                                            <div class="av_inreview__info">
                                                <div class="av_title">Information bancaire</div>
                                                <div class="av_text_2">
                                                    Understanding your bank details, such as IBAN and SWIFT codes, is crucial for managing your finances effectively. These identifiers ensure that your transactions are processed smoothly and securely, enhancing your overall banking experience.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6 dep_bt_block1">
                                            <div class="dep_bt_title">Information bancaire #1</div>
                                            <div class="dep_bt_info">
                                                <div class="dep_bt_info__item">
                                                    <div class="dep_bt_info__item_label">Nom de la banque</div>
                                                    <div class="dep_bt_info__item_value">Nom de la banque</div>
                                                </div>
                                                <div class="dep_bt_info__item">
                                                    <div class="dep_bt_info__item_label">Numéro de banque</div>
                                                    <div class="dep_bt_info__item_value">№4814888467</div>
                                                </div>
                                                <div class="dep_bt_info__item">
                                                    <div class="dep_bt_info__item_label">Numéro de routage</div>
                                                    <div class="dep_bt_info__item_value"> 56+56+56+77</div>
                                                </div>
                                                <div class="dep_bt_info__item">
                                                    <div class="dep_bt_info__item_label">Numéro de compte</div>
                                                    <div class="dep_bt_info__item_value">12322345654</div>
                                                </div>
                                                <div class="dep_bt_info__item">
                                                    <div class="dep_bt_info__item_label">SWIFT/BIC</div>
                                                    <div class="dep_bt_info__item_value">1614164646</div>
                                                </div>
                                                <div class="dep_bt_info__item">
                                                    <div class="dep_bt_info__item_label">IBAN</div>
                                                    <div class="dep_bt_info__item_value">UK 3513514684684684</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="dep_bt_title">Information bancaire #2</div>
                                            <div class="dep_bt_info">
                                                <div class="dep_bt_info__item">
                                                    <div class="dep_bt_info__item_label">Nom de la banque</div>
                                                    <div class="dep_bt_info__item_value">Nom de la banque</div>
                                                </div>
                                                <div class="dep_bt_info__item">
                                                    <div class="dep_bt_info__item_label">Numéro de banque</div>
                                                    <div class="dep_bt_info__item_value">№4814888467</div>
                                                </div>
                                                <div class="dep_bt_info__item">
                                                    <div class="dep_bt_info__item_label">Numéro de routage</div>
                                                    <div class="dep_bt_info__item_value"> 56+56+56+77</div>
                                                </div>
                                                <div class="dep_bt_info__item">
                                                    <div class="dep_bt_info__item_label">Numéro de compte</div>
                                                    <div class="dep_bt_info__item_value">12322345654</div>
                                                </div>
                                                <div class="dep_bt_info__item">
                                                    <div class="dep_bt_info__item_label">SWIFT/BIC</div>
                                                    <div class="dep_bt_info__item_value">1614164646</div>
                                                </div>
                                                <div class="dep_bt_info__item">
                                                    <div class="dep_bt_info__item_label">IBAN</div>
                                                    <div class="dep_bt_info__item_value">UK 3513514684684684</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="oa_crypto_transfer" role="tabpanel" aria-labelledby="htab2">
                                    <div class="tab_body mb-4">
                                        <div class="av_inreview">
                                            <div class="av_inreview__img">
                                                <img src="./assets/img/svg/deposit_crypto.svg" alt="">
                                            </div>
                                            <div class="av_inreview__info">
                                                <div class="av_title">Informations sur le portefeuille de crypto-monnaies</div>
                                                <div class="av_text_2">
                                                    Veuillez transférer le montant nécessaire sur le(s) portefeuille(s)  ci-dessous et indiquer le hachage de la transaction à votre conseiller. Transférer des cryptomonnaies est un processus simple et rapide. Pour effectuer un transfert, il vous suffit de disposer d'un portefeuille numérique et de l'adresse de destination.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wallet_list" x-data="depositFunc()">
                                        <div class="wallet_item fp_item fp_item__animated">
                                            <div class="fp_item__box wallet_item__box">
                                                <div class="wallet_item__top">
                                                    <div class="wallet_item__head">
                                                        <div class="wallet_item__icon">
                                                            <img src="./images/eth.png" alt="">
                                                        </div>
                                                        <div class="wallet_item__name">Ethereum (ETH)</div>
                                                    </div>
                                                    <div class="wallet_item__qr">
                                                        <img src="data:image/png;base64,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" style="display: block;">
                                                        <div class="wallet_item__qr_blur">
                                                            <button class="btn btn-primary" @click="hideQrBlur($event.target.closest('button'))">
                                                                Show QR
                                                                <svg class="ms-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M23.1853 11.6962C23.1525 11.6222 22.3584 9.86062 20.5931 8.09531C18.2409 5.74312 15.27 4.5 12 4.5C8.72999 4.5 5.75905 5.74312 3.40687 8.09531C1.64155 9.86062 0.843741 11.625 0.814679 11.6962C0.772035 11.7922 0.75 11.896 0.75 12.0009C0.75 12.1059 0.772035 12.2097 0.814679 12.3056C0.847491 12.3797 1.64155 14.1403 3.40687 15.9056C5.75905 18.2569 8.72999 19.5 12 19.5C15.27 19.5 18.2409 18.2569 20.5931 15.9056C22.3584 14.1403 23.1525 12.3797 23.1853 12.3056C23.2279 12.2097 23.25 12.1059 23.25 12.0009C23.25 11.896 23.2279 11.7922 23.1853 11.6962ZM12 18C9.11437 18 6.59343 16.9509 4.50655 14.8828C3.65028 14.0313 2.92179 13.0603 2.34374 12C2.92164 10.9396 3.65014 9.9686 4.50655 9.11719C6.59343 7.04906 9.11437 6 12 6C14.8856 6 17.4066 7.04906 19.4934 9.11719C20.3514 9.9684 21.0815 10.9394 21.6609 12C20.985 13.2619 18.0403 18 12 18ZM12 7.5C11.11 7.5 10.2399 7.76392 9.49993 8.25839C8.7599 8.75285 8.18313 9.45566 7.84253 10.2779C7.50194 11.1002 7.41282 12.005 7.58646 12.8779C7.76009 13.7508 8.18867 14.5526 8.81801 15.182C9.44735 15.8113 10.2492 16.2399 11.1221 16.4135C11.995 16.5872 12.8998 16.4981 13.7221 16.1575C14.5443 15.8169 15.2471 15.2401 15.7416 14.5001C16.2361 13.76 16.5 12.89 16.5 12C16.4988 10.8069 16.0242 9.66303 15.1806 8.81939C14.337 7.97575 13.1931 7.50124 12 7.5ZM12 15C11.4066 15 10.8266 14.8241 10.3333 14.4944C9.83993 14.1648 9.45542 13.6962 9.22835 13.1481C9.00129 12.5999 8.94188 11.9967 9.05764 11.4147C9.17339 10.8328 9.45911 10.2982 9.87867 9.87868C10.2982 9.45912 10.8328 9.1734 11.4147 9.05764C11.9967 8.94189 12.5999 9.0013 13.148 9.22836C13.6962 9.45542 14.1648 9.83994 14.4944 10.3333C14.824 10.8266 15 11.4067 15 12C15 12.7956 14.6839 13.5587 14.1213 14.1213C13.5587 14.6839 12.7956 15 12 15Z" fill="white"/>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="wallet_item__descr">
                                                        Après réception des crypto monnaies, elles seront immédiatement créditées sur votre compte
                                                    </div>
                                                </div>
                                                <div class="wallet_item__bottom">
                                                    <div class="wallet_item__addres">
                                                        <div class="wallet_item__addres_title">Adresse Ethereum :</div>
                                                        <div class="wallet_item__addres_value">12q924a68w4f56a4wfd8456a4w181jh24</div>
                                                    </div>
                                                    <div class="wallet_item__btns">
                                                        <button class="btn btn-primary wallet_item__copy" @click="copyAddress($event.target.closest('button'))">
                                                            Copy
                                                            <svg class="ms-1" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M15.1875 2.25H6.1875C6.03832 2.25 5.89524 2.30926 5.78975 2.41475C5.68426 2.52024 5.625 2.66332 5.625 2.8125V5.625H2.8125C2.66332 5.625 2.52024 5.68426 2.41475 5.78975C2.30926 5.89524 2.25 6.03832 2.25 6.1875V15.1875C2.25 15.3367 2.30926 15.4798 2.41475 15.5852C2.52024 15.6907 2.66332 15.75 2.8125 15.75H11.8125C11.9617 15.75 12.1048 15.6907 12.2102 15.5852C12.3157 15.4798 12.375 15.3367 12.375 15.1875V12.375H15.1875C15.3367 12.375 15.4798 12.3157 15.5852 12.2102C15.6907 12.1048 15.75 11.9617 15.75 11.8125V2.8125C15.75 2.66332 15.6907 2.52024 15.5852 2.41475C15.4798 2.30926 15.3367 2.25 15.1875 2.25ZM11.25 14.625H3.375V6.75H11.25V14.625ZM14.625 11.25H12.375V6.1875C12.375 6.03832 12.3157 5.89524 12.2102 5.78975C12.1048 5.68426 11.9617 5.625 11.8125 5.625H6.75V3.375H14.625V11.25Z" fill="white"/>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wallet_item fp_item fp_item__animated">
                                            <div class="fp_item__box wallet_item__box">
                                                <div class="wallet_item__top">
                                                    <div class="wallet_item__head">
                                                        <div class="wallet_item__icon">
                                                            <img src="./images/eth.png" alt="">
                                                        </div>
                                                        <div class="wallet_item__name">Ethereum (ETH)</div>
                                                    </div>
                                                    <div class="wallet_item__qr">
                                                        <img src="data:image/png;base64,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" style="display: block;">
                                                        <div class="wallet_item__qr_blur">
                                                            <button class="btn btn-primary" @click="hideQrBlur($event.target.closest('button'))">
                                                                Show QR
                                                                <svg class="ms-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M23.1853 11.6962C23.1525 11.6222 22.3584 9.86062 20.5931 8.09531C18.2409 5.74312 15.27 4.5 12 4.5C8.72999 4.5 5.75905 5.74312 3.40687 8.09531C1.64155 9.86062 0.843741 11.625 0.814679 11.6962C0.772035 11.7922 0.75 11.896 0.75 12.0009C0.75 12.1059 0.772035 12.2097 0.814679 12.3056C0.847491 12.3797 1.64155 14.1403 3.40687 15.9056C5.75905 18.2569 8.72999 19.5 12 19.5C15.27 19.5 18.2409 18.2569 20.5931 15.9056C22.3584 14.1403 23.1525 12.3797 23.1853 12.3056C23.2279 12.2097 23.25 12.1059 23.25 12.0009C23.25 11.896 23.2279 11.7922 23.1853 11.6962ZM12 18C9.11437 18 6.59343 16.9509 4.50655 14.8828C3.65028 14.0313 2.92179 13.0603 2.34374 12C2.92164 10.9396 3.65014 9.9686 4.50655 9.11719C6.59343 7.04906 9.11437 6 12 6C14.8856 6 17.4066 7.04906 19.4934 9.11719C20.3514 9.9684 21.0815 10.9394 21.6609 12C20.985 13.2619 18.0403 18 12 18ZM12 7.5C11.11 7.5 10.2399 7.76392 9.49993 8.25839C8.7599 8.75285 8.18313 9.45566 7.84253 10.2779C7.50194 11.1002 7.41282 12.005 7.58646 12.8779C7.76009 13.7508 8.18867 14.5526 8.81801 15.182C9.44735 15.8113 10.2492 16.2399 11.1221 16.4135C11.995 16.5872 12.8998 16.4981 13.7221 16.1575C14.5443 15.8169 15.2471 15.2401 15.7416 14.5001C16.2361 13.76 16.5 12.89 16.5 12C16.4988 10.8069 16.0242 9.66303 15.1806 8.81939C14.337 7.97575 13.1931 7.50124 12 7.5ZM12 15C11.4066 15 10.8266 14.8241 10.3333 14.4944C9.83993 14.1648 9.45542 13.6962 9.22835 13.1481C9.00129 12.5999 8.94188 11.9967 9.05764 11.4147C9.17339 10.8328 9.45911 10.2982 9.87867 9.87868C10.2982 9.45912 10.8328 9.1734 11.4147 9.05764C11.9967 8.94189 12.5999 9.0013 13.148 9.22836C13.6962 9.45542 14.1648 9.83994 14.4944 10.3333C14.824 10.8266 15 11.4067 15 12C15 12.7956 14.6839 13.5587 14.1213 14.1213C13.5587 14.6839 12.7956 15 12 15Z" fill="white"/>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="wallet_item__descr">
                                                        Après réception des crypto monnaies, elles seront immédiatement créditées sur votre compte
                                                    </div>
                                                </div>
                                                <div class="wallet_item__bottom">
                                                    <div class="wallet_item__addres">
                                                        <div class="wallet_item__addres_title">Adresse Ethereum :</div>
                                                        <div class="wallet_item__addres_value">12q924a68w4f56a4wfd8456a4w181jh24</div>
                                                    </div>
                                                    <div class="wallet_item__btns">
                                                        <button class="btn btn-primary wallet_item__copy" @click="copyAddress($event.target.closest('button'))">
                                                            Copy
                                                            <svg class="ms-1" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M15.1875 2.25H6.1875C6.03832 2.25 5.89524 2.30926 5.78975 2.41475C5.68426 2.52024 5.625 2.66332 5.625 2.8125V5.625H2.8125C2.66332 5.625 2.52024 5.68426 2.41475 5.78975C2.30926 5.89524 2.25 6.03832 2.25 6.1875V15.1875C2.25 15.3367 2.30926 15.4798 2.41475 15.5852C2.52024 15.6907 2.66332 15.75 2.8125 15.75H11.8125C11.9617 15.75 12.1048 15.6907 12.2102 15.5852C12.3157 15.4798 12.375 15.3367 12.375 15.1875V12.375H15.1875C15.3367 12.375 15.4798 12.3157 15.5852 12.2102C15.6907 12.1048 15.75 11.9617 15.75 11.8125V2.8125C15.75 2.66332 15.6907 2.52024 15.5852 2.41475C15.4798 2.30926 15.3367 2.25 15.1875 2.25ZM11.25 14.625H3.375V6.75H11.25V14.625ZM14.625 11.25H12.375V6.1875C12.375 6.03832 12.3157 5.89524 12.2102 5.78975C12.1048 5.68426 11.9617 5.625 11.8125 5.625H6.75V3.375H14.625V11.25Z" fill="white"/>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wallet_item fp_item fp_item__animated">
                                            <div class="fp_item__box wallet_item__box">
                                                <div class="wallet_item__top">
                                                    <div class="wallet_item__head">
                                                        <div class="wallet_item__icon">
                                                            <img src="./images/eth.png" alt="">
                                                        </div>
                                                        <div class="wallet_item__name">Ethereum (ETH)</div>
                                                    </div>

                                                    <div class="wallet_item__qr">
                                                        <img src="data:image/png;base64,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" style="display: block;">
                                                        <div class="wallet_item__qr_blur">
                                                            <button class="btn btn-primary" @click="hideQrBlur($event.target.closest('button'))">
                                                                Show QR
                                                                <svg class="ms-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M23.1853 11.6962C23.1525 11.6222 22.3584 9.86062 20.5931 8.09531C18.2409 5.74312 15.27 4.5 12 4.5C8.72999 4.5 5.75905 5.74312 3.40687 8.09531C1.64155 9.86062 0.843741 11.625 0.814679 11.6962C0.772035 11.7922 0.75 11.896 0.75 12.0009C0.75 12.1059 0.772035 12.2097 0.814679 12.3056C0.847491 12.3797 1.64155 14.1403 3.40687 15.9056C5.75905 18.2569 8.72999 19.5 12 19.5C15.27 19.5 18.2409 18.2569 20.5931 15.9056C22.3584 14.1403 23.1525 12.3797 23.1853 12.3056C23.2279 12.2097 23.25 12.1059 23.25 12.0009C23.25 11.896 23.2279 11.7922 23.1853 11.6962ZM12 18C9.11437 18 6.59343 16.9509 4.50655 14.8828C3.65028 14.0313 2.92179 13.0603 2.34374 12C2.92164 10.9396 3.65014 9.9686 4.50655 9.11719C6.59343 7.04906 9.11437 6 12 6C14.8856 6 17.4066 7.04906 19.4934 9.11719C20.3514 9.9684 21.0815 10.9394 21.6609 12C20.985 13.2619 18.0403 18 12 18ZM12 7.5C11.11 7.5 10.2399 7.76392 9.49993 8.25839C8.7599 8.75285 8.18313 9.45566 7.84253 10.2779C7.50194 11.1002 7.41282 12.005 7.58646 12.8779C7.76009 13.7508 8.18867 14.5526 8.81801 15.182C9.44735 15.8113 10.2492 16.2399 11.1221 16.4135C11.995 16.5872 12.8998 16.4981 13.7221 16.1575C14.5443 15.8169 15.2471 15.2401 15.7416 14.5001C16.2361 13.76 16.5 12.89 16.5 12C16.4988 10.8069 16.0242 9.66303 15.1806 8.81939C14.337 7.97575 13.1931 7.50124 12 7.5ZM12 15C11.4066 15 10.8266 14.8241 10.3333 14.4944C9.83993 14.1648 9.45542 13.6962 9.22835 13.1481C9.00129 12.5999 8.94188 11.9967 9.05764 11.4147C9.17339 10.8328 9.45911 10.2982 9.87867 9.87868C10.2982 9.45912 10.8328 9.1734 11.4147 9.05764C11.9967 8.94189 12.5999 9.0013 13.148 9.22836C13.6962 9.45542 14.1648 9.83994 14.4944 10.3333C14.824 10.8266 15 11.4067 15 12C15 12.7956 14.6839 13.5587 14.1213 14.1213C13.5587 14.6839 12.7956 15 12 15Z" fill="white"/>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="wallet_item__descr">
                                                        Après réception des crypto monnaies, elles seront immédiatement créditées sur votre compte
                                                    </div>
                                                </div>
                                                <div class="wallet_item__bottom">
                                                    <div class="wallet_item__addres">
                                                        <div class="wallet_item__addres_title">Adresse Ethereum :</div>
                                                        <div class="wallet_item__addres_value">12q924a68w4f56a4wfd8456a4w181jh24</div>
                                                    </div>
                                                    <div class="wallet_item__btns">
                                                        <button class="btn btn-primary wallet_item__copy" @click="copyAddress($event.target.closest('button'))">
                                                            Copy
                                                            <svg class="ms-1" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M15.1875 2.25H6.1875C6.03832 2.25 5.89524 2.30926 5.78975 2.41475C5.68426 2.52024 5.625 2.66332 5.625 2.8125V5.625H2.8125C2.66332 5.625 2.52024 5.68426 2.41475 5.78975C2.30926 5.89524 2.25 6.03832 2.25 6.1875V15.1875C2.25 15.3367 2.30926 15.4798 2.41475 15.5852C2.52024 15.6907 2.66332 15.75 2.8125 15.75H11.8125C11.9617 15.75 12.1048 15.6907 12.2102 15.5852C12.3157 15.4798 12.375 15.3367 12.375 15.1875V12.375H15.1875C15.3367 12.375 15.4798 12.3157 15.5852 12.2102C15.6907 12.1048 15.75 11.9617 15.75 11.8125V2.8125C15.75 2.66332 15.6907 2.52024 15.5852 2.41475C15.4798 2.30926 15.3367 2.25 15.1875 2.25ZM11.25 14.625H3.375V6.75H11.25V14.625ZM14.625 11.25H12.375V6.1875C12.375 6.03832 12.3157 5.89524 12.2102 5.78975C12.1048 5.68426 11.9617 5.625 11.8125 5.625H6.75V3.375H14.625V11.25Z" fill="white"/>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="oa_btns">
                            <button class="btn btn-primary btn-big" @click="submit()">Fermer</button>
                        </div>
                    </div>

                </template>
            </div>
        </div>
    </div>
</div>

<?php include_once('_footer.php'); ?>

<script type="text/javascript" src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="./assets/js/app.js"></script>

<script>
    function fondPlansFunc() {
        return {
            viewType: 'list',

            showOpenAccountModal(plan) {
                console.log(plan)
                showModal('openAccount')
            }
        }
    }

    function openAccountModal() {
        return {
            status: 1,
            amount: 0,
            error: '',
            add() {
                if(this.amount <= 0){
                    this.error = 'Montant incorrect'
                }else{
                    this.status = 2
                }

            },
            edit() {
                this.status = 1
            },
            submit() {
                hideModal('openAccount')
                this.status = 1
            },

            copyTimeout: null,

            copyAddress(button) {
                const walletItem = button.closest('.wallet_item__bottom')
                const addressEl = walletItem.querySelector('.wallet_item__addres_value')
                const text = addressEl.innerText.trim()

                navigator.clipboard.writeText(text)

                // меняем текст кнопки
                const originalHtml = button.innerHTML
                button.innerHTML = 'Copied'

                // возвращаем обратно через 2 сек
                clearTimeout(this.copyTimeout)
                this.copyTimeout = setTimeout(() => {
                    button.innerHTML = originalHtml
                }, 2000)
            },

            hideQrBlur(button) {
                const blur = button.closest('.wallet_item__qr_blur')
                if (blur) {
                    blur.style.display = 'none'
                }
            }
        }
    }
</script>

<script type="text/javascript" src="./assets/js/alpinejs.min.js"></script>

</body>
</html>