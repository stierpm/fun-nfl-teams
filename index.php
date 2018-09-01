<?php
  function get_teams() {
    $teamsJson = file_get_contents('data/teams.json');
    $teams = json_decode($teamsJson,true);

    return $teams;
  }

  $teams = get_teams();

  $teamCount = count($teams);
?>

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
              <?php if(!array_key_exists('logo',$team) || $team['logo'] == '') { ?>
                <div>No logo exists</div>
              <?php } elseif($team['logo'] == 'hidden') { ?>
                <div>Logo in progress</div>
              <?php } else { ?>
                <img src="<?php echo $team['logo']; ?>" />
              <?php } ?>

              <?php if(!array_key_exists('teamname',$team) || $team['teamname'] == '') { ?>
                <h3 class="team-title">Unknown</h3>
              <?php } elseif($team['teamname'] == "hidden") { ?>
                <h3 class="team-title"></h3>
              <?php } else { ?>
                <h3 class="team-title"><?php echo $team['teamname']; ?></h3>
              <?php } ?>

              <?php if(!array_key_exists('city',$team) || $team['city'] == '') { ?>
                <div class="team-city">Unknown</div>
              <?php } elseif($team['city'] == "hidden") { ?>
                <div class="team-city"></div>
              <?php } else { ?>
                <div class="team-city"><?php echo $team['city']; ?></div>
              <?php } ?>

              <?php if(!array_key_exists('state',$team) || $team['state'] == '') { ?>
                <div class="team-state">Unknown</div>
              <?php } elseif($team['state'] == 'hidden') { ?>
                <div class="team-state"></div>
              <?php } else { ?>
                <div class="team-state"><?php echo $team['state']; ?></div>
              <?php } ?>
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
