<?php

/** @var $this View */
/** @var $user User */

use iseeyoucopy\phpmvc\models\User;
use iseeyoucopy\phpmvc\View;

?>
<div class="panel-heading">
    <div class="row">
        <div class="col-md-10">
            <h3 class="panel-title"></h3>
        </div>
        <div class="col-md-2" align="right">
            <button type="button" name="add" id="addUser" class="btn btn-success btn-xs">Add</button>
        </div>
    </div>
</div>
<table id="userList" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Role</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Total Users</td>
        <td><?php $user = '';
            echo $user->totalUsers(""); ?></td>
        <!-- Repeat similar rows for other status categories -->
    </tr>
    </tbody>
</table>
