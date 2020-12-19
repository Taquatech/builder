<?php 
global $root;
?>
 <!-- Regular shows -->
 <div class="regshows blockcolor">
     <div class="tabheader w3-hide-small"><div><small>2020/2021</small></div><div>School Calendar</div></div>
     <div class="tabheader w3-hide-large w3-hide-medium w3-center"><div><small>2020/2021</small></div><div>School Calendar</div></div>
    <div class="tabbx">
        <ul class="tabs w3-hide-small">
                <li><a href="javascript:void(0)" id="tabbtn_1" class="tabbtntabbtn active">First Term</a></li>
                <li><a href="javascript:void(0)" id="tabbtn_2" class="tabbtntabbtn">Second Term</a></li>
                <li><a href="javascript:void(0)" id="tabbtn_3" class="tabbtntabbtn">Third Term</a></li>
               
        </ul>
        <div class="clear"></div>
        <div>
            <div class=" w3-hide-large w3-h ide-medium w3-margin">
<h3 style="color:#FFF; font-family: inherit">Select a Term</h3>
<select class="w3-select tabbtnselect" id="tabbtn_select" >
<option value="1">First Term</option>
<option value="2">Second Term</option>
<option value="3">Third Term</option>
</select>
            </div>

        </div>
    </div>
    <div class="tabconts w3-padding">
        <!-- Monday Content -->
      <div class=" active fadeIn animated" id="tabcont_1">
        <img src="images/platinium.png" class="inchbay-plan-icon heartBeat animated" />
          <?php 
          //include "dynamictable.php";
          include "writer.php";
          
          $planpage  = [
            "SearchBox"=>"School Calendar",
            "th"=>["EVENT","START","END"],	 	 	 
             ["Resumption","Mon, 7 Sep 2020",""],
             ["Mid Term Break","Wed, 19 Oct 2020","Sun, 23 Sun 2020"],
             ["Fee Drive","Thu, 18 Oct 2020","Mon, 20 Nov 2020"],
             ["Term Payment Ends","Mon, 20 Nov 2020",""],
             ["Examination","Mon, 3 Dec 2020","Fri, 18 Dec 2020"],
             "Hide"=>[],
             ["Result Collection","Fri, 20 Dec 2020",""],
             ["End of the Year Party","Fri, 20 Dec 2020",""],
             ["Christmas Break","Fri, 20 Dec 2020","Mon, 8 Jan 2021"],

            
            "Toggler"=>["View All","View Less"]
            ];
            DynamicTable("schcalendar1",$planpage,3);
          //print_r($tablecont);
          
          ?>
        
      </div>
      <!-- Teusday -->
      <div class=" fadeIn animated" id="tabcont_2">
            <?php
$planpage2  = [
  "SearchBox"=>"School Calendar",
  "th"=>["EVENT","START","END"],	 	 	 
   ["Resumption","Mon, 7 Sep 2020",""],
   ["Mid Term Break","Wed, 19 Oct 2020","Sun, 23 Sun 2020"],
   ["Fee Drive","Thu, 18 Oct 2020","Mon, 20 Nov 2020"],
   ["Term Payment Ends","Mon, 20 Nov 2020",""],
   ["Examination","Mon, 3 Dec 2020","Fri, 18 Dec 2020"],
   "Hide"=>[],
   ["Result Collection","Fri, 20 Dec 2020",""],
   ["End of the Year Party","Fri, 20 Dec 2020",""],
   ["Christmas Break","Fri, 20 Dec 2020","Mon, 8 Jan 2021"],

  
  "Toggler"=>["View All","View Less"]
  ];
  DynamicTable("schcalendar2",$planpage2,3);

?>
        </div>

        <!-- Wednessday -->
      <div class=" fadeIn animated" id="tabcont_3">
            <?php
$planpage3  = [
  "SearchBox"=>"School Calendar",
  "th"=>["EVENT","START","END"],	 	 	 
   ["Resumption","Mon, 7 Sep 2020",""],
   ["Mid Term Break","Wed, 19 Oct 2020","Sun, 23 Sun 2020"],
   ["Fee Drive","Thu, 18 Oct 2020","Mon, 20 Nov 2020"],
   ["Term Payment Ends","Mon, 20 Nov 2020",""],
   ["Examination","Mon, 3 Dec 2020","Fri, 18 Dec 2020"],
   "Hide"=>[],
   ["Result Collection","Fri, 20 Dec 2020",""],
   ["End of the Year Party","Fri, 20 Dec 2020",""],
   ["Christmas Break","Fri, 20 Dec 2020","Mon, 8 Jan 2021"],

  
  "Toggler"=>["View All","View Less"]
  ];
  DynamicTable("schcalendar3",$planpage3,3);

?>
        </div>

        <!-- Thursday 
      <div class=" fadeIn animated" id="tabcont_4">
            Bronze
        </div>
-->

    </div>
</div>