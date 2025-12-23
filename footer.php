<footer>
        <p>&copy; <?php echo date('Y'); ?> Mon Élevage de Chiens. Tous droits réservés.</p>
        <p>Contact : contact@monelevage.fr | Tél : 01 23 45 67 89</p>
    </footer>

    <script>
        function toggleMenu() {
            const mobileNav = document.getElementById('mobileNav');
            const burger = document.querySelector('.burger-menu');
            mobileNav.classList.toggle('active');
            burger.classList.toggle('active');
        }
    </script>
</body>
</html>