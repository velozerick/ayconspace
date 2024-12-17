<?php require('encabezado.php')   ;?>

    <div class="databases-content px-3 pt-4">
        <div class="card">
            <div class="card-header">
        <h3 class="card-title">Paint</h3>
        </div>
        <div class="card-body">
        <?php if (session()->has('message')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('message') ?>
    </div>
<?php endif ?>

<table id="tablaPaint" class="table table-responsive">
<thead class="thead  table-light">
    <tr>
        <th>ID</th>
        <th hidden>Date</th>
        <th>Customer</th>
        <th>Gearbox</th>
        <th>Serie</th>
        <th>Description</th>
        <th>Location</th>
        <th>Number</th>
        <th>Start</th>
        <th>Finish</th>
        <th>Defect1</th>
        <th>Qty1</th>
        <th>Total Time</th>
        <th>Status</th>
        <th>Inspector</th>
        <th>Week</th>
        <th>Actions</th>
        </tr>
</thead>
<tbody class="table-group-divider">
    <?php  foreach  ($paint as $paint): ?> 
    <tr>
        <td><?=$paint['id'] ?></td>
        <td hidden><?=$paint['date'] ?></td>
        <td><?=$paint['customer'] ?></td>
        <td><?=$paint['gearbox'] ?></td>
        <td><?=$paint['serie'] ?></td>
        <td><?=$paint['description'] ?></td>
        <td><?=$paint['parts_location'] ?></td>
        <td><?=$paint['number'] ?></td>
        <td><?=$paint['date_start'] ?></td>
        <td><?=$paint['date_finish'] ?></td>
        <td><?=$paint['defect1'] ?></td>
        <td><?=$paint['qty1'] ?></td>
        <td><?=$paint['total_time'] ?></td>
        <td><?=$paint['status'] ?></td>
        <td><?=$paint['inspector'] ?></td>
        <td><?=$paint['week'] ?></td>
        <td><a href="<?php echo base_url('delete4/'.$paint['id']) ?>" onclick="return confirm('Are you sure you want to delete this record?')">
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