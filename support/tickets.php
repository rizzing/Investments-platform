<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1" name="viewport">

    <title>Tickets | CC3</title>
    <meta content="CC3" name="description">

    <?php include('../_head.php') ?>
</head>
<body class="<?= htmlspecialchars($theme) ?> <?= htmlspecialchars($menuType) ?>">

<div class="full_page <?php if($isVerticalPage){ ?> full_page__vertical <?php } ?>">

    <?php
    $currentPage = 'support';
    if($isVerticalPage){
        include('../_header_v.php');
    } else {
        include('../_header.php');
    }?>

    <main class="main_page">
        <div class="container_1200">
            <div class="sup_head">
                <div class="sup_left">
                    <h1 class="sup__title">Conversation History</h1>
                    <div class="sup__text">
                        View all your past conversations with your investment advisor
                    </div>
                </div>
                <div class="sup_right">
                    <a href="/cc3/support/create-ticket.php" class="btn btn-primary" >
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.5 10.825C17.5 10.9907 17.4342 11.1497 17.3169 11.2669C17.1997 11.3841 17.0408 11.45 16.875 11.45H10.625V17.7C10.625 17.8657 10.5592 18.0247 10.4419 18.1419C10.3247 18.2591 10.1658 18.325 10 18.325C9.83424 18.325 9.67527 18.2591 9.55806 18.1419C9.44085 18.0247 9.375 17.8657 9.375 17.7V11.45H3.125C2.95924 11.45 2.80027 11.3841 2.68306 11.2669C2.56585 11.1497 2.5 10.9907 2.5 10.825C2.5 10.6592 2.56585 10.5002 2.68306 10.383C2.80027 10.2658 2.95924 10.2 3.125 10.2H9.375V3.94995C9.375 3.78419 9.44085 3.62522 9.55806 3.50801C9.67527 3.3908 9.83424 3.32495 10 3.32495C10.1658 3.32495 10.3247 3.3908 10.4419 3.50801C10.5592 3.62522 10.625 3.78419 10.625 3.94995V10.2H16.875C17.0408 10.2 17.1997 10.2658 17.3169 10.383C17.4342 10.5002 17.5 10.6592 17.5 10.825Z" fill="white"/>
                        </svg>
                        <span>News Message</span>
                    </a>
                </div>
            </div>
            <div class="sup_stat">
                <div class="sup_stat__item">
                    <div class="sup_stat__icon">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.5 3H21.5C21.78 3 22.0167 3.09667 22.21 3.29C22.4033 3.48333 22.5 3.72 22.5 4V20C22.5 20.28 22.4033 20.5167 22.21 20.71C22.0167 20.9033 21.78 21 21.5 21H3.5C3.22 21 2.98333 20.9033 2.79 20.71C2.59667 20.5167 2.5 20.28 2.5 20V4C2.5 3.72 2.59667 3.48333 2.79 3.29C2.98333 3.09667 3.22 3 3.5 3ZM20.5 7.24L12.58 14.34L4.5 7.22V19H20.5V7.24ZM5.02 5L12.56 11.66L20 5H5.02Z" fill="white"/>
                        </svg>
                    </div>
                    <div class="sup_stat__info">
                        <div class="sup_stat__value">8</div>
                        <div class="sup_stat__label">Total Messages</div>
                    </div>
                </div>
                <div class="sup_stat__item">
                    <div class="sup_stat__icon sup_stat__icon__open">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.5 22C11.14 22 9.84 21.74 8.6 21.22C7.41333 20.7133 6.35667 19.9967 5.43 19.07C4.50333 18.1433 3.78667 17.0867 3.28 15.9C2.76 14.66 2.5 13.36 2.5 12C2.5 10.64 2.76 9.34 3.28 8.1C3.78667 6.91333 4.50333 5.85667 5.43 4.93C6.35667 4.00333 7.41333 3.28667 8.6 2.78C9.84 2.26 11.14 2 12.5 2C13.86 2 15.16 2.26 16.4 2.78C17.5867 3.28667 18.6433 4.00333 19.57 4.93C20.4967 5.85667 21.2133 6.91333 21.72 8.1C22.24 9.34 22.5 10.64 22.5 12C22.5 13.36 22.24 14.66 21.72 15.9C21.2133 17.0867 20.4967 18.1433 19.57 19.07C18.6433 19.9967 17.5867 20.7133 16.4 21.22C15.16 21.74 13.86 22 12.5 22ZM12.5 20C13.9533 20 15.3 19.6333 16.54 18.9C17.74 18.1933 18.6933 17.24 19.4 16.04C20.1333 14.8 20.5 13.4533 20.5 12C20.5 10.5467 20.1333 9.2 19.4 7.96C18.6933 6.76 17.74 5.80667 16.54 5.1C15.3 4.36667 13.9533 4 12.5 4C11.0467 4 9.7 4.36667 8.46 5.1C7.26 5.80667 6.30667 6.76 5.6 7.96C4.86667 9.2 4.5 10.5467 4.5 12C4.5 13.4533 4.86667 14.8 5.6 16.04C6.30667 17.24 7.26 18.1933 8.46 18.9C9.7 19.6333 11.0467 20 12.5 20ZM11.5 16L7.26 11.76L8.68 10.34L11.5 13.18L17.16 7.52L18.58 8.92L11.5 16Z" fill="white"/>
                        </svg>
                    </div>
                    <div class="sup_stat__info">
                        <div class="sup_stat__value">3</div>
                        <div class="sup_stat__label">Open Conversations</div>
                    </div>
                </div>
                <div class="sup_stat__item">
                    <div class="sup_stat__icon">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.96 18.24L2.5 21.74V3.23999C2.5 2.97332 2.59667 2.73999 2.79 2.53999C2.98333 2.33999 3.22 2.23999 3.5 2.23999H21.5C21.78 2.23999 22.0167 2.33999 22.21 2.53999C22.4033 2.73999 22.5 2.97332 22.5 3.23999V17.24C22.5 17.52 22.4033 17.76 22.21 17.96C22.0167 18.16 21.78 18.2533 21.5 18.24H6.96ZM6.26 16.24H20.5V4.23999H4.5V17.64L6.26 16.24ZM11.8 11.38L16.04 7.11999L17.44 8.53999L11.8 14.2L7.9 10.32L9.32 8.89999L11.8 11.38Z" fill="white"/>
                        </svg>
                    </div>
                    <div class="sup_stat__info">
                        <div class="sup_stat__value">5</div>
                        <div class="sup_stat__label">Closed Conversations</div>
                    </div>
                </div>
            </div>
            <div class="sup_table">
                <table class="sup_table__table" >
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Subject</th>
                        <th style="text-align: center">Status</th>
                        <th>Last Updated</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="sup_table__id">#111827</td>
                            <td>Test subject</td>
                            <td align="center"><div class="sup_status sup_status__closed">Fermé</div></td>
                            <td>2023-08-22 11:13:12</td>
                            <td>
                                <a class="sup_table__link" href="/cc3/support/view-ticket.php">View &#8594;</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="sup_table__id">#111827</td>
                            <td>Test subject</td>
                            <td align="center"><div class="sup_status sup_status__open">Ouvert</div></td>
                            <td>2023-08-22 11:13:12</td>
                            <td>
                                <a class="sup_table__link" href="/cc3/support/view-ticket.php">View &#8594;</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="sup_table__id">#111827</td>
                            <td>Test subject</td>
                            <td align="center"><div class="sup_status sup_status__answered">Répondu</div></td>
                            <td>2023-08-22 11:13:12</td>
                            <td>
                                <a class="sup_table__link" href="/cc3/support/view-ticket.php">View &#8594;</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="sup_table__id">#111827</td>
                            <td>Test subject</td>
                            <td align="center"><div class="sup_status sup_status__hold">En attente</div></td>
                            <td>2023-08-22 11:13:12</td>
                            <td>
                                <a class="sup_table__link" href="/cc3/support/view-ticket.php">View &#8594;</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" colspan="5">
                                Aucun résultat
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

</div>



<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../assets/js/app.js"></script>

<script>

</script>


<script type="text/javascript" src="../assets/js/alpinejs.min.js"></script>


</body>
</html>