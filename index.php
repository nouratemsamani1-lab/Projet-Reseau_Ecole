<?php
// Déclaration des variables
$titre_page = "Bienvenue sur notre site sécurisé !";
$message_bienvenue = "Ce site a été développé dans le cadre d'un TP sur la sécurité PHP.";
$date_actuelle = date("d/m/Y");
$heure_actuelle = date("H:i:s");
$nom_utilisateur = "Visiteur"; // Normalement, on récupérerait ça d'une session

// Tableau d'informations
$informations = [
    "Serveur" => $_SERVER['SERVER_SOFTWARE'],
    "PHP Version" => phpversion(),
    "Heure serveur" => date("H:i:s"),
    "Fuseau horaire" => date_default_timezone_get()
];
?>

<?php include 'header.php'; ?>

<div class="content-box">
    <h2>🏠 <?php echo $titre_page; ?></h2>
    
    <div class="info-box">
        <p>✨ <?php echo $message_bienvenue; ?></p>
        <p>📅 <strong>Date actuelle :</strong> <?php echo $date_actuelle; ?></p>
        <p>⏰ <strong>Heure actuelle :</strong> <?php echo $heure_actuelle; ?></p>
        <p>👋 <strong>Bonjour,</strong> <?php echo $nom_utilisateur; ?> !</p>
    </div>
    
    <h3>📊 Informations techniques</h3>
    <table style="
        width: 100%;
        border-collapse: collapse;
        margin-top: 1rem;
    ">
        <thead>
            <tr style="background-color: #2c3e50; color: white;">
                <th style="padding: 10px; text-align: left;">Clé</th>
                <th style="padding: 10px; text-align: left;">Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($informations as $cle => $valeur): ?>
            <tr style="
                border-bottom: 1px solid #eee;
                <?php echo $cle == 'PHP Version' ? 'background-color: #e8f6f3;' : ''; ?>
            ">
                <td style="padding: 10px; font-weight: bold;"><?php echo $cle; ?></td>
                <td style="padding: 10px;">
                    <?php if($cle == 'PHP Version'): ?>
                        <span style="
                            background: #27ae60;
                            color: white;
                            padding: 2px 8px;
                            border-radius: 12px;
                            font-weight: bold;
                        "><?php echo $valeur; ?></span>
                    <?php else: ?>
                        <?php echo $valeur; ?>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="content-box">
    <h2>🎯 Objectifs de ce TP</h2>
    
    <div style="
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
        margin-top: 1.5rem;
    ">
        <div style="
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            padding: 1.5rem;
            border-radius: 8px;
            border-left: 4px solid #2196f3;
        ">
            <h3 style="color: #1565c0; margin-bottom: 0.5rem;">🛡️ Sécurité PHP</h3>
            <p>Configuration des paramètres de sécurité dans php.ini</p>
            <ul style="margin-top: 0.5rem; padding-left: 1.2rem;">
                <li>display_errors = Off</li>
                <li>expose_php = Off</li>
                <li>allow_url_fopen = Off</li>
            </ul>
        </div>
        
        <div style="
            background: linear-gradient(135deg, #e8f5e9, #c8e6c9);
            padding: 1.5rem;
            border-radius: 8px;
            border-left: 4px solid #4caf50;
        ">
            <h3 style="color: #2e7d32; margin-bottom: 0.5rem;">📁 Architecture</h3>
            <p>Création d'une structure modulaire</p>
            <ul style="margin-top: 0.5rem; padding-left: 1.2rem;">
                <li>header.php (en-tête)</li>
                <li>footer.php (pied de page)</li>
                <li>index.php (page principale)</li>
                <li>include/require</li>
            </ul>
        </div>
        
        <div style="
            background: linear-gradient(135deg, #fff3e0, #ffe0b2);
            padding: 1.5rem;
            border-radius: 8px;
            border-left: 4px solid #ff9800;
        ">
            <h3 style="color: #ef6c00; margin-bottom: 0.5rem;">⚙️ Fonctions PHP</h3>
            <p>Utilisation des fonctions PHP de base</p>
            <ul style="margin-top: 0.5rem; padding-left: 1.2rem;">
                <li>Variables</li>
                <li>date()</li>
                <li>Structures de contrôle</li>
                <li>Tableaux</li>
            </ul>
        </div>
    </div>
</div>

<div class="content-box">
    <h2>🔍 Code PHP utilisé</h2>
    <pre style="
        background-color: #2c3e50;
        color: #ecf0f1;
        padding: 1.5rem;
        border-radius: 8px;
        overflow-x: auto;
        font-family: 'Courier New', monospace;
        font-size: 0.9rem;
    ">
<code>&lt;?php
// Variables
$titre_page = "Bienvenue sur notre site sécurisé !";
$date_actuelle = date("d/m/Y");
$heure_actuelle = date("H:i:s");

// Inclusion des fichiers
include 'header.php';
include 'footer.php';

// Affichage
echo "Date : " . $date_actuelle;
echo "Heure : " . $heure_actuelle;
?&gt;</code>
    </pre>
</div>

<?php include 'footer.php'; ?>
