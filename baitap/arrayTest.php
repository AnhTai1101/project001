<?php 
$a=[1,2,3];
$b=["a","b"];
function GhepPhanTu($a,$b){
    // tao array moi
    $result = [];
    // duyet
    foreach($a as $i){
        // duyet mang con
        foreach($b as $j){
            // tao array moi de hung ket qua
            $temp=[];
            // neu i la chuoi
            if(is_array($i)){
                // bỏ tất cả phần tử con của i vào mảng mới
                $temp = array_merge($temp, $i);
            }else{
                // nếu không phải là chuỗi mảng mới sẽ tăng thêm phần tử có giá trị là i
                array_push($temp, $i);
            }
            if(is_array($j)){
                // j là chuỗi thì ta thêm biến j vào chuỗi
                $temp = array_merge($temp, $j);
            }else{
                // là biến ta sẽ thêm phần tử cho chuối temp
                array_push($temp, $j);
            }
            // thêm phần tử cho mảng hứng kết quả
            array_push($result, $temp);
        }
    }
    return $result;
}
$c=GhepPhanTu($a,$b);
print_r($c);
$d=["x",1];
$e= GhepPhanTu($c,$d);
print_r($e);

function GhepPhanTuNangCao($arrayInput){
    //write your code here
    $result = $arrayInput[0];
    
    foreach($arrayInput as $k=>$v){ 
    	$result = GhepPhanTu($result,$v);
    }
    return $result;
}

$arr=[$a,$b,$d,[1,34,[8,9,7,6,7]],["g","h","t"]];// $arr co the co so luong item bat ki
$r= GhepPhanTuNangCao($arr);
print_r($r);
// Giải thích ghép phần tử nâng cao
   // khai báo mảng $result có giá trị ban đầu là item đầu tiên của $arrayInput
   // dùng for để duyệt hết các item có trong $arrayInput
    // Không cần duyệt item 0 (phần tử đầu tiên),
    // vì $result đã lưu lại item đầu tiên của $arrayInput
    // ở vòng lặp đầu tiên, GhepPhanTu sẽ trả về kết quả khi ghép 2 mảng $arrayInput[0] và $arrayInput[1]
        // và gán giá trị đó cho $result,

        // tiếp tục sang vòng lặp thức 2 thì GhepPhanTu lại gộp kết quả cũ của vòng lặp trước (kết quả đó đang lưu trong $result)
        // gộp lại với $arrayInput[2] và gán giá trị sau khi gộp cho $result,
        // ....
//ket qua mong cho la 1 mang , moi item la 1 mang nhu sau:
// [[1,"a","x"],[1,"a",1],[1,"b","x"],[1,"b",1],[2,"a","x"],[2,"a",1],...]
?>


