<?php require('encabezado.php')   ;?>

<div class="databases-content px-3 pt-4">
        <div class="card">
            <div class="card-header">
        <h3 class="card-title">Drums</h3>
        </div>
        <div class="card-body">
        <?php if (session()->has('message')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('message') ?>
    </div>
<?php endif ?>
        <table id="tablaDrums" class="table table-responsive">
<thead class="thead  table-light">
    <tr>
        <th>ID</th>
        <th hidden>Date</th>
        <th>Type Drum</th>
        <th>Serie</th>
        <th>Description</th>
        <th>Parts Location</th>
        <th>Number</th>
        <th>Date Start</th>
        <th>Date Finish</th>
        <th>Defect</th>
        <th>Qty</th>
        <th>Total Time</th>
        <th>Status</th>
        <th>Num. Inspector2</th>
        <th>Week</th>
        <th>Actions</th>
        </tr>
</thead>
<tbody class="table-group-divider">
<?php $drums = isset($drums) ? $drums : array(); ?>
    <?php  foreach  ($drums as $drum): ?> 
    <tr>
        <td><?=$drum['id'] ?></td>
        <td hidden><?=$drum['date'] ?></td>
        <td><?=$drum['type_drum'] ?></td>
        <td><?=$drum['serie'] ?></td>
        <td><?=$drum['description'] ?></td>
        <td><?=$drum['parts_location'] ?></td>
        <td><?=$drum['number'] ?></td>
        <td><?=$drum['date_start'] ?></td>
        <td><?=$drum['date_finish'] ?></td>
        <td><?=$drum['defect'] ?></td>
        <td><?=$drum['qty'] ?></td>
        <td><?=$drum['total_time'] ?></td>
        <td><?=$drum['status'] ?></td>
        <td><?=$drum['num_inspector2'] ?></td>
        <td><?=$drum['week'] ?></td>
        <td><a href="<?php echo base_url('delete2/'.$drum['id']) ?>" onclick="return confirm('Are you sure you want to delete this record?')">
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

    <?php require('pie.php') ;?>