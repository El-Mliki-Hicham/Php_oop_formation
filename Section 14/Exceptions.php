<?php

// Définir un gestionnaire global pour les exceptions non capturées
function gestionnaireGlobal(Throwable $e) {
    echo "Gestionnaire global : " . $e->getMessage();
}

// Associer le gestionnaire d'exceptions
set_exception_handler('gestionnaireGlobal');

try {
    // Tente d'ouvrir un fichier inexistant
    $fichier = fopen("fichier_inexistant.txt", "r");

    if (!$fichier) {
        // Lève une exception si le fichier ne peut pas être ouvert
        throw new Exception("Impossible d'ouvrir le fichier.");
    }

    // Fermeture du fichier si l'ouverture a réussi (pas dans cet exemple)
    fclose($fichier);

} catch (Exception $e) {
    // Gestion locale de l'exception
    echo "Erreur attrapée localement : " . $e->getMessage() . "\n";
} finally {
    // Bloc exécuté dans tous les cas
    echo "Bloc finally exécuté.\n";
}

// Cette exception n'est pas capturée par un try-catch
throw new Exception("Une exception non capturée !");
?>