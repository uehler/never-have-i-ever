<div class="box">
    <h1><?= $game->neverHaveIEver ?></h1>
    <h3><?= $neverHaveIEver ?></h3>
    <p><?php echo($countDone + 1); ?>/<?= $countAll ?></p>
</div>
<div class="bottom">
    <a href="index.php" class="btn"><?= $game->next ?></a>
    <a href="index.php?lang=" class="btn"><?= $game->change ?></a>
    <a href="index.php?reset=true" class="btn"><?= $game->reset ?></a>
</div>