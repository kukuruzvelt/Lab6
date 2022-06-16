<?php
class BaseController extends Controller {

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if ( ! is_null($this->layout))
        {
            $this->layout = View::make($this->layout);
        }
    }

    public function getServicesForMaster($master_id){
        return View::make('services', ['mas' => User::services($master_id)]);
    }

    public function getMastersForService($user_id){
        return View::make('masters', ['mas' => Service::users($user_id)]);
    }

    public function getServices(){
        return View::make('services', ['mas' =>
            Service::all()]);
    }

    public function getMasters(){
        return View::make('masters', ['mas' => User::all()]);
    }

    public function insertService($name, $price){
        Service::insertService($name, $price);
        return View::make('hello');
    }

    public function insertUser($name, $surname){
        User::insertUser($name, $surname);
        return View::make('hello');
    }

}
