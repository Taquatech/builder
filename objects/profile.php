<?php
$Data = (isset($Data) &&  count($Data) > 0)?$Data: [
    "Title"=>"Management Team",
    "Profile"=>[
        [
            "Image"=>"images/profilebox/1.jpg",
            "Name"=>"Adedeji Toba",
            "Position"=>"CEO",
            "Social"=>[
                ["Link"=>"#","Icon"=>"fab fa-facebook-f","Color"=>"w3-text-blue"],
                ["Link"=>"#","Icon"=>"fab fa-twitter","Color"=>"w3-text-light-blue"],
                ["Link"=>"#","Icon"=>"fab fa-whatsapp-square","Color"=>"w3-text-green"],
                ["Link"=>"#","Icon"=>"fab fa-linkedin","Color"=>"w3-text-indigo"],
                ["Link"=>"#","Icon"=>"fab fa-google","Color"=>"w3-text-red"]
            ]
        ]
    ]
];

?>
<div class="profilebx open">
<div class="gen-title-bar gen-color"></div>
    <h1 class="boxcol-main-title gen-text-color fadeInUp delay-0-2s gen-title">
        <?php echo isset($Data["Title"])?$Data["Title"]:""; ?>
    </h1>
<div class="w3-row">

<?php  if(isset($Data['Profile']) && count($Data['Profile']) > 0){
     foreach($Data['Profile'] as $indprofile){
    ?>
<div class="w3-col s6 m6 l3">
     <div class="profilebx-ind">
        <div class="profilebx-photo w3-card" style="background-image:url(<?php echo isset($indprofile['Image'])?$indprofile['Image']:"" ?>)"></div>
        <div class="profilebx-info w3-card w3-center">
          <div class="profilebx-title maincolor"><?php echo isset($indprofile['Name'])?$indprofile['Name']:"" ?></div>
          <div class="profilebx-cont"><?php echo isset($indprofile['Position'])?$indprofile['Position']:"" ?></div>
          <?php  if(isset($indprofile['Social']) && count($indprofile['Social']) > 0){ ?>
          <div class="profilebx-socials">
              <?php foreach($indprofile['Social'] as $indsocial){ ?>
              <a href="<?php echo isset($indsocial['Link'])?$indsocial['Link']:"" ?>" class="w3-hover-opacity"><i class="<?php echo isset($indsocial['Icon'])?$indsocial['Icon']:"" ?> <?php echo isset($indsocial['Color'])?$indsocial['Color']:"" ?>"></i></a>
              <?php } ?>
             <!--  <a href="#" class="w3-hover-opacity"><i class="fab fa-twitter w3-text-light-blue"></i></a>
              <a href="#" class="w3-hover-opacity"><i class="fab fa-whatsapp-square w3-text-green"></i></a>
              <a href="#" class="w3-hover-opacity"><i class="fab fa-linkedin maincolor"></i></a>
              <a href="#" class="w3-hover-opacity"><i class="fab fa-google w3-text-red"></i></a> -->
              
          </div>
          <?php } ?>
        </div>

    </div>
</div>
<?php }} ?>
<!-- <div class="w3-col s6 m6 l3">
     <div class="profilebx-ind">
        <div class="profilebx-photo w3-card" style="background-image:url(images/profilebox/2.jpg)"></div>
        <div class="profilebx-info w3-card w3-center">
          <div class="profilebx-title maincolor">Bakare Bob T.</div>
          <div class="profilebx-cont">Medical Technologist</div>
          <div class="profilebx-socials">
              <a href="#" class="w3-hover-opacity"><i class="fab fa-facebook-f w3-text-blue"></i></a>
              <a href="#" class="w3-hover-opacity"><i class="fab fa-twitter w3-text-light-blue"></i></a>
              <a href="#" class="w3-hover-opacity"><i class="fab fa-whatsapp-square w3-text-green"></i></a>
              <a href="#" class="w3-hover-opacity"><i class="fab fa-linkedin maincolor"></i></a>
              <a href="#" class="w3-hover-opacity"><i class="fab fa-google w3-text-red"></i></a>
              
          </div>
        </div>

    </div>
</div>

<div class="w3-col s6 m6 l3">
     <div class="profilebx-ind">
        <div class="profilebx-photo w3-card" style="background-image:url(images/profilebox/3.jpg)"></div>
        <div class="profilebx-info w3-card w3-center">
          <div class="profilebx-title maincolor">Patient Nnena</div>
          <div class="profilebx-cont">Customer Relation</div>
          <div class="profilebx-socials">
              <a href="#" class="w3-hover-opacity"><i class="fab fa-facebook-f w3-text-blue"></i></a>
              <a href="#" class="w3-hover-opacity"><i class="fab fa-twitter w3-text-light-blue"></i></a>
              <a href="#" class="w3-hover-opacity"><i class="fab fa-whatsapp-square w3-text-green"></i></a>
              <a href="#" class="w3-hover-opacity"><i class="fab fa-linkedin maincolor"></i></a>
              <a href="#" class="w3-hover-opacity"><i class="fab fa-google w3-text-red"></i></a>
              
          </div>
        </div>

    </div>
</div>

<div class="w3-col s6 m6 l3">
     <div class="profilebx-ind">
        <div class="profilebx-photo w3-card"  style="background-image:url(images/profilebox/4.jpg)"></div>
        <div class="profilebx-info w3-card w3-center">
          <div class="profilebx-title maincolor">Pamela Paul S.</div>
          <div class="profilebx-cont">Legal Adviser</div>
          <div class="profilebx-socials">
              <a href="#" class="w3-hover-opacity"><i class="fab fa-facebook-f w3-text-blue"></i></a>
              <a href="#" class="w3-hover-opacity"><i class="fab fa-twitter w3-text-light-blue"></i></a>
              <a href="#" class="w3-hover-opacity"><i class="fab fa-whatsapp-square w3-text-green"></i></a>
              <a href="#" class="w3-hover-opacity"><i class="fab fa-linkedin maincolor"></i></a>
              <a href="#" class="w3-hover-opacity"><i class="fab fa-google w3-text-red"></i></a>
              
          </div>
        </div>

    </div>
</div>
 -->

</div>
</div>