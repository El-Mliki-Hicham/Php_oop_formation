<?php
class User {
    private $name;
    private $email;
    private $password;

    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function __serialize(): array {
        // Spécifie quelles propriétés seront sérialisées
        return [
            'name' => $this->name,
            'email' => $this->email,
            // Exclusion volontaire de la propriété $password
        ];
    }

    public function __unserialize(array $data): void {
        // Réinjecte les données dans les propriétés après désérialisation
        $this->name = $data['name'];
        $this->email = $data['email'];
    }
}

// Création de l'objet
$user = new User("Hicham", "hicham@example.com", "secret_password");

// Sérialisation
$serializedUser = serialize($user);
echo "Sérialisé : " . $serializedUser . "\n";

// Désérialisation
$unserializedUser = unserialize($serializedUser);
print_r($unserializedUser);
?>