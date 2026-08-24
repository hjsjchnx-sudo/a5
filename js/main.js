/* BrightStudyGo - Main Interactive JavaScript */
document.addEventListener('DOMContentLoaded', () => {
  // Mobile menu toggle
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navLinks = document.querySelector('.nav-links');

  if (mobileToggle && navLinks) {
    mobileToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
      mobileToggle.setAttribute('aria-expanded', navLinks.classList.contains('active'));
    });
  }

  // Sticky Navbar shadow on scroll
  const navbar = document.querySelector('.navbar');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar?.classList.add('scrolled');
    } else {
      navbar?.classList.remove('scrolled');
    }
  });

  // Animated metric counters
  const counters = document.querySelectorAll('.metric-number');
  if (counters.length > 0) {
    const observerOptions = { threshold: 0.5 };
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const target = +entry.target.getAttribute('data-target');
          let count = 0;
          const speed = target / 50;
          const updateCount = () => {
            count += speed;
            if (count < target) {
              entry.target.innerText = Math.ceil(count);
              setTimeout(updateCount, 25);
            } else {
              entry.target.innerText = target;
            }
          };
          updateCount();
          obs.unobserve(entry.target);
        }
      });
    }, observerOptions);

    counters.forEach(counter => observer.observe(counter));
  }

  // Interactive Study Technique & Pomodoro Interval Explorer
  const techniqueButtons = document.querySelectorAll('.technique-btn');
  const techniqueDisplay = document.getElementById('technique-detail');

  if (techniqueButtons.length > 0 && techniqueDisplay) {
    techniqueButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        techniqueButtons.forEach(b => b.classList.remove('active-technique'));
        this.classList.add('active-technique');
        const techName = this.getAttribute('data-tech');
        const description = this.getAttribute('data-desc');
        const retentionRate = this.getAttribute('data-retention');

        techniqueDisplay.innerHTML = `
          <div class="study-card" style="border-left: 4px solid var(--accent-indigo); margin-top: 1.5rem;">
            <h3 style="color: var(--accent-indigo); font-size: 1.5rem; margin-bottom: 0.5rem;">${techName} Protocol Specification</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">${description}</p>
            <strong style="color: var(--accent-amber); font-size: 0.95rem;">Empirical Retention Metric: ${retentionRate}</strong>
          </div>
        `;
      });
    });
  }

  // Study Style Diagnostic Quiz
  const studyQuizButtons = document.querySelectorAll('.study-quiz-btn');
  const studyQuizResult = document.getElementById('study-quiz-result');

  if (studyQuizButtons.length > 0 && studyQuizResult) {
    studyQuizButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        studyQuizButtons.forEach(b => b.style.opacity = '0.7');
        this.style.opacity = '1';
        const recommendation = this.getAttribute('data-rec');
        studyQuizResult.innerHTML = `
          <div class="study-card" style="background: var(--bg-secondary); margin-top: 1rem; border-color: var(--accent-indigo);">
            <h4 style="color: var(--accent-indigo); margin-bottom: 0.5rem;">Your Recommended Academic Routine Formula</h4>
            <p style="color: var(--text-primary); font-weight: 600;">${recommendation}</p>
          </div>
        `;
      });
    });
  }
});
