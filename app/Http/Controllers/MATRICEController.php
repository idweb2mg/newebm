<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MATRICE;
use App\FRMATRICE;
use App\FRPARTENARIAT;
use App\FRACTIVITESCLES;
use App\FRCANAUX;
use App\FRPROPOSITIONDEVALEUR;
use App\FRRELATIONCLIENT;
use App\FRRESSOURCESCLES;
use App\FRSEGMENTSCLIENTS;
use App\FRSOURCESDEREVENUS;
use App\FRSTRUCTUREDECOUTS;

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

      $FRPROPOSITIONDEVALEUR = new FRPROPOSITIONDEVALEUR();
      $FRPROPOSITIONDEVALEUR->ID_PROPOSITIONDEVALEUR = Input::get('ID_PROPOSITIONDEVALEUR');
      $FRPROPOSITIONDEVALEUR->TITREPROPOSITIONDEVALEUR = Input::get('TITREPROPOSITIONDEVALEUR');
      $FRPROPOSITIONDEVALEUR->CONTENUPROPOSITIONDEVALEUR = Input::get('CONTENUPROPOSITIONDEVALEUR');
      $FRPROPOSITIONDEVALEUR->TYPEPROPOSITIONDEVALEUR = Input::get('TYPEPROPOSITIONDEVALEUR');
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

        /// clé primaire
        $ID_PARTENARIAT = $request->ID_PARTENARIAT;
        // autres champs de la base
        $TITREPARTENARIAT = $request->TITREPARTENARIAT;
        $TYPEPARTENARIAT = $request->TYPEPARTENARIAT;
        $CONTENUPARTENARIAT = $request->CONTENUPARTENARIAT;
        // Clés étrangères
        $ID_MATRICE =$request->ID_MATRICE;
        $ID_HELP = $request->ID_HELP;
        // enregistrement en bdd
        $FR=\DB::table('FRPARTENARIAT')->where('ID_MATRICE', $ID_MATRICE)->get();
        if (!$FR->isEmpty()){
          // mis à jour en BDD
          $FRPARTENARIAT=\DB::table('FRPARTENARIAT')
          ->update([ 'TYPEPARTENARIAT' => $TYPEPARTENARIAT,
            'CONTENUPARTENARIAT' => $CONTENUPARTENARIAT,
                'TITREPARTENARIAT' => $TITREPARTENARIAT,
                    'ID_HELP' => 3,
                  'ID_MATRICE' => $ID_MATRICE
                ]);

          $response = ['status' => 'success'];

          }
          else
          {
            // insertion en BDD
            $FRPARTENARIA= \DB::table('FRPARTENARIAT')
            ->insert([ 'TYPEPARTENARIAT' => $TYPEPARTENARIAT,
              'CONTENUPARTENARIAT' => $CONTENUPARTENARIAT,
                  'TITREPARTENARIAT' => $TITREPARTENARIAT,
                      'ID_HELP' => 3,
                    'ID_MATRICE' => $ID_MATRICE
                  ]);

            $response = ['status' => 'success'];
          }

          $FRPARTENAIRES= \DB::table('FRPARTENARIAT')->get();
          $MATRICES= \DB::table('FRMATRICE')->get();

    } // if ($validationForm)

    return  \Response::json($response);
  }// public function editPartenaires

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
  		// clé primaire
      $ID_ACTIVITESCLES 		= $request->ID_ACTIVITESCLES;
			// autres champs de la base
      $TYPEACTIVITESCLES 		= $request->TYPEACTIVITESCLES;
      $CONTENUACTIVITESCLES 	= $request->CONTENUACTIVITESCLES;
      $TITREACTIVITESCLES 	= $request->TITREACTIVITESCLES;
      // Clés étrangères
      $ID_HELP 				     = $request->ID_HELP;
      $ID_MATRICE 			   = $request->ID_MATRICE;
	    // enregistrement en bdd
			$FR=\DB::table('FRACTIVITESCLES')->where('ID_MATRICE', $ID_MATRICE)->get();

			if (!$FR->isEmpty())
			{
        // mis à jour en BDD
				$FRACTIVITESCLES = \DB::table('FRACTIVITESCLES')
				->update([
							'TYPEACTIVITESCLES' 	=> $TYPEACTIVITESCLES,
							'CONTENUACTIVITESCLES'	=> $CONTENUACTIVITESCLES,
							'TITREACTIVITESCLES'	=> $TITREACTIVITESCLES,
							'ID_HELP'				=> 4,
							'ID_MATRICE'			=> $ID_MATRICE
				  ]);

				$response = ['status' => 'success'];

			} else
			{
          // insertion en BDD
				$FRACTIVITESCLES = \DB::table('FRACTIVITESCLES')
				->insert([
							'TYPEACTIVITESCLES' 	=> $TYPEACTIVITESCLES,
							'CONTENUACTIVITESCLES' 	=> $CONTENUACTIVITESCLES,
							'TITREACTIVITESCLES'	=> $TITREACTIVITESCLES,
							'ID_HELP' 				=> 4,
							'ID_MATRICE' 			=> $ID_MATRICE
					]);

				$response = ['status' => 'success'];

			} // elseif($FR->isEmpty()

			$FRACTIVITESCLES = \DB::table('FRACTIVITESCLES')->get();
			$MATRICES = \DB::table('FRMATRICE')->get();

		} // if ($validationForm)

		//return  \Response::json($response);
    		return  \Response::json($response);

	} //public function editActivites


  /*
  	------------------------------------------------
  	Bloc CANAUX
  	------------------------------------------------
  	*/
  	public function editCanaux(Request $request)
  	{
  		$validationForm = true;

  		if ($validationForm)
  		{
      		// clé primaire
          $ID_CANAUX 			= $request->ID_CANAUX;
  				// autres champs de la base
          $TYPECANAUX 		= $request->TYPECANAUX;
          $RECONNAISSANCE 	= $request->RECONNAISSANCE;
          $EVALUATION 		= $request->EVALUATION;
          $ACHAT 				= $request->ACHAT;
          $PRESTATION 		= $request->PRESTATION;
          $VENTE 				= $request->VENTE;
          $CONTENUCANAUX 		= $request->CONTENUCANAUX;
          $TITRECANAUX 		= $request->TITRECANAUX;
          // Clés étrangères
          $ID_HELP 			= $request->ID_HELP;
          $ID_MATRICE 		= $request->ID_MATRICE;
  				// enregistrement en bdd
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
    							'ID_HELP'			=> 9,
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
  							'ID_HELP'			=> 9,
  							'ID_MATRICE'		=> $ID_MATRICE
  						]);

  					$response = ['status' => 'success'];

  				} // elseif($FR->isEmpty()

    			$FRCANAUX = \DB::table('FRCANAUX')->get();
    			$MATRICES = \DB::table('FRMATRICE')->get();

    		} // if ($validationForm)

    		return  \Response::json($response);

  	} // public function editCanaux(Request $request)

    /*
    		------------------------------------------------
    		Bloc PROPOSITIONDEVALEUR
    		------------------------------------------------
    		*/
    		public function editPropositions(Request $request)
    		{
      			$validationForm = true;

      			if ($validationForm)
      			{
        				// clé primaire
                $ID_PROPOSITIONDEVALEUR 		   = $request->ID_PROPOSITIONDEVALEUR;
        				// autres champs de la base
                $TYPEPROPOSITIONDEVALEUR 		   = $request->TYPEPROPOSITIONSDEVALEUR;
                $CONTENUPROPOSITIONDEVALEUR	 = $request->CONTENUPROPOSITIONSDEVALEUR	;
                $TITREPROPOSITIONDEVALEUR 		= $request->TITREPROPOSITIONSDEVALEUR;
                // Clés étrangères
                $ID_HELP 						         = $request->ID_HELP;
                $ID_MATRICE 					       = $request->ID_MATRICE;
        				// enregistrement en bdd
                $FR=\DB::table('FRPROPOSITIONDEVALEUR')->where('ID_MATRICE', $ID_MATRICE)->get();
        				if (!$FR->isEmpty())
        				{
                  // mis à jour en BDD
        					$FRPROPOSITIONDEVALEUR = \DB::table('FRPROPOSITIONDEVALEUR')
        					->update([
        								'TYPEPROPOSITIONDEVALEUR' 			=> $TYPEPROPOSITIONDEVALEUR,
        								'CONTENUPROPOSITIONDEVALEUR'		=> $CONTENUPROPOSITIONDEVALEUR	,
        								'TITREPROPOSITIONDEVALEUR'			=> $TITREPROPOSITIONDEVALEUR,
        								'ID_HELP'					              => 7,
        								'ID_MATRICE'			             => $ID_MATRICE
        					  ]);

        					$response = ['status' => 'success'];

        				}
                else
      					{
                  try {
      						// insertion en BDD
      						$FRPROPOSITIONDEVALEUR = \DB::table('FRPROPOSITIONDEVALEUR')
      						->insert([
      							'TYPEPROPOSITIONDEVALEUR' 			=> $TYPEPROPOSITIONDEVALEUR,
      							'CONTENUPROPOSITIONDEVALEUR'		=> $CONTENUPROPOSITIONDEVALEUR	,
      							'TITREPROPOSITIONDEVALEUR'			=> $TITREPROPOSITIONDEVALEUR,
      							'ID_HELP'							         => 7,
      							'ID_MATRICE'						       => $ID_MATRICE
      							]);
                  } catch (\Exception $e) {
                    echo $e->getMessage();die;
                  }
    						$response = ['status' => 'success'];

      					} // elseif($FR->isEmpty()

        				$FRPROPOSITIONDEVALEUR 	= \DB::table('FRPROPOSITIONDEVALEUR')->get();
        				$MATRICES 							= \DB::table('FRMATRICE')->get();

      			} // if ($validationForm)

      			return  \Response::json($response);

    		} // public function editPropositions(Request $request)

      /*
    		------------------------------------------------
    		Bloc RELATIONCLIENT
    		------------------------------------------------
    		*/
    		public function editRelation(Request $request)
    		{
    			$validationForm = true;

    			if ($validationForm)
    			{

    				// clé primaire
            $ID_RELATIONCLIENT 			= $request->ID_RELATIONCLIENT;
            // autres champs de la base
            $TYPERELATIONCLIENT 		= $request->TYPERELATIONCLIENT;
            $CONTENURELATIONCLIENT 	= $request->CONTENURELATIONCLIENT;
            $TITRERELATIONCLIENT 		= $request->TITRERELATIONCLIENT;
            // Clés étrangères
            $ID_HELP 					      = $request->ID_HELP;
            $ID_MATRICE 				    = $request->ID_MATRICE;

            // enregistrement en bdd
    				$FR=\DB::table('FRRELATIONCLIENT')->where('ID_MATRICE', $ID_MATRICE)->get();

        		if (!$FR->isEmpty())
    				{
              // mis à jour en BDD
    					$FRRELATIONCLIENT = \DB::table('FRRELATIONCLIENT')
    					->update([
    								'TYPERELATIONCLIENT' 		=> $TYPERELATIONCLIENT,
    								'CONTENURELATIONCLIENT'	=> $CONTENURELATIONCLIENT,
    								'TITRERELATIONCLIENT'		=> $TITRERELATIONCLIENT,
    								'ID_HELP'					      => 8,
    								'ID_MATRICE'				    => $ID_MATRICE
    					  ]);

    					$response = ['status' => 'success'];

    				} else
    					{
    						/// insertion en BDD
    						$FRRELATIONCLIENT = \DB::table('FRRELATIONCLIENT')
    						->insert([
    							'TYPERELATIONCLIENT' 		=> $TYPERELATIONCLIENT,
    							'CONTENURELATIONCLIENT'	=> $CONTENURELATIONCLIENT,
    							'TITRERELATIONCLIENT'		=> $TITRERELATIONCLIENT,
    							'ID_HELP'					     => 8,
    							'ID_MATRICE'				   => $ID_MATRICE
    							]);

    						$response = ['status' => 'success'];

    					} // elseif($FR->isEmpty()

    				$FRRELATIONCLIENT 	     = \DB::table('FRRELATIONCLIENT')->get();
    				$MATRICES 							 = \DB::table('FRMATRICE')->get();

    			} // if ($validationForm)

    			return  \Response::json($response);

    		} // public function editRelation(Request $request)

        /*
    		------------------------------------------------
    		Bloc RESSOURCESCLES
    		------------------------------------------------
    		*/
    		public function editRessources(Request $request)
    		{
    			$validationForm = true;

    			if ($validationForm)
    			{

    				// clé primaire
    				$ID_RESSOURCESCLES 			  = $request->ID_RESSOURCESCLES;
    				// autres champs de la base
    				$TYPERESSOURCESCLES 		  = $request->TYPERESSOURCESCLES;
    				$TYPEPHYSIQUES 				   = $request->TYPEPHYSIQUES;
    				$TYPEINTELLECTUELLES 		 = $request->TYPEINTELLECTUELLES;
    				$TYPEHUMAINES 				   = $request->TYPEHUMAINES;
    				$CONTENURESSOURCESCLES 	= $request->CONTENURESSOURCESCLES;
    				$TITRERESSOURCESCLES 		= $request->TITRERESSOURCESCLES;
    				// Clés étrangères
    				$ID_HELP 					      = $request->ID_HELP;
    				$ID_MATRICE 				    = $request->ID_MATRICE;
    				// enregistrement en bdd
    				$FR=\DB::table('FRRESSOURCESCLES')->where('ID_MATRICE', $ID_MATRICE)->get();

    				if (!$FR->isEmpty())
    				{
    					// mis à jour en BDD
    					$FRRESSOURCESCLES = \DB::table('FRRESSOURCESCLES')
    					->update([
    								'TYPEPHYSIQUES' 				  => $TYPEPHYSIQUES,
    								'TYPEINTELLECTUELLES' 		=> $TYPEINTELLECTUELLES,
    								'TYPEHUMAINES' 					  => $TYPEHUMAINES,
    								'TYPEFINANCIERES' 				=> $TYPEFINANCIERES,
    								'CONTENURESSOURCESCLES'		=> $CONTENURESSOURCESCLES,
    								'TITRERESSOURCESCLES'			=> $TITRERESSOURCESCLES,
    								'ID_HELP'						      => 5,
    								'ID_MATRICE'					   => $ID_MATRICE
    					  ]);

    					$response = ['status' => 'success'];

    				} else
    				{
      					// insertion en BDD
    					$FRRESSOURCESCLES = \DB::table('FRRESSOURCESCLES')
    					->insert([
    						'TYPEPHYSIQUES' 						=> $TYPEPHYSIQUES,
    						'TYPEINTELLECTUELLES' 			=> $TYPEINTELLECTUELLES,
    						'TYPEHUMAINES' 							=> $TYPEHUMAINES,
    						'TYPEFINANCIERES' 					=> $TYPEFINANCIERES,
    						'CONTENURESSOURCESCLES'			=> $CONTENURESSOURCESCLES,
    						'TITRERESSOURCESCLES'				=> $TITRERESSOURCESCLES,
    						'ID_HELP'										=> 5,
    						'ID_MATRICE'								=> $ID_MATRICE
    						]);

    					$response = ['status' => 'success'];

    				} // if($FR->isEmpty()

    				$FRRESSOURCESCLES = \DB::table('FRRESSOURCESCLES')->get();
    				$MATRICES = \DB::table('FRMATRICE')->get();

    			} // if ($validationForm)

    			return  \Response::json($response);

    		} // public function editRessources(Request $request)








} // class MATRICEController extends Controller
