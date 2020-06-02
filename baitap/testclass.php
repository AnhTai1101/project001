<?php

class Version
{
    // write your code here
}
/*yeu cau:
bo xung property NumberOfVersion cho class Version
bo xung ham ToString khi duoc goi se tra ve vd: "Current version 1"

Khai bao cac object $ver1, $ver2, $ver3 va gan gia tri 1,2,3 tuong ung cho NumberOfVersion

    //advance: NumberOfVersion co the tu 0-> 1000000

*/

$currentV1 = $ver1->ToString() ;
echo $currentV1 ;
// mong muon ket qua la: Current version 1

$arrVersion =[$ver1, $ver2, $ver3];

//in ra $arrVersion
//ket qua mong muon la 1, 2 , 3

function ThayDoiVersion($arrVersion)
{
    //write your code here
    // doi version cho cac object $ver1, $ver2, $ver3, dang tu 1,2, 3,
    // thanh MOT, HAI, BA,
}

$arrResult = ThayDoiVersion($arrVersion);

//in ra $arrResult
//ket qua mong muon la MOT, HAI , BA

//in ra $arrVersion
//ket qua mong muon la 1, 2 , 3


//advance:
//khoi tao object $ver4 co NumberOfVersion=1000
// add $ver4 vao mang $arrVersion

$arrResult = ThayDoiVersion($arrVersion);

//in ra $arrResult
//ket qua mong muon la MOT, HAI , BA, MOT NGHIN
