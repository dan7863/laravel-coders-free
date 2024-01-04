<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? 'Coders Free'}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href = "">
                    Link 1
                </a>
            </li>
            <li>
                <a href = "">
                    Link 2
                </a>
            </li>
            <li>
                <a href = "">
                    Link 3
                </a>
            </li>
        </ul>
    </nav>
    {{$slot}}
</body>
</html>