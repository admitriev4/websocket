@include('template.header')
<div class="wrapper main-container">
    <p class="title-big center">Список пользователей</p>
    <div class="users-list">
        <div class="user-item-top">
            <span>ID</span>
            <span>Имя</span>
            <span>E-mail</span>
        </div>
        @foreach ($users as $user)
            <div class="user-item">
                <span>{{ $user->id }}</span>
                <span>{{ $user->name }}</span>
                <span>{{ $user->email }}</span>
            </div>
        @endforeach
        <div class="paginate">{{ $users->links() }}</div>

    </div>
</div>

@include('template.footer')
