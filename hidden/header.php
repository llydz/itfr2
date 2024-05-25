<link rel="stylesheet" href="./styles/header.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<nav>

    <div class="nav-container">
        <script>
            function toggleSidebar() {
                var sidebar = document.getElementById("sidebar");
                sidebar.classList.toggle("open-sidebar");
            }
            function closeSidebar() {
                var sidebar = document.getElementById("sidebar");
                sidebar.classList.remove("open-sidebar");
            }
        </script>
        <a id="menu" onclick="toggleSidebar()">&equiv;</a>
        <div id="sidebar" class="sidebar">
            <a href="#" class="closebtn" onclick="closeSidebar()">&times;</a>
            <a href="index.php">HOME</a>
            <a href="product.php">PRODUCTS</a>
            <a href="ref.php">REFERENCE</a>
            <a href="about.php">ABOUT US</a>
            <a href="contact.php">CONTACT US</a>
        </div>

        <div class="logo">
            PCXP
        </div>
        <div class="navigation">
            <a href="index.php">HOME</a>
            <a href="product.php">PRODUCTS</a>
            <a href="ref.php">REFERENCE</a>
            <a href="about.php">ABOUT US</a>
            <a href="contact.php">CONTACT US</a>
        </div>

        <div class="login">
            <a hidden href="login.php">LOGIN</a>
        </div>



    </div>

</nav>