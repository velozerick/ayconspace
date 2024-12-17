<?php require('encabezado.php')   ;?>

<div class="container responsive">
<br>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Paint Form</h3>
        </div>
        <div class="card-body"> 
        <?php if (session()->has('message')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('message') ?>
    </div>
<?php endif ?>
<form method="POST" action="addPaint" enctype="multipart/form-data">
        <?php csrf_field(); ?>    
    <div class="main-content">
    <div style="display: flex; flex-wrap: wrap;">
    <div class="form-group-container">
      <label for="date">Date:</label>
      <input type="date" id="date" name="date" class="form-control">
    </div>
    
</div>
    <div style="display: flex; flex-wrap: wrap;">
    <div class="form-group-container">
      <label for="date_start">Date Start:</label>
      <input type="date" id="date_start" name="date_start" class="form-control">
    </div>
    <div class="form-group-container">
            <label for="serie">Serie:</label>
            <input type="text" id="serie" name="serie" class="form-control">
    </div>
</div>
<div style="display: flex; flex-wrap: wrap;">
    <div class="form-group-container">
        <label for="date_finish">Date Finish:</label>
        <input type="date" id="date_finish" name="date_finish" class="form-control">
    </div>
    <div class="form-group-container">
        <label for="description">Description:</label>
         <input type="text" id="description" name="description" class="form-control">
    </div>
</div>
<div style="display: flex; flex-wrap: wrap;">
    <div class="form-group-container">
        <label for="number">Num. Operation:</label>
        <input type="text" id="number" name="number" class="form-control">
    </div>
    <div class="form-group-container">
        <label for="customer">Customer:</label>
         <input type="text" id="customer" name="customer" class="form-control">
    </div>
</div>
<div style="display: flex; flex-wrap: wrap;">
    <div class="form-group-container">
        <label for="inspector">Num. Inspector:</label>
        <input type="text" id="inspector" name="inspector" class="form-control">
    </div>
    <div class="form-group-container">
        <label for="parts_location">Location:</label>
        <select id="parts_location" name="parts_location" class="form-control">
        <?php
        $locations = array(
            '',
            'BELLY',
            'CHARGER HOPPER',
            'COLLECTION HOPPER',
            'CONE SECTION',
            'FLANGE',
            'FLANJE',
            'FLIP CHUTE',
            'FRONT PEDESTAL',
            'LADDER',
            'LARGE CONE',
            'MAIN CHUTE',
            'PIVOT',
            'PLATFORM',
            'REAR PEDESTAL',
            'TAILCONE',
            );
            foreach ($locations as $location) {
            echo '<option value="'. $location. '">'. $location. '</option>';
            }
            ?>
            </select>
    </div>
</div>
<div style="display: flex; flex-wrap: wrap;">
            <div class="form-group-container">
            <label for="gearbox">Gearbox:</label>
            <input type="text" id="gearbox" name="gearbox" class="form-control">
        </div>
        <div class="form-group-container">
        <label for="status">Status:</label>
        <select id="status" name="status" class="form-control">
        <?php
        $statuss = array(
            '',
            'APPROVED',
            'REJECTED',
            );
            foreach ($statuss as $status) {
            echo '<option value="'. $status. '">'. $status. '</option>';
            }
            ?>
            </select>
    </div>
</div>
<div style="display: flex; flex-wrap: wrap;">
<div class="form-group-container">
    <label for="week">Week:</label>
    <select id="week" name="week" class="form-control">
            <?php for ($i = 1; $i <= 52; $i++) {
                echo '<option value="'. $i. '">'. $i. '</option>';
                }?>
        </select>
    </div>
    <div class="form-group-container">
    <label for="defect1">Defect:</label>
    <select id="defect1" name="defect1" class="form-control">
        <?php
        $defects = array(
            '',
            'COLOCION DE',
            'DIRT-DUST',
            'DRYSPRAY',
            'FOLDED',
            'OVERSPRAY',
            'PAINT COVERGE',
            'PITTING',
            'POROSITY',
            'RUNG-SAGS',
            'SCRATCHES-SCUFFS',
            'SPATTER',
            );
            foreach ($defects as $defect) {
            echo '<option value="'. $defect. '">'. $defect. '</option>';
            }
        ?>
    </select>
</div>
</div>
<div style="display: flex; flex-wrap: wrap;">
            <div class="form-group-container">
            <label for="qty1">Qty 1:</label>
            <input type="text" id="qty1" name="qty1" class="form-control">
        </div>
            <div class="form-group-container">
            <label for="total_time">Time:</label>
            <input type="text" id="total_time" name="total_time" class="form-control" value="00:00:00">
        </div>
</div>
        <button class="btn btn-primary" type="submit">Add</button>
        <button class="btn btn-secondary" type="reset">Clear</button>
                </div>   
                </div>
               </div>
             </form>
        </div>
    </div>
    </div>
    </div>

<?php require('pie.php')   ;?>