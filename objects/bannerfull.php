<!-- Big Banner With Anim - bbwa -->
<?php
$Data = (isset($Data) &&  count($Data) > 0)?$Data: [
    "Waves"=>["w3-black","w3-teal","w3-indigo"],
    "Banners"=>[
        "BackgroundImages"=>["images/bbwa/SanMarino.webp","images/bbwa/pay.png","images/bbwa/connect.jpg"],
        "Contents"=>[
            [["Type"=>"Header","Markup"=>'<img src="images/logo/logo_white.png" alt="AQUAYA">',"Animation"=>"fadeInDown"],
            ["Type"=>"Header","Markup"=>'WE TURN {{DREAMS}} INTO {{REALITY}}',"Animation"=>"fadeInDown delay-0-4s"],
            ["Type"=>"Body","Markup"=>'',"Animation"=>""],
            ["Type"=>"Note","Markup"=>'',"Animation"=>""]]
        ]
    ],
    "Controls"=>["Previous"=>true,"Next"=>true,"Bottom"=>true,"Indicator"=>true]
];

?>
<div class="bbwa-main w3-card-4" id="bbwa-main-1">
<?php if(isset($Data['Waves']) &&  count($Data['Waves']) >= 3){ ?>
<div class="wavecont w3-card-4 mainbgcolor" style="position:absolute;height:100%;z-index:2;background-color:transparent">
      <div class='box'>
         
        <div class='wave -one <?=$Data['Waves'][0]?>' ></div>
        <div class='wave -two <?=$Data['Waves'][1]?>'></div>
        <div class='wave -three <?=$Data['Waves'][2]?>'></div>
    </div>
    <div class="wave-text-cont w3-display-right gen-text-shadow">
        <!-- <div class="banner-title fadeInLeft delay-0-2s animated slow">WHO</div>   
        <div class="banner-content fadeInRight delay-0-4s animated slow">WE ARE</div> -->   
</div>

    </div>
<?php  } 
  
?>
        <div class="bbwa-banners">
        <?php if(isset($Data['Banners']['BackgroundImages']) && count($Data['Banners']['BackgroundImages']) > 0){
            
            foreach($Data['Banners']['BackgroundImages'] as $ind=>$bannerurl){
                $hide =$ind > 0?"w3-hide":"";
            ?>
       <div class="bbwa-banner w3-animate-opacity <?=$hide?>" style="background-image: url(<?=$bannerurl?>);">&nbsp;</div>
       
      
<?php } } ?>
       </div>
  
       <!-- Contents -->
       <div class="bbwa-cont gen-text-shadow w3-display-container">
       <?php if(isset($Data['Banners']['Contents']) && count($Data['Banners']['Contents']) > 0){
            
            foreach($Data['Banners']['Contents'] as $ind=>$bcontents){
                $hide =$ind > 0?"w3-hide":"";
            ?>
           <div class="bbwa-indcont  <?=$hide?> ">
           <?php if(count($bcontents) > 0){ 
               foreach($bcontents as $indbcontents){
                   if($indbcontents['Type'] == "Header"){
               ?>

                <h1 class="bbwa-title <?=$indbcontents['Animation']?>"><?php  echo str_replace(array("{{","}}"),array('<strong class="maincolor gen-text-shadow">','</strong>'),$indbcontents['Markup']) ?></h1>

                <?php }else if($indbcontents['Type'] == "Body"){  ?>

                <div class="bbwa-body <?=$indbcontents['Animation']?>"><?php  echo str_replace(array("{{","}}"),array('<strong class="maincolor gen-text-shadow">','</strong>'),$indbcontents['Markup']) ?></div>

                <?php }else{ ?>

                <div class="bbwa-note <?=$indbcontents['Animation']?>"><?php  echo str_replace(array("{{","}}"),array('<strong class="maincolor gen-text-shadow">','</strong>'),$indbcontents['Markup']) ?></div>

            <?php }}}  ?>
              
              
              
           </div>
           <?php } } ?>

           <!-- <div class="bbwa-indcont w3-hide">
                   <h1 class="bbwa-title fadeInDown"><strong class="maincolor gen-text-shadow">Easy</strong> Payment</h1>
            <div class="bbwa-body fadeInUp delay-0-4s">Our Platform provide easy and secure installment Payment.</div>
                   <div class="bbwa-note fadeInUp delay-0-8s"><img src="images/logo/logo_white.png" alt="AQUAYA"></div>
                </div>

                <div class="bbwa-indcont w3-hide">
                   <h1 class="bbwa-title fadeInDown">Let's <strong class="maincolor gen-text-shadow">Connect</strong> You</h1>
                   <div class="bbwa-body fadeInUp delay-0-4s gen-uppercase">We connect Product to Consumers</div>
                   <div class="bbwa-note fadeInUp delay-0-8s"><img src="images/logo/logo_white.png" alt="AQUAYA"></div>
                </div> -->

              
                
       </div>
       <?php if(isset($Data["Controls"]["Indicator"]) && $Data["Controls"]["Indicator"] == true){ ?>
       <div class="bbwa-anim-inds">
               <!-- <div class="bbwa-anim-ind">&nbsp;</div> <div class="bbwa-anim-ind active">&nbsp;</div> -->
       </div>
       <?php } ?>

       <?php if(isset($Data["Controls"]["Previous"]) && $Data["Controls"]["Previous"] == true){ ?>
       <a href="#" class="bbwa-arrow-left w3-display-left "><i class="fas fa-chevron-left"></i></a>
       <?php } ?>

       <?php if(isset($Data["Controls"]["Next"]) && $Data["Controls"]["Next"] == true){ ?>
       <a href="#" class="bbwa-arrow-right w3-display-right "><i class="fas fa-chevron-right"></i></a>
       <?php } ?>

       <?php if(isset($Data["Controls"]["Bottom"]) && $Data["Controls"]["Bottom"] == true){ ?>
       <a href="#" class="bbwa-arrow w3-display-bottommiddle"><i class="fas fa-chevron-down"></i></a>
       <?php } ?>
   </div>
   <script></script>
  <!-- Big Banner With Anim - bbwa -->