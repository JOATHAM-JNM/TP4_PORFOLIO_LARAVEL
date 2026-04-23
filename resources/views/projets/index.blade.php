<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Projets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Gestion des Projets</h1>
            <a href="{{ route('projets.create') }}" class="btn btn-primary">Ajouter un projet</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            @forelse ($projets as $projet)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('photos/' . $projet->image) }}" class="card-img-top" alt="{{ $projet->titre }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $projet->titre }}</h5>
                        <p class="card-text">{{ Str::limit($projet->description, 100) }}</p>
                        <div class="mb-2">
                            @if($projet->technologie1)
                            <span class="badge bg-secondary me-1">{{ $projet->technologie1 }}</span>
                            @endif
                            @if($projet->technologie2)
                            <span class="badge bg-secondary me-1">{{ $projet->technologie2 }}</span>
                            @endif
                            @if($projet->technologie3)
                            <span class="badge bg-secondary">{{ $projet->technologie3 }}</span>
                            @endif
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('projets.show', $projet->id) }}" class="btn btn-info btn-sm">Voir</a>
                            <a href="{{ route('projets.edit', $projet->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                            <form action="{{ route('projets.destroy', $projet->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="alert alert-info">
                    Aucun projet trouvé. <a href="{{ route('projets.create') }}">Ajoutez votre premier projet</a>.
                </div>
            </div>
            @endforelse
        </div>

        <div class="mt-4">
            <a href="/" class="btn btn-secondary">Retour au portfolio</a>
            <a href="{{ route('messages.index') }}" class="btn btn-info ms-2">Voir les messages</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
