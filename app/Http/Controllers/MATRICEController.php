<?php

namespace App\Http\Controllers;
use App\MATRICE;
use App\FRMATRICE;
use App\FRPARTENARIAT;
use App\FRACTIVITESCLES;
use App\FRCANAUX;

use Illuminate\Http\Request;

class MATRICEController extends Controller
{
  public function view($id){
    $id= \DB::table('frmatrice')->where('ID_MATRICE')->get();
    return view('frmatrice', ['MATRICE'=>$id]);
  }


  public function savematrice(){
    $FRPROJET = new FRPROJET();
    $FRPROJET->ID_PROJET = Input::get('ID_PROJET');
    $FRPROJET->TITREPROJET = Input::get('TITREPROJET');
    $FRPROJET->LIBELLEPROJET= Input::get('LIBELLEPROJET');
    $FRPROJET->save();



      $FRSEGMENTSCLIENTS = new FRSEGMENTSCLIENTS();
      $FRSEGMENTSCLIENTS->ID_SEGMENTS = Input::get('ID_SEGMENTS');
      $FRSEGMENTSCLIENTS->TITRESEGMENTS = Input::get('TITRESEGMENTS');
      $FRSEGMENTSCLIENTS->TYPESEGMENTS = Input::get('TYPESEGMENTS');
    //  $FRSEGMENTSCLIENTS->LIBELLEPROJET= Input::get('LIBELLEPROJET');
      $FRSEGMENTSCLIENTS->CONTENUSEGMENTS= Input::get('CONTENUSEGMENTS');
      $FRSEGMENTSCLIENTS->save();


      $FRCANAUX = new FRCANAUX();
      $FRCANAUX->ID_CANAUX = Input::get('ID_CANAUX');
      $FRCANAUX->TITRECANAUX = Input::get('TITRECANAUX');
    //  $FRSEGMENTSCLIENTS->LIBELLEPROJET= Input::get('LIBELLEPROJET');
      $FRCANAUX->CONTENUCANAUX= Input::get('CONTENUCANAUX');
      $FRCANAUX->RECONNAISSANCE= Input::get('RECONNAISSANCE');
      $FRCANAUX->EVALUATION= Input::get('EVALUATION');
      $FRCANAUX->ACHAT= Input::get('ACHAT');
      $FRCANAUX->PRESTATION= Input::get('PRESTATION');
      $FRCANAUX->VENTE= Input::get('VENTE');
      $FRCANAUX->save();

      $FRPROPOSITIONSDEVALEUR = new FRPROPOSITIONDEVALEUR();
      $FRPROPOSITIONSDEVALEUR->ID_PROPOSITIONS = Input::get('ID_PROPOSITIONDEVALEUR');
      $FRPROPOSITIONSDEVALEUR->TITREPROPOSITIONSDEVALEUR = Input::get('TITREPROPOSITIONSDEVALEUR');
      $FRPROPOSITIONSDEVALEUR->CONTENUPROPOSITIONSDEVALEUR = Input::get('CONTENUPROPOSITIONSDEVALEUR');
      $FRPROPOSITIONSDEVALEUR->TYPEPROPOSITIONSDEVALEUR = Input::get('TYPEPROPOSITIONDEVALEUR');
      $FRPROPOSITIONDEVALEUR->save();

      $FRSOURCESDEREVENUS = new FRSOURCESDEREVENUS();
      $FRSOURCESDEREVENUS->ID_SOURCESDEREVENUS = Input::get('ID_SOURCESDEREVENUS');
      $FRSOURCESDEREVENUS->TITRESOURCESDEREVENUS = Input::get('TITRESOURCESDEREVENUS');
      $FRSOURCESDEREVENUS->TYPESOURCESDEREVENU= Input::get('TYPESOURCESDEREVENU');

    //  $FRSEGMENTSCLIENTS->LIBELLEPROJET= Input::get('LIBELLEPROJET');
      $FRSOURCESDEREVENUS->CONTENUSOURCESDEREVENUS= Input::get('CONTENUSOURCESDEREVENUS');
      $FRSOURCESDEREVENUS->PRIXFIXE= Input::get('PRIXFIXE');
      $FRSOURCESDEREVENUS->PRIXVARIABLE= Input::get('PRIXVARIABLE');
      $FRSOURCESDEREVENUS->save();

      $FRRESSOURCESCLES = new FRRESSOURCESCLES();
      $FRRESSOURCESCLES->ID_RESSOURCESCLES = Input::get('ID_RESSOURCESCLES');
      $FRRESSOURCESCLES->TITRERESSOURCESCLES = Input::get('TITRERESSOURCESCLES');
    //  $FRSEGMENTSCLIENTS->LIBELLEPROJET= Input::get('LIBELLEPROJET');
      $FRRESSOURCESCLES->CONTENURESSOURCESCLES= Input::get('CONTENURESSOURCESCLES');
      $FRRESSOURCESCLES->TYPEPHYSIQUES= Input::get('TYPEPHYSIQUES');
      $FRRESSOURCESCLES->TYPEINTELLECTUELLES= Input::get('TYPEINTELLECTUELLES');
      $FRRESSOURCESCLES->TYPEHUMAINES= Input::get('TYPEHUMAINES');
      $FRRESSOURCESCLES->TYPEFINANCIERES= Input::get('TYPEFINANCIERES');
      $FRRESSOURCESCLES->save();

      $FRACTIVITESCLES = new FRACTIVITESCLES();
      $FRACTIVITESCLES->ID_ACTIVITESCLES = Input::get('ID_ACTIVITESCLES');
      $FRACTIVITESCLES->TITREACTIVITESCLES = Input::get('TITREACTIVITESCLES');
      $FRACTIVITESCLES->TYPEACTIVITESCLES = Input::get('TYPEACTIVITESCLES');

    //  $FRSEGMENTSCLIENTS->LIBELLEPROJET= Input::get('LIBELLEPROJET');
      $FRACTIVITESCLES->CONTENUACTIVITESCLES= Input::get('CONTENUACTIVITESCLES');
      $FRACTIVITESCLES->save();


      $FRPARTENARIAT = new FRPARTENARIAT();
      $FRPARTENARIAT->ID_PARTENARIAT = Input::get('ID_PARTENARIAT');
      $FRPARTENARIAT->TITREPARTENARIAT = Input::get('TITREPARTENARIAT');
      $FRPARTENARIAT->TYPEPARTENARIAT= Input::get('TYPEPARTENARIAT');
    //  $FRSEGMENTSCLIENTS->LIBELLEPROJET= Input::get('LIBELLEPROJET');
      $FRPARTENARIAT->CONTENUPARTENARIAT= Input::get('CONTENUPARTENARIAT');
      $FRPARTENARIAT->save();

      $FRSTRUCTUREDECOUTS=App\FRSTRUCTUREDECOUTS::all();
      $FRSTRUCTUREDECOUTS = new FRSTRUCTUREDECOUTS();
      $FRSTRUCTUREDECOUTS->ID_STRUCTUREDECOUTS = Input::get('ID_STRUCTUREDECOUTS');
      $FRSTRUCTUREDECOUTS->TITRESTRUCTUREDECOUTS = Input::get('TITRESTRUCTUREDECOUTS');
      $FRSTRUCTUREDECOUTS->TYPESTRUCTUREDECOUTS = Input::get('TYPESTRUCTUREDECOUTS');
    //  $FRSEGMENTSCLIENTS->LIBELLEPROJET= Input::get('LIBELLEPROJET');
      $FRSTRUCTUREDECOUTS->CONTENUSTRUCTUREDECOUTS= Input::get('CONTENUSTRUCTUREDECOUTS');
      $FRSTRUCTUREDECOUTS->COUTSFIXES= Input::get('COUTSFIXES');
      $FRSTRUCTUREDECOUTS->COUTSVARIABLES= Input::get('COUTSVARIABLES');
      $FRSTRUCTUREDECOUTS->ECONOMIESDECHELLES= Input::get('ECONOMIESDECHELLES');
      $FRSTRUCTUREDECOUTS->ECONOMIESENVERGURE= Input::get('ECONOMIESENVERGURE');
      $FRSTRUCTUREDECOUTS->save();

      $FRRELATIONCLIENT = new FRRELATIONCLIENT();
      $FRRELATIONCLIENT->ID_RELATIONCLIENT = Input::get('ID_RELATIONCLIENT');
      $FRRELATIONCLIENT->TITRERELATIONCLIENT = Input::get('TITRERELATIONCLIENT');
      $FRRELATIONCLIENT->TYPERELATIONCLIENT= Input::get('TYPERELATIONCLIENT');
    //  $FRSEGMENTSCLIENTS->LIBELLEPROJET= Input::get('LIBELLEPROJET');
      $FRPARTENARIAT->CONTENURELATIONCLIENT= Input::get('CONTENURELATIONCLIENT');
      $FRPARTENARIAT->save();

  }

