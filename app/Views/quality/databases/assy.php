<?php require('encabezado.php')   ;?>

    <div class="databases-content px-3 pt-4">
        <div class="card">
            <div class="card-header">
        <h3 class="card-title">Assembly</h3>
        </div>
        <div class="card-body">
        <?php if (session()->has('message')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('message') ?>
    </div>
<?php endif ?>
        <table id="tablaAssy" class="table table-responsive"> 
<thead class="thead table-light"> 
    <tr>
        <th>ID</th> 
        <th hidden>Date</th>
        <th>Type Drum</th>
        <th>Serie</th>
        <th>Description</th>
        <th>Gearbox</th>
        <th>Location</th>
        <th>Number</th>
        <th>Start</th>
        <th>Finish</th>
        <th>Defect1</th>
        <th>Qty1</th>
        <th>Total Time</th>
        <th>Status</th>
        <th>Inspector</th>
        <th>Customer</th>
        <th>Week</th>
        <th>Actions</th>
        </tr>
</thead>
<tbody class="table-group-divider">
<?php $assembly = isset($assembly) ? $assembly : array(); ?>
    <?php  foreach  ($assembly as $assy): ?> 
    <tr>
        <td><?=$assy['id'] ?></td>
        <td hidden><?=$assy['date'] ?></td>
        <td><?=$assy['type_kit'] ?></td>
        <td><?=$assy['serie'] ?></td>
        <td><?=$assy['description'] ?></td>
        <td><?=$assy['serial_gearbox'] ?></td>
        <td><?=$assy['parts_location'] ?></td>
        <td><?=$assy['number'] ?></td>
        <td><?=$assy['date_start'] ?></td>
        <td><?=$assy['date_finish'] ?></td>
        <td><?=$assy['defect1'] ?></td>
        <td><?=$assy['qty1'] ?></td>
        <td><?=$assy['total_time'] ?></td>
        <td><?=$assy['status'] ?></td>
        <td><?=$assy['num_inspector2'] ?></td>
        <td><?=$assy['customer'] ?></td>
        <td><?=$assy['week'] ?></td>
        <td><a href="<?php echo base_url('delete3/'.$assy['id']) ?>" onclick="return confirm('Are you sure you want to delete this record?')">
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
    <script>
    let table = new DataTable('#tablaAssy' 
    );

<?php require('pie.php') ;?>