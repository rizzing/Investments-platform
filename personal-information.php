<?php
$accountVerification = 'not verified';
//$accountVerification = 'in review';
//$accountVerification = 'verified';
//$accountVerification = 'declined';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1" name="viewport">

    <title>Personal information | CC3</title>
    <meta content="CC3" name="description">

    <?php include_once('./_head.php') ?>
</head>
<body class="<?= htmlspecialchars($theme) ?> <?= htmlspecialchars($menuType) ?>">

<div class="full_page <?php if($isVerticalPage){ ?> full_page__vertical <?php } ?>">

    <?php
    $currentPage = 'personal';
    if($isVerticalPage){
        include('_header_v.php');
    } else {
        include('_header.php');
    }?>

    <main class="main_page">
    <div class="container_1040">
        <h1 class="title_with_icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM6.945 18.5156C7.48757 17.6671 8.23501 16.9688 9.11843 16.4851C10.0019 16.0013 10.9928 15.7478 12 15.7478C13.0072 15.7478 13.9982 16.0013 14.8816 16.4851C15.765 16.9688 16.5124 17.6671 17.055 18.5156C15.6097 19.6397 13.831 20.2499 12 20.2499C10.169 20.2499 8.39032 19.6397 6.945 18.5156ZM9 11.25C9 10.6567 9.17595 10.0766 9.5056 9.58329C9.83524 9.08994 10.3038 8.70542 10.852 8.47836C11.4001 8.2513 12.0033 8.19189 12.5853 8.30764C13.1672 8.4234 13.7018 8.70912 14.1213 9.12868C14.5409 9.54824 14.8266 10.0828 14.9424 10.6647C15.0581 11.2467 14.9987 11.8499 14.7716 12.3981C14.5446 12.9462 14.1601 13.4148 13.6667 13.7444C13.1734 14.0741 12.5933 14.25 12 14.25C11.2044 14.25 10.4413 13.9339 9.87868 13.3713C9.31607 12.8087 9 12.0456 9 11.25ZM18.165 17.4759C17.3285 16.2638 16.1524 15.3261 14.7844 14.7806C15.5192 14.2019 16.0554 13.4085 16.3184 12.5108C16.5815 11.6132 16.5582 10.6559 16.252 9.77207C15.9457 8.88825 15.3716 8.12183 14.6096 7.5794C13.8475 7.03696 12.9354 6.74548 12 6.74548C11.0646 6.74548 10.1525 7.03696 9.39044 7.5794C8.62839 8.12183 8.05432 8.88825 7.74805 9.77207C7.44179 10.6559 7.41855 11.6132 7.68157 12.5108C7.94459 13.4085 8.4808 14.2019 9.21563 14.7806C7.84765 15.3261 6.67147 16.2638 5.835 17.4759C4.77804 16.2873 4.0872 14.8185 3.84567 13.2464C3.60415 11.6743 3.82224 10.0658 4.47368 8.61478C5.12512 7.16372 6.18213 5.93192 7.51745 5.06769C8.85276 4.20346 10.4094 3.74367 12 3.74367C13.5906 3.74367 15.1473 4.20346 16.4826 5.06769C17.8179 5.93192 18.8749 7.16372 19.5263 8.61478C20.1778 10.0658 20.3959 11.6743 20.1543 13.2464C19.9128 14.8185 19.222 16.2873 18.165 17.4759Z" fill="black"/>
            </svg>
            <span>Informations personnelles</span>
        </h1>

        <div class="mobile_hide">
            <ul class="nav nav-tabs nav-tabs-horizontal" id="profileTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#verification"
                            type="button" role="tab" aria-controls="home" aria-selected="true">Account Verification</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#identite"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">Identite & contact</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="bank-information-tab" data-bs-toggle="tab" data-bs-target="#bank_information"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">Information bancaire</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#beneficiares"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">Bénéficiaires</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#security"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">Security Hub</button>
                </li>
            </ul>
        </div>

        <div class="mobile_show mb-4">
            <div class="dropdown" >
                <button id="tabDropdownBtn" class="btn btn-primary dropdown-toggle w-100" type="button" data-bs-toggle="dropdown">
                    Account Verification
                </button>
                <ul class="dropdown-menu dropdown-select w-100" role="tablist">
                    <li><a class="dropdown-item" onclick="openProfileTab('verification')" href="#verification">Account Verification</a></li>
                    <li><a class="dropdown-item" onclick="openProfileTab('identite')" href="#identite">Identite & contact</a></li>
                    <li><a class="dropdown-item" onclick="openProfileTab('bank_information')" href="#bank_information">Information bancaire</a></li>
                    <li><a class="dropdown-item" onclick="openProfileTab('beneficiares')" href="#beneficiares">Bénéficiaires</a></li>
                    <li><a class="dropdown-item" onclick="openProfileTab('security')" href="#security">Security Hub</a></li>
                </ul>
            </div>
        </div>

        <div class="tab-content " id="profileTabContent">
            <div class="tab-pane fade show active" id="verification" role="tabpanel" aria-labelledby="home-tab">
                <div class="profile_info" x-data="accountVerification" >
                    <div x-show="accountVerificationStatus === 'not verified'">
                        <div class="tab_card">
                            <div class="tab_head">
                                <h2 class="tab_title">Account Verification</h2>
                                <div class="badge_verified badge_verified__not_verified">
                                    <div class="badge_verified__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                            <path d="M7.56094 7.8001V5.1001C7.56094 4.8614 7.65576 4.63248 7.82454 4.4637C7.99332 4.29492 8.22224 4.2001 8.46094 4.2001C8.69963 4.2001 8.92855 4.29492 9.09733 4.4637C9.26612 4.63248 9.36094 4.8614 9.36094 5.1001V7.8001C9.36094 8.03879 9.26612 8.26771 9.09733 8.43649C8.92855 8.60528 8.69963 8.7001 8.46094 8.7001C8.22224 8.7001 7.99332 8.60528 7.82454 8.43649C7.65576 8.26771 7.56094 8.03879 7.56094 7.8001ZM8.46094 12.0001C8.69828 12.0001 8.93028 11.9297 9.12762 11.7979C9.32496 11.666 9.47877 11.4786 9.56959 11.2593C9.66042 11.04 9.68418 10.7988 9.63788 10.566C9.59158 10.3332 9.47729 10.1194 9.30947 9.95157C9.14164 9.78375 8.92782 9.66946 8.69505 9.62316C8.46227 9.57685 8.22099 9.60062 8.00172 9.69144C7.78245 9.78227 7.59503 9.93607 7.46317 10.1334C7.33132 10.3308 7.26094 10.5628 7.26094 10.8001C7.26094 11.1184 7.38737 11.4236 7.61241 11.6486C7.83745 11.8737 8.14268 12.0001 8.46094 12.0001ZM15.9609 2.1001V6.3001C15.9609 10.3718 13.9869 12.8416 12.3309 14.1968C10.5527 15.6511 8.77294 16.1468 8.69794 16.1686C8.54273 16.2106 8.37915 16.2106 8.22394 16.1686C8.14894 16.1476 6.36919 15.6511 4.59094 14.1968C2.93494 12.8416 0.960938 10.3718 0.960938 6.3001V2.1001C0.960938 1.70227 1.11897 1.32074 1.40028 1.03944C1.68158 0.758133 2.06311 0.600098 2.46094 0.600098H14.4609C14.8588 0.600098 15.2403 0.758133 15.5216 1.03944C15.8029 1.32074 15.9609 1.70227 15.9609 2.1001ZM14.1609 2.4001H2.76094V6.3001C2.76094 8.97835 3.74269 11.1518 5.67919 12.7613C6.50913 13.4465 7.44987 13.9849 8.46094 14.3536C9.47192 13.9847 10.4126 13.4463 11.2427 12.7613C13.1792 11.1518 14.1609 8.97835 14.1609 6.3001V2.4001Z" fill="#D93434"/>
                                        </svg>
                                    </div>
                                    <div class="badge_verified__text">Your Account Not Verified</div>
                                </div>
                            </div>
                            <div class="tab_body">
                                <div class="container_730">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="av_steps">
                                                <div class="av_step">
                                                    <div class="av_step__icon">
                                                        <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3.5" y="9.49976" width="13.6034" height="15.9579" rx="1.47975" fill="#86D993"/>
                                                            <path d="M12.8975 15.4886C12.9062 16.5506 12.2827 17.464 11.3807 17.8755C13.1874 18.2937 14.6114 19.7319 15.0068 21.5539C15.0685 21.8382 14.8408 22.0891 14.5503 22.0891H6.12909C5.83846 22.0891 5.60662 21.8381 5.66387 21.5536C6.03038 19.7326 7.4306 18.2938 9.22925 17.8766C8.32048 17.4651 7.68196 16.5517 7.67325 15.4898C7.66137 14.0414 8.8212 12.8674 10.2639 12.8674C11.7066 12.8674 12.8857 14.0414 12.8975 15.4886Z" fill="#1D1D1D"/>
                                                            <path d="M9.35938 16.3362C9.45089 16.5463 9.76871 16.9664 10.3078 16.9664C10.847 16.9664 11.1565 16.5463 11.2438 16.3362" stroke="#86D993" stroke-width="0.49325" stroke-linecap="round"/>
                                                            <rect x="0.654141" y="6.9039" width="39.6917" height="27.6917" rx="2.31211" fill="white" stroke="#1D1D1D" stroke-width="0.308281"/>
                                                            <rect x="3.5" y="15.7502" width="13.6034" height="15.9579" rx="1.84969" fill="#79B7FF"/>
                                                            <path d="M12.8975 21.7399C12.9062 22.8018 12.2827 23.7152 11.3807 24.1267C13.1435 24.5348 14.542 25.9139 14.9762 27.673C15.0633 28.0262 14.7781 28.3403 14.4149 28.3403H6.26452C5.90124 28.3403 5.6108 28.0259 5.69244 27.6727C6.09873 25.9145 7.47434 24.5348 9.22925 24.1279C8.32048 23.7163 7.68196 22.803 7.67325 21.741C7.66137 20.2926 8.8212 19.1187 10.2639 19.1187C11.7066 19.1187 12.8857 20.2926 12.8975 21.7399Z" fill="#1D1D1D"/>
                                                            <path d="M9.35938 22.5874C9.45089 22.7975 9.76871 23.2176 10.3078 23.2176C10.847 23.2176 11.1565 22.7975 11.2438 22.5874" stroke="#79B7FF" stroke-width="0.616563" stroke-linecap="round"/>
                                                            <rect opacity="0.8" x="19.5" y="26.749" width="5" height="5" rx="0.616563" fill="#66DD8C" fill-opacity="0.12"/>
                                                            <rect x="25.5" y="29.0386" width="4.5" height="1" rx="0.5" fill="#EBE9E9"/>
                                                            <rect x="25.5" y="30.7493" width="3" height="1" rx="0.5" fill="#EBE9E9"/>
                                                            <rect x="19.5" y="16.2498" width="7.5" height="1.5" rx="0.616563" fill="#EBE9E9"/>
                                                            <rect x="28.5" y="16.2498" width="9" height="1.5" rx="0.616563" fill="#EBE9E9"/>
                                                            <rect x="19.5" y="19.7502" width="4" height="1.5" rx="0.616563" fill="#EBE9E9"/>
                                                            <rect x="25" y="19.7502" width="12.5" height="1.5" rx="0.616563" fill="#EBE9E9"/>
                                                            <rect x="19.5" y="23.2495" width="18" height="1.5" rx="0.616563" fill="#EBE9E9"/>
                                                            <rect x="3.5" y="9.24927" width="34" height="4.5" rx="1.23313" fill="#EBE9E9"/>
                                                        </svg>
                                                    </div>
                                                    <div class="av_step__info">
                                                        <div class="av_step__title">Identity Verification</div>
                                                        <div class="av_step__text">ID card, passport, driver license supported</div>
                                                    </div>
                                                </div>
                                                <div class="av_step">
                                                    <div class="av_step__icon">
                                                        <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3.42773" y="9.28101" width="13.2716" height="15.5687" rx="1.44366" fill="#86D993"/>
                                                            <path d="M12.5963 15.1239C12.6048 16.16 11.9965 17.0511 11.1164 17.4526C12.8791 17.8606 14.2684 19.2637 14.6541 21.0412C14.7143 21.3187 14.4922 21.5634 14.2087 21.5634H5.99294C5.7094 21.5634 5.48321 21.3185 5.53906 21.041C5.89664 19.2644 7.2627 17.8606 9.01748 17.4537C8.13088 17.0522 7.50793 16.1611 7.49943 15.125C7.48784 13.712 8.61939 12.5667 10.0269 12.5667C11.4344 12.5667 12.5847 13.712 12.5963 15.1239Z" fill="#1D1D1D"/>
                                                            <path d="M9.14453 15.9512C9.23382 16.1561 9.54388 16.566 10.0699 16.566C10.5958 16.566 10.8978 16.1561 10.983 15.9512" stroke="#86D993" stroke-width="0.48122" stroke-linecap="round"/>
                                                            <rect x="0.654141" y="6.9039" width="39.6917" height="27.6917" rx="2.31211" fill="white" stroke="#1D1D1D" stroke-width="0.308281"/>
                                                            <path d="M4.42484 13.6697C4.0138 13.4324 3.5 13.7291 3.5 14.2037V17.792C3.5 18.2666 4.0138 18.5632 4.42484 18.3259L7.53237 16.5318C7.94341 16.2945 7.94341 15.7012 7.53237 15.4639L4.42484 13.6697Z" fill="#EBE9E9"/>
                                                            <path d="M3.80828 22.5309C3.61752 22.641 3.5 22.8446 3.5 23.0649V29.0826C3.5 30.5554 4.69391 31.7493 6.16667 31.7493H34.8333C35.0867 31.7493 35.3318 31.7139 35.564 31.6479L12.4071 18.2783C12.0256 18.058 11.5555 18.058 11.174 18.2783L3.80828 22.5309Z" fill="#EBE9E9"/>
                                                            <path d="M37.5 28.9167V17.3643C37.5 16.8896 36.9862 16.593 36.5752 16.8303L27.4953 22.0726C27.0843 22.3099 27.0843 22.9032 27.4953 23.1405L37.5 28.9167Z" fill="#EBE9E9"/>
                                                            <path d="M37.5 12.4473V12.4159C37.5 10.9432 36.3061 9.74927 34.8333 9.74927H6.16667C5.69869 9.74927 5.25887 9.86981 4.87657 10.0815L22.6206 20.3261C23.0021 20.5463 23.4722 20.5463 23.8537 20.3261L37.5 12.4473Z" fill="#EBE9E9"/>
                                                            <mask id="mask0_288_2683" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="3" y="9" width="35" height="23">
                                                                <path d="M4.42484 13.6697C4.0138 13.4324 3.5 13.7291 3.5 14.2037V17.792C3.5 18.2666 4.0138 18.5632 4.42484 18.3259L7.53237 16.5318C7.94341 16.2945 7.94341 15.7012 7.53237 15.4639L4.42484 13.6697Z" fill="#EBE9E9"/>
                                                                <path d="M3.80828 22.5309C3.61752 22.641 3.5 22.8446 3.5 23.0649V29.0826C3.5 30.5554 4.69391 31.7493 6.16667 31.7493H34.8333C35.0867 31.7493 35.3318 31.7139 35.564 31.6479L12.4071 18.2783C12.0256 18.058 11.5555 18.058 11.174 18.2783L3.80828 22.5309Z" fill="#EBE9E9"/>
                                                                <path d="M37.5 28.9167V17.3643C37.5 16.8896 36.9862 16.593 36.5752 16.8303L27.4953 22.0726C27.0843 22.3099 27.0843 22.9032 27.4953 23.1405L37.5 28.9167Z" fill="#EBE9E9"/>
                                                                <path d="M37.5 12.4473V12.4159C37.5 10.9432 36.3061 9.74927 34.8333 9.74927H6.16667C5.69869 9.74927 5.25887 9.86981 4.87657 10.0815L22.6206 20.3261C23.0021 20.5463 23.4722 20.5463 23.8537 20.3261L37.5 12.4473Z" fill="#EBE9E9"/>
                                                            </mask>
                                                            <g mask="url(#mask0_288_2683)">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M22.0405 16.8986L8.29883 8.53406L8.94876 7.46631L22.6904 15.8308C22.8857 15.9496 23.1302 15.9524 23.3281 15.8381L36.7486 8.08402L37.374 9.16635L23.9534 16.9204C23.3598 17.2634 22.6262 17.2551 22.0405 16.8986Z" fill="white" fill-opacity="0.4"/>
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M31.4501 32.1545L12.7283 20.6798C12.127 20.3113 11.3699 20.3113 10.7687 20.6798L1.73438 26.217L2.38758 27.2827L11.4219 21.7456C11.6223 21.6227 11.8747 21.6227 12.0751 21.7456L30.7969 33.2202L31.4501 32.1545Z" fill="white" fill-opacity="0.4"/>
                                                            </g>
                                                            <path d="M18.625 18.7197C18.625 21.5148 14.6481 26.8715 13.039 28.9246C12.699 29.3578 12.051 29.3578 11.7118 28.9246C10.1019 26.8715 6.125 21.5148 6.125 18.7197C6.125 15.2157 8.92357 12.3745 12.375 12.3745C15.8264 12.3745 18.625 15.2157 18.625 18.7197Z" fill="#79B7FF"/>
                                                            <path d="M12.5644 15.6224L13.2439 17.0658C13.352 17.2954 13.5607 17.454 13.8013 17.4904L15.3202 17.722C15.4922 17.7486 15.5608 17.9693 15.4367 18.0964L14.337 19.2195C14.1622 19.3979 14.0833 19.655 14.1237 19.9063L14.3831 21.4925C14.4122 21.6718 14.2327 21.8088 14.0786 21.724L12.7195 20.9753C12.5033 20.856 12.2458 20.856 12.0305 20.9753L10.6714 21.724C10.5173 21.8088 10.3378 21.6718 10.3669 21.4925L10.6263 19.9063C10.6677 19.654 10.5878 19.3979 10.413 19.2195L9.31329 18.0964C9.18922 17.9693 9.25783 17.7476 9.42984 17.722L10.9487 17.4904C11.1903 17.454 11.3989 17.2954 11.5061 17.0658L12.1856 15.6224C12.2627 15.4589 12.4845 15.4589 12.5616 15.6224H12.5644Z" fill="#1D1D1D"/>
                                                        </svg>
                                                    </div>
                                                    <div class="av_step__info">
                                                        <div class="av_step__title">Proof of address</div>
                                                        <div class="av_step__text">Documents that can prove the address, such as utility bills, etc</div>
                                                    </div>
                                                </div>
                                                <div class="av_step">
                                                    <div class="av_step__icon">
                                                        <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3.5" y="9.49976" width="13.6034" height="15.9579" rx="1.47975" fill="#86D993"/>
                                                            <path d="M12.8975 15.4886C12.9062 16.5506 12.2827 17.464 11.3807 17.8755C13.1874 18.2937 14.6114 19.7319 15.0068 21.5539C15.0685 21.8382 14.8408 22.0891 14.5503 22.0891H6.12909C5.83846 22.0891 5.60662 21.8381 5.66387 21.5536C6.03038 19.7326 7.4306 18.2938 9.22925 17.8766C8.32048 17.4651 7.68196 16.5517 7.67325 15.4898C7.66137 14.0414 8.8212 12.8674 10.2639 12.8674C11.7066 12.8674 12.8857 14.0414 12.8975 15.4886Z" fill="#1D1D1D"/>
                                                            <path d="M9.35938 16.3362C9.45089 16.5463 9.76871 16.9664 10.3078 16.9664C10.847 16.9664 11.1565 16.5463 11.2438 16.3362" stroke="#86D993" stroke-width="0.49325" stroke-linecap="round"/>
                                                            <rect x="0.654141" y="6.90487" width="39.6917" height="27.6917" rx="2.31211" fill="white" stroke="#1D1D1D" stroke-width="0.308281"/>
                                                            <mask id="mask0_288_2704" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="6" width="41" height="29">
                                                                <rect x="0.5" y="6.75122" width="40" height="27.6667" rx="2.46625" fill="white"/>
                                                            </mask>
                                                            <g mask="url(#mask0_288_2704)">
                                                                <path d="M6.5 13.0172C6.5 10.2931 8.70836 8.08472 11.4325 8.08472H29.5675C32.2916 8.08472 34.5 10.2931 34.5 13.0172V33.8189C34.5 36.543 32.2916 38.7514 29.5675 38.7514H11.4325C8.70836 38.7514 6.5 36.543 6.5 33.8189V13.0172Z" fill="#EBE9E9"/>
                                                                <path d="M7.83398 13.1173C7.83398 11.0742 9.49025 9.41797 11.5334 9.41797H29.4679C31.511 9.41797 33.1673 11.0742 33.1673 13.1173V36.3853C33.1673 38.4284 31.511 40.0846 29.4679 40.0846H11.5334C9.49025 40.0846 7.83398 38.4284 7.83398 36.3853V13.1173Z" fill="white"/>
                                                                <path d="M11.125 14.8504C11.125 13.8289 11.9531 13.0007 12.9747 13.0007H27.4003C28.4219 13.0007 29.25 13.8289 29.25 14.8504V27.401C29.25 28.4226 28.4219 29.2507 27.4003 29.2507H12.9747C11.9531 29.2507 11.125 28.4226 11.125 27.401V14.8504Z" fill="#EBE9E9"/>
                                                                <path d="M14.1559 13.0007H12.3581C11.6771 13.0007 11.125 13.5528 11.125 14.2339V16.6118M26.2191 13.0007H28.0169C28.6979 13.0007 29.25 13.5528 29.25 14.2339V16.6118M11.125 25.6396V28.0176C11.125 28.6986 11.6771 29.2507 12.3581 29.2507H14.1559M29.25 25.6396V28.0176C29.25 28.6986 28.6979 29.2507 28.0169 29.2507H26.2191" stroke="#79B7FF" stroke-width="0.924844" stroke-linecap="round"/>
                                                                <circle cx="20.2927" cy="21.0014" r="6.72237" fill="#1D1D1D"/>
                                                                <path d="M11.125 20.9154C11.125 20.5199 11.4456 20.1992 11.8412 20.1992H28.7426C29.1381 20.1992 29.4587 20.5199 29.4587 20.9154C29.4587 21.3109 29.1381 21.6315 28.7426 21.6315H11.8412C11.4456 21.6315 11.125 21.3109 11.125 20.9154Z" fill="#79B7FF"/>
                                                                <path d="M22.4453 19.3569C22.4525 20.2375 21.9355 20.995 21.1874 21.3363C22.6117 21.666 23.7492 22.76 24.1398 24.1652C24.2372 24.5158 23.9513 24.8306 23.5882 24.8306H17.0602C16.6969 24.8306 16.4058 24.5156 16.4978 24.1649C16.8661 22.7605 17.9854 21.666 19.4032 21.3372C18.6496 20.9959 18.1201 20.2385 18.1129 19.3578C18.103 18.1567 19.0648 17.1831 20.2613 17.1831C21.4577 17.1831 22.4355 18.1567 22.4453 19.3569Z" fill="#79B7FF"/>
                                                                <path d="M22.4453 19.3569C22.4525 20.2375 21.9355 20.995 21.1874 21.3363C22.6117 21.666 23.7492 22.76 24.1398 24.1652C24.2372 24.5158 23.9513 24.8306 23.5882 24.8306H17.0602C16.6969 24.8306 16.4058 24.5156 16.4978 24.1649C16.8661 22.7605 17.9854 21.666 19.4032 21.3372C18.6496 20.9959 18.1201 20.2385 18.1129 19.3578C18.103 18.1567 19.0648 17.1831 20.2613 17.1831C21.4577 17.1831 22.4355 18.1567 22.4453 19.3569Z" fill="#79B7FF"/>
                                                                <path d="M22.4453 19.3569C22.4525 20.2375 21.9355 20.995 21.1874 21.3363C22.6117 21.666 23.7492 22.76 24.1398 24.1652C24.2372 24.5158 23.9513 24.8306 23.5882 24.8306H17.0602C16.6969 24.8306 16.4058 24.5156 16.4978 24.1649C16.8661 22.7605 17.9854 21.666 19.4032 21.3372C18.6496 20.9959 18.1201 20.2385 18.1129 19.3578C18.103 18.1567 19.0648 17.1831 20.2613 17.1831C21.4577 17.1831 22.4355 18.1567 22.4453 19.3569Z" fill="#79B7FF"/>
                                                                <mask id="mask1_288_2704" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="13" y="14" width="15" height="14">
                                                                    <circle cx="20.2927" cy="21.0019" r="6.72237" fill="#66DD8C"/>
                                                                </mask>
                                                                <g mask="url(#mask1_288_2704)">
                                                                    <path d="M11.125 20.9154C11.125 20.5199 11.4456 20.1992 11.8412 20.1992H28.7426C29.1381 20.1992 29.4587 20.5199 29.4587 20.9154C29.4587 21.3109 29.1381 21.6315 28.7426 21.6315H11.8412C11.4456 21.6315 11.125 21.3109 11.125 20.9154Z" fill="#EBE9E9"/>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="av_step__info">
                                                        <div class="av_step__title">Facial recognition</div>
                                                        <div class="av_step__text">Confirm that the portrait matches the picture on the identification document.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="av_title">Let’s get started</div>
                                            <div class="av_text">
                                                In order to maintain the utmost security of your account and safeguard it from any potential fraudulent activities, we kindly ask you to engage in our comprehensive identity verification process.<br />
                                                This step is crucial as it helps us confirm your identity and protect your personal information.
                                            </div>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <button class="btn btn-primary w-100" @click="showModal('accountVerification')">
                                                <span>Start Verification</span>
                                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.0855 9.39804L11.023 14.4605C10.9174 14.5661 10.7743 14.6254 10.625 14.6254C10.4757 14.6254 10.3326 14.5661 10.227 14.4605C10.1215 14.355 10.0622 14.2118 10.0622 14.0626C10.0622 13.9133 10.1215 13.7701 10.227 13.6646L14.3298 9.56257H3.3125C3.16332 9.56257 3.02024 9.50331 2.91475 9.39782C2.80926 9.29233 2.75 9.14925 2.75 9.00007C2.75 8.85088 2.80926 8.70781 2.91475 8.60232C3.02024 8.49683 3.16332 8.43757 3.3125 8.43757H14.3298L10.227 4.33554C10.1215 4.22999 10.0622 4.08684 10.0622 3.93757C10.0622 3.7883 10.1215 3.64515 10.227 3.5396C10.3326 3.43405 10.4757 3.37476 10.625 3.37476C10.7743 3.37476 10.9174 3.43405 11.023 3.5396L16.0855 8.6021C16.1378 8.65434 16.1793 8.71638 16.2076 8.78466C16.2359 8.85295 16.2504 8.92615 16.2504 9.00007C16.2504 9.07399 16.2359 9.14719 16.2076 9.21547C16.1793 9.28376 16.1378 9.3458 16.0855 9.39804Z" fill="white"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div x-show="accountVerificationStatus === 'in review'">
                        <div class="tab_card">
                            <div class="tab_head">
                                <h2 class="tab_title">Account Verification</h2>
                                <div class="badge_verified badge_verified__not_verified">
                                    <div class="badge_verified__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                            <path d="M7.56094 7.8001V5.1001C7.56094 4.8614 7.65576 4.63248 7.82454 4.4637C7.99332 4.29492 8.22224 4.2001 8.46094 4.2001C8.69963 4.2001 8.92855 4.29492 9.09733 4.4637C9.26612 4.63248 9.36094 4.8614 9.36094 5.1001V7.8001C9.36094 8.03879 9.26612 8.26771 9.09733 8.43649C8.92855 8.60528 8.69963 8.7001 8.46094 8.7001C8.22224 8.7001 7.99332 8.60528 7.82454 8.43649C7.65576 8.26771 7.56094 8.03879 7.56094 7.8001ZM8.46094 12.0001C8.69828 12.0001 8.93028 11.9297 9.12762 11.7979C9.32496 11.666 9.47877 11.4786 9.56959 11.2593C9.66042 11.04 9.68418 10.7988 9.63788 10.566C9.59158 10.3332 9.47729 10.1194 9.30947 9.95157C9.14164 9.78375 8.92782 9.66946 8.69505 9.62316C8.46227 9.57685 8.22099 9.60062 8.00172 9.69144C7.78245 9.78227 7.59503 9.93607 7.46317 10.1334C7.33132 10.3308 7.26094 10.5628 7.26094 10.8001C7.26094 11.1184 7.38737 11.4236 7.61241 11.6486C7.83745 11.8737 8.14268 12.0001 8.46094 12.0001ZM15.9609 2.1001V6.3001C15.9609 10.3718 13.9869 12.8416 12.3309 14.1968C10.5527 15.6511 8.77294 16.1468 8.69794 16.1686C8.54273 16.2106 8.37915 16.2106 8.22394 16.1686C8.14894 16.1476 6.36919 15.6511 4.59094 14.1968C2.93494 12.8416 0.960938 10.3718 0.960938 6.3001V2.1001C0.960938 1.70227 1.11897 1.32074 1.40028 1.03944C1.68158 0.758133 2.06311 0.600098 2.46094 0.600098H14.4609C14.8588 0.600098 15.2403 0.758133 15.5216 1.03944C15.8029 1.32074 15.9609 1.70227 15.9609 2.1001ZM14.1609 2.4001H2.76094V6.3001C2.76094 8.97835 3.74269 11.1518 5.67919 12.7613C6.50913 13.4465 7.44987 13.9849 8.46094 14.3536C9.47192 13.9847 10.4126 13.4463 11.2427 12.7613C13.1792 11.1518 14.1609 8.97835 14.1609 6.3001V2.4001Z" fill="#D93434"/>
                                        </svg>
                                    </div>
                                    <div class="badge_verified__text">Your Account Not Verified</div>
                                </div>
                            </div>
                            <div class="tab_body mb-4">
                                <div class="av_inreview">
                                    <div class="av_inreview__img">
                                        <img src="./assets/img/svg/personal_in_review.svg" alt="">
                                    </div>
                                    <div class="av_inreview__info">
                                        <div class="av_title">Documents in review</div>
                                        <div class="av_text_2">
                                            Congratulations on successfully uploading all your documents for the verification process! Completing this step is crucial for boosting your account security and gaining access to more services. It safeguards your personal information and unlocks additional features designed just for you, ensuring a safer and more personalized experience.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="tab_title mb-4">Verification process</h2>
                            <div class="wp_list">
                                <div class="wp_item wp_item__active">
                                    <div class="wp_item__num">
                                    <span>
                                        01
                                        <svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.57825 9.642L15.2202 0L16.5005 1.28025L5.57825 12.2025L0.5 7.12575L1.78025 5.8455L5.57825 9.642Z" fill="white"/>
                                        </svg>
                                    </span>
                                    </div>
                                    <div class="wp_item__info">
                                        <div class="wp_item__title">Uploaded</div>
                                        <div class="wp_item__text">Your document has been successfully uploaded. You can now access it from your dashboard and continue with your tasks.</div>
                                    </div>
                                </div>
                                <div class="wp_item">
                                    <div class="wp_item__num">
                                    <span>
                                        02
                                        <svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.57825 9.642L15.2202 0L16.5005 1.28025L5.57825 12.2025L0.5 7.12575L1.78025 5.8455L5.57825 9.642Z" fill="white"/>
                                        </svg>
                                    </span>
                                    </div>
                                    <div class="wp_item__info">
                                        <div class="wp_item__title">In review</div>
                                        <div class="wp_item__text">Your document is currently undergoing verification. Please allow some time for the process to complete before further updates.</div>
                                    </div>
                                </div>
                                <div class="wp_item">
                                    <div class="wp_item__num">
                                    <span>
                                        03
                                        <svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.57825 9.642L15.2202 0L16.5005 1.28025L5.57825 12.2025L0.5 7.12575L1.78025 5.8455L5.57825 9.642Z" fill="white"/>
                                        </svg>
                                    </span>
                                    </div>
                                    <div class="wp_item__info">
                                        <div class="wp_item__title">Decision</div>
                                        <div class="wp_item__text">Your document will either receive approval or be declined based on the review process. Stay tuned for the final decision.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div x-show="accountVerificationStatus === 'verified'">
                        <div class="tab_card">
                            <div class="tab_head">
                                <h2 class="tab_title">Account Verification</h2>
                                <div class="badge_verified badge_verified__verified">
                                    <div class="badge_verified__icon">
                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4609 0.75H1.46094C1.12942 0.75 0.811475 0.881696 0.577054 1.11612C0.342634 1.35054 0.210938 1.66848 0.210938 2V5.5C0.210938 8.89313 1.85594 10.9513 3.23594 12.0806C4.71781 13.2925 6.20094 13.7056 6.26344 13.7238C6.39278 13.7587 6.5291 13.7587 6.65844 13.7238C6.72094 13.7063 8.20406 13.2925 9.68594 12.0806C11.0659 10.9513 12.7109 8.89313 12.7109 5.5V2C12.7109 1.66848 12.5792 1.35054 12.3448 1.11612C12.1104 0.881696 11.7925 0.75 11.4609 0.75ZM11.2109 5.5C11.2109 7.73187 10.3928 9.54313 8.77906 10.8844C8.08735 11.4552 7.30342 11.9039 6.46094 12.2113C5.61838 11.904 4.83443 11.4553 4.14281 10.8844C2.52906 9.54313 1.71094 7.73187 1.71094 5.5V2.25H11.2109V5.5ZM3.43031 7.53063C3.36055 7.46086 3.30521 7.37804 3.26745 7.28689C3.22969 7.19573 3.21026 7.09804 3.21026 6.99938C3.21026 6.90071 3.22969 6.80302 3.26745 6.71186C3.30521 6.62071 3.36055 6.53789 3.43031 6.46812C3.50008 6.39836 3.5829 6.34302 3.67405 6.30526C3.7652 6.26751 3.8629 6.24807 3.96156 6.24807C4.06022 6.24807 4.15792 6.26751 4.24907 6.30526C4.34023 6.34302 4.42305 6.39836 4.49281 6.46812L5.46094 7.4375L8.43031 4.4675C8.57121 4.3266 8.7623 4.24745 8.96156 4.24745C9.16082 4.24745 9.35192 4.3266 9.49281 4.4675C9.63371 4.6084 9.71286 4.79949 9.71286 4.99875C9.71286 5.19801 9.63371 5.3891 9.49281 5.53L5.99281 9.03C5.92313 9.09992 5.84034 9.1554 5.74918 9.19325C5.65801 9.23111 5.56027 9.25059 5.46156 9.25059C5.36285 9.25059 5.26511 9.23111 5.17395 9.19325C5.08279 9.1554 4.99999 9.09992 4.93031 9.03L3.43031 7.53063Z" fill="#00B83E"/>
                                        </svg>
                                    </div>
                                    <div class="badge_verified__text">Your Account Verified</div>
                                </div>
                            </div>
                            <div class="av_steps__full">
                                <div class="av_step__full">
                                    <div class="av_step__verified"></div>
                                    <div class="av_step__icon">
                                        <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="3.5" y="9.49976" width="13.6034" height="15.9579" rx="1.47975" fill="#86D993"/>
                                            <path d="M12.8975 15.4886C12.9062 16.5506 12.2827 17.464 11.3807 17.8755C13.1874 18.2937 14.6114 19.7319 15.0068 21.5539C15.0685 21.8382 14.8408 22.0891 14.5503 22.0891H6.12909C5.83846 22.0891 5.60662 21.8381 5.66387 21.5536C6.03038 19.7326 7.4306 18.2938 9.22925 17.8766C8.32048 17.4651 7.68196 16.5517 7.67325 15.4898C7.66137 14.0414 8.8212 12.8674 10.2639 12.8674C11.7066 12.8674 12.8857 14.0414 12.8975 15.4886Z" fill="#1D1D1D"/>
                                            <path d="M9.35938 16.3362C9.45089 16.5463 9.76871 16.9664 10.3078 16.9664C10.847 16.9664 11.1565 16.5463 11.2438 16.3362" stroke="#86D993" stroke-width="0.49325" stroke-linecap="round"/>
                                            <rect x="0.654141" y="6.9039" width="39.6917" height="27.6917" rx="2.31211" fill="white" stroke="#1D1D1D" stroke-width="0.308281"/>
                                            <rect x="3.5" y="15.7502" width="13.6034" height="15.9579" rx="1.84969" fill="#79B7FF"/>
                                            <path d="M12.8975 21.7399C12.9062 22.8018 12.2827 23.7152 11.3807 24.1267C13.1435 24.5348 14.542 25.9139 14.9762 27.673C15.0633 28.0262 14.7781 28.3403 14.4149 28.3403H6.26452C5.90124 28.3403 5.6108 28.0259 5.69244 27.6727C6.09873 25.9145 7.47434 24.5348 9.22925 24.1279C8.32048 23.7163 7.68196 22.803 7.67325 21.741C7.66137 20.2926 8.8212 19.1187 10.2639 19.1187C11.7066 19.1187 12.8857 20.2926 12.8975 21.7399Z" fill="#1D1D1D"/>
                                            <path d="M9.35938 22.5874C9.45089 22.7975 9.76871 23.2176 10.3078 23.2176C10.847 23.2176 11.1565 22.7975 11.2438 22.5874" stroke="#79B7FF" stroke-width="0.616563" stroke-linecap="round"/>
                                            <rect opacity="0.8" x="19.5" y="26.749" width="5" height="5" rx="0.616563" fill="#66DD8C" fill-opacity="0.12"/>
                                            <rect x="25.5" y="29.0386" width="4.5" height="1" rx="0.5" fill="#EBE9E9"/>
                                            <rect x="25.5" y="30.7493" width="3" height="1" rx="0.5" fill="#EBE9E9"/>
                                            <rect x="19.5" y="16.2498" width="7.5" height="1.5" rx="0.616563" fill="#EBE9E9"/>
                                            <rect x="28.5" y="16.2498" width="9" height="1.5" rx="0.616563" fill="#EBE9E9"/>
                                            <rect x="19.5" y="19.7502" width="4" height="1.5" rx="0.616563" fill="#EBE9E9"/>
                                            <rect x="25" y="19.7502" width="12.5" height="1.5" rx="0.616563" fill="#EBE9E9"/>
                                            <rect x="19.5" y="23.2495" width="18" height="1.5" rx="0.616563" fill="#EBE9E9"/>
                                            <rect x="3.5" y="9.24927" width="34" height="4.5" rx="1.23313" fill="#EBE9E9"/>
                                        </svg>
                                    </div>
                                    <div class="av_step__info">
                                        <div class="av_step__title">Identity Verification</div>
                                        <div class="av_step__text">ID card, passport, driver license supported</div>
                                    </div>
                                    <div class="av_step__btn">
                                        <button class="btn btn-primary pt-1 pb-1">
                                            <svg class="me-2" width="18" height="14" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17.389 6.27219C17.3644 6.21664 16.7688 4.89547 15.4448 3.57148C13.6807 1.80734 11.4525 0.875 8.99999 0.875C6.54749 0.875 4.31929 1.80734 2.55515 3.57148C1.23117 4.89547 0.632806 6.21875 0.611009 6.27219C0.579026 6.34413 0.5625 6.42198 0.5625 6.5007C0.5625 6.57943 0.579026 6.65728 0.611009 6.72922C0.635618 6.78477 1.23117 8.10523 2.55515 9.42922C4.31929 11.1927 6.54749 12.125 8.99999 12.125C11.4525 12.125 13.6807 11.1927 15.4448 9.42922C16.7688 8.10523 17.3644 6.78477 17.389 6.72922C17.421 6.65728 17.4375 6.57943 17.4375 6.5007C17.4375 6.42198 17.421 6.34413 17.389 6.27219ZM8.99999 11C6.83577 11 4.94507 10.2132 3.37992 8.66211C2.73771 8.02346 2.19134 7.2952 1.75781 6.5C2.19123 5.70472 2.73761 4.97645 3.37992 4.33789C4.94507 2.7868 6.83577 2 8.99999 2C11.1642 2 13.0549 2.7868 14.6201 4.33789C15.2635 4.9763 15.8111 5.70457 16.2457 6.5C15.7387 7.44641 13.5302 11 8.99999 11ZM8.99999 3.125C8.33248 3.125 7.67996 3.32294 7.12494 3.69379C6.56993 4.06464 6.13735 4.59174 5.8819 5.20844C5.62645 5.82514 5.55962 6.50374 5.68984 7.15843C5.82007 7.81312 6.14151 8.41448 6.61351 8.88649C7.08551 9.35849 7.68688 9.67993 8.34156 9.81015C8.99625 9.94038 9.67485 9.87354 10.2915 9.61809C10.9083 9.36265 11.4354 8.93007 11.8062 8.37505C12.1771 7.82003 12.375 7.16751 12.375 6.5C12.3741 5.60518 12.0182 4.74728 11.3855 4.11454C10.7527 3.48181 9.89481 3.12593 8.99999 3.125ZM8.99999 8.75C8.55499 8.75 8.11997 8.61804 7.74996 8.37081C7.37995 8.12357 7.09156 7.77217 6.92126 7.36104C6.75097 6.9499 6.70641 6.4975 6.79323 6.06105C6.88004 5.62459 7.09433 5.22368 7.409 4.90901C7.72367 4.59434 8.12458 4.38005 8.56104 4.29323C8.9975 4.20642 9.4499 4.25097 9.86103 4.42127C10.2722 4.59157 10.6236 4.87996 10.8708 5.24997C11.118 5.61998 11.25 6.05499 11.25 6.5C11.25 7.09674 11.0129 7.66903 10.591 8.09099C10.169 8.51295 9.59673 8.75 8.99999 8.75Z" fill="white"/>
                                            </svg>
                                            <span>Preview</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="av_step__full">
                                    <div class="av_step__verified"></div>
                                    <div class="av_step__icon">
                                        <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="3.42773" y="9.28101" width="13.2716" height="15.5687" rx="1.44366" fill="#86D993"/>
                                            <path d="M12.5963 15.1239C12.6048 16.16 11.9965 17.0511 11.1164 17.4526C12.8791 17.8606 14.2684 19.2637 14.6541 21.0412C14.7143 21.3187 14.4922 21.5634 14.2087 21.5634H5.99294C5.7094 21.5634 5.48321 21.3185 5.53906 21.041C5.89664 19.2644 7.2627 17.8606 9.01748 17.4537C8.13088 17.0522 7.50793 16.1611 7.49943 15.125C7.48784 13.712 8.61939 12.5667 10.0269 12.5667C11.4344 12.5667 12.5847 13.712 12.5963 15.1239Z" fill="#1D1D1D"/>
                                            <path d="M9.14453 15.9512C9.23382 16.1561 9.54388 16.566 10.0699 16.566C10.5958 16.566 10.8978 16.1561 10.983 15.9512" stroke="#86D993" stroke-width="0.48122" stroke-linecap="round"/>
                                            <rect x="0.654141" y="6.9039" width="39.6917" height="27.6917" rx="2.31211" fill="white" stroke="#1D1D1D" stroke-width="0.308281"/>
                                            <path d="M4.42484 13.6697C4.0138 13.4324 3.5 13.7291 3.5 14.2037V17.792C3.5 18.2666 4.0138 18.5632 4.42484 18.3259L7.53237 16.5318C7.94341 16.2945 7.94341 15.7012 7.53237 15.4639L4.42484 13.6697Z" fill="#EBE9E9"/>
                                            <path d="M3.80828 22.5309C3.61752 22.641 3.5 22.8446 3.5 23.0649V29.0826C3.5 30.5554 4.69391 31.7493 6.16667 31.7493H34.8333C35.0867 31.7493 35.3318 31.7139 35.564 31.6479L12.4071 18.2783C12.0256 18.058 11.5555 18.058 11.174 18.2783L3.80828 22.5309Z" fill="#EBE9E9"/>
                                            <path d="M37.5 28.9167V17.3643C37.5 16.8896 36.9862 16.593 36.5752 16.8303L27.4953 22.0726C27.0843 22.3099 27.0843 22.9032 27.4953 23.1405L37.5 28.9167Z" fill="#EBE9E9"/>
                                            <path d="M37.5 12.4473V12.4159C37.5 10.9432 36.3061 9.74927 34.8333 9.74927H6.16667C5.69869 9.74927 5.25887 9.86981 4.87657 10.0815L22.6206 20.3261C23.0021 20.5463 23.4722 20.5463 23.8537 20.3261L37.5 12.4473Z" fill="#EBE9E9"/>
                                            <mask id="mask0_288_2683" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="3" y="9" width="35" height="23">
                                                <path d="M4.42484 13.6697C4.0138 13.4324 3.5 13.7291 3.5 14.2037V17.792C3.5 18.2666 4.0138 18.5632 4.42484 18.3259L7.53237 16.5318C7.94341 16.2945 7.94341 15.7012 7.53237 15.4639L4.42484 13.6697Z" fill="#EBE9E9"/>
                                                <path d="M3.80828 22.5309C3.61752 22.641 3.5 22.8446 3.5 23.0649V29.0826C3.5 30.5554 4.69391 31.7493 6.16667 31.7493H34.8333C35.0867 31.7493 35.3318 31.7139 35.564 31.6479L12.4071 18.2783C12.0256 18.058 11.5555 18.058 11.174 18.2783L3.80828 22.5309Z" fill="#EBE9E9"/>
                                                <path d="M37.5 28.9167V17.3643C37.5 16.8896 36.9862 16.593 36.5752 16.8303L27.4953 22.0726C27.0843 22.3099 27.0843 22.9032 27.4953 23.1405L37.5 28.9167Z" fill="#EBE9E9"/>
                                                <path d="M37.5 12.4473V12.4159C37.5 10.9432 36.3061 9.74927 34.8333 9.74927H6.16667C5.69869 9.74927 5.25887 9.86981 4.87657 10.0815L22.6206 20.3261C23.0021 20.5463 23.4722 20.5463 23.8537 20.3261L37.5 12.4473Z" fill="#EBE9E9"/>
                                            </mask>
                                            <g mask="url(#mask0_288_2683)">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M22.0405 16.8986L8.29883 8.53406L8.94876 7.46631L22.6904 15.8308C22.8857 15.9496 23.1302 15.9524 23.3281 15.8381L36.7486 8.08402L37.374 9.16635L23.9534 16.9204C23.3598 17.2634 22.6262 17.2551 22.0405 16.8986Z" fill="white" fill-opacity="0.4"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M31.4501 32.1545L12.7283 20.6798C12.127 20.3113 11.3699 20.3113 10.7687 20.6798L1.73438 26.217L2.38758 27.2827L11.4219 21.7456C11.6223 21.6227 11.8747 21.6227 12.0751 21.7456L30.7969 33.2202L31.4501 32.1545Z" fill="white" fill-opacity="0.4"/>
                                            </g>
                                            <path d="M18.625 18.7197C18.625 21.5148 14.6481 26.8715 13.039 28.9246C12.699 29.3578 12.051 29.3578 11.7118 28.9246C10.1019 26.8715 6.125 21.5148 6.125 18.7197C6.125 15.2157 8.92357 12.3745 12.375 12.3745C15.8264 12.3745 18.625 15.2157 18.625 18.7197Z" fill="#79B7FF"/>
                                            <path d="M12.5644 15.6224L13.2439 17.0658C13.352 17.2954 13.5607 17.454 13.8013 17.4904L15.3202 17.722C15.4922 17.7486 15.5608 17.9693 15.4367 18.0964L14.337 19.2195C14.1622 19.3979 14.0833 19.655 14.1237 19.9063L14.3831 21.4925C14.4122 21.6718 14.2327 21.8088 14.0786 21.724L12.7195 20.9753C12.5033 20.856 12.2458 20.856 12.0305 20.9753L10.6714 21.724C10.5173 21.8088 10.3378 21.6718 10.3669 21.4925L10.6263 19.9063C10.6677 19.654 10.5878 19.3979 10.413 19.2195L9.31329 18.0964C9.18922 17.9693 9.25783 17.7476 9.42984 17.722L10.9487 17.4904C11.1903 17.454 11.3989 17.2954 11.5061 17.0658L12.1856 15.6224C12.2627 15.4589 12.4845 15.4589 12.5616 15.6224H12.5644Z" fill="#1D1D1D"/>
                                        </svg>
                                    </div>
                                    <div class="av_step__info">
                                        <div class="av_step__title">Proof of address</div>
                                        <div class="av_step__text">Documents that can prove the address, such as utility bills, etc</div>
                                    </div>
                                    <div class="av_step__btn">
                                        <button class="btn btn-primary pt-1 pb-1">
                                            <svg class="me-2" width="18" height="14" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17.389 6.27219C17.3644 6.21664 16.7688 4.89547 15.4448 3.57148C13.6807 1.80734 11.4525 0.875 8.99999 0.875C6.54749 0.875 4.31929 1.80734 2.55515 3.57148C1.23117 4.89547 0.632806 6.21875 0.611009 6.27219C0.579026 6.34413 0.5625 6.42198 0.5625 6.5007C0.5625 6.57943 0.579026 6.65728 0.611009 6.72922C0.635618 6.78477 1.23117 8.10523 2.55515 9.42922C4.31929 11.1927 6.54749 12.125 8.99999 12.125C11.4525 12.125 13.6807 11.1927 15.4448 9.42922C16.7688 8.10523 17.3644 6.78477 17.389 6.72922C17.421 6.65728 17.4375 6.57943 17.4375 6.5007C17.4375 6.42198 17.421 6.34413 17.389 6.27219ZM8.99999 11C6.83577 11 4.94507 10.2132 3.37992 8.66211C2.73771 8.02346 2.19134 7.2952 1.75781 6.5C2.19123 5.70472 2.73761 4.97645 3.37992 4.33789C4.94507 2.7868 6.83577 2 8.99999 2C11.1642 2 13.0549 2.7868 14.6201 4.33789C15.2635 4.9763 15.8111 5.70457 16.2457 6.5C15.7387 7.44641 13.5302 11 8.99999 11ZM8.99999 3.125C8.33248 3.125 7.67996 3.32294 7.12494 3.69379C6.56993 4.06464 6.13735 4.59174 5.8819 5.20844C5.62645 5.82514 5.55962 6.50374 5.68984 7.15843C5.82007 7.81312 6.14151 8.41448 6.61351 8.88649C7.08551 9.35849 7.68688 9.67993 8.34156 9.81015C8.99625 9.94038 9.67485 9.87354 10.2915 9.61809C10.9083 9.36265 11.4354 8.93007 11.8062 8.37505C12.1771 7.82003 12.375 7.16751 12.375 6.5C12.3741 5.60518 12.0182 4.74728 11.3855 4.11454C10.7527 3.48181 9.89481 3.12593 8.99999 3.125ZM8.99999 8.75C8.55499 8.75 8.11997 8.61804 7.74996 8.37081C7.37995 8.12357 7.09156 7.77217 6.92126 7.36104C6.75097 6.9499 6.70641 6.4975 6.79323 6.06105C6.88004 5.62459 7.09433 5.22368 7.409 4.90901C7.72367 4.59434 8.12458 4.38005 8.56104 4.29323C8.9975 4.20642 9.4499 4.25097 9.86103 4.42127C10.2722 4.59157 10.6236 4.87996 10.8708 5.24997C11.118 5.61998 11.25 6.05499 11.25 6.5C11.25 7.09674 11.0129 7.66903 10.591 8.09099C10.169 8.51295 9.59673 8.75 8.99999 8.75Z" fill="white"/>
                                            </svg>
                                            <span>Preview</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="av_step__full">
                                    <div class="av_step__verified"></div>
                                    <div class="av_step__icon">
                                        <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="3.5" y="9.49976" width="13.6034" height="15.9579" rx="1.47975" fill="#86D993"/>
                                            <path d="M12.8975 15.4886C12.9062 16.5506 12.2827 17.464 11.3807 17.8755C13.1874 18.2937 14.6114 19.7319 15.0068 21.5539C15.0685 21.8382 14.8408 22.0891 14.5503 22.0891H6.12909C5.83846 22.0891 5.60662 21.8381 5.66387 21.5536C6.03038 19.7326 7.4306 18.2938 9.22925 17.8766C8.32048 17.4651 7.68196 16.5517 7.67325 15.4898C7.66137 14.0414 8.8212 12.8674 10.2639 12.8674C11.7066 12.8674 12.8857 14.0414 12.8975 15.4886Z" fill="#1D1D1D"/>
                                            <path d="M9.35938 16.3362C9.45089 16.5463 9.76871 16.9664 10.3078 16.9664C10.847 16.9664 11.1565 16.5463 11.2438 16.3362" stroke="#86D993" stroke-width="0.49325" stroke-linecap="round"/>
                                            <rect x="0.654141" y="6.90487" width="39.6917" height="27.6917" rx="2.31211" fill="white" stroke="#1D1D1D" stroke-width="0.308281"/>
                                            <mask id="mask0_288_2704" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="6" width="41" height="29">
                                                <rect x="0.5" y="6.75122" width="40" height="27.6667" rx="2.46625" fill="white"/>
                                            </mask>
                                            <g mask="url(#mask0_288_2704)">
                                                <path d="M6.5 13.0172C6.5 10.2931 8.70836 8.08472 11.4325 8.08472H29.5675C32.2916 8.08472 34.5 10.2931 34.5 13.0172V33.8189C34.5 36.543 32.2916 38.7514 29.5675 38.7514H11.4325C8.70836 38.7514 6.5 36.543 6.5 33.8189V13.0172Z" fill="#EBE9E9"/>
                                                <path d="M7.83398 13.1173C7.83398 11.0742 9.49025 9.41797 11.5334 9.41797H29.4679C31.511 9.41797 33.1673 11.0742 33.1673 13.1173V36.3853C33.1673 38.4284 31.511 40.0846 29.4679 40.0846H11.5334C9.49025 40.0846 7.83398 38.4284 7.83398 36.3853V13.1173Z" fill="white"/>
                                                <path d="M11.125 14.8504C11.125 13.8289 11.9531 13.0007 12.9747 13.0007H27.4003C28.4219 13.0007 29.25 13.8289 29.25 14.8504V27.401C29.25 28.4226 28.4219 29.2507 27.4003 29.2507H12.9747C11.9531 29.2507 11.125 28.4226 11.125 27.401V14.8504Z" fill="#EBE9E9"/>
                                                <path d="M14.1559 13.0007H12.3581C11.6771 13.0007 11.125 13.5528 11.125 14.2339V16.6118M26.2191 13.0007H28.0169C28.6979 13.0007 29.25 13.5528 29.25 14.2339V16.6118M11.125 25.6396V28.0176C11.125 28.6986 11.6771 29.2507 12.3581 29.2507H14.1559M29.25 25.6396V28.0176C29.25 28.6986 28.6979 29.2507 28.0169 29.2507H26.2191" stroke="#79B7FF" stroke-width="0.924844" stroke-linecap="round"/>
                                                <circle cx="20.2927" cy="21.0014" r="6.72237" fill="#1D1D1D"/>
                                                <path d="M11.125 20.9154C11.125 20.5199 11.4456 20.1992 11.8412 20.1992H28.7426C29.1381 20.1992 29.4587 20.5199 29.4587 20.9154C29.4587 21.3109 29.1381 21.6315 28.7426 21.6315H11.8412C11.4456 21.6315 11.125 21.3109 11.125 20.9154Z" fill="#79B7FF"/>
                                                <path d="M22.4453 19.3569C22.4525 20.2375 21.9355 20.995 21.1874 21.3363C22.6117 21.666 23.7492 22.76 24.1398 24.1652C24.2372 24.5158 23.9513 24.8306 23.5882 24.8306H17.0602C16.6969 24.8306 16.4058 24.5156 16.4978 24.1649C16.8661 22.7605 17.9854 21.666 19.4032 21.3372C18.6496 20.9959 18.1201 20.2385 18.1129 19.3578C18.103 18.1567 19.0648 17.1831 20.2613 17.1831C21.4577 17.1831 22.4355 18.1567 22.4453 19.3569Z" fill="#79B7FF"/>
                                                <path d="M22.4453 19.3569C22.4525 20.2375 21.9355 20.995 21.1874 21.3363C22.6117 21.666 23.7492 22.76 24.1398 24.1652C24.2372 24.5158 23.9513 24.8306 23.5882 24.8306H17.0602C16.6969 24.8306 16.4058 24.5156 16.4978 24.1649C16.8661 22.7605 17.9854 21.666 19.4032 21.3372C18.6496 20.9959 18.1201 20.2385 18.1129 19.3578C18.103 18.1567 19.0648 17.1831 20.2613 17.1831C21.4577 17.1831 22.4355 18.1567 22.4453 19.3569Z" fill="#79B7FF"/>
                                                <path d="M22.4453 19.3569C22.4525 20.2375 21.9355 20.995 21.1874 21.3363C22.6117 21.666 23.7492 22.76 24.1398 24.1652C24.2372 24.5158 23.9513 24.8306 23.5882 24.8306H17.0602C16.6969 24.8306 16.4058 24.5156 16.4978 24.1649C16.8661 22.7605 17.9854 21.666 19.4032 21.3372C18.6496 20.9959 18.1201 20.2385 18.1129 19.3578C18.103 18.1567 19.0648 17.1831 20.2613 17.1831C21.4577 17.1831 22.4355 18.1567 22.4453 19.3569Z" fill="#79B7FF"/>
                                                <mask id="mask1_288_2704" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="13" y="14" width="15" height="14">
                                                    <circle cx="20.2927" cy="21.0019" r="6.72237" fill="#66DD8C"/>
                                                </mask>
                                                <g mask="url(#mask1_288_2704)">
                                                    <path d="M11.125 20.9154C11.125 20.5199 11.4456 20.1992 11.8412 20.1992H28.7426C29.1381 20.1992 29.4587 20.5199 29.4587 20.9154C29.4587 21.3109 29.1381 21.6315 28.7426 21.6315H11.8412C11.4456 21.6315 11.125 21.3109 11.125 20.9154Z" fill="#EBE9E9"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="av_step__info">
                                        <div class="av_step__title">Facial recognition</div>
                                        <div class="av_step__text">Confirm that the portrait matches the picture on the identification document.</div>
                                    </div>
                                    <div class="av_step__btn">
                                        <button class="btn btn-primary pt-1 pb-1">
                                            <svg class="me-2" width="18" height="14" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17.389 6.27219C17.3644 6.21664 16.7688 4.89547 15.4448 3.57148C13.6807 1.80734 11.4525 0.875 8.99999 0.875C6.54749 0.875 4.31929 1.80734 2.55515 3.57148C1.23117 4.89547 0.632806 6.21875 0.611009 6.27219C0.579026 6.34413 0.5625 6.42198 0.5625 6.5007C0.5625 6.57943 0.579026 6.65728 0.611009 6.72922C0.635618 6.78477 1.23117 8.10523 2.55515 9.42922C4.31929 11.1927 6.54749 12.125 8.99999 12.125C11.4525 12.125 13.6807 11.1927 15.4448 9.42922C16.7688 8.10523 17.3644 6.78477 17.389 6.72922C17.421 6.65728 17.4375 6.57943 17.4375 6.5007C17.4375 6.42198 17.421 6.34413 17.389 6.27219ZM8.99999 11C6.83577 11 4.94507 10.2132 3.37992 8.66211C2.73771 8.02346 2.19134 7.2952 1.75781 6.5C2.19123 5.70472 2.73761 4.97645 3.37992 4.33789C4.94507 2.7868 6.83577 2 8.99999 2C11.1642 2 13.0549 2.7868 14.6201 4.33789C15.2635 4.9763 15.8111 5.70457 16.2457 6.5C15.7387 7.44641 13.5302 11 8.99999 11ZM8.99999 3.125C8.33248 3.125 7.67996 3.32294 7.12494 3.69379C6.56993 4.06464 6.13735 4.59174 5.8819 5.20844C5.62645 5.82514 5.55962 6.50374 5.68984 7.15843C5.82007 7.81312 6.14151 8.41448 6.61351 8.88649C7.08551 9.35849 7.68688 9.67993 8.34156 9.81015C8.99625 9.94038 9.67485 9.87354 10.2915 9.61809C10.9083 9.36265 11.4354 8.93007 11.8062 8.37505C12.1771 7.82003 12.375 7.16751 12.375 6.5C12.3741 5.60518 12.0182 4.74728 11.3855 4.11454C10.7527 3.48181 9.89481 3.12593 8.99999 3.125ZM8.99999 8.75C8.55499 8.75 8.11997 8.61804 7.74996 8.37081C7.37995 8.12357 7.09156 7.77217 6.92126 7.36104C6.75097 6.9499 6.70641 6.4975 6.79323 6.06105C6.88004 5.62459 7.09433 5.22368 7.409 4.90901C7.72367 4.59434 8.12458 4.38005 8.56104 4.29323C8.9975 4.20642 9.4499 4.25097 9.86103 4.42127C10.2722 4.59157 10.6236 4.87996 10.8708 5.24997C11.118 5.61998 11.25 6.05499 11.25 6.5C11.25 7.09674 11.0129 7.66903 10.591 8.09099C10.169 8.51295 9.59673 8.75 8.99999 8.75Z" fill="white"/>
                                            </svg>
                                            <span>Preview</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div x-show="accountVerificationStatus === 'declined'">
                        <div class="tab_card">
                            <div class="tab_head">
                                <h2 class="tab_title">Account Verification</h2>
                                <div class="badge_verified badge_verified__not_verified">
                                    <div class="badge_verified__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                            <path d="M7.56094 7.8001V5.1001C7.56094 4.8614 7.65576 4.63248 7.82454 4.4637C7.99332 4.29492 8.22224 4.2001 8.46094 4.2001C8.69963 4.2001 8.92855 4.29492 9.09733 4.4637C9.26612 4.63248 9.36094 4.8614 9.36094 5.1001V7.8001C9.36094 8.03879 9.26612 8.26771 9.09733 8.43649C8.92855 8.60528 8.69963 8.7001 8.46094 8.7001C8.22224 8.7001 7.99332 8.60528 7.82454 8.43649C7.65576 8.26771 7.56094 8.03879 7.56094 7.8001ZM8.46094 12.0001C8.69828 12.0001 8.93028 11.9297 9.12762 11.7979C9.32496 11.666 9.47877 11.4786 9.56959 11.2593C9.66042 11.04 9.68418 10.7988 9.63788 10.566C9.59158 10.3332 9.47729 10.1194 9.30947 9.95157C9.14164 9.78375 8.92782 9.66946 8.69505 9.62316C8.46227 9.57685 8.22099 9.60062 8.00172 9.69144C7.78245 9.78227 7.59503 9.93607 7.46317 10.1334C7.33132 10.3308 7.26094 10.5628 7.26094 10.8001C7.26094 11.1184 7.38737 11.4236 7.61241 11.6486C7.83745 11.8737 8.14268 12.0001 8.46094 12.0001ZM15.9609 2.1001V6.3001C15.9609 10.3718 13.9869 12.8416 12.3309 14.1968C10.5527 15.6511 8.77294 16.1468 8.69794 16.1686C8.54273 16.2106 8.37915 16.2106 8.22394 16.1686C8.14894 16.1476 6.36919 15.6511 4.59094 14.1968C2.93494 12.8416 0.960938 10.3718 0.960938 6.3001V2.1001C0.960938 1.70227 1.11897 1.32074 1.40028 1.03944C1.68158 0.758133 2.06311 0.600098 2.46094 0.600098H14.4609C14.8588 0.600098 15.2403 0.758133 15.5216 1.03944C15.8029 1.32074 15.9609 1.70227 15.9609 2.1001ZM14.1609 2.4001H2.76094V6.3001C2.76094 8.97835 3.74269 11.1518 5.67919 12.7613C6.50913 13.4465 7.44987 13.9849 8.46094 14.3536C9.47192 13.9847 10.4126 13.4463 11.2427 12.7613C13.1792 11.1518 14.1609 8.97835 14.1609 6.3001V2.4001Z" fill="#D93434"/>
                                        </svg>
                                    </div>
                                    <div class="badge_verified__text">Your Account Not Verified</div>
                                </div>
                            </div>
                            <div class="tab_body mb-4">
                                <div class="av_inreview">
                                    <div class="av_inreview__img">
                                        <img src="./assets/img/svg/personal_declined.svg" alt="">
                                    </div>
                                    <div class="av_inreview__info">
                                        <div class="av_title">Declined</div>
                                        <div class="av_text_2">
                                            Your ID card documents have been successfully verified, enhancing your account security and unlocking more personalized features. If your documents are declined, please review the list of documents that were not approved and upload the updated versions.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="av__title_2">Identity Verification</div>
                            <div class="tab_body mb-4">
                                <div class="av__reason_title">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.59375 5.90625C7.59375 5.68375 7.65973 5.46624 7.78335 5.28123C7.90697 5.09623 8.08267 4.95203 8.28823 4.86689C8.4938 4.78174 8.72 4.75946 8.93823 4.80287C9.15646 4.84627 9.35691 4.95342 9.51425 5.11075C9.67158 5.26809 9.77873 5.46854 9.82214 5.68677C9.86555 5.905 9.84327 6.1312 9.75812 6.33677C9.67297 6.54234 9.52878 6.71804 9.34377 6.84165C9.15876 6.96527 8.94126 7.03125 8.71875 7.03125C8.42038 7.03125 8.13424 6.91272 7.92326 6.70175C7.71228 6.49077 7.59375 6.20462 7.59375 5.90625ZM16.5938 9C16.5938 10.5019 16.1484 11.9701 15.314 13.2189C14.4796 14.4676 13.2936 15.441 11.906 16.0157C10.5184 16.5905 8.99158 16.7408 7.51854 16.4478C6.04549 16.1548 4.69242 15.4316 3.63041 14.3696C2.56841 13.3076 1.84517 11.9545 1.55217 10.4815C1.25916 9.00842 1.40954 7.48157 1.98429 6.094C2.55905 4.70642 3.53236 3.52044 4.78114 2.68603C6.02993 1.85162 7.4981 1.40625 9 1.40625C11.0133 1.40848 12.9435 2.20925 14.3671 3.63287C15.7907 5.0565 16.5915 6.9867 16.5938 9ZM14.9063 9C14.9063 7.83185 14.5599 6.68994 13.9109 5.71866C13.2619 4.74739 12.3395 3.99037 11.2602 3.54334C10.181 3.09631 8.99345 2.97934 7.84775 3.20724C6.70205 3.43513 5.64966 3.99765 4.82365 4.82365C3.99765 5.64965 3.43513 6.70205 3.20724 7.84775C2.97935 8.99345 3.09631 10.181 3.54334 11.2602C3.99037 12.3394 4.74739 13.2619 5.71867 13.9109C6.68994 14.5599 7.83186 14.9062 9 14.9062C10.5659 14.9046 12.0672 14.2818 13.1745 13.1745C14.2818 12.0672 14.9046 10.5659 14.9063 9ZM9.84375 11.5791V9.28125C9.84375 8.90829 9.69559 8.5506 9.43187 8.28688C9.16815 8.02316 8.81046 7.875 8.4375 7.875C8.23824 7.8747 8.04531 7.94494 7.89287 8.07326C7.74043 8.20158 7.63833 8.37972 7.60464 8.57611C7.57095 8.7725 7.60786 8.97447 7.70882 9.14626C7.80978 9.31805 7.96828 9.44857 8.15625 9.51469V11.8125C8.15625 12.1855 8.30441 12.5431 8.56813 12.8069C8.83186 13.0706 9.18954 13.2188 9.5625 13.2188C9.76176 13.219 9.9547 13.1488 10.1071 13.0205C10.2596 12.8922 10.3617 12.714 10.3954 12.5176C10.4291 12.3213 10.3921 12.1193 10.2912 11.9475C10.1902 11.7757 10.0317 11.6452 9.84375 11.5791Z" fill="black"/>
                                    </svg>
                                    <span>Reason</span>
                                </div>
                                <div class="av__reason_text">
                                    Unfortunately, we couldn't verify your ID card photos due to clarity issues. Please check the quality of your images and resubmit clearer versions for verification.
                                </div>
                                <div class="av__reason_detail">
                                    <div class="av__reason_detail_left">
                                        <div class="av__rdl_img">
                                            <img src="./assets/img/svg/icon_jpg.svg" alt="">
                                        </div>
                                        <div class="av__rdl_info">
                                            <div class="av__rdl_name">img9645694.jpg</div>
                                            <div class="av__rdl_size">500kb</div>
                                        </div>
                                        <div class="av__rdl_status">
                                            <svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.5306 9.53063L13.0603 12L15.5306 14.4694C15.6003 14.5391 15.6556 14.6218 15.6933 14.7128C15.731 14.8039 15.7504 14.9015 15.7504 15C15.7504 15.0985 15.731 15.1961 15.6933 15.2872C15.6556 15.3782 15.6003 15.4609 15.5306 15.5306C15.4609 15.6003 15.3782 15.6556 15.2872 15.6933C15.1961 15.731 15.0986 15.7504 15 15.7504C14.9015 15.7504 14.8039 15.731 14.7128 15.6933C14.6218 15.6556 14.5391 15.6003 14.4694 15.5306L12 13.0603L9.53063 15.5306C9.46095 15.6003 9.37822 15.6556 9.28718 15.6933C9.19613 15.731 9.09855 15.7504 9 15.7504C8.90146 15.7504 8.80388 15.731 8.71283 15.6933C8.62179 15.6556 8.53906 15.6003 8.46938 15.5306C8.3997 15.4609 8.34442 15.3782 8.30671 15.2872C8.269 15.1961 8.24959 15.0985 8.24959 15C8.24959 14.9015 8.269 14.8039 8.30671 14.7128C8.34442 14.6218 8.3997 14.5391 8.46938 14.4694L10.9397 12L8.46938 9.53063C8.32865 9.38989 8.24959 9.19902 8.24959 9C8.24959 8.80098 8.32865 8.61011 8.46938 8.46937C8.61011 8.32864 8.80098 8.24958 9 8.24958C9.19903 8.24958 9.3899 8.32864 9.53063 8.46937L12 10.9397L14.4694 8.46937C14.5391 8.39969 14.6218 8.34442 14.7128 8.3067C14.8039 8.26899 14.9015 8.24958 15 8.24958C15.0986 8.24958 15.1961 8.26899 15.2872 8.3067C15.3782 8.34442 15.4609 8.39969 15.5306 8.46937C15.6003 8.53906 15.6556 8.62178 15.6933 8.71283C15.731 8.80387 15.7504 8.90145 15.7504 9C15.7504 9.09855 15.731 9.19613 15.6933 9.28717C15.6556 9.37822 15.6003 9.46094 15.5306 9.53063ZM21.75 12C21.75 13.9284 21.1782 15.8134 20.1068 17.4168C19.0355 19.0202 17.5127 20.2699 15.7312 21.0078C13.9496 21.7458 11.9892 21.9389 10.0979 21.5627C8.20656 21.1865 6.46928 20.2579 5.10571 18.8943C3.74215 17.5307 2.81355 15.7934 2.43735 13.9021C2.06114 12.0108 2.25422 10.0504 2.99218 8.26884C3.73013 6.48726 4.97982 4.96451 6.58319 3.89317C8.18657 2.82183 10.0716 2.25 12 2.25C14.585 2.25273 17.0634 3.28084 18.8913 5.10872C20.7192 6.93661 21.7473 9.41498 21.75 12ZM20.25 12C20.25 10.3683 19.7661 8.77325 18.8596 7.41655C17.9531 6.05984 16.6646 5.00242 15.1571 4.37799C13.6497 3.75357 11.9909 3.59019 10.3905 3.90852C8.79017 4.22685 7.32016 5.01259 6.16637 6.16637C5.01259 7.32015 4.22685 8.79016 3.90853 10.3905C3.5902 11.9908 3.75358 13.6496 4.378 15.1571C5.00242 16.6646 6.05984 17.9531 7.41655 18.8596C8.77326 19.7661 10.3683 20.25 12 20.25C14.1873 20.2475 16.2843 19.3775 17.8309 17.8309C19.3775 16.2843 20.2475 14.1873 20.25 12Z" fill="#CE2424"/>
                                            </svg>
                                            <span>Declined</span>
                                        </div>
                                    </div>
                                    <div class="ms-2">
                                        <button class="btn btn-primary pt-1 pb-1">
                                            <svg class="me-2" width="18" height="14" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17.389 6.27219C17.3644 6.21664 16.7688 4.89547 15.4448 3.57148C13.6807 1.80734 11.4525 0.875 8.99999 0.875C6.54749 0.875 4.31929 1.80734 2.55515 3.57148C1.23117 4.89547 0.632806 6.21875 0.611009 6.27219C0.579026 6.34413 0.5625 6.42198 0.5625 6.5007C0.5625 6.57943 0.579026 6.65728 0.611009 6.72922C0.635618 6.78477 1.23117 8.10523 2.55515 9.42922C4.31929 11.1927 6.54749 12.125 8.99999 12.125C11.4525 12.125 13.6807 11.1927 15.4448 9.42922C16.7688 8.10523 17.3644 6.78477 17.389 6.72922C17.421 6.65728 17.4375 6.57943 17.4375 6.5007C17.4375 6.42198 17.421 6.34413 17.389 6.27219ZM8.99999 11C6.83577 11 4.94507 10.2132 3.37992 8.66211C2.73771 8.02346 2.19134 7.2952 1.75781 6.5C2.19123 5.70472 2.73761 4.97645 3.37992 4.33789C4.94507 2.7868 6.83577 2 8.99999 2C11.1642 2 13.0549 2.7868 14.6201 4.33789C15.2635 4.9763 15.8111 5.70457 16.2457 6.5C15.7387 7.44641 13.5302 11 8.99999 11ZM8.99999 3.125C8.33248 3.125 7.67996 3.32294 7.12494 3.69379C6.56993 4.06464 6.13735 4.59174 5.8819 5.20844C5.62645 5.82514 5.55962 6.50374 5.68984 7.15843C5.82007 7.81312 6.14151 8.41448 6.61351 8.88649C7.08551 9.35849 7.68688 9.67993 8.34156 9.81015C8.99625 9.94038 9.67485 9.87354 10.2915 9.61809C10.9083 9.36265 11.4354 8.93007 11.8062 8.37505C12.1771 7.82003 12.375 7.16751 12.375 6.5C12.3741 5.60518 12.0182 4.74728 11.3855 4.11454C10.7527 3.48181 9.89481 3.12593 8.99999 3.125ZM8.99999 8.75C8.55499 8.75 8.11997 8.61804 7.74996 8.37081C7.37995 8.12357 7.09156 7.77217 6.92126 7.36104C6.75097 6.9499 6.70641 6.4975 6.79323 6.06105C6.88004 5.62459 7.09433 5.22368 7.409 4.90901C7.72367 4.59434 8.12458 4.38005 8.56104 4.29323C8.9975 4.20642 9.4499 4.25097 9.86103 4.42127C10.2722 4.59157 10.6236 4.87996 10.8708 5.24997C11.118 5.61998 11.25 6.05499 11.25 6.5C11.25 7.09674 11.0129 7.66903 10.591 8.09099C10.169 8.51295 9.59673 8.75 8.99999 8.75Z" fill="white"/>
                                            </svg>
                                            <span>Preview</span>
                                        </button>
                                    </div>
                                    <div class="ms-2">
                                        <button class="btn btn-primary pt-1 pb-1">
                                            <svg class="me-2" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.0312 10.1249V14.6249C16.0312 14.8487 15.9424 15.0633 15.7841 15.2216C15.6259 15.3798 15.4113 15.4687 15.1875 15.4687H2.8125C2.58872 15.4687 2.37411 15.3798 2.21588 15.2216C2.05764 15.0633 1.96875 14.8487 1.96875 14.6249V10.1249C1.96875 9.90116 2.05764 9.68655 2.21588 9.52831C2.37411 9.37008 2.58872 9.28118 2.8125 9.28118C3.03628 9.28118 3.25089 9.37008 3.40912 9.52831C3.56736 9.68655 3.65625 9.90116 3.65625 10.1249V13.7812H14.3438V10.1249C14.3438 9.90116 14.4326 9.68655 14.5909 9.52831C14.7491 9.37008 14.9637 9.28118 15.1875 9.28118C15.4113 9.28118 15.6259 9.37008 15.7841 9.52831C15.9424 9.68655 16.0312 9.90116 16.0312 10.1249ZM6.78445 5.65939L8.15625 4.289V10.1249C8.15625 10.3487 8.24514 10.5633 8.40338 10.7216C8.56161 10.8798 8.77622 10.9687 9 10.9687C9.22378 10.9687 9.43839 10.8798 9.59662 10.7216C9.75485 10.5633 9.84375 10.3487 9.84375 10.1249V4.289L11.2155 5.6615C11.294 5.73998 11.3872 5.80224 11.4898 5.84471C11.5923 5.88719 11.7022 5.90905 11.8132 5.90905C11.9242 5.90905 12.0341 5.88719 12.1367 5.84471C12.2392 5.80224 12.3324 5.73998 12.4109 5.6615C12.4893 5.58301 12.5516 5.48983 12.5941 5.38729C12.6366 5.28474 12.6584 5.17483 12.6584 5.06384C12.6584 4.95284 12.6366 4.84294 12.5941 4.74039C12.5516 4.63784 12.4893 4.54467 12.4109 4.46618L9.59836 1.65368C9.51997 1.57502 9.42683 1.51261 9.32427 1.47002C9.22171 1.42744 9.11175 1.40552 9.0007 1.40552C8.88965 1.40552 8.7797 1.42744 8.67714 1.47002C8.57458 1.51261 8.48143 1.57502 8.40305 1.65368L5.59055 4.46618C5.51206 4.54467 5.4498 4.63784 5.40733 4.74039C5.36485 4.84294 5.34299 4.95284 5.34299 5.06384C5.34299 5.288 5.43204 5.50299 5.59055 5.6615C5.74906 5.82 5.96404 5.90905 6.1882 5.90905C6.41237 5.90905 6.62735 5.82 6.78586 5.6615L6.78445 5.65939Z" fill="white"/>
                                            </svg>
                                            <span>Upload New</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="av__title_2">Proof of address</div>
                            <div class="tab_body mb-4">
                                <div class="av__reason_title">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.59375 5.90625C7.59375 5.68375 7.65973 5.46624 7.78335 5.28123C7.90697 5.09623 8.08267 4.95203 8.28823 4.86689C8.4938 4.78174 8.72 4.75946 8.93823 4.80287C9.15646 4.84627 9.35691 4.95342 9.51425 5.11075C9.67158 5.26809 9.77873 5.46854 9.82214 5.68677C9.86555 5.905 9.84327 6.1312 9.75812 6.33677C9.67297 6.54234 9.52878 6.71804 9.34377 6.84165C9.15876 6.96527 8.94126 7.03125 8.71875 7.03125C8.42038 7.03125 8.13424 6.91272 7.92326 6.70175C7.71228 6.49077 7.59375 6.20462 7.59375 5.90625ZM16.5938 9C16.5938 10.5019 16.1484 11.9701 15.314 13.2189C14.4796 14.4676 13.2936 15.441 11.906 16.0157C10.5184 16.5905 8.99158 16.7408 7.51854 16.4478C6.04549 16.1548 4.69242 15.4316 3.63041 14.3696C2.56841 13.3076 1.84517 11.9545 1.55217 10.4815C1.25916 9.00842 1.40954 7.48157 1.98429 6.094C2.55905 4.70642 3.53236 3.52044 4.78114 2.68603C6.02993 1.85162 7.4981 1.40625 9 1.40625C11.0133 1.40848 12.9435 2.20925 14.3671 3.63287C15.7907 5.0565 16.5915 6.9867 16.5938 9ZM14.9063 9C14.9063 7.83185 14.5599 6.68994 13.9109 5.71866C13.2619 4.74739 12.3395 3.99037 11.2602 3.54334C10.181 3.09631 8.99345 2.97934 7.84775 3.20724C6.70205 3.43513 5.64966 3.99765 4.82365 4.82365C3.99765 5.64965 3.43513 6.70205 3.20724 7.84775C2.97935 8.99345 3.09631 10.181 3.54334 11.2602C3.99037 12.3394 4.74739 13.2619 5.71867 13.9109C6.68994 14.5599 7.83186 14.9062 9 14.9062C10.5659 14.9046 12.0672 14.2818 13.1745 13.1745C14.2818 12.0672 14.9046 10.5659 14.9063 9ZM9.84375 11.5791V9.28125C9.84375 8.90829 9.69559 8.5506 9.43187 8.28688C9.16815 8.02316 8.81046 7.875 8.4375 7.875C8.23824 7.8747 8.04531 7.94494 7.89287 8.07326C7.74043 8.20158 7.63833 8.37972 7.60464 8.57611C7.57095 8.7725 7.60786 8.97447 7.70882 9.14626C7.80978 9.31805 7.96828 9.44857 8.15625 9.51469V11.8125C8.15625 12.1855 8.30441 12.5431 8.56813 12.8069C8.83186 13.0706 9.18954 13.2188 9.5625 13.2188C9.76176 13.219 9.9547 13.1488 10.1071 13.0205C10.2596 12.8922 10.3617 12.714 10.3954 12.5176C10.4291 12.3213 10.3921 12.1193 10.2912 11.9475C10.1902 11.7757 10.0317 11.6452 9.84375 11.5791Z" fill="black"/>
                                    </svg>
                                    <span>Reason</span>
                                </div>
                                <div class="av__reason_text">
                                    The document you uploaded for address verification was not accepted because it did not clearly display your name and address. Please ensure that the document is legible and that all relevant details are visible before resubmitting.
                                </div>
                                <div class="av__reason_detail">
                                    <div class="av__reason_detail_left">
                                        <div class="av__rdl_img">
                                            <img src="./assets/img/svg/icon_pdf.svg" alt="">
                                        </div>
                                        <div class="av__rdl_info">
                                            <div class="av__rdl_name">Utility bill.pdf</div>
                                            <div class="av__rdl_size">500kb</div>
                                        </div>
                                        <div class="av__rdl_status">
                                            <svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.5306 9.53063L13.0603 12L15.5306 14.4694C15.6003 14.5391 15.6556 14.6218 15.6933 14.7128C15.731 14.8039 15.7504 14.9015 15.7504 15C15.7504 15.0985 15.731 15.1961 15.6933 15.2872C15.6556 15.3782 15.6003 15.4609 15.5306 15.5306C15.4609 15.6003 15.3782 15.6556 15.2872 15.6933C15.1961 15.731 15.0986 15.7504 15 15.7504C14.9015 15.7504 14.8039 15.731 14.7128 15.6933C14.6218 15.6556 14.5391 15.6003 14.4694 15.5306L12 13.0603L9.53063 15.5306C9.46095 15.6003 9.37822 15.6556 9.28718 15.6933C9.19613 15.731 9.09855 15.7504 9 15.7504C8.90146 15.7504 8.80388 15.731 8.71283 15.6933C8.62179 15.6556 8.53906 15.6003 8.46938 15.5306C8.3997 15.4609 8.34442 15.3782 8.30671 15.2872C8.269 15.1961 8.24959 15.0985 8.24959 15C8.24959 14.9015 8.269 14.8039 8.30671 14.7128C8.34442 14.6218 8.3997 14.5391 8.46938 14.4694L10.9397 12L8.46938 9.53063C8.32865 9.38989 8.24959 9.19902 8.24959 9C8.24959 8.80098 8.32865 8.61011 8.46938 8.46937C8.61011 8.32864 8.80098 8.24958 9 8.24958C9.19903 8.24958 9.3899 8.32864 9.53063 8.46937L12 10.9397L14.4694 8.46937C14.5391 8.39969 14.6218 8.34442 14.7128 8.3067C14.8039 8.26899 14.9015 8.24958 15 8.24958C15.0986 8.24958 15.1961 8.26899 15.2872 8.3067C15.3782 8.34442 15.4609 8.39969 15.5306 8.46937C15.6003 8.53906 15.6556 8.62178 15.6933 8.71283C15.731 8.80387 15.7504 8.90145 15.7504 9C15.7504 9.09855 15.731 9.19613 15.6933 9.28717C15.6556 9.37822 15.6003 9.46094 15.5306 9.53063ZM21.75 12C21.75 13.9284 21.1782 15.8134 20.1068 17.4168C19.0355 19.0202 17.5127 20.2699 15.7312 21.0078C13.9496 21.7458 11.9892 21.9389 10.0979 21.5627C8.20656 21.1865 6.46928 20.2579 5.10571 18.8943C3.74215 17.5307 2.81355 15.7934 2.43735 13.9021C2.06114 12.0108 2.25422 10.0504 2.99218 8.26884C3.73013 6.48726 4.97982 4.96451 6.58319 3.89317C8.18657 2.82183 10.0716 2.25 12 2.25C14.585 2.25273 17.0634 3.28084 18.8913 5.10872C20.7192 6.93661 21.7473 9.41498 21.75 12ZM20.25 12C20.25 10.3683 19.7661 8.77325 18.8596 7.41655C17.9531 6.05984 16.6646 5.00242 15.1571 4.37799C13.6497 3.75357 11.9909 3.59019 10.3905 3.90852C8.79017 4.22685 7.32016 5.01259 6.16637 6.16637C5.01259 7.32015 4.22685 8.79016 3.90853 10.3905C3.5902 11.9908 3.75358 13.6496 4.378 15.1571C5.00242 16.6646 6.05984 17.9531 7.41655 18.8596C8.77326 19.7661 10.3683 20.25 12 20.25C14.1873 20.2475 16.2843 19.3775 17.8309 17.8309C19.3775 16.2843 20.2475 14.1873 20.25 12Z" fill="#CE2424"/>
                                            </svg>
                                            <span>Declined</span>
                                        </div>
                                    </div>
                                    <div class="ms-2">
                                        <button class="btn btn-primary pt-1 pb-1">
                                            <svg class="me-2" width="18" height="14" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17.389 6.27219C17.3644 6.21664 16.7688 4.89547 15.4448 3.57148C13.6807 1.80734 11.4525 0.875 8.99999 0.875C6.54749 0.875 4.31929 1.80734 2.55515 3.57148C1.23117 4.89547 0.632806 6.21875 0.611009 6.27219C0.579026 6.34413 0.5625 6.42198 0.5625 6.5007C0.5625 6.57943 0.579026 6.65728 0.611009 6.72922C0.635618 6.78477 1.23117 8.10523 2.55515 9.42922C4.31929 11.1927 6.54749 12.125 8.99999 12.125C11.4525 12.125 13.6807 11.1927 15.4448 9.42922C16.7688 8.10523 17.3644 6.78477 17.389 6.72922C17.421 6.65728 17.4375 6.57943 17.4375 6.5007C17.4375 6.42198 17.421 6.34413 17.389 6.27219ZM8.99999 11C6.83577 11 4.94507 10.2132 3.37992 8.66211C2.73771 8.02346 2.19134 7.2952 1.75781 6.5C2.19123 5.70472 2.73761 4.97645 3.37992 4.33789C4.94507 2.7868 6.83577 2 8.99999 2C11.1642 2 13.0549 2.7868 14.6201 4.33789C15.2635 4.9763 15.8111 5.70457 16.2457 6.5C15.7387 7.44641 13.5302 11 8.99999 11ZM8.99999 3.125C8.33248 3.125 7.67996 3.32294 7.12494 3.69379C6.56993 4.06464 6.13735 4.59174 5.8819 5.20844C5.62645 5.82514 5.55962 6.50374 5.68984 7.15843C5.82007 7.81312 6.14151 8.41448 6.61351 8.88649C7.08551 9.35849 7.68688 9.67993 8.34156 9.81015C8.99625 9.94038 9.67485 9.87354 10.2915 9.61809C10.9083 9.36265 11.4354 8.93007 11.8062 8.37505C12.1771 7.82003 12.375 7.16751 12.375 6.5C12.3741 5.60518 12.0182 4.74728 11.3855 4.11454C10.7527 3.48181 9.89481 3.12593 8.99999 3.125ZM8.99999 8.75C8.55499 8.75 8.11997 8.61804 7.74996 8.37081C7.37995 8.12357 7.09156 7.77217 6.92126 7.36104C6.75097 6.9499 6.70641 6.4975 6.79323 6.06105C6.88004 5.62459 7.09433 5.22368 7.409 4.90901C7.72367 4.59434 8.12458 4.38005 8.56104 4.29323C8.9975 4.20642 9.4499 4.25097 9.86103 4.42127C10.2722 4.59157 10.6236 4.87996 10.8708 5.24997C11.118 5.61998 11.25 6.05499 11.25 6.5C11.25 7.09674 11.0129 7.66903 10.591 8.09099C10.169 8.51295 9.59673 8.75 8.99999 8.75Z" fill="white"/>
                                            </svg>
                                            <span>Preview</span>
                                        </button>
                                    </div>
                                    <div class="ms-2">
                                        <button class="btn btn-primary pt-1 pb-1">
                                            <svg class="me-2" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.0312 10.1249V14.6249C16.0312 14.8487 15.9424 15.0633 15.7841 15.2216C15.6259 15.3798 15.4113 15.4687 15.1875 15.4687H2.8125C2.58872 15.4687 2.37411 15.3798 2.21588 15.2216C2.05764 15.0633 1.96875 14.8487 1.96875 14.6249V10.1249C1.96875 9.90116 2.05764 9.68655 2.21588 9.52831C2.37411 9.37008 2.58872 9.28118 2.8125 9.28118C3.03628 9.28118 3.25089 9.37008 3.40912 9.52831C3.56736 9.68655 3.65625 9.90116 3.65625 10.1249V13.7812H14.3438V10.1249C14.3438 9.90116 14.4326 9.68655 14.5909 9.52831C14.7491 9.37008 14.9637 9.28118 15.1875 9.28118C15.4113 9.28118 15.6259 9.37008 15.7841 9.52831C15.9424 9.68655 16.0312 9.90116 16.0312 10.1249ZM6.78445 5.65939L8.15625 4.289V10.1249C8.15625 10.3487 8.24514 10.5633 8.40338 10.7216C8.56161 10.8798 8.77622 10.9687 9 10.9687C9.22378 10.9687 9.43839 10.8798 9.59662 10.7216C9.75485 10.5633 9.84375 10.3487 9.84375 10.1249V4.289L11.2155 5.6615C11.294 5.73998 11.3872 5.80224 11.4898 5.84471C11.5923 5.88719 11.7022 5.90905 11.8132 5.90905C11.9242 5.90905 12.0341 5.88719 12.1367 5.84471C12.2392 5.80224 12.3324 5.73998 12.4109 5.6615C12.4893 5.58301 12.5516 5.48983 12.5941 5.38729C12.6366 5.28474 12.6584 5.17483 12.6584 5.06384C12.6584 4.95284 12.6366 4.84294 12.5941 4.74039C12.5516 4.63784 12.4893 4.54467 12.4109 4.46618L9.59836 1.65368C9.51997 1.57502 9.42683 1.51261 9.32427 1.47002C9.22171 1.42744 9.11175 1.40552 9.0007 1.40552C8.88965 1.40552 8.7797 1.42744 8.67714 1.47002C8.57458 1.51261 8.48143 1.57502 8.40305 1.65368L5.59055 4.46618C5.51206 4.54467 5.4498 4.63784 5.40733 4.74039C5.36485 4.84294 5.34299 4.95284 5.34299 5.06384C5.34299 5.288 5.43204 5.50299 5.59055 5.6615C5.74906 5.82 5.96404 5.90905 6.1882 5.90905C6.41237 5.90905 6.62735 5.82 6.78586 5.6615L6.78445 5.65939Z" fill="white"/>
                                            </svg>
                                            <span>Upload New</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade modal_960" id="accountVerification" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Account Verification</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <div x-show="status < 4" class="avm_status" :class="'avm_status__item_step_'+status" >
                                        <div class="avm_status__item avm_status__item_1">
                                            <div class="avm_status__item_num">01</div>
                                            <div class="avm_status__item_label">Identity Verification</div>
                                        </div>
                                        <div class="avm_status__line avm_status__line_1"></div>
                                        <div class="avm_status__item avm_status__item_2">
                                            <div class="avm_status__item_num">02</div>
                                            <div class="avm_status__item_label">Proof of address</div>
                                        </div>
                                        <div class="avm_status__line avm_status__line_2"></div>
                                        <div class="avm_status__item avm_status__item_3">
                                            <div class="avm_status__item_num">03</div>
                                            <div class="avm_status__item_label">Facial recognition</div>
                                        </div>
                                    </div>

                                    <div x-show="status === 1">
                                        <h5 class="modal-title mb-4">Identity Verification</h5>
                                        <div class="tab_body mb-4">
                                            <div class="av_inreview">
                                                <div class="av_inreview__img">
                                                    <img src="./assets/img/svg/account_verification_1.svg" alt="">
                                                </div>
                                                <div class="av_inreview__info">
                                                    <div class="av_text_2">
                                                        <p class="mb-1">Completing the identity verification process is essential for enhancing your account security and accessing more services. This step protects your personal information and unlocks additional features tailored to your needs, ensuring a safer, personalized experience.</p>
                                                        <p class="mb-1">
                                                            <b>Before take your passport photo, please make sure that:</b>
                                                        </p>
                                                        <ul class="mb-0">
                                                            <li>Your ID isn’t expired</li>
                                                            <li>Take a clear photo</li>
                                                            <li>Capture you entire ID</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="avm_border_box">
                                            <div class="row align-items-center w-100">
                                                <div class="col-12 col-md-6">
                                                    <div class="av_text_2">
                                                        <div class="avm_text_18s">Take photo of <span class="color_theme">FRONT PAGE</span></div>
                                                        <ul class="mb-0">
                                                            <li>Your ID isn’t expired</li>
                                                            <li>Take a clear photo</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div x-data="fileUploader()" class="d-flex flex-column gap-2">
                                                        <!-- кастомная dropzone -->
                                                        <div class="dropzone"
                                                             x-show="!files.length"
                                                             :class="{ 'dragover': dragover }"
                                                             @click="$refs.fileInput.click()"
                                                             @dragover.prevent="dragover = true"
                                                             @dragleave.prevent="dragover = false"
                                                             @drop.prevent="handleDrop($event)">
                                                            <div class="dropzone_icon">
                                                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M29.025 15.06C28.005 9.885 23.46 6 18 6C13.665 6 9.9 8.46 8.025 12.06C3.51 12.54 0 16.365 0 21C0 25.965 4.035 30 9 30H28.5C32.64 30 36 26.64 36 22.5C36 18.54 32.925 15.33 29.025 15.06ZM28.5 27H9C5.685 27 3 24.315 3 21C3 17.925 5.295 15.36 8.34 15.045L9.945 14.88L10.695 13.455C12.12 10.71 14.91 9 18 9C21.93 9 25.32 11.79 26.085 15.645L26.535 17.895L28.83 18.06C31.17 18.21 33 20.175 33 22.5C33 24.975 30.975 27 28.5 27ZM12 19.5H15.825V24H20.175V19.5H24L18 13.5L12 19.5Z" fill="#1849D6"/>
                                                                </svg>
                                                            </div>
                                                            <div class="dropzone_msg">Drag your file(s) or <span>browse</span></div>
                                                            <div class="dropzone_size">Max 10 MB files are allowed</div>
                                                            <input type="file" multiple class="hidden" x-model="identityFrontPage" x-ref="fileInput" @change="previewFiles">
                                                        </div>

                                                        <div class="files_grid">
                                                            <template x-for="(file, index) in files" :key="index">
                                                                <div class="files_grid_item">
                                                                    <div class="files_grid_file">
                                                                        <template x-if="file.url && file.type.startsWith('image/')">
                                                                            <img :src="file.url" alt="Preview" class="p_file_preview">
                                                                        </template>
                                                                        <div class="files_grid_info">
                                                                            <div class="files_grid_name" x-text="file.name"></div>
                                                                            <div class="files_grid_size" x-text="formatSize(file.size)"></div>
                                                                        </div>
                                                                        <button type="button" class="files_grid_remove" @click="removeFile(index)">×</button>
                                                                    </div>
                                                                    <!-- ошибка -->
                                                                    <div class="error" x-text="file.error" x-show="file.error"></div>

                                                                    <!-- прогресс -->
                                                                    <div class="progress" :style="`width: ${file.progress}%`"></div>
                                                                </div>
                                                            </template>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="avm_border_box">
                                            <div class="row align-items-center w-100">
                                                <div class="col-12 col-md-6">
                                                    <div class="av_text_2">
                                                        <div class="avm_text_18s">Take photo of <span class="color_theme">BACK PAGE</span></div>
                                                        <ul class="mb-0">
                                                            <li>Your ID isn’t expired</li>
                                                            <li>Take a clear photo</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div x-data="fileUploader()" class="d-flex flex-column gap-2">
                                                        <!-- кастомная dropzone -->
                                                        <div class="dropzone"
                                                             x-show="!files.length"
                                                             :class="{ 'dragover': dragover }"
                                                             @click="$refs.fileInput.click()"
                                                             @dragover.prevent="dragover = true"
                                                             @dragleave.prevent="dragover = false"
                                                             @drop.prevent="handleDrop($event)">
                                                            <div class="dropzone_icon">
                                                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M29.025 15.06C28.005 9.885 23.46 6 18 6C13.665 6 9.9 8.46 8.025 12.06C3.51 12.54 0 16.365 0 21C0 25.965 4.035 30 9 30H28.5C32.64 30 36 26.64 36 22.5C36 18.54 32.925 15.33 29.025 15.06ZM28.5 27H9C5.685 27 3 24.315 3 21C3 17.925 5.295 15.36 8.34 15.045L9.945 14.88L10.695 13.455C12.12 10.71 14.91 9 18 9C21.93 9 25.32 11.79 26.085 15.645L26.535 17.895L28.83 18.06C31.17 18.21 33 20.175 33 22.5C33 24.975 30.975 27 28.5 27ZM12 19.5H15.825V24H20.175V19.5H24L18 13.5L12 19.5Z" fill="#1849D6"/>
                                                                </svg>
                                                            </div>
                                                            <div class="dropzone_msg">Drag your file(s) or <span>browse</span></div>
                                                            <div class="dropzone_size">Max 10 MB files are allowed</div>
                                                            <input type="file" multiple class="hidden" x-model="identityBackPage" x-ref="fileInput" @change="previewFiles">
                                                        </div>

                                                        <div class="files_grid">
                                                            <template x-for="(file, index) in files" :key="index">
                                                                <div class="files_grid_item">
                                                                    <div class="files_grid_file">
                                                                        <template x-if="file.url && file.type.startsWith('image/')">
                                                                            <img :src="file.url" alt="Preview" class="p_file_preview">
                                                                        </template>
                                                                        <div class="files_grid_info">
                                                                            <div class="files_grid_name" x-text="file.name"></div>
                                                                            <div class="files_grid_size" x-text="formatSize(file.size)"></div>
                                                                        </div>
                                                                        <button type="button" class="files_grid_remove" @click="removeFile(index)">×</button>
                                                                    </div>
                                                                    <!-- ошибка -->
                                                                    <div class="error" x-text="file.error" x-show="file.error"></div>

                                                                    <!-- прогресс -->
                                                                    <div class="progress" :style="`width: ${file.progress}%`"></div>
                                                                </div>
                                                            </template>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="avm_bottom_l">Only support .jpg, .png and .svg and PDF files</div>
                                        <div x-show="isStep1Valid" class="mt-4">
                                            <button class="btn btn-primary w-100" @click.prevent="confirmStep1()">
                                                <svg width="19" height="18" class="me-1" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.8452 5.65948L7.84521 14.6595C7.76683 14.7381 7.67368 14.8006 7.57112 14.8431C7.46856 14.8857 7.35861 14.9076 7.24756 14.9076C7.13651 14.9076 7.02655 14.8857 6.92399 14.8431C6.82143 14.8006 6.72829 14.7381 6.6499 14.6595L2.7124 10.722C2.63392 10.6435 2.57166 10.5503 2.52918 10.4478C2.48671 10.3452 2.46484 10.2353 2.46484 10.1243C2.46484 10.0133 2.48671 9.90342 2.52918 9.80088C2.57166 9.69833 2.63392 9.60515 2.7124 9.52667C2.79089 9.44818 2.88406 9.38593 2.98661 9.34345C3.08915 9.30097 3.19906 9.27911 3.31006 9.27911C3.42105 9.27911 3.53096 9.30097 3.63351 9.34345C3.73605 9.38593 3.82923 9.44818 3.90771 9.52667L7.24826 12.8672L15.6513 4.46557C15.8098 4.30707 16.0248 4.21802 16.249 4.21802C16.4731 4.21802 16.6881 4.30707 16.8466 4.46557C17.0051 4.62408 17.0942 4.83907 17.0942 5.06323C17.0942 5.2874 17.0051 5.50238 16.8466 5.66089L16.8452 5.65948Z" fill="white"/>
                                                </svg>
                                                <span>Confirm</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div x-show="status === 2">
                                        <h5 class="modal-title mb-4">Proof of Address</h5>
                                        <div class="tab_body mb-4">
                                            <div class="av_inreview">
                                                <div class="av_inreview__img">
                                                    <img src="./assets/img/svg/account_verification_2.svg" alt="">
                                                </div>
                                                <div class="av_inreview__info">
                                                    <div class="av_text_2">
                                                        <p class="mb-1">Address verification is crucial for boosting your account security and gaining access to a wider range of services. This process safeguards your personal details and enables additional features customized for you, ensuring a more secure and tailored experience.</p>
                                                        <p class="mb-1">
                                                            <b>Before verifying your address, please ensure that:</b>
                                                        </p>
                                                        <ul class="mb-0">
                                                            <li>You can use any of the following documents as proof of address documentation: Utility bills / Bank statement / Communication billing</li>
                                                            <li>The document must contain your name, address, date within the last 3 months</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="avm_border_box">
                                            <div class="row align-items-center w-100">
                                                <div class="col-12 col-md-6">
                                                    <div class="av_text_2">
                                                        <div class="avm_text_18s">Take photo or document of <span class="color_theme">Proof of Address</span></div>
                                                        <ul class="mb-0">
                                                            <li>Your address is current</li>
                                                            <li>Provide a clear document</li>
                                                            <li>Include your full address</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div x-data="fileUploader()" class="d-flex flex-column gap-2">
                                                        <!-- кастомная dropzone -->
                                                        <div class="dropzone"
                                                             x-show="!files.length"
                                                             :class="{ 'dragover': dragover }"
                                                             @click="$refs.fileInput.click()"
                                                             @dragover.prevent="dragover = true"
                                                             @dragleave.prevent="dragover = false"
                                                             @drop.prevent="handleDrop($event)">
                                                            <div class="dropzone_icon">
                                                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M29.025 15.06C28.005 9.885 23.46 6 18 6C13.665 6 9.9 8.46 8.025 12.06C3.51 12.54 0 16.365 0 21C0 25.965 4.035 30 9 30H28.5C32.64 30 36 26.64 36 22.5C36 18.54 32.925 15.33 29.025 15.06ZM28.5 27H9C5.685 27 3 24.315 3 21C3 17.925 5.295 15.36 8.34 15.045L9.945 14.88L10.695 13.455C12.12 10.71 14.91 9 18 9C21.93 9 25.32 11.79 26.085 15.645L26.535 17.895L28.83 18.06C31.17 18.21 33 20.175 33 22.5C33 24.975 30.975 27 28.5 27ZM12 19.5H15.825V24H20.175V19.5H24L18 13.5L12 19.5Z" fill="#1849D6"/>
                                                                </svg>
                                                            </div>
                                                            <div class="dropzone_msg">Drag your file(s) or <span>browse</span></div>
                                                            <div class="dropzone_size">Max 10 MB files are allowed</div>
                                                            <input type="file" multiple class="hidden" x-model="docProofOfAddress" x-ref="fileInput" @change="previewFiles">
                                                        </div>

                                                        <div class="files_grid">
                                                            <template x-for="(file, index) in files" :key="index">
                                                                <div class="files_grid_item">
                                                                    <div class="files_grid_file">
                                                                        <template x-if="file.url && file.type.startsWith('image/')">
                                                                            <img :src="file.url" alt="Preview" class="p_file_preview">
                                                                        </template>
                                                                        <div class="files_grid_info">
                                                                            <div class="files_grid_name" x-text="file.name"></div>
                                                                            <div class="files_grid_size" x-text="formatSize(file.size)"></div>
                                                                        </div>
                                                                        <button type="button" class="files_grid_remove" @click="removeFile(index)">×</button>
                                                                    </div>
                                                                    <!-- ошибка -->
                                                                    <div class="error" x-text="file.error" x-show="file.error"></div>

                                                                    <!-- прогресс -->
                                                                    <div class="progress" :style="`width: ${file.progress}%`"></div>
                                                                </div>
                                                            </template>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="avm_border_box">
                                            <div class="row align-items-center w-100">
                                                <div class="col-12 col-md-6">
                                                    <div class="av_text_2">
                                                        <div class="avm_text_18s">Take photo of  <span class="color_theme">Supporting documents</span></div>
                                                        <ul class="mb-0">
                                                            <li>That can be few documents / photos not only one</li>
                                                            <li>Add everything you think can help us proof your address</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div x-data="fileUploader()" class="d-flex flex-column gap-2">
                                                        <!-- кастомная dropzone -->
                                                        <div class="dropzone"
                                                             x-show="!files.length"
                                                             :class="{ 'dragover': dragover }"
                                                             @click="$refs.fileInput.click()"
                                                             @dragover.prevent="dragover = true"
                                                             @dragleave.prevent="dragover = false"
                                                             @drop.prevent="handleDrop($event)">
                                                            <div class="dropzone_icon">
                                                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M29.025 15.06C28.005 9.885 23.46 6 18 6C13.665 6 9.9 8.46 8.025 12.06C3.51 12.54 0 16.365 0 21C0 25.965 4.035 30 9 30H28.5C32.64 30 36 26.64 36 22.5C36 18.54 32.925 15.33 29.025 15.06ZM28.5 27H9C5.685 27 3 24.315 3 21C3 17.925 5.295 15.36 8.34 15.045L9.945 14.88L10.695 13.455C12.12 10.71 14.91 9 18 9C21.93 9 25.32 11.79 26.085 15.645L26.535 17.895L28.83 18.06C31.17 18.21 33 20.175 33 22.5C33 24.975 30.975 27 28.5 27ZM12 19.5H15.825V24H20.175V19.5H24L18 13.5L12 19.5Z" fill="#1849D6"/>
                                                                </svg>
                                                            </div>
                                                            <div class="dropzone_msg">Drag your file(s) or <span>browse</span></div>
                                                            <div class="dropzone_size">Max 10 MB files are allowed</div>
                                                            <input type="file" multiple class="hidden" x-model="docSupportingDocuments" x-ref="fileInput" @change="previewFiles">
                                                        </div>

                                                        <div class="files_grid">
                                                            <template x-for="(file, index) in files" :key="index">
                                                                <div class="files_grid_item">
                                                                    <div class="files_grid_file">
                                                                        <template x-if="file.url && file.type.startsWith('image/')">
                                                                            <img :src="file.url" alt="Preview" class="p_file_preview">
                                                                        </template>
                                                                        <div class="files_grid_info">
                                                                            <div class="files_grid_name" x-text="file.name"></div>
                                                                            <div class="files_grid_size" x-text="formatSize(file.size)"></div>
                                                                        </div>
                                                                        <button type="button" class="files_grid_remove" @click="removeFile(index)">×</button>
                                                                    </div>
                                                                    <!-- ошибка -->
                                                                    <div class="error" x-text="file.error" x-show="file.error"></div>

                                                                    <!-- прогресс -->
                                                                    <div class="progress" :style="`width: ${file.progress}%`"></div>
                                                                </div>
                                                            </template>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="avm_bottom_l">Only support .jpg, .png and .svg and PDF files</div>
                                        <div x-show="isStep2Valid" class="mt-4">
                                            <button class="btn btn-primary w-100" @click.prevent="confirmStep2()">
                                                <svg width="19" height="18" class="me-1" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.8452 5.65948L7.84521 14.6595C7.76683 14.7381 7.67368 14.8006 7.57112 14.8431C7.46856 14.8857 7.35861 14.9076 7.24756 14.9076C7.13651 14.9076 7.02655 14.8857 6.92399 14.8431C6.82143 14.8006 6.72829 14.7381 6.6499 14.6595L2.7124 10.722C2.63392 10.6435 2.57166 10.5503 2.52918 10.4478C2.48671 10.3452 2.46484 10.2353 2.46484 10.1243C2.46484 10.0133 2.48671 9.90342 2.52918 9.80088C2.57166 9.69833 2.63392 9.60515 2.7124 9.52667C2.79089 9.44818 2.88406 9.38593 2.98661 9.34345C3.08915 9.30097 3.19906 9.27911 3.31006 9.27911C3.42105 9.27911 3.53096 9.30097 3.63351 9.34345C3.73605 9.38593 3.82923 9.44818 3.90771 9.52667L7.24826 12.8672L15.6513 4.46557C15.8098 4.30707 16.0248 4.21802 16.249 4.21802C16.4731 4.21802 16.6881 4.30707 16.8466 4.46557C17.0051 4.62408 17.0942 4.83907 17.0942 5.06323C17.0942 5.2874 17.0051 5.50238 16.8466 5.66089L16.8452 5.65948Z" fill="white"/>
                                                </svg>
                                                <span>Confirm</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div x-show="status === 3">
                                        <h5 class="modal-title mb-4">Facial recognition</h5>
                                        <div class="tab_body mb-4">
                                            <div class="av_inreview">
                                                <div class="av_inreview__img">
                                                    <img src="./assets/img/svg/account_verification_3.svg" alt="">
                                                </div>
                                                <div class="av_inreview__info">
                                                    <div class="av_text_2">
                                                        <p class="mb-1">Selfie verification is essential for enhancing your account security and unlocking more services. This method protects your personal information and allows for personalized features, ensuring a safer and more customized experience.</p>
                                                        <p class="mb-1">
                                                            <b>Before you proceed with selfie verification, please make sure that:</b>
                                                        </p>
                                                        <ul class="mb-0">
                                                            <li>Your selfie is recent</li>
                                                            <li>The image is clear</li>
                                                            <li>Your face is fully visible</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="avm_border_box">
                                            <div class="row align-items-center w-100">
                                                <div class="col-12 col-md-6">
                                                    <div class="av_text_2">
                                                        <div class="avm_text_18s">Take youre <span class="color_theme">Selfie</span></div>
                                                        <ul class="mb-0">
                                                            <li>Your selfie is recent</li>
                                                            <li>The image is clear</li>
                                                            <li>Your face is fully visible</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div x-data="fileUploader()" class="d-flex flex-column gap-2">
                                                        <!-- кастомная dropzone -->
                                                        <div class="dropzone"
                                                             x-show="!files.length"
                                                             :class="{ 'dragover': dragover }"
                                                             @click="$refs.fileInput.click()"
                                                             @dragover.prevent="dragover = true"
                                                             @dragleave.prevent="dragover = false"
                                                             @drop.prevent="handleDrop($event)">
                                                            <div class="dropzone_icon">
                                                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M29.025 15.06C28.005 9.885 23.46 6 18 6C13.665 6 9.9 8.46 8.025 12.06C3.51 12.54 0 16.365 0 21C0 25.965 4.035 30 9 30H28.5C32.64 30 36 26.64 36 22.5C36 18.54 32.925 15.33 29.025 15.06ZM28.5 27H9C5.685 27 3 24.315 3 21C3 17.925 5.295 15.36 8.34 15.045L9.945 14.88L10.695 13.455C12.12 10.71 14.91 9 18 9C21.93 9 25.32 11.79 26.085 15.645L26.535 17.895L28.83 18.06C31.17 18.21 33 20.175 33 22.5C33 24.975 30.975 27 28.5 27ZM12 19.5H15.825V24H20.175V19.5H24L18 13.5L12 19.5Z" fill="#1849D6"/>
                                                                </svg>
                                                            </div>
                                                            <div class="dropzone_msg">Drag your file(s) or <span>browse</span></div>
                                                            <div class="dropzone_size">Max 10 MB files are allowed</div>
                                                            <input type="file" multiple class="hidden" x-model="selfie" x-ref="fileInput" @change="previewFiles">
                                                        </div>

                                                        <div class="files_grid">
                                                            <template x-for="(file, index) in files" :key="index">
                                                                <div class="files_grid_item">
                                                                    <div class="files_grid_file">
                                                                        <template x-if="file.url && file.type.startsWith('image/')">
                                                                            <img :src="file.url" alt="Preview" class="p_file_preview">
                                                                        </template>
                                                                        <div class="files_grid_info">
                                                                            <div class="files_grid_name" x-text="file.name"></div>
                                                                            <div class="files_grid_size" x-text="formatSize(file.size)"></div>
                                                                        </div>
                                                                        <button type="button" class="files_grid_remove" @click="removeFile(index)">×</button>
                                                                    </div>
                                                                    <!-- ошибка -->
                                                                    <div class="error" x-text="file.error" x-show="file.error"></div>

                                                                    <!-- прогресс -->
                                                                    <div class="progress" :style="`width: ${file.progress}%`"></div>
                                                                </div>
                                                            </template>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="avm_bottom_l">Only support .jpg, .png and .svg and PDF files</div>
                                        <div x-show="isStep3Valid" class="mt-4">
                                            <button class="btn btn-primary w-100" @click.prevent="confirmStep3()">
                                                <svg width="19" height="18" class="me-1" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.8452 5.65948L7.84521 14.6595C7.76683 14.7381 7.67368 14.8006 7.57112 14.8431C7.46856 14.8857 7.35861 14.9076 7.24756 14.9076C7.13651 14.9076 7.02655 14.8857 6.92399 14.8431C6.82143 14.8006 6.72829 14.7381 6.6499 14.6595L2.7124 10.722C2.63392 10.6435 2.57166 10.5503 2.52918 10.4478C2.48671 10.3452 2.46484 10.2353 2.46484 10.1243C2.46484 10.0133 2.48671 9.90342 2.52918 9.80088C2.57166 9.69833 2.63392 9.60515 2.7124 9.52667C2.79089 9.44818 2.88406 9.38593 2.98661 9.34345C3.08915 9.30097 3.19906 9.27911 3.31006 9.27911C3.42105 9.27911 3.53096 9.30097 3.63351 9.34345C3.73605 9.38593 3.82923 9.44818 3.90771 9.52667L7.24826 12.8672L15.6513 4.46557C15.8098 4.30707 16.0248 4.21802 16.249 4.21802C16.4731 4.21802 16.6881 4.30707 16.8466 4.46557C17.0051 4.62408 17.0942 4.83907 17.0942 5.06323C17.0942 5.2874 17.0051 5.50238 16.8466 5.66089L16.8452 5.65948Z" fill="white"/>
                                                </svg>
                                                <span>Confirm</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div x-show="status === 4">
                                        <div class="tab_body mb-4">
                                            <div class="av_inreview">
                                                <div class="av_inreview__img">
                                                    <img src="./assets/img/svg/personal_in_review.svg" alt="">
                                                </div>
                                                <div class="av_inreview__info">
                                                    <div class="av_title">Youre documents uploaded</div>
                                                    <div class="av_text_2">
                                                        Congratulations on successfully uploading all your documents for the verification process! Completing this step is crucial for boosting your account security and gaining access to more services. It safeguards your personal information and unlocks additional features designed just for you, ensuring a safer and more personalized experience.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="tab_title mb-4">Verification process</h2>
                                        <div class="wp_list">
                                            <div class="wp_item wp_item__active">
                                                <div class="wp_item__num">
                                                    <span>
                                                        01
                                                        <svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.57825 9.642L15.2202 0L16.5005 1.28025L5.57825 12.2025L0.5 7.12575L1.78025 5.8455L5.57825 9.642Z" fill="white"/>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="wp_item__info">
                                                    <div class="wp_item__title">Uploaded</div>
                                                    <div class="wp_item__text">Your document has been successfully uploaded. You can now access it from your dashboard and continue with your tasks.</div>
                                                </div>
                                            </div>
                                            <div class="wp_item">
                                                <div class="wp_item__num">
                                                    <span>
                                                        02
                                                        <svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.57825 9.642L15.2202 0L16.5005 1.28025L5.57825 12.2025L0.5 7.12575L1.78025 5.8455L5.57825 9.642Z" fill="white"/>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="wp_item__info">
                                                    <div class="wp_item__title">In review</div>
                                                    <div class="wp_item__text">Your document is currently undergoing verification. Please allow some time for the process to complete before further updates.</div>
                                                </div>
                                            </div>
                                            <div class="wp_item">
                                                <div class="wp_item__num">
                                                    <span>
                                                        03
                                                        <svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.57825 9.642L15.2202 0L16.5005 1.28025L5.57825 12.2025L0.5 7.12575L1.78025 5.8455L5.57825 9.642Z" fill="white"/>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="wp_item__info">
                                                    <div class="wp_item__title">Decision</div>
                                                    <div class="wp_item__text">Your document will either receive approval or be declined based on the review process. Stay tuned for the final decision.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <button class="btn btn-primary w-100" data-bs-dismiss="modal" >
                                                <svg width="19" height="18" class="me-1" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.8452 5.65948L7.84521 14.6595C7.76683 14.7381 7.67368 14.8006 7.57112 14.8431C7.46856 14.8857 7.35861 14.9076 7.24756 14.9076C7.13651 14.9076 7.02655 14.8857 6.92399 14.8431C6.82143 14.8006 6.72829 14.7381 6.6499 14.6595L2.7124 10.722C2.63392 10.6435 2.57166 10.5503 2.52918 10.4478C2.48671 10.3452 2.46484 10.2353 2.46484 10.1243C2.46484 10.0133 2.48671 9.90342 2.52918 9.80088C2.57166 9.69833 2.63392 9.60515 2.7124 9.52667C2.79089 9.44818 2.88406 9.38593 2.98661 9.34345C3.08915 9.30097 3.19906 9.27911 3.31006 9.27911C3.42105 9.27911 3.53096 9.30097 3.63351 9.34345C3.73605 9.38593 3.82923 9.44818 3.90771 9.52667L7.24826 12.8672L15.6513 4.46557C15.8098 4.30707 16.0248 4.21802 16.249 4.21802C16.4731 4.21802 16.6881 4.30707 16.8466 4.46557C17.0051 4.62408 17.0942 4.83907 17.0942 5.06323C17.0942 5.2874 17.0051 5.50238 16.8466 5.66089L16.8452 5.65948Z" fill="white"/>
                                                </svg>
                                                <span>Got it</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="identite" role="tabpanel" aria-labelledby="profile-tab">
                <div class="profile_info" x-data="profileData()">
                    <div class="tab_card">
                        <div class="tab_head">
                            <h2 class="tab_title">Mon Profile</h2>
                        </div>
                        <div class="profile_avatar">
                            <div class="profile_avatar__left">
                                <div class="profile_avatar__image">
                                    <img src="./images/avatar.jpg" alt="">
                                </div>
                                <div class="profile_avatar__name">Clooney George</div>
                            </div>
                            <div class="profile_avatar__right">
                                <button class="btn btn-primary pt-1 pb-1">
                                    <svg width="18" height="18" class="me-1" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.625 3.9375H12.6759L11.7176 2.50031C11.6662 2.42336 11.5967 2.36025 11.5151 2.31659C11.4336 2.27293 11.3425 2.25006 11.25 2.25H6.75C6.65749 2.25006 6.56642 2.27293 6.48486 2.31659C6.4033 2.36025 6.33377 2.42336 6.28242 2.50031L5.32336 3.9375H3.375C2.92745 3.9375 2.49822 4.11529 2.18176 4.43176C1.86529 4.74822 1.6875 5.17745 1.6875 5.625V13.5C1.6875 13.9476 1.86529 14.3768 2.18176 14.6932C2.49822 15.0097 2.92745 15.1875 3.375 15.1875H14.625C15.0726 15.1875 15.5018 15.0097 15.8182 14.6932C16.1347 14.3768 16.3125 13.9476 16.3125 13.5V5.625C16.3125 5.17745 16.1347 4.74822 15.8182 4.43176C15.5018 4.11529 15.0726 3.9375 14.625 3.9375ZM15.1875 13.5C15.1875 13.6492 15.1282 13.7923 15.0227 13.8977C14.9173 14.0032 14.7742 14.0625 14.625 14.0625H3.375C3.22582 14.0625 3.08274 14.0032 2.97725 13.8977C2.87176 13.7923 2.8125 13.6492 2.8125 13.5V5.625C2.8125 5.47582 2.87176 5.33274 2.97725 5.22725C3.08274 5.12176 3.22582 5.0625 3.375 5.0625H5.625C5.71763 5.06256 5.80884 5.03974 5.89053 4.99608C5.97223 4.95241 6.04187 4.88924 6.09328 4.81219L7.05094 3.375H10.9484L11.9067 4.81219C11.9581 4.88924 12.0278 4.95241 12.1095 4.99608C12.1912 5.03974 12.2824 5.06256 12.375 5.0625H14.625C14.7742 5.0625 14.9173 5.12176 15.0227 5.22725C15.1282 5.33274 15.1875 5.47582 15.1875 5.625V13.5ZM9 6.1875C8.38811 6.1875 7.78997 6.36895 7.2812 6.70889C6.77244 7.04884 6.37591 7.53201 6.14175 8.09732C5.90759 8.66263 5.84632 9.28468 5.9657 9.88481C6.08507 10.4849 6.37972 11.0362 6.81239 11.4689C7.24506 11.9015 7.79631 12.1962 8.39644 12.3156C8.99657 12.4349 9.61862 12.3737 10.1839 12.1395C10.7492 11.9053 11.2324 11.5088 11.5724 11C11.9123 10.4913 12.0938 9.89314 12.0938 9.28125C12.0928 8.46102 11.7666 7.67465 11.1866 7.09467C10.6066 6.51468 9.82023 6.18843 9 6.1875ZM9 11.25C8.61062 11.25 8.22998 11.1345 7.90622 10.9182C7.58246 10.7019 7.33012 10.3944 7.18111 10.0347C7.0321 9.67492 6.99311 9.27907 7.06908 8.89717C7.14504 8.51527 7.33255 8.16447 7.60788 7.88913C7.88322 7.6138 8.23402 7.42629 8.61592 7.35033C8.99782 7.27436 9.39367 7.31335 9.75341 7.46236C10.1131 7.61137 10.4206 7.86371 10.637 8.18747C10.8533 8.51123 10.9688 8.89187 10.9688 9.28125C10.9688 9.80339 10.7613 10.3042 10.3921 10.6734C10.0229 11.0426 9.52214 11.25 9 11.25Z" fill="white"/>
                                    </svg>
                                    <span>Edit Photo</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="tab_card">
                        <div class="tab_head" x-show="!editProfileData">
                            <h2 class="tab_title">Identité & Contact</h2>
                            <button class="btn btn-primary pt-1 pb-1" @click.prevent="editProfileData = true">
                                <svg width="18" height="18" class="me-1" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.9834 5.1589L12.8412 2.01734C12.7367 1.91285 12.6127 1.82996 12.4762 1.7734C12.3397 1.71685 12.1933 1.68774 12.0456 1.68774C11.8978 1.68774 11.7515 1.71685 11.615 1.7734C11.4785 1.82996 11.3545 1.91285 11.25 2.01734L2.57977 10.6876C2.47485 10.7917 2.39167 10.9156 2.33506 11.0521C2.27844 11.1886 2.24953 11.335 2.25001 11.4828V14.6251C2.25001 14.9234 2.36853 15.2096 2.57951 15.4206C2.79049 15.6315 3.07664 15.7501 3.37501 15.7501H15.1875C15.3367 15.7501 15.4798 15.6908 15.5853 15.5853C15.6907 15.4798 15.75 15.3368 15.75 15.1876C15.75 15.0384 15.6907 14.8953 15.5853 14.7898C15.4798 14.6843 15.3367 14.6251 15.1875 14.6251H8.10844L15.9834 6.75007C16.0879 6.6456 16.1708 6.52157 16.2274 6.38507C16.2839 6.24856 16.313 6.10225 16.313 5.95449C16.313 5.80673 16.2839 5.66042 16.2274 5.52391C16.1708 5.3874 16.0879 5.26337 15.9834 5.1589ZM9.56251 5.29531L10.736 6.46882L4.78126 12.4236L3.60774 11.2501L9.56251 5.29531ZM3.37501 14.6251V12.6078L5.39227 14.6251H3.37501ZM6.75001 14.3923L5.57719 13.2188L11.5313 7.26406L12.7048 8.43757L6.75001 14.3923ZM13.5 7.64234L10.3584 4.50007L12.0459 2.81257L15.1875 5.95484L13.5 7.64234Z" fill="white"/>
                                </svg>
                                <span>Edit</span>
                            </button>
                        </div>
                        <div class="tab_head" x-show="editProfileData">
                            <h2 class="tab_title">Identité & Contact</h2>
                            <div class="d-flex">
                                <button class="btn btn-primary pt-1 pb-1" @click.prevent="saveProfileData()">
                                    <svg width="19" height="18" class="me-1" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.8452 5.65948L7.84521 14.6595C7.76683 14.7381 7.67368 14.8006 7.57112 14.8431C7.46856 14.8857 7.35861 14.9076 7.24756 14.9076C7.13651 14.9076 7.02655 14.8857 6.92399 14.8431C6.82143 14.8006 6.72829 14.7381 6.6499 14.6595L2.7124 10.722C2.63392 10.6435 2.57166 10.5503 2.52918 10.4478C2.48671 10.3452 2.46484 10.2353 2.46484 10.1243C2.46484 10.0133 2.48671 9.90342 2.52918 9.80088C2.57166 9.69833 2.63392 9.60515 2.7124 9.52667C2.79089 9.44818 2.88406 9.38593 2.98661 9.34345C3.08915 9.30097 3.19906 9.27911 3.31006 9.27911C3.42105 9.27911 3.53096 9.30097 3.63351 9.34345C3.73605 9.38593 3.82923 9.44818 3.90771 9.52667L7.24826 12.8672L15.6513 4.46557C15.8098 4.30707 16.0248 4.21802 16.249 4.21802C16.4731 4.21802 16.6881 4.30707 16.8466 4.46557C17.0051 4.62408 17.0942 4.83907 17.0942 5.06323C17.0942 5.2874 17.0051 5.50238 16.8466 5.66089L16.8452 5.65948Z" fill="white"/>
                                    </svg>
                                    <span>Confirmer</span>
                                </button>
                                <button class="btn btn-primary pt-1 pb-1 ms-2" @click.prevent="editProfileData = false">
                                    <svg width="19" height="18" class="me-1" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1577 13.4655C15.3162 13.624 15.4053 13.839 15.4053 14.0631C15.4053 14.2873 15.3162 14.5023 15.1577 14.6608C14.9992 14.8193 14.7842 14.9084 14.5601 14.9084C14.3359 14.9084 14.1209 14.8193 13.9624 14.6608L9.49826 10.1953L5.03271 14.6594C4.87421 14.8179 4.65922 14.907 4.43506 14.907C4.21089 14.907 3.99591 14.8179 3.8374 14.6594C3.67889 14.5009 3.58984 14.2859 3.58984 14.0617C3.58984 13.8376 3.67889 13.6226 3.8374 13.4641L8.30295 8.99994L3.83881 4.53439C3.6803 4.37588 3.59125 4.1609 3.59125 3.93674C3.59125 3.71257 3.6803 3.49759 3.83881 3.33908C3.99732 3.18057 4.2123 3.09152 4.43646 3.09152C4.66063 3.09152 4.87561 3.18057 5.03412 3.33908L9.49826 7.80463L13.9638 3.33838C14.1223 3.17987 14.3373 3.09082 14.5615 3.09082C14.7856 3.09082 15.0006 3.17987 15.1591 3.33838C15.3176 3.49689 15.4067 3.71187 15.4067 3.93603C15.4067 4.1602 15.3176 4.37518 15.1591 4.53369L10.6936 8.99994L15.1577 13.4655Z" fill="white"/>
                                    </svg>
                                    <span>Annuler</span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="profile_input__group" :class="{'profile_input__group_static' : !editProfileData}">
                                    <div class="pi__label">Nom</div>
                                    <div class="pi__value"
                                         x-text="user.name" x-show="!editProfileData"></div>
                                    <input type="text" class="pi__input" placeholder="Nom"
                                           x-model="user.name" x-show="editProfileData" />
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="profile_input__group" :class="{'profile_input__group_static' : !editProfileData}">
                                    <div class="pi__label">Prénom</div>
                                    <div class="pi__value"
                                         x-text="user.lastname" x-show="!editProfileData"></div>
                                    <input type="text" class="pi__input" placeholder="Prénom"
                                           x-model="user.lastname" x-show="editProfileData" />
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="profile_input__group" :class="{'profile_input__group_static' : !editProfileData}">
                                    <div class="pi__label">E-mail</div>
                                    <div class="pi__value"
                                         x-text="user.email" x-show="!editProfileData"></div>
                                    <input type="text" class="pi__input" placeholder="E-mail"
                                           x-model="user.email" x-show="editProfileData" />
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="profile_input__group" :class="{'profile_input__group_static' : !editProfileData}">
                                    <div class="pi__label">Autre e-mail</div>
                                    <div class="pi__value"
                                         x-text="user.email2" x-show="!editProfileData"></div>
                                    <input type="text" class="pi__input" placeholder="Autre e-mail"
                                           x-model="user.email2" x-show="editProfileData" />
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="profile_input__group" :class="{'profile_input__group_static' : !editProfileData}">
                                    <div class="pi__label">Téléphone</div>
                                    <div class="pi__value"
                                         x-text="user.phone" x-show="!editProfileData"></div>
                                    <input type="text" class="pi__input" placeholder="Téléphone"
                                           x-model="user.phone" x-show="editProfileData" />
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="profile_input__group" :class="{'profile_input__group_static' : !editProfileData}">
                                    <div class="pi__label">Autre téléphone 1</div>
                                    <div class="pi__value"
                                         x-text="user.phone1" x-show="!editProfileData"></div>
                                    <input type="text" class="pi__input" placeholder="Autre téléphone 1"
                                           x-model="user.phone1" x-show="editProfileData" />
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="profile_input__group" :class="{'profile_input__group_static' : !editProfileData}">
                                    <div class="pi__label">Autre téléphone 2</div>
                                    <div class="pi__value"
                                         x-text="user.phone2" x-show="!editProfileData"></div>
                                    <input type="text" class="pi__input" placeholder="Autre téléphone 2"
                                           x-model="user.phone2" x-show="editProfileData" />
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="profile_input__group" :class="{'profile_input__group_static' : !editProfileData}">
                                    <div class="pi__label">Adresse</div>
                                    <div class="pi__value"
                                         x-text="user.address" x-show="!editProfileData"></div>
                                    <input type="text" class="pi__input" placeholder="Adresse"
                                           x-model="user.address" x-show="editProfileData" />
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="profile_input__group" :class="{'profile_input__group_static' : !editProfileData}">
                                    <div class="pi__label">Pays</div>
                                    <div class="pi__value"
                                         x-text="user.country" x-show="!editProfileData"></div>
                                    <input type="text" class="pi__input" placeholder="Pays"
                                           x-model="user.country" x-show="editProfileData" />
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="profile_input__group" :class="{'profile_input__group_static' : !editProfileData}">
                                    <div class="pi__label">Ville</div>
                                    <div class="pi__value"
                                         x-text="user.city" x-show="!editProfileData"></div>
                                    <input type="text" class="pi__input" placeholder="Ville"
                                           x-model="user.city" x-show="editProfileData" />
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="profile_input__group" :class="{'profile_input__group_static' : !editProfileData}">
                                    <div class="pi__label">Code postal</div>
                                    <div class="pi__value"
                                         x-text="user.zip" x-show="!editProfileData"></div>
                                    <input type="text" class="pi__input" placeholder="Code postal"
                                           x-model="user.zip" x-show="editProfileData" />
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="profile_input__group" :class="{'profile_input__group_static' : !editProfileData}">
                                    <div class="pi__label">Date de naissance</div>
                                    <div class="pi__value"
                                         x-text="user.birthday" x-show="!editProfileData"></div>
                                    <input type="text" class="pi__input" placeholder="Date de naissance"
                                           x-model="user.birthday" x-show="editProfileData" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="bank_information" role="tabpanel" aria-labelledby="bank_information">
                <div class="profile_info" x-data="bankInformation()">
                    <div class="tab_card">
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
                        <div class="bi_block">
                            <template x-for="(bankInfo, index) in bankInformationList" :key="bankInfo.id">
                                <div>
                                    <div class="bi_block__item" >
                                        <div class="tab_head" x-show="!bankInfo.editBankInformationData">
                                            <h2 class="tab_title" x-text="'Information bancaire #'+(index + 1)"></h2>
                                            <button class="btn btn-primary pt-1 pb-1" @click.prevent="bankInfo.editBankInformationData = true" >
                                                <svg width="18" height="18" class="me-1" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.9834 5.1589L12.8412 2.01734C12.7367 1.91285 12.6127 1.82996 12.4762 1.7734C12.3397 1.71685 12.1933 1.68774 12.0456 1.68774C11.8978 1.68774 11.7515 1.71685 11.615 1.7734C11.4785 1.82996 11.3545 1.91285 11.25 2.01734L2.57977 10.6876C2.47485 10.7917 2.39167 10.9156 2.33506 11.0521C2.27844 11.1886 2.24953 11.335 2.25001 11.4828V14.6251C2.25001 14.9234 2.36853 15.2096 2.57951 15.4206C2.79049 15.6315 3.07664 15.7501 3.37501 15.7501H15.1875C15.3367 15.7501 15.4798 15.6908 15.5853 15.5853C15.6907 15.4798 15.75 15.3368 15.75 15.1876C15.75 15.0384 15.6907 14.8953 15.5853 14.7898C15.4798 14.6843 15.3367 14.6251 15.1875 14.6251H8.10844L15.9834 6.75007C16.0879 6.6456 16.1708 6.52157 16.2274 6.38507C16.2839 6.24856 16.313 6.10225 16.313 5.95449C16.313 5.80673 16.2839 5.66042 16.2274 5.52391C16.1708 5.3874 16.0879 5.26337 15.9834 5.1589ZM9.56251 5.29531L10.736 6.46882L4.78126 12.4236L3.60774 11.2501L9.56251 5.29531ZM3.37501 14.6251V12.6078L5.39227 14.6251H3.37501ZM6.75001 14.3923L5.57719 13.2188L11.5313 7.26406L12.7048 8.43757L6.75001 14.3923ZM13.5 7.64234L10.3584 4.50007L12.0459 2.81257L15.1875 5.95484L13.5 7.64234Z" fill="white"/>
                                                </svg>
                                                <span>Edit</span>
                                            </button>
                                        </div>
                                        <div class="tab_head" x-show="bankInfo.editBankInformationData">
                                            <h2 class="tab_title" x-text="'Information bancaire #'+(index + 1)"></h2>
                                            <div class="d-flex">
                                                <button class="btn btn-primary pt-1 pb-1" @click.prevent="saveBankInformation(bankInfo)">
                                                    <svg width="19" height="18" class="me-1" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.8452 5.65948L7.84521 14.6595C7.76683 14.7381 7.67368 14.8006 7.57112 14.8431C7.46856 14.8857 7.35861 14.9076 7.24756 14.9076C7.13651 14.9076 7.02655 14.8857 6.92399 14.8431C6.82143 14.8006 6.72829 14.7381 6.6499 14.6595L2.7124 10.722C2.63392 10.6435 2.57166 10.5503 2.52918 10.4478C2.48671 10.3452 2.46484 10.2353 2.46484 10.1243C2.46484 10.0133 2.48671 9.90342 2.52918 9.80088C2.57166 9.69833 2.63392 9.60515 2.7124 9.52667C2.79089 9.44818 2.88406 9.38593 2.98661 9.34345C3.08915 9.30097 3.19906 9.27911 3.31006 9.27911C3.42105 9.27911 3.53096 9.30097 3.63351 9.34345C3.73605 9.38593 3.82923 9.44818 3.90771 9.52667L7.24826 12.8672L15.6513 4.46557C15.8098 4.30707 16.0248 4.21802 16.249 4.21802C16.4731 4.21802 16.6881 4.30707 16.8466 4.46557C17.0051 4.62408 17.0942 4.83907 17.0942 5.06323C17.0942 5.2874 17.0051 5.50238 16.8466 5.66089L16.8452 5.65948Z" fill="white"/>
                                                    </svg>
                                                    <span>Confirmer</span>
                                                </button>
                                                <button class="btn btn-primary pt-1 pb-1 ms-2" @click.prevent="bankInfo.editBankInformationData = false">
                                                    <svg width="19" height="18" class="me-1" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.1577 13.4655C15.3162 13.624 15.4053 13.839 15.4053 14.0631C15.4053 14.2873 15.3162 14.5023 15.1577 14.6608C14.9992 14.8193 14.7842 14.9084 14.5601 14.9084C14.3359 14.9084 14.1209 14.8193 13.9624 14.6608L9.49826 10.1953L5.03271 14.6594C4.87421 14.8179 4.65922 14.907 4.43506 14.907C4.21089 14.907 3.99591 14.8179 3.8374 14.6594C3.67889 14.5009 3.58984 14.2859 3.58984 14.0617C3.58984 13.8376 3.67889 13.6226 3.8374 13.4641L8.30295 8.99994L3.83881 4.53439C3.6803 4.37588 3.59125 4.1609 3.59125 3.93674C3.59125 3.71257 3.6803 3.49759 3.83881 3.33908C3.99732 3.18057 4.2123 3.09152 4.43646 3.09152C4.66063 3.09152 4.87561 3.18057 5.03412 3.33908L9.49826 7.80463L13.9638 3.33838C14.1223 3.17987 14.3373 3.09082 14.5615 3.09082C14.7856 3.09082 15.0006 3.17987 15.1591 3.33838C15.3176 3.49689 15.4067 3.71187 15.4067 3.93603C15.4067 4.1602 15.3176 4.37518 15.1591 4.53369L10.6936 8.99994L15.1577 13.4655Z" fill="white"/>
                                                    </svg>
                                                    <span>Annuler</span>
                                                </button>
                                                <button class="btn btn-danger pt-1 pb-1 ms-2 btn_mob_f0" @click.prevent="showModal('removeBankInfo'+bankInfo.id)">
                                                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.1875 4.19995H12.375V3.63745C12.375 3.1899 12.1972 2.76068 11.8807 2.44421C11.5643 2.12774 11.1351 1.94995 10.6875 1.94995H7.3125C6.86495 1.94995 6.43572 2.12774 6.11926 2.44421C5.80279 2.76068 5.625 3.1899 5.625 3.63745V4.19995H2.8125C2.66332 4.19995 2.52024 4.25921 2.41475 4.3647C2.30926 4.47019 2.25 4.61327 2.25 4.76245C2.25 4.91164 2.30926 5.05471 2.41475 5.1602C2.52024 5.26569 2.66332 5.32495 2.8125 5.32495H3.375V15.45C3.375 15.7483 3.49353 16.0345 3.7045 16.2454C3.91548 16.4564 4.20163 16.575 4.5 16.575H13.5C13.7984 16.575 14.0845 16.4564 14.2955 16.2454C14.5065 16.0345 14.625 15.7483 14.625 15.45V5.32495H15.1875C15.3367 5.32495 15.4798 5.26569 15.5852 5.1602C15.6907 5.05471 15.75 4.91164 15.75 4.76245C15.75 4.61327 15.6907 4.47019 15.5852 4.3647C15.4798 4.25921 15.3367 4.19995 15.1875 4.19995ZM6.75 3.63745C6.75 3.48827 6.80926 3.34519 6.91475 3.2397C7.02024 3.13421 7.16332 3.07495 7.3125 3.07495H10.6875C10.8367 3.07495 10.9798 3.13421 11.0852 3.2397C11.1907 3.34519 11.25 3.48827 11.25 3.63745V4.19995H6.75V3.63745ZM13.5 15.45H4.5V5.32495H13.5V15.45ZM7.875 8.13745V12.6375C7.875 12.7866 7.81574 12.9297 7.71025 13.0352C7.60476 13.1407 7.46168 13.2 7.3125 13.2C7.16332 13.2 7.02024 13.1407 6.91475 13.0352C6.80926 12.9297 6.75 12.7866 6.75 12.6375V8.13745C6.75 7.98827 6.80926 7.84519 6.91475 7.7397C7.02024 7.63421 7.16332 7.57495 7.3125 7.57495C7.46168 7.57495 7.60476 7.63421 7.71025 7.7397C7.81574 7.84519 7.875 7.98827 7.875 8.13745ZM11.25 8.13745V12.6375C11.25 12.7866 11.1907 12.9297 11.0852 13.0352C10.9798 13.1407 10.8367 13.2 10.6875 13.2C10.5383 13.2 10.3952 13.1407 10.2898 13.0352C10.1843 12.9297 10.125 12.7866 10.125 12.6375V8.13745C10.125 7.98827 10.1843 7.84519 10.2898 7.7397C10.3952 7.63421 10.5383 7.57495 10.6875 7.57495C10.8367 7.57495 10.9798 7.63421 11.0852 7.7397C11.1907 7.84519 11.25 7.98827 11.25 8.13745Z" fill="white"/>
                                                    </svg>
                                                    <span>Delete</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="profile_input__group" :class="{'profile_input__group_static' : !bankInfo.editBankInformationData}">
                                                    <div class="pi__label">Nom de la banque</div>
                                                    <div class="pi__value"
                                                         x-text="bankInfo.bank_name" x-show="!bankInfo.editBankInformationData"></div>
                                                    <input type="text" class="pi__input" placeholder="Nom de la banque"
                                                           x-model="bankInfo.bank_name" x-show="bankInfo.editBankInformationData" />
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="profile_input__group" :class="{'profile_input__group_static' : !bankInfo.editBankInformationData}">
                                                    <div class="pi__label">Nom du compte</div>
                                                    <div class="pi__value"
                                                         x-text="bankInfo.iban" x-show="!bankInfo.editBankInformationData"></div>
                                                    <input type="text" class="pi__input" placeholder="Nom du compte"
                                                           x-model="bankInfo.iban" x-show="bankInfo.editBankInformationData" />
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="profile_input__group" :class="{'profile_input__group_static' : !bankInfo.editBankInformationData}">
                                                    <div class="pi__label">SWIFT/BIC</div>
                                                    <div class="pi__value"
                                                         x-text="bankInfo.swift" x-show="!bankInfo.editBankInformationData"></div>
                                                    <input type="text" class="pi__input" placeholder="SWIFT/BIC"
                                                           x-model="bankInfo.swift" x-show="bankInfo.editBankInformationData" />
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="profile_input__group" :class="{'profile_input__group_static' : !bankInfo.editBankInformationData}">
                                                    <div class="pi__label">Wallet</div>
                                                    <div class="pi__value"
                                                         x-text="bankInfo.wallet" x-show="!bankInfo.editBankInformationData"></div>
                                                    <input type="text" class="pi__input" placeholder="Wallet"
                                                           x-model="bankInfo.wallet" x-show="bankInfo.editBankInformationData" />
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="profile_input__group" :class="{'profile_input__group_static' : !bankInfo.editBankInformationData}">
                                                    <div class="pi__label">Wallet name</div>
                                                    <div class="pi__value"
                                                         x-text="bankInfo.wallet_name" x-show="!bankInfo.editBankInformationData"></div>
                                                    <input type="text" class="pi__input" placeholder="Wallet name"
                                                           x-model="bankInfo.wallet_name" x-show="bankInfo.editBankInformationData" />
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="profile_input__group" :class="{'profile_input__group_static' : !bankInfo.editBankInformationData}">
                                                    <div class="pi__label">Réseau</div>
                                                    <div class="pi__value"
                                                         x-text="bankInfo.network" x-show="!bankInfo.editBankInformationData"></div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" :id="'removeBankInfo'+bankInfo.id" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Delete information bancaire</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="color_red text-center">Are you sure you want to delete  Information bancaire?</div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="row w-100">
                                                        <div class="col-6">
                                                            <button @click.prevent="deleteBankInformation(bankInfo.id)" type="button" class="btn btn-danger w-100" >Yes, Delete</button>
                                                        </div>
                                                        <div class="col-6">
                                                            <button type="button" class="btn btn-primary w-100" data-bs-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                        <div class="bi_block__center mt-4">
                            <button class="btn btn-primary pt-1 pb-1 ps-4 pe-4" @click.prevent="addBankInformation()" >
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5 10.825C17.5 10.9907 17.4342 11.1497 17.3169 11.2669C17.1997 11.3841 17.0408 11.45 16.875 11.45H10.625V17.7C10.625 17.8657 10.5592 18.0247 10.4419 18.1419C10.3247 18.2591 10.1658 18.325 10 18.325C9.83424 18.325 9.67527 18.2591 9.55806 18.1419C9.44085 18.0247 9.375 17.8657 9.375 17.7V11.45H3.125C2.95924 11.45 2.80027 11.3841 2.68306 11.2669C2.56585 11.1497 2.5 10.9907 2.5 10.825C2.5 10.6592 2.56585 10.5002 2.68306 10.383C2.80027 10.2658 2.95924 10.2 3.125 10.2H9.375V3.94995C9.375 3.78419 9.44085 3.62522 9.55806 3.50801C9.67527 3.3908 9.83424 3.32495 10 3.32495C10.1658 3.32495 10.3247 3.3908 10.4419 3.50801C10.5592 3.62522 10.625 3.78419 10.625 3.94995V10.2H16.875C17.0408 10.2 17.1997 10.2658 17.3169 10.383C17.4342 10.5002 17.5 10.6592 17.5 10.825Z" fill="white"/>
                                </svg>
                                <span>Add one more</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="beneficiares" role="tabpanel" aria-labelledby="contact-tab">
                <div class="profile_info" x-data="beneficiares()">
                    <div class="tab_card">
                        <div class="tab_body mb-4">
                            <div class="av_inreview">
                                <div class="av_inreview__img">
                                    <img src="./assets/img/svg/personal_beneficiares.svg" alt="">
                                </div>
                                <div class="av_inreview__info">
                                    <div class="av_title">Bénéficiaires</div>
                                    <div class="av_text_2">
                                        Understanding your bank beneficiaries is crucial for managing your finances effectively. By keeping track of who benefits from your account, you can ensure that your funds are allocated as intended, providing peace of mind and enhancing your overall banking experience.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bi_block">
                            <template x-for="(item, index) in beneficiaresList" :key="item.id">
                                <div>
                                    <div class="bi_block__item" >
                                        <div class="tab_head" x-show="!item.editBeneficiaresData">
                                            <h2 class="tab_title" x-text="'Information bancaire #'+(index + 1)"></h2>
                                            <button class="btn btn-primary pt-1 pb-1" @click.prevent="item.editBeneficiaresData = true" >
                                                <svg width="18" height="18" class="me-1" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.9834 5.1589L12.8412 2.01734C12.7367 1.91285 12.6127 1.82996 12.4762 1.7734C12.3397 1.71685 12.1933 1.68774 12.0456 1.68774C11.8978 1.68774 11.7515 1.71685 11.615 1.7734C11.4785 1.82996 11.3545 1.91285 11.25 2.01734L2.57977 10.6876C2.47485 10.7917 2.39167 10.9156 2.33506 11.0521C2.27844 11.1886 2.24953 11.335 2.25001 11.4828V14.6251C2.25001 14.9234 2.36853 15.2096 2.57951 15.4206C2.79049 15.6315 3.07664 15.7501 3.37501 15.7501H15.1875C15.3367 15.7501 15.4798 15.6908 15.5853 15.5853C15.6907 15.4798 15.75 15.3368 15.75 15.1876C15.75 15.0384 15.6907 14.8953 15.5853 14.7898C15.4798 14.6843 15.3367 14.6251 15.1875 14.6251H8.10844L15.9834 6.75007C16.0879 6.6456 16.1708 6.52157 16.2274 6.38507C16.2839 6.24856 16.313 6.10225 16.313 5.95449C16.313 5.80673 16.2839 5.66042 16.2274 5.52391C16.1708 5.3874 16.0879 5.26337 15.9834 5.1589ZM9.56251 5.29531L10.736 6.46882L4.78126 12.4236L3.60774 11.2501L9.56251 5.29531ZM3.37501 14.6251V12.6078L5.39227 14.6251H3.37501ZM6.75001 14.3923L5.57719 13.2188L11.5313 7.26406L12.7048 8.43757L6.75001 14.3923ZM13.5 7.64234L10.3584 4.50007L12.0459 2.81257L15.1875 5.95484L13.5 7.64234Z" fill="white"/>
                                                </svg>
                                                <span>Edit</span>
                                            </button>
                                        </div>
                                        <div class="tab_head" x-show="item.editBeneficiaresData">
                                            <h2 class="tab_title" x-text="'Information bancaire #'+(index + 1)"></h2>
                                            <div class="d-flex">
                                                <button class="btn btn-primary pt-1 pb-1" @click.prevent="saveBeneficiares(item)">
                                                    <svg width="19" height="18" class="me-1" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.8452 5.65948L7.84521 14.6595C7.76683 14.7381 7.67368 14.8006 7.57112 14.8431C7.46856 14.8857 7.35861 14.9076 7.24756 14.9076C7.13651 14.9076 7.02655 14.8857 6.92399 14.8431C6.82143 14.8006 6.72829 14.7381 6.6499 14.6595L2.7124 10.722C2.63392 10.6435 2.57166 10.5503 2.52918 10.4478C2.48671 10.3452 2.46484 10.2353 2.46484 10.1243C2.46484 10.0133 2.48671 9.90342 2.52918 9.80088C2.57166 9.69833 2.63392 9.60515 2.7124 9.52667C2.79089 9.44818 2.88406 9.38593 2.98661 9.34345C3.08915 9.30097 3.19906 9.27911 3.31006 9.27911C3.42105 9.27911 3.53096 9.30097 3.63351 9.34345C3.73605 9.38593 3.82923 9.44818 3.90771 9.52667L7.24826 12.8672L15.6513 4.46557C15.8098 4.30707 16.0248 4.21802 16.249 4.21802C16.4731 4.21802 16.6881 4.30707 16.8466 4.46557C17.0051 4.62408 17.0942 4.83907 17.0942 5.06323C17.0942 5.2874 17.0051 5.50238 16.8466 5.66089L16.8452 5.65948Z" fill="white"/>
                                                    </svg>
                                                    <span>Confirmer</span>
                                                </button>
                                                <button class="btn btn-primary pt-1 pb-1 ms-2" @click.prevent="item.editBeneficiaresData = false">
                                                    <svg width="19" height="18" class="me-1" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.1577 13.4655C15.3162 13.624 15.4053 13.839 15.4053 14.0631C15.4053 14.2873 15.3162 14.5023 15.1577 14.6608C14.9992 14.8193 14.7842 14.9084 14.5601 14.9084C14.3359 14.9084 14.1209 14.8193 13.9624 14.6608L9.49826 10.1953L5.03271 14.6594C4.87421 14.8179 4.65922 14.907 4.43506 14.907C4.21089 14.907 3.99591 14.8179 3.8374 14.6594C3.67889 14.5009 3.58984 14.2859 3.58984 14.0617C3.58984 13.8376 3.67889 13.6226 3.8374 13.4641L8.30295 8.99994L3.83881 4.53439C3.6803 4.37588 3.59125 4.1609 3.59125 3.93674C3.59125 3.71257 3.6803 3.49759 3.83881 3.33908C3.99732 3.18057 4.2123 3.09152 4.43646 3.09152C4.66063 3.09152 4.87561 3.18057 5.03412 3.33908L9.49826 7.80463L13.9638 3.33838C14.1223 3.17987 14.3373 3.09082 14.5615 3.09082C14.7856 3.09082 15.0006 3.17987 15.1591 3.33838C15.3176 3.49689 15.4067 3.71187 15.4067 3.93603C15.4067 4.1602 15.3176 4.37518 15.1591 4.53369L10.6936 8.99994L15.1577 13.4655Z" fill="white"/>
                                                    </svg>
                                                    <span>Annuler</span>
                                                </button>
                                                <button class="btn btn-danger pt-1 pb-1 ms-2 btn_mob_f0" @click.prevent="showModal('removeBeneficiares'+item.id)">
                                                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.1875 4.19995H12.375V3.63745C12.375 3.1899 12.1972 2.76068 11.8807 2.44421C11.5643 2.12774 11.1351 1.94995 10.6875 1.94995H7.3125C6.86495 1.94995 6.43572 2.12774 6.11926 2.44421C5.80279 2.76068 5.625 3.1899 5.625 3.63745V4.19995H2.8125C2.66332 4.19995 2.52024 4.25921 2.41475 4.3647C2.30926 4.47019 2.25 4.61327 2.25 4.76245C2.25 4.91164 2.30926 5.05471 2.41475 5.1602C2.52024 5.26569 2.66332 5.32495 2.8125 5.32495H3.375V15.45C3.375 15.7483 3.49353 16.0345 3.7045 16.2454C3.91548 16.4564 4.20163 16.575 4.5 16.575H13.5C13.7984 16.575 14.0845 16.4564 14.2955 16.2454C14.5065 16.0345 14.625 15.7483 14.625 15.45V5.32495H15.1875C15.3367 5.32495 15.4798 5.26569 15.5852 5.1602C15.6907 5.05471 15.75 4.91164 15.75 4.76245C15.75 4.61327 15.6907 4.47019 15.5852 4.3647C15.4798 4.25921 15.3367 4.19995 15.1875 4.19995ZM6.75 3.63745C6.75 3.48827 6.80926 3.34519 6.91475 3.2397C7.02024 3.13421 7.16332 3.07495 7.3125 3.07495H10.6875C10.8367 3.07495 10.9798 3.13421 11.0852 3.2397C11.1907 3.34519 11.25 3.48827 11.25 3.63745V4.19995H6.75V3.63745ZM13.5 15.45H4.5V5.32495H13.5V15.45ZM7.875 8.13745V12.6375C7.875 12.7866 7.81574 12.9297 7.71025 13.0352C7.60476 13.1407 7.46168 13.2 7.3125 13.2C7.16332 13.2 7.02024 13.1407 6.91475 13.0352C6.80926 12.9297 6.75 12.7866 6.75 12.6375V8.13745C6.75 7.98827 6.80926 7.84519 6.91475 7.7397C7.02024 7.63421 7.16332 7.57495 7.3125 7.57495C7.46168 7.57495 7.60476 7.63421 7.71025 7.7397C7.81574 7.84519 7.875 7.98827 7.875 8.13745ZM11.25 8.13745V12.6375C11.25 12.7866 11.1907 12.9297 11.0852 13.0352C10.9798 13.1407 10.8367 13.2 10.6875 13.2C10.5383 13.2 10.3952 13.1407 10.2898 13.0352C10.1843 12.9297 10.125 12.7866 10.125 12.6375V8.13745C10.125 7.98827 10.1843 7.84519 10.2898 7.7397C10.3952 7.63421 10.5383 7.57495 10.6875 7.57495C10.8367 7.57495 10.9798 7.63421 11.0852 7.7397C11.1907 7.84519 11.25 7.98827 11.25 8.13745Z" fill="white"/>
                                                    </svg>
                                                    <span>Delete</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="profile_input__group" :class="{'profile_input__group_static' : !item.editBeneficiaresData}">
                                                    <div class="pi__label">Nom</div>
                                                    <div class="pi__value"
                                                         x-text="item.name" x-show="!item.editBeneficiaresData"></div>
                                                    <input type="text" class="pi__input" placeholder="Nom"
                                                           x-model="item.name" x-show="item.editBeneficiaresData" />
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="profile_input__group" :class="{'profile_input__group_static' : !item.editBeneficiaresData}">
                                                    <div class="pi__label">Prénom</div>
                                                    <div class="pi__value"
                                                         x-text="item.lastname" x-show="!item.editBeneficiaresData"></div>
                                                    <input type="text" class="pi__input" placeholder="Prénom"
                                                           x-model="item.lastname" x-show="item.editBeneficiaresData" />
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="profile_input__group" :class="{'profile_input__group_static' : !item.editBeneficiaresData}">
                                                    <div class="pi__label">Téléphone</div>
                                                    <div class="pi__value"
                                                         x-text="item.phone" x-show="!item.editBeneficiaresData"></div>
                                                    <input type="text" class="pi__input" placeholder="Téléphone"
                                                           x-model="item.phone" x-show="item.editBeneficiaresData" />
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="profile_input__group" :class="{'profile_input__group_static' : !item.editBeneficiaresData}">
                                                    <div class="pi__label">Adresse</div>
                                                    <div class="pi__value"
                                                         x-text="item.address" x-show="!item.editBeneficiaresData"></div>
                                                    <input type="text" class="pi__input" placeholder="Adresse"
                                                           x-model="item.address" x-show="item.editBeneficiaresData" />
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="profile_input__group" :class="{'profile_input__group_static' : !item.editBeneficiaresData}">
                                                    <div class="pi__label">Date de naissance</div>
                                                    <div class="pi__value"
                                                         x-text="item.birthday" x-show="!item.editBeneficiaresData"></div>
                                                    <input type="text" class="pi__input" placeholder="Date de naissance"
                                                           x-model="item.birthday" x-show="item.editBeneficiaresData" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" :id="'removeBeneficiares'+item.id" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Delete Bénéficiaire</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="color_red text-center">Are you sure you want to delete Bénéficiaire?</div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="row w-100">
                                                        <div class="col-6">
                                                            <button @click.prevent="deleteBeneficiares(item.id)" type="button" class="btn btn-danger w-100" >Yes, Delete</button>
                                                        </div>
                                                        <div class="col-6">
                                                            <button type="button" class="btn btn-primary w-100" data-bs-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                        <div class="bi_block__center mt-4">
                            <button class="btn btn-primary pt-1 pb-1 ps-4 pe-4" @click.prevent="addBeneficiares()" >
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5 10.825C17.5 10.9907 17.4342 11.1497 17.3169 11.2669C17.1997 11.3841 17.0408 11.45 16.875 11.45H10.625V17.7C10.625 17.8657 10.5592 18.0247 10.4419 18.1419C10.3247 18.2591 10.1658 18.325 10 18.325C9.83424 18.325 9.67527 18.2591 9.55806 18.1419C9.44085 18.0247 9.375 17.8657 9.375 17.7V11.45H3.125C2.95924 11.45 2.80027 11.3841 2.68306 11.2669C2.56585 11.1497 2.5 10.9907 2.5 10.825C2.5 10.6592 2.56585 10.5002 2.68306 10.383C2.80027 10.2658 2.95924 10.2 3.125 10.2H9.375V3.94995C9.375 3.78419 9.44085 3.62522 9.55806 3.50801C9.67527 3.3908 9.83424 3.32495 10 3.32495C10.1658 3.32495 10.3247 3.3908 10.4419 3.50801C10.5592 3.62522 10.625 3.78419 10.625 3.94995V10.2H16.875C17.0408 10.2 17.1997 10.2658 17.3169 10.383C17.4342 10.5002 17.5 10.6592 17.5 10.825Z" fill="white"/>
                                </svg>
                                <span>Add one more</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="contact-tab">
                <div class="profile_info" x-data="securityHub()">
                    <div class="tab_card">
                        <div class="tab_body mb-4">
                            <div class="av_inreview">
                                <div class="av_inreview__img">
                                    <img src="./assets/img/svg/personal_security.svg" alt="">
                                </div>
                                <div class="av_inreview__info">
                                    <div class="av_title">Security Hub</div>
                                    <div class="av_text_2">
                                        Understanding your bank beneficiaries is crucial for managing your finances effectively. By keeping track of who benefits from your account, you can ensure that your funds are allocated as intended, providing peace of mind and enhancing your overall banking experience.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bi_block">
                            <div class="tab_head" x-show="!changePassword">
                                <h2 class="tab_title" >Modifier votre mot de passe</h2>
                                <button class="btn btn-primary pt-1 pb-1" @click.prevent="changePassword = true" >
                                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.625 6.44995H12.375V4.76245C12.375 3.86735 12.0194 3.0089 11.3865 2.37597C10.7536 1.74303 9.89511 1.38745 9 1.38745C8.10489 1.38745 7.24645 1.74303 6.61351 2.37597C5.98058 3.0089 5.625 3.86735 5.625 4.76245V6.44995H3.375C3.07663 6.44995 2.79048 6.56848 2.5795 6.77946C2.36853 6.99043 2.25 7.27658 2.25 7.57495V15.45C2.25 15.7483 2.36853 16.0345 2.5795 16.2454C2.79048 16.4564 3.07663 16.575 3.375 16.575H14.625C14.9234 16.575 15.2095 16.4564 15.4205 16.2454C15.6315 16.0345 15.75 15.7483 15.75 15.45V7.57495C15.75 7.27658 15.6315 6.99043 15.4205 6.77946C15.2095 6.56848 14.9234 6.44995 14.625 6.44995ZM6.75 4.76245C6.75 4.16571 6.98705 3.59342 7.40901 3.17146C7.83097 2.7495 8.40326 2.51245 9 2.51245C9.59674 2.51245 10.169 2.7495 10.591 3.17146C11.0129 3.59342 11.25 4.16571 11.25 4.76245V6.44995H6.75V4.76245ZM14.625 15.45H3.375V7.57495H14.625V15.45ZM9.84375 11.5125C9.84375 11.6793 9.79426 11.8425 9.70155 11.9812C9.60884 12.12 9.47706 12.2281 9.32289 12.292C9.16871 12.3558 8.99906 12.3725 8.83539 12.34C8.67172 12.3074 8.52138 12.2271 8.40338 12.1091C8.28538 11.9911 8.20502 11.8407 8.17246 11.6771C8.13991 11.5134 8.15662 11.3437 8.22048 11.1896C8.28434 11.0354 8.39248 10.9036 8.53124 10.8109C8.66999 10.7182 8.83312 10.6687 9 10.6687C9.22378 10.6687 9.43839 10.7576 9.59662 10.9158C9.75485 11.0741 9.84375 11.2887 9.84375 11.5125Z" fill="white"/>
                                    </svg>
                                    <span>Modifier votre mot de passe</span>
                                </button>
                            </div>
                            <div class="tab_head" x-show="changePassword">
                                <h2 class="tab_title">Modifier votre mot de passe</h2>
                                <div class="d-flex">
                                    <button class="btn btn-primary pt-1 pb-1" @click.prevent="saveNewPassword()">
                                        <svg width="19" height="18" class="me-1" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.8452 5.65948L7.84521 14.6595C7.76683 14.7381 7.67368 14.8006 7.57112 14.8431C7.46856 14.8857 7.35861 14.9076 7.24756 14.9076C7.13651 14.9076 7.02655 14.8857 6.92399 14.8431C6.82143 14.8006 6.72829 14.7381 6.6499 14.6595L2.7124 10.722C2.63392 10.6435 2.57166 10.5503 2.52918 10.4478C2.48671 10.3452 2.46484 10.2353 2.46484 10.1243C2.46484 10.0133 2.48671 9.90342 2.52918 9.80088C2.57166 9.69833 2.63392 9.60515 2.7124 9.52667C2.79089 9.44818 2.88406 9.38593 2.98661 9.34345C3.08915 9.30097 3.19906 9.27911 3.31006 9.27911C3.42105 9.27911 3.53096 9.30097 3.63351 9.34345C3.73605 9.38593 3.82923 9.44818 3.90771 9.52667L7.24826 12.8672L15.6513 4.46557C15.8098 4.30707 16.0248 4.21802 16.249 4.21802C16.4731 4.21802 16.6881 4.30707 16.8466 4.46557C17.0051 4.62408 17.0942 4.83907 17.0942 5.06323C17.0942 5.2874 17.0051 5.50238 16.8466 5.66089L16.8452 5.65948Z" fill="white"/>
                                        </svg>
                                        <span>Confirmer</span>
                                    </button>
                                    <button class="btn btn-primary pt-1 pb-1 ms-2" @click.prevent="changePassword = false">
                                        <svg width="19" height="18" class="me-1" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.1577 13.4655C15.3162 13.624 15.4053 13.839 15.4053 14.0631C15.4053 14.2873 15.3162 14.5023 15.1577 14.6608C14.9992 14.8193 14.7842 14.9084 14.5601 14.9084C14.3359 14.9084 14.1209 14.8193 13.9624 14.6608L9.49826 10.1953L5.03271 14.6594C4.87421 14.8179 4.65922 14.907 4.43506 14.907C4.21089 14.907 3.99591 14.8179 3.8374 14.6594C3.67889 14.5009 3.58984 14.2859 3.58984 14.0617C3.58984 13.8376 3.67889 13.6226 3.8374 13.4641L8.30295 8.99994L3.83881 4.53439C3.6803 4.37588 3.59125 4.1609 3.59125 3.93674C3.59125 3.71257 3.6803 3.49759 3.83881 3.33908C3.99732 3.18057 4.2123 3.09152 4.43646 3.09152C4.66063 3.09152 4.87561 3.18057 5.03412 3.33908L9.49826 7.80463L13.9638 3.33838C14.1223 3.17987 14.3373 3.09082 14.5615 3.09082C14.7856 3.09082 15.0006 3.17987 15.1591 3.33838C15.3176 3.49689 15.4067 3.71187 15.4067 3.93603C15.4067 4.1602 15.3176 4.37518 15.1591 4.53369L10.6936 8.99994L15.1577 13.4655Z" fill="white"/>
                                        </svg>
                                        <span>Annuler</span>
                                    </button>
                                </div>
                            </div>
                            <div x-show="changePassword">
                                <div @submit.prevent="saveNewPassword" >
                                    <form action="">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="profile_input__group">
                                                    <div class="pi__label">Ancien mot de passe</div>
                                                    <input type="password" class="pi__input" placeholder="Minimum de 8 caractères"
                                                           x-model="old_password" />
                                                    <template x-if="errors.old_password">
                                                        <div class="pi_error" x-text="errors.old_password"></div>
                                                    </template>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="profile_input__group">
                                                    <div class="pi__label">Nouveau mot de passe</div>
                                                    <input type="password" class="pi__input" placeholder="Nouveau mot de passe"
                                                           x-model="new_password" />
                                                    <template x-if="errors.new_password">
                                                        <div class="pi_error" x-text="errors.new_password"></div>
                                                    </template>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="profile_input__group">
                                                    <div class="pi__label">Réinsérez le nouveau mot de passe</div>
                                                    <input type="password" class="pi__input" placeholder="Réinsérez le nouveau mot de passe"
                                                           x-model="new_password2" />
                                                    <template x-if="errors.new_password2">
                                                        <div class="pi_error" x-text="errors.new_password2"></div>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="bi_block mt-4">
                            <div class="tab_head" x-show="!setPincode">
                                <h2 class="tab_title" >Modifier votre mot de PIN</h2>

                                <div class="tab_head__right">
                                    <button class="btn btn-primary pt-1 pb-1" @click.prevent="showPincodeModal()" >
                                        <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.625 6.44995H12.375V4.76245C12.375 3.86735 12.0194 3.0089 11.3865 2.37597C10.7536 1.74303 9.89511 1.38745 9 1.38745C8.10489 1.38745 7.24645 1.74303 6.61351 2.37597C5.98058 3.0089 5.625 3.86735 5.625 4.76245V6.44995H3.375C3.07663 6.44995 2.79048 6.56848 2.5795 6.77946C2.36853 6.99043 2.25 7.27658 2.25 7.57495V15.45C2.25 15.7483 2.36853 16.0345 2.5795 16.2454C2.79048 16.4564 3.07663 16.575 3.375 16.575H14.625C14.9234 16.575 15.2095 16.4564 15.4205 16.2454C15.6315 16.0345 15.75 15.7483 15.75 15.45V7.57495C15.75 7.27658 15.6315 6.99043 15.4205 6.77946C15.2095 6.56848 14.9234 6.44995 14.625 6.44995ZM6.75 4.76245C6.75 4.16571 6.98705 3.59342 7.40901 3.17146C7.83097 2.7495 8.40326 2.51245 9 2.51245C9.59674 2.51245 10.169 2.7495 10.591 3.17146C11.0129 3.59342 11.25 4.16571 11.25 4.76245V6.44995H6.75V4.76245ZM14.625 15.45H3.375V7.57495H14.625V15.45ZM9.84375 11.5125C9.84375 11.6793 9.79426 11.8425 9.70155 11.9812C9.60884 12.12 9.47706 12.2281 9.32289 12.292C9.16871 12.3558 8.99906 12.3725 8.83539 12.34C8.67172 12.3074 8.52138 12.2271 8.40338 12.1091C8.28538 11.9911 8.20502 11.8407 8.17246 11.6771C8.13991 11.5134 8.15662 11.3437 8.22048 11.1896C8.28434 11.0354 8.39248 10.9036 8.53124 10.8109C8.66999 10.7182 8.83312 10.6687 9 10.6687C9.22378 10.6687 9.43839 10.7576 9.59662 10.9158C9.75485 11.0741 9.84375 11.2887 9.84375 11.5125Z" fill="white"/>
                                        </svg>
                                        <span>Create youre PIN</span>
                                    </button>

                                    <div class="bi_switch_block" x-show="pinCodeEnabled">
                                        <div class="bi_switch_title me-2">off</div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheck" @change="togglePincode()" x-model="pinCodeEnabled">
                                        </div>
                                        <div class="bi_switch_title">on</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab_head" x-show="setPincode">
                                <h2 class="tab_title" >Modifier votre mot de PIN</h2>
                                <button class="btn btn-primary pt-1 pb-1" @click.prevent="setPincode = true" >
                                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.625 6.44995H12.375V4.76245C12.375 3.86735 12.0194 3.0089 11.3865 2.37597C10.7536 1.74303 9.89511 1.38745 9 1.38745C8.10489 1.38745 7.24645 1.74303 6.61351 2.37597C5.98058 3.0089 5.625 3.86735 5.625 4.76245V6.44995H3.375C3.07663 6.44995 2.79048 6.56848 2.5795 6.77946C2.36853 6.99043 2.25 7.27658 2.25 7.57495V15.45C2.25 15.7483 2.36853 16.0345 2.5795 16.2454C2.79048 16.4564 3.07663 16.575 3.375 16.575H14.625C14.9234 16.575 15.2095 16.4564 15.4205 16.2454C15.6315 16.0345 15.75 15.7483 15.75 15.45V7.57495C15.75 7.27658 15.6315 6.99043 15.4205 6.77946C15.2095 6.56848 14.9234 6.44995 14.625 6.44995ZM6.75 4.76245C6.75 4.16571 6.98705 3.59342 7.40901 3.17146C7.83097 2.7495 8.40326 2.51245 9 2.51245C9.59674 2.51245 10.169 2.7495 10.591 3.17146C11.0129 3.59342 11.25 4.16571 11.25 4.76245V6.44995H6.75V4.76245ZM14.625 15.45H3.375V7.57495H14.625V15.45ZM9.84375 11.5125C9.84375 11.6793 9.79426 11.8425 9.70155 11.9812C9.60884 12.12 9.47706 12.2281 9.32289 12.292C9.16871 12.3558 8.99906 12.3725 8.83539 12.34C8.67172 12.3074 8.52138 12.2271 8.40338 12.1091C8.28538 11.9911 8.20502 11.8407 8.17246 11.6771C8.13991 11.5134 8.15662 11.3437 8.22048 11.1896C8.28434 11.0354 8.39248 10.9036 8.53124 10.8109C8.66999 10.7182 8.83312 10.6687 9 10.6687C9.22378 10.6687 9.43839 10.7576 9.59662 10.9158C9.75485 11.0741 9.84375 11.2887 9.84375 11.5125Z" fill="white"/>
                                    </svg>
                                    <span>Create youre PIN</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="tab_card">
                        <div class="tab_head" >
                            <h2 class="tab_title">Login history</h2>
                        </div>
                        <div class="table_history__wrapper">
                            <table class="table_history">
                                <template x-for="item in loginHistory" :key="item.id">
                                    <tr>
                                        <td width="50">
                                            <div x-show="item.type == 'desktop'" class="table_history__icon">
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21.75 16.575H21V7.57495C21 6.97821 20.7629 6.40592 20.341 5.98396C19.919 5.562 19.3467 5.32495 18.75 5.32495H5.25C4.65326 5.32495 4.08097 5.562 3.65901 5.98396C3.23705 6.40592 3 6.97821 3 7.57495V16.575H2.25C2.05109 16.575 1.86032 16.654 1.71967 16.7946C1.57902 16.9353 1.5 17.126 1.5 17.325V18.825C1.5 19.4217 1.73705 19.994 2.15901 20.4159C2.58097 20.8379 3.15326 21.075 3.75 21.075H20.25C20.8467 21.075 21.419 20.8379 21.841 20.4159C22.2629 19.994 22.5 19.4217 22.5 18.825V17.325C22.5 17.126 22.421 16.9353 22.2803 16.7946C22.1397 16.654 21.9489 16.575 21.75 16.575ZM4.5 7.57495C4.5 7.37604 4.57902 7.18527 4.71967 7.04462C4.86032 6.90397 5.05109 6.82495 5.25 6.82495H18.75C18.9489 6.82495 19.1397 6.90397 19.2803 7.04462C19.421 7.18527 19.5 7.37604 19.5 7.57495V16.575H4.5V7.57495ZM21 18.825C21 19.0239 20.921 19.2146 20.7803 19.3553C20.6397 19.4959 20.4489 19.575 20.25 19.575H3.75C3.55109 19.575 3.36032 19.4959 3.21967 19.3553C3.07902 19.2146 3 19.0239 3 18.825V18.075H21V18.825ZM14.25 9.07495C14.25 9.27386 14.171 9.46463 14.0303 9.60528C13.8897 9.74593 13.6989 9.82495 13.5 9.82495H10.5C10.3011 9.82495 10.1103 9.74593 9.96967 9.60528C9.82902 9.46463 9.75 9.27386 9.75 9.07495C9.75 8.87604 9.82902 8.68527 9.96967 8.54462C10.1103 8.40397 10.3011 8.32495 10.5 8.32495H13.5C13.6989 8.32495 13.8897 8.40397 14.0303 8.54462C14.171 8.68527 14.25 8.87604 14.25 9.07495Z" fill="black"/>
                                                </svg>
                                            </div>
                                            <div x-show="item.type == 'mobile'" class="table_history__icon">
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.5 2.32495H7.5C6.90326 2.32495 6.33097 2.562 5.90901 2.98396C5.48705 3.40592 5.25 3.97821 5.25 4.57495V21.075C5.25 21.6717 5.48705 22.244 5.90901 22.6659C6.33097 23.0879 6.90326 23.325 7.5 23.325H16.5C17.0967 23.325 17.669 23.0879 18.091 22.6659C18.5129 22.244 18.75 21.6717 18.75 21.075V4.57495C18.75 3.97821 18.5129 3.40592 18.091 2.98396C17.669 2.562 17.0967 2.32495 16.5 2.32495ZM6.75 6.82495H17.25V18.825H6.75V6.82495ZM7.5 3.82495H16.5C16.6989 3.82495 16.8897 3.90397 17.0303 4.04462C17.171 4.18527 17.25 4.37604 17.25 4.57495V5.32495H6.75V4.57495C6.75 4.37604 6.82902 4.18527 6.96967 4.04462C7.11032 3.90397 7.30109 3.82495 7.5 3.82495ZM16.5 21.825H7.5C7.30109 21.825 7.11032 21.7459 6.96967 21.6053C6.82902 21.4646 6.75 21.2739 6.75 21.075V20.325H17.25V21.075C17.25 21.2739 17.171 21.4646 17.0303 21.6053C16.8897 21.7459 16.6989 21.825 16.5 21.825Z" fill="black"/>
                                                </svg>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table_history__value mb-2" x-text="item.device" ></div>
                                            <div class="table_history__value" x-text="item.browser"></div>
                                        </td>
                                        <td>
                                            <div class="table_history__label mb-2">Last login</div>
                                            <div class="table_history__value" x-text="item.last_login"></div>
                                        </td>
                                        <td>
                                            <div class="table_history__label mb-2">Location</div>
                                            <div class="table_history__value" x-text="item.location"></div>
                                        </td>
                                        <td>
                                            <div class="table_history__label mb-2">IP-Address</div>
                                            <div class="table_history__value" x-text="item.ip_address"></div>
                                        </td>
                                    </tr>
                                </template>
                            </table>
                        </div>

                    </div>

                    <div class="modal modal_pincode fade" id="modalPincode" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="p8_logo">
                                    <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.014 30.5001L18.579 22.9651C18.4947 22.7276 18.3377 22.5227 18.1304 22.3794C17.9231 22.2361 17.676 22.1617 17.424 22.1667C17.172 22.1617 16.9249 22.2361 16.7175 22.3794C16.5102 22.5227 16.3533 22.7276 16.269 22.9651L13.834 30.5001M25.5007 22.1667V30.5001M14.7307 28.0001H20.1157" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7.61366 31.9082C7.98866 34.6915 10.2937 36.8732 13.1003 37.0015C15.4603 37.1098 17.8587 37.1665 20.5003 37.1665C23.142 37.1665 25.5403 37.1098 27.9003 36.9998C30.707 36.8732 33.012 34.6915 33.387 31.9082C33.632 30.0915 33.8337 28.2298 33.8337 26.3332C33.8337 24.4365 33.632 22.5748 33.387 20.7582C33.012 17.9748 30.707 15.7932 27.9003 15.6648C25.4353 15.5522 22.9679 15.4972 20.5003 15.4998C17.8587 15.4998 15.4603 15.5565 13.1003 15.6665C10.2937 15.7932 7.98866 17.9748 7.61366 20.7582C7.36699 22.5748 7.16699 24.4365 7.16699 26.3332C7.16699 28.2298 7.36866 30.0915 7.61366 31.9082Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13 15.4999V11.3333C13 9.34413 13.7902 7.43647 15.1967 6.02995C16.6032 4.62343 18.5109 3.83325 20.5 3.83325C22.4891 3.83325 24.3968 4.62343 25.8033 6.02995C27.2098 7.43647 28 9.34413 28 11.3333V15.4999" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="p8_heading">Сreate your PIN</div>
                                <div class="p8_container">
                                    <div class="pin_indicators" :data-digits="pinCode.length">
                                        <div class="pin_indicator"></div>
                                        <div class="pin_indicator"></div>
                                        <div class="pin_indicator"></div>
                                        <div class="pin_indicator"></div>
                                        <div class="pin_indicator"></div>
                                        <div class="pin_indicator"></div>
                                        <div class="pin_indicator"></div>
                                        <div class="pin_indicator"></div>
                                    </div>

                                    <div class="pin_digits">
                                        <div class="pin_digits_row">
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigit(1)">1</button>
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigit(2)">2</button>
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigit(3)">3</button>
                                        </div>
                                        <div class="pin_digits_row">
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigit(4)">4</button>
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigit(5)">5</button>
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigit(6)">6</button>
                                        </div>
                                        <div class="pin_digits_row">
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigit(7)">7</button>
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigit(8)">8</button>
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigit(9)">9</button>
                                        </div>
                                        <div class="pin_digits_row">
                                            <button class="align-items-center pin_digits_btn__cancel"  @click="deleteOneDigit()">
                                                <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.71429 15.6667C6.34127 15.6667 5.99157 15.5827 5.66518 15.4149C5.33879 15.247 5.07302 15.0139 4.86786 14.7155L0 7.83333L4.86786 0.95119C5.07302 0.652778 5.33879 0.419643 5.66518 0.251786C5.99157 0.0839286 6.34127 0 6.71429 0H17.9048C18.5202 0 19.0471 0.219147 19.4854 0.65744C19.9237 1.09573 20.1429 1.62262 20.1429 2.2381V13.4286C20.1429 14.044 19.9237 14.5709 19.4854 15.0092C19.0471 15.4475 18.5202 15.6667 17.9048 15.6667H6.71429ZM6.71429 13.4286H17.9048V2.2381H6.71429L2.74167 7.83333L6.71429 13.4286ZM9.4 12.3095L12.3095 9.4L15.219 12.3095L16.7857 10.7429L13.8762 7.83333L16.7857 4.92381L15.219 3.35714L12.3095 6.26667L9.4 3.35714L7.83333 4.92381L10.7429 7.83333L7.83333 10.7429L9.4 12.3095Z" fill="#000000"/>
                                                </svg>
                                            </button>
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigit(0)">0</button>
                                            <button></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal modal_pincode fade" id="modalPincodeConfirm" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="p8_logo">
                                    <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.014 30.5001L18.579 22.9651C18.4947 22.7276 18.3377 22.5227 18.1304 22.3794C17.9231 22.2361 17.676 22.1617 17.424 22.1667C17.172 22.1617 16.9249 22.2361 16.7175 22.3794C16.5102 22.5227 16.3533 22.7276 16.269 22.9651L13.834 30.5001M25.5007 22.1667V30.5001M14.7307 28.0001H20.1157" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7.61366 31.9082C7.98866 34.6915 10.2937 36.8732 13.1003 37.0015C15.4603 37.1098 17.8587 37.1665 20.5003 37.1665C23.142 37.1665 25.5403 37.1098 27.9003 36.9998C30.707 36.8732 33.012 34.6915 33.387 31.9082C33.632 30.0915 33.8337 28.2298 33.8337 26.3332C33.8337 24.4365 33.632 22.5748 33.387 20.7582C33.012 17.9748 30.707 15.7932 27.9003 15.6648C25.4353 15.5522 22.9679 15.4972 20.5003 15.4998C17.8587 15.4998 15.4603 15.5565 13.1003 15.6665C10.2937 15.7932 7.98866 17.9748 7.61366 20.7582C7.36699 22.5748 7.16699 24.4365 7.16699 26.3332C7.16699 28.2298 7.36866 30.0915 7.61366 31.9082Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13 15.4999V11.3333C13 9.34413 13.7902 7.43647 15.1967 6.02995C16.6032 4.62343 18.5109 3.83325 20.5 3.83325C22.4891 3.83325 24.3968 4.62343 25.8033 6.02995C27.2098 7.43647 28 9.34413 28 11.3333V15.4999" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="p8_heading">Confirm your PIN</div>
                                <div class="p8_container">
                                    <div class="pin_indicators" :class="{'pin_indicators__error' : pinCodeConfirmError}" :data-digits="pinCodeConfirm.length">
                                        <div class="pin_indicator"></div>
                                        <div class="pin_indicator"></div>
                                        <div class="pin_indicator"></div>
                                        <div class="pin_indicator"></div>
                                        <div class="pin_indicator"></div>
                                        <div class="pin_indicator"></div>
                                        <div class="pin_indicator"></div>
                                        <div class="pin_indicator"></div>
                                    </div>
                                    <div x-show="pinCodeConfirmError" class="pin_error">Pins are not the same</div>
                                    <div class="pin_digits">
                                        <div class="pin_digits_row">
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigitConfirm(1)">1</button>
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigitConfirm(2)">2</button>
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigitConfirm(3)">3</button>
                                        </div>
                                        <div class="pin_digits_row">
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigitConfirm(4)">4</button>
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigitConfirm(5)">5</button>
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigitConfirm(6)">6</button>
                                        </div>
                                        <div class="pin_digits_row">
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigitConfirm(7)">7</button>
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigitConfirm(8)">8</button>
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigitConfirm(9)">9</button>
                                        </div>
                                        <div class="pin_digits_row">
                                            <button class="align-items-center pin_digits_btn__cancel"  @click="deleteOneDigitConfirm()">
                                                <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.71429 15.6667C6.34127 15.6667 5.99157 15.5827 5.66518 15.4149C5.33879 15.247 5.07302 15.0139 4.86786 14.7155L0 7.83333L4.86786 0.95119C5.07302 0.652778 5.33879 0.419643 5.66518 0.251786C5.99157 0.0839286 6.34127 0 6.71429 0H17.9048C18.5202 0 19.0471 0.219147 19.4854 0.65744C19.9237 1.09573 20.1429 1.62262 20.1429 2.2381V13.4286C20.1429 14.044 19.9237 14.5709 19.4854 15.0092C19.0471 15.4475 18.5202 15.6667 17.9048 15.6667H6.71429ZM6.71429 13.4286H17.9048V2.2381H6.71429L2.74167 7.83333L6.71429 13.4286ZM9.4 12.3095L12.3095 9.4L15.219 12.3095L16.7857 10.7429L13.8762 7.83333L16.7857 4.92381L15.219 3.35714L12.3095 6.26667L9.4 3.35714L7.83333 4.92381L10.7429 7.83333L7.83333 10.7429L9.4 12.3095Z" fill="#000000"/>
                                                </svg>
                                            </button>
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigitConfirm(0)">0</button>
                                            <button></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal modal_pincode fade" id="modalPincodeSuccess" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="p8_logo__success">
                                    <div class="w-100">
                                        <div class="p8_logo">
                                            <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21.014 30.5001L18.579 22.9651C18.4947 22.7276 18.3377 22.5227 18.1304 22.3794C17.9231 22.2361 17.676 22.1617 17.424 22.1667C17.172 22.1617 16.9249 22.2361 16.7175 22.3794C16.5102 22.5227 16.3533 22.7276 16.269 22.9651L13.834 30.5001M25.5007 22.1667V30.5001M14.7307 28.0001H20.1157" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M7.61366 31.9082C7.98866 34.6915 10.2937 36.8732 13.1003 37.0015C15.4603 37.1098 17.8587 37.1665 20.5003 37.1665C23.142 37.1665 25.5403 37.1098 27.9003 36.9998C30.707 36.8732 33.012 34.6915 33.387 31.9082C33.632 30.0915 33.8337 28.2298 33.8337 26.3332C33.8337 24.4365 33.632 22.5748 33.387 20.7582C33.012 17.9748 30.707 15.7932 27.9003 15.6648C25.4353 15.5522 22.9679 15.4972 20.5003 15.4998C17.8587 15.4998 15.4603 15.5565 13.1003 15.6665C10.2937 15.7932 7.98866 17.9748 7.61366 20.7582C7.36699 22.5748 7.16699 24.4365 7.16699 26.3332C7.16699 28.2298 7.36866 30.0915 7.61366 31.9082Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M13 15.4999V11.3333C13 9.34413 13.7902 7.43647 15.1967 6.02995C16.6032 4.62343 18.5109 3.83325 20.5 3.83325C22.4891 3.83325 24.3968 4.62343 25.8033 6.02995C27.2098 7.43647 28 9.34413 28 11.3333V15.4999" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <div class="p8_heading_success">Your PIN is created!</div>
                                        <a href="#" data-bs-dismiss="modal" class="p8_btn_success">Got It</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal modal_pincode fade" id="modalPincodeDisable" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="p8_logo">
                                    <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.014 30.5001L18.579 22.9651C18.4947 22.7276 18.3377 22.5227 18.1304 22.3794C17.9231 22.2361 17.676 22.1617 17.424 22.1667C17.172 22.1617 16.9249 22.2361 16.7175 22.3794C16.5102 22.5227 16.3533 22.7276 16.269 22.9651L13.834 30.5001M25.5007 22.1667V30.5001M14.7307 28.0001H20.1157" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7.61366 31.9082C7.98866 34.6915 10.2937 36.8732 13.1003 37.0015C15.4603 37.1098 17.8587 37.1665 20.5003 37.1665C23.142 37.1665 25.5403 37.1098 27.9003 36.9998C30.707 36.8732 33.012 34.6915 33.387 31.9082C33.632 30.0915 33.8337 28.2298 33.8337 26.3332C33.8337 24.4365 33.632 22.5748 33.387 20.7582C33.012 17.9748 30.707 15.7932 27.9003 15.6648C25.4353 15.5522 22.9679 15.4972 20.5003 15.4998C17.8587 15.4998 15.4603 15.5565 13.1003 15.6665C10.2937 15.7932 7.98866 17.9748 7.61366 20.7582C7.36699 22.5748 7.16699 24.4365 7.16699 26.3332C7.16699 28.2298 7.36866 30.0915 7.61366 31.9082Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13 15.4999V11.3333C13 9.34413 13.7902 7.43647 15.1967 6.02995C16.6032 4.62343 18.5109 3.83325 20.5 3.83325C22.4891 3.83325 24.3968 4.62343 25.8033 6.02995C27.2098 7.43647 28 9.34413 28 11.3333V15.4999" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="p8_heading">Confirm your PIN</div>
                                <div class="p8_container">
                                    <div class="pin_indicators" :class="{'pin_indicators__error' : pinCodeDisableError}" :data-digits="pinCodeDisable.length">
                                        <div class="pin_indicator"></div>
                                        <div class="pin_indicator"></div>
                                        <div class="pin_indicator"></div>
                                        <div class="pin_indicator"></div>
                                        <div class="pin_indicator"></div>
                                        <div class="pin_indicator"></div>
                                        <div class="pin_indicator"></div>
                                        <div class="pin_indicator"></div>
                                    </div>
                                    <div x-show="pinCodeDisableError" class="pin_error">Pins are not the same</div>
                                    <div class="pin_digits">
                                        <div class="pin_digits_row">
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigitDisable(1)">1</button>
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigitDisable(2)">2</button>
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigitDisable(3)">3</button>
                                        </div>
                                        <div class="pin_digits_row">
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigitDisable(4)">4</button>
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigitDisable(5)">5</button>
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigitDisable(6)">6</button>
                                        </div>
                                        <div class="pin_digits_row">
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigitDisable(7)">7</button>
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigitDisable(8)">8</button>
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigitDisable(9)">9</button>
                                        </div>
                                        <div class="pin_digits_row">
                                            <button class="align-items-center pin_digits_btn__cancel"  @click="deleteOneDigitDisable()">
                                                <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.71429 15.6667C6.34127 15.6667 5.99157 15.5827 5.66518 15.4149C5.33879 15.247 5.07302 15.0139 4.86786 14.7155L0 7.83333L4.86786 0.95119C5.07302 0.652778 5.33879 0.419643 5.66518 0.251786C5.99157 0.0839286 6.34127 0 6.71429 0H17.9048C18.5202 0 19.0471 0.219147 19.4854 0.65744C19.9237 1.09573 20.1429 1.62262 20.1429 2.2381V13.4286C20.1429 14.044 19.9237 14.5709 19.4854 15.0092C19.0471 15.4475 18.5202 15.6667 17.9048 15.6667H6.71429ZM6.71429 13.4286H17.9048V2.2381H6.71429L2.74167 7.83333L6.71429 13.4286ZM9.4 12.3095L12.3095 9.4L15.219 12.3095L16.7857 10.7429L13.8762 7.83333L16.7857 4.92381L15.219 3.35714L12.3095 6.26667L9.4 3.35714L7.83333 4.92381L10.7429 7.83333L7.83333 10.7429L9.4 12.3095Z" fill="#000000"/>
                                                </svg>
                                            </button>
                                            <button class="pin_digits_btn js_pin_button" @click="appendDigitDisable(0)">0</button>
                                            <button></button>
                                        </div>
                                    </div>
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

