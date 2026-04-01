<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1" name="viewport">

    <title>Dashboard | CC3</title>
    <meta content="CC3" name="description">

    <?php include('_head.php') ?>
</head>
<body class="<?= htmlspecialchars($theme) ?> <?= htmlspecialchars($menuType) ?>">

<div class="full_page <?php if($isVerticalPage){ ?> full_page__vertical <?php } ?>">

    <?php
    $currentPage = 'dashboard';
    if($isVerticalPage){
        include('_header_v.php');
    } else {
        include('_header.php');
    }?>

    <main class="main_page">

    </main>

</div>



<script type="text/javascript" src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="./assets/js/app.js"></script>

<script>

</script>


<script type="text/javascript" src="./assets/js/alpinejs.min.js"></script>


</body>
</html>