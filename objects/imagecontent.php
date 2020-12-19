
<?php 

$Data = (isset($Data) &&  count($Data) > 0)?$Data: [
    "BodyClass"=>"",
    "Flow"=>"",
    "Image"=>"whoweare.png",
    "ThemeColor"=>"",
    "Content"=>[
        "Our Mission"=>"Here at INCHBAY HMO, We offer special and affordable health plans that will secure your health through out your life.",
        "Our Strategy"=>"Here at INCHBAY HMO, We offer special and affordable health plans that will secure your health through out your life."
    ]
];

    ?>
<div class="imagecont setClassOnView <?php echo (isset($Data['Flow']))?$Data['Flow']:""; ?> <?php echo (isset($Data['BodyClass']))?$Data['BodyClass']:""; ?>" data-classOnView ="open" data-viewPadding="200" data-viewPart="true" data-removeOnHide="false">
    <div class="imagecont-ind w3-row">
    
        <div class="w3-col m5 imagecont-imgbx w3-mobile imagecont-splitbx"><img src="<?php echo (isset($Data['Image']))?$Data['Image']:"whoweare.png";  ?>" /></div>
        <!-- <div class="w3-col m6 gen-text-shadow"> -->
        <div class="w3-col m7 imagecont-splitbx">
            <div class="imagecont-contbx w3-mobile">
                <div class="gen-title-bar mainbgcolor" style="margin:0px;background-color:<?php echo $Data['ThemeColor'] ?>"></div>
                
                <?php  
     foreach($Data['Content'] as $title=>$ingcont){
         ?>
<div class="imagebox-ind-cont">
<div class="imagecont-title w3-xxlarge maincolor" style="font-weight:600;line-height:0.9em;margin:15px 0px;text-align:left;color:<?php echo $Data['ThemeColor'] ?> !important"><?php echo $title ?></div>
                <div class="imagecont-cont w3-text-dark-grey w3-large" style="text-align:left"><?php echo $ingcont ?></div>
     </div>
<?php
     }

?>
                
            </div>

        </div>
        <div style="clear:both"></div>
    </div>
   
 
       
</div>