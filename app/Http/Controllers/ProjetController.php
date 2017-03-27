<?php
namespace App\Http\Controllers;
use App\Http\Middleware\auth;
use Illuminate\Http\RedirectResponse;
use App\Services\PannelAdmin;
use App\User;
use App\Models\FRMATRICE;
use App\frprojet;
use App\Repositories\UserRepository;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Input;

class ProjetController extends Controller
{
  protected $UserRepository;

  /**
   * The RoleRepository instance.
   *
   * @var \App\Repositories\RoleRepository
   */
  protected $roleRepository;
  public function __construct()
  {

      $this->middleware('admin');
  }



  public function projet($id)
  {

//\DB::enableQueryLog();

  //  var_dump($id);
    $MATRICES=\DB::table('frmatrice')
    ->join('frprojet','frprojet.ID_PROJET','=','frmatrice.ID_PROJET' )
    //->join('users', 'frprojet.ID_USERS','=', 'frprojet.ID_USERS')
    ->where('ID_USERS','=',$id )
    ->get();
//var_dump(\DB::getQueryLog());
      return view('back.users.projet', compact('MATRICES'));
  }
    /**
     * Create a new AdminController instance.
     *
     * @return void
     */

    /**
    * Show the admin panel.
    *
    * @return \Illuminate\Http\Response
    */




}
