<div>
    <div class="card">
        <div class="card-header">
            <h4>Statistik Pembayaran Tahun 2023 {{ date('Y') }}</h4>
        </div>
        <div class="card-body">
            <x-apex.line-chart
                :chart-id="$id"
                :chart-data="$data"
                :chart-category="$categories"
            />
        </div>
    </div>
</div>
