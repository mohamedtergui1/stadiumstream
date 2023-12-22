<?php
ob_start(); ?>

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2><b>
                                <?= $title ?>
                            </b></h2>
                    </div>
                    <div class="col-sm-7" align="right">
                        <a href="team/addteam/" class="btn btn-secondary"><i class="material-icons">&#xE147;</i>
                            <span>Add New User</span></a>

                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>

                        <th>Name</th>
                        <th>Contry</th>
                        <th>Description</th>
                        <th>Created Date</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($result as $res): ?>

                        <tr>
                            <td><?= $res->getName() ?></td>
                            <td><?= $res->getCountry() ?></td>
                            <td><?= $res->getDescription() ?></td>
                            <td><?= $res->getCreatedAt() ?></td>

                            <td>
                                <a href="?action=read&viewid=<?= $res->getId() ?>" class="view" title="View"
                                    data-toggle="tooltip"><i class="material-icons">&#xE417;</i>veiw</a>
                                <a href="edit.php?editid=<?= $res->getId() ?>" class="edit" title="Edit"
                                    data-toggle="tooltip"><i class="material-icons">&#xE254;</i>edit</a>
                                <a href="team/destroy/<?= $res->getId() ?>" class="delete" title="Delete"
                                    data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');"><i
                                        class="material-icons">&#xE872;</i>delete</a>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                    <!-- If no records found -->
                    <?php if (count($result) == 0): ?>
                        <tr>
                            <th style="text-align:center; color:red;" colspan="6">No Record Found</th>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<!-- Place the first <script> tag in your HTML's <head> -->


<?php $body = ob_get_clean(); ?>

<!-- include_once '../app/View/include/layout.php'; -->