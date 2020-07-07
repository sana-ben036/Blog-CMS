<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class='container'>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                    <?php if (isset($_SESSION['username']))
                    { 
                        echo $_SESSION['username'];
                    }
                    ?></a>
                </li>

            </ul>
        </div>
    </div>
</nav>