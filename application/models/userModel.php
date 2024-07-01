

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Load database library
        $this->load->database();
    }

    public function get_users() {
        // Fetch data from users table
        $query = $this->db->get('users'); // 'users' is your table name

        if ($query->num_rows() > 0) {
            return $query->result_array(); // Return array of users
        } else {
            return array(); // Return empty array if no users found
        }
    }

}
