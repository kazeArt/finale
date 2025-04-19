@extends('layouts.app')

@section('header')
    <h2 style="font-weight: 700; font-size: 1.5rem; color: #991b1b;">✏️ Modifier le lien</h2>
@endsection

@section('content')
<style>
    .edit-link-wrapper {
        background-color: white;
        max-width: 42rem;
        margin: 3rem auto;
        padding: 2rem 2.5rem;
        border-radius: 1.5rem;
        border: 1px solid #e5e7eb;
        box-shadow: 0 6px 25px rgba(0, 0, 0, 0.07);
    }

    .edit-link-wrapper h2 {
        font-size: 1.75rem;
        font-weight: bold;
        color: #991b1b;
        text-align: center;
        margin-bottom: 2rem;
    }

    .error-box {
        background-color: #fee2e2;
        color: #b91c1c;
        padding: 1rem;
        border-radius: 0.75rem;
        margin-bottom: 1.5rem;
    }

    .error-box ul {
        list-style-type: disc;
        padding-left: 1.25rem;
    }

    .form-group {
        margin-bottom: 1.75rem;
    }

    .form-group label {
        display: block;
        font-size: 1rem;
        font-weight: 600;
        color: #444;
        margin-bottom: 0.5rem;
    }

    .form-group input {
        width: 100%;
        padding: 0.65rem 1rem;
        border: 1px solid #d1d5db;
        border-radius: 0.75rem;
        font-size: 1rem;
        font-family: inherit;
        background-color: #fefefe;
    }

    .form-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .form-actions button {
        background-color: #991b1b;
        color: white;
        padding: 0.65rem 1.75rem;
        font-weight: 600;
        border: none;
        border-radius: 0.75rem;
        cursor: pointer;
        font-size: 1rem;
        transition: background-color 0.2s ease;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .form-actions button:hover {
        background-color: #7f1d1d;
    }

    .form-actions a {
        color: #6b7280;
        text-decoration: none;
        font-size: 1rem;
    }

    .form-actions a:hover {
        text-decoration: underline;
    }
</style>

<div class="edit-link-wrapper">
    <h2>Modifier le lien</h2>

    {{-- Error Handling --}}
    @if ($errors->any())
        <div class="error-box">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Edit Form --}}
    <form action="{{ route('admin.links.update', $link->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="label">Label</label>
            <input type="text" name="label" id="label" value="{{ $link->label }}" required>
        </div>

        <div class="form-group">
            <label for="url">URL</label>
            <input type="url" name="url" id="url" value="{{ $link->url }}" required>
        </div>

        <div class="form-actions">
            <button type="submit">💾 Enregistrer</button>
            <a href="{{ route('admin.links.index') }}">← Annuler</a>
        </div>
    </form>
</div>
@endsection