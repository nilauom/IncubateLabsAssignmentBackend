<?php

namespace App\Api\V1\Controllers;

use JWTAuth;
use App\Http\Controllers\Controller;
use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;
use DB;
use App\User;
use App\Image;

class UserController extends Controller
{
    use Helpers;
    private $currentUser;

    public function __construct(){
        $this->currentUser=JWTAuth::parseToken()->authenticate();
    }

    public function addFav(Request $request){
        if($image=$this->currentUser->images()->where('url',$request->url)->first()!==null){
           return response()->json([
            'message' => 'alredy added to favorite'
            ]);            
        }
    	$image=$this->currentUser->images()->create($request->all());
    	   return response()->json([
            'success' => true
            ]);
    }

    public function getFav(Request $request){
    	   return response()->json([
            'success' => true,
            'images' => JWTAuth::parseToken()->authenticate()->images()->get()
            ]);

	}

	public function deleteImage($id){
		$this->currentUser->images()->where('id',$id)->delete();

		    return response()->json([
            'success' => true,
            'images' => JWTAuth::parseToken()->authenticate()->images()->get()
            ]);
	}

	public function deleteCommet($id){
		$this->currentUser->images()->where('id',$id)->update(['comment'=>null]);
		    return response()->json([
            'success' => true,
            ]);
	}

    public function addComment(Request $request,$id){
        JWTAuth::parseToken()->authenticate()->images()->where('id',$id)->update(['description'=>$request->description]);
        return response()->json([
            'success' => $request->description,
            ]);
    }
}