<?php
// Déclaration des variables numériques
$nombre1 = 45;
$nombre2 = 23;

// Opérations mathématiques
$addition = $nombre1 + $nombre2;
$soustraction = $nombre1 - $nombre2;
$multiplication = $nombre1 * $nombre2;

// Vérification division par zéro
if ($nombre2 != 0) {
    $division = $nombre1 / $nombre2;
    $division_formatee = round($division, 2); // Arrondi à 2 décimales
} else {
    $division_formatee = "Division par zéro impossible";
}

// Condition pour vérifier si l'addition > 100
if ($addition > 100) {
    $message = "Grand nombre !";
    $couleur_message = "#27ae60"; // Vert
} else {
    $message = "Petit nombre.";
    $couleur_message = "#e74c3c"; // Rouge
}

// Tableau des opérations pour affichage dynamique
$operations = [
    "➕ Addition" => $addition,
    "➖ Soustraction" => $soustraction,
    "✖️ Multiplication" => $multiplication,
    "➗ Division" => $division_formatee
];

// Variables pour le formulaire (optionnel - pour TP avancé)
$resultat_formulaire = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input1 = floatval($_POST['nombre1'] ?? 0);
    $input2 = floatval($_POST['nombre2'] ?? 0);
    $operation = $_POST['operation'] ?? 'addition';
    
    switch ($operation) {
        case 'addition':
            $resultat_formulaire = $input1 + $input2;
            break;
        case 'soustraction':
            $resultat_formulaire = $input1 - $input2;
            break;
        case 'multiplication':
            $resultat_formulaire = $input1 * $input2;
            break;
        case 'division':
            $resultat_formulaire = ($input2 != 0) ? $input1 / $input2 : "Division par zéro";
            break;
        default:
            $resultat_formulaire = "Opération invalide";
    }
}
?>

<?php include 'header.php'; ?>

<div class="content-box">
    <h2>🧮 Calculatrice PHP</h2>
    
    <div class="info-box">
        <p>Cette page démontre les opérations mathématiques de base en PHP.</p>
        <p><strong>Variables utilisées :</strong> <code>$nombre1 = <?php echo $nombre1; ?></code> et <code>$nombre2 = <?php echo $nombre2; ?></code></p>
    </div>
    
    <h3>📊 Résultats des opérations</h3>
    
    <div style="
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1.5rem;
        margin: 2rem 0;
    ">
        <?php foreach($operations as $nom => $resultat): ?>
        <div style="
            background: white;
            border: 2px solid <?php echo strpos($nom, 'Addition') !== false ? '#3498db' : '#95a5a6'; ?>;
            border-radius: 10px;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        " onmouseover="this.style.transform='scale(1.05)'" 
           onmouseout="this.style.transform='scale(1)'">
            <div style="font-size: 2.5rem; margin-bottom: 0.5rem;">
                <?php echo explode(' ', $nom)[0]; ?>
            </div>
            <div style="font-weight: bold; color: #2c3e50; margin-bottom: 0.5rem;">
                <?php echo $nom; ?>
            </div>
            <div style="
                font-size: 2rem;
                font-weight: bold;
                color: <?php echo strpos($nom, 'Addition') !== false ? '#e74c3c' : '#27ae60'; ?>;
                background: #f8f9fa;
                padding: 0.5rem;
                border-radius: 5px;
                margin-top: 0.5rem;
            ">
                <?php echo $resultat; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    
    <div style="
        background: <?php echo $couleur_message; ?>;
        color: white;
        padding: 1.5rem;
        border-radius: 8px;
        margin: 2rem 0;
        text-align: center;
        font-size: 1.5rem;
        font-weight: bold;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    ">
        🎯 <?php echo $message; ?>
        <div style="font-size: 1rem; margin-top: 0.5rem; opacity: 0.9;">
            (Addition = <?php echo $addition; ?> <?php echo $addition > 100 ? '> 100' : '≤ 100'; ?>)
        </div>
    </div>
</div>

<div class="content-box">
    <h2>🔢 Calculatrice interactive</h2>
    
    <div style="
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2rem;
        margin-top: 1.5rem;
    ">
        <div>
            <h3>📝 Code PHP utilisé</h3>
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
$nombre1 = 45;
$nombre2 = 23;

// Opérations
$addition = $nombre1 + $nombre2;
$soustraction = $nombre1 - $nombre2;
$multiplication = $nombre1 * $nombre2;

// Condition
if ($addition > 100) {
    echo "Grand nombre !";
} else {
    echo "Petit nombre.";
}
?&gt;</code>
            </pre>
        </div>
        
        <div>
            <h3>🧪 Testez vos propres nombres</h3>
            <form method="POST" action="" style="
                background: #f8f9fa;
                padding: 1.5rem;
                border-radius: 8px;
                border: 1px solid #ddd;
            ">
                <div style="margin-bottom: 1rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: bold;">
                        Premier nombre :
                    </label>
                    <input type="number" name="nombre1" value="<?php echo $nombre1; ?>" 
                           style="width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 4px;">
                </div>
                
                <div style="margin-bottom: 1rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: bold;">
                        Deuxième nombre :
                    </label>
                    <input type="number" name="nombre2" value="<?php echo $nombre2; ?>"
                           style="width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 4px;">
                </div>
                
                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: bold;">
                        Opération :
                    </label>
                    <select name="operation" style="width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 4px;">
                        <option value="addition">Addition (+)</option>
                        <option value="soustraction">Soustraction (-)</option>
                        <option value="multiplication">Multiplication (×)</option>
                        <option value="division">Division (÷)</option>
                    </select>
                </div>
                
                <button type="submit" style="
                    background: #3498db;
                    color: white;
                    border: none;
                    padding: 0.75rem 1.5rem;
                    border-radius: 5px;
                    cursor: pointer;
                    font-weight: bold;
                    width: 100%;
                    font-size: 1.1rem;
                ">
                    🧮 Calculer
                </button>
                
                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
                <div style="
                    margin-top: 1.5rem;
                    padding: 1rem;
                    background: #e8f4fc;
                    border-radius: 5px;
                    border-left: 4px solid #3498db;
                ">
                    <strong>Résultat :</strong> 
                    <span style="font-size: 1.5rem; font-weight: bold; color: #e74c3c;">
                        <?php echo $resultat_formulaire; ?>
                    </span>
                </div>
                <?php endif; ?>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
