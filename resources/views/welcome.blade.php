<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InternMatch — Find Your Tech Horizon</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .custom-scrollbar::-webkit-scrollbar { width: 4px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: rgba(5, 7, 20, 0.6); }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: rgba(99, 102, 241, 0.4); border-radius: 9999px; }
    </style>
</head>
<body class="bg-[#050714] text-slate-100 font-sans antialiased min-h-screen flex flex-col justify-between selection:bg-indigo-500 selection:text-white">

    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-7xl h-[450px] bg-[radial-gradient(circle_at_center,rgba(99,102,241,0.12)_0%,rgba(168,85,247,0.06)_40%,transparent_70%)] pointer-events-none"></div>

    <header class="bg-[#050714]/40 backdrop-blur-sm z-50 px-6 py-6">
        <div class="container mx-auto flex justify-between items-center max-w-6xl">
            
            <h1>
                <a href="/" class="flex items-center gap-2.5 group selection:bg-transparent">
                    <div class="relative w-8 h-8">
                        <svg class="w-full h-full filter drop-shadow-[0_2px_4px_rgba(99,102,241,0.4)]" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 3L1 9L12 15L21 10.09V17.5H23V9L12 3Z" fill="url(#iconGrad)" />
                            <path d="M5 13.18V17.5C5 19.5 8.13 21 12 21C15.87 21 19 19.5 19 17.5V13.18L12 17L5 13.18Z" fill="url(#iconGrad)" />
                            <defs>
                                <linearGradient id="iconGrad" x1="1" y1="3" x2="23" y2="21">
                                    <stop offset="0%" stop-color="#4f46e5"/>
                                    <stop offset="100%" stop-color="#a855f7"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <span class="relative font-black text-xl tracking-tight select-none text-transparent bg-clip-text bg-gradient-to-r from-[#818cf8] to-[#a78bfa]">
                        InternMatch
                    </span>
                </a>
            </h1>

            <nav class="hidden md:flex items-center gap-4 text-xs font-bold tracking-wide">
                <a href="/about" class="bg-gradient-to-b from-[#4f46e5] to-[#7c3aed] text-white px-5 py-2.5 rounded-xl border-b-[4px] border-[#312e81] active:border-b-0 active:translate-y-[4px] transition-all duration-300">About</a>
                <a href="/team" class="bg-gradient-to-b from-[#4f46e5] to-[#7c3aed] text-white px-5 py-2.5 rounded-xl border-b-[4px] border-[#312e81] active:border-b-0 active:translate-y-[4px] transition-all duration-300">Our Team</a>
                <a href="/help" class="bg-gradient-to-b from-[#4f46e5] to-[#7c3aed] text-white px-5 py-2.5 rounded-xl border-b-[4px] border-[#312e81] active:border-b-0 active:translate-y-[4px] transition-all duration-300">Help & FAQ</a>
            </nav>

            <div class="flex items-center gap-3">
                @auth
                    <div class="bg-[#0b0f19] border border-slate-900 px-3.5 py-2 rounded-xl text-xs font-bold text-slate-300 flex items-center gap-1.5 shadow-inner">
                        <span>👤</span> {{ Auth::user()->name }}
                        <span class="px-1.5 py-0.5 text-[9px] font-black rounded bg-indigo-500/10 text-indigo-400 border border-indigo-500/20">{{ Auth::user()->is_admin ? 'ADMIN' : 'USER' }}</span>
                    </div>
                    <form action="/logout" method="POST" class="inline">@csrf
                        <button type="submit" class="bg-gradient-to-b from-pink-600 to-rose-600 text-white font-black text-xs px-4 py-2.5 rounded-xl border-b-[4px] border-rose-900 active:border-b-0 active:translate-y-[4px] transition-all duration-100 cursor-pointer">Logout</button>
                    </form>
                @else
                    <a href="/login" class="bg-gradient-to-b from-[#4f46e5] to-[#7c3aed] text-white font-bold text-xs px-5 py-2.5 rounded-xl border-b-[4px] border-[#312e81] active:border-b-0 active:translate-y-[4px] transition-all duration-300">Login</a>
                    <a href="/register" class="bg-gradient-to-b from-[#4f46e5] to-[#7c3aed] text-white font-bold text-xs px-5 py-2.5 rounded-xl border-b-[4px] border-[#312e81] active:border-b-0 active:translate-y-[4px] transition-all duration-300">Sign Up</a>
                @endauth
            </div>
        </div>
    </header>

    <main class="container mx-auto my-6 px-4 max-w-6xl flex-grow relative z-10">
        
        <div class="mb-10 pb-4">
            <h2 class="text-4xl font-black tracking-tight text-white">Available <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#a78bfa] to-[#c084fc]">Positions</span></h2>
            <p class="mt-3 text-slate-400 text-xs max-w-xl leading-relaxed">Explore premium matching internships hosted by growing technology companies and engineering clusters across Nepal.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($postings as $job)
                @php
                    $isDesign = Str::contains(strtolower($job->title), ['design', 'ui', 'ux']);
                    $bgPhoto = $isDesign 
                        ? 'https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?auto=format&fit=crop&w=600&q=80'
                        : 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=600&q=80';
                @endphp
                <div class="bg-[#0b101d] border border-slate-900/80 rounded-2xl overflow-hidden flex flex-col justify-between shadow-2xl relative group transition duration-300">
                    
                    <div class="h-32 w-full relative p-4 flex justify-end items-start bg-slate-950 overflow-hidden border-b border-slate-900/40">
                        <img src="{{ $bgPhoto }}" alt="Role Backdrop" class="absolute inset-0 w-full h-full object-cover object-center opacity-25 group-hover:scale-105 transition-transform duration-500 pointer-events-none select-none">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0b101d] via-[#0b101d]/40 to-transparent pointer-events-none"></div>

                        <span class="bg-[#1e1b4b]/90 text-[#818cf8] border border-indigo-500/30 px-3 py-1 rounded-md text-[9px] font-black uppercase tracking-wider shadow-sm z-20 relative">
                            Tech Offer
                        </span>
                    </div>

                    <div class="p-6 flex-grow relative pt-0 -mt-7 z-20">
                        <div class="flex items-end justify-between mb-3">
                            <div class="w-11 h-11 rounded-full bg-gradient-to-br from-[#4f46e5] to-[#a855f7] flex items-center justify-center text-white font-extrabold uppercase text-xs tracking-wide shadow-lg border-[3px] border-[#0b101d]">
                                {{ substr($job->company, 0, 2) }}
                            </div>
                        </div>

                        <h3 class="text-lg font-bold text-white tracking-tight leading-snug mt-2">
                            {{ $job->title }}
                        </h3>
                        <p class="text-slate-400 text-xs mt-1">
                            by <span class="text-slate-300 font-semibold">{{ $job->company }}</span>
                        </p>
                        
                        <div class="text-slate-400 text-[11px] mt-3.5 inline-flex items-center gap-1.5 bg-slate-900/60 border border-slate-800/40 px-2.5 py-1 rounded-lg">
                            <span class="text-rose-500">📍</span> {{ $job->location }}
                        </div>

                        <p class="text-slate-400/90 mt-4 text-xs leading-relaxed line-clamp-3 font-normal">
                            {{ $job->description }}
                        </p>

                        @auth @if(Auth::user()->is_admin)
                            <div class="mt-4 pt-3 border-t border-slate-900/40">
                                <div class="flex items-center justify-between gap-2 mb-2">
                                    <h4 class="text-[11px] font-black uppercase tracking-wider text-purple-400 flex items-center gap-1">
                                        <span class="text-xs">👥</span> CANDIDATES ({{ $job->applications->count() }})
                                    </h4>
                                    
                                    <button type="button" onclick="toggleCandidates('panel-{{ $job->id }}')" class="bg-slate-900/80 hover:bg-slate-800 text-slate-300 border border-slate-800/80 font-semibold px-3 py-1 rounded-lg text-[11px] transition shadow-sm cursor-pointer">
                                        Show Details
                                    </button>
                                </div>

                                <div id="panel-{{ $job->id }}" class="hidden mt-2 space-y-2">
                                    @forelse($job->applications as $app)
                                        <div class="bg-[#050811] border border-slate-900 rounded-xl p-3 shadow-inner">
                                            <div class="flex justify-between items-start gap-3">
                                                <div class="min-w-0 flex-1">
                                                    
                                                    <p class="font-bold text-sm text-white truncate">
                                                        {{ $app->applicant_name ?? 'Candidate' }}
                                                    </p>
                                                    <p class="text-[10px] text-slate-400 truncate mt-0.5">
                                                        {{ $app->applicant_email ?? 'no email registered' }}
                                                    </p>
                                                    
                                                </div>
                                                @if($app->resume_link || $app->resume_path)
                                                    <a href="{{ $app->resume_link ?? asset('storage/' . $app->resume_path) }}" target="_blank" class="bg-indigo-500/10 hover:bg-indigo-500/20 text-indigo-400 border border-indigo-500/30 font-bold px-2 py-1 rounded text-[9px] uppercase tracking-wider transition shrink-0 shadow-sm">View CV</a>
                                                @endif
                                            </div>
                                        </div>
                                    @empty
                                        <div class="bg-[#050811] border border-slate-900 rounded-xl p-3 text-center">
                                            <p class="text-[11px] text-slate-600 italic">No active candidates registered.</p>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        @endif @endauth
                    </div>
                    
                    <div class="p-6 pt-0 z-20">
                        <div class="flex justify-between items-center gap-2">
                            @auth @if(Auth::user()->is_admin)
                                <a href="/internships/{{ $job->id }}/edit" class="flex-1 text-center bg-slate-900 text-slate-400 text-xs font-semibold py-2.5 rounded-xl border border-slate-800 hover:text-white transition">Edit</a>
                                <form action="/internships/{{ $job->id }}" method="POST" onsubmit="return confirm('Drop vacancy opening?');" class="flex-1">@csrf @method('DELETE')
                                    <button type="submit" class="w-full bg-gradient-to-b from-red-600 to-red-700 text-white text-xs font-semibold py-2.5 rounded-xl border-b-[4px] border-red-900 active:border-b-0 active:translate-y-[4px] transition-all duration-100 cursor-pointer">Delete</button>
                                </form>
                            @else
                                <a href="/internships/{{ $job->id }}/apply" class="w-full text-center bg-gradient-to-b from-[#4f46e5] to-[#a855f7] text-white font-extrabold text-xs py-3.5 rounded-xl border-b-[4px] border-[#2e2a85] active:border-b-0 active:translate-y-[4px] transition-all duration-100 shadow-lg tracking-wide">Apply Now</a>
                            @endif @else
                                <a href="/login" class="w-full text-center bg-gradient-to-b from-[#4f46e5] to-[#a855f7] text-white font-extrabold text-xs py-3.5 rounded-xl border-b-[4px] border-[#2e2a85] active:border-b-0 active:translate-y-[4px] transition-all duration-100 shadow-lg tracking-wide">Login to Apply</a>
                            @endauth
                        </div>
                    </div>

                </div>
            @empty
                <div class="col-span-full border border-dashed border-slate-900 rounded-2xl py-12 text-center">
                    <p class="text-slate-500 text-xs">No active vacancy postings found right now.</p>
                </div>
            @endforelse
        </div>
    </main>

    <footer class="py-6 text-center text-[11px] text-slate-600 font-medium">&copy; {{ date('Y') }} InternMatch Nepal. All rights reserved.</footer>

    <script>
        function toggleCandidates(panelId) {
            const panel = document.getElementById(panelId);
            if (panel.classList.contains('hidden')) {
                panel.classList.remove('hidden');
            } else {
                panel.classList.add('hidden');
            }
        }
    </script>
</body>
</html>