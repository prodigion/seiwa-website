<?php
$title = 'Join';
include('_header.php');
include('_parsedown.php');
?>

<div class="main">
    <h1>Join SEIWA</h1>

    <p>Are you interested in your Wiki becoming a member of the Square Enix Independent Wiki Alliance? Check out these following guidelines to see if you should apply for membership:</p>

    <h1>Member criteria</h1>

    <?php
        $html = file_get_contents('https://raw.githubusercontent.com/seiwanetwork/seiwa-docs/main/criteria-members.md');
        $Parsedown = new Parsedown();
        echo $Parsedown->text($html);
    ?>

    <p>Please note that these guidelines are subject to change without notice. If you are interested in joining or affiliating with SEIWA, please <a href="https://discord.gg/tAHWTS8">contact us on discord</a>!</p>
</div>

<?php
include('_sidebar.php');
include('_footer.php');
?>
