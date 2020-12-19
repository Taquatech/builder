<?php

class Builder{
    private $myDir = ""; //the directory of the builder
    private $callerDir = ""; //the direcory of the caller script
    private $headData = []; //website head datas
    private $headMk = "";
    private $builderRoot = "../builder/";
    
    function __construct(){
       
        //set default value
      $this->callerDir = $_SERVER['PHP_SELF'];
      $this->myDir = __DIR__;
      $this->headData = [
          "__BPNGIcon"=>"",
          "__BTitle"=>"Welcome",
          "__BCSS"=>[
              "FA"=>"./../LIB/FA5/css/fontawesome-all.min.css",
              "W3"=>"./../LIB/W3CSS4/w3.css",
              "Animate"=>"./../LIB/Animate/animate.css",
              "Main"=>$this->builderRoot."css/main.css"
          ],
          "__BJS"=>[
            "AimLite"=>"./../LIB/AimLite/aimlite.js",
            "Main"=>$this->builderRoot."js/main.js"
          ],
          "__BBodyAttr"=>""
            
        ];

        $this->bodyData = [];
        
    }

   

    //*************HTML_Open/Head/Body Open Section************** */
    //Set the Title
    public function Title($title="Welcome"){
        $this->headData['__BTitle'] = $title;
    }

    //Set the Icon
    public function Icon($icon=""){
        $this->headData['__BPNGIcon'] = $icon;
    }

    //Set the Stylesheet
    public function StyleSheet($sheet=[]){
        $this->headData['__BCSS'] = array_merge($this->headData['__BCSS'],$sheet);
    }

    //Overide required style sheets
    //1.Font awsome
    public function FontAwesome($sheet=""){
        if(trim($sheet)=="")$sheet="./../LIB/FA5/css/fontawesome-all.min.css";
        $this->headData['__BCSS']["FA"] = $sheet;
    }
    //2.w3 css
    public function W3($sheet=""){
        if(trim($sheet)=="")$sheet="./../LIB/W3CSS4/w3.css";
        $this->headData['__BCSS']["W3"] = $sheet;
    }

    //3.Main css
    public function MainCSS($maincss=""){
        if(trim($maincss)=="")$maincss=$this->builderRoot."css/main.css";
        $this->headData['__BCSS']["Main"] = $maincss;
    }

     //Set the JS
     public function JavaScript($js=[]){
        $this->headData['__BJS'] = array_merge($this->headData['__BJS'],$js);
    }

    //Overide required js script
    //1.Am=im Lite
    public function AimLite($aiml=""){
        if(trim($aiml)=="")$aiml="./../LIB/AimLite/aimlite.js";
        $this->headData['__BJS']["AimLite"] = $aiml;
    }
    //2.main js
    public function MainJS($mainjs=""){
        if(trim($mainjs)=="")$mainjs=$this->builderRoot."js/main.js";
        $this->headData['__BJS']["Main"] = $mainjs;
    }

    //Write the Head section
    private function WriteHead(){
      //ob_start();
      
      $headdata = $this->headData;
      include $this->myDir."/script/head.php";
     
    }

    public function SetBuilderRoot($url="../builder/"){
        $this->builderRoot = $url;
        //reset default required file
        $this->MainJS($url."js/main.js");
        $this->MainCSS($url."css/main.css");
    }
    //*************Head Section************** */

    // **************Foot Section **************/
    private function WriteFoot(){
        //ob_start();
        //$headdata = $this->headData;
        include $this->myDir."/script/foot.php";
       
      }
    // **************Foot Section **************/


    // **************Body Section **************/
    public function Add($name="",$data=""){
       // echo "xxsx";
        if(trim($name) == ""){
            $this->bodyData[]=$data;
        }else{
            if(isset($this->bodyData[$name])){
                unset($this->bodyData[$name]);
            }
            $this->bodyData[$name]=$data;
        }
   
    }
    public function Get($name="",$data=""){
        if(trim($name) == "" && is_string($data) && trim($data) == "")return "";
         ob_start();
         $this->WriteItem($name,$data);
         return ob_get_clean();
     }
     
    private function WriteBody(){
        $bodyData = $this->bodyData;
       foreach($this->bodyData as $key=>$data){
           $this->WriteItem($key,$data);
       }
    }

    private function WriteItem($key,$Data){
      
        if(is_string($key) && trim($key) != "" && file_exists($this->myDir."/objects/".strtolower($key).".php")){
            //$Data = $data;
            include $this->myDir."/objects/".strtolower($key).".php";
           }else{
               if(is_string($Data)){
                   echo $Data;
               }
           }
           unset($Data);
    }

    // **************Body Section **************/


    // ********* Builder *****************/
    public function Build(){
        $this->WriteHead();
        $this->WriteBody();
        $this->WriteFoot();
    }
    // ********* Builder *****************/

}

$Website = new Builder();



?>