<?php include_once('_footer.php'); ?>

<script type="text/javascript" src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="./assets/js/app.js"></script>


<script>
    function accountVerification(){
        return {
            accountVerificationStatus: 'not verified', // not verified | in review | verified | declined
            status: 1, // 1 | 2 | 3 | 4
            identityFrontPage: '',
            identityBackPage: '',
            get isStep1Valid() {
                return this.identityFrontPage.trim() !== '' && this.identityBackPage.trim() !== '';
            },
            confirmStep1: function (){
                this.status = 2
            },

            docProofOfAddress: '',
            docSupportingDocuments: '',
            get isStep2Valid() {
                return this.docProofOfAddress.trim() !== '' && this.docSupportingDocuments.trim() !== '';
            },
            confirmStep2: function (){
                this.status = 3
            },

            selfie: '',
            get isStep3Valid() {
                return this.selfie.trim() !== '';
            },
            confirmStep3: function (){
                this.status = 4
                this.accountVerificationStatus = 'in review'
            },

        }
    }

    function fileUploader() {
        return {
            files: [],
            dragover: false,
            allowedTypes: ['image/png', 'image/jpeg', 'image/svg+xml', 'application/pdf'],
            maxSize: 10 * 1024 * 1024, // 10 MB

            handleDrop(e) {
                this.dragover = false;
                this.addFiles(e.dataTransfer.files);
                this.uploadAll()
            },

            previewFiles(e) {
                this.addFiles(e.target.files);
                e.target.value = "";
            },

            addFiles(fileList) {
                for (let file of fileList) {
                    let error = null;

                    // проверка типа
                    if (!this.allowedTypes.includes(file.type)) {
                        error = "Недопустимый формат (разрешены PNG, JPG, SVG, PDF)";
                    }

                    // проверка размера
                    if (file.size > this.maxSize) {
                        error = "Файл превышает 10 МБ";
                    }

                    this.files.push({
                        file,
                        name: file.name,
                        size: file.size,
                        type: file.type,
                        url: error ? null : (file.type.startsWith('image/') ? URL.createObjectURL(file) : null),
                        progress: 0,
                        error
                    });
                }
            },

            removeFile(index) {
                if (this.files[index].url) {
                    URL.revokeObjectURL(this.files[index].url);
                }
                this.files.splice(index, 1);
            },

            async uploadAll() {
                for (let f of this.files) {
                    if (!f.error) {
                        await this.fakeUpload(f);
                    }
                }
            },

            fakeUpload(file) {
                return new Promise(resolve => {
                    file.progress = 0;
                    let interval = setInterval(() => {
                        if (file.progress >= 100) {
                            clearInterval(interval);
                            resolve();
                        } else {
                            file.progress += 15;
                        }
                    }, 200);
                });
            },

            formatSize(size) {
                if (size < 1024) return size + ' B';
                else if (size < 1024 * 1024) return (size / 1024).toFixed(1) + ' KB';
                else return (size / (1024 * 1024)).toFixed(1) + ' MB';
            }
        }
    }

    function profileData(){
        return {
            editProfileData: false,
            user: {
                name: 'George',
                lastname: 'Clooney',
                email: 'v1@moekoe.com',
                email2: 'v2@moekoe.com',
                phone: '1111',
                phone1: '2222',
                phone2: '3333',
                address: '4444',
                country: 'France',
                city: 'Paris',
                zip: '75645',
                birthday: '22/12/2016'
            },
            saveProfileData: function() {
                this.editProfileData = false

                console.log('save profile')
            }
        }
    }

    function bankInformation(){
        return {
            bankInformationList: [
                {
                    id: 1,
                    editBankInformationData: false,
                    bank_name: 'Bank name',
                    iban: '123123',
                    swift: '123',
                    wallet: 'qwe3e32eqwe23eqee23e23e23e2qwqdq',
                    wallet_name: 'qweqwe',
                    network: 'Bitcoin'
                },
                {
                    id: 2,
                    editBankInformationData: false,
                    bank_name: 'Bank name 2',
                    iban: '5435435435',
                    swift: '123',
                    wallet: 'jgj76jjjjjjjjjjtjj',
                    wallet_name: 'kjjhkhjkhj',
                    network: 'Solana'
                }
            ],
            saveBankInformation: function(bankInfo) {
                bankInfo.editBankInformationData = false

                console.log('save', bankInfo)
            },
            confirmDelete: function(id){
                showModal(id)
            },
            deleteBankInformation: function(id){
                this.bankInformationList.map((item, index) => {
                    if(id === item.id){
                        this.bankInformationList.splice(index, 1);
                    }
                })

                hideModal('removeBankInfo'+id)
            },
            addBankInformation: function() {
                const id = this.bankInformationList.length + 1;
                this.bankInformationList.push({
                    id: id,
                    editBankInformationData: true,
                    bank_name: '',
                    iban: '',
                    swift: '',
                    wallet: '',
                    wallet_name: '',
                    network: ''
                });
            }
        }
    }

    function beneficiares(){
        return {
            beneficiaresList: [
                {
                    id: 1,
                    name: '111',
                    lastname: '222',
                    phone: '12312312321',
                    address: 'France',
                    birthday: '123123'
                },
                {
                    id: 2,
                    name: '3333',
                    lastname: '4444',
                    phone: '12312312321',
                    address: 'Italy',
                    birthday: '534543553'
                }
            ],
            saveBeneficiares: function(item) {
                item.editBeneficiaresData = false

                console.log('save', item)
            },
            confirmDelete: function(id){
                showModal(id)
            },
            deleteBeneficiares: function(id){
                this.beneficiaresList.map((item, index) => {
                    if(id === item.id){
                        this.beneficiaresList.splice(index, 1);
                    }
                })

                hideModal('removeBeneficiares'+id)
            },
            addBeneficiares: function() {
                const id = this.beneficiaresList.length + 1;
                this.beneficiaresList.push({
                    id: id,
                    editBeneficiaresData: true,
                    bank_name: '',
                    iban: '',
                    swift: '',
                    wallet: '',
                    wallet_name: '',
                    network: ''
                });
            }
        }
    }

    function securityHub(){
        return {
            //change password
            changePassword: false,
            old_password: '',
            new_password: '',
            new_password2: '',
            errors: {},
            saveNewPassword: function() {
                this.errors = {};
                this.successMessage = '';

                if (this.old_password.length < 8) {
                    this.errors.old_password = 'Password is required.';
                }

                if (this.new_password.length < 8) {
                    this.errors.new_password = 'Password must be at least 8 characters.';
                }

                if (this.new_password != this.new_password2) {
                    this.errors.new_password2 = 'Passwords do not match.';
                }

                if (Object.keys(this.errors).length === 0) {
                    this.changePassword = false

                    console.log('save password')
                }
            },

            //disable pincode
            pinCodeEnabled: true,
            togglePincode: function() {
                this.pinCodeEnabled = true
                showModal('modalPincodeDisable')
            },

            pinCodeCurrent: '86427575',
            pinCodeDisable: '',
            pinCodeDisableError: false,
            appendDigitDisable: function(num){
                this.pinCodeDisable += num

                if (this.pinCodeDisable.length === 8) {
                    if(this.pinCodeDisable !== this.pinCodeCurrent){
                        this.pinCodeDisableError = true
                    }else{
                        hideModal('modalPincodeDisable')
                        this.pinCodeEnabled = false
                    }
                }
            },
            deleteOneDigitDisable: function() {
                this.pinCodeDisableError = false
                if(this.pinCodeDisable.length > 0){
                    this.pinCodeDisable = this.pinCodeDisable.slice(0, -1);
                }
            },

            //set pincode
            setPincode: false,
            pinCode: '',
            showPincodeModal: function (){
                this.pinCode = ''
                this.pinCodeConfirm = ''
                showModal('modalPincode')
            },

            appendDigit: function(num){
                this.pinCode += num

                if (this.pinCode.length === 8) {
                    hideModal('modalPincode')
                    showModal('modalPincodeConfirm')
                    this.pinCodeConfirmError = false
                }
            },
            deleteOneDigit: function() {
                if(this.pinCode.length > 0){
                    this.pinCode = this.pinCode.slice(0, -1);
                }
            },

            //confirm pincode
            pinCodeConfirm: '',
            pinCodeConfirmError: false,
            appendDigitConfirm: function(num){
                this.pinCodeConfirm += num

                if (this.pinCodeConfirm.length === 8) {
                    if(this.pinCodeConfirm !== this.pinCode){
                        this.pinCodeConfirmError = true
                    }else{
                        hideModal('modalPincodeConfirm')
                        showModal('modalPincodeSuccess')
                    }
                }
            },
            deleteOneDigitConfirm: function() {
                this.pinCodeConfirmError = false
                if(this.pinCodeConfirm.length > 0){
                    this.pinCodeConfirm = this.pinCodeConfirm.slice(0, -1);
                }
            },

            //login history
            loginHistory: [
                {
                    id: 1,
                    type: 'desktop',
                    device: 'Windows',
                    browser: 'Chrome V123.0.0',
                    last_login: '2025-08-13 14:55:05',
                    location: 'France, Paris',
                    ip_address: '85.116.94.62'
                },
                {
                    id: 2,
                    type: 'desktop',
                    device: 'Windows',
                    browser: 'Chrome V123.0.0',
                    last_login: '2025-08-13 14:55:05',
                    location: 'France, Paris',
                    ip_address: '85.116.94.62'
                },
                {
                    id: 3,
                    type: 'mobile',
                    device: 'Android',
                    browser: 'Mobile Browser',
                    last_login: '2025-08-13 14:55:05',
                    location: 'France, Paris',
                    ip_address: '85.116.94.62'
                }
            ]
        }
    }
</script>


<script type="text/javascript" src="./assets/js/alpinejs.min.js"></script>

</body>
</html>