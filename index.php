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
  <?php
    $teamsJson = file_get_contents('data/teams.json');
    $teams = json_decode($teamsJson,true);
    $teamCount = count($teams);
  ?>

  <pre><?php /* var_dump($teams[1]["teamname"]);die(); */ ?></pre>

  <header>
    <div class="container">
      <h1>The <?php echo $teamCount; ?> NFL Teams</h1>
    </div>
  </header>

  <div id="main-section">
    <div class="container">
      <div class="row">
        <?php foreach ($teams as $team) { ?>
          <div class="col-md-12 col-lg-3">
            <div class="team-box">
              <img src="<?php echo $team['logo']; ?>" />
              <h3 class="team-title"><?php echo $team['teamname']; ?></h3>
              <div class="team-city"><?php echo $team['city']; ?></div>
              <div class="team-state"><?php echo $team['state']; ?></div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>

  <footer>
    <p>Created by Philip Stier</p>
  </footer>
</body>
