<?php require('encabezado.php')   ;?>

<div class="databases-content px-3 pt-4">
        <div class="card">
            <div class="card-header">
        <h3 class="card-title">Miscellaneous</h3>
        </div>
        <div class="card-body">
        <?php if (session()->has('message')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('message') ?>
    </div>
<?php endif ?>
        <table id="tablaMisc" class="table table-responsive">
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
<?php $miscellaneous = isset($miscellaneous) ? $miscellaneous : array(); ?>
    <?php  foreach  ($miscellaneous as $misc): ?> 
    <tr>
        <td><?=$misc['id'] ?></td>
        <td><?=$misc['date'] ?></td>
        <td><?=$misc['number'] ?></td>
        <td><?=$misc['location'] ?></td>
        <td><?=$misc['n_parts'] ?></td>
        <td><?=$misc['name_parts'] ?></td>
        <td><?=$misc['total_parts'] ?></td>
        <td><?=$misc['defect1'] ?></td>
        <td><?=$misc['qty1'] ?></td>
        <td><?=$misc['total_time'] ?></td>
        <td><?=$misc['inspector'] ?></td>
        <td><?=$misc['week'] ?></td>
        <td><?=$misc['serie'] ?></td>
        <td><a href="<?php echo base_url('delete/'.$misc['id']) ?>" onclick="return confirm('Are you sure you want to delete this record?')">
            <button id="delete" class="btn btn-danger" type="button"><i class="bi bi-trash" aria-label="Delete" title="Delete"></i></button>
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
    <script>
    let table = new DataTable('#tablaMisc', {
        "ordering": false,
        "dom": '<"top"lBf>rt<"bottom"ip>',
        "buttons": [
            'csv', 'print', 'pdf'
        ]
    }
    );
</script>
<?php require('pie.php') ;?>