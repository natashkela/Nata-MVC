<?php
/**
* Base Controller
* Loads the models and the views
*/
class Controller{
  //Load models
  public function model($model){
    //require models
    require_once '../app/models/'.$model.'.php';
    //Instantiate the model
    return new $model();
  }

  //Load view
  public function view($view, $data=[]){
    if(file_exists('../app/views/'.$view.'.php')){
      require_once '../app/views/'.$view.'.php';
    }
    else{
      die("View does not exist");
    }
  }
}
?>
