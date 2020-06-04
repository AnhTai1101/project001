<?php

class Version
{
    public $num;

    public function toString(){
        return "Hello World";
    }

    //get number
    public function getNum($get){
        if(is_array($get)){
            $result = "";
            foreach($get as $arr1){
                $result .= "$arr1, " ;
            }
            rtrim($result, ", ");
            $this->num = $result;
        }else{
            $this->num = $get;
        }
        return $this->num;
    }

    // dem so
    public function demSo(int $so){
        switch($so){
            case 0:
                $so = 'Không';
            break;
            case 1:
                $so = 'Một';
            break;
            case 2:
                $so = 'Hai';
            break;
            case 3:
                $so = 'Ba';
            break;
            case 4:
                $so = 'Bốn';
            break;
            case 5:
                $so = 'Năm';
            break;
            case 6:
                $so = 'Sáu';
            break;
            case 7:
                $so = 'Bảy';
            break;
            case 8:
                $so = 'Tám';
            break;
            case 9:
                $so = 'Chín';
            break;
            case 1000:
                $so = 'Một nghìn';
            break;
        }
        return $so;
    }
    function ThayDoiVersion($arr){
        if(is_array($arr)){
            foreach($arr as $key=>$value){
                $arr[$key] = $this->demSo($value);
            }
        }
        return $arr;
    }
    //write your code here
        // doi version cho cac object $ver1, $ver2, $ver3, dang tu 1,2, 3,
        // thanh MOT, HAI, BA,

}
/*yeu cau:
bo xung property NumberOfVersion cho class Version
bo xung ham ToString khi duoc goi se tra ve vd: "Current version 1"

Khai bao cac object $ver1, $ver2, $ver3 va gan gia tri 1,2,3 tuong ung cho NumberOfVersion

    //advance: NumberOfVersion co the tu 0-> 1000000

*/
$ver1 = new Version;
$currentV1 = $ver1->ToString() ;
echo $currentV1 ;
echo "\n";

// get number
$ver1->getNum(1);
echo $ver1->num;
echo "\n";

// ver2
$ver2 = new Version;
$ver2->getNum(2);
echo $ver2->num;
echo "\n";

// ver3
$ver3 = new Version;
$ver3->getNum(3);
echo $ver3->num;
echo "\n";



// mong muon ket qua la: Current version 1

$arrVersion =[1, 2, 3];
// $arrVersion =[$ver1, $ver2, $ver3];
// ver arr
$arr = new Version;
$arr->getNum($arrVersion);
print_r($arr);
//in ra $arrVersion
//ket qua mong muon la 1, 2 , 3

// dem so
$ver4 = new Version;
$arr = [1,2,3,1000];
$a4 = $ver4->ThayDoiVersion($arr);
print_r($a4);

function ThayDoiVersion($arrVersion)
{

    //write your code here
    // doi version cho cac object $ver1, $ver2, $ver3, dang tu 1,2, 3,
    // thanh MOT, HAI, BA,
}

//$arrResult = ThayDoiVersion($arrVersion);

//in ra $arrResult
//ket qua mong muon la MOT, HAI , BA

//in ra $arrVersion
//ket qua mong muon la 1, 2 , 3


//advance:
//khoi tao object $ver4 co NumberOfVersion=1000
// add $ver4 vao mang $arrVersion

//$arrResult = ThayDoiVersion($arrVersion);

//in ra $arrResult
//ket qua mong muon la MOT, HAI , BA, MOT NGHIN
