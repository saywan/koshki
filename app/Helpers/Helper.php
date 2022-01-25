<?php

namespace App\Helpers;


use App\Model\Contract;
use App\Model\daliyreport;
use App\Model\DeleteRequestEstate;
use App\Model\estateimage;
use App\Model\estateinfo;
use App\Model\estateinfopossibility;
use App\Model\estatetype;
use App\Model\notification;
use App\Model\OfferEstate;
use App\Model\positiontype;
use App\Model\possibility;
use App\Model\region;
use App\Model\ReplyRequest;
use App\Model\requestestate;
use App\Model\transcation;
use App\Model\UsageTypes;
use App\User;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;

class Helper{

    public static function crypto_rand_secure($min, $max)
    {
        $range = $max - $min;
        if ($range < 1) return $min; // not so random...
        $log = ceil(log($range, 2));
        $bytes = (int)($log / 8) + 1; // length in bytes
        $bits = (int)$log + 1; // length in bits
        $filter = (int)(1 << $bits) - 1; // set all lower bits to 1
        do {
            $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
            $rnd = $rnd & $filter; // discard irrelevant bits
        } while ($rnd > $range);
        return $min + $rnd;
    }
    public static  function getToken($length)
    {
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet .= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet .= "0123456789";
        $max = strlen($codeAlphabet); // edited

        for ($i = 0; $i < $length; $i++) {
            $token .= $codeAlphabet[Helper::crypto_rand_secure(0, $max - 1)];
        }

        return $token;
    }
    public static  function  GetInfoRegion($RegionId)
    {
        $infoRegion=region::where('id',$RegionId)->first();
        return $infoRegion->Name;
    }

    public  static  function GetInfoRequestCode($reuestId){

        $offer=ReplyRequest::where('RequestId',$reuestId)->where('send',1)->where('aftersend',0)->get();
        return $offer;

    }
    public  static  function GetNotSendCodeEsate($reuqestId)
    {
        $offerEstate=ReplyRequest::where('RequestId',$reuqestId)->where('send',0)->get();
        return $offerEstate;
    }
    public  static  function GetSendCodeEsate($reuqestId)
    {
        $offerEstate=ReplyRequest::where('RequestId',$reuqestId)->where('send',1)->where('aftersend',1)->get();
        return $offerEstate;
    }

    public  static  function InfoGetEstate($estateInfo){

        $estate=estateinfo::where('id',$estateInfo)->first();
        return $estate;
    }
    public static  function  GetInfoMultiRegion($RegionId)
    {
        $arr=[];

        $arr =explode(',', $RegionId);
        $query = DB::table('region');

        if ($arr)
            $query->whereIn('id', $arr);

        return $query->get();


    }
    public static  function  GetInfoRegionName($RegionId)
    {
        $arr=[];
        $unserlaize=unserialize($RegionId);
        $arr =explode(',', $unserlaize);
        $query = DB::table('region');

        if ($arr)
            $query->whereIn('id', $arr);

        return $query->get();


    }
    public static  function  GetInfoEstateName($EstateType)
    {
        $arr=[];

        $unserlaize=unserialize($EstateType);
        $arr =explode(',', $unserlaize);
        $query = DB::table('estatetype');

        if ($arr)
            $query->whereIn('id', $arr);

        return $query->get();


    }
    public static  function  GetInfoEstatype($EstateType)
    {
        $arr=[];

        $arr =explode(',', $EstateType);
        $query = DB::table('estatetype');

        if ($arr)
            $query->whereIn('id', $arr);

        return $query->first();


    }
    public static  function  GetInfoMultiEstatype($EstateType)
    {
        $arr=[];

        $arr =explode(',', $EstateType);
        $query = DB::table('estatetype');

        if ($arr)
            $query->whereIn('id', $arr);

        return $query->get();


    }


