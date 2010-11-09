username = <?php echo $username ?>

<?php echo stylesheet_tag('leve') ?>

<?php $leves = $sf_data->getRaw('leves'); ?>

<body>
<?php $row=0; ?>
<?php foreach ($leves as $leve): ?>
<?php $row++; ?>
<?php # NOTE:  THIS IS UNFINISHED ?>
<?php if($row % 2) { $class='odd'; } else { $class='even'; } ?>
  <div class="<?php echo $class ?>">
    <div class="" style="width: 200px; float: left;"><?php echo $leve->name ?></div>
    <div class="" style="width: 200px; float: left;"><?php echo $leve->poc ?></div>
    <div class="" style="width: 200px; float: left;"><?php echo $leve->description ?></div>
    <div class="" style="clear: both;"></div>
  </div>
<?php endforeach; ?>
</body>

