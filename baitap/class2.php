<?php
    class Version{
        public function dem($so){
            $result = '';
            // dang number hay khong
            if(is_numeric($so)){
                // neu la dang so se co 3 kieu. nguyen, thuc, 0
                if($so == 0){
                    $result = 'Không';
                    return $result;
                }elseif($so > 0){
                    // so lon hon khong

                }else{
                    // so be hon khong
                    $result = "Âm ".$result;
                }
            }else {
                return "Vui long nhap vao so";
            }
        }

        // dem 1
        public function dem1($so){
            switch($so){
                case 0:
                    $so = 'Không';
                    return $so;
                break;

                case 1:
                    $so = "Một";
                    return $so;
                break;

                case 1:
                    $so = 'Một';
                    return $so;
                break;

                case 2:
                    $so = 'Hai';
                    return $so;
                break;

                case 3:
                    $so = 'Ba';
                    return $so;
                break;

                case 4:
                    $so = 'Bốn';
                    return $so;
                break;

                case 5:
                    $so = 'Năm';
                    return $so;
                break;

                case 6:
                    $so = 'Sáu';
                    return $so;
                break;

                case 7:
                    $so = 'Bảy';
                    return $so;
                break;

                case 8:
                    $so = 'Tám';
                    return $so;
                break;

                case 9:
                    $so = 'Chín';
                    return $so;
                break;

            }
        }

        // doc 2
        public function dem2($so){
            $num = substr($so,0,1);
            if($num == 0){
                // neu == 0 thi dem theo 1 so
                $so = Version::dem1(substr($so,1,1));
                return $so;
            }elseif($num ==1 ){
                // neu hang chuc la 1
                // xet gia tri hang don vi
                $donvi = substr($so,1,1);
                if($donvi == 0){
                    $so = 'Mười';
                    return $so;
                }else {
                    // dem hang don vi
                    $donvi = Version::dem1($donvi);
                    $so = "Mười ".$donvi;
                    return $so;
                }
            }else {
                // doc so hang chuc
                $chuc = substr($so,0,1);
                $chuc = Version::dem1($chuc);
                // don vi
                $donvi = substr($so,1,1);
                // trương hop dac biet la 0-5
                if($donvi == 0 ){
                    $donvi = '';
                }elseif ($donvi == 5) {
                    $donvi = "lăm";
                }else{
                    $donvi = Version::dem1($donvi);
                }
                $so = $chuc.' Mươi '.$donvi;
                return $so;
            }
        }

        //dem 3
        public function dem3($so){
            // so dau tien bang 0 thi bo
            $tram = substr($so,0,1);
            $chuc = substr($so,1,1);
            $donvi = substr($so,2,1);
            $tram = Version::dem1($tram);

            // chuc
            // neu la so 0
            if($chuc == 0){
                // neu donvi =0
                if($donvi == 0){
                    $chuc = '';
                    $donvi = '';
                }else{
                    $chuc = 'Linh';
                    $donvi = Version::dem1($donvi);
                }
            }else{
                $chuc = Version::dem2(substr($so,1,2));
                $donvi = '';
            }

            $so = $tram.' Trăm '.$chuc.' '.$donvi;


            return $so;
        }

        // dem 4
        public function dem4($so){
            $ngin = substr($so,0,1);

            //ngin
            $ngin = Version::dem1($ngin);
            $tram = substr($so,1,1);
            $chuc = substr($so,2,1);
            $donvi = substr($so,3,1);
            // neu hang tram  = 0
            if($tram == 0){
                if($chuc == 0){
                    $tram = 'Không Trăm';
                    $chuc = 'Linh';
                    $donvi = Version::dem1($donvi);
                    $so = $ngin.' Ngìn '.$tram.' '.$chuc.' '.$donvi;
                    
                }else{
                    $chuc = substr($so,2,2);
                    $tram = 'Không Trăm';
                    $chuc = Version::dem2($chuc);
                    $so = $ngin.' Ngìn '.$tram.' '.$chuc;
                }
                
            }else{
                $tram = substr($so,1,3);
                $tram = Version::dem3($tram);
                $so = $ngin.' Ngìn '.$tram;
            }
            
            return $so;
        }

        // dem 5
        public function dem5($so){
            $chucNgin = substr($so,0,2);
            $chucNgin = Version::dem2($chucNgin);
            // tram
            $tram = substr($so,2,3);
            $tram = Version::dem3($tram);

            $so = $chucNgin.' Ngìn '.$tram;
            return $so;
        }

        //dem6
        public function dem6($so){
            $tramNgin = substr($so,0,3);
            $tramNgin = Version::dem3($tramNgin);
            $tram = substr($so,3,3);
            $tram = Version::dem3($tram);
            $so = $tramNgin.' Ngìn '.$tram;
            return $so;
        }

        // dem 7
        public function dem7($so){
            $trieu = substr($so,0,1);
            $tramNgin = substr($so,1,1);
            $chucNgin = substr($so,2,1);
            $ngin = substr($so,3,1);
            $tram = substr($so,4,1);
            $chuc = substr($so,5,1);
            $donvi = substr($so,6,1);

            $trieu = Version::dem1($trieu);
            if($tramNgin == 0){
                if($chucNgin == 0){
                    if($ngin == 0){
                        if($tram == 0){
                            if($chuc == 0){ // don vi
                                $donvi = Version::dem1($donvi);
                                $so = $trieu.' Triệu Không Trăm Linh '.$donvi;
                            }else{ //  chuc
                                $donvi = substr($so,5,2);
                                $donvi = Version::dem2($donvi);
                                $so = $trieu.' Triệu Không Trăm '.$donvi;
                                return $so;
                            }
                        }else{ //  tram
                            $tram = substr($so,4,3);
                            $tram = Version::dem3($tram);
                            $so = $trieu.' Triệu '.$tram;
                            return $so;
                        }
                    }else{ // ngin 1.000.000
                        $ngin = substr($so,3,4);
                        $ngin = Version::dem4($ngin);
                        $so = $trieu.' Triệu Không Trăm Linh '.$ngin;
                    }
                }else{ // chuc ngin
                    $chucNgin = substr($so,2,5);
                    $chucNgin = Version::dem5($chucNgin);
                    $so = $trieu.' Triệu Không Trăm '.$chucNgin;
                    return $so;
                }

            }else{ // tram ngin
                $tramNgin = substr($so,1,6);
                $tramNgin = Version::dem6($tramNgin);
                $so = $trieu.' Triệu '.$tramNgin;
                return $so;
            }
            return $so;
        }

        //dem 8
        public function dem8($so){
            // trieu
            $chucTrieu = substr($so,0,2);
            $chucTrieu = Version::dem2($chucTrieu);
            // ngin
            $ngin = substr($so,2,6);
            $ngin = Version::dem6($ngin);

            $so = $chucTrieu.' Triệu '.$ngin;
            return $so;

        }
        
        //dem9
        public function dem9($so){
            // trieu
            $tramTrieu = substr($so,0,2);
            $tramTrieu = Version::dem3($tramTrieu);
            // ngin
            $ngin = substr($so,2,6);
            $ngin = Version::dem6($ngin);

            $so = $tramTrieu.' Triệu '.$ngin;
            return $so;
        }

        // ham dem so nguyen
        public function nguyen($so){
            $result = strlen($so);
            // duyet
            switch($result){
                case 1:
                    $so = Version::dem1($so);
                    return $so;
                break;
                // end case1

                case 2:
                    $so = Version::dem2($so);
                    return $so;
                break;
                // end case2

                case 3:
                    $so = Version::dem3($so);
                    return $so;
                break;
                // end case3

                case 4:
                    $so = Version::dem4($so);
                    return $so;
                break;
                // end case 4

                case 5:
                    $so = Version::dem5($so);
                    return $so;
                break;
                // end case 5

                case 6:
                    $so = Version::dem6($so);
                    return $so;
                break;
                // end case7

                case 7:
                    $so = Version::dem7($so);
                    return $so;
                break;
                // end case7

                case 8:
                    $so = Version::dem8($so);
                    return $so;
                break;
                // case9

                case 9:
                    $so = Version::dem9($so);
                    return $so;
                break;
                
            }
        }
    }
    $so = Version::nguyen(112111125);
    print_r($so);

?>