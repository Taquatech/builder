
<?php
$Data = (isset($Data) &&  count($Data) > 0)?$Data: [
    "Waves"=>["w3-black","w3-teal","w3-indigo"],
    "BackgroundColor"=>"",
    "Title"=>["Markup"=>"ABOUT","Animation"=>"fadeInLeft delay-0-2s animated slow"],
    "Content"=>["Markup"=>"US","Animation"=>"fadeInRight delay-0-4s animated slow"]  
];
?>

<div class="wavecont w3-card-4 mainbgcolor-">
      <div class='box'>
      <?php if(isset($Data['Waves']) &&  count($Data['Waves']) >= 3){ ?>
        <div class='wave -one <?=$Data['Waves'][0]?>' ></div>
        <div class='wave -two <?=$Data['Waves'][1]?>'></div>
        <div class='wave -three <?=$Data['Waves'][2]?>'></div>
        <?php  } 
  
?>
    </div>
    <div class="wave-text-cont w3-display-right gen-text-shadow">
    <div class="banner-title <?php echo (isset($Data['Title']['Animation']))?$Data['Title']['Animation']:"fadeInLeft delay-0-2s animated slow"; ?>"><?php echo (isset($Data['Title']['Markup']))?$Data['Title']['Markup']:""; ?></div>   
        <div class="banner-content <?php echo (isset($Data['Content']['Animation']))?$Data['Content']['Animation']:"fadeInRight delay-0-4s animated slow"; ?>"><?php echo (isset($Data['Content']['Markup']))?$Data['Content']['Markup']:""; ?></div>  
</div>

    </div>

<!-- <div class="wavecont w3-card-4 mainbgcolor-">
      <div class='box'>
        <div class='wave -one w3-red' ></div>
        <div class='wave -two w3-black'></div>
        <div class='wave -three w3-pink'></div>
    </div>
    <div class="wave-text-cont w3-display-right gen-text-shadow">
        <div class="banner-title fadeInLeft delay-0-2s animated slow"><?php //echo (isset($bannerTitle))?$bannerTitle:"WHO";  ?></div>   
        <div class="banner-content fadeInRight delay-0-4s animated slow"><?php //echo (isset($bannerContent))?$bannerContent:"WE ARE";  ?></div>   
</div>

    </div> -->
    <div class="banner-down w3-card w3-blue"><i class="fas fa-chevron-down w3-display-middle w3-xxlarge"></i></div>