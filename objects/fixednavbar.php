 <?php

$Data = (isset($Data) &&  count($Data) > 0)?$Data:[
    "Logo"=>["images/logo/iconsm_white.png","images/logo/logosm.png"],
    "LogoLink"=>"#",
    "Menus"=>[
        "Packages"=>[
            "Link"=>"javascript:void(0)",
            "Image"=>"images/imagecont/cover2.png",
            "SubMenus"=>[
                "Food Club"=>[
                    "Food on the table"=>[
                        "Logo"=>"fas fa-utensils",
                        "Link"=>"services#vision",
                        "Info"=>"This is a daily collection used to acquiring food stuff items and basic need provisions used daily by the family."
                    ],
                    "Food in the Store"=>[
                        "Logo"=>"fas fa-utensils",
                        "Link"=>"services#vision",
                        "Info"=>"This is a daily collection used to acquiring food stuff items and basic need provisions used daily by the family."
                    ]
                ],
                "SMR"=>[
                    "Food on the table"=>[
                        "Logo"=>"fas fa-bed",
                        "Link"=>"services#vision",
                        "Info"=>"This is a daily collection from the client for the purpose of solely settling of either house or shop rent on the due date."
                    ]
                ],
            "_BREAK_",
                "GMP"=>[
                    "Get My Properties"=>[
                        "Logo"=>"fas fa-university",
                        "Link"=>"services#vision",
                        "Info"=>"This is a collection from client solely for the purpose of acquiring properties of all sort and house hold."
                    ]
                ],
                "OMP"=>[
                    "Open Market Plus"=>[
                        "Logo"=>"fas fa-bullhorn",
                        "Link"=>"services#vision",
                        "Info"=>"This package will require our company to supply our registered client with goods from our various partners whom are importers to sell and supply to the end user. Under this condition, everyone is a marketer and a shop owner."
                    ]
                ]
            ]
        ],
        "Who We Are"=>[
            "Link"=>"javascript:void(0)",
            "Image"=>"images/logo/logo.png",
            "SubMenus"=>[
                "Our View"=>[
                    "Our Vision"=>[
                        "Logo"=>"fas fa-eye",
                        "Link"=>"whoweare#vision",
                        "Info"=>"To be an integral part of services delivery system providing vital ..."
                    ],
                    "Our Mission"=>[
                        "Logo"=>"fas fa-cogs",
                        "Link"=>"whoweare#vision",
                        "Info"=>"To attain excellence in service delivering; for the satisfaction .."
                    ]
                    ],
                "Our Benefit"=>[
                    "To Our Customers"=>[
                        "Logo"=>"fas fa-users",
                        "Link"=>"whoweare#vision",
                        "Info"=>"This platform will provide easy means, affordable conditions ..."
                    ],
                    "To Our Agents"=>[
                        "Logo"=>"fas fa-handshake",
                        "Link"=>"whoweare#vision",
                        "Info"=>"Our agents will also enjoy large publicity through our ..."
                    ]
                ],
                "_BREAK_",
                "Other Services"=>[
                    "Real Estate"=>[
                        "Logo"=>"fas fa-flag",
                        "Link"=>"whoweare#vision",
                        "Info"=>"We Invest in real estate, construction of building properties and plac them for our ... "
                    ],
                    "Comfort Amenities"=>[
                        "Logo"=>"fas fa-gavel",
                        "Link"=>"whoweare#vision",
                        "Info"=>"We assist in setting up basic life comfort amenities for our loyal clients and ..."
                    ],
                    "Finantial Capital"=>[
                        "Logo"=>"fas fa-gavel",
                        "Link"=>"whoweare#vision",
                        "Info"=>"We also engaging in other financial capital investments with ..."
                    ]
                ]
            ]
        ],
        "Our Contact"=>[
            "Link"=>"contact"
        ]
        ],
        "RightButton"=>["Markup"=>"Login","Action"=>""]
]

