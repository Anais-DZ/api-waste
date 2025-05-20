<?php
// MISE EN PLACE DE L'API

// Headers requis
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-AllowHeaders, Authorization, X-Requested-With");

// Vérification de la méthode : si ce n’est pas GET, une erreur est envoyée
if ($_SERVER['REQUEST_METHOD'] != 'GET') {
    http_response_code(405);
    echo json_encode(["message" => "Méthode non autorisée.", "code" => 405]);
    return;
}

// Connexion à la base de données
try {
    $bdd = new PDO(
        "mysql:host=" . getenv('bddhost') . ";dbname=" . getenv('bddname') . ";charset=utf8mb4",  getenv('bddlogin'),  getenv('bddpassword'), array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['message' => 'Erreur de connexion à la base de données', 'code' => 500]);
    error_log('Erreur de connexion à la base de données: ' . $e->getMessage());
    return;
}

try {
    // Préparation de la requête SELECT
    $reqPreparee = $bdd->prepare('SELECT w.name_waste, c.type_container
                                  FROM waste w
                                  INNER JOIN container c
                                  ON w.id_container = c.id_container');

    // Exécution de la requête
    $reqPreparee->execute();

    // Récupération de la requête
    $reqRecuperee = $reqPreparee->fetchAll(PDO::FETCH_ASSOC);

    // Chiffrer la réponse en json et afficher
    echo json_encode($reqRecuperee);

    // Arrêt du script
    return;

} catch (Exception $error) {
    http_response_code(500);
    echo json_encode(['message' => 'Echec de la récupération des déchets', 'code' => 500]);
    error_log('Echec de la récupération des déchets: ' . $error->getMessage());
    return;
}
?>