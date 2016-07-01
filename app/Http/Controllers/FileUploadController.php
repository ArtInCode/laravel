<?php 
namespace App\Http\Controllers;

use Input;
use Validator;
use Redirect;
use Request;
use Session;
use App\Media; 


class FileUploadController extends Controller {


    public function upload() {
      // getting all of the post data
    
      // setting up rules
    
      // doing the validation, passing post data, rules and the messages
        $rules = array('image' => 'mimes:pdf,odt,txt,png,jpg,gif|max:10000',);
        $ip = $_SERVER['REMOTE_ADDR'];
        
        if(Input::hasFile('image')){
         
            foreach(Input::file('image') as $file){
              //echo $file->getClientOriginalName();
            
                $validator = Validator::make(array($file), $rules);
              
                if ($validator->fails()) {
                    // send back to the page with the input data and errors
                    return Redirect::to('upload')->withInput()->withErrors($validator);

                } else {
                    // checking file is valid.
                    if ($file->isValid()) {
                        $destinationPath = 'uploads'; // upload path
                        $extension = $file->getClientOriginalExtension(); // getting image extension
                        $fileName = rand(11111,99999).'.'.$extension; // renameing image
                        

                        $file->move($destinationPath, $fileName); // uploading file to given path
                        Media::saveimage(['ip'=>$ip, 'img_name'=>$fileName]); 
                        
                        // sending back with message
                        //Session::flash('success', 'Upload successfully'); 
                        $flash = [
                                'type'=>'success',
                                'msg'=>'Upload successfully',
                              ]; 
                        
                    }
                    else {
                        // sending back with error message.
                       $flash = [
                                'type'=>'error',
                                'msg'=>'uploaded file is not valid',
                              ]; 
                        
                    }
                }
            }// foreach
             Session::flash($flash['type'], $flash['msg'] );
            return Redirect::to('upload');
        } // if files
    }


}