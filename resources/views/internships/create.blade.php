<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post an Internship — InternMatch</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-900 text-slate-100 font-sans min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-xl bg-slate-800/60 border border-slate-700 rounded-2xl shadow-xl p-8 backdrop-blur">
        <div class="mb-6">
            <a href="/" class="text-sm text-indigo-400 hover:underline">← Go Back Home</a>
            <h2 class="text-2xl font-black mt-2 text-white">Post an Open Position</h2>
        </div>

        <form action="/internships" method="POST" class="space-y-5">
            @csrf <!-- Secret security key required by Laravel forms -->
            
            <div>
                <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Internship Title</label>
                <input type="text" name="title" placeholder="e.g. Full Stack Developer Intern" required
                    class="w-full bg-slate-900/60 border border-slate-700 rounded-xl px-4 py-3 text-slate-100 focus:outline-none focus:border-indigo-500 transition">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Company Name</label>
                <input type="text" name="company" placeholder="e.g. InternMatch Tech" required
                    class="w-full bg-slate-900/60 border border-slate-700 rounded-xl px-4 py-3 text-slate-100 focus:outline-none focus:border-indigo-500 transition">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Office Location</label>
                <input type="text" name="location" placeholder="e.g. Tinkune, Kathmandu" required
                    class="w-full bg-slate-900/60 border border-slate-700 rounded-xl px-4 py-3 text-slate-100 focus:outline-none focus:border-indigo-500 transition">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Job Description & Requirements</label>
                <textarea name="description" rows="5" placeholder="Detail the skills needed and daily project expectations..." required
                    class="w-full bg-slate-900/60 border border-slate-700 rounded-xl px-4 py-3 text-slate-100 focus:outline-none focus:border-indigo-500 transition"></textarea>
            </div>

            <button type="submit" class="w-full bg-indigo-600 text-white font-bold py-3.5 rounded-xl hover:bg-indigo-500 transition shadow-lg shadow-indigo-600/20">
                Publish Internship Opportunity
            </button>
        </form>
    </div>

</body>
</html>