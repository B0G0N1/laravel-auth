@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-dark text-white d-flex align-items-center justify-content-between">
                        <h2 class="mb-0">{{ $project->title }}</h2>
                        <div class="d-flex">
                            <!-- Form per eliminare il progetto con conferma -->
                            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST"
                                onsubmit="return confirm('Sei sicuro di voler eliminare questo progetto?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger me-2">Elimina Progetto</button>
                            </form>

                            <!-- Link per tornare alla lista dei progetti -->
                            <a href="{{ route('admin.projects.index') }}" class="btn btn-light">Back to Projects</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <p><strong>Slug:</strong> {{ $project->slug }}</p>
                        <p><strong>Description:</strong> {{ $project->description }}</p>
                        <p><strong>URL:</strong> <a href="{{ $project->url }}" target="_blank">{{ $project->url }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
