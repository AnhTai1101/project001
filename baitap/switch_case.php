<?php
/*array =["fade",
    "wipeleft",
    "wiperight",
    "wipeup",
    "wipedown",
    "slideleft",
    "slideright",
    "slideup",
    "slidedown",
    "circlecrop",
    "rectcrop",
    "distance",
    "fadeblack",
    "fadewhite",
    "radial",
    "smoothleft",
    "smoothright",
    "smoothup",
    "smoothdown",
    "circleopen",
    "circleclose",
    "vertopen",
    "vertclose",
    "horzopen",
    "horzclose",
    "dissolve",
    "pixelize",
    "diagtl",
    "diagtr",
    "diagbl",
    "diagbr",
    "hlslice",
    "hrslice",
    "vuslice",
    "vdslice"] 
    
    */

class SwithCaseHandle 
{
    private $inputsHandle = [];
    //khai bao du lieu mang tren cho class, tai constructor

    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->inputsHandle = ["fade",
        "wipeleft",
        "wiperight",
        "wipeup",
        "wipedown",
        "slideleft",
        "slideright",
        "slideup",
        "slidedown",
        "circlecrop",
        "rectcrop",
        "distance",
        "fadeblack",
        "fadewhite",
        "radial",
        "smoothleft",
        "smoothright",
        "smoothup",
        "smoothdown",
        "circleopen",
        "circleclose",
        "vertopen",
        "vertclose",
        "horzopen",
        "horzclose",
        "dissolve",
        "pixelize",
        "diagtl",
        "diagtr",
        "diagbl",
        "diagbr",
        "hlslice",
        "hrslice",
        "vuslice",
        "vdslice"];
    }
        // $this->inputsHandle  =["fade"=>function($input){
        //     return $this->fade($input);
        // }];
        

    
    // voi moi item trong mang da khai bao, can viet 1 function tuong ung de Viet hoa chu cai dau tien
    //vd: voi item "wipeup" se viet ham 

    function Handle( $input){
        if(in_array($input,$this->inputsHandle)){
            return ucfirst($input);
        }
    }   
    
    // fade
    function fade($input){
        return ucfirst($input);
    }
    // wipeleft
    function wipeleft($input){
        return ucfirst($input);
    }
    // wiperight
    function wiperight($input){
        return ucfirst($input);
    }
    // wipeup
    function wipeup($input){
        return ucfirst($input);
    }
    // wipedown
    function wipedown($input){
        return ucfirst($input);
    }
    // slideleft
    function slideleft($input){
        return ucfirst($input);
    }
    // slideright
    function slideright($input){
        return ucfirst($input);
    }
    // slideup
    function slideup($input){
        return ucfirst($input);
    }
    // slidedown
    function slidedown($input){
        return ucfirst($input);
    }
    // circlecrop
    function circlecrop($input){
        return ucfirst($input);
    }
    // rectcrop
    function rectcrop($input){
        return ucfirst($input);
    }
    // distance
    function distance($input){
        return ucfirst($input);
    }
    // fadeblack
    function fadeblack($input){
        return ucfirst($input);
    }
    // fadewhite
    function fadewhite($input){
        return ucfirst($input);
    }
    // radial
    function radial($input){
        return ucfirst($input);
    }
    // smoothleft
    function smoothleft($input){
        return ucfirst($input);
    }
    // smoothright
    function smoothright($input){
        return ucfirst($input);
    }
    // smoothup
    function smoothup($input){
        return ucfirst($input);
    }
    // smoothdown
    function smoothdown($input){
        return ucfirst($input);
    }
    // circleopen
    function circleopen($input){
        return ucfirst($input);
    }
    // circleclose
    function circleclose($input){
        return ucfirst($input);
    }
    // vertopen
    function vertopen($input){
        return ucfirst($input);
    }
    // vertclose
    function vertclose($input){
        return ucfirst($input);
    }
    // horzopen
    function horzopen($input){
        return ucfirst($input);
    }
    // horzclose
    function horzclose($input){
        return ucfirst($input);
    }
    // dissolve
    function dissolve($input){
        return ucfirst($input);
    }
    // pixelize
    function pixelize($input){
        return ucfirst($input);
    }
    // diagtl
    function diagtl($input){
        return ucfirst($input);
    }
    // diagtr
    function diagtr($input){
        return ucfirst($input);
    }
    // diagbl
    function diagbl($input){
        return ucfirst($input);
    }
    // diagbr
    function diagbr($input){
        return ucfirst($input);
    }
    // hlslice
    function hlslice($input){
        return ucfirst($input);
    }
    // hrslice
    function hrslice($input){
        return ucfirst($input);
    }
    // vuslice
    function vuslice($input){
        return ucfirst($input);
    }
    // vdslice
    function vdslice($input){
        return ucfirst($input);
    }
}

$test=new SwithCaseHandle();

echo $test->Handle('fade');
// ket qua mong cho: Vdslice