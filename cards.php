<php></php>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WireBattle – Cards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <style>
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

        #sidebar .list-group-item.active-card {
            background-color: #ffc107 !important;
            color: black !important;
            transform: scale(1.05);
            box-shadow: 0 0 10px rgba(255, 193, 7, 0.7);
            border-color: #ffca2c;
        }

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
     <nav class="navbar navbar-expand-md sticky-top border-bottom" style="background-color:#c688bb; min-width: 8%;">
        <div class="container">
            <a class="navbar-brand d-md-none" href="#">
                <svg class="bi" width="24" height="24" aria-hidden="true">
                    <use xlink:href="#aperture"></use>
                </svg>
                <img src="image/logow.svg" alt="WireBattle Logo" width="50% ">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"
                aria-controls="offcanvas" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
                <div class="offcanvas-body">
                    <ul class="navbar-nav flex-grow-1 justify-content-center" style="gap: 25%;">
                        <li class="nav-item p-2">
                            <a class="nav-link" href="rule.html" style="font-size:130%; color:#eace3b;">Rules</a>
                        </li>

                        <li class="nav-item p-1">
                            <a class="nav-link d-md-none" href="index.html"
                                style="font-size:130%; text-align:left; color:#eace3b;">Home</a>

                            <a class="nav-link d-none d-md-flex justify-content-center align-items-center"
                                href="index.html" style="padding:0;">
                                <img src="image/logow.svg" alt="Logo" style="height:60px; width:auto; display:block;">
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link" href="cards.php" style="font-size:130%; color:#eace3b;">Cards</a>
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
                <div id="sidebar" class="list-group" style="position: relative;">

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
                <div class="shadow-sm mx-auto p-20" style="width: 75%; height: 100%; min-height: 300px;
                            border-radius: 21px 21px 0 0;
                            background-image: url('image/cards/carte_test.png');
                            background-size: contain;
                            background-position: center;
                            background-repeat: no-repeat;">
                </div>
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