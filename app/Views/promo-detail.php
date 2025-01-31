<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<div class="content-wrapper">
  <div class="page-title">
    <h1>Detail Promo</h1>
  </div>

  <div class="section promo-detail my-5">
    <div class="container-md">
      <div class="row">
        <div class="col-md-8 order-md-1 order-2">
          <div class="promo-detail-container">

            <?php if ($promo->image == null) { ?>
              <img src="<?= base_url('public/main/images/slider-1.jpg') ?>" alt="">
            <?php } else { ?>
              <img src="<?= base_url('public/images/promo') .'/'. $promo->image ?>" alt="">
            <?php } ?>
            <div class="discount">
              Diskon <?= $promo->promo ?>%
            </div>
          </div>
          <p>
            <?= $p->description ?>
          </p>
        </div>
        <div class="col-md-4 order-md-2 order-1">
          <div class="promo-detail-content">
            <h2 class="promo-title">
              <?= $promo->slug ?>
            </h2>
            <h5>Kode Promo</h5>

            <input type="text" class="form-control" value="<?= $promo->promoCode ?>" disabled id="codePromo">

            <button type="button" class="btn btn-success btn-lg btn-block btn-rounded" onclick="copyToClipboard('#codePromo')">SALIN KODE PROMO</button>
            <?php $date = new DateTime($promo->expired); ?>
            <p>Masa Berlaku s/d <?= $date->format('F Y'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<?= $this->section('script') ?>
<script>
  function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).val()).select();
    document.execCommand("copy");
    $temp.remove();
  }
</script>

<?= $this->endSection() ?>

<?= $this->endSection() ?>