<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $projet->titre }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h1>{{ $projet->titre }}</h1>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <img src="{{ asset('photos/' . $projet->image) }}" class="img-fluid rounded" alt="{{ $projet->titre }}" style="max-height: 400px;">
                        </div>
                        
                        <div class="mb-4">
                            <h4>Description</h4>
                            <p>{{ $projet->description }}</p>
                        </div>

                        <div class="mb-4">
                            <h4>Technologies utilisées</h4>
                            <div>
                                @if($projet->technologie1)
                                <span class="badge bg-primary me-2">{{ $projet->technologie1 }}</span>
                                @endif
                                @if($projet->technologie2)
                                <span class="badge bg-primary me-2">{{ $projet->technologie2 }}</span>
                                @endif
                                @if($projet->technologie3)
                                <span class="badge bg-primary">{{ $projet->technologie3 }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-4">
                            <small class="text-muted">
                                Créé le: {{ $projet->created_at->format('d/m/Y H:i') }} | 
                                Mis à jour le: {{ $projet->updated_at->format('d/m/Y H:i') }}
                            </small>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('projets.index') }}" class="btn btn-secondary">Retour à la liste</a>
                            <div>
                                <a href="{{ route('projets.edit', $projet->id) }}" class="btn btn-warning me-2">Modifier</a>
                                <form action="{{ route('projets.destroy', $projet->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce projet?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
