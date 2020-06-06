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
    public $inputs =["fade",
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
    "vdslice"] ;
    //khai bao du lieu mang tren cho class, tai constructor
    
    // voi moi item trong mang da khai bao, can viet 1 function tuong ung de Viet hoa chu cai dau tien
    //vd: voi item "wipeup" se viet ham 

    function Handle( $input){
        $inputs = $this->inputs;
        $test = 0;
        foreach($inputs as $val){
            if($val === $input){
                $test++;
            }
        }
        if($test == 0){
            return "Không tồn tại";
        }
        switch($input){
            case 'fade':
                return $this->fade($input);
            break;
            case 'wipeleft':
                return $this->wipeleft($input);
            break;
            case 'wiperight':
                return $this->wiperight($input);
            break;
            case 'wipeup':
                return $this->wipeup($input);
            break;
            case 'wipedown':
                return $this->wipedown($input);
            break;
            case 'slideleft':
                return $this->slideleft($input);
            break;
            case 'slideright':
                return $this->slideright($input);
            break;
            case 'slideup':
                return $this->slideup($input);
            break;
            case 'slidedown':
                return $this->slidedown($input);
            break;
            case 'circlecrop':
                return $this->circlecrop($input);
            break;
            case 'rectcrop':
                return $this->rectcrop($input);
            break;
            case 'distance':
                return $this->distance($input);
            break;
            case 'fadeblack':
                return $this->fadeblack($input);
            break;
            case 'fadewhite':
                return $this->fadewhite($input);
            break;
            case 'radial':
                return $this->radial($input);
            break;
            case 'smoothleft':
                return $this->smoothleft($input);
            break;
            case 'smoothright':
                return $this->smoothright($input);
            break;
            case 'smoothup':
                return $this->smoothup($input);
            break;
            case 'smoothdown':
                return $this->smoothdown($input);
            break;
            case 'circleopen':
                return $this->circleopen($input);
            break;
            case 'circleclose':
                return $this->circleclose($input);
            break;
            case 'vertopen':
                return $this->vertopen($input);
            break;
            case 'vertclose':
                return $this->vertclose($input);
            break;
            case 'horzopen':
                return $this->horzopen($input);
            break;
            case 'horzclose':
                return $this->horzclose($input);
            break;
            case 'dissolve':
                return $this->dissolve($input);
            break;
            case 'pixelize':
                return $this->pixelize($input);
            break;
            case 'diagtl':
                return $this->diagtl($input);
            break;
            case 'diagtr':
                return $this->diagtr($input);
            break;
            case 'diagbl':
                return $this->diagbl($input);
            break;
            case 'diagbr':
                return $this->diagbr($input);
            break;
            case 'hlslice':
                return $this->hlslice($input);
            break;
            case 'hrslice':
                return $this->hrslice($input);
            break;
            case 'vuslice':
                return $this->vuslice($input);
            break;
            case 'vdslice':
                return $this->vdslice($input);
            break;

            
        }
        
        //khi dua $input la 1 trong nhung item trong mang khai bao. goi ham tuong ung
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

echo $test->Handle('vdslice');
// ket qua mong cho: Vdslice