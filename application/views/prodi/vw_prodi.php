
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Our Studio!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Dasboard</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Responsive Design</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Web Security</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
<section class="page-section" id="prodi">
    <div class="text-center">
        <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <a href="<?= base_url() ?>Prodi/tambah" class="btn btn-info mb-2">Tambah Prodi</a>
        </div>
        <div class="col-md-12">
        <?= $this->session->flashdata('message');?>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <td>No</td>
                        <td>Nama Prodi</td>
                        <td>Ruangan</td>
                        <td>Jurusan</td>
                        <td>Akreditasi</td>
                        <td>Nama Kaprodi</td>
                        <td>Tahun Berdiri</td>
                        <td>Output Lulusan</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                    <?php foreach ($prodi as $us) : ?>
                    <tr>
                        <td><?= $i; ?>.</td>
                        <td><?= $us['nama']; ?></td>
                        <td><?= $us['ruangan']; ?></td>
                        <td><?= $us['jurusan']; ?></td>
                        <td><?= $us['akreditasi']; ?></td>
                        <td><?= $us['nama_kaprodi']; ?></td>
                        <td><?= $us['tahun_berdiri']; ?></td>
                        <td><?= $us['output_lulusan']; ?></td>
                        <td>
                            <a href="<?= base_url('Prodi/hapus/') . $us['id']; ?>" class="btn btn-danger">Hapus</a>
                            <a href="<?= base_url('Prodi/edit/') . $us['id']; ?>"  class="btn btn-warning">Edit</a>
                            <a href="<?= base_url('Prodi/detail/') . $us['id']; ?>"  class="btn btn-info">Detail</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
        </section>
