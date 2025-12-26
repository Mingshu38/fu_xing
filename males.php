<?php 
$pageTitle = "Qui sommes-nous ? - Mon Élevage de Chiens";
include 'includes/header.php'; 
?>
    <!-- ############ HERO ########## -->
    <section class="page-hero">
        <div class="container">
            <h1>Nos mâles reproducteurs</h1>
            <p>Nos mâles sélectionnés avec exigence pour leur lignée, leur caractère et leur conformité au standard.</p>
        </div>
    </section>

    <div class="container dogs-container">
        <div class="dogs-grid">

            <!-- Chien 1 -->
            <div class="dog-card">

                <div class="dog-image carousel">
                    <div class="carousel-track">
                        <div class="carousel-slide">
                            <img src="assets/img/bradley.jpg" alt="Bradley – Shih Tzu">
                        </div>
                        <div class="carousel-slide">
                            <img src="assets/img/bradley-2.jpg" alt="Bradley – profil">
                        </div>
                        <div class="carousel-slide">
                            <img src="assets/img/bradley-3.jpg" alt="Bradley – en extérieur">
                        </div>
                     </div>

                    <div class="dog-name-badge">Bradley</div>   
                    <button class="carousel-btn prev" aria-label="Image précédente">‹</button>
                    <button class="carousel-btn next" aria-label="Image suivante">›</button>
            </div>

                <div class="dog-info">
                    <h3>Tommyknockers de Fu Xing </h3>
                    <p class="dog-age">Né le 20 avril 2022</p>

                    <div class="tabs">
                        <button class="tab-btn active" onclick="openTab(event, 'titres1')">Titres</button>
                        <button class="tab-btn" onclick="openTab(event, 'sante1')">Santé</button>
                        <button class="tab-btn" onclick="openTab(event, 'pedigree1')">Pedigree</button>
                    </div>

                    <div id="titres1" class="tab-content active">
                        <ul>
                            <li>🏆 Champion du monde 2025</li>
                            <li>🏆 Champion Suisse </li>
                            <li>🏆 Champion international</li>
                            <li>🏆 Champion Slovenie</li>
                            <li>🏆 Champion Belgique</li>
                            <li>🏆 Champion Autriche</li>
                            <li>🏆 Champion Bosnie</li>
                            <li>🏆 Grand Champion Bosnie</li>
                            <li>🏆 Champion du club CCTF</li>
                        </ul>
                    </div>

                    <div id="sante1" class="tab-content">
                        <ul>
                            <li>✅ Test ADN (STR-ISAG2006)</li>
                            <li>✅ Yeux : Sain</li>
                            <li>✅ BREATH.1</li>
                        </ul>
                    </div>

                    <div id="pedigree1" class="tab-content">
                        <p><strong>Père :</strong> <a href="#">Mandarin Garden's Lost In Love</a></p>
                        <p><strong>Mère :</strong> <a href="#">CH.Petarda Blonde Ambition</a></p>
                        <p><strong>Lignée :</strong> <a href="https://shihtzubase.com/dog.php?screen=1&id=42741&userif=1" target="_blank">Pedigrée complet</a></p>
                    </div>
                </div>
            </div>

            <!-- Chien 2 -->
            <div class="dog-card">
                <div class="dog-image">
                    <img src="images/male2.jpg" alt="Nom du chien 2">
                    <div class="dog-name-badge">Apollo</div>
                </div>
                <div class="dog-info">
                    <h3>Apollo des Jardins d'Eden</h3>
                    <p class="dog-age">4 ans • Mâle</p>

                    <div class="tabs">
                        <button class="tab-btn active" onclick="openTab(event, 'titres2')">Titres</button>
                        <button class="tab-btn" onclick="openTab(event, 'sante2')">Santé</button>
                        <button class="tab-btn" onclick="openTab(event, 'pedigree2')">Pedigree</button>
                    </div>

                    <div id="titres2" class="tab-content active">
                        <ul>
                            <li>🏆 Champion International</li>
                            <li>🥇 BOB (Best Of Breed)</li>
                            <li>⭐ Excellent x3</li>
                        </ul>
                    </div>

                    <div id="sante2" class="tab-content">
                        <ul>
                            <li>✅ Test ADN complet</li>
                            <li>✅ Hanches et coudes : A/A</li>
                            <li>✅ Yeux : Sain</li>
                            <li>✅ Cardiaque : Normal</li>
                        </ul>
                    </div>

                    <div id="pedigree2" class="tab-content">
                        <p><strong>Père :</strong> Multi-champion</p>
                        <p><strong>Mère :</strong> Championne de France</p>
                        <p><strong>Lignée :</strong> Lignée européenne</p>
                    </div>
                </div>
            </div>

            <!-- Chien 3 -->
            <div class="dog-card">
                <div class="dog-image">
                    <img src="images/male3.jpg" alt="Nom du chien 3">
                    <div class="dog-name-badge">Titan</div>
                </div>
                <div class="dog-info">
                    <h3>Titan du Val Fleuri</h3>
                    <p class="dog-age">2 ans • Mâle</p>

                    <div class="tabs">
                        <button class="tab-btn active" onclick="openTab(event, 'titres3')">Titres</button>
                        <button class="tab-btn" onclick="openTab(event, 'sante3')">Santé</button>
                        <button class="tab-btn" onclick="openTab(event, 'pedigree3')">Pedigree</button>
                    </div>

                    <div id="titres3" class="tab-content active">
                        <ul>
                            <li>🏆 Champion Junior</li>
                            <li>🥇 1er Excellent</li>
                            <li>⭐ Promesse mâle</li>
                        </ul>
                    </div>

                    <div id="sante3" class="tab-content">
                        <ul>
                            <li>✅ Test ADN complet</li>
                            <li>✅ Hanches et coudes : A/A</li>
                            <li>✅ Yeux : Sain</li>
                            <li>✅ Cardiaque : Normal</li>
                        </ul>
                    </div>

                    <div id="pedigree3" class="tab-content">
                        <p><strong>Père :</strong> Champion de beauté</p>
                        <p><strong>Mère :</strong> Multi-championne</p>
                        <p><strong>Lignée :</strong> Lignée mixte</p>
                    </div>
                </div>
            </div>

            <!-- Chien 4 -->
            <div class="dog-card">
                <div class="dog-image">
                    <img src="images/male4.jpg" alt="Nom du chien 4">
                    <div class="dog-name-badge">Oscar</div>
                </div>
                <div class="dog-info">
                    <h3>Oscar de la Belle Étoile</h3>
                    <p class="dog-age">5 ans • Mâle</p>

                    <div class="tabs">
                        <button class="tab-btn active" onclick="openTab(event, 'titres4')">Titres</button>
                        <button class="tab-btn" onclick="openTab(event, 'sante4')">Santé</button>
                        <button class="tab-btn" onclick="openTab(event, 'pedigree4')">Pedigree</button>
                    </div>

                    <div id="titres4" class="tab-content active">
                        <ul>
                            <li>🏆 Champion National</li>
                            <li>🥇 CACIB x2</li>
                            <li>⭐ Excellent x5</li>
                        </ul>
                    </div>

                    <div id="sante4" class="tab-content">
                        <ul>
                            <li>✅ Test ADN complet</li>
                            <li>✅ Hanches et coudes : A/A</li>
                            <li>✅ Yeux : Sain</li>
                            <li>✅ Cardiaque : Normal</li>
                        </ul>
                    </div>

                    <div id="pedigree4" class="tab-content">
                        <p><strong>Père :</strong> Grand Champion</p>
                        <p><strong>Mère :</strong> Championne Internationale</p>
                        <p><strong>Lignée :</strong> Lignée américaine</p>
                    </div>
                </div>
            </div>

            <!-- Chien 5 -->
            <div class="dog-card">
                <div class="dog-image">
                    <img src="images/male5.jpg" alt="Nom du chien 5">
                    <div class="dog-name-badge">Simba</div>
                </div>
                <div class="dog-info">
                    <h3>Simba du Royaume Enchanté</h3>
                    <p class="dog-age">3 ans • Mâle</p>

                    <div class="tabs">
                        <button class="tab-btn active" onclick="openTab(event, 'titres5')">Titres</button>
                        <button class="tab-btn" onclick="openTab(event, 'sante5')">Santé</button>
                        <button class="tab-btn" onclick="openTab(event, 'pedigree5')">Pedigree</button>
                    </div>

                    <div id="titres5" class="tab-content active">
                        <ul>
                            <li>🏆 Champion Régional</li>
                            <li>🥇 BOB Spéciale de race</li>
                            <li>⭐ Excellent x4</li>
                        </ul>
                    </div>

                    <div id="sante5" class="tab-content">
                        <ul>
                            <li>✅ Test ADN complet</li>
                            <li>✅ Hanches et coudes : A/A</li>
                            <li>✅ Yeux : Sain</li>
                            <li>✅ Cardiaque : Normal</li>
                        </ul>
                    </div>

                    <div id="pedigree5" class="tab-content">
                        <p><strong>Père :</strong> Champion de France</p>
                        <p><strong>Mère :</strong> Multi-championne</p>
                        <p><strong>Lignée :</strong> Lignée européenne</p>
                    </div>
                </div>
            </div>

            <!-- Chien 6 -->
            <div class="dog-card">
                <div class="dog-image">
                    <img src="images/male6.jpg" alt="Nom du chien 6">
                    <div class="dog-name-badge">Lucky</div>
                </div>
                <div class="dog-info">
                    <h3>Lucky des Prés Dorés</h3>
                    <p class="dog-age">4 ans • Mâle</p>

                    <div class="tabs">
                        <button class="tab-btn active" onclick="openTab(event, 'titres6')">Titres</button>
                        <button class="tab-btn" onclick="openTab(event, 'sante6')">Santé</button>
                        <button class="tab-btn" onclick="openTab(event, 'pedigree6')">Pedigree</button>
                    </div>

                    <div id="titres6" class="tab-content active">
                        <ul>
                            <li>🏆 Champion de France</li>
                            <li>🥇 CACIB x3</li>
                            <li>⭐ Excellent x6</li>
                        </ul>
                    </div>

                    <div id="sante6" class="tab-content">
                        <ul>
                            <li>✅ Test ADN complet</li>
                            <li>✅ Hanches et coudes : A/A</li>
                            <li>✅ Yeux : Sain</li>
                            <li>✅ Cardiaque : Normal</li>
                        </ul>
                    </div>

                    <div id="pedigree6" class="tab-content">
                        <p><strong>Père :</strong> Champion International</p>
                        <p><strong>Mère :</strong> Championne Nationale</p>
                        <p><strong>Lignée :</strong> Lignée mixte</p>
                    </div>
                </div>
            </div>

            <!-- Chien 7 -->
            <div class="dog-card">
                <div class="dog-image">
                    <img src="images/male7.jpg" alt="Nom du chien 7">
                    <div class="dog-name-badge">Buddy</div>
                </div>
                <div class="dog-info">
                    <h3>Buddy de la Source Cachée</h3>
                    <p class="dog-age">2 ans • Mâle</p>

                    <div class="tabs">
                        <button class="tab-btn active" onclick="openTab(event, 'titres7')">Titres</button>
                        <button class="tab-btn" onclick="openTab(event, 'sante7')">Santé</button>
                        <button class="tab-btn" onclick="openTab(event, 'pedigree7')">Pedigree</button>
                    </div>

                    <div id="titres7" class="tab-content active">
                        <ul>
                            <li>🏆 Champion Junior</li>
                            <li>🥇 1er Très Prometteur</li>
                            <li>⭐ Excellent x2</li>
                        </ul>
                    </div>

                    <div id="sante7" class="tab-content">
                        <ul>
                            <li>✅ Test ADN complet</li>
                            <li>✅ Hanches et coudes : A/A</li>
                            <li>✅ Yeux : Sain</li>
                            <li>✅ Cardiaque : Normal</li>
                        </ul>
                    </div>

                    <div id="pedigree7" class="tab-content">
                        <p><strong>Père :</strong> Multi-champion</p>
                        <p><strong>Mère :</strong> Championne de beauté</p>
                        <p><strong>Lignée :</strong> Lignée européenne</p>
                    </div>
                </div>
            </div>

            <!-- Chien 8 -->
            <div class="dog-card">
                <div class="dog-image">
                    <img src="images/male8.jpg" alt="Nom du chien 8">
                    <div class="retired-badge">🏖️ Retraité</div>
                    <div class="dog-name-badge">Prince</div>
                </div>
                <div class="dog-info">
                    <h3>Prince du Mont d'Azur</h3>
                    <p class="dog-age">3 ans • Mâle</p>

                    <div class="tabs">
                        <button class="tab-btn active" onclick="openTab(event, 'titres8')">Titres</button>
                        <button class="tab-btn" onclick="openTab(event, 'sante8')">Santé</button>
                        <button class="tab-btn" onclick="openTab(event, 'pedigree8')">Pedigree</button>
                    </div>

                    <div id="titres8" class="tab-content active">
                        <ul>
                            <li>🏆 Champion Régional</li>
                            <li>🥇 BOB x2</li>
                            <li>⭐ Excellent x3</li>
                        </ul>
                    </div>

                    <div id="sante8" class="tab-content">
                        <ul>
                            <li>✅ Test ADN complet</li>
                            <li>✅ Hanches et coudes : A/A</li>
                            <li>✅ Yeux : Sain</li>
                            <li>✅ Cardiaque : Normal</li>
                        </ul>
                    </div>

                    <div id="pedigree8" class="tab-content">
                        <p><strong>Père :</strong> Grand Champion</p>
                        <p><strong>Mère :</strong> Championne Internationale</p>
                        <p><strong>Lignée :</strong> Lignée américaine</p>
                    </div>
                </div>
            </div>

            <!-- Chien 9 -->
            <div class="dog-card">
                <div class="dog-image">
                    <img src="images/male9.jpg" alt="Nom du chien 9">
                    <div class="retired-badge">🏖️ Retraité</div>
                    <div class="dog-name-badge">Max</div>
                </div>
                <div class="dog-info">
                    <h3>Max de la Vallée Dorée</h3>
                    <p class="dog-age">5 ans • Mâle</p>

                    <div class="tabs">
                        <button class="tab-btn active" onclick="openTab(event, 'titres9')">Titres</button>
                        <button class="tab-btn" onclick="openTab(event, 'sante9')">Santé</button>
                        <button class="tab-btn" onclick="openTab(event, 'pedigree9')">Pedigree</button>
                    </div>

                    <div id="titres9" class="tab-content active">
                        <ul>
                            <li>🏆 Champion de France</li>
                            <li>🥇 CACIB x4</li>
                            <li>⭐ Excellent x7</li>
                        </ul>
                    </div>

                    <div id="sante9" class="tab-content">
                        <ul>
                            <li>✅ Test ADN complet</li>
                            <li>✅ Hanches et coudes : A/A</li>
                            <li>✅ Yeux : Sain</li>
                            <li>✅ Cardiaque : Normal</li>
                        </ul>
                    </div>

                    <div id="pedigree9" class="tab-content">
                        <p><strong>Père :</strong> Champion International</p>
                        <p><strong>Mère :</strong> Multi-championne</p>
                        <p><strong>Lignée :</strong> Lignée mixte</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <body>
  ...
  <!-- SCRIPT du carrousel -->

  <script>
     const track = document.querySelector('.carousel-track');
  const next = document.querySelector('.next');
  const prev = document.querySelector('.prev');
  let index = 0;

  next.addEventListener('click', () => {
      const slides = track.querySelectorAll('img');
      index = (index + 1) % slides.length;
      track.style.transform = `translateX(-${index * 100}%)`;
  });

  prev.addEventListener('click', () => {
      const slides = track.querySelectorAll('img');
      index = (index - 1 + slides.length) % slides.length;
      track.style.transform = `translateX(-${index * 100}%)`;
  });
  </script>
     <!-- ############ FOOTER ########## -->
<?php include 'includes/footer.php'; ?>