  public function editPartenaires(Request $request)
  {
   $validationForm = true;

    if ($validationForm) {

        // enregistrement en bdd et action de modifier dans la basse de donnée avec une matrice existant
        $ID_PARTENARIAT = $request->ID_PARTENARIAT;

        $TITREPARTENARIAT = $request->TITREPARTENARIAT;
        $TYPEPARTENARIAT = $request->TYPEPARTENARIAT;
        $CONTENUPARTENARIAT = $request->CONTENUPARTENARIAT;

        $ID_MATRICE =$request->ID_MATRICE;
        $ID_HELP = $request->ID_HELP;

        $FR=\DB::table('FRPARTENARIAT')->where('ID_MATRICE', $ID_MATRICE)->get();

        if (!$FR->isEmpty()){

          $FRPARTENARIAT=\DB::table('FRPARTENARIAT')
          ->update([ 'TYPEPARTENARIAT' => $TYPEPARTENARIAT,
            'CONTENUPARTENARIAT' => $CONTENUPARTENARIAT,
                'TITREPARTENARIAT' => $TITREPARTENARIAT,
                    'ID_HELP' => 1,
                  'ID_MATRICE' => $ID_MATRICE
                ]);

          $response = ['status' => 'success'];

          }
          else
          {

            // enregistrement en bdd et action de sauvegarder dans la basse de donnée avec une nouvelle matrice
            $FRPARTENARIA= \DB::table('FRPARTENARIAT')

            ->insert([ 'TYPEPARTENARIAT' => $TYPEPARTENARIAT,
              'CONTENUPARTENARIAT' => $CONTENUPARTENARIAT,
                  'TITREPARTENARIAT' => $TITREPARTENARIAT,
                      'ID_HELP' => 1,
                    'ID_MATRICE' => $ID_MATRICE
                  ]);

            $response = ['status' => 'success'];
          }

          $FRPARTENAIRES= \DB::table('FRPARTENARIAT')->get();
          $MATRICES= \DB::table('FRMATRICE')->get();

    } // if ($validationForm)

    return  \Response::json($response);
  }

