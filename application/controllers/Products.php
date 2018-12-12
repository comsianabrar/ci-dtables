<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH . '/libraries/ssp.class.php';

class Products extends CI_Controller
{
    public function index()
    {
        $this->load->view('users/index');
    }

    public function server_side_processing()
    {
        $table = 'products';
        $primaryKey = 'id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
        $columns = array(
            array('db' => 'skuId', 'dt' => 0),
            array('db' => 'title', 'dt' => 1),
            array('db' => 'in_stock',
                'dt' => 2,
                'formatter' => function ($d) {
                    return $d == 1 ? 'Yes' : 'No';
                }
            ),
            array(
                'db' => 'created_date',
                'dt' => 3,
                'formatter' => function ($d, $row) {
                    return date('jS M y', strtotime($d));
                }
            )
        );

// SQL server connection information
        $sql_details = array(
            'user' => $this->db->username,
            'pass' => $this->db->password,
            'db' => $this->db->database,
            'host' => $this->db->hostname
        );


//        require('ssp.class.php');

        echo json_encode(
            SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
        );
    }
}
