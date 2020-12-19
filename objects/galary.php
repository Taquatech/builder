<?php $gdetails = isset($gdetails)?$gdetails:["Title"=>"Our Location","ButtonTitle"=>"Locate us Now","ButtonAction"=>"#","ButtonLogo"=>"map-marker","BgImage"=>"images/galary/map.jpg"];  ?>
<div class="w3-container w3-padding-64 w3-text-white w3-center gen-text-shadow pr-loaction setClassOnView blockcolor" data-classOnView ="open" data-viewPadding="200" data-viewPart="true" data-removeOnHide="false" style="" >
  <a id="dest" name="dest"></a>
  <div class="gen-title-bar w3-white"></div>
    <h1 class="w3-xxlarge  fadeInUp delay-0-2s gen-title"><?=$gdetails['Title']?></h1>
    
    <a href="<?=$gdetails['ButtonAction']?>" class="w3-btn w3-border-white w3-border w3-round boxcol-btn w3-text-white w3-margin-top w3-xlarge fadeInUp delay-0-6s providers" style="text-decoration:none"><i class="fas fa-<?=$gdetails['ButtonLogo']?> w3-large"></i> <?=$gdetails['ButtonTitle']?></a>
</div>
    

</div>