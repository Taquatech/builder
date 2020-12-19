<?php
$Data = (isset($Data) &&  count($Data) > 0)?$Data: [
    "Image"=>["",""],
    "Link"=>["#","#"],
    "Markup"=>["Top 10 Naija Countdown","Top 20 Afro Countdown"]
];

?>
<div class="advertbox2col w3-card">
  <div class="w3-row-padding">
    <div class="w3-col s6">
      <a href="<?php echo isset($Data['Link'][0])?$Data['Link'][0]:"" ?>" target="_blank">
        <div class="advertbox2col-box">
          <?php if(isset($Data['Markup'][0]) && trim($Data['Markup'][0]) != ""){ ?>
        <div class="advertbox2col-tag w3-display-left w3-red w3-card w3-hide-small">
          <?=$Data['Markup'][0]?></div>
          <?php } ?>
        <img src="<?php echo isset($Data['Image'][0])?$Data['Image'][0]:"" ?>" class="w3-card" />
       </div>
    </a>
</div>

<div class="w3-col s6">
      <a href="<?php echo isset($Data['Link'][1])?$Data['Link'][1]:"" ?>" target="_blank">
        <div class="advertbox2col-box">
          <?php if(isset($Data['Markup'][1]) && trim($Data['Markup'][1]) != ""){ ?>
        <div class="advertbox2col-tag w3-display-left w3-red w3-card w3-hide-small">
          <?=$Data['Markup'][1]?></div>
          <?php } ?>
        <img src="<?php echo isset($Data['Image'][1])?$Data['Image'][1]:"" ?>" class="w3-card" />
       </div>
    </a>
</div>

</div>
</div>