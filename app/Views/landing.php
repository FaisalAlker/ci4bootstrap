<?= $this->extend('layout/main') ?> 

<?= $this->section('content') ?>
    <div>Contoh Content</div>
    <div>
        <button 
        onclick="window.location.href='/login'">Login</button>
    </div>
<?= $this->endSection() ?>
