<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In — InternMatch</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-900 text-slate-100 font-sans min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md bg-slate-800/60 border border-slate-700 rounded-2xl shadow-xl p-8 backdrop-blur">
        <div class="mb-6 text-center">
            <h2 class="text-3xl font-black text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-cyan-400">🎓 InternMatch</h2>
            <p class="text-slate-400 text-sm mt-1">Sign in to access your dashboard account</p>
        </div>

        @if ($errors->any())
            <div class="mb-4 p-3 bg-rose-500/10 border border-rose-500/20 text-rose-400 rounded-xl text-xs font-medium">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="/login" method="POST" class="space-y-5">
            @csrf 
            
            <div>
                <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Email Address</label>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="admin@internmatch.com" required autofocus
                    class="w-full bg-slate-900/60 border border-slate-700 rounded-xl px-4 py-3 text-slate-100 focus:outline-none focus:border-indigo-500 transition">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Password</label>
                <input type="password" name="password" placeholder="••••••••" required
                    class="w-full bg-slate-900/60 border border-slate-700 rounded-xl px-4 py-3 text-slate-100 focus:outline-none focus:border-indigo-500 transition">
            </div>

            <button type="submit" class="w-full bg-indigo-600 text-white font-bold py-3.5 rounded-xl hover:bg-indigo-500 transition shadow-lg shadow-indigo-600/20">
                Sign In
            </button>
        </form>

        <div class="mt-6 pt-4 border-t border-slate-700/50 text-center text-xs text-slate-400">
            Testing profiles info: use <span class="text-indigo-400 font-mono">admin@internmatch.com</span> with password <span class="text-indigo-400 font-mono">password123</span>
        </div>
    </div>

</body>
</html>