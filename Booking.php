<!DOCTYPE html>
<html>
    <head>
        <title>Blackout</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="stilark.css"> 
    </head>

    <body>
        <div class="grid-container">
            <div class="Meny" id="navbar">
                <nav>
                    <ul>
                        <li id="logo"><a href="index.html"></a></li>
                      <div id="meny">
                        <li><a href="Underholdning.html">Events/Underholdning</a></li>
                        <li><a href="Utleie.html">Utleie</a></li>
                        <li><a href="Meny.php">Meny</a></li>
                        <li><a href="KontaktOss.html">Kontakt oss</a></li>
                      </div>
                      </ul>
                 </nav>
            </div>
            <script>
              // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
              window.onscroll = function() {scrollFunction()};
              
              function scrollFunction() {
                if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                  document.getElementById("navbar").style.padding = "0px 0px";
                  document.getElementById("logo").style.width = "300px";
                  document.getElementById("logo").style.height="120px";
                } else {
                  document.getElementById("navbar").style.padding = "0px 0px";
                  document.getElementById("logo").style.width = "350px";
                  document.getElementById("logo").style.height="150px";
                }
              }
              </script>

            <div class="Header"id="grad1">
                    <h1></h1>
              </div>
              
                <div class="Main">
                    <p> Velkommen til Blackout
                        .....
                    </p>
                </div>

                <div class="Side">
                    <h1>Arrangement:</h1>
                    
                    <div class="calendar">
                        <div class="timeline">
                          <div class="spacer"></div>
                        </div>
                        <div class="days">
                          <div class="day">
                            <div class="date">
                              <p class="date-num">9</p>
                              <p class="date-day">Tor</p>
                            </div>
                            <div class="events">
                              <div class="event start-5 end-9">
                                <p class="title"> Norge vs. Nederland</p>
                                <p class="time"> 16.00 - 22.00</p>
                              </div>
                            </div>
                          </div>
                          <div class="day">
                            <div class="date">
                              <p class="date-num">10</p>
                              <p class="date-day">Fre</p>
                            </div>
                            <div class="events">
                              <div class="event start-6 end-10">
                                <p class="title">OPEN STAGE</p>
                                <p class="time">19.00 - 02.00</p>
                              </div>
                            </div>
                          </div>
                          <div class="day">
                            <div class="date">
                              <p class="date-num">11</p>
                              <p class="date-day">L??r</p>
                            </div>
                            <div class="events">
                              <div class="event start-2 end-5">
                                <p class="title">QUIZ</p>
                                <p class="time">10.00 - 16.00</p>
                              </div>
                              <div class="event start-6 end-10">
                                <p class="title"> LATE NIGHT</p>
                                <p class="time">19.00 - 02.00</p>
                              </div>
                            </div>
                          </div>
                          <div class="day">
                            <div class="date">
                              <p class="date-num">12</p>
                              <p class="date-day">S??n</p>
                            </div>
                            <div class="events">
                              <div class="event start-2 end-8">
                                <p class="title">Privat booking</p>
                                <p class="time">10.00 - 20.00</p>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="kart">
                        <iframe width="500" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=bergen&t=&z=13&ie=UTF8&iwloc=&output=embed">
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                    </iframe>
                    <p>Blackout,<br>
                        Bergenveien 1,<br>
                        5071 Bergen
                    </p>
                    </div>
                      </div>

                </div>
                <div class="Bilder">
                    <p>picture time</p>
                </div>
                <div class="Footer">
                  <table>
                    <tr>
                    <th>Kontakt oss:</th>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>MAIL</td>
                  </tr>
                  <tr>
                    <td>Telefon</td>
                    <td>90225158</td>
                  </tr>
                  <tr>
                    <td>Adresse</td>
                    <td>ADRESSE</td>
                  </tr>
                  </table>
                
                  <p> Logo</p>
                </div>
                </div>
        </div>
    </body>
</html>
