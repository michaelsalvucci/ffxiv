<h1>Edit it</h1>

<?php # include_partial('form', array('form' => $form)) ?>

<?php foreach ($leves as $leve): ?>
  <div>
    <?php echo form_tag_for($form, '@ffLeveChecklist') ?>
    <div class="" style="width: 200px; float: left;"><?php echo $form['is_visited'] ?></div>
    <!--  <div class="" style="width: 200px; float: left;"><?php #echo $form['user_id'] ?></div> -->
    <div class="" style="width: 200px; float: left;"><?php echo $user_id ?></div>
    <div class="" style="width: 200px; float: left;"><?php echo $leve->name ?></div>
    <div class="" style="width: 200px; float: left;"><?php echo $leve->type ?></div>
    <div class="" style="width: 200px; float: left;"><?php echo $leve->levequest_location ?></div>
    <div class="" style="width: 200px; float: left;"><input type="submit" value="Submit"></div>
    <div class="" style="clear: both;"></div>
  </div>
<?php endforeach; ?>
