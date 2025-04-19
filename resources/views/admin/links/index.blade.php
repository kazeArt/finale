@extends('layouts.app')

@section('content')
<style>
    .admin-links-wrapper {
        min-height: 100vh;
        background: linear-gradient(to bottom right, #991b1b, #fce7f3, #ffffff);
        padding: 3rem 1rem;
        display: flex;
        justify-content: center;
        align-items: start;
    }

    .admin-links-box {
        background-color: white;
        width: 100%;
        max-width: 80rem;
        border-radius: 1.5rem;
        padding: 2rem;
        border: 1px solid #e5e7eb;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .admin-links-box h2 {
        font-size: 2rem;
        font-weight: 800;
        color: #1f2937;
        text-align: center;
        margin-bottom: 2rem;
    }

    .admin-links-box h2 span {
        display: block;
        font-size: 1rem;
        font-weight: 500;
        color: #6b7280;
        margin-top: 0.5rem;
    }

    .links-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
    }

    .link-card {
        background-color: white;
        border: 1px solid #e5e7eb;
        border-radius: 1rem;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        padding: 1.5rem;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .link-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .link-card p {
        font-size: 1rem;
        color: #374151;
        margin-bottom: 1rem;
        word-wrap: break-word;
    }

    .link-card a {
        display: inline-block;
        background-color: #1e293b;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 0.5rem;
        text-decoration: none;
        font-weight: 600;
        transition: background-color 0.2s ease;
    }

    .link-card a:hover {
        background-color: #0f172a;
    }
</style>

<div class="admin-links-wrapper">
    <div class="admin-links-box">
        <h2>🔗 Gestion des liens <span>modifiez ou gérez vos liens</span></h2>

        <div class="links-container">
            @foreach ($links as $link)
                <div class="link-card">
                    <p>{{ $link->url }}</p>
                    <a href="{{ route('admin.links.edit', $link->id) }}">✏️ Modifier</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection