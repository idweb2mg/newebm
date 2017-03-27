<?php

namespace App\Http\Controllers;
use App\User;
use App\FRPROJET;
use Illuminate\Http\Request;

class HomeController extends Controller
{
        /**
         * Create a new controller instance.
         *
         * @return void
         */

        public function __construct()
        {
           $this->middleware('auth');
        }


        /**
         * Show the application dashboard.
         *
         * @return \Illuminate\Http\Response
         */
        public function home()
        {
              
                return view('home');
        }
        

        public function editProjet(Request $request)
         {
       $validationForm = true;

        if ($validationForm) {
    
            $LIBELLEPROJET = $request->LIBELLEPROJET;
            $TYPEPROJET = $request->TYPEPROJET;
            $ID_LANGUE = $request->ID_LANGUE ;
            $ID_HELP = $request->ID_HELP;
            $ID_USERS = $request->ID_USERS;
            
            try{$projet = \DB::table('FRPROJET')->where('ID_USERS', '1')->get();
       }catch(\Exception $e){echo $e->getMessage();}
                if(!$projet->isEmpty()){
                     $FRPROJET=\DB::table('FRPROJET')->update(

                ['LIBELLEPROJET' => $LIBELLEPROJET,
                'TYPEPROJET'=> $TYPEPROJET,
                'ID_LANGUE' =>1,
                'ID_HELP' =>1,
                'ID_USERS' => 1]);
            $response = ['status' => 'success'];
            }

                }
                else{
            $FRPROJET=\DB::table('FRPROJET')->insert(

                ['LIBELLEPROJET' => $LIBELLEPROJET,
                'TYPEPROJET'=> $TYPEPROJET,
                'ID_LANGUE' =>1,
                'ID_HELP' =>1,
                'ID_USERS' => 1]);
            $response = ['status' => 'success'];
            }
         return  \Response::json($response);
            

        }

        public function edithome(Request $request)
    {
       $validationForm = true;
       if( $validationForm){
        // \DB::enableQueryLog();
        $id= Input::get('ID_PROJET');
        $DATECREATION= $request->DATECREATION;
       $projets= \DB::table('frprojet')->count();
       $date =\DB::table('frprojet')->select('DATECREATION')->get();
       //var_dump($date[0]);die;
         //$projet1= \DB::table('frprojet')->select(\DB::raw('count(*) as ID_PROJET,DATECREATION'))->groupBy('DATECREATION')->get();
        //$projet1= \DB::table('frprojet')->select(\DB::raw('count(*) as DATECREATION'))->groupBy('DATECREATION')->get();
        // $projet1= \DB::table('frprojet')->select(\DB::raw('count(*) as DATECREATION'))->groupBy('DATECREATION')->get();
        $projet1= \DB::select('select count(DATECREATION) as inscrits from frprojet group By DATECREATION ');
var_dump($projet1);die;
        //$p= var_dump(\DB::getQueryLog($projet1));
           //$response = ['status' => 'success'];



       }else{
         $response = ['status' => 'pokemon'];
       }

       $dates = [];

       foreach ($date as $dateDb) {
         $projet1= \DB::select('select count(DATECREATION) as inscrits from frprojet group By DATECREATION ');
         //var_dump($date);
         $dates[] = [
           'date' => $dateDb->DATECREATION,
           'inscrits' => $projet1
         ];
         //$i += 10;
       }
//var_dump($dates);die;

       return  \Response::json($dates);
     }

    }

