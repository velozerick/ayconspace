<?php require('encabezado.php')   ;?>

    <div class="databases-content px-3 pt-4">
        <div class="card">
            <div class="card-header">
        <h3 class="card-title">Shipping</h3>
        </div>
        <div class="card-body">
        <?php if (session()->has('message')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('message') ?>
    </div>
<?php endif ?>
<table id="tablaShipping" class="table table-responsive">
<thead class="thead  table-light">
    <tr>
        <th>ID</th>
        <th>Date</th>
        <th>W. Order</th>
        <th>Serie</th>
        <th>Customer</th>
        <th>Surface Prep</th>
        <th>Qty Defect</th>
        <th>Work Time</th>
        <th>Num. Leader</th>
        <th>Leak Test</th>
        <th>Location</th>
        <th>Defect</th>
        <th>Qty</th>
        <th>Status</th>
        <th>Inspector</th>
        <th>Week</th>
        <th>Actions</th>
        </tr>
</thead>
<tbody class="table-group-divider">
    <?php  foreach  ($shipping as $ship): ?> 
    <tr>
        <td><?=$ship['id'] ?></td>
        <td><?=$ship['date'] ?></td>
        <td><?=$ship['w_order'] ?></td>
        <td><?=$ship['serie'] ?></td>
        <td><?=$ship['customer'] ?></td>
        <td><?=$ship['color_code'] ?></td>
        <td><?=$ship['color_description'] ?></td>
        <td><?=$ship['defect'] ?></td>
        <td><?=$ship['qty_defect'] ?></td>
        <td><?=$ship['location_parts'] ?></td>
        <td><?=$ship['status2'] ?></td>
        <td><?=$ship['num_inspector2'] ?></td>
        <td><?=$ship['week'] ?></td>
        <td><a href="<?php echo base_url('delete7/'.$ship['id']) ?>" onclick="return confirm('Are you sure you want to delete this record?')">
            <button class="btn btn-danger" type="button"><i class="bi bi-trash" aria-label="Delete" title="Delete"></i></button></a></td>
    </tr>
    <?php endforeach; ?>
</tbody>
        </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    

<?php require('pie.php') ;?>