<nav class="navbar navbar-expand-md navbar-dark bg-dark p-1">

<span class="navbar-brand ms-4">PersonalBudget</span>
<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
    <ul class="navbar-nav">
        <li class="nav-item px-2">
            <a href="main.html" class="nav-link active">Main Menu</a>
        </li>
    </ul>
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Show Balance
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="thisMonth.html">This Month</a>
                </li>
                <li><a class="dropdown-item" href="lastMonth.html">Last Month</a>
                </li>
                <li><a class="dropdown-item" href="thisYear.html">This Year</a>
                </li>
                <li><a class="dropdown-item" href="selectedPeriod.html">Selected Period</a>
                </li>
            </ul>
        </li>
    </ul>

    <ul class="navbar-nav">
        <li class="nav-item px-2">
            <a href="categories.html" class="nav-link">Categories</a>
        </li>
        <li class="nav-item px-2">
            <a href="predictions.html" class="nav-link">Predictions</a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Welcome <?php echo $_SESSION['username'] ?>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="profile.html"><i class="fas fa-user-circle"></i> Profile</a>
                </li>
                <li><a class="dropdown-item" href="profileSettings.html"><i class="fas fa-users-cog"></i>
                        Profile settings</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="logout.php" class="nav-link me-4">
                <i class="fas fa-user-times"></i> Logout
            </a>
        </li>
    </ul>
</div>

</nav>