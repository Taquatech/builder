


<div class="blockcolor setClassOnView gen-text-shadow" data-classOnView ="open" data-viewPadding="200" data-viewPart="true" data-removeOnHide="false" style="min-height:600px">

<!-- Main Title -->
   <h1 class="stp-title fadeIn">Get a Package <br/>in just 3 Steps</h1>

   <!-- Step Indicatores -->
    <div class="stp-stepindcont" id="getplans">
      <div class="stp-classindcont current done- fadeIn"><div class="stp-classindcont-inner middle"><i class="middle fa fa-check dis"></i><span class="dis middle">1</span></div></div>
      <div class="stp-joinline"></div>
      <div class="stp-classindcont default fadeIn"><div class="stp-classindcont-inner middle"><span class="dis middle">2</span><i class="middle fa fa-check dis"></i></div></div>
      <div class="stp-joinline"></div>
      <div class="stp-classindcont fadeIn"><div class="stp-classindcont-inner middle"><i class="middle fa fa-check dis"></i><span class="dis middle">3</span></div></div>
    </div>

<!-- Individual Step Boxes -->
    <div class="stp-indbox current">
    <h1 class="stp-title-sub fadeInUp">Select a Package</h1>
    <div class="w3-row-padding">
        <div class="w3-col l3 m6 s6">
            <button class="stp-box fadeInUp delay-0-4s" onclick="Plan.SelectPlan(this,'Food Club')"  style="background-image:url(images/stepbx/food.jpg)">
                 <img src="images/platinium.png" class="" />
                <div class="buttom-text">Food Club</div>
            </button>
        </div>
        <div class="w3-col l3 m6 s6">
        <button class="stp-box fadeInUp delay-0-8s" onclick="Plan.SelectPlan(this,'Secure My Rent')" style="background-image:url(images/stepbx/home.jpg)">
        <img src="images/gold.png" class="" />
                <div class="buttom-text">Secure My Rent</div>
            </button>
        </div>  
        <div class="w3-col l3 m6 s6">
        <button class="stp-box fadeInUp delay-1s" onclick="Plan.SelectPlan(this,'Get My Properties')"  style="background-image:url(images/stepbx/property.jpg)">
        <img src="images/silver.png" class="" />
                <div class="buttom-text">Get My Properties</div>
            </button>
        </div>
        <div class="w3-col l3 m6 s6">
        <button class="stp-box fadeInUp delay-1-2s" onclick="Plan.SelectPlan(this,'Open Market Plus')" style="background-image:url(images/stepbx/market.png)">
        <img src="images/bronze.png" class="" />
                <div class="buttom-text">Open Market Plus</div>
            </button>
        </div>
    </div>
    </div>


    <div class="stp-indbox">
    <button onclick="StepBox.Goto(0)" class="stp-indboxback fadeInLeft delay-0-2s"><i class="fas fa-arrow-left fa-fw"></i></button>
    <h1 class="stp-title-sub fadeInUp">Let's Know You</h1>
    <div class="w3-row-padding">
    <div class="w3-col l4 m3">
        <div class="stp-box fadeInUp delay-0-4s displan" style="background-image:url(images/bigslider/p7.jpg)">
        <img src="images/bronze.png" class="" />
                <div class="buttom-text">Bronze</div>
       </div>
        </div>
        <div class="w3-col l8 m9">
           <!-- Tab box -->
           <div class="stp-tabbox">
           <div class="w3-row  fadeInUp delay-0-6s">
                <div class="w3-col l3 m4 s6"><button data-body="mem-exist" class="stp-tabbtn current">Existing</button></div>
                <div class="w3-col l3 m4 s6"><button  data-body="mem-new" class="stp-tabbtn ">New</button></div>
            </div>
            <!-- Tab Bodies -->
            <div class="stp-tabbody  fadeInUp delay-0-8s">
                <!-- Ind Tab Body -->
                <div class="stp-indtabbody w3-row fadeInUp" id="mem-exist">
                <div class="w3-col m6">
                    <form action="javascript:void(0)" onsubmit="Plan.Verify()">
                <input type="text" class="stp-input" required id="mememailphone" placeholder="Email Address or Phone Number">
                <button  class="stp-genbtn blockcolor-btn  w3-margin-top w3-medium">
                 <span>Continue</span>
                 </button>
                 </form>
                </div>
                </div>

                <div class="stp-indtabbody fadeInUp w3-row" id="mem-new">
                <form action="javascript:void(0)" onsubmit="Plan.Register()">
                <div class="w3-col m6">
                
                
                <input type="email" class="stp-input" required placeholder="Email Address">
                <input type="tel" class="stp-input" required placeholder="Phone Number">
                
                </div>

                <div class="w3-col m6">
                <input type="text" class="stp-input" required placeholder="Full Name">
                <input type="date" class="stp-input" placeholder="Date of Birth: ">
                <!-- <input type="text" class="stp-input" placeholder="Referer ID"> -->
                
                </div>
                <div class="" style="clear:both"></div>
                <button class="stp-genbtn blockcolor-btn w3-margin-top w3-medium">
                 <span>Continue</span>
                 </button>
            </form>
                
                </div>


            </div>
        </div>
        </div>
   </div>
   </div>

   <div class="stp-indbox">
   <button onclick="StepBox.Goto(1)" class="stp-indboxback fadeInLeft delay-0-2s"><i class="fas fa-arrow-left fa-fw"></i></button>
    <h1 class="stp-title-sub fadeInUp">Make Payment</h1>
    <div class="w3-row-padding">
    <div class="w3-col l4 m3">
        <div class="stp-box fadeInUp delay-0-4s displan" style="background-image:url(images/bigslider/p7.jpg)">
        <img src="images/bronze.png" class="" />
                <div class="buttom-text">Bronze</div>
       </div>
        </div>
        <div class="w3-col l8 m9">
          <div class="stp-money  fadeInUp delay-0-8s">
         <span class="stp-money-currency">N</span><span class="stp-money-value">27,000</span><span class="stp-money-plan">Month</span>
          </div>
          <div class="stp-money-detailbx   fadeInUp delay-1s">
            <div class="stp-money-detail">
                <div class="stp-money-detail-title">Full Name</div><div class="stp-money-detail-value">Kejemilobi Abayomi</div><div style="clear:both"></div>
            </div>
            <div class="stp-money-detail">
                <div class="stp-money-detail-title">Phone Number</div><div class="stp-money-detail-value">07085980906</div><div style="clear:both"></div>
            </div>
            <div class="stp-money-detail">
                <div class="stp-money-detail-title">Payment Reference</div><div class="stp-money-detail-value">56475758ADX6</div><div style="clear:both"></div>
            </div>
         </div>
         <button class="stp-genbtn blockcolor-btn fadeInUp delay-1s w3-margin-top w3-medium w3-center">
                 <span>Make Payment</span>
                 </button>
   </div>
</div>
</div>


    <!-- General Button -->
    <div class="w3-center w3-padding-large w3-margin-top stp-genbtnbx fadeInUp delay-1-4s">
     <button class="stp-genbtn blockcolor-btn">
        <span>Know More About Our Packages</span>
     </button>
</div>
    
</div>