    public  static  function  GetImageEstate($estateId){

        $infoEstate=estateinfo::where('id',$estateId)->first();
        $estateImage=estateimage::where('EstateId',$estateId)->first();
        if($estateImage)
        {
            echo "<a href='Estate/$infoEstate->TrackingCode' class='geodir-category-img_item'>
                           <img src='$estateImage->photo' alt=''>
                             <div class='overlay'></div> </a>";

        }else{
           return "no";
        }

    }
    public  static  function  GetImageEstateSlider($estateId){

        $infoEstate=estateinfo::where('id',$estateId)->first();
        $estateImage=estateimage::where('EstateId',$estateId)->get();
        if(count($estateImage) > 0)
        {
           foreach ($estateImage as $itemImage)
           {
               echo "<div class='slick-slide-item'>
                        <div class='box-item'>
                            <img  src='$itemImage->photo'   alt=''>
                            <a href='$itemImage->photo' class='gal-link popup-image'><i class='fal fa-search'  ></i></a>
                            <div class='show-info'>
                                <span><i class='fas fa-info'></i></span>
                                <div class='tooltip-info'>
                                    <h5>Room Details</h5>
                                    <p>
                                  $infoEstate->RoomNumber

</p>
                                </div>
                            </div>
                        </div>
                    </div>";
           }

        }else{
           return "no";
        }

    }
    public  static  function  GetPossibitiesEstate($posId){

        $possibility=possibility::where('id',$posId)->get();
        if(count($possibility) > 0)
        {
            foreach ($possibility as $possibilitylist)
            {

                echo "<div class='form-group'>
                         <div class='form-group form-check'>
                            <input type='checkbox' class='form-check-input' id='exampleCheck$possibilitylist->id' value='$possibilitylist->id' checked  disabled >
                                                    <label class='form-check-label' for='exampleCheck$possibilitylist->id'>
                                                       $possibilitylist->Name
                                                    </label>
                                                </div>
                                            </div>";

            }

        }else{
            return "no";
        }

    }
    public  static  function  GetNamePoossibities($posId){

        $posinfo=possibility::where('id',$posId)->first();
        return $posinfo->Name;
    }
    public  static  function  GetAllEstateUser($userId)
    {
        $estateinof=estateinfo::where('userId',$userId)->get();
         return count($estateinof);
    }
    public  static  function  GetInfoEstate($EstateID)
    {
        $estateinof=estateinfo::where('id',$EstateID)->first();
         return $estateinof;
    }
    public  static  function  GetInfoUser($userId)
    {
        $user=User::where('id',$userId)->first();
        return $user;
    }
    public  static  function  GetStatisicUserReported($userId)
    {
        $estateinof=daliyreport::where('userId',$userId)->get();
        return count($estateinof);
    }


    public  static  function GetInfoTotalCode($requestId)
    {
        $offerEstate=OfferEstate::where('id',$requestId)->get();

            foreach ($offerEstate as $itemCode)
            {
                if(!empty($itemCode->Code))
                {
                    echo ' <a target="_blank" href="" >
                                            <span class="badge badge-info" style="font-size: 15px !important;margin: 2px 3px">
                                                 '. implode('*',unserialize($itemCode->Code)).'
                                            </span>
                   </a>';
                }else{
                    echo '';
                }

            }


        //return $offerEstate->Code;
    }

    public  static  function  GetImageEstateProperty($estateId){

        $estateImage=estateimage::where('EstateId',$estateId)->get();
        if(count($estateImage) > 0)
        {
            foreach ($estateImage as $images)
            {

                echo "<div class='swiper-slide'>
                          <img src='/EstateImage/$images->namefolder/medium/$images->namephoto' alt='slide image' data-src='/EstateImage/$images->namefolder/medium/$images->namephoto' class='slide-item swiper-lazy'>
                       <div class='swiper-lazy-preloader'>

                         </div>
                   </div>";

            }

        }else{
            return "no";
        }

    }
    public  static  function  GetImageEstatePropertySmall($estateId){

        $estateImage=estateimage::where('EstateId',$estateId)->get();
        if(count($estateImage) > 0)
        {
            foreach ($estateImage as $images)
            {

                echo "<div class='swiper-slide'>
                          <img src='/EstateImage/$images->namefolder/small/$images->small' alt='slide image' data-src='/EstateImage/$images->namefolder/small/$images->small' class='slide-item swiper-lazy swiper-lazy'>

                   </div>";

            }

        }

    }
    public  static  function  GetImage($estateId){

        $estateImage=estateimage::where('EstateId',$estateId)->first();
        return $estateImage->photo;
       /* foreach ($estateImage as $images)
        {

            echo "<div class='swiper-slide'>
                          <img src='$images->photo' alt='slide image' data-src='$images->photo' class='slide-item swiper-lazy'>
                           <div class='swiper-lazy-preloader'></div>
                   </div>";

        }*/
    }
    public  static  function  ShowPossibiliesEstate($estateId){
        $infoPossibilies=estateinfopossibility::where('EstateId',$estateId)->get();
        foreach ($infoPossibilies as $itemPoss)
        {

            $Possibilies_title=possibility::find($itemPoss->PossibilityId);
            echo "<div class='col-xs-12 col-sm-4 row middle-xs showitem'>
                   <i class='material-icons mat-icon-sm '>check</i>
                        <span class='mx-2'>
                             $Possibilies_title->Name
                         </span>
                 </div>";

        }
    }
    public  static  function  ShowPossibiliesEstateRequestInfo($estateId){
        $infoPossibilies=estateinfopossibility::where('EstateId',$estateId)->get();
        foreach ($infoPossibilies as $itemPoss)
        {

            $Possibilies_title=possibility::find($itemPoss->PossibilityId);
            echo $Possibilies_title->Name;

        }
    }
    public static  function  GetInfoEstateType($type)
    {
        $infoRegion=estatetype::where('id',$type)->first();
        return $infoRegion->Name;
    }
    public  static  function EstateType($estateId)
    {
        $estatype=estatetype::where('id',$estateId)->first();
        return $estatype->Name;
    }
    public  static  function EstateTypeAdv($estateId)
    {
        $estatype=estatetype::where('id',$estateId)->first();
        return $estatype->advType;
    }
    public  static  function EstateTypeUsage($estateId)
    {
        $estatype=UsageTypes::where('id',$estateId)->first();
        return $estatype->Name;
    }
    public  static  function EstatetypeRegion($regionId)
    {
        $region=region::where('id',$regionId)->first();
        return $region->Name;
    }
    public  static  function  GetCountEstate()
    {
        $estatinfo=estateinfo::get();
        return count($estatinfo);

    }
    public  static  function  GetCountEstatePresell()
    {
        $estatinfo=estateinfo::where('status','presell')->get();
        return count($estatinfo);


    } public  static  function  GetCountEstateSale()
    {
        $estatinfo=estateinfo::where('status','sale')->get();
        return count($estatinfo);


    } public  static  function  GetCountEstateRent()
    {
        $estatinfo=estateinfo::where('status','rent')->get();
        return count($estatinfo);


    }
    public  static  function  GetCountUser()
    {
        $user=User::where('status','active')->get();
        return count($user);


    }
    public  static function GetCountRequestEstate(){
        $request=requestestate::all();
        return count($request);
    }
    public  static function GetCountOffer(){
        $request=OfferEstate::all();
        return count($request);
    }
    public  static function GetCountOfferRent(){
        $request=OfferEstate::where('type_applicant','rent')->get();
        return count($request);
    }
    public  static function GetCountOfferBuy(){
        $request=OfferEstate::where('type_applicant','buy')->get();
        return count($request);
    }
    public  static function GetCountEstateTenant(){
        $request=Contract::get();
        return count($request);
    }
    public  static function GetTotalTrascation(){
        $request=transcation::get();
        return count($request);
    }
    public  static  function  GetRecentlyRequestEstate(){

        $request=requestestate::where('status',0)
            ->groupBy('id')
            ->orderBy('id', 'desc')
            ->paginate(5);
        return $request;
    }
    public  static  function  GetCountEstatePending()
    {
        $estatinfo=estateinfo::where('status','pending')->get();
        return count($estatinfo);


    }
    public  static  function  GetCountEstateWaiting()
    {
        $estatinfo=estateinfo::where('status','stop')->get();
        return count($estatinfo);


    }
    public  static  function  GetCountDeleteRequestOffer()
    {
        $estatinfo=DeleteRequestEstate::all();
        return count($estatinfo);


    }


