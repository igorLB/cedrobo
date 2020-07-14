@extends('master')

@section('content')
    
    <div class="container py-3">
        <h1 class="text-light mb-3">Usuários que já conversaram comigo :)</h1>
        <div class="table-responsive">
            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Data e hora</th>
                    </tr>
                </thead>
                <tbody>
                    @isset($users)
                        @if (!empty($users))
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ date('d/m/Y H:i:s', strtotime($user->created_at)) }}</td>
                                </tr>
                            @endforeach
                        @else
                            
                        @endif
                    @endisset
                </tbody>
            </table>
            <small class="text-info">Todos os dados são apagados automáticamente em 24 horas</small>
        </div>
    </div>

@endsection