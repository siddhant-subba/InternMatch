<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Placement Info — InternMatch</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-900 text-slate-100 font-sans min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-xl bg-slate-800/60 border border-slate-700 rounded-2xl shadow-xl p-8 backdrop-blur">
        <div class="mb-6">
            <a href="/" class="text-sm text-indigo-400 hover:underline">← Cancel & Return</a>
            <h2 class="text-2xl font-black mt-2 text-white">Modify Vacancy Info</h2>
        </div>

        <form action="/internships/{{ $internship->id }}" method="POST" class="space-y-5">
            @csrf
            @method('PUT') <!-- Tells Laravel to treat this submission as a database update overwrite -->
            
            <div>
                <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Internship Title</label>
                <input type="text" name="title" value="{{ $internship->title }}" required
                    class="w-full bg-slate-900/60 border border-slate-700 rounded-xl px-4 py-3 text-slate-100 focus:outline-none focus:border-indigo-500 transition">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Company Name</label>
                <input type="text" name="company" value="{{ $internship->company }}" required
                    class="w-full bg-slate-900/60 border border-slate-700 rounded-xl px-4 py-3 text-slate-100 focus:outline-none focus:border-indigo-500 transition">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Office Location</label>
                <input type="text" name="location" value="{{ $internship->location }}" required
                    class="w-full bg-slate-900/60 border border-slate-700 rounded-xl px-4 py-3 text-slate-100 focus:outline-none focus:border-indigo-500 transition">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Job Description</label>
                <textarea name="description" rows="5" required
                    class="w-full bg-slate-900/60 border border-slate-700 rounded-xl px-4 py-3 text-slate-100 focus:outline-none focus:border-indigo-500 transition">{{ $internship->description }}</textarea>
            </div>

            <button type="submit" class="w-full bg-gradient-to-r from-indigo-600 to-cyan-600 text-white font-bold py-3.5 rounded-xl hover:opacity-90 transition shadow-lg">
                Save Structural Changes
            </button>
        </form>
    </div>

</body>
</html>