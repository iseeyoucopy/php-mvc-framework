<?php
/** @var $this View */
/** @var $users User */

use iseeyoucopy\phpmvc\models\User;
use iseeyoucopy\phpmvc\View;

$this->title = 'Users list';


?>

<h1>Users List</h1>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Name</th>
        <th>Username</th>
        <th>Status</th>
        <th>Created At</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['firstname'] . $user['lastname'] ?></td>
            <td><?= $user['ip_address'] ?></td>
            <td><?= $user['user_agent'] ?></td>

            <td>
                <a href="/user_edit/<?= $user['id'] ?>"><i class="fa fa-pencil"></i></a>
                <form action="/user_delete" method="POST" style="display:inline;">
                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                    <button type="submit" style="background:none;border:none;padding:0;"><i class="fa fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>