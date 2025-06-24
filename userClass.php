
<?php
//declare(strict_types=1);
class User {
    public function __construct(
        public int $id,
        public string $nombre,
        public string $email,
        public string $foto,){}

    public function get_description() :string {
        return "The user with name: $this->nombre, email: $this->email, and photo: $this->foto." . "\n";
    }

    function set_alias_by_user (string $alias): void {
      $this->nombre = $alias;
    }

    public static function create_user(int $id, string $nombre, string $email, string $foto): User {
        return new User($id, $nombre, $email, $foto);
        //return new self($id, $nombre, $email, $foto);
    } 

    public static function get_users_with_data( string $url) : array {
        if (empty($url)) {
            throw new InvalidArgumentException("URL cannot be empty.");
        }

        $headers = get_headers($url, 1);
        if ($headers === false || strpos($headers[0], '200') === false) {
            throw new Exception("Failed to fetch data from URL: $url");
        }
      $result = file_get_contents($url);
      if ($result === false) {
        throw new Exception("Error fetching data from URL: $url");
      }
        $data = json_decode($result, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new Exception("JSON decode error: " . json_last_error_msg());
        }

        $array_user = [];
        foreach($data as $key => $user) {

            if (!isset($user['id'], $user['nombre'], $user['email'], $user['foto'])) {
                    throw new Exception("Missing required user data in response.");
                }

                array_push($array_user, new User(
                    $user['id'],
                    $user['nombre'],
                    $user['email'],
                    $user['foto']
                ));
         }
         return $array_user;
    }

    public function get_data () {
        return get_object_vars($this);
    }
}

//$user1 = new User(1, "John Doe", "@johndoe", "https://example.com/photo.jpg");
//$user1 = new User(100, "John Doe", "@johndoe", "https://example.com/photo.jpg");
//print_r( $user1->get_data());
//$user1->set_alias_by_user("Maria Corina");
// $user2 = User::create_user(2, "Jane Smith", "@janesmith", "https://example.com/photo2.jpg");
// echo $user1->get_description();
// echo $user2->get_description();

// $users = User::get_users_with_data("https://server-usuarios-qsdd.onrender.com/usuarios");
// print_r( $user1)

?>