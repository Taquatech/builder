<?php
//Start Writting
function StartWritting(){
    ob_start();
}

function EndWritting(){
    echo ob_get_clean();
}
//function to write data
function WriteRow($inddata = [],$tag = "td",$class = ""){
    if(is_numeric($tag))$tag = "td";
    ?>
    <tr class="<?=$class?>">
    <?php
        foreach($inddata as $td){
            ?>
           <<?=$tag?> ><?=$td?></<?=$tag?>>
            <?php
        }
    ?>
          </tr>

   <?php 
}
 //function to write table (Dynamic table object)
 function DynamicTable($id,$data = [],$maxCol = 2){
     $starthiding = false;
     if(!isset($id) || count($data) == 0)return;
     ?>
    <table class="dy-table w3-card" id="<?=$id?>">

     <?php
     //llopp throuhh all data to form table
     foreach($data as $key=>$inddata){
       if(is_string($key)){
           //get the real key part for multible occurence postfix _something
           $keyarr = explode("_",$key);
           $key = $keyarr[0];
           if($key == "SearchBox"){ //if the search box
             ?>

                <tr>
                      <th colspan="<?=$maxCol?>">
                          <form class="search-form">
                            <div>
                                <input placeholder="Search <?=$inddata?>" class="dy-table-search" data-table="<?=$id?>" /><i class="fas fa-search"></i> 
                            </div>
                         </form>
                      </th>
                  </tr>
           <?php  
           }else if($key == "Toggler"){
            ?>
                <tr>
                      <th colspan="<?=$maxCol?>"><button class="dy-table-btn" data-table="<?=$id?>"><span><?=$inddata[0]?></span><span><?=$inddata[1]?></span> <i class="fas fa-chevron-down"></i><i class="fas fa-chevron-up"></i></button></th>
                  </tr>
            <?php
          }else if($key == "Hide"){
              $starthiding = true;
           
           }else{
               if($starthiding){
                WriteRow($inddata,$key,"dy-table-hidable fadeInDown animated");
               }else{
                  WriteRow($inddata,$key); 
               }
            
           }
           
       }else{
        // WriteRow($inddata);
        if($starthiding){
            WriteRow($inddata,$key,"dy-table-hidable fadeInDown animated");
           }else{
              WriteRow($inddata,$key); 
           }
       }
     }


     ?>
    </table>
     <?php

 }

?>