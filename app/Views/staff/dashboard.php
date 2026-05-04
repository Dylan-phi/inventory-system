<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<h2>Staff Dashboard</h2>
<p>Welcome, <?= session('name'); ?> 👋</p>

<div class="row">

    <div class="col-md-4">
        <div class="card p-3">
            <h5>Total Products</h5>
            <h3>120</h3>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3">
            <h5>Stock In Today</h5>
            <h3>25</h3>
        </div>
    </div>

</div>

<?= $this->endSection() ?>