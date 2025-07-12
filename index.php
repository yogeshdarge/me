<?php
/**
 * Dynamic Portfolio System
 * Converts static HTML portfolio to PHP with JSON data
 */

class PortfolioSystem {
    private $dataPath;
    private $cachePath;
    
    public function __construct($dataPath = 'data/', $cachePath = 'cache/') {
        $this->dataPath = $dataPath;
        $this->cachePath = $cachePath;
        
        // Create directories if they don't exist
        if (!file_exists($this->dataPath)) {
            mkdir($this->dataPath, 0755, true);
        }
        if (!file_exists($this->cachePath)) {
            mkdir($this->cachePath, 0755, true);
        }
    }
    
    /**
     * Load JSON data from file
     */
    public function loadData($filename) {
        $filepath = $this->dataPath . $filename . '.json';
        if (file_exists($filepath)) {
            $content = file_get_contents($filepath);
            return json_decode($content, true);
        }
        return null;
    }
    
    /**
     * Save data to JSON file
     */
    public function saveData($filename, $data) {
        $filepath = $this->dataPath . $filename . '.json';
        return file_put_contents($filepath, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }
    
    /**
     * Get site configuration
     */
    public function getSiteConfig() {
        $config = $this->loadData('site_config');
        if (!$config) {
            $config = [
                'site_name' => 'Yogesh Tukaram Darge',
                'site_url' => 'https://yogeshdarge.com',
                'description' => 'Stack Developer (iOS/Android/Web) | Flutter Native & Hybrid | UI/UX Designer | End-to-End Expertise.',
                'author' => 'Yogesh Darge',
                'og_image' => 'img/yogeshdarge.png',
                'favicon' => 'img/favicon.png',
                'locale' => 'en_IN',
                'theme' => 'dark',
                'ai_agent_id' => 'agent_01jzsf0z1rfbgtk92xye0k844r'
            ];
            $this->saveData('site_config', $config);
        }
        return $config;
    }
    
    /**
     * Get navigation data
     */
    public function getNavigation() {
        $nav = $this->loadData('navigation');
        if (!$nav) {
            $nav = [
                'items' => [
                    [
                        'id' => 'index',
                        'label' => 'Home',
                        'url' => '/',
                        'icon' => 'home',
                        'sr_only' => 'Home'
                    ],
                    [
                        'id' => 'projects',
                        'label' => 'Projects',
                        'url' => '/projects.php',
                        'icon' => 'folder',
                        'sr_only' => 'Projects'
                    ],
                    [
                        'id' => 'articles',
                        'label' => 'Articles',
                        'url' => '/articles.php',
                        'icon' => 'edit',
                        'sr_only' => 'Articles'
                    ],
                    [
                        'id' => 'about',
                        'label' => 'About',
                        'url' => '/about.php',
                        'icon' => 'user',
                        'sr_only' => 'About'
                    ],
                    [
                        'id' => 'whats-in-my-bag',
                        'label' => 'What\'s in my bag?',
                        'url' => '/whats-in-my-bag.php',
                        'icon' => 'bag',
                        'sr_only' => 'What\'s in my bag?'
                    ],
                    [
                        'id' => 'bookmarks',
                        'label' => 'Bookmarks',
                        'url' => '/bookmarks.php',
                        'icon' => 'bookmark',
                        'sr_only' => 'My favorites'
                    ]
                ]
            ];
            $this->saveData('navigation', $nav);
        }
        return $nav;
    }
    
    /**
     * Get profile data
     */
    public function getProfile() {
        $profile = $this->loadData('profile');
        if (!$profile) {
            $profile = [
                'name' => 'Yogesh Darge',
                'full_name' => 'Yogesh Tukaram Darge',
                'title' => 'Full Stack Developer (iOS/Android/Web) | Flutter Native & Hybrid | UI/UX Designer | End-to-End Expertise.',
                'bio' => 'looking for a full-stack mobile and web developer with years of experience, including expertise in UI/UX design, development, and integration of front-end and back-end applications?',
                'description' => 'I bring extensive knowledge of mobile and web platforms, deep technical expertise, a professional attitude, and a commitment to high-quality code. As a freelancer, I prioritize client satisfaction, respect deadlines, and ensure thorough quality assurance, delivering honest and efficient services every time.',
                'image' => 'img/yogeshdarge.png',
                'status' => [
                    'text' => 'Busy, but contact me',
                    'color' => 'yellow',
                    'animated' => true
                ],
                'contact' => [
                    'email' => 'yogeshdarge@gmail.com',
                    'whatsapp' => 'https://wa.me/919892972560',
                    'linkedin' => 'https://www.linkedin.com/in/yogeshdarge',
                    'facebook' => 'https://web.facebook.com/yogeshdarge',
                    'github' => 'https://github.com/yogeshdarge'
                ],
                'resume_url' => '/YogeshDarge_Resume.pdf'
            ];
            $this->saveData('profile', $profile);
        }
        return $profile;
    }
    
    /**
     * Get skills data
     */
    public function getSkills() {
        $skills = $this->loadData('skills');
        if (!$skills) {
            $skills = [
                'expertise' => [
                    [
                        'name' => 'Mobile Applications',
                        'level' => 4,
                        'max_level' => 5
                    ],
                    [
                        'name' => 'Web Applications',
                        'level' => 4.5,
                        'max_level' => 5
                    ],
                    [
                        'name' => 'UI/UX Designing',
                        'level' => 4.8,
                        'max_level' => 5
                    ],
                    [
                        'name' => 'Creative Designs',
                        'level' => 3,
                        'max_level' => 5
                    ]
                ],
                'technical' => [
                    ['name' => 'PHP', 'icon' => 'img/icon-php.png'],
                    ['name' => 'jQuery', 'icon' => 'img/icon-jquery.png'],
                    ['name' => 'MySQL', 'icon' => 'img/icon-mysql.png'],
                    ['name' => 'JavaScript', 'icon' => 'img/icon-javascript.png'],
                    ['name' => 'Dart', 'icon' => 'img/icon-dart.png'],
                    ['name' => 'Java', 'icon' => 'img/icon-java.png'],
                    ['name' => 'Flutter', 'icon' => 'img/icon-flutter.png'],
                    ['name' => 'JSON', 'icon' => 'img/icon-json.png'],
                    ['name' => 'XML', 'icon' => 'img/icon-xml.png'],
                    ['name' => 'ASP/ASP.Net', 'icon' => 'img/icon-asp.png'],
                    ['name' => 'HTML/HTML5', 'icon' => 'img/icon-html5.png'],
                    ['name' => 'CSS/CSS3', 'icon' => 'img/icon-css.png'],
                    ['name' => 'Ajax', 'icon' => 'img/icon-api.png'],
                    ['name' => 'Bootstrap', 'icon' => 'img/icon-bootstrap.png']
                ],
                'tools' => [
                    ['name' => 'Visual Studio Code', 'icon' => 'img/icon-vscode.png'],
                    ['name' => 'Android Studio', 'icon' => 'img/icon-android.png'],
                    ['name' => 'XCode', 'icon' => 'img/icon-xcode.png'],
                    ['name' => 'Photoshop', 'icon' => 'img/icon-photoshop.png'],
                    ['name' => 'Illustrator', 'icon' => 'img/icon-illustrator.png'],
                    ['name' => 'CorelDRAW', 'icon' => 'img/icon-coreldraw.png'],
                    ['name' => 'TablePlus', 'icon' => 'img/icon-tableplus.png'],
                    ['name' => 'GitHub', 'icon' => 'img/icon-github.png'],
                    ['name' => 'WordPress / WooCommerce', 'icon' => 'img/icon-wordpress.png'],
                    ['name' => 'Shopify / PrestaShop', 'icon' => 'img/icon-shopify.png']
                ]
            ];
            $this->saveData('skills', $skills);
        }
        return $skills;
    }
    
    /**
     * Get projects data
     */
    public function getProjects() {
        $projects = $this->loadData('projects');
        if (!$projects) {
            $projects = [
                'featured' => [
                    [
                        'id' => 'samuday',
                        'title' => 'Samuday India',
                        'description' => 'Marathi Gavali Samuday Community Application',
                        'url' => 'https://samuday.in/',
                        'logo' => 'img/logo-samuday.png',
                        'featured' => true
                    ],
                    [
                        'id' => 'bluapp',
                        'title' => 'BluApp',
                        'description' => 'Privilege App for Gated Community Services offered',
                        'url' => 'https://www.bluapps.in/',
                        'logo' => 'img/logo-bluapp.png',
                        'locations' => [
                            'Hiranandani Estate Club, Thane',
                            'Hiranandani Gardens, Powai',
                            'Blue Turtle Club, HOH Chennai',
                            'Rodas Enclave Club'
                        ],
                        'featured' => true
                    ],
                    [
                        'id' => 'gavalivivah',
                        'title' => 'Marathi Vivah Matrimonies',
                        'description' => 'Community-Based Matrimony Apps for Marathi Subcastes',
                        'url' => 'https://www.gavalivivah.in/',
                        'logo' => 'img/logo-gavalivivah.png',
                        'sub_projects' => [
                            'Marathi Gavali Vivah',
                            'Marathi Vaishyawani Vivah',
                            'Marathi Kumbhar Vivah'
                        ],
                        'featured' => true
                    ]
                ]
            ];
            $this->saveData('projects', $projects);
        }
        return $projects;
    }
    
    /**
     * Get articles data
     */
    public function getArticles() {
        $articles = $this->loadData('articles');
        if (!$articles) {
            $articles = [
                'items' => [
                    [
                        'id' => 'flutter-supabase-cloudinary',
                        'title' => 'Building a Secure, Scalable App with Flutter, Supabase, and Cloudinary',
                        'slug' => 'flutter-app-with-supabase-cloudinary',
                        'excerpt' => 'In today\'s fast-paced digital world, community-driven applications play a crucial role in connecting people. As a Flutter developer with a strong background in UI/UX design and secure coding, I recently worked on a community application leveraging Flutter, Supabase, and Cloudinary.',
                        'cover_image' => 'img/cover-samuday.png',
                        'published_date' => '2025-04-29',
                        'featured' => true
                    ]
                ]
            ];
            $this->saveData('articles', $articles);
        }
        return $articles;
    }
    
    /**
     * Get experience data
     */
    public function getExperience() {
        $experience = $this->loadData('experience');
        if (!$experience) {
            $experience = [
                'items' => [
                    [
                        'company' => 'Anurvik® | Technoserve Digital Solution LLP',
                        'position' => 'Full Stack Mobile App Designer & Developer | Creative Designer',
                        'period' => 'Jan 2016 - Present',
                        'duration' => '9+ Year\'s of Experience',
                        'logos' => ['img/logo-anurvik.png', 'img/logo-technoserve.png']
                    ],
                    [
                        'company' => 'Alex Jewellery Pvt. Ltd. | Sri Jaya Jewellery Pvt. Ltd. | MR Jewellery Pvt. Ltd.',
                        'position' => 'Web Designer & Developer | Creative Designer | Visual Merchandiser',
                        'period' => 'Aug 2008 - Jan 2016',
                        'duration' => '8 Year\'s of Experience',
                        'logos' => ['img/logo-alexjewellery.png', 'img/logo-srijayajewellery.png', 'img/logo-mrjewellery.png']
                    ]
                ]
            ];
            $this->saveData('experience', $experience);
        }
        return $experience;
    }
    
    /**
     * Get bookmarks data
     */
    public function getBookmarks() {
        $bookmarks = $this->loadData('bookmarks');
        if (!$bookmarks) {
            $bookmarks = [
                'items' => [
                    [
                        'title' => 'ElevenLabs.io Great for conversational AI projects',
                        'url' => 'https://try.elevenlabs.io/7xpd560sip2x',
                        'description' => '',
                        'domain' => 'elevenlabs.io',
                        'logo' => 'https://logo.clearbit.com/elevenlabs.io'
                    ],
                    [
                        'title' => 'CodeWithHarry - My go-to YouTube channel for learning new programming languages like Python in a simple, practical way.',
                        'url' => 'https://www.youtube.com/@CodeWithHarry/featured',
                        'description' => '',
                        'domain' => 'youtube.com',
                        'logo' => 'https://logo.clearbit.com/youtube.com'
                    ],
                    [
                        'title' => 'Flat Icons - Vector Icons & Stickers',
                        'url' => 'https://www.flaticon.com/',
                        'description' => '',
                        'domain' => 'flaticon.com',
                        'logo' => 'https://logo.clearbit.com/flaticon.com'
                    ]
                ]
            ];
            $this->saveData('bookmarks', $bookmarks);
        }
        return $bookmarks;
    }
    
    /**
     * Get bag items data
     */
    public function getBagItems() {
        $bagItems = $this->loadData('bag_items');
        if (!$bagItems) {
            $bagItems = [
                'categories' => [
                    [
                        'name' => 'Material',
                        'items' => [
                            [
                                'name' => 'Apple Airpods 4',
                                'description' => 'It\'s probably the object I use the most after my phone and laptop. I use it for everything, listening to music or taking calls.',
                                'url' => 'https://www.apple.com/in/airpods-4/',
                                'image' => 'https://www.apple.com/v/airpods-4/f/images/overview/contrast/explore_airpods_4_closed__dgo55jp7r7gy_xlarge.jpg'
                            ],
                            [
                                'name' => 'Apple iPhone 16Pro',
                                'description' => 'I am not used to investing and updating my phone frequently, I used my last iphone 11Pro for 4 years.',
                                'url' => 'https://www.apple.com/in/iphone-16-pro/',
                                'image' => 'https://redemption.nzfarmsource.co.nz/wp-content/uploads/df/Apple-iPhone-16-Pro-Max-Black-Titanium-800x800.jpg'
                            ]
                        ]
                    ],
                    [
                        'name' => 'Software',
                        'items' => [
                            [
                                'name' => 'Visual Studio Code',
                                'description' => 'My primary code editor for mobile, web, and backend development.',
                                'url' => 'https://code.visualstudio.com/',
                                'image' => 'img/icon-vscode.png'
                            ],
                            [
                                'name' => 'Adobe Photoshop',
                                'description' => 'My go-to tool for UI design, image editing, and creative assets.',
                                'url' => 'https://www.adobe.com/in/creativecloud/business/teams/photoshop.html',
                                'image' => 'img/icon-photoshop.png'
                            ]
                        ]
                    ]
                ]
            ];
            $this->saveData('bag_items', $bagItems);
        }
        return $bagItems;
    }
    
    /**
     * Render page with data
     */
    public function renderPage($page, $data = []) {
        $config = $this->getSiteConfig();
        $navigation = $this->getNavigation();
        $profile = $this->getProfile();
        
        // Merge all data
        $pageData = array_merge([
            'config' => $config,
            'navigation' => $navigation,
            'profile' => $profile,
            'current_page' => $page
        ], $data);
        
        return $pageData;
    }
    
    /**
     * Get API response
     */
    public function getApiResponse($endpoint, $filters = []) {
        $data = null;
        
        switch($endpoint) {
            case 'profile':
                $data = $this->getProfile();
                break;
            case 'projects':
                $data = $this->getProjects();
                break;
            case 'articles':
                $data = $this->getArticles();
                break;
            case 'skills':
                $data = $this->getSkills();
                break;
            case 'experience':
                $data = $this->getExperience();
                break;
            case 'bookmarks':
                $data = $this->getBookmarks();
                break;
            case 'bag-items':
                $data = $this->getBagItems();
                break;
            case 'navigation':
                $data = $this->getNavigation();
                break;
            case 'config':
                $data = $this->getSiteConfig();
                break;
            default:
                return [
                    'success' => false,
                    'message' => 'Invalid endpoint',
                    'timestamp' => date('Y-m-d H:i:s')
                ];
        }
        
        // Apply filters if provided
        if (!empty($filters) && is_array($data)) {
            foreach($filters as $key => $value) {
                if ($key === 'featured' && isset($data['featured'])) {
                    $data = $data['featured'];
                } elseif ($key === 'limit' && is_numeric($value)) {
                    if (isset($data['items'])) {
                        $data['items'] = array_slice($data['items'], 0, (int)$value);
                    }
                }
            }
        }
        
        return [
            'success' => true,
            'data' => $data,
            'timestamp' => date('Y-m-d H:i:s'),
            'endpoint' => $endpoint
        ];
    }
}

// Usage Example
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['api'])) {
    header('Content-Type: application/json');
    
    $portfolio = new PortfolioSystem();
    $endpoint = $_GET['endpoint'] ?? 'profile';
    $filters = $_GET;
    unset($filters['api'], $filters['endpoint']);
    
    $response = $portfolio->getApiResponse($endpoint, $filters);
    echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    exit;
}

