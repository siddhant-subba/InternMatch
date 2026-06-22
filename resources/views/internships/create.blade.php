<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post New Internship — InternMatch</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#050714] text-slate-100 font-sans min-h-screen flex flex-col justify-center items-center p-6">

    <div class="w-full max-w-xl bg-[#0b101d] border border-slate-900 rounded-2xl p-8 shadow-2xl">
        <h2 class="text-2xl font-black mb-1 text-white tracking-tight">Post an <span class="text-indigo-400">Internship</span></h2>
        <p class="text-xs text-slate-400 mb-6">Fill in the fields below to dispatch a new opportunity to the live matching index.</p>

        <form action="/internships" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-1.5">Job Title</label>
                <input type="text" name="title" required placeholder="e.g., Backend Laravel Intern" class="bg-[#050811] border border-slate-800 rounded-xl p-3 w-full text-sm text-white focus:outline-none focus:border-indigo-500 transition">
            </div>

            <div>
                <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-1.5">Company Name</label>
                <input type="text" name="company" required placeholder="e.g., Kathmandu Tech Solutions" class="bg-[#050811] border border-slate-800 rounded-xl p-3 w-full text-sm text-white focus:outline-none focus:border-indigo-500 transition">
            </div>

            <div>
                <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-1.5">Location</label>
                <input type="text" name="location" required placeholder="e.g., Kupondole, Lalitpur" class="bg-[#050811] border border-slate-800 rounded-xl p-3 w-full text-sm text-white focus:outline-none focus:border-indigo-500 transition">
            </div>

            <div>
                <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-1.5">Role Description</label>
                <textarea name="description" rows="5" required placeholder="Describe responsibilities, stack requirements, and mentorship expectations..." class="bg-[#050811] border border-slate-800 rounded-xl p-3 w-full text-sm text-white focus:outline-none focus:border-indigo-500 transition resize-none"></textarea>
            </div>

            <div class="flex items-center justify-end gap-3 pt-2">
                <a href="/" class="text-xs text-slate-400 font-semibold hover:text-white transition px-4 py-2">Cancel</a>
                <button type="submit" class="bg-gradient-to-b from-[#4f46e5] to-[#a855f7] text-white font-extrabold text-xs px-6 py-3 rounded-xl border-b-[4px] border-[#2e2a85] active:border-b-0 active:translate-y-[4px] transition-all duration-100 shadow-lg tracking-wide cursor-pointer">
                    Publish Position
                </button>
            </div>
        </form>
    </div>

</body>
</html>