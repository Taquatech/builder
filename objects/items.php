<?php $Items = !isset($Data)?[["Action"=>"#","Logo"=>"plane","Title"=>"Item Title Here","Color"=>""]]:$Data ?>

<div class="items">
    <div class="items-table">
    <?php if(is_array($Items)){
              foreach($Items as $Item){    
            ?>
        <div class="items-cols">
           
            <a class="items-cont" href="<?=$Item['Action']?>">
              <div class="items-logo mainbgcolor <?=$Item['Color']?>"><i class="fas fa-<?=$Item['Logo']?> w3-display-middle"></i></div>
               <div class="items-title"><?=$Item['Title']?></div>
            </a>
            
        </div>
        <?php }} ?>
    </div>
</div>