<?= $this->extend('layout/main') ?> 

<?= $this->section('content') ?>
    <?= session()->get('email'); ?>
    <div>Welcome Admin Dashboard</div>
<?= $this->endSection() ?>
