<?php include("../components/header.php") ?>

<!-- Contenu du site -->
<div class="border p-1 perso_min_size">
    <?php echo title("Ils ont besoin de vous !", "pink_color") ?>

    <!-- carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active bg-dark" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class="bg-dark"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class="bg-dark"></button>
        </div>
        <div class="carousel-inner">

            <!-- Premier item -->
            <div class="carousel-item active">
                <div class="row no-gutters border rounded overflow-hidden mb-4 perso_bg_pink">
                    <div class="col-12 col-md-auto text-center">
                        <img src="../assets/images/Animaux/Chats/Framboise/Framboise.jpg" alt="Photo du chat Framboise">
                    </div>
                    <div class="col p-4 d-flex flex-column position-static">
                        <h3 class="pink_color perso_title">Framboise</h3>
                        <span class="text-muted mb-1">02/2019</span>
                        <p class="mb-auto">Description de Framboise</p>
                        <a href="" class="btn btn-primary">Visiter ma page</a>
                    </div>
                </div>
            </div>

            <!-- Second item -->
            <div class="carousel-item">
                <div class="row no-gutters border rounded overflow-hidden mb-4 perso_bg_pink">
                    <div class="col-12 col-md-auto text-center">
                        <img src="../assets/images/Animaux/Chats/Odin/Odin.jpg" alt="Photo du chat Odin">
                    </div>
                    <div class="col p-4 d-flex flex-column position-static">
                        <h3 class="green_color perso_title">Odin</h3>
                        <span class="text-muted mb-1">03/2019</span>
                        <p class="mb-auto">Description d'Odin</p>
                        <a href="" class="btn btn-primary">Visiter ma page</a>
                    </div>
                </div>
            </div>

            <!-- Troisième item -->
            <div class="carousel-item">
                <div class="row no-gutters border rounded overflow-hidden mb-4 perso_bg_pink">
                    <div class="col-12 col-md-auto text-center">
                        <img src="../assets/images/Animaux/Chats/Samdie/samdie.jpg" alt="Photo du chat Samdie">
                    </div>
                    <div class="col p-4 d-flex flex-column position-static">
                        <h3 class="perso_title red_color">Samide</h3>
                        <span class="text-muted mb-1">03/2020</span>
                        <p class="mb-auto">Description de Samdie'</p>
                        <a href="" class="btn btn-primary">Visiter ma page</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="row">
        <div class="col-6 mt-3">
            <h2 class="text-center green_color">
                <img src="../assets/images/Autres/icones/journal.png" alt="">
                Nouvelles des adoptés
            </h2>
            <div class="row g-0 border rounded mb-4">
                <div class="col-auto d-none d-lg-block">
                    <img src="../assets/images/Animaux/Chats/Framboise/Framboise.jpg" alt="" class="framboise-img">
                </div>
                <div class="col p-3 d-flex flex-column position-static perso_bg_green">
                    <h3 class="mb-0 perso_title green_color">Doyenne Chipie</h3>
                    <p class="size_12 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi maxime illo numquam suscipit veritatis voluptas magni nam sapiente ab molestias, ipsum optio praesentium quam earum? Ab perspiciatis autem deserunt soluta?</p>
                    </p>
                    <a href="" class="btn btn-primary">Visiter ma page</a>
                </div>
            </div>
        </div>

        <div class="col-6 mt-3">
            <h2 class="text-center orange_color">
                <img src="../assets/images/Autres/icones/action.png" alt="">
                Evénements & Actions
            </h2>
            <div class="row g-0 border rounded mb-4">
                <div class="col-auto d-none d-lg-block">
                    <img src="../assets/images/Animaux/Chats/Framboise/Framboise.jpg" alt="" class="framboise-img">
                </div>
                <div class="col p-3 d-flex flex-column position-static perso_bg_orange">
                    <h3 class="mb-0 perso_title orange_color">Doyenne Chipie</h3>
                    <p class="size_12 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi maxime illo numquam suscipit veritatis voluptas magni nam sapiente ab molestias, ipsum optio praesentium quam earum? Ab perspiciatis autem deserunt soluta?</p>
                    </p>
                    <a href="" class="btn btn-primary">Visiter ma page</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Pied de page du site -->
    <?php include("../components/footer.php") ?>