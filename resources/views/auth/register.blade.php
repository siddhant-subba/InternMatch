<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up — InternMatch</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-950 text-slate-100 font-sans antialiased min-h-screen flex items-center justify-center p-4">

    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-md h-[400px] bg-indigo-500/10 blur-[100px] pointer-events-none"></div>

    <div class="w-full max-w-md bg-slate-900/50 border border-slate-800/80 rounded-3xl p-8 backdrop-blur-md relative z-10 shadow-2xl">
        
        <div class="text-center mb-8">
            <h1 class="text-3xl font-black tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 via-purple-400 to-cyan-400 mb-2">
                🎓 InternMatch
            </h1>
            <p class="text-slate-400 text-sm font-medium">Create your credentials to join the network</p>
        </div>

        @if ($errors->any())
            <div class="mb-5 p-4 bg-rose-500/10 border border-rose-500/20 text-rose-400 text-xs rounded-xl font-medium space-y-1">
                @foreach ($errors->all() as $error)
                    <p>⚠️ {{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="/register" method="POST" class="space-y-5">
            @csrf

            <div>
                <label for="name" class="block text-slate-400 text-[11px] font-bold uppercase tracking-wider mb-2">Full Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required placeholder="e.g. Samir Kharel"
                    class="w-full bg-slate-950/60 border border-slate-800/80 rounded-xl px-4 py-3 text-sm text-white placeholder-slate-600 focus:outline-none focus:border-indigo-500 transition duration-200">
            </div>

            <div>
                <label for="email" class="block text-slate-400 text-[11px] font-bold uppercase tracking-wider mb-2">Email Address</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="yourname@domain.com"
                    class="w-full bg-slate-950/60 border border-slate-800/80 rounded-xl px-4 py-3 text-sm text-white placeholder-slate-600 focus:outline-none focus:border-indigo-500 transition duration-200">
            </div>

            <div>
                <label for="password" class="block text-slate-400 text-[11px] font-bold uppercase tracking-wider mb-2">Choose Password</label>
                <input type="password" id="password" name="password" required placeholder="••••••••"
                    class="w-full bg-slate-950/60 border border-slate-800/80 rounded-xl px-4 py-3 text-sm text-white placeholder-slate-600 focus:outline-none focus:border-indigo-500 transition duration-200">
            </div>

            <div>
                <label for="password_confirmation" class="block text-slate-400 text-[11px] font-bold uppercase tracking-wider mb-2">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required placeholder="••••••••"
                    class="w-full bg-slate-950/60 border border-slate-800/80 rounded-xl px-4 py-3 text-sm text-white placeholder-slate-600 focus:outline-none focus:border-indigo-500 transition duration-200">
            </div>

            <button type="submit" class="w-full mt-2 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500 text-white font-bold py-3.5 rounded-xl shadow-lg shadow-indigo-600/15 transition duration-200 text-sm">
                Register Account
            </button>
        </form>

        <div class="mt-6 text-center border-t border-slate-800/60 pt-5">
            <p class="text-xs text-slate-500">
                Already have an account? 
                <a href="/login" class="text-indigo-400 hover:underline font-semibold ml-1">Sign In instead →</a>
            </p>
        </div>

    </div>

</body>
</html>