  /*
	------------------------------------------------
	Bloc ACTIVITESCLES
	------------------------------------------------
	*/
	public function editActivites(Request $request)
	{
		$validationForm = true;

		if ($validationForm)
		{
			// enregistrement en bdd et action de modifier dans la basse de donnée avec une matrice existant
      $ID_ACTIVITESCLES 		= $request->ID_ACTIVITESCLES;

      $TYPEACTIVITESCLES 		= $request->TYPEACTIVITESCLES;
      $CONTENUACTIVITESCLES 	= $request->CONTENUACTIVITESCLES;
      $TITREACTIVITESCLES 	= $request->TITREACTIVITESCLES;

      $ID_HELP 				     = $request->ID_HELP;
      $ID_MATRICE 			   = $request->ID_MATRICE;

			$FR=\DB::table('FRACTIVITESCLES')->where('ID_MATRICE', $ID_MATRICE)->get();

			if (!$FR->isEmpty())
			{
				$FRACTIVITESCLES = \DB::table('FRACTIVITESCLES')
				->update([
							'TYPEACTIVITESCLES' 	=> $TYPEACTIVITESCLES,
							'CONTENUACTIVITESCLES'	=> $CONTENUACTIVITESCLES,
							'TITREACTIVITESCLES'	=> $TITREACTIVITESCLES,
							'ID_HELP'				=> 1,
							'ID_MATRICE'			=> $ID_MATRICE
				  ]);

				$response = ['status' => 'success'];

			} else
			{
				// enregistrement en bdd et action de sauvegarder dans la base de donnée avec une nouvelle matrice
				$FRACTIVITESCLES = \DB::table('FRACTIVITESCLES')
				->insert([
							'TYPEACTIVITESCLES' 	=> $TYPEACTIVITESCLES,
							'CONTENUACTIVITESCLES' 	=> $CONTENUACTIVITESCLES,
							'TITREACTIVITESCLES'	=> $TITREACTIVITESCLES,
							'ID_HELP' 				=> 1,
							'ID_MATRICE' 			=> $ID_MATRICE
					]);

				$response = ['status' => 'success'];

			} // elseif($FR->isEmpty()

			$FRACTIVITESCLES = \DB::table('FRACTIVITESCLES')->get();
			$MATRICES = \DB::table('FRMATRICE')->get();

		} // if ($validationForm)

		//return  \Response::json($response);
    		return  \Response::json($response);

	} // public function editACTIVITESCLES(Request $request)


