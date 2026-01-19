    </main>
    
    <footer style="
        background-color: #2c3e50;
        color: white;
        padding: 2rem 0;
        margin-top: 3rem;
        text-align: center;
    ">
        <div class="container">
            <div style="
                display: flex;
                justify-content: space-between;
                align-items: center;
                flex-wrap: wrap;
                gap: 1rem;
            ">
                <div style="text-align: left;">
                    <h3 style="color: #3498db; margin-bottom: 0.5rem;">📚 TP PHP Sécurité</h3>
                    <p>Apprentissage des bonnes pratiques de développement sécurisé</p>
                </div>
                
                <div>
                    <p style="font-size: 1.2rem; font-weight: bold;">
                        &copy; <?php echo date("Y"); ?> - Tous droits réservés
                    </p>
                    <p style="margin-top: 0.5rem; color: #bdc3c7;">
                        Dernière mise à jour : <?php echo date("d/m/Y à H:i:s"); ?>
                    </p>
                </div>
                
                <div style="text-align: right;">
                    <p style="margin-bottom: 0.5rem;">🛡️ Configuration sécurisée :</p>
                    <div style="
                        display: inline-flex;
                        gap: 0.5rem;
                        flex-wrap: wrap;
                        justify-content: center;
                    ">
                        <span style="
                            background: #27ae60;
                            padding: 3px 8px;
                            border-radius: 12px;
                            font-size: 0.9rem;
                        ">PHP <?php echo phpversion(); ?></span>
                        <span style="
                            background: #3498db;
                            padding: 3px 8px;
                            border-radius: 12px;
                            font-size: 0.9rem;
                        ">Apache</span>
                        <span style="
                            background: #e74c3c;
                            padding: 3px 8px;
                            border-radius: 12px;
                            font-size: 0.9rem;
                        ">display_errors=Off</span>
                    </div>
                </div>
            </div>
            
            <hr style="margin: 2rem 0; border-color: #34495e;">
            
            <div style="
                display: flex;
                justify-content: center;
                gap: 2rem;
                flex-wrap: wrap;
            ">
                <a href="#" style="color: #3498db; text-decoration: none;">Mentions légales</a>
                <a href="#" style="color: #3498db; text-decoration: none;">Politique de confidentialité</a>
                <a href="#" style="color: #3498db; text-decoration: none;">Contact</a>
                <a href="#" style="color: #3498db; text-decoration: none;">Aide</a>
            </div>
            
            <p style="margin-top: 2rem; color: #95a5a6; font-size: 0.9rem;">
                Ce site est un projet éducatif pour l'apprentissage du PHP sécurisé.
                Ne pas utiliser pour des données sensibles en production.
            </p>
        </div>
    </footer>
    
    <script>
        // Animation simple pour les cartes
        document.addEventListener('DOMContentLoaded', function() {
            const boxes = document.querySelectorAll('.content-box');
            boxes.forEach(box => {
                box.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                    this.style.transition = 'transform 0.3s ease';
                });
                
                box.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
        });
    </script>
</body>
</html>
