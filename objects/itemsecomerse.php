<?php $Itemsec = !isset($Itemsec)?[["Action"=>"#","Image"=>"images/stepbx/food.jpg","Title"=>"Item Title Here","NewPrice"=>"₦ 3,000 / Mth","OldPrice"=>"₦ 3,500 / Mth","Duration"=>"12 Month"]]:$Itemsec;
$ItemsecTitle = !isset($ItemsecTitle)?"Main Title":$ItemsecTitle;
?>

<div class="items-ec">
    <div class="main-title w3-xlarge"><?=$ItemsecTitle?></div>
    <div class="inner-cont-bx">
    <div class="items-table">
    <?php if(is_array($Itemsec)){
              foreach($Itemsec as $Item){    
            ?>
        <div class="items-cols">
           
            <a class="items-cont" href="<?=$Item['Action']?>">
              <div class="items-logo"><img class="" src="<?=$Item['Image']?>"/></div>
               <div class="items-title"><?=$Item['Title']?></div>
               <div class="items-newprice"><?=$Item['NewPrice']?></div>
               <div class="items-oldprice"><?=$Item['OldPrice']?></div>
               <div class="items-duration">Payable withen <span class="maincolor"><?=$Item['Duration']?></span></div>
            </a>
            
        </div>
        <?php }} ?>
    </div>
              </div>
</div>