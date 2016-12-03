<div class="box">
    <h1><?= $language->headline ?></h1>
</div>

<form action="index.php" method="post">
    <div class="box">
        <div>
            <input name="lang" type="radio" value="german" checked="checked" id="german">
            <label for="german">deutsch</label>
        </div>
        <div>
            <input name="lang" type="radio" value="english" id="english">
            <label for="english">english</label>
        </div>
    </div>
    <button class="btn bottom"><?= $language->button ?></button>
</form>
