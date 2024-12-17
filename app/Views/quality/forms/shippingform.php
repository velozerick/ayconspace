<?php require('encabezado.php')   ;?>

<div class="container responsive">
<br>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Shipping Form</h3>
        </div>
        <div class="card-body"> 
        <?php if (session()->has('message')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('message') ?>
    </div>
<?php endif ?>
<form method="POST" action="addShipping" enctype="multipart/form-data">
        <?php csrf_field(); ?>    
    <div class="main-content">
    <div style="display: flex; flex-wrap: wrap;">
    <div class="form-group-container">
      <label for="date">Date Start:</label>
      <input type="date" id="date" name="date" class="form-control">
    </div>
    <div class="form-group-container">
      <label for="color_code">Color Code:</label>
      <input type="text" id="color_code" name="color_code" class="form-control">
    </div>
</div>
<div style="display: flex; flex-wrap: wrap;">
    <div class="form-group-container">
        <label for="w_order">Work Order:</label>
        <input type="text" id="w_order" name="w_order" class="form-control">
    </div>
    <div class="form-group-container">
        <label for="num_inspector2">Num. Inspector:</label>
        <input type="text" id="num_inspector2" name="num_inspector2" class="form-control">
    </div>
</div>
<div style="display: flex; flex-wrap: wrap;">
<div class="form-group-container">
        <label for="serie">Serie:</label>
        <input type="text" id="serie" name="serie" class="form-control">
    </div>
<div class="form-group-container">
        <label for="location_parts">Location:</label>
        <select id="location_parts" name="location_parts" class="form-control">
        <?php
        $locations = array(
            '',
            '12 REAR SUPPORT',
            '13 Plate',
            '14 REAR ROP',
            '14 Rear Top',
            '15 FLAT BAR',
            '16 Base Gusset',
            '3 Pivot "V" Bracket',
            '4 ANGLE LH',
            '7 COVER LH',
            '9 Top Cover',
            'ALUMINIOS',
            'cp',
            'MISCELANEOS',
            'PEDESTALES',
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
            <label for="customer">Customer:</label>
            <input type="text" id="customer" name="customer" class="form-control">
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
            <label for="color_description">Color Description:</label>
            <input type="text" id="color_description" name="color_description" class="form-control">
    </div>
<div class="form-group-container">
    <label for="week">Week:</label>
    <select id="week" name="week" class="form-control">
            <?php for ($i = 1; $i <= 52; $i++) {
                echo '<option value="'. $i. '">'. $i. '</option>';
                }?>
        </select>
    </div>               
    <div class="form-group-container">
    <label for="defect">Defect:</label>
    <select id="defect" name="defect" class="form-control">
        <?php
        $defects = array(
            '',
            'CRACKS',
            'GRAIN BRANDS',
            'IRREGULAR WELD',
            'IRREGULAR WELDING',
            'LACK OF FUSION',
            'LEAK',
            'M/WELDING',
            'MISAPPILED WELDING',
            'MISPLACED PART',
            'MISSING WELDING',
            'OUT OF DIMENSION',
            'OVERLAP',
            'POROSITY',
            'SPATTER',
            'UNDERCUT',
            'WELDING SIZE',
            'WELDING UNDERSIZE',
            );
            foreach ($defects as $defect) {
            echo '<option value="'. $defect. '">'. $defect. '</option>';
            }
        ?>
    </select>
</div>  
            <div class="form-group-container">
            <label for="qty">Qty 1:</label>
            <input type="text" id="qty" name="qty" class="form-control">
        </div>
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