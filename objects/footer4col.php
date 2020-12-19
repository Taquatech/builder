<?php
$Data = (isset($Data) &&  count($Data) > 0)?$Data: [
    "Logo"=>"",
    "Columns"=>[
        [
            "Title"=>"Title1",
            "Links"=>[
                ["Link"=>"#","Markup"=>"Packages"],
                ["Link"=>"#","Markup"=>"Who we are"],
                ["Link"=>"#","Markup"=>"Contact Us"],
                ["Link"=>"#","Markup"=>"Home"]
            ]
        ],
        [
            "Title"=>"Title2",
            "Links"=>[
                ["Link"=>"#","Markup"=>"Packages"],
                ["Link"=>"#","Markup"=>"Who we are"],
                ["Link"=>"#","Markup"=>"Contact Us"],
                ["Link"=>"#","Markup"=>"Home"]
            ]
        ]
        ,
        [
            "Title"=>"Title3",
            "Links"=>[
                ["Link"=>"#","Markup"=>"Packages"],
                ["Link"=>"#","Markup"=>"Who we are"],
                ["Link"=>"#","Markup"=>"Contact Us"],
                ["Link"=>"#","Markup"=>"Home"]
            ]
        ]
    ]
];

?>
<div class="footer4col gen-text-color blockcolor">
    <div class="w3-row">
        <div class="w3-col m3 footer4col-logo">
                <a href="#" class="w3-display-middle"><img src="<?php echo isset($Data['Logo'])?$Data['Logo']:"" ?>" alt="LOGO"></a>
                
                <!-- <p class="w3-text-grey">At Brook Hall Schools, we help your child develop high self-esteem by providing self-help skills in a safe and nurturing environment that will foster love of learning and intelligence while relating with other individuals.</p> -->
        </div>
        <?php  if(isset($Data['Columns']) && count($Data['Columns']) > 0){
     foreach($Data['Columns'] as $indcol){
    ?>
        <div class="w3-col m3 footer4col-links">
            <h2><?php echo isset($indcol['Title'])?$indcol['Title']:"" ?></h2>
            <ul>
            <?php  if(isset($indcol['Links']) && count($indcol['Links']) > 0){
        foreach($indcol['Links'] as $link){
    ?>
                <li><a href="<?php echo isset($link['Link'])?$link['Link']:"" ?>"><?php echo isset($link['Markup'])?$link['Markup']:"" ?></a></li>
                <?php }} ?>
                <!-- 
                    <li><a href="#">Who we are</a></li>
                <li><a href="#">Academics</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Home</a></li> -->
            </ul>
        </div>
     <?php }} ?>
      
    </div>
</div>