    public  static  function  GetCountAllNotificationNotSeen(){

        $noty=notification::where('seen',0)->where('notiyType','Estate')->get();
        if(count($noty) > 0)
        {
            return count($noty);
        }
    }
    public  static  function  GetCountAllNotificationNotSeenRequest(){

        $noty=notification::where('seen',0)->where('notiyType','requestEstate')->get();
        if(count($noty) > 0)
        {
            return count($noty);
        }
    }
    public  static  function  GetCountAllNotificationNotSeencontactUs(){

        $noty=notification::where('seen',0)->where('notiyType','ContactUs')->get();
        if(count($noty) > 0)
        {
            return count($noty);
        }
    }

    public  static  function  GetNameEstate($estatId)
    {
        $estatinfo=estateinfo::where('id',$estatId)->first();
        $region=self::EstatetypeRegion($estatinfo->RegionId);
        /*$data=[
            'estatinfo'=>$estatinfo,
            'region'=>$region
        ];*/

       return $estatinfo;

            //self::EstatetypeRegion($estatinfo->RegionId);
            //EstatetypeRegion::class($estatinfo->RegionId);
    }
    public  static  function  GetIdbyNamePosition($name)
    {
        $estatinfo=positiontype::where('Name',trim($name))->first();


        return $estatinfo->id;

        //self::EstatetypeRegion($estatinfo->RegionId);
        //EstatetypeRegion::class($estatinfo->RegionId);
    }
    public  static  function  GetIdPosition($Id)
    {
        $estatinfo=positiontype::where('id',$Id)->first();

        return $estatinfo->Name;

        //self::EstatetypeRegion($estatinfo->RegionId);
        //EstatetypeRegion::class($estatinfo->RegionId);
    }
    public  static  function  GetRegionById($id)
    {
        $region=region::where('id',$id)->first();
        return $region->id;
    }
    public static function resizeImage( $image, $width, $height, $scale, $imageNew = null ) {

        list($imagewidth, $imageheight, $imageType) = getimagesize($image);
        $imageType = image_type_to_mime_type($imageType);
        $newImageWidth = ceil($width * $scale);
        $newImageHeight = ceil($height * $scale);
        $newImage = imagecreatetruecolor($newImageWidth,$newImageHeight);
        switch($imageType) {
            case "image/gif":
                $source=imagecreatefromgif($image);
                imagefill( $newImage, 0, 0, imagecolorallocate( $newImage, 255, 255, 255 ) );
                imagealphablending( $newImage, TRUE );
                break;
            case "image/pjpeg":
            case "image/jpeg":
            case "image/jpg":
                $source=imagecreatefromjpeg($image);
                break;
            case "image/png":
            case "image/x-png":
                $source=imagecreatefrompng($image);
                imagefill( $newImage, 0, 0, imagecolorallocate( $newImage, 255, 255, 255 ) );
                imagealphablending( $newImage, TRUE );
                break;
        }
        imagecopyresampled($newImage,$source,0,0,0,0,$newImageWidth,$newImageHeight,$width,$height);

        switch($imageType) {
            case "image/gif":
                imagegif( $newImage, $imageNew );
                break;
            case "image/pjpeg":
            case "image/jpeg":
            case "image/jpg":
                imagejpeg( $newImage, $imageNew ,90 );
                break;
            case "image/png":
            case "image/x-png":
                imagepng( $newImage, $imageNew );
                break;
        }

        chmod($image, 0777);
        return $image;
    }
    public static function resizeImageFixed( $image, $width, $height, $imageNew = null ) {

        list($imagewidth, $imageheight, $imageType) = getimagesize($image);
        $imageType = image_type_to_mime_type($imageType);
        $newImage = imagecreatetruecolor($width,$height);

        switch($imageType) {
            case "image/gif":
                $source=imagecreatefromgif($image);
                imagefill( $newImage, 0, 0, imagecolorallocate( $newImage, 255, 255, 255 ) );
                imagealphablending( $newImage, TRUE );
                break;
            case "image/pjpeg":
            case "image/jpeg":
            case "image/jpg":
                $source=imagecreatefromjpeg($image);
                break;
            case "image/png":
            case "image/x-png":
                $source=imagecreatefrompng($image);
                imagefill( $newImage, 0, 0, imagecolorallocate( $newImage, 255, 255, 255 ) );
                imagealphablending( $newImage, TRUE );
                break;
        }
        if( $width/$imagewidth > $height/$imageheight ){
            $nw = $width;
            $nh = ($imageheight * $nw) / $imagewidth;
            $px = 0;
            $py = ($height - $nh) / 2;
        } else {
            $nh = $height;
            $nw = ($imagewidth * $nh) / $imageheight;
            $py = 0;
            $px = ($width - $nw) / 2;
        }

        imagecopyresampled($newImage,$source,$px, $py, 0, 0, $nw, $nh, $imagewidth, $imageheight);

        switch($imageType) {
            case "image/gif":
                imagegif($newImage,$imageNew);
                break;
            case "image/pjpeg":
            case "image/jpeg":
            case "image/jpg":
                imagejpeg($newImage,$imageNew,90);
                break;
            case "image/png":
            case "image/x-png":
                imagepng($newImage,$imageNew);
                break;
        }

        chmod($image, 0777);
        return $image;
    }
    public static function getWidth( $image ) {
        $size  = getimagesize( $image);
        $width = $size[0];
        return $width;
    }
    public static function getHeight( $image ) {
        $size   = getimagesize( $image );
        $height = $size[1];
        return $height;
    }
    public static  function Wo_Time_Elapsed_String($ptime) {
        global $wo;
        $etime = time() - $ptime;
        if ($etime < 1) {
            return '0 seconds';
        }
        $year='';
        $month='';
        $day='';
        $hour='';
        $minute='';
        $second='';
        $a        = array(
            365 * 24 * 60 * 60 => $year,
            30 * 24 * 60 * 60 =>$month,
            24 * 60 * 60 => $day,
            60 * 60 => $hour,
            60 => $minute,
            1 =>$second
        );
        $a_plural = array(
            $year => 'سال',
            $month => 'ماه',
            $day => 'روز',
            $hour => 'ساعت',
            $minute =>'دقیقه',
            $second => 'ثانیه'
        );
        foreach ($a as $secs => $str) {
            $d = $etime / $secs;
            if ($d >= 1) {
                $r = round($d);
                $wo['language_type']='rtl';

                    $time_ago = $r . ' ' . ($r > 1 ? $a_plural[$str] : $str) . ' ' . 'زمان سپری شده';

                return $time_ago;
            }
        }
    }

    public  static  function GetTotalUserEstateSubmited ($userId)
    {
        if($userId)
        {
            $estateinfo=estateinfo::where('userId',$userId)->get();
           return  \count($estateinfo);
        }else{
            return 0;
        }
    }
    public  static  function GetTotalTenantUser ($userId)
    {
        if($userId)
        {
            $estateinfo=Contract::where('userId',$userId)->get();
           return  \count($estateinfo);
        }else{
            return 0;
        }
    }
    public  static  function GetTotalTranscationUser ($userId)
    {
        if($userId)
        {
            $estateinfo=transcation::where('userId',$userId)->get();
           return  \count($estateinfo);
        }else{
            return 0;
        }
    }
    public  static  function GetTotalOfferEstate ($userId)
    {
        if($userId)
        {
            $estateinfo=OfferEstate::where('userId',$userId)->get();
           return  \count($estateinfo);
        }else{
            return 0;
        }
    }


}