?>
 <!-- Nav Bar with Menu Fixed   -->
 <header class="nbwmf">
    <nav>
        <div class="nbwmf-logobx nbwmf-indbx">
            <!-- Logo -->
            <a class="nbwmf-logodark" href="<?=$Data['LogoLink'];?>"><img src="<?php if(isset($Data["Logo"][0]))echo $Data["Logo"][0]; ?>" alt="LOGO"></a>
            <a class="nbwmf-logowhite" href="<?=$Data['LogoLink'];?>"><img src="<?php if(isset($Data["Logo"][1])){echo $Data["Logo"][1];}else if(isset($Data["Logo"][0])){echo $Data["Logo"][0];} ?>" alt="LOGO"></a>
        </div>
        <!-- Menus -->
        <ul id="nbwmf-menu-bx" class="w3-hide-small w3-mobile  nbwmf-indbx fadeIn animated faster">
        <?php
            foreach($Data['Menus'] as $menu=>$details){
            ?>
                <li class="w3-mobile">
                    <a href="<?=$details["Link"]?>" class="w3-btn menulink ignore-body"><?=$menu?></a>
                    <?php  if(isset($details["SubMenus"]) && count($details["SubMenus"]) > 0){  ?>
                    <div class="nbwmf-dropdown w3-row-padding w3-card fadeIn">
                        <button class="closebtn w3-red w3-small w3-card heartBeat" onclick="this.parentElement.style.display='none'"><i class="fas fa-times fa-fw w3-hide-small"></i><i class="fas fa-chevron-left fa-fw w3-hide-large w3-hide-medium"></i></button>
                        <div class="w3-col m4 fadeInRight animated">
                            <a href="<?=$details["Link"]?>">
                            <h2 class="nbwmf-submenu-title"><?=$menu?></h2>
                            <img class="nbwmf-submenu-img w3-round w3-padding w3-border-grey" src="<?=$details["Image"]?>" >
                        </a>
                        </div>
                        <div class="w3-col m4 fadeInRight animated fast delay-0-5s">
                           <?php foreach($details["SubMenus"] as $submenu=>$subdet){ 
                            if(is_string($subdet) &&  $subdet == "_BREAK_"){
                                ?>
                        </div>
                        <div class="w3-col m4 fadeInRight animated fast delay-0-5s">
                                <?php
                                continue;
                            }   
                            ?>
                            <div class="nbwmf-submenu-link">
                                <div class="nbwmf-submenu-link-header w3-text-grey"><?=$submenu?></div>
                                <?php foreach($subdet as $sudetkey=>$subdetinfo){ ?>
                                <a class="nbwmf-submenu-link-item" href="<?=$subdetinfo["Link"]?>">
                                    <div class="nbwmf-submenu-link-item-title"><i class="<?=$subdetinfo["Logo"]?>"></i> <?=$sudetkey?></div>
                                    <div class="nbwmf-submenu-link-item-info w3-hide-small"><?=$subdetinfo["Info"]?>
</div>
                                </a>
                                <?php } ?>
                            </div>
                           <?php } ?>
                          
                    </div>
                    <?php } ?>
                </li>
            <?php
            }
        ?>       
        </ul>
        <!-- Botton -->
        <div class="nbwmf-buttonbx nbwmf-indbx">
        <?php if(isset($Data['RightButton'])) { ?>
         <!-- Login -->
          <button onclick="<?=$Data['RightButton']['Action']?>" class="w3-button w3-round w3-border-white w3-border nbwmf-exbtn gen-hover-color"><?=$Data['RightButton']['Markup']?></button>
        <?php } ?>
          <!-- Small Menu Icon -->
          <button class="w3-button w3-large w3-hover-none gen-hover-text-color w3-hide-large w3-hide-medium ignore-body" onclick="document.getElementById('nbwmf-menu-bx').classList.toggle('w3-hide-small')"><i class="fas fa-bars ignore-body"></i></button>
        </div>
        <div class="gen-clear-float"></div>
    </nav>
  </header>
  <!-- Nav Bar with Menu -->