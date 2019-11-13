<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Nunito:200,300,400|Roboto:300,400,500'>
  <link rel="stylesheet" href="styleSession.css">
  <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" href="styleLoader.css">
</head>

<body>
  <!-- partial:index.partial.html -->
  <div class="container">
    <div class="menu-column">
      <ul class="nav">
        <li class="pulse" id="pulse"></li>
        <li class="clipboard" id="clipboard"></li>
      </ul>
      <div class="profile"><img src="https://placeimg.com/100/100/face" /></div>
    </div>
    <div class="summary-column">
      <div class="profile-img" id="profileImage"><img src="https://placeimg.com/400/400/face" />
        <div class="name">Jana <br> Novakova</div>
      </div>
      <div class="statistics">
        <h2>summary</h2>
        <div class="age"><span class="title title-age">22</span></div>
        <div class="weight"><span class="title title-weight">53 kg</span></div>
        <div class="float-none"></div>
        <div class="height">
          <div class="icon"></div>
          <div class="data"><span>172 cm</span></div>
        </div>
        <div class="bmi"><span class="title title-bmi">20.4</span></div>
        <div class="fat"><span class="title title-fat">11<span class="percentage">%</span></span></div>
        <div class="float-none"></div>
        <h2 class="allergies">allergies</h2>
        <div class="row">peanuts
          <div class="severity">
            <div class="fill" style="width: 45%; height: inherit;"></div>
          </div>
        </div>
        <div class="row">penicilin
          <div class="severity">
            <div class="fill" style="width: 80%; height: inherit;"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="content-column">
      <div class="header-container" id="headerContainer">
        <div class="nav">
          <div class="content">
            <p>
              hi <span class="name">jana</span>, it seems you are in</p><span class="shape score">good</span><span class="shape"> shape</span>
          </div>
        </div>
        <div class="float-none"></div>
        <div class="graph">
          <canvas id="bpChart" style="position: relative; z-index: 100;"></canvas>
        </div>
      </div>
      <div class="split-container">
        <div class="split">
          <h3>Temperature</h3>
          <div class="temperature">36.7</div>
          <div class="split-graph">
            <canvas id="temperatureGraph"></canvas>
          </div>
        </div>
        <div class="split">
          <h3>Calories burned</h3>
          <div class="calories">537</div>
          <div class="split-graph">
            <canvas id="calorieGraph"></canvas>
          </div>
        </div>
        <div class="split">
          <h3>Heart rate</h3>
          <div class="heart-rate">87</div>
          <div class="split-graph">
            <canvas id="heartRateGraph"></canvas>
          </div>
        </div>
      </div>
      <div class="sleep">
        <div class="totals">
          <div class="collective"><span class="hours">8</span><span class="minutes">25</span>
            <p>Total sleep time</p>
          </div>
          <div class="split first">6h 12m
            <p>Deep</p>
          </div>
          <div class="split">2h 13m
            <p>Light</p>
          </div>
        </div>
        <div class="sleep-graph">
          <div class="sleep-graph-container">
            <h2> Sleep Analytics</h2>
            <div class="sleep-select-wrapper">
              <select>
                <option value="today">Today</option>
              </select>
            </div>
            <div class="chart-container">
              <canvas id="sleepChart"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="float-none"></div>
      <div class="split-container">
        <div class="split bottom">
          <h2>Appointments</h2>
          <div class="appointments">
            <div class="calendar-container">
              <div class="calendar">25<span class="date">th</span><span class="month">Jul</span></div>
              <div class="content">
                <table class="appointment-table">
                  <tr>
                    <td id="time">13:00</td>
                  </tr>
                  <tr>
                    <td id="title">Dentist</td>
                  </tr>
                  <tr>
                    <td id="name">Jozef Novotny</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="split bottom">
          <h2>Doctors around</h2>
          <table class="doctor-grid">
            <tr>
              <td height="65"><img src="https://placeimg.com/65/65/people" /></td>
              <td><img src="https://placeimg.com/65/65/face" /></td>
              <td><img src="https://placeimg.com/65/65/people" /></td>
            </tr>
            <tr>
              <td><img src="https://placeimg.com/65/65/face" /></td>
              <td><img src="https://placeimg.com/65/65/people" /></td>
              <td id="expand">
                <div class="background">
                  +8

                </div>
              </td>
            </tr>
          </table>
        </div>
        <div class="split bottom">
          <div id="map"></div>
          <div class="map-overlay">
            <h2>Steps today</h2><span class="steps">4578</span><span class="distance">1.7 km</span>
          </div>
        </div>
      </div>
    </div>
    <div class="search-column">
      <div class="search-container"><img src="https://svgshare.com/i/56w.svg" />
        <input type="text" id="Search" onKeyUp="cleRelachee(event)" placeholder="Search" />
      </div>
      <div class="activity-list" id="activity-list" name="activity-list">
        <h3>Recent Activity</h3>
        <div class="activity">
          <div class="image-container"><img src="https://placeimg.com/40/40/face" /></div>
          <div class="text"><span class="name">Peter Smith </span>added a new appointment to your calendar.<span class="time-ago">2 hours ago</span></div>
        </div>
        <div class="activity">
          <div class="image-container"><img src="https://placeimg.com/40/40/person" /></div>
          <div class="text"><span class="name">Katarina Rychia </span>commented on your Results 09<span class="time-ago">2 hours ago</span></div>
        </div>
        <div class="activity">
          <div class="image-container"><img src="https://placeimg.com/40/40/face" /></div>
          <div class="text"><span class="name">Tereza Dvorak </span>added two attachments to Results 238.<span class="time-ago">6 days ago</span></div>
        </div>
        <div class="activity">
          <div class="image-container"><img src="https://placeimg.com/40/40/person" /></div>
          <div class="text"><span class="name">Peter Smith </span>added a new appointment to your calendar.<span class="time-ago">7 days ago</span></div>
        </div>
        <div class="your-doctors">
          <h3>Your Doctors</h3>
          <div class="doctor">
            <div class="image-container"><img src="https://placeimg.com/40/40/person" /></div>
            <div class="text"><span class="name-large">Peter Smith</span><span class="title">Dentist</span></div>
          </div>
          <div class="doctor">
            <div class="image-container"><img src="https://placeimg.com/40/40/face" /></div>
            <div class="text"><span class="name-large">Katarina Rychia </span><span class="title">Dentist</span></div>
          </div>
          <div class="doctor">
            <div class="image-container"><img src="https://placeimg.com/40/40/person" /></div>
            <div class="text"><span class="name-large">Tereza Dvorak </span><span class="title">Physician</span></div>
          </div>
          <button class="find-doctor">Find new doctor</button>
        </div>
      </div>
    </div>
  </div>
  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js'></script>
  <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyA5wVTk5SQ3alGnIqPchU9CmU7v__ypM6Q'></script>
  <script src="script.js"></script>
  <script>
    function cleRelachee(event) {
      event.preventDefault();
      var search = document.getElementById("Search").value;
      $.ajax({
        url: 'Loader.php', // Le nom du fichier indiqué dans le formulaire
        type: "POST", // La méthode indiquée dans le formulaire (get ou post)
        data: "search=",
        dataType: 'html',
        success: function(response) { // Je récupère la réponse du fichier PHP
          $('#activity-list').html("<h3>Recent Activity</h3>" + response);
        }
      });
      $.ajax({
        url: 'Search.php', // Le nom du fichier indiqué dans le formulaire
        type: "POST", // La méthode indiquée dans le formulaire (get ou post)
        data: "search=" + search,
        dataType: 'html',
        success: function(response) { // Je récupère la réponse du fichier PHP
          if (response == "") {
            $('#activity-list').html("<h3>Recent Activity</h3>" + "Aucun compte trouvé");
          } else {
            $('#activity-list').html("<h3>Recent Activity</h3>" + response);
          }
        }
      });
    }
    $("#pulse").click(function(event) {
    alert("test");
    event.preventDefault();
    $.ajax({
      url: 'Chargement.php', // Le nom du fichier indiqué dans le formulaire
      type: "POST", // La méthode indiquée dans le formulaire (get ou post)
      dataType: 'html',
      success: function(response) { // Je récupère la réponse du fichier PHP
        $('#products').html(response);
      }
    });
  });

    pulse
  </script>

</body>

</html>