// Initialize the portfolio system
$portfolio = new PortfolioSystem();
?>

<!-- Example usage in a PHP page -->
<!DOCTYPE html>
<html lang="en" class="h-full dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php 
    $pageData = $portfolio->renderPage('index');
    $config = $pageData['config'];
    $profile = $pageData['profile'];
    ?>
    
    <title><?php echo htmlspecialchars($profile['name'] . ' | ' . $config['site_name']); ?></title>
    
    <!-- Dynamic Meta Tags -->
    <meta name="title" content="<?php echo htmlspecialchars($config['site_name']); ?>" />
    <meta name="description" content="<?php echo htmlspecialchars($config['description']); ?>" />
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo htmlspecialchars($config['site_name']); ?>" />
    <meta property="og:url" content="<?php echo htmlspecialchars($config['site_url']); ?>" />
    <meta property="og:description" content="<?php echo htmlspecialchars($config['description']); ?>" />
    <meta property="og:image" content="<?php echo htmlspecialchars($config['site_url'] . '/' . $config['og_image']); ?>" />
    
    <link rel="icon" type="image/png" href="<?php echo htmlspecialchars($config['favicon']); ?>">
    
    <!-- Styles -->
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/base.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="antialiased bg-gray-50 dark:bg-black min-h-screen">
    <div class="layout">
        <!-- Dynamic Navigation -->
        <header class="fixed top-0 w-full z-50 header">
            <nav class="mx-auto px-4 sm:px-6 lg:px-8 max-w-2xl">
                <ul class="flex items-center my-4 px-3 text-sm font-medium text-gray-800 rounded-xl shadow-lg shadow-gray-800/5 ring-1 backdrop-blur bg-white dark:bg-[#0a0a0a] dark:text-gray-200 dark:ring-white/20 ring-gray-900/5">
                    <?php foreach($pageData['navigation']['items'] as $item): ?>
                    <li class="is-link" data-id="<?php echo htmlspecialchars($item['id']); ?>">
                        <div class="relative inline-flex">
                            <a class="relative px-3 py-4 flex items-center justify-center transition hover:text-primary-500 dark:hover:text-primary-400 <?php echo $pageData['current_page'] === $item['id'] ? 'text-primary-600 dark:text-primary-400' : ''; ?>"
                               href="<?php echo htmlspecialchars($item['url']); ?>">
                                <!-- SVG icons would be dynamically loaded here -->
                                <span class="sr-only"><?php echo htmlspecialchars($item['sr_only']); ?></span>
                            </a>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </header>
        
        <!-- Dynamic Content -->
        <main class="pt-32 px-4 sm:px-6 lg:px-8 max-w-2xl mx-auto">
            <!-- Profile Section -->
            <div class="space-y-6 px-4">
                <div class="flex items-center gap-4">
                    <div class="relative">
                        <img src="<?php echo htmlspecialchars($profile['image']); ?>" 
                             alt="<?php echo htmlspecialchars($profile['name']); ?>"
                             class="ring-2 border ring-gray-200 border-gray-300 dark:ring-white/10 dark:border-gray-800 hover:ring-4 transition-all duration-300 bg-gray-200 dark:bg-gray-900 rounded-full h-12 w-12 sm:h-16 sm:w-16">
                        <?php if($profile['status']['animated']): ?>
                        <div class="bg-<?php echo $profile['status']['color']; ?>-500 absolute -bottom-1 -right-1 w-4 h-4 rounded-full border-2 border-white dark:border-gray-900 animate-pulse"></div>
                        <?php endif; ?>
                    </div>
                    <div class="flex flex-col">
                        <span class="bg-<?php echo $profile['status']['color']; ?>-100 text-<?php echo $profile['status']['color']; ?>-800 dark:bg-<?php echo $profile['status']['color']; ?>-900/30 dark:text-<?php echo $profile['status']['color']; ?>-400 text-sm font-medium px-3 py-1 rounded-full">
                            <?php echo htmlspecialchars($profile['status']['text']); ?>
                        </span>
                    </div>
                </div>
                
                <h1 class="text-xl md:text-4xl sm:text-3xl font-bold tracking-tight text-gray-800 dark:text-gray-100">
                    Hello, I'm <span class="text-primary-400"><?php echo htmlspecialchars($profile['name']); ?></span>
                </h1>
                
                <h3 class="text-xl md:text-xl font-bold tracking-tight text-gray-900 dark:text-white mb-4">
                    <?php echo htmlspecialchars($profile['title']); ?>
                </h3>
                
                <p class="text-gray-900 dark:text-gray-400">
                    <?php echo htmlspecialchars($profile['bio']); ?>
                </p>
                <p class="text-gray-900 dark:text-gray-400">
                    <?php echo nl2br(htmlspecialchars($profile['description'])); ?>
                </p>
            </div>
            
            <!-- API Integration Examples -->
            <div class="mt-12 space-y-6">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">API Examples</h2>
                
                <!-- Fetch Projects via AJAX -->
                <div id="projects-container">
                    <button onclick="loadProjects()" class="bg-primary-600 text-white px-4 py-2 rounded">Load Projects</button>
                    <div id="projects-list"></div>
                </div>
                
                <!-- Fetch Skills via AJAX -->
                <div id="skills-container">
                    <button onclick="loadSkills()" class="bg-primary-600 text-white px-4 py-2 rounded">Load Skills</button>
                    <div id="skills-list"></div>
                </div>
            </div>
        </main>
    </div>
    
    <script>
    // AJAX Functions to load dynamic content
    function loadProjects() {
        fetch('?api=1&endpoint=projects')
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    let html = '<div class="mt-4 space-y-4">';
                    data.data.featured.forEach(project => {
                        html += `
                            <div class="p-4 border rounded-lg">
                                <h3 class="font-semibold text-gray-800 dark:text-gray-200">${project.title}</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400">${project.description}</p>
                                <a href="${project.url}" target="_blank" class="text-primary-500 text-sm">View Project →</a>
                            </div>
                        `;
                    });
                    html += '</div>';
                    document.getElementById('projects-list').innerHTML = html;
                }
            })
            .catch(error => console.error('Error:', error));
    }
    
    function loadSkills() {
        fetch('?api=1&endpoint=skills')
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    let html = '<div class="mt-4 grid grid-cols-6 gap-4">';
                    data.data.technical.forEach(skill => {
                        html += `
                            <div class="text-center">
                                <img src="${skill.icon}" alt="${skill.name}" class="w-12 h-12 mx-auto">
                                <p class="text-xs mt-1 text-gray-600 dark:text-gray-400">${skill.name}</p>
                            </div>
                        `;
                    });
                    html += '</div>';
                    document.getElementById('skills-list').innerHTML = html;
                }
            })
            .catch(error => console.error('Error:', error));
    }
    </script>
</body>
</html>