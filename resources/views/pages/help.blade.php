<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help & Support Center — InternMatch</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-950 text-slate-100 font-sans antialiased min-h-screen flex flex-col justify-between">
    <main class="container mx-auto my-16 px-4 max-w-3xl flex-grow">
        <a href="/" class="text-xs font-bold text-indigo-400 hover:underline tracking-wide">← BACK TO HOME</a>
        
        <h2 class="text-4xl font-black text-white tracking-tight mt-6 mb-2">Help Center</h2>
        <p class="text-slate-400 text-base">Answers to common procedural inquiries regarding system permissions and applications.</p>

        <div class="mt-12 space-y-6">
            <div class="border border-slate-900 bg-slate-900/20 p-6 rounded-2xl">
                <h3 class="text-base font-bold text-white flex items-center gap-2">
                    <span class="text-indigo-400">Q.</span> Why do I encounter a "403 Unauthorized" page error?
                </h3>
                <p class="text-slate-400 text-sm mt-2 leading-relaxed pl-6">This security measure restricts access to the internship creation form (`/internships/create`). Only users with an admin value of `1` inside the MySQL database are permitted to view and complete this form.</p>
            </div>

            <div class="border border-slate-900 bg-slate-900/20 p-6 rounded-2xl">
                <h3 class="text-base font-bold text-white flex items-center gap-2">
                    <span class="text-purple-400">Q.</span> How can I apply for an internship position?
                </h3>
                <p class="text-slate-400 text-sm mt-2 leading-relaxed pl-6">Log in with a standard user account (e.g., `user@internmatch.com`). The homepage cards will instantly show a blue **"Apply Now"** button. If you are logged in as an administrator, this option is hidden in favor of management tools.</p>
            </div>

            <div class="border border-slate-900 bg-slate-900/20 p-6 rounded-2xl">
                <h3 class="text-base font-bold text-white flex items-center gap-2">
                    <span class="text-cyan-400">Q.</span> What tech stack powers InternMatch?
                </h3>
                <p class="text-slate-400 text-sm mt-2 leading-relaxed pl-6">The application runs on Laravel, utilizing PHP controllers for authentication, a MySQL relational database system for persistent record storage, and Tailwind CSS for the user interface components.</p>
            </div>
        </div>
    </main>
    <footer class="border-t border-slate-950 bg-slate-950 py-6 text-center text-xs text-slate-600">&copy; {{ date('Y') }} InternMatch Portal Layers. Support Terminal.</footer>
</body>
</html>