<?php
session_start();
ob_start(); ?>
            <?php if(!empty($_SESSION['message']) ):  ?>
         <div id="alert" class="alert-success" style="height: 3.5em; display: flex; justify-content: space-between;" > 
            <div class="alert " role="alert">
               <?= 
               $_SESSION['message'] 
                ?>
               
            </div>
            <svg style="padding:12px ;" id="close_btn" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
  </svg>
         </div>
            <?php session_destroy();  endif;  ?>
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
                            <span>Add New Team</span></a>

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
                                <a href="team/view/<?= $res->getId() ?>" class="view" title="View"
                                    data-toggle="tooltip"><i class="material-icons">&#xE417;</i>view</a>
                                <a href="team/edit/<?= $res->getId() ?>" class="edit" title="Edit"
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

<script>
    const btn = document.getElementById("close_btn");
    const alert = document.getElementById("alert");

    btn.addEventListener('click', () => {
        alert.style.display = 'none';
    });
</script>


<?php $body = ob_get_clean(); ?>

