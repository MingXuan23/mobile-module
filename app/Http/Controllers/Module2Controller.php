<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
      
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class Module2Controller extends Controller
{
    //

    public function getSkillType()
    {
        try {
            $type = DB::table('skills')->select('skill_type')->distinct()->get()->pluck('skill_type')->toArray();
            return response()->json($type, Response::HTTP_OK);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(),  Response::HTTP_BAD_GATEWAY);
        }
    }

    public function getSkills(Request $request){
        
        try{
            $type = $request->query('type');

            $skills = DB::table('skills');
            if(isset($type)){
                $skills->where('skill_type',$type);
            }
            $skills =$skills->get();
            $hostname = $request->getSchemeAndHttpHost();
            $skills = $skills->map(function ($skill) use ($hostname) {
                $skill->skill_image = $hostname . '/public/skills/' . $skill->skill_image;
                return $skill;
            });
           
            return response()->json(['skills'=> $skills], Response::HTTP_OK);
        }
        catch (\Exception $e) {
            return response()->json($e->getMessage(),  Response::HTTP_BAD_GATEWAY);
        }
        
    }

    public function getPhotoPagination($limit){
        try{
            $count = DB::table('photo')->count();
            $num = ceil($count/$limit);
            return response()->json(['pages'=>$num],Response::HTTP_OK);

            
        }
        catch (\Exception $e) {
            return response()->json($e->getMessage(),  Response::HTTP_BAD_GATEWAY);
        }
    }

    public function getPhotos(Request $request){
        try{
            $limit = $request->query('limit');
            $offset = $request->query('offset');

            if(!isset($limit)||!isset($offset)){
                return response()->json('Required limit and offset',  Response::HTTP_BAD_GATEWAY);
            }

            $photos = DB::table('photo')
                ->limit((int)$limit)
                ->offset((int)$offset * (int)$limit)
                ->get();
           
            $hostname = $request->getSchemeAndHttpHost();
            $photos = $photos->map(function ($photo) use ($hostname) {
                $photo->link = $hostname . '/public/photo/' . $photo->link;
                return $photo;
            });

            $tokens = [
                    'HX48',
                    'QZ75',
                    'WP62',
                    'AS10',
                    'KE39',
                    'DY04',
                    'VL27',
                    'JM85',
                    'BN53',
                    'TX90'
            ];

            $randomKey = array_rand($tokens);
            $token = $tokens[$randomKey];
            return response()->json(['token'=>$token,'photos'=>$photos],Response::HTTP_OK);

            
        }
        catch (\Exception $e) {
            return response()->json($e->getMessage(),  Response::HTTP_BAD_GATEWAY);
        }
    }

    public function updatePhotoView(Request $request){
        try{
            $token = $request->header('token');
            $photoID = $request->header('photoID');

            $tokens = [
                    'HX48',
                    'QZ75',
                    'WP62',
                    'AS10',
                    'KE39',
                    'DY04',
                    'VL27',
                    'JM85',
                    'BN53',
                    'TX90'
            ];

            if(!isset($token) || !isset($photoID)){
                return response()->json("Missing params",  Response::HTTP_BAD_GATEWAY);
            }

            if (!in_array($token, $tokens) || !DB::table('photo')->where('id',$photoID)->exists()) {
                return response()->json("Invalid params",  Response::HTTP_BAD_GATEWAY);
            }
            
           DB::table('photo')->where('id',$photoID)->increment('view');
           $result = DB::table('photo')->where('id',$photoID)->first()->view;

           
            return response()->json(['photoID'=>$photoID, 'latest_view'=>$result],Response::HTTP_OK);

            
        }
        catch (\Exception $e) {
            return response()->json($e->getMessage(),  Response::HTTP_BAD_GATEWAY);
        }
    }
}
