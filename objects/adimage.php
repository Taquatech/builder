<?php
$Data = (isset($Data) &&  count($Data) > 0)?$Data: [
    "Image"=>"",
    "Link"=>"#",
    "Markup"=>"Top 10 Naija Countdown"
];

?>
<div class="advertbox2col w3-card">
  <div class="w3-row-padding">
    <div class="w3-col s12">
      <a href="<?php echo isset($Data['Link'])?$Data['Link']:"" ?>" target="_blank">
        <div class="advertbox2col-box">
          <?php if(isset($Data['Markup']) && trim($Data['Markup']) != ""){ ?>
        <div class="advertbox2col-tag w3-display-left w3-red w3-card w3-hide-small">
          <?=$Data['Markup']?></div>
          <?php } ?>
        <img src="<?php echo isset($Data['Image'])?$Data['Image']:"" ?>" class="w3-card" />
       </div>
    </a>
</div>

</div>
</div>