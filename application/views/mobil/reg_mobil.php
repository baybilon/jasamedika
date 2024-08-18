<div class="main-content" style="min-height: 610px;">
    <section class="section">
        <div class="section-body">
            <h2 class="section-title">Advanced Forms</h2>
            <p class="section-lead">We provide advanced input fields, such as date picker, color picker, and so on.</p>

            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                        <h4>Resgistrasi Kendaraan Baru</h4>
                        </div>
                        <div class="card-body">
                        <form method="POST" action="<?php echo base_url('insert-mobil')?>" class="needs-validation" novalidate="">
                            <div class="form-group">
                                <label>Nomor Polisi</label>
                                <input type="text" class="form-control" name="nopol">
                            </div>
                            <div class="form-group">
                                <label>Merk</label>
                                <input type="text" class="form-control" name="merk">
                            </div>
                            <div class="form-group">
                                <label>Model</label>
                                <input type="text" class="form-control" name="model">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="col-3 btn btn-primary btn-lg btn-block">
                                Register
                                </button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>