<!DOCTYPE html>
<html>
<head>
    <title>Проекты</title>
</head>
<body>
    <h1>Проекты</h1>
    <a href="/projects/create">Создать новый проект</a>
    <ul>
        @foreach($projects as $project)
            <li>
                <a href="/projects/{{ $project->id }}/edit">{{ $project->name }}</a>
                ({{ $project->domain ?? 'Без домена' }})
            </li>
        @endforeach
    </ul>
</body>
</html>