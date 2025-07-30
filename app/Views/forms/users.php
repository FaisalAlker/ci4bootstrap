<?= $this->extend('layout/main') ?> 

<?= $this->section('content') ?>
<div class="m-4">
<div>Get User Data by ID</div>
<div><?= var_dump($users) ?></div>
    <form method="POST" action="update_user">
        <table>
            <tbody>
                <tr>
                    <td>
                        <label for="user_id">UID</label>
                    </td>
                    <td>
                        <input type="text" value="<?=@$users['id']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">EMAIL</label>
                    </td>
                    <td>
                        <input type="email" value="<?=@$users['email']?>"> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="avatar">Avatar</label>
                    </td>
                    <td>
                        <input type="text" value="<?=@$users['avatar']?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" style="width: 100%;">Submit</Button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
    
<?= $this->endSection() ?>
