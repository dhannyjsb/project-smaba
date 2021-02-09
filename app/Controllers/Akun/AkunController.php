<?php

namespace App\Controllers\Akun;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;
use App\Models\Akun_Model;
use App\Models\App\Tahun_Model;
use App\Models\App\Guru_Model;
use App\Models\App\Tendik_Model;
use App\Models\App\Siswa_Model;

class AkunController extends Controller
{

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['array', 'form', 'url', 'date'];

    /**
     * Constructor.
     */
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        $this->AkunModel =  new Akun_Model();
        $this->TahunModel =  new Tahun_Model();
        $this->GuruModel =  new Guru_Model();
        $this->TendikModel =  new Tendik_Model();
        $this->DataSiswaModel =  new Siswa_Model();

        //--------------------------------------------------------------------
        // Preload any models, libraries, etc, here.
        //--------------------------------------------------------------------
        // E.g.:
        $session = \Config\Services::session();
        $this->user_id = $session->get('user_id');


        $this->user_name = $this->AkunModel->get_user_info($this->user_id); // Get Login User ID
        $this->get_tahun_aktif = $this->TahunModel->tahun_sedang_aktif();
        $this->tahun_aktif = $this->get_tahun_aktif['tahun_pelajaran'];
        $this->role_id = $this->user_name['user_role_id'];
    }
}
