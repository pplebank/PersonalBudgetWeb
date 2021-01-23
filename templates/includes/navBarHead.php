<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo BASE_URI;?>templates/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" >
</head>
<body class="d-flex flex-column">



<nav class="navbar navbar-expand-md navbar-dark bg-dark p-1">
<span class="navbar-brand ms-4">PersonalBudget</span>
<?php if(isLoggedIn()): ?>
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
                <li><a class="dropdown-item" href="showBalance.php?type='thisMonth'">This Month</a>
                </li>
                <li><a class="dropdown-item" href="showBalance.php?type='thisYear'">Last Month</a>
                </li>
                <li><a class="dropdown-item" href="showBalance.php?type='lastYear'">This Year</a>
                </li>
                <li><a class="dropdown-item" href="<?php echo BASE_URI; ?>templates/includes/chooseDate.php"id="selectDatesNavbar">Selected Period</a>
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
<?php endif; ?>
</nav>