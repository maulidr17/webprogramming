<div class="container">
    <div class="jumbotron mt-4">
        <h1 class="display-4">Welcome to My Website!</h1>
        <p class="lead">Hi!, my name is <?= $data['nama']; ?></p>
        <p class="lead">This is a simple website that i made form zero to fullfil my college duty :)</p>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg mr-4" href="<?= BASEURL; ?>/about" role="button">About Me</a>
        <a class="btn btn-primary btn-lg" href="<?= BASEURL; ?>/mahasiswa" role="button">CRUD App</a>
    </div>
</div>