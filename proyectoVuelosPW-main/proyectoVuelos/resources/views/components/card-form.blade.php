<div class="container my-5">
    <div class="card shadow-sm mb-4" style="max-width: 500px; margin: 0 auto;">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">{{ $title }}</h5>
        </div>
        <div class="card-body">
            <!-- Espacio para el formulario -->
            {{$slot}}
        </div>
    </div>
</div>