<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

require_once app_path('Uploads/class.fileuploader.php');

class FileController extends Controller
{
    public function upload(){
        $name_input = 'test';    // name of "input" field
        $path = 'uploads/';      // folder: public/uploads/ contain images
        $this->uploadfiles($name_input, $path);  // call function to execute
    }

    public function remove(){
        $path = 'uploads/';     // folder: public/uploads/ contain images
        $file = $path . $_POST['file'];

        if(file_exists($file)){
            unlink($file);
        }
    }

    // Each file is executed through Ajax
    public function uploadfiles($name_input, $path){
        // initialize FileUploader
        $FileUploader = new \FileUploader($name_input, array(
            'uploadDir' => $path,
            'title' => 'name',
        ));

        // call to upload the files
        $data = $FileUploader->upload();

        // if uploaded and success
        if($data['isSuccess'] && count($data['files']) > 0) {
            // get uploaded files
            $fileList = $FileUploader->getFileList();

            /* CODE HERE TO PUT INTO DATABASE
            foreach($fileList as $file){
                $File = new File();
                $File->name = $file['name'];    // get name of file
            }

            */
            // export to js
            echo json_encode($data);
            exit;
        }
        // if warnings
        if($data['hasWarnings']) {
            // get warnings
            $warnings = $data['warnings'];

            echo '<pre>';
            print_r($warnings);
            echo '</pre>';
            exit;
        }
    }
}
