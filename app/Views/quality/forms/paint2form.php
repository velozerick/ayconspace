<?php require('encabezado.php')   ;?>

<div class="container">
    <br>
    <div class="card">
        <div class="card-header">
            <h3>Paint2 Form</h3>
            </div>
            <div class="card-body">
            <?php if (session()->has('message')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('message') ?>
    </div>
<?php endif ?>   
        <form method="POST" action="addPaint2" enctype="multipart/form-data">
        <?php csrf_field(); ?>    
    <div class="main-content">
    <div style="display: flex; flex-wrap: wrap;">
    <div class="form-group-container">
      <label for="date">Date Start:</label>
      <input type="date" id="date" name="date" class="form-control">
    </div>
    <div class="form-group-container">
      <label for="n_parts">Part Number:</label>
      <input type="text" id="n_parts" name="n_parts" class="form-control">
    </div>
</div>
<div style="display: flex; flex-wrap: wrap;">
    <div class="form-group-container">
        <label for="number">Number:</label>
        <input type="text" id="number" name="number" class="form-control">
    </div>
    <div class="form-group-container">
        <label for="name_parts">Name Parts:</label>
         <input type="text" id="name_parts" name="name_parts" class="form-control">
    </div>
</div>
<div style="display: flex; flex-wrap: wrap;">
    <div class="form-group-container">
        <label for="inspector">Num. Inspector:</label>
        <input type="text" id="inspector" name="inspector" class="form-control">
    </div>
    <div class="form-group-container">
        <label for="total_parts">Total:</label>
        <input type="text" id="total_parts" name="total_parts" class="form-control">
    </div>
</div>
<div style="display: flex; flex-wrap: wrap;">
<div class="form-group-container">
        <label for="location">Location:</label>
        <select id="location" name="location" class="form-control">
        <?php
        $locations = array(
            '',
            'PAINT 2',
            );
            foreach ($locations as $location) {
            echo '<option value="'. $location. '">'. $location. '</option>';
            }
            ?>
            </select>
    </div>
    <div class="form-group-container">
    <label for="week">Week:</label>
    <select id="week" name="week" class="form-control">
            <?php for ($i = 1; $i <= 52; $i++) {
                echo '<option value="'. $i. '">'. $i. '</option>';
                }?>
        </select>
    </div>
</div>    
<div style="display: flex; flex-wrap: wrap;">                
    <div class="form-group-container">
    <label for="defect1">Defect 1:</label>
    <select id="defect1" name="defect1" class="form-control">
        <?php
        $defects = array(
            '',
            'BAD CUT',
            'CRACKS',
            'DETACHMENT',
            'FOLDED',
            'INCORRECT CUTS',
            'INVERTED',
            'IRREGULAR WELD',
            'LACK OF FUSION',
            'M/WELDING',
            'MISSING WELDING',
            'PAINT COVERGE',
            'PERFORATION',
            'PITTING',
            'POROSITY',
            'RUNG-SAGS',
            'SPATTER',
            );
            foreach ($defects as $defect) {
            echo '<option value="'. $defect. '">'. $defect. '</option>';
            }
        ?>
    </select>
</div>
    <div class="form-group-container">
            <label for="serie">Serie:</label>
            <input type="text" id="serie" name="serie" class="form-control">
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