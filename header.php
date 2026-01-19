<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Sécurisé - TP PHP</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        header {
            background: linear-gradient(135deg, #2c3e50, #4a6491);
            color: white;
            padding: 2rem 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .logo {
            font-size: 2rem;
            font-weight: bold;
            color: #3498db;
            background: white;
            padding: 10px 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        nav {
            background-color: #34495e;
            padding: 1rem 0;
        }
        
        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
        }
        
        .nav-menu a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        
        .nav-menu a:hover {
            background-color: #3498db;
        }
        
        main {
            min-height: 500px;
            padding: 3rem 0;
        }
        
        .content-box {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            margin-bottom: 2rem;
        }
        
        h2 {
            color: #2c3e50;
            border-bottom: 3px solid #3498db;
            padding-bottom: 0.5rem;
            margin-bottom: 1.5rem;
        }
        
        .info-box {
            background-color: #e8f4fc;
            border-left: 4px solid #3498db;
            padding: 1rem;
            margin: 1.5rem 0;
            border-radius: 0 5px 5px 0;
        }
        
        code {
            background-color: #f8f9fa;
            padding: 2px 6px;
            border-radius: 3px;
            font-family: 'Courier New', monospace;
            color: #e74c3c;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <div>
                    <h1>🌐 Site Web Sécurisé</h1>
                    <p>TP PHP - Sécurité et bonnes pratiques</p>
                </div>
                <div class="logo">PHP 🛡️</div>
            </div>
        </div>
    </header>
    
    <nav>
        <div class="container">
            <ul class="nav-menu">
                <li><a href="index.php">🏠 Accueil</a></li>
                <li><a href="calcul.php">🧮 Calculatrice</a></li>
                <li><a href="test_securite.php">🔐 Test Sécurité</a></li>
            </ul>
        </div>
    </nav>
    
    <main class="container">
