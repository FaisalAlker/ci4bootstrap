<?= $this->extend('layout/main') ?> 

<?= $this->section('content') ?>
    <div>Contoh User Data</div>
    <?php foreach($users as $user){ ?>
        <ul>
            <li style="font-size: 24px;">ID: <?= $user['id'] ?> <?= $user['email'] ?></li>
        </ul>
    <?php } ?>
<?= $this->endSection() ?>
