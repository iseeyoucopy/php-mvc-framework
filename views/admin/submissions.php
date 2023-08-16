<?php

/** @var $submissions View */
use iseeyoucopy\phpmvc\View;

?>
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            Contact Submissions Dashboard
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($submissions as $submission): ?>
                    <tr>
                        <td><?= htmlspecialchars($submission['name']) ?></td>
                        <td><?= htmlspecialchars($submission['email']) ?></td>
                        <td><?= htmlspecialchars($submission['subject']) ?></td>
                        <td><?= htmlspecialchars($submission['message']) ?></td>
                        <td><?= htmlspecialchars($submission['submission_date']) ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