  /*
  	------------------------------------------------
  	Bloc CANAUX
  	------------------------------------------------
  	*/
  	public function editCANAUX(Request $request)
  	{
  		$validationForm = true;

  		if ($validationForm)
  		{
    			// enregistrement en bdd et action de modifier dans la basse de donnée avec une matrice existant
          $ID_CANAUX 			= $request->ID_CANAUX;

          $TYPECANAUX 		= $request->TYPECANAUX;
          $RECONNAISSANCE 	= $request->RECONNAISSANCE;
          $EVALUATION 		= $request->EVALUATION;
          $ACHAT 				= $request->ACHAT;
          $PRESTATION 		= $request->PRESTATION;
          $VENTE 				= $request->VENTE;
          $CONTENUCANAUX 		= $request->CONTENUCANAUX;
          $TITRECANAUX 		= $request->TITRECANAUX;

          $ID_HELP 			= $request->ID_HELP;
          $ID_MATRICE 		= $request->ID_MATRICE;

    			$FR=\DB::table('FRCANAUX')->where('ID_MATRICE', $ID_MATRICE)->get();

    			if (!$FR->isEmpty())
    			{
    				$FRCANAUX = \DB::table('FRCANAUX')
    				->update([
    							'TYPECANAUX' 		=> $TYPECANAUX,
    							'RECONNAISSANCE' 	=> $RECONNAISSANCE,
    							'EVALUATION' 		=> $EVALUATION,
    							'ACHAT' 			=> $ACHAT,
                  'PRESTATION' => $PRESTATION,
    							'VENTE' 			=> $VENTE,
    							'CONTENUCANAUX'		=> $CONTENUCANAUX,
    							'TITRECANAUX'		=> $TITRECANAUX,
    							'ID_HELP'			=> 1,
    							'ID_MATRICE'		=> $ID_MATRICE
    				  ]);

    				$response = ['status' => 'success'];

    			}
          else
  				{
  					// enregistrement en bdd et action de sauvegarder dans la base de donnée avec une nouvelle matrice
  					$FRCANAUX = \DB::table('FRCANAUX')
  					->insert([
  							'TYPECANAUX' 		=> $TYPECANAUX,
  							'RECONNAISSANCE' 	=> $RECONNAISSANCE,
  							'EVALUATION' 		=> $EVALUATION,
  							'ACHAT' 			=> $ACHAT,
                'PRESTATION' => $PRESTATION,
  							'VENTE' 			=> $VENTE,
  							'CONTENUCANAUX'		=> $CONTENUCANAUX,
  							'TITRECANAUX'		=> $TITRECANAUX,
  							'ID_HELP'			=> 1,
  							'ID_MATRICE'		=> $ID_MATRICE
  						]);

  					$response = ['status' => 'success'];

  				} // elseif($FR->isEmpty()

    			$FRCANAUX = \DB::table('FRCANAUX')->get();
    			$MATRICES = \DB::table('FRMATRICE')->get();

    		} // if ($validationForm)

    		return  \Response::json($response);

  	} // public function editCANAUX(Request $request)







} // class MATRICEController extends Controller
