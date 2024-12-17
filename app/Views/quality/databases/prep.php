<?php require('encabezado.php')   ;?>

    <div class="databases-content px-3 pt-4">
        <div class="card">
            <div class="card-header">
        <h3 class="card-title">Preparation</h3>
        </div>
        <div class="card-body">
        <?php if (session()->has('message')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('message') ?>
    </div>
<?php endif ?>
<table id="tablaPrep" class="table table-responsive">
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
<?php $preparation = isset($preparation) ? $preparation : array(); ?>
    <?php  foreach  ($preparation as $prep): ?> 
    <tr>
        <td><?=$prep['id'] ?></td>
        <td><?=$prep['date'] ?></td>
        <td><?=$prep['w_order'] ?></td>
        <td><?=$prep['serie'] ?></td>
        <td><?=$prep['customer'] ?></td>
        <td><?=$prep['surface_prep'] ?></td>
        <td><?=$prep['qty_defect'] ?></td>
        <td><?=$prep['work_time'] ?></td>
        <td><?=$prep['num_leader'] ?></td>
        <td><?=$prep['leak_test'] ?></td>
        <td><?=$prep['location'] ?></td>
        <td><?=$prep['defect'] ?></td>
        <td><?=$prep['qty'] ?></td>
        <td><?=$prep['status'] ?></td>
        <td><?=$prep['num_inspector2'] ?></td>
        <td><?=$prep['week'] ?></td>
        <td><a href="<?php echo base_url('delete5/'.$prep['id']) ?>" onclick="return confirm('Are you sure you want to delete this record?')">
            <button class="btn btn-danger" type="button"><i class="bi bi-trash" aria-label="Delete" title="Delete"></i></button>
        </a>
    </td>
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