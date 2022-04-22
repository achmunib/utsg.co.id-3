<main id="main" data-aos="fade-up">
  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2><b>News</b></h2>
        <ol>
          <li><a href="<?=base_url();?>#news">Home</a></li>
          <li><a href="<?=base_url();?>user/news">News</a></li>
          <li>All News</li>
        </ol>
      </div>

    </div>
  </section><!-- Breadcrumbs Section -->

  <!-- ======= ALl News Section ======= -->
  <section id="portfolio-details" class="portfolio-details light news">
    <div class="container">
      <div id="data-container"></div>
      <div id="pagination-container"></div>
      <div class="col-lg-12">
        <div class="card" data-aos="fade-up" style="background-color: #FFFAF8;">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-8">
              <?php if (count($data) > 0) : ?>
                <?php foreach ($data as $a) : ?>
                  <div class="row grid-margin border-bottom">
                    <div class="col-sm-4 grid-margin">
                      <div class="image-hover">
                        <img 
                          src="https://10.30.8.192/insapputsg.co.id/asset/img/news/<?= $a['lampiran']; ?>" 
                          alt="banner"
                          class="img-fluid"
                        />
                      </div>
                    </div>
                    <div class="col-sm-8">
                      <h3 class="font-weight-600 mb-2 title-news-pages">
                        <?= $a['judul']; ?>
                      </h3>
                      <p class="fs-15 desc-news-pages">
                        <?= strip_tags($a['isi_berita']); ?>
                      </p>
                      <span class="time-post"><?= $a['tanggal']; ?></span>
                      <a href="<?=base_url();?>user/detail_news/<?= $a['id']; ?>" class="read-more">Read more...</a>
                    </div>
                  </div>
                <?php endforeach; ?>
              <?php endif; ?>
              </div>
              <div class="col-lg-4">
                <h2 class="mb-4 font-weight-600 latest-big-news">
                  Latest News
                </h2>
                <?php foreach ($all['lates_news'] as $l) : ?>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="border-bottom pb-4 pt-4">
                        <div class="row">
                          <div class="col-sm-8">
                            <h5 class="font-weight-600 mb-1 title-news">
                              <?= $l['judul'] ?>
                            </h5>
                            <p class="fs-13 text-muted mb-0">
                              <?= $l['tanggal']; ?>
                            </p>
                          </div>
                          <div class="col-sm-4">
                            <div class="image-hover">
                              <img
                                src="https://10.30.8.192/insapputsg.co.id/asset/img/news/<?= $l['lampiran']; ?>"
                                alt="banner"
                                class="img-fluid"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
                <div class="trending">
                  <h2 class="mb-4 font-weight-600 latest-big-news">
                    Big News
                  </h2>
                  <div class="mb-4">
                    <div class="image-hover">
                      <img
                        src="https://10.30.8.192/insapputsg.co.id/asset/img/news/<?= $all['big_news']['lampiran']; ?>"
                        alt="banner"
                        class="img-fluid"
                      />
                    </div>
                    <h3 class="mt-3 font-weight-600 title-news-highlight">
                      <?= $all['big_news']['isi_berita']; ?>
                    </h3>
                    <p class="fs-13 text-muted mb-0">
                      <?= $all['big_news']['tanggal']; ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <?php echo $pagination; ?>
            </div>
            <!-- <div class="row">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="<?=base_url();?>user/news/2">2</a></li>
                <li class="page-item"><a class="page-link" href="<?=base_url();?>user/news/3">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="<?=base_url();?>user/news/2">Next</a>
                </li>
              </ul>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section><!-- End ALl News Section -->
</main><!-- End #main -->