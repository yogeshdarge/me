# Create New Article Page: Write on File Search Tool

## Goal
- Add a new article page and list it on `articles.html`
- Use a URL that matches the article name

## Location & Naming
- New file: `write-on-file-search-tool.html` at the project root
- Reuse the structure used by existing article pages

## Metadata & Assets
- Title: "Write on File Search Tool"
- Description: concise, SEO-friendly summary
- OG/Twitter: set title, description, and image
- Image: `img/write-on-file-search-tool.png` (or adjust to an available image)

## Page Structure
- Header/nav identical to other pages (see `articles.html:86–176`)
- Main content within `#swup.transition-fade` and `<article>`
- Footer identical to `articles.html:542–550`
- Swup initialization identical to `articles.html:563–587`

## Article Content (ready to use)
```
<!DOCTYPE html>
<html lang="en" class="h-full dark is-animating is-leaving">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Write on File Search Tool | Yogesh Darge</title>
<meta name="title" content="Write on File Search Tool | Yogesh Darge" />
<meta name="description" content="A practical guide to designing and building a fast, cross-platform file search tool with efficient indexing, robust querying, and a polished UX." />
<meta property="og:title" content="Write on File Search Tool | Yogesh Darge" />
<meta property="og:url" content="https://yogeshdarge.com" />
<meta property="og:type" content="website" />
<meta property="og:description" content="A practical guide to designing and building a fast, cross-platform file search tool with efficient indexing, robust querying, and a polished UX." />
<meta property="og:image" content="https://yogeshdarge.com/img/write-on-file-search-tool.png" />
<meta property="og:locale" content="en_IN" />
<meta property="og:site_name" content="Write on File Search Tool | Yogesh Darge" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Write on File Search Tool | Yogesh Darge" />
<meta name="twitter:description" content="A practical guide to designing and building a fast, cross-platform file search tool with efficient indexing, robust querying, and a polished UX." />
<meta name="twitter:image" content="https://yogeshdarge.com/img/write-on-file-search-tool.png" />
<link rel="icon" type="image/png" href="img/favicon.png">
<link href="css/index.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/base.css" />
<link rel="stylesheet" href="css/transitions.css" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="module" src="js/swup.js"></script>
</head>
<body class="antialiased bg-gray-50 dark:bg-black min-h-screen">
<div class="layout">
<header class="fixed top-0 w-full z-50 header">
<nav class="mx-auto px-4 sm:px-6 lg:px-8 max-w-2xl">
<ul class="flex items-center my-4 px-3 text-sm font-medium text-gray-800 rounded-xl shadow-lg shadow-gray-800/5 ring-1 backdrop-blur bg-white dark:bg-[#0a0a0a] dark:text-gray-200 dark:ring-white/20 ring-gray-900/5">
<li class="is-link" data-id="index"><div class="relative inline-flex"><a class="relative px-3 py-4 flex items-center justify-center transition hover:text-primary-500 dark:hover:text-primary-400" href="/" as="button"><svg aria-hidden="true" role="img" class="icon w-5 h-5 z-10" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M9.447 15.398a.75.75 0 1 0-.894 1.204A5.77 5.77 0 0 0 12 17.75a5.77 5.77 0 0 0 3.447-1.148a.75.75 0 1 0-.894-1.204A4.27 4.27 0 0 1 12 16.25a4.27 4.27 0 0 1-2.553-.852"></path><path fill="currentColor" fill-rule="evenodd" d="M12 1.25c-.708 0-1.351.203-2.05.542c-.674.328-1.454.812-2.427 1.416L5.456 4.491c-.92 .572-1.659 1.03-2.227 1.465c-.589 .45-1.041 .91-1.368 1.507c-.326 .595-.472 1.229-.543 1.978c-.068 .725-.068 1.613-.068 2.726v1.613c0 1.904 0 3.407 .153 4.582c.156 1.205 .486 2.178 1.23 2.947c.747 .773 1.697 1.119 2.875 1.282c1.14 .159 2.598 .159 4.434 .159h4.116c1.836 0 3.294 0 4.434-.159c1.177-.163 2.128-.509 2.876-1.282c.743 -.769 1.073 -1.742 1.23 -2.947c.152 -1.175 .152 -2.678 .152 -4.582v-1.613c0 -1.113 0 -2 -.068 -2.726c-.07 -.75 -.217 -1.383 -.543 -1.978c-.327 -.597 -.78 -1.056 -1.368 -1.507c-.568 -.436 -1.306 -.893 -2.227 -1.465l-2.067 -1.283c-.973 -.604 -1.753 -1.088 -2.428 -1.416c-.697 -.34 -1.34 -.542 -2.049 -.542M8.28 4.504c1.015-.63 1.73 -1.072 2.327 -1.363c.581 -.283 .993 -.391 1.393 -.391s .812 .108 1.393 .391c.598 .29 1.312 .733 2.327 1.363l2 1.241c .961 .597 1.636 1.016 2.14 1.402c .489 .375 .77 .684 .963 1.036c .193 .353 .306 .766 .365 1.398c .061 .648 .062 1.465 .062 2.623v1.521c0 1.97 -.002 3.376 -.14 4.443c -.136 1.048 -.393 1.656 -.82 2.099c -.425 .439 -1.003 .7 -2.004 .839c -1.026 .142 -2.379 .144 -4.286 .144h-4c -1.908 0 -3.26 -.002 -4.286 -.144c -1.001 -.14 -1.579 -.4 -2.003 -.84c -.428 -.442 -.685 -1.05 -.82 -2.098c -.14 -1.067 -.141 -2.472 -.141 -4.443v-1.521c0 -1.158 0 -1.975 .062 -2.623c .059 -.632 .172 -1.045 .365 -1.398c .193 -.352 .474 -.661 .964 -1.036c .503 -.386 1.178 -.805 2.139 -1.402z" clip-rule="evenodd"></path></svg><span class="sr-only">Home</span></a></div></li>
<li class="is-link" data-id="projects"><div class="relative inline-flex"><a class="relative px-3 py-4 flex items-center justify-center transition hover:text-primary-500 dark:hover:text-primary-400" href="/projects.html" as="button"><svg aria-hidden="true" role="img" class="icon w-5 h-5 z-10" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M6.86 1.25h.127c.351 0 .577 0 .798 .02a4.75 4.75 0 0 1 2.474 .98h6.299c .409 0 .687 0 .931 .032a3.75 3.75 0 0 1 3.248 3.427a3 3 0 0 1 .77 .503q .15 .133 .281 .28c .529 .588 .754 1.303 .86 2.144c .102 .812 .102 1.838 .102 3.111v2.31c0 1.837 0 3.293 -.153 4.432c -.158 1.172 -.49 2.121 -1.238 2.87c -.749 .748 -1.698 1.08 -2.87 1.238c -1.14 .153 -2.595 .153 -4.433 .153H9.944c -1.838 0 -3.294 0 -4.433 -.153c -1.172 -.158 -2.121 -.49 -2.87 -1.238c -.748 -.749 -1.08 -1.698 -1.238 -2.87c -.153 -1.14 -.153 -2.595 -.153 -4.433V6.86c0 -.797 0 -1.303 .082 -1.74A4.75 4.75 0 0 1 5.12 1.331c .438 -.082 .944 -.082 1.74 -.082m12.287 4.078a2.25 2.25 0 0 0 -1.853 -1.559c -.134 -.017 -.306 -.019 -.794 -.019h-4.689c .643 .64 .935 .906 1.266 1.09q .328 .182 .689 .286c .413 .117 .866 .124 2.062 .124h .425c 1.162 0 2.119 0 2.894 .078"></path></svg><span class="sr-only">Projects</span></a></div></li>
<li class="is-link" data-id="articles"><div class="relative inline-flex"><a class="relative px-3 py-4 flex items-center justify-center transition hover:text-primary-500 dark:hover:text-primary-400" href="/articles.html" as="button"><svg aria-hidden="true" role="img" class="icon w-5 h-5 z-10" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M10.944 1.25h2.112c1.838 0 3.294 0 4.433 .153c1.172 .158 2.121 .49 2.87 1.238a.75 .75 0 0 1 -1.06 1.06c -.424 -.422 -1.004 -.676 -2.01 -.811c -1.027 -.138 -2.382 -.14 -4.289 -.14h-2c -1.907 0 -3.261 .002 -4.29 .14c -1.005 .135 -1.585 .389 -2.008 .812S4.025 4.705 3.89 5.71c -.138 1.029 -.14 2.383 -.14 4.29v4c0 1.907 .002 3.262 .14 4.29c .135 1.005 .389 1.585 .812 2.008s 1.003 .677 2.009 .812c 1.028 .138 2.382 .14 4.289 .14h2c 1.907 0 3.262 -.002 4.29 -.14c 1.005 -.135 1.585 -.389 2.008 -.812c .696 -.696 .907 -1.777 .943 -4.309a.75 .75 0 0 1 1.5 .022c -.035 2.427 -.192 4.158 -1.382 5.348c -.749 .748 -1.698 1.08 -2.87 1.238c -1.14 .153 -2.595 .153 -4.433 .153h-2.112c -1.838 0 -3.294 0 -4.433 -.153c -1.172 -.158 -2.121 -.49 -2.87 -1.238c -.748 -.749 -1.08 -1.698 -1.238 -2.87c -.153 -1.14 -.153 -2.595 -.153 -4.433V9.944c0 -1.838 0 -3.294 .153 -4.433c .158 -1.172 .49 -2.121 1.238 -2.87c .749 -.748 1.698 -1.08 2.87 -1.238c 1.14 -.153 2.595 -.153 4.433 -.153m7.17 5.796a2.716 2.716 0 1 1 3.84 3.84L17.2 15.643a7 7 0 0 1 -.63 .587q -.346 .27 -.744 .46c -.224 .107 -.46 .185 -.806 .3l-2.084 .695a1.28 1.28 0 0 1 -1.62 -1.62l .681 -2.04l .014 -.043c .116 -.347 .194 -.582 .301 -.806a4 4 0 0 1 .46 -.744c .153 -.196 .328 -.371 .587 -.63l .031 -.031zM7.25 9A.75 .75 0 0 1 8 8.25h6.5a.75 .75 0 0 1 0 1.5H8A.75 .75 0 0 1 7.25 9m0 4a.75 .75 0 0 1 .75 -.75h2.5a.75 .75 0 0 1 0 1.5H8a.75 .75 0 0 1 -.75 -.75m0 4a.75 .75 0 0 1 .75 -.75h1.5a.75 .75 0 0 1 0 1.5H8a.75 .75 0 0 1 -.75 -.75" clip-rule="evenodd"></path></svg><span class="sr-only">Articles</span></a></div></li>
<li class="is-link" data-id="about"><div class="relative inline-flex"><a class="relative px-3 py-4 flex items-center justify-center transition hover:text-primary-500 dark:hover:text-primary-400" href="/about.html" as="button"><svg aria-hidden="true" role="img" class="icon w-5 h-5 z-10" width="1em" height="1em" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.982 18.725A7.49 7.49 0 0 0 12 15.75a7.49 7.49 0 0 0 -5.982 2.975m11.964 0a9 9 0 1 0 -11.963 0m11.962 0A8.97 8.97 0 0 1 12 21a8.97 8.97 0 0 1 -5.982 -2.275M15 9.75a3 3 0 1 1 -6 0a3 3 0 0 1 6 0"></path></svg><span class="sr-only">About</span></a></div></li>
<li class="is-link" data-id="whats-in-my-bag"><div class="relative inline-flex"><a class="relative px-3 py-4 flex items-center justify-center transition hover:text-primary-500 dark:hover:text-primary-400" href="/whats-in-my-bag.html" as="button"><svg aria-hidden="true" role="img" class="icon w-5 h-5 z-10" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M10 12.25a.75 .75 0 1 0 0 1.5h4a.75 .75 0 0 0 0 -1.5z"></path><path fill="currentColor" fill-rule="evenodd" d="M7.32 4.275A3.75 3.75 0 0 1 11 1.25h2a3.75 3.75 0 0 1 3.68 3.025a6.75 6.75 0 0 1 5.07 6.445v5.655a5.27 5.27 0 0 1 -4.126 5.143a25.9 25.9 0 0 1 -11.248 0a5.27 5.27 0 0 1 -4.126 -5.143V10.72a6.75 6.75 0 0 1 5.07 -6.445m1.695 -.335A2.25 2.25 0 0 1 11 2.75h2c .86 0 1.607 .482 1.986 1.19a19.8 19.8 0 0 0 -5.971 0m11.235 6.971v2.596a21.4 21.4 0 0 1 -16.5 0V10.74a5.25 5.25 0 0 1 4.207 -5.074c .084 -.02 .124 -.028 .164 -.037a18.25 18.25 0 0 1 7.759 0l .163 .037l .167 .037a5.25 5.25 0 0 1 4.04 5.207"></path></svg><span class="sr-only">What's in my bag?</span></a></div></li>
<li class="is-link" data-id="bookmarks"><div class="relative inline-flex"><a class="relative px-3 py-4 flex items-center justify-center transition hover:text-primary-500 dark:hover:text-primary-400" href="/bookmarks.html" as="button"><svg aria-hidden="true" role="img" class="icon w-5 h-5 z-10" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 16.09v-4.992c0 -4.29 0 -6.433 -1.318 -7.766C18.364 2 16.242 2 12 2S5.636 2 4.318 3.332S3 6.81 3 11.098v4.993c0 3.096 0 4.645 .734 5.321c .35 .323 .792 .526 1.263 .58c .987 .113 2.14 -.907 4.445 -2.946c 1.02 -.901 1.529 -1.352 2.118 -1.47c .29 -.06 .59 -.06 .88 0c .59 .118 1.099 .569 2.118 1.47c 2.305 2.039 3.458 3.059 4.445 2.945c .47 -.053 .913 -.256 1.263 -.579c .734 -.676 .734 -2.224 .734 -5.321Z"></path><path stroke-linecap="round" d="M15 6H9"></path></g></svg><span class="sr-only">My favorites</span></a></div></li>
<li class="flex-1"></li>
<li><div class="relative inline-flex btn-changetheme"><button class="relative px-3 py-4 flex items-center justify-center transition hover:text-primary-500 dark:hover:text-primary-400"><svg aria-hidden="true" role="img" class="icon w-5 h-5" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M12 1.25a.75 .75 0 0 1 .75 .75v2a.75 .75 0 0 1 -1.5 0V2a.75 .75 0 0 1 .75 -.75M3.669 3.716a.75 .75 0 0 1 1.06 -.047L6.95 5.7a.75 .75 0 1 1 -1.012 1.107L3.716 4.776a.75 .75 0 0 1 -.047 -1.06m16.662 0a.75 .75 0 0 1 -.047 1.06l-2.222 2.031A.75 .75 0 0 1 17.05 5.7l2.222 -2.031a.75 .75 0 0 1 1.06 .047M12 7.75a4.25 4.25 0 1 0 0 8.5a4.25 4.25 0 0 0 0 -8.5M6.25 12a5.75 5.75 0 1 1 11.5 0a5.75 5.75 0 0 1 -11.5 0m-5 0a.75 .75 0 0 1 .75 -.75h2a.75 .75 0 0 1 0 1.5H2a.75 .75 0 0 1 -.75 -.75m18 0a.75 .75 0 0 1 .75 -.75h2a.75 .75 0 0 1 0 1.5h-2a.75 .75 0 0 1 -.75 -.75m-2.224 5.025a.75 .75 0 0 1 1.06 0l2.222 2.223a.75 .75 0 0 1 -1.06 1.06l-2.222 -2.222a.75 .75 0 0 1 0 -1.06m-10.051 0a.75 .75 0 0 1 0 1.061l-2.223 2.222a.75 .75 0 0 1 -1.06 -1.06l2.222 -2.223a.75 .75 0 0 1 1.06 0M12 19.25a.75 .75 0 0 1 .75 .75v2a.75 .75 0 0 1 -1.5 0v-2a.75 .75 0 0 1 .75 -.75" clip-rule="evenodd"></path></svg><span class="sr-only">Change theme</span></button></div></li>
</ul>
</nav>
</header>
<div class="h-32"></div>
<div class="mx-auto px-4 sm:px-6 lg:px-8 max-w-2xl">
<main id="swup" class="transition-fade min-h-screen">
<article class="prose dark:prose-invert max-w-none">
<img src="img/write-on-file-search-tool.png" alt="Write on File Search Tool" class="w-full aspect-square object-cover rounded-lg mb-8">
<h1 class="text-2xl font-bold tracking-tight text-zinc-800 dark:text-zinc-100">Write on File Search Tool</h1>
<time class="mt-2 block text-sm text-gray-600 dark:text-gray-500" datetime="2025-11-16">16 Nov 2025</time>
<h2 class="mt-10">Why build a file search tool?</h2>
<p>Developers live in large codebases. Fast, accurate search accelerates navigation, refactoring, and comprehension. This article outlines a pragmatic approach to building a cross-platform search tool with a clean UX.</p>
<h2 class="mt-8">Key goals</h2>
<ul><li>Fast: stream files efficiently; avoid unnecessary disk I/O.</li><li>Accurate: support glob filters, regex, and case options.</li><li>Portable: work on macOS and Linux; handle path separators.</li><li>User-friendly: CLI first, simple flags; optional UI wrapper.</li></ul>
<h2 class="mt-8">Architecture overview</h2>
<p>Use a pipeline: discovery → filtering → matching → results. Discovery walks directories with ignore rules. Filtering applies globs (e.g., <code>**/*.ts</code>). Matching runs regex or literal search with options. Results print paths, line numbers, and context.</p>
<h2 class="mt-8">Discovery & filtering</h2>
<p>Walk the filesystem using efficient iterators. Respect <code>.gitignore</code>, hidden files, and binary detection. Apply include/exclude globs early to minimize work.</p>
<h2 class="mt-8">Matching strategies</h2>
<p>Support both literal and regex modes. For speed, buffer by lines and short-circuit after N matches per file if requested. Offer case-insensitive and multiline modes.</p>
<h2 class="mt-8">CLI design</h2>
<p>Provide flags: <code>--glob</code>, <code>--regex</code>, <code>--ignore</code>, <code>--context</code>, <code>--count</code>, <code>--files-with-matches</code>. Output is structured, easily parsed by other tools.</p>
<h2 class="mt-8">Performance tips</h2>
<ul><li>Parallelize file reads by directory shard.</li><li>Use memory-mapped files for large reads if available.</li><li>Debounce UI triggers; stream incremental results.</li></ul>
<h2 class="mt-8">Cross-platform notes</h2>
<p>Normalize paths; avoid platform-specific APIs unless gated. Always sanitize user input; never execute patterns as shell.</p>
<h2 class="mt-8">Next steps</h2>
<p>Wrap the CLI in a lightweight UI, add saved searches, and integrate with your editor for jump-to-definition workflows.</p>
</article>
</main>
</div>
<footer class="max-w-2xl mx-auto text-gray-400 dark:text-gray-600 text-sm text-center pb-8"><nav class="flex justify-center gap-6 mb-6"><a class="hover:text-primary-400 dark:hover:text-primary-400 transition-colors duration-300" href="/projects.html">Projects</a><a class="hover:text-primary-400 dark:hover:text-primary-400 transition-colors duration-300" href="/about.html">About</a><a class="hover:text-primary-400 dark:hover:text-primary-400 transition-colors duration-300" href="/bookmarks.html">Bookmarks</a></nav><br><p><span class="text-primary-400 dark:text-primary-400">© 2025</span> Yogesh Darge. All rights reserved.</p></footer>
<div id="teleports"></div>
</div>
<script src="js/app.js"></script>
<script src="https://unpkg.com/swup@4"></script>
<script src="https://unpkg.com/@swup/progress-plugin@3"></script>
<script src="https://unpkg.com/@swup/scroll-plugin@3"></script>
<script type="text/JavaScript">
const swup = new Swup({ cache: false, globalInstance: true, linkSelector: 'a[href]', native: true, plugins: [ new SwupProgressPlugin({ className: 'swup-progress-bar', transition: 400, delay: 300, initialValue: 0.25, finishAnimation: false }), new SwupScrollPlugin({ animateScroll: { betweenPages: true, samePageWithHash: true, samePage: true } }) ] });
</script>
<elevenlabs-convai agent-id="agent_01jzsf0z1rfbgtk92xye0k844r"></elevenlabs-convai><script src="https://unpkg.com/@elevenlabs/convai-widget-embed" async type="text/javascript"></script>
</body>
</html>
```

## Articles List Card (link uses the renamed URL)
```
<li>
<a href="/write-on-file-search-tool.html" class="group h-full">
<article class="bg-white dark:bg-black border border-gray-200 dark:border-[#1a1a1a] rounded-lg p-4 transition-all duration-300 hover:border-gray-300 dark:hover:border-[#2a2a2a] hover:bg-gray-50 dark:hover:bg-[#080808] h-full flex flex-col">
<img src="img/write-on-file-search-tool.png" alt="Write on File Search Tool" class="w-full aspect-square object-cover rounded-lg mb-4">
<time class="relative z-10 order-first mb-3 flex items-center text-sm text-gray-600 dark:text-gray-500 pl-3.5" datetime="2025-11-16"><span class="absolute inset-y-0 left-0 flex items-center" aria-hidden="true"><span class="h-4 w-0.5 rounded-full bg-gray-200 dark:bg-gray-700"></span></span>16 Nov 2025</time>
<h2 class="text-base font-semibold font-display tracking-tight text-gray-800 dark:text-gray-300 group-hover:text-primary-400 transition-colors duration-300">Write on File Search Tool</h2>
<p class="relative z-10 mt-2 text-sm text-gray-600 dark:text-gray-400">A practical guide to building a fast, cross-platform file search tool with clean UX and robust querying.</p>
</article>
</a>
</li>
```

## Implementation Steps
1. Create `write-on-file-search-tool.html` with the content above
2. Add the card block near the top of `articles.html:318` for recency
3. Ensure `img/write-on-file-search-tool.png` exists or update to an available image
4. Validate navigation and transitions

## Verification
- Navigate from `articles.html` to `write-on-file-search-tool.html` and back; confirm Swup transitions
- Confirm responsive layout matches existing pages
- Validate metadata with browser inspector
