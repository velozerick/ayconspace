<?php require('encabezado.php') ;?>

<div class="databases-content px-3 pt-4">
        <div class="card">
            <div class="card-header">
        <h3 class="card-title">Paint2</h3>
        </div>
        <div class="card-body">
        <?php if (session()->has('message')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('message') ?>
    </div>
<?php endif ?>
        <table id="tablaPaint2" class="table table-responsive">
<thead class="thead  table-light">

    <tr>
        <th>ID</th>
        <th>Date</th>
        <th>Number</th>
        <th>Location</th>
        <th>Num. Parts</th>
        <th>Name Parts</th>
        <th>Total Parts</th>
        <th>Defect1</th>
        <th>Qty1</th>
        <th>Total Time</th>
        <th>Inspector</th>
        <th>Week</th>
        <th>Serie</th>
        <th>Actions</th>
        </tr>
</thead>
<tbody class="table-group-divider">
<?php $paint2 = isset($paint2) ? $paint2 : array(); ?>
    <?php  foreach  ($paint2 as $paint): ?> 
    <tr>
        <td><?=$paint['id'] ?></td>
        <td><?=$paint['date'] ?></td>
        <td><?=$paint['number'] ?></td>
        <td><?=$paint['location'] ?></td>
        <td><?=$paint['n_parts'] ?></td>
        <td><?=$paint['name_parts'] ?></td>
        <td><?=$paint['total_parts'] ?></td>
        <td><?=$paint['defect1'] ?></td>
        <td><?=$paint['qty1'] ?></td>
        <td><?=$paint['total_time'] ?></td>
        <td><?=$paint['inspector'] ?></td>
        <td><?=$paint['week'] ?></td>
        <td><?=$paint['serie'] ?></td>
        <td><a href="<?php echo base_url('delete6/'.$paint['id']) ?>" onclick="return confirm('Are you sure you want to delete this record?')">
            <button class="btn btn-danger" type="button"><i class="bi bi-trash"></i></button>
        </a>
    </td>
    </tr>
    <?php endforeach; ?>
</tbody>
        </table>
    </div>
    
<?php require('pie.php') ;?>