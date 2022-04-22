<? $detail = 1?>
<main id="main" data-aos="fade-up">
  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2><b>News Details</b></h2>
        <ol>
          <li><a href="<?=base_url();?>">Home</a></li>
          <li><a href="<?=base_url();?>user/news/1">News</a></li>
          <li>News Details</li>
        </ol>
      </div>

    </div>
  </section><!-- Breadcrumbs Section -->

  <!-- ======= News Details Section ======= -->
  <section id="single-news" class="single-news">
    <div class="container">
      <div class="col-lg-12">
        <div class="card" data-aos="fade-up" style="background-color: #FFFAF8;">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-8">
                <div class="sn-container">
                  <div class="sn-img">
                    <img 
                      src="https://10.30.8.192/insapputsg.co.id/asset/img/news/<?= $detail['news']['lampiran']; ?>" 
                      alt="banner"
                      class="img-fluid rounded mx-auto d-block"
                    />
                  </div>
                  <div class="sn-content">
                    <h1 class="sn-title">
                      <?= $detail['news']['judul']; ?>
                    </h1>
                     <?= $detail['news']['isi_berita']; ?>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <h2 class="mb-4 font-weight-600 latest-big-news">
                  Latest news
                </h2>
                <?php if (count($detail['lates_news']) > 0) : ?>
                  <?php foreach ($detail['lates_news'] as $d) : ?>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="border-bottom pb-4 pt-4">
                          <div class="row">
                            <div class="col-sm-8">
                              <h5 class="font-weight-600 mb-1 title-news">
                                <?= $d['judul']; ?>
                              </h5>
                              <p class="fs-13 text-muted mb-0">
                                <?= $d['tanggal']; ?>
                              </p>
                            </div>
                            <div class="col-sm-4">
                              <div class="image-hover">
                                <img
                                  src="https://10.30.8.192/insapputsg.co.id/asset/img/news/<?= $d['lampiran']; ?>"
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
                <?php endif; ?>
                <div class="trending">
                  <h2 class="mb-4 font-weight-600 latest-big-news">
                    Big News
                  </h2>
                  <div class="mb-4">
                    <div class="image-hover">
                      <img
                        src="https://10.30.8.192/insapputsg.co.id/asset/img/news/<?= $detail['big_news']['lampiran']; ?>"
                        alt="banner"
                        class="img-fluid"
                      />
                    </div>
                    <h3 class="mt-3 font-weight-600 title-news-highlight">
                      <?= $detail['big_news']['judul']; ?>
                    </h3>
                    <p class="fs-13 text-muted mb-0">
                      <?= $detail['big_news']['tanggal']; ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>    
    </div>
  </section><!-- End News Details Section -->
</main><!-- End #main -->