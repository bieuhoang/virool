<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
* Message:: a library for giving feedback to the user
*
* @author  Adam Jackett
* @url http://www.darkhousemedia.com/
* @version 1.2.0
*/
    include_once dirname(BASEPATH).'/sparks/imgthumb/libraries/ThumbLib.inc.php';
    Class Imgthumb extends PhpThumbFactory{
        public static $_thumbName;
        public static $_thumbFoderUpload;
        public static $_thumbWidth;
        public static $_thumbHeight;
        
        public static $_thumbAlltype;
        public static $_thumbPath;
        public static $_thumbPaththumb;
        public static $_thumbMaxwidth;
        public static $_thumbMaxheight;
        
        public function __construct(){
            self::$_thumbAlltype      =       array('image/jpeg', 'image/png', 'image/gif','image/pjpeg', 'application/octet-stream');
            self::$_thumbMaxwidth     =       1900;
            self::$_thumbMaxheight    =       1900;
            
        }
        
        public function hello(){
            return 'hllo';
        }

        public function config($nameFile, $urlUpload, $width, $height){
            self::$_thumbName               =   $nameFile;
            self::$_thumbFoderUpload        =   $urlUpload;
            self::$_thumbWidth              =   $width;
            self::$_thumbHeight             =   $height;


            if(strcasecmp($_FILES[self::$_thumbName]['type'],'image/jpeg')){
                $typeimg='jpg';
            } else {
                $typeimg=       str_replace('image/','',$_FILES[self::$_thumbName]['type']);
            }
            self::$_thumbPath         =        $urlUpload."/".md5(rand(0,1000).rand(0,1000).rand(0,1000)).'.'.$typeimg;
            self::$_thumbPaththumb    =        $urlUpload."/thumb_".md5(rand(0,1000).rand(0,1000).rand(0,1000)).'.'.$typeimg; 
        }
        
        public function getFile($_numberFile = false){
            if($_numberFile){
                return array(self::$_thumbPaththumb,self::$_thumbPath); 
            }else{
                return self::$_thumbPaththumb;     
            }
            
        }
        public function UploadFile_Resize($nameFile, $pathUrl, $width=250, $height=200){
        
            if($_FILES[$nameFile]['error']>0){
                return 'File lỗi...!';
            }else{
                if(in_array($_FILES[$nameFile]['type'], self::$_thumbAlltype)){
                    $size=getimagesize($_FILES[$nameFile]['tmp_name']);
                    if($size[0]<self::$_thumbMaxwidth && $size[1]<self::$_thumbMaxheight){
                        if($_FILES[$nameFile]['size']<=10485760){
                            $this->config($nameFile, $pathUrl, $width, $height);
                            move_uploaded_file($_FILES[$nameFile]['tmp_name'],self::$_thumbPath);
                            $thum   =   $this->create(self::$_thumbPath);
                            $thum->resize($width,$height);
                            $thum->save(self::$_thumbPaththumb);
                            return 1;
                        }else{
                            return 'Dung lượng file quá lớn...!';
                        }
                    }else{
                        return 'Kích thước file quá lớn...!';
                    }
                }else{
                    return 'Định dạng file không đúng...!';
                }
            }  
        }
        public function DeleteFile($_thumbFile){
            if(file_exists($_thumbFile)){
                @unlink($_thumbFile);
            }
        }

        public function UploadFile_Up($nameFile, $pathUrl, $width=250, $height=200){
            if($_FILES[$nameFile]['error']>0){
                return 'File lỗi...!';
            }else{
                if(in_array($_FILES[$nameFile]['type'], self::$_thumbAlltype)){
                    $size=getimagesize($_FILES[$nameFile]['tmp_name']);
                    if($size[0]<self::$_thumbMaxwidth && $size[1]<self::$_thumbMaxheight){
                        if($_FILES[$nameFile]['size']<=10485760){
                            $this->config($nameFile, $pathUrl, $width, $height);
                            move_uploaded_file($_FILES[$nameFile]['tmp_name'],self::$_thumbPath);
                            $thum   =   $this->create(self::$_thumbPath);
                            $thum->resize($width,$height);
                            $thum->save(self::$_thumbPaththumb);
                            @unlink(self::$_thumbPath);
                            return 1;
                        }else{
                            return 'Dung lượng file quá lớn...!';
                        }
                    }else{
                        return 'Kích thước file quá lớn...!';
                    }
                }else{
                    return 'Định dạng file không đúng...!';
                }
            }  
        }

        public function Upload($nameFile, $pathUrl){
            if($_FILES[$nameFile]['error']>0){
                return 'File lỗi...!';
            }else{
                if(in_array($_FILES[$nameFile]['type'], self::$_thumbAlltype)){
                    $size=getimagesize($_FILES[$nameFile]['tmp_name']);
                    if($size[0]<self::$_thumbMaxwidth && $size[1]<self::$_thumbMaxheight){
                        if($_FILES[$nameFile]['size']<=10485760){
                            $this->config($nameFile, $pathUrl, 9000, 9000);
                            move_uploaded_file($_FILES[$nameFile]['tmp_name'],self::$_thumbPath);
                            return 1;
                        }else{
                            return 'Dung lượng file quá lớn...!';
                        }
                    }else{
                        return 'Kích thước file quá lớn...!';
                    }
                }else{
                    return 'Định dạng file không đúng...!';
                }
            }  
        }

        public function UploadFile_Crop($nameFile, $pathUrl,  $x=0, $y=0, $width=250, $height=200){
            if($_FILES[$nameFile]['error']>0){
                return 'File lỗi...!';
            }else{
                if(in_array($_FILES[$nameFile]['type'], self::$_thumbAlltype)){
                    $size=getimagesize($_FILES[$nameFile]['tmp_name']);
                    if($size[0]<self::$_thumbMaxwidth && $size[1]<self::$_thumbMaxheight){
                        if($_FILES[$nameFile]['size']<=10485760){
                            $this->config($nameFile, $pathUrl, $width, $height);
                            move_uploaded_file($_FILES[$nameFile]['tmp_name'],self::$_thumbPath);
                            $thum   =   $this->create(self::$_thumbPath);
                            $thum->crop($x,$y,$width,$height);
                            $thum->save(self::$_thumbPaththumb);
                            return 1;
                        }else{
                            return 'Dung lượng file quá lớn...!';
                        }
                    }else{
                        return 'Kích thước file quá lớn...!';
                    }
                }else{
                    return 'Định dạng file không đúng...!';
                }
            }  
        }
    } 