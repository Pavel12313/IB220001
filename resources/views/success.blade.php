<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>{{ session('feedback.success') }}</h1>
    <p>Redirecting in 3 seconds...</p>

    <script>
        setTimeout(function(){
            window.location.href = "{{ route('tweet.index') }}";
        }, 3000);
    </script>
</body>
</html>
