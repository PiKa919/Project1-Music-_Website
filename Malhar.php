<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial scale-1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="styles.css">
        <title>SHANTANU CLASSICAL MUSIC WEBSITE</title>
    </head>
    <style>
        header .song_side::before{
            background: url('img/bgmp.jpg');
            height: 45%;
            width: 65%;
        }
    </style>
    
    <body>
        <header>
            <div class="menu_side">
                <h1>PLAYLIST</h1>
                    <div class="playlist">
                        <h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i> Playlist</h4>
                        <h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i> Last Playing</h4>
                        <h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i> Recommended</h4>
                        <div class="menu_songs">
                            <li class="songItem">
                                <span>01</span>
                                <img src= "img/Malhar/1.jpg" alt="">
                                <h5>Malhar Tum Ghan Se Ghanshyam <br>
                                    <div class="subtitle">Kishori Amokar</div>
                                </h5>
                                <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
                            </li>
                            <li class="songItem">
                                <span>02</span> 
                                <img src="img/Malhar/2.jpg" alt="">
                                <h5>Raag Miyan Malhar <br>
                                    <div class="subtitle">Bhimsen Joshi</div>
                                </h5>
                                <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
                            </li>
                            <li class="songItem">
                                <span>03</span> 
                                <img src="img/Malhar/3.jpg" alt="">
                                <h5>Raga Megh Malhar - Jhaptaal, Ektaal, Teentaal Megh Malhar - Alaap<br>
                                    <div class="subtitle">Kishori Amokar</div>
                                </h5>
                                <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
                            </li>
                        </div>
                    </div>
                </h1>
            </div>


            <div class="song_side">
                <nav>
                    <ul>
                        <a href="/music website/welcome.php">
                            <li>Discover</li>
                        </a>
                        <li>My Libraries</li>
                        <li>Radio</li>
                    </ul>
                    <div class="search">
                        <i class="bi bi-search"></i>
                        <input type="text" placeholder="Search Music...">
                        <div class="search_results"></div>
                        <a href="" class="card">
                            <img src="" alt="">
                            <div class="content">
                                Goojjari Todi
                                <div class="subtitle">Ali Akbar Khan</div>
                            </div>
                        </a>
                        <a href="" class="card"></a>
                    </div>
                    <div class="user">
                        <img src="img/logo.png" alt="">
                    </div>
                </nav>
                <div class="content">
                    <h4>MALHAR</h4>
                    <p>
                        MALHAR is a Hindustani classical raga.[1] Malhar is associated with torrential rains.The many variations of Raga Malhar have been categorised chronologically[4] by era-prachina (before the 15th century), madhyakalina (15th-18th century) and arvachina (19th century and beyond).
                        <p><b>
                        According to legend, MALHAR is so powerful that when sung, it can induce rainfall.
                        </b></p>
                    </p>
                </div>

                <div class="moods">
                    <div class="h4">
                        <h4>Moods</h4>
                        <div class="btn_s">
                            <i class="bi bi-arrow-left-short"></i>
                            <i class="bi bi-arrow-right-short"></i>
                        </div>
                    </div>
                    <div class="Items">
                        <li>
                            <a href="mood1.php"><img src="img/Bhairavi1.png" alt=""></a>
                            <h5>Bhairavi</h5>
                        </li>
                        <li>
                            <a href="ghazal.php"><img src="img/ghazal.png" alt=""></a>
                            <h5>Ghazal</h5>
                        </li>
                        <li>
                            <a href="lalith.php"><img src="img/lalith.png" alt=""></a>
                            <h5>Lalith</h5>
                        </li>
                        <li>
                            <a href="Malhar.php"><img src="img/Malhar.png" alt=""></a>
                            <h5>Malhar</h5>
                        </li>
                    </div>
                </div>
            </div>


            <div class="master_play">
                <div class="wave" id="wave">
                    <div class="wave1"></div>
                    <div class="wave1"></div>
                    <div class="wave1"></div>
                </div>           
                <img src="img/14.jpg" alt="" id="poster_master_play">
                <h5 id="title">
                    Raga Bhairavi
                    <div class="subtitle">Vilayat Khan</div>
                </h5>
                <div class="icons">
                    <i class="bi shuffle bi-music-note-beamed">next</i>
                    <i class="bi bi-skip-start-fill" id="back"></i>
                    <i class="bi bi-play-fill" id="masterplay"></i>
                    <i class="bi bi-skip-end-fill" id="next"></i>
                    <a href="" download id="download_music"><i class="bi bi-cloud-arrow-down-fill" id="download_music"></i></a>
                
                </div>
                <span id="currentStart">0:00</span>
                <div class="bar">
                    <input type="range" id="seek" min="0" max="100">
                    <div class="bar2" id="bar2"></div>
                    <div class="dot"></div>
                </div>
                <span id="currentEnd">7:11</span>
                <div class="vol">
                    <i class="bi bi-volume-up-fill" id="vol_icon"></i>
                    <input type="range" min="0" max="100" id="vol">
                    <div class="vol_bar"></div>
                    <div class="dot" id="vol_dot"></div>
                </div>
            </div>
        </header>
        <script src="Malhar.js"></script>
    </body>
</html>