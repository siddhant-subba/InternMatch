<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InternMatch — Find Your Tech Horizon</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        /* 3D Isometric Logo Text Depth Styling */
        .text-3d-premium {
            text-shadow: 
                0 1px 0 #4f46e5,
                0 2px 0 #4338ca,
                0 3px 0 #3730a3,
                0 4px 0 #312e81,
                0 6px 8px rgba(0, 0, 0, 0.45),
                0 10px 10px rgba(0, 0, 0, 0.25);
        }
        .group:hover .text-3d-premium {
            text-shadow: 
                0 1px 0 #6366f1,
                0 2px 0 #4f46e5,
                0 3px 0 #4338ca,
                0 4px 0 #3730a3,
                0 5px 0 #312e81,
                0 8px 12px rgba(99, 102, 241, 0.3),
                0 14px 16px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 font-sans antialiased selection:bg-indigo-500 selection:text-white min-h-screen flex flex-col justify-between">

    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-7xl h-[350px] bg-gradient-to-r from-indigo-500/10 via-purple-500/5 to-cyan-500/10 blur-[120px] pointer-events-none"></div>

    <header class="border-b border-slate-900 bg-slate-950/70 backdrop-blur sticky top-0 z-50 px-5 py-4">
        <div class="container mx-auto flex justify-between items-center max-w-6xl">
            
            <!-- High-Quality 3D Logo Component -->
            <h1>
                <a href="/" class="flex items-center gap-3 group perspective-1000 py-2">
                    <div class="relative drop-shadow-[0_4px_10px_rgba(99,102,241,0.25)] [transform:rotateX(20deg)_rotateY(-20deg)] group-hover:[transform:rotateX(15deg)_rotateY(-15deg)_translateY(-2px)] transition-all duration-300 ease-out">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-indigo-400">
                            <path class="stroke-[url(#logo-gradient-3d)]" d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z" />
                            <path class="stroke-[url(#logo-gradient-3d)]" d="M6 12.5v5a6 6 0 0 0 12 0v-5" />
                            <path class="stroke-[url(#logo-gradient-3d)]" d="M21.5 11v6" />
                            <defs>
                                <linearGradient id="logo-gradient-3d" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="#a5b4fc" />
                                    <stop offset="50%" stop-color="#c084fc" />
                                    <stop offset="100%" stop-color="#22d3ee" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <div class="absolute inset-0 translate-y-[2px] translate-x-[1px] opacity-40 blur-[1px] pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#312e81" stroke-width="2.5" class="w-8 h-8">
                                <path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z" />
                                <path d="M6 12.5v5a6 6 0 0 0 12 0v-5" />
                            </svg>
                        </div>
                    </div>
                    <span class="text-2xl font-extrabold tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-slate-50 via-slate-100 to-indigo-100 text-3d-premium group-hover:-translate-y-0.5 transition-transform duration-300 ease-out">
                        Intern<span class="font-black bg-clip-text text-transparent bg-gradient-to-r from-indigo-300 via-purple-300 to-cyan-300">Match</span>
                    </span>
                </a>
            </h1>
            
            <!-- Converted Plain Menu Items into 3D Gradient Buttons matching image_0d1987.png -->
            <nav class="hidden md:flex items-center gap-4 text-sm font-medium">
                <!-- 3D About Button -->
                <div class="relative group/btn inline-block">
                    <div class="absolute inset-0 bg-indigo-900 rounded-xl translate-y-1 group-hover/btn:translate-y-1.5 transition-transform"></div>
                    <a href="/about" class="relative block bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-bold text-xs px-4 py-2.5 rounded-xl -translate-y-0.5 group-hover/btn:-translate-y-1 active:translate-y-0 transition-transform shadow-lg">
                        About
                    </a>
                </div>

                <!-- 3D Our Team Button -->
                <div class="relative group/btn inline-block">
                    <div class="absolute inset-0 bg-indigo-900 rounded-xl translate-y-1 group-hover/btn:translate-y-1.5 transition-transform"></div>
                    <a href="/team" class="relative block bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-bold text-xs px-4 py-2.5 rounded-xl -translate-y-0.5 group-hover/btn:-translate-y-1 active:translate-y-0 transition-transform shadow-lg">
                        Our Team
                    </a>
                </div>

                <!-- 3D Help & FAQ Button -->
                <div class="relative group/btn inline-block">
                    <div class="absolute inset-0 bg-indigo-900 rounded-xl translate-y-1 group-hover/btn:translate-y-1.5 transition-transform"></div>
                    <a href="/help" class="relative block bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-bold text-xs px-4 py-2.5 rounded-xl -translate-y-0.5 group-hover/btn:-translate-y-1 active:translate-y-0 transition-transform shadow-lg">
                        Help & FAQ
                    </a>
                </div>
            </nav>
            
            <div class="flex items-center gap-4">
                @auth
                    <span class="text-xs font-semibold text-slate-300 hidden sm:inline bg-slate-900 border border-slate-800 px-3 py-2 rounded-xl shadow-inner mr-1">
                        <span class="text-indigo-400 mr-1">👤</span> {{ Auth::user()->name }} 
                        <span class="ml-1.5 px-1.5 py-0.5 text-[10px] uppercase font-bold tracking-wider rounded bg-slate-800 text-slate-400 border border-slate-700/60">
                            {{ Auth::user()->is_admin ? 'Admin' : 'User' }}
                        </span>
                    </span>

                    @can('manage-internships')
                        <!-- 3D Header Route Creator Button -->
                        <div class="relative group/btn inline-block">
                            <div class="absolute inset-0 bg-indigo-900 rounded-xl translate-y-1 group-hover/btn:translate-y-1.5 transition-transform"></div>
                            <a href="/internships/create" class="relative block bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-bold text-sm px-4 py-2.5 rounded-xl -translate-y-0.5 group-hover/btn:-translate-y-1 active:translate-y-0 transition-transform shadow-lg">
                                + New Route
                            </a>
                        </div>
                    @endcan

                    <!-- 3D Header Logout Button -->
                    <div class="relative group/btn inline-block">
                        <div class="absolute inset-0 bg-rose-950 rounded-xl translate-y-1 transition-transform"></div>
                        <form action="/logout" method="POST" class="inline relative block">
                            @csrf
                            <button type="submit" class="bg-gradient-to-r from-rose-600 to-pink-600 text-white font-bold text-sm px-4 py-2.5 rounded-xl -translate-y-0.5 active:translate-y-0 transition-transform shadow-lg cursor-pointer">
                                Logout
                            </button>
                        </form>
                    </div>
                @else
                    <!-- 3D Header Login Button -->
                    <div class="relative group/btn inline-block">
                        <div class="absolute inset-0 bg-indigo-900 rounded-xl translate-y-1 group-hover/btn:translate-y-1.5 transition-transform"></div>
                        <a href="/login" class="relative block bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-bold text-sm px-5 py-2.5 rounded-xl -translate-y-0.5 group-hover/btn:-translate-y-1 active:translate-y-0 transition-transform shadow-lg shadow-indigo-600/15">
                            Login
                        </a>
                    </div>

                    <!-- 3D Header Sign Up Button -->
                    <div class="relative group/btn inline-block">
                        <div class="absolute inset-0 bg-indigo-900 rounded-xl translate-y-1 group-hover/btn:translate-y-1.5 transition-transform"></div>
                        <a href="/register" class="relative block bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-bold text-sm px-5 py-2.5 rounded-xl -translate-y-0.5 group-hover/btn:-translate-y-1 active:translate-y-0 transition-transform shadow-lg shadow-indigo-600/15">
                            Sign Up
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </header>

    <main class="container mx-auto my-12 px-4 max-w-6xl relative z-10 flex-grow">
        
        @if(session('success'))
            <div class="mb-10 p-4 bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 rounded-2xl text-sm font-medium flex items-center gap-3 shadow-xl backdrop-blur-sm animate-fade-in">
                <span class="flex h-2 w-2 relative">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                </span>
                <span>✨ {{ session('success') }}</span>
            </div>
        @endif

        <div class="mb-12 flex flex-col md:flex-row md:justify-between md:items-end gap-6 border-b border-slate-900 pb-8">
            <div class="text-center md:text-left max-w-xl">
                <h2 class="text-4xl font-black tracking-tight text-white sm:text-5xl leading-none">
                    Available <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-400">Positions</span>
                </h2>
                <p class="mt-3 text-slate-400 text-base leading-relaxed">Explore premium matching internships hosted by growing technology companies and engineering clusters across Nepal.</p>
            </div>

            @auth
                @if(Auth::user()->is_admin)
                    <!-- 3D Section Add Button -->
                    <div class="relative group/btn shrink-0 flex justify-center md:justify-end">
                        <div class="absolute inset-0 bg-indigo-900 rounded-xl translate-y-1 group-hover/btn:translate-y-1.5 transition-transform"></div>
                        <a href="/internships/create" class="relative inline-flex items-center gap-2 bg-gradient-to-r from-indigo-600 to-purple-600 shadow-xl text-white px-6 py-3.5 rounded-xl font-black tracking-wide -translate-y-0.5 group-hover/btn:-translate-y-1 active:translate-y-0 transition-transform text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            Add More Offers
                        </a>
                    </div>
                @endif
            @endauth
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($postings as $job)
                @php
                    $imageUrl = "https://images.unsplash.com/photo-1607799279861-4dd421887fb3?auto=format&fit=crop&w=400&q=80";
                    $lowerTitle = strtolower($job->title);

                    if (str_contains($lowerTitle, 'design') || str_contains($lowerTitle, 'ui') || str_contains($lowerTitle, 'ux')) {
                        $imageUrl = "https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?auto=format&fit=crop&w=400&q=80";
                    } elseif (str_contains($lowerTitle, 'react')) {
                        $imageUrl = "https://images.unsplash.com/photo-1633356122544-f134324a6cee?auto=format&fit=crop&w=400&q=80";
                    } elseif (str_contains($lowerTitle, 'frontend') || str_contains($lowerTitle, 'web') || str_contains($lowerTitle, 'developer') || str_contains($lowerTitle, 'engineer')) {
                        $imageUrl = "https://images.unsplash.com/photo-1542831371-29b0f74f9713?auto=format&fit=crop&w=400&q=80";
                    }
                @endphp

                <div class="group/card bg-slate-900/40 border border-slate-900 rounded-3xl overflow-hidden flex flex-col justify-between hover:border-slate-800/80 hover:bg-slate-900/60 shadow-xl hover:shadow-2xl hover:shadow-indigo-500/[0.02] transition-all duration-300 transform hover:-translate-y-1">
                    
                    <div class="h-32 w-full bg-slate-900 relative overflow-hidden border-b border-slate-900/60">
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-slate-950/40 to-slate-950/90 z-10"></div>
                        <img src="{{ $imageUrl }}" 
                             alt="{{ $job->title }} Header Background" 
                             class="w-full h-full object-cover opacity-25 group-hover/card:scale-105 transition-transform duration-700">
                        
                        <span class="absolute top-4 right-4 z-20 bg-indigo-500/10 text-indigo-400 border border-indigo-500/20 px-2.5 py-1 rounded-lg text-[10px] font-bold uppercase tracking-wider backdrop-blur-md">
                            Tech Offer
                        </span>
                    </div>

                    <div class="p-6 flex-grow relative -mt-10 z-20">
                        <div class="flex items-end justify-between mb-4">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($job->company) }}&background=6366f1&color=fff&bold=true&rounded=true&size=128" 
                                 alt="{{ $job->company }} Logo" 
                                 class="w-14 h-14 rounded-2xl border-4 border-slate-950 bg-slate-900 shadow-md">
                        </div>

                        <div>
                            <h3 class="text-xl font-bold text-white tracking-tight leading-snug group-hover/card:text-indigo-300 transition duration-200">
                                {{ $job->title }}
                            </h3>
                            <p class="text-slate-300 font-medium text-sm mt-1 flex items-center gap-1.5">
                                <span class="text-xs text-slate-500">by</span> {{ $job->company }}
                            </p>
                            
                            <div class="text-slate-400 text-xs mt-3 flex items-center gap-1.5 bg-slate-950/40 w-max px-2.5 py-1 rounded-lg border border-slate-800/50">
                                <span>📍</span> {{ $job->location }}
                            </div>

                            <p class="text-slate-400 mt-4 text-sm leading-relaxed line-clamp-3 group-hover/card:text-slate-300 transition-colors duration-200">
                                {{ $job->description }}
                            </p>
                        </div>
                    </div>
                    
                    <div class="p-6 pt-0">
                        <div class="pt-4 border-t border-slate-900 flex justify-between items-center gap-3">
                            @auth
                                @if(Auth::user()->is_admin)
                                    <!-- 3D Card Edit Option -->
                                    <div class="relative group/btn flex-1">
                                        <div class="absolute inset-0 bg-slate-950 rounded-xl translate-y-1 transition-transform"></div>
                                        <a href="/internships/{{ $job->id }}/edit" class="relative block text-center bg-gradient-to-r from-slate-800 to-slate-700 text-white text-sm font-bold py-3.5 rounded-xl -translate-y-0.5 active:translate-y-0 transition-transform shadow-md border border-slate-600/20">
                                            Edit
                                        </a>
                                    </div>
                                    
                                    <!-- 3D Card Delete Option -->
                                    <div class="relative group/btn flex-1">
                                        <div class="absolute inset-0 bg-rose-950 rounded-xl translate-y-1 transition-transform"></div>
                                        <form action="/internships/{{ $job->id }}" method="POST" onsubmit="return confirm('Are you sure you want to remove this opening permanently?');" class="w-full">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="relative w-full text-center bg-gradient-to-r from-rose-600 to-pink-600 text-white text-sm font-bold py-3.5 rounded-xl -translate-y-0.5 active:translate-y-0 transition-transform shadow-md cursor-pointer">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                @else
                                    <!-- 3D Card Primary Apply Button -->
                                    <div class="relative group/btn w-full">
                                        <div class="absolute inset-0 bg-indigo-900 rounded-xl translate-y-1 group-hover/btn:translate-y-1.5 transition-transform"></div>
                                        <a href="/internships/{{ $job->id }}/apply" class="relative block text-center w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-black tracking-wide py-3.5 rounded-xl -translate-y-0.5 group-hover/btn:-translate-y-1 active:translate-y-0 transition-transform shadow-lg shadow-indigo-500/10">
                                            Apply Now
                                        </a>
                                    </div>
                                @endif
                            @else
                                <!-- 3D Card Secondary Call to Action -->
                                <div class="relative group/btn w-full">
                                    <div class="absolute inset-0 bg-indigo-900 rounded-xl translate-y-1 group-hover/btn:translate-y-1.5 transition-transform"></div>
                                    <a href="/login" class="relative block text-center w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-black tracking-wide py-3.5 rounded-xl -translate-y-0.5 group-hover/btn:-translate-y-1 active:translate-y-0 transition-transform shadow-lg shadow-indigo-500/10">
                                        Login to Apply
                                    </a>
                                </div>
                            @endauth
                        </div>
                    </div>

                </div>
            @empty
                <div class="col-span-full border-2 border-dashed border-slate-800 rounded-3xl py-20 text-center bg-slate-900/10 backdrop-blur-sm">
                    <div class="text-4xl mb-3">📁</div>
                    <p class="text-slate-400 text-lg font-medium">No active vacancy postings found right now.</p>
                    @auth
                        @if(Auth::user()->is_admin)
                            <a href="/internships/create" class="mt-4 inline-flex items-center gap-1.5 text-indigo-400 hover:text-indigo-300 text-sm font-bold tracking-wide transition underline decoration-2 underline-offset-4">
                                Be the first to post one →
                            </a>
                        @endif
                    @else
                        <p class="text-slate-500 text-xs mt-2 max-w-xs mx-auto">Please authorize or log in to view and register dashboard application documents.</p>
                    @endauth
                </div>
            @endforelse
        </div>
    </main>

    <footer class="border-t border-slate-950 bg-slate-950 py-6 text-center text-xs text-slate-600 tracking-wide relative z-10 mt-20">
        <div class="container mx-auto px-4">
            &copy; {{ date('Y') }} InternMatch Nepal. Built as a specialized portal layer for career acceleration.
        </div>
    </footer>

</body>
</html>