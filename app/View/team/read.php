

<?php  ob_start();  ?>

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2><b><?= $title ?></b></h2>
                    </div>
                     
                </div>
            </div>
<table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
               
<tbody>


 <tr>
    <th>Name</th>
    <td><?= $result->getName() ?></td>
    <th>COUNTRY</th>
    <td><?= $result->getCountry() ?></td>
  </tr>
  <tr>
    <th>DESCRIPTION</th>
    <td><?=$result->getDescription()?></td>
    <th>CREATED DATE</th>
    <td><?= $result->getCreatedAt()?></td>
  </tr>
  
   
</tbody>
</table>
       
        </div>
    </div>
</div>   



<?php $body=ob_get_clean(); ?>