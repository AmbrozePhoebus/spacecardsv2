@props([
'title' => 'Spacecards'
])

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{ $title }}</title>
	<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
	<style>

		.contact-card {
			display: block;
			margin-top: 20px;
			background: #974848;
			max-width: 400px;
			margin: auto;
		}

		.card {
			padding: 10px; 
			border-radius: 5px; 
			margin-bottom: 10px;
		}
	</style>
</head>

<body class="bg-gray-700 text-white p-6 mx-w-xl mx-auto">
<body>

    <nav>
        <a href="/">Home</a>
        <a href="/about">About Us</a>
        <a href="/contact">Contact Us</a>
		<a href="/ideas">Submit an Idea</a>
    </nav>

	<main>
	{{ $slot }}
	</main>

</body>
</html>
