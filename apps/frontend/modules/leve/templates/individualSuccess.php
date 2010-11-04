<?php $leves = $sf_data->getRaw('leves'); ?>

<body>
<?php foreach ($leves as $leve): ?>
<div class="leve-box">
  <div class="leve-top">
    <span style="text-align:left;"><?php echo $leve->name ?></span><br />
    <div style="text-align:right;"><i><?php echo $leve->poc ?></i></div>
  </div>
  <div class="leve-mid">
    <?php echo $leve->description ?>

    <div class="divider">&nbsp;</div>

    <div class="card-box" style="background-image: url('/images/250x250_21-6.png');">&nbsp;
      <div class="card-border" style="background-image: url('/images/250x250_04_0D-1.png');">&nbsp;</div>
    </div>

    <img src=/images/li.png> &nbsp; Objectives<br />
    <img src=/images/splitter.gif><br />
    <div class="leve-detail"><?php echo $leve->objectives ?></div>
    <br />

    <img src=/images/li.png> &nbsp; Reward<br />
    <img src=/images/splitter.gif><br />
    <div class="leve-detail"><?php echo $leve->reward ?></div>
    <br />

    <img src=/images/li.png> &nbsp; Issuing Authority<br />
    <img src=/images/splitter.gif><br />
    <div class="leve-detail"><?php echo $leve->issuing_authority ?></div>
    <br />

    <img src=/images/li.png> &nbsp; Recommended Classes<br />
    <img src=/images/splitter.gif><br />
    <div class="leve-detail"><?php echo $leve->recommended_classes ?></div>
    <br />

    <img src=/images/li.png> &nbsp; Levequest Location<br />
    <img src=/images/splitter.gif><br />
    <div class="leve-detail"><?php echo $leve->levequest_location ?></div>
    <br />

    <img src=/images/li.png> &nbsp; Deliver To<br />
    <img src=/images/splitter.gif><br />
    <div class="leve-detail"><?php echo $leve->deliver_to ?></div>
    <br />










  </div>
  <div class="leve-btm">&nbsp;</div>
</div>
<?php endforeach; ?>
</body>

