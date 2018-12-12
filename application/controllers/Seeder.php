<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seeder extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $faker = Faker\Factory::create();

        for ($i = 1; $i <= 10000; $i++) {
            $product = array(
                'title' => rtrim($faker->sentence(rand(5, 9), '.'), true),
                'skuId' => $faker->isbn13,
                'body' => $faker->paragraphs(rand(4, 5), true),
                'in_stock' => rand(0, 1),
                'image' => NULL,
                'created_date' => date('Y-m-d H:i:s'),
                'updated_date' => date('Y-m-d H:i:s')
            );


            $this->db->insert('products', $product);

        }

    }
}
