<?php
    class Version1{
        public function demSo($so){
            $result = '';
            //co la number hay khong
            if(is_numeric($so)){
                // xet am hay duong
                if($so < 0){
                    // doc so am
                }elseif($so == 0){
                    return 'Không';
                }else{
                    // do so duong
                    // xet so nguyen
                    if(is_int($so)){
                        return 'oke';
                    }
                    // chia ra phan nguyen va phan tap pha
                    $num = explode('.',$so);
                    // phan nguyen
                    $num1 = $num[0];
                    // phan thap phan
                    $num2 = $num[1];
                }
            }else{
                return 'Không thuộc dạng số';
            }
        }

        // doc phan nguyen
        public function nguyen($num){
            $count = strlen($num);
            $result = Version1::dem($count);

        }

        // doc phan thap phan
        public function le($num){

        }

        // dem
        public function dem($num){
            $result = '';
            // co phải là int không
            if(is_int($num)){
                switch($num){
                    case 0:
                        $result = 'Không';
                        return $result;
                    break;

                    case 1:
                        $result = '';
                        return $result;
                    break;

                    case 2:
                        $result = 'Chục';
                        return $result;
                    break;

                    case 3://100
                        $result = 'Trăm';
                        return $result;
                    break;
                    
                    case 4://1000
                        $result = 'Ngìn';
                        return $result;
                    break;
                    
                    case 5://10000
                        $result = 'Mươi Ngìn';
                        return $result;
                    break;
                    
                    case 6://100.000
                        $result = 'Trăm Ngìn';
                        return $result;
                    break;
                    
                    case 7://1.000.000
                        $result = 'Triệu';
                        return $result;
                    break;
                    
                    case 8://10.000.000
                        $result = 'Mươi Triệu';
                        return $result;
                    break;
                    
                    case 9://100.000.000
                        $result = 'Trăm Triệu';
                        return $result;
                    break;
                    
                    case 10://1.000.000.000
                        $result = 'Tỉ';
                        return $result;
                    break;
                    
                }
            }else{
                return 'Lỗi coutn';
            }
        }
    }
    $so = 1111.225;
    $so1 = 2344;
    // $so1 = 1111;
    // $number = strstr($so,'.');
    // $number = str_replace('.','',$number);
    // print_r($number);
    // $so1 = explode('.',$so);
    // print_r($so1);
    $result = Version1::nguyen($so1);
    print_r($result);

?>