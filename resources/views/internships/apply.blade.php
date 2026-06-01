<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply for {{ $internship->title }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-900 text-slate-100 font-sans min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-xl bg-slate-800/60 border border-slate-700 rounded-2xl shadow-xl p-8 backdrop-blur">
        <div class="mb-6">
            <a href="/" class="text-sm text-indigo-400 hover:underline">← Cancel</a>
            <h2 class="text-2xl font-black mt-2 text-white">Apply for {{ $internship->title }}</h2>
            <p class="text-slate-400 text-sm">at {{ $internship->company }}</p>
        </div>

        <form action="/internships/{{ $internship->id }}/apply" method="POST" class="space-y-5">
            @csrf 
            
            <div>
                <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Full Name</label>
                <input type="text" name="applicant_name" placeholder="Sidhant" required
                    class="w-full bg-slate-900/60 border border-slate-700 rounded-xl px-4 py-3 text-slate-100 focus:outline-none focus:border-indigo-500 transition">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Email Address</label>
                <input type="email" name="applicant_email" placeholder="sidhant@example.com" required
                    class="w-full bg-slate-900/60 border border-slate-700 rounded-xl px-4 py-3 text-slate-100 focus:outline-none focus:border-indigo-500 transition">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Resume Link (Google Drive / Share Link)</label>
                <input type="url" name="resume_link" placeholder="https://drive.google.com/..." required
                    class="w-full bg-slate-900/60 border border-slate-700 rounded-xl px-4 py-3 text-slate-100 focus:outline-none focus:border-indigo-500 transition">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Short Cover Letter / Introduction</label>
                <textarea name="cover_letter" rows="4" placeholder="Why are you a good fit for this internship?" required
                    class="w-full bg-slate-900/60 border border-slate-700 rounded-xl px-4 py-3 text-slate-100 focus:outline-none focus:border-indigo-500 transition"></textarea>
            </div>

            <button type="submit" class="w-full bg-indigo-600 text-white font-bold py-3.5 rounded-xl hover:bg-indigo-500 transition shadow-lg">
                Submit Application
            </button>
        </form>
    </div>

</body>
</html>