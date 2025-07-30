<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<h1>Sorting & Filtering</h1>

<form method="get" action="sorting">
    <input type="text" name="search" placeholder="Cari email..." value="<?= esc($_GET['search'] ?? '') ?>" />
    <select name="sort">
        <option value="id">ID</option>
        <option value="email">Email</option>
    </select>
    <select name="order">
        <option value="asc">ASC</option>
        <option value="desc">DESC</option>
    </select>
    <button type="submit">Terapkan</button>
</form>

<table class="table table-bordered" border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= esc($user['id']) ?></td>
                <td><?= esc($user['email']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection() ?>