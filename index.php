<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>NFL Teams</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <header>
    <div class="container">
      <h1>NFL Teams</h1>
    </div>
  </header>

  <?php
    $team01 = [
      "logo" => "http://a.espncdn.com/combiner/i?img=/i/teamlogos/nfl/500/ari.png&h=150&w=150",
      "teamname" => "Arizona Cardinals",
      "city" => "Phoenix",
      "state" => "Arizona"
    ];
    $team02 = [
      "logo" => "http://a.espncdn.com/combiner/i?img=/i/teamlogos/nfl/500/atl.png&h=150&w=150",
      "teamname" => "Atlanta Falcons",
      "city" => "Atlanta",
      "state" => "Georgia"
    ];
    $team03 = [
      "logo" => "http://a.espncdn.com/combiner/i?img=/i/teamlogos/nfl/500/bal.png&h=150&w=150",
      "teamname" => "Baltimore Ravens",
      "city" => "Baltimore",
      "state" => "Maryland"
    ];
    $team04 = [
      "logo" => "http://a.espncdn.com/combiner/i?img=/i/teamlogos/nfl/500/buf.png&h=150&w=150",
      "teamname" => "Buffalo Bills",
      "city" => "Buffalo",
      "state" => "New York"
    ];

    $teams = [$team01,$team02,$team03,$team04];
  ?>

  <?php /*
  <pre><?php var_dump($teams); ?></pre>
  */ ?>

  <div id="main-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-3">
          <div class="team-box">
            <img src="<?php echo $team01['logo']; ?>" />
            <h3 class="team-title"><?php echo $team01['teamname']; ?></h3>
            <div class="team-city"><?php echo $team01['city']; ?></div>
            <div class="team-state"><?php echo $team01['state']; ?></div>
          </div>
        </div>

        <div class="col-md-12 col-lg-3">
          <div class="team-box">
            <img src="<?php echo $team02['logo']; ?>" />
            <h3 class="team-title"><?php echo $team02['teamname']; ?></h3>
            <div class="team-city"><?php echo $team02['city']; ?></div>
            <div class="team-state"><?php echo $team02['state']; ?></div>
          </div>
        </div>

        <div class="col-md-12 col-lg-3">
          <div class="team-box">
            <img src="<?php echo $team03['logo']; ?>" />
            <h3 class="team-title"><?php echo $team03['teamname']; ?></h3>
            <div class="team-city"><?php echo $team03['city']; ?></div>
            <div class="team-state"><?php echo $team03['state']; ?></div>
          </div>
        </div>

        <div class="col-md-12 col-lg-3">
          <div class="team-box">
            <img src="<?php echo $team04['logo']; ?>" />
            <h3 class="team-title"><?php echo $team04['teamname']; ?></h3>
            <div class="team-city"><?php echo $team04['city']; ?></div>
            <div class="team-state"><?php echo $team04['state']; ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <p>Created by Philip Stier</p>
  </footer>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
