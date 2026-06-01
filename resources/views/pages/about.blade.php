<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us — InternMatch</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-950 text-slate-100 font-sans antialiased min-h-screen flex flex-col justify-between">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-7xl h-[300px] bg-indigo-500/5 blur-[120px] pointer-events-none"></div>

    <main class="container mx-auto my-16 px-4 max-w-4xl flex-grow">
        <a href="/" class="text-xs font-bold text-indigo-400 hover:underline tracking-wide">← BACK TO VACANCIES</a>
        
        <h2 class="text-4xl font-black text-white tracking-tight mt-6">Our Mission</h2>
        <p class="mt-4 text-slate-400 text-lg leading-relaxed">InternMatch is a specialized portal layer engineered to bridge the technical gap between aspiring software engineering students and high-growth technology ecosystems in Nepal.</p>
        
        <div class="grid md:grid-cols-2 gap-6 mt-12">
            <div class="bg-slate-900/40 border border-slate-900 p-6 rounded-2xl">
                <h3 class="text-lg font-bold text-indigo-300">For Students</h3>
                <p class="text-slate-400 text-sm mt-2 leading-relaxed">Gain streamlined access to verified software development, UI/UX design, and infrastructure roles without dealing with fragmented corporate application boards.</p>
            </div>
            <div class="bg-slate-900/40 border border-slate-900 p-6 rounded-2xl">
                <h3 class="text-lg font-bold text-cyan-300">For Engineering Teams</h3>
                <p class="text-slate-400 text-sm mt-2 leading-relaxed">Inject highly targeted candidate pipelines directly into your operational sprints. Control vacancy status using secure admin privileges.</p>
            </div>
        </div>
    </main>

    <footer class="border-t border-slate-950 bg-slate-950 py-6 text-center text-xs text-slate-600">&copy; {{ date('Y') }} InternMatch. All Rights Reserved.</footer>
</body>
</html>