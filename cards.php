<php></php>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WireBattle – Cards</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Style des cartes (list-group-item améliorés) */
        #sidebar .list-group-item {
            border-radius: 10px;
            margin-bottom: 6px;
            transition: all 0.25s ease;
            font-weight: 500;
        }

        #sidebar .list-group-item:hover {
            transform: scale(1.03);
            cursor: pointer;
            background-color: #f0f0f0;
        }

        /* Carte sélectionnée */
        #sidebar .list-group-item.active-card {
            background-color: #ffc107 !important;
            color: black !important;
            transform: scale(1.05);
            box-shadow: 0 0 10px rgba(255, 193, 7, 0.7);
            border-color: #ffca2c;
        }

        /* Animation du texte central */
        .fade-text {
            animation: fadeIn 0.4s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(5px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-md bg-dark sticky-top border-bottom" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand d-md-none" href="#">
                <svg class="bi" width="24" height="24" aria-hidden="true">
                    <use xlink:href="#aperture"></use>
                </svg>
                WireBattle
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"
                aria-controls="offcanvas" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasLabel">WireBattle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav flex-grow-1 justify-content-between">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html" aria-label="Home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="rule.html">Rules</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cards.php">Cards</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" aria-label="Cart">
                                <svg class="bi" width="24" height="24" aria-hidden="true">
                                    <use xlink:href="#cart"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid mt-4">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-3">
                <div id="sidebar" class="list-group">

                    <a href="#" class="list-group-item list-group-item-action" data-action="Quick_sketch">Quick sketch</a>
                    <a href="#" class="list-group-item list-group-item-action" data-action="Page_breakdown">Page breakdown</a>
                    <a href="#" class="list-group-item list-group-item-action" data-action="Block_placement">Block placement</a>
                    <a href="#" class="list-group-item list-group-item-action" data-action="Adding_columns">Adding columns</a>
                    <a href="#" class="list-group-item list-group-item-action" data-action="Adding_buttons">Adding buttons and links</a>
                    <a href="#" class="list-group-item list-group-item-action" data-action="Adding_placeholder_images">Adding placeholder images</a>
                    <a href="#" class="list-group-item list-group-item-action" data-action="Simple_text">Simple text and headings</a>
                    <a href="#" class="list-group-item list-group-item-action" data-action="Information_organization">Information organization</a>
                    <a href="#" class="list-group-item list-group-item-action" data-action="Mobile_version">Mobile version</a>
                    <a href="#" class="list-group-item list-group-item-action" data-action="Clean_alignments">Clean alignments and spacing</a>
                    <a href="#" class="list-group-item list-group-item-action" data-action="Click_path">Click path</a>
                    <a href="#" class="list-group-item list-group-item-action" data-action="Realistic_mockup">Realistic mockup</a>                    
                    <a href="#" class="list-group-item list-group-item-action" data-action="Simple_prototype">Simple prototype</a>
                    <a href="#" class="list-group-item list-group-item-action" data-action="Joker_1">Joker 1</a>
                    <a href="#" class="list-group-item list-group-item-action" data-action="Joker_2">Joker 2</a>
                    <a href="#" class="list-group-item list-group-item-action" data-action="Joker_3">Joker 3</a>
                </div>
            </div>

            <!-- Zone centrale -->
            <div class="col-9">
                <div class="card shadow p-3" id="texteCentral">
                    <h4 class="card-title">Description</h4>
                    <p class="card-text fs-5">Select something from the left.</p>
                </div>
            </div>

        </div>
    </div>

    <script>
        document.querySelectorAll('#sidebar .list-group-item').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();

                const action = this.dataset.action;

                // Retire l'ancien highlight
                document.querySelectorAll('#sidebar .list-group-item')
                    .forEach(btn => btn.classList.remove('active-card'));

                // Active celui qui vient d'être cliqué
                this.classList.add('active-card');

                fetch("get_text.php", {
                        method: "POST",
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        body: "action=" + encodeURIComponent(action)
                    })
                    .then(response => response.json())
                    .then(data => {
                        const zoneTexte = document.querySelector("#texteCentral .card-text");

                        // Retire l'animation précédente
                        zoneTexte.classList.remove("fade-text");

                        // Change le texte
                        zoneTexte.textContent = data.texte;

                        // Force un redraw pour relancer l'animation
                        void zoneTexte.offsetWidth;

                        // Relance l'animation
                        zoneTexte.classList.add("fade-text");
                    })
                    .catch(error => console.error("Erreur :", error));
            });
        });
    </script>


</body>

</html>