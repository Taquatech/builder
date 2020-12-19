// Fixed Nave bar - nbwmf
(function(){
   document.addEventListener("scroll",function(e){
    var y = document.documentElement.scrollTop;
   // alert('aaa');
    if (y > 150) {
        document.body.classList.add("nbwmf-block");

    } else {
        document.body.classList.remove("nbwmf-block");
    }
   })
})();

(function(){
    allbbwa = {};
    //Manage slide animation
     bbwa = function(id){
        var me = this;
        allbbwa[id] = this;
       // this.duration = param.Duration || 4; // in sec
        //get main banner
         this.Banner = document.getElementById(id);

         //get all bgs
         this.Bgs = this.Banner.getElementsByClassName('bbwa-banner');
         //get all bgs
         this.conts = this.Banner.getElementsByClassName('bbwa-indcont');
         this.maxlen = this.Bgs.length > this.conts.length?this.Bgs.length:this.conts.length;
          this.current = this.maxlen;
          //controls
this.ctrLeft = this.Banner.getElementsByClassName('bbwa-arrow-left')[0];
this.ctrRight = this.Banner.getElementsByClassName('bbwa-arrow-right')[0];
this.ctrLeft.setAttribute('data-owner',id);
this.ctrLeft.onclick = function(){allbbwa[this.getAttribute("data-owner")].Prev()};
this.ctrRight.setAttribute('data-owner',id);
this.ctrRight.onclick = function(){allbbwa[this.getAttribute("data-owner")].Start()};

        //form all the ind
        this.Inds = this.Banner.getElementsByClassName('bbwa-anim-inds')[0];
        this.Inds.innerHTML = '';
        for(let a = 0; a<this.maxlen ; a++){
            //document.getElementById().insertAdjacentElement
            var newind = document.createElement('div');
            newind.className = "bbwa-anim-ind";
            if(a==0)newind.className += ' active';
            newind.onclick = function(){allbbwa[this.getAttribute("data-owner")].Start(this.getAttribute("data-position"))};
            newind.setAttribute('data-position',a);
            newind.setAttribute('data-owner',id);
          //  this.Inds.insertAdjacentHTML('beforeend','<div class="bbwa-anim-ind">&nbsp;</div>');
          this.Inds.insertAdjacentElement('beforeend',newind);

        }
        //overwrite Inds to just added indicators
        this.Inds = this.Banner.getElementsByClassName('bbwa-anim-ind');

        this.Prev = function(){
            //alert(me.current - 1);
             me.Start(me.current - 1);
        }

        this.Start = function(ind){
            //clear the timmer
            clearTimeout(me.Timmer);
            var prev = me.current;
            //console.log("prev:"+me.current);
            me.current = (typeof ind != "undefined")?Number(ind):(me.current + 1);
if(me.current >= me.maxlen){
me.current = 0;
}else if(me.current < 0){
me.current = me.maxlen - 1;
}

          //me.current = me.current >= me.maxlen?0:(me.current++);
          //console.log("cur:"+me.current);
          //console.log("----------------------");
          //bgs
          if(typeof me.Bgs[prev] != "undefined" && typeof me.Bgs[me.current] != "undefined"){
              me.Bgs[prev].classList.add('w3-hide');
              me.Bgs[me.current].classList.remove('w3-hide');
          }

          //bgs
          if(typeof me.conts[prev] != "undefined" && typeof me.conts[me.current] != "undefined"){
              me.conts[prev].classList.add('w3-hide');
              me.conts[me.current].classList.remove('w3-hide');
          }

          //ind
          if(typeof me.Inds[prev] != "undefined" && typeof me.Inds[me.current] != "undefined"){
              me.Inds[prev].classList.remove('active');
              me.Inds[me.current].classList.add('active');
          }
          
          //display next slide
           me.Timmer = setTimeout(me.Start,8000);
        }
    }
  })();

  
BigSlider = {
    IsArray:function(obj){
        if (Array.isArray){ //if isArray is supported
        return Array.isArray(obj)?true:false;
      }else{
          try{ //Check if it is an array, by running native array function on the Obj. if no error occur, return 'array' else return the type of the element/Argurment
              var a = obj.sort();
              var b = obj.slice(0);
              return true;
          }catch(e){
              return false;
          }
      }
    
    },
    //Slider
    CreateSlider:function(id){
        //create a new slider and start it - 'showslider'
        BigSlider.Sliders[id] = new BigSlider.MoveSlider(id);
        //BigSlider.Sliders[id].Slide();
        return BigSlider.Sliders[id];
            },
            Sliders : [],
            MoveSlider:function (id) {
                this.Target = document.getElementById(id);
                if(this.Target == null)return null;
                this.Indicators = (function(sid){
                  //get all the indicators
                  var indcs = document.getElementsByClassName(sid+"_ind");
                    if(indcs != null){
                       // if(!BigSlider.IsArray(indcs) )indcs = [indcs];
                         for(var w=0; w<indcs.length;w++){
                         var cindcs = indcs[w]; //get the indicator
                         //console.log(cindcs);
                            var snum = cindcs.getAttribute('data-slide'); //get the slide number
                          cindcs.id = sid+"_ind"+snum; //set its id
                          //assing method to it (slide to the slide when click)
                            cindcs.addEventListener('click',function(e){
                              var iobj = e.target;
                              var num = iobj.getAttribute('data-slide');
                              var sliderid = iobj.id.split("_")[0];
                              BigSlider.Sliders[sliderid].Slide(num);
                            })
                         }
                         return indcs;
                    }
                })(id);
                this.Controls = (function(sid){
                    //var rtn = [];
                  //get the prev button
                   var prevbtn = document.getElementById(sid+"_prev");
                   if(prevbtn != null){
                    prevbtn.Assign('click',function(e){
                        var iobj = e.target;
                        var sliderid = iobj.id.split("_")[0];
                        //alert(sliderid);
                        BigSlider.Sliders[sliderid].Prev();
                        if (e && e.preventDefault)
                        {
                            e.preventDefault();
                        }
                        else
                        {
                            window.event.returnValue = true;
                        }
                        return false;
                    });
                   }
                   var nextbtn = document.getElementById(sid+"_next");
                   if(nextbtn != null){
                    nextbtn.Assign('click',function(e){
                        var iobj = e.target;
                        var sliderid = iobj.id.split("_")[0];
                        BigSlider.Sliders[sliderid].Next();
                    });
                   }
                   return [prevbtn,nextbtn];
                })(id);
                this.Curent = 1;
                this.Old = 0;
                this.delay = 3000;
                this.totalcont = 2; //maximum is 4
                this.Timmer = null;
                this.Prev = function(){
                    var prevnum = this.Curent - 1;
                    if(prevnum == 0)prevnum = 2;
                    //alert(prevnum);
                   this.Slide(prevnum,this);
                }
                this.Next = function(){
                    var nextnum = this.Curent + 1;
                    if(nextnum > 2)nextnum = 1;
                   this.Slide(nextnum,this);
                }
                this.Slide = function (next, obj) {
        
                    obj = typeof obj == "undefined" ? this : obj;
        
                    obj.Curent = typeof next == "undefined" ? obj.Curent : next;
                    // alert(obj.Target)
                    if (obj.Target == null) return;
                    if (obj.Timmer != null) { clearTimeout(obj.Timmer); obj.Timmer = null }
                    /* transition: all 800ms ease 0s; transform: translate3d(-1010px, 0px, 0px); */
                    var nowmL = (obj.Curent - 1) * 100;
                    obj.Target.style.marginLeft = "-" + nowmL + "%";
                    obj.Target.style.transition = "all 800ms ease 0s";
                   // console.log(obj.Target.id + "_ind" + obj.Curent);
                    document.getElementById(obj.Target.id + "_ind" + obj.Curent).classList.add('active');
                    if (obj.Old > 0) document.getElementById(obj.Target.id + "_ind" + obj.Old).classList.remove('active');
                    //set the indicator
                    obj.Old = obj.Curent;
                    if (obj.Curent == 2) {
                        obj.Curent = 1;
                    } else {
                        obj.Curent++;
                    }
                    obj.Timmer = setTimeout(obj.Slide, obj.delay, obj.Curent, obj);
        
                }
            }
    
    
    }

    //Tab Box
    var Tabber = {
        LastTab : 1,
    Shows:function (tab){
       // console.log(tab);
        if(Tabber.LastTab != tab){
            _("tabcont_"+Tabber.LastTab).classList.remove('active');
            _("tabbtn_"+Tabber.LastTab).classList.remove('active');
        }
        _("tabcont_"+tab).classList.add('active');
            _("tabbtn_"+tab).classList.add('active');
            Tabber.LastTab = tab;
    }
    }

    // Dynamic Table
    DynamicTable ={
        DelayTimmer:{},
        Filter:serachbx=>{
            //get its table element
            tbid = serachbx.getAttribute("data-table");
             var serval = serachbx.value;
            if(tbid != null && _Trim(tbid) != ""){
                if(typeof DynamicTable.DelayTimmer[tbid] != _UND && DynamicTable.DelayTimmer[tbid] != null){
                  clearTimeout(DynamicTable.DelayTimmer[tbid]);
                  DynamicTable.DelayTimmer[tbid] = null
                }
               //try to the get the table element
               var tbelem = _(tbid);
               if(_IsFound(tbelem)){
                DynamicTable.DelayTimmer[tbid] = setTimeout(()=>{
                  //get all the rows
                  var tbrws = tbelem.rows;
                  if(tbrws.length > 0){
                      
                      for(let rw=0,tblen=tbrws.length;rw<tblen;rw++){
                        let todisplay = false; //determin if roll will be displayed
                          //get the cells
                          var ceslls = tbrws[rw].cells;
                          if(ceslls.length > 0){
                             for(let s=0,clen=ceslls.length;s<clen;s++){
                                 //check if to be ignored
                                 let ignorecell = ceslls[s].getAttribute("data-notSearchable");
                                 if((ignorecell != null && _Trim(ignorecell.toLowerCase()) == "true") || ceslls[s].tagName.toLowerCase() == "th"){todisplay = true;continue;}
                                 var seenind = ceslls[s].textContent.toLowerCase().indexOf(serval.toLowerCase());
                                 if(seenind > -1){
                                     todisplay = true;
                                 //replace the text content
                                  //get the real content
                                  let realcont = ceslls[s].textContent.substr(seenind,serval.length);
                                  ceslls[s].innerHTML = ceslls[s].textContent.replace(realcont,'<span class="dy-search-select">'+realcont+'</span>')
                                 }else{
                                     //convert back to text (remove the hilight if exist)
                                     ceslls[s].innerHTML = ceslls[s].textContent;
                                 }

                            } 
                          }
                          if(todisplay){
                            tbrws[rw].classList.remove('dy-search-hide');  
                          }else{
                            tbrws[rw].classList.add('dy-search-hide');  
                          }
                          

                      }
                  }
                },200) 
               }
            }
        }
    }

    var StepBox = {
        CurrentIndex:0,
        TotalIndex:2,
        Length:3,
        Indicators:null,
        CurrentIndicator:null,
        BoxElements:null,
        CurrentBoxElements:null,

        Next:(func)=>{
          
              //get the next indicator
              var nxt = StepBox.CurrentIndex + 1;
              if(nxt >  StepBox.TotalIndex)return;
                StepBox.Goto(nxt,func)
              
          

        },
        Goto:(Ind,func)=>{
            func = func || null;
            if(StepBox.Indicators == null){
                var indbx = _('getplans');
                StepBox.Indicators = indbx.getElementsByClassName('stp-classindcont');
                if(StepBox.Indicators.length < 1)return;
                StepBox.CurrentIndicator = StepBox.Indicators[0];
                //if(StepBox.Indicators == null){
                   // var indbx = _('getplans');
                    StepBox.BoxElements = indbx.parentElement.getElementsByClassName('stp-indbox');
                    StepBox.CurrentBoxElements = StepBox.BoxElements[0];
                //}
            }

            

            if(StepBox.Indicators.length > 0){
                //get the current Indicator
                if(typeof StepBox.Indicators[Ind] == "undefined" || StepBox.Indicators[Ind] == StepBox.CurrentIndicator)return;
               if(StepBox.CurrentIndicator != null){
                   StepBox.CurrentIndicator.classList.remove("current");
                   StepBox.CurrentIndicator.classList.add("done");
               }
                

                StepBox.Indicators[Ind].classList.remove('done');
                StepBox.Indicators[Ind].classList.add("current");

                //box
                StepBox.CurrentBoxElements.classList.remove('current');
                StepBox.BoxElements[Ind].classList.add('current');

                StepBox.CurrentIndicator = StepBox.Indicators[Ind];
                StepBox.CurrentBoxElements = StepBox.BoxElements[Ind];

                StepBox.CurrentIndex = Ind;
               if(func != null)func.call(window);
            }

        
        },
        Prev:()=>{
            var nxt = StepBox.CurrentIndex - 1;
            if(nxt <  0)return;
              StepBox.Goto(nxt)
        },
        First:()=>{

        }
    }
    
    

  function StartAnim(){
      if(_IsFound(_('bbwa-main-1'))){
        nbbwa = new bbwa('bbwa-main-1');nbbwa.Start();  
      }
    
      if(_IsFound(_('showslider'))){
        var showslider = BigSlider.CreateSlider('showslider');
        if(showslider != null)showslider.Slide();
      }
    
  }

  var Plan = {
    CurrentPlan:null,
    CurrentPlanStr:"",
    DisplayPlan:null,

    SelectPlan:(obj,plan)=>{
        Plan.CurrentPlan = obj;
        Plan.CurrentPlanStr = plan;
        //change the other pages plan display
        if(Plan.DisplayPlan == null){
            Plan.DisplayPlan = _('displan');
        }
        Plan.DisplayPlan.forEach(element => {
            element.style.backgroundImage = obj.style.backgroundImage;
            element.firstElementChild.src = obj.firstElementChild.src;
            element.firstElementChild.nextElementSibling.textContent = plan;
        });
        StepBox.Goto(1);
    },
    Verify:()=>{
        //alert('aaa');
      var mememailphone = _('mememailphone').value;
      if(_Trim(mememailphone) == "")return;

      //check from db

      StepBox.Goto(2);
      
    },

    Register:()=>{
        //validate

      //send data to server

      StepBox.Goto(2);
      
    }
}

  
/*   document.addEventListener( "DOMContentLoaded", StartAnim);
  window.addEventListener( "load", StartAnim );  */

  onDOMReady(()=>{
    StartAnim();
      var stepbx = _('stp-tabbtn');
      if(_IsFound(stepbx)){stepbx.forEach(elem=>{
        elem.addEventListener("click",e=>{
            var bodyid = elem.getAttribute("data-body");
            curs = elem.parentElement.parentElement.getElementsByClassName("current");
            if(curs.length > 0){
                curs[0].classList.remove('current');
            }
            elem.classList.add("current");
            
            var body = _(bodyid);
            body.parentElement.insertBefore(body, body.parentElement.childNodes[0]);
        })
      })}

      var tabbtn = _('tabbtntabbtn');
      if(_IsFound(tabbtn)){_Assign('click',tabbtn,function(e){
        var tbtn = e.target;
       // alert(e.target.id);
        var wknum = tbtn.id.split("_")[1];
       Tabber.Shows(wknum);
       //disable the default effect of a tag when click
       return _StopDefault(e);
     })}

     var tabbtnsel = _('tabbtn_select');
     if(_IsFound(tabbtnsel)){ _Assign('change',tabbtnsel,function(e){
         var tbtn = e.target;
         Tabber.Shows(tbtn.options[tbtn.selectedIndex].value);
      })}

    var dytableSearch = _('dy-table-search');
    if(_IsFound(dytableSearch)){ _Assign('input',dytableSearch,function(e){
        var searchbtn = e.target;
        DynamicTable.Filter(searchbtn);
     })}

     var TableHideBtn = _('dy-table-btn');
    if(_IsFound(TableHideBtn)){ _Assign('click',TableHideBtn,function(e){
        var thebtn = e.currentTarget;
        var tbid = thebtn.getAttribute("data-table");
        console.log(tbid);
        if(tbid != null && _Trim(tbid) != ""){
            // thebtn.parentElement.parentElement.parentElement.parentElement.classList.toggle('dy-table-viewall'); 
            _(tbid).classList.toggle('dy-table-viewall'); 
        }
        
     })}

//Menu link dropdown display
     var menulink = _('menulink');
     //console.log(menulink);
      if(_IsFound(menulink)){_Assign('click',menulink,function(e){
        var mlink = e.target;
        var drpdwn = _('nbwmf-dropdown');
        if(_IsFound(drpdwn)){
            if(!_IsArray(drpdwn))drpdwn=[drpdwn];
            drpdwn.forEach(drpd=>{
                if(mlink.nextElementSibling != drpd){
                   drpd.style.display="none"; 
                }
                
            })
        }
        mlink.nextElementSibling.style.display=(mlink.nextElementSibling.style.display=='none' || mlink.nextElementSibling.style.display=='')?"block":'none';
        //document.getElementById().nextElementSibling
       //disable the default effect of a tag when click
       return _StopDefault(e);
     })}

     _Assign('click',document.body,(e)=>{
         if(!e.target.classList.contains('ignore-body')){
            document.getElementById('nbwmf-menu-bx').classList.add('w3-hide-small');
            var ndrp = _('nbwmf-dropdown');
            if(_IsFound(ndrp)){
                if(!_IsArray(ndrp))ndrp=[ndrp];
                ndrp.forEach(drp=>{
                    drp.style.display="none"; 
                })
            }
             //document.getElementById('nbwmf-menu-bx').classList.add('w3-hide');
            //document.getElementById('nbwmf-menu-bx').style.display='none';
         }
        
    });
     //
  })

