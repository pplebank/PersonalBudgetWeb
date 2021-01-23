

<!-- HEADER MAINMENU -->
<?php if ($typeHeader == "mainmenu"): ?>
<header id="main-header" class="py-2 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>
                        <i class="fas fa-cog"></i> Main Menu</h1>
                </div>
            </div>
        </div>
    </header>
    <?php displayMessage();?>
<?php endif; ?>


<!-- HEADER INDEX -->
<?php if ($typeHeader == "index"): ?>
    <header id="main-header" class="py-2 bg-primary text-white">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
                <h1> <i class="far fa-user"></i>Login site</h1>
            </div>
          </div>
        </div>
      </header>
<?php displayMessage();?>
<?php endif; ?>

<!-- HEADER BALANCE -->
<?php if ($typeHeader == "balance"): ?>
<header id="main-header" class="py-2 bg-secondary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>
                        <i class="fas fa-balance-scale"></i> Balance</h1>
                </div>
            </div>
        </div>
    </header>
    <?php endif; ?>