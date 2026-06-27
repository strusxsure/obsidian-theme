@push('scripts')
<style>
/* ---- Obsidian Sidebar Login (only on auth/login pages) ---- */
#obsidian-sidebar-login { display: none; }
body.obsidian-auth-page { margin: 0; padding: 0; overflow: hidden; }
body.obsidian-auth-page #obsidian-sidebar-login { display: flex; }
body.obsidian-auth-page .LoginFormContainer___StyledDiv-sc-cyh04c-3 { display: none; }

/* Sidebar */
.obsidian-sidebar {
  width: 80px;
  min-height: 100vh;
  background: linear-gradient(180deg, #0d0d1a 0%, #1a0a2e 50%, #0d0d1a 100%);
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 20px 0;
  position: fixed;
  left: 0;
  top: 0;
  bottom: 0;
  z-index: 1000;
  border-right: 1px solid rgba(139, 92, 246, 0.2);
  box-shadow: 4px 0 30px rgba(139, 92, 246, 0.1);
}

/* Brand icon at top */
.obsidian-brand-icon {
  width: 48px;
  height: 48px;
  border-radius: 14px;
  background: linear-gradient(135deg, #8b5cf6, #6d28d9, #4c1d95);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 30px;
  box-shadow: 0 0 20px rgba(139, 92, 246, 0.4);
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
}

.obsidian-brand-icon::before {
  content: '';
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: linear-gradient(45deg, transparent 40%, rgba(255,255,255,0.1) 50%, transparent 60%);
  animation: brandShine 3s ease-in-out infinite;
}

@keyframes brandShine {
  0%, 100% { transform: translateX(-100%) rotate(45deg); }
  50% { transform: translateX(100%) rotate(45deg); }
}

.obsidian-brand-icon svg {
  width: 26px;
  height: 26px;
  fill: white;
}

/* Nav items */
.obsidian-nav {
  display: flex;
  flex-direction: column;
  gap: 6px;
  width: 100%;
  padding: 0 10px;
  flex: 1;
}

.obsidian-nav-item {
  width: 56px;
  height: 56px;
  border-radius: 14px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  color: rgba(255, 255, 255, 0.4);
  text-decoration: none;
}

.obsidian-nav-item:hover {
  background: rgba(139, 92, 246, 0.15);
  color: rgba(255, 255, 255, 0.9);
  transform: scale(1.05);
}

.obsidian-nav-item.active {
  background: rgba(139, 92, 246, 0.25);
  color: #a78bfa;
  box-shadow: 0 0 20px rgba(139, 92, 246, 0.3);
}

.obsidian-nav-item svg {
  width: 20px;
  height: 20px;
}

/* Tooltip */
.obsidian-nav-item::after {
  content: attr(data-tooltip);
  position: absolute;
  left: 70px;
  top: 50%;
  transform: translateY(-50%) translateX(-5px);
  background: #1a1a2e;
  color: #e2e8f0;
  padding: 6px 14px;
  border-radius: 8px;
  font-size: 13px;
  white-space: nowrap;
  opacity: 0;
  pointer-events: none;
  transition: all 0.2s ease;
  border: 1px solid rgba(139, 92, 246, 0.3);
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
  z-index: 1001;
}

.obsidian-nav-item:hover::after {
  opacity: 1;
  transform: translateY(-50%) translateX(0);
}

/* Bottom section */
.obsidian-sidebar-bottom {
  display: flex;
  flex-direction: column;
  gap: 6px;
  padding: 0 10px;
  width: 100%;
}

/* Glow orbs background */
.obsidian-login-area {
  position: fixed;
  top: 0;
  left: 80px;
  right: 0;
  bottom: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #0a0a0f;
  overflow: hidden;
}

.obsidian-glow-orb {
  position: absolute;
  border-radius: 50%;
  filter: blur(80px);
  opacity: 0.3;
  animation: orbFloat 8s ease-in-out infinite;
  pointer-events: none;
}

.obsidian-glow-orb:nth-child(1) {
  width: 300px;
  height: 300px;
  background: #8b5cf6;
  top: -100px;
  right: -50px;
  animation-delay: 0s;
}

.obsidian-glow-orb:nth-child(2) {
  width: 250px;
  height: 250px;
  background: #6d28d9;
  bottom: -80px;
  left: 20%;
  animation-delay: -3s;
  animation-duration: 10s;
}

.obsidian-glow-orb:nth-child(3) {
  width: 200px;
  height: 200px;
  background: #a78bfa;
  top: 40%;
  left: 50%;
  animation-delay: -5s;
  animation-duration: 12s;
}

@keyframes orbFloat {
  0%, 100% { transform: translate(0, 0) scale(1); }
  25% { transform: translate(30px, -20px) scale(1.1); }
  50% { transform: translate(-20px, 30px) scale(0.9); }
  75% { transform: translate(20px, 20px) scale(1.05); }
}

/* Glassmorphism login card */
.obsidian-login-card {
  position: relative;
  z-index: 10;
  width: 100%;
  max-width: 420px;
  padding: 40px;
  background: rgba(22, 22, 42, 0.7);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  border-radius: 20px;
  border: 1px solid rgba(139, 92, 246, 0.2);
  box-shadow: 0 0 40px rgba(139, 92, 246, 0.15),
              0 25px 50px rgba(0, 0, 0, 0.5);
  animation: cardSlideIn 0.5s ease-out;
}

@keyframes cardSlideIn {
  from {
    opacity: 0;
    transform: translateY(20px) scale(0.98);
  }
  to {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}

.obsidian-login-card h1 {
  font-size: 28px;
  font-weight: 700;
  color: #f1f5f9;
  margin: 0 0 8px 0;
  text-align: center;
  letter-spacing: -0.5px;
}

.obsidian-login-card p.subtitle {
  color: #94a3b8;
  text-align: center;
  margin: 0 0 32px 0;
  font-size: 14px;
}

.obsidian-login-card label {
  display: block;
  color: #94a3b8;
  font-size: 13px;
  font-weight: 500;
  margin-bottom: 6px;
}

.obsidian-login-card input[type="text"],
.obsidian-login-card input[type="email"],
.obsidian-login-card input[type="password"] {
  width: 100%;
  padding: 12px 16px;
  background: rgba(10, 10, 15, 0.6);
  border: 1px solid rgba(139, 92, 246, 0.2);
  border-radius: 10px;
  color: #e2e8f0;
  font-size: 14px;
  margin-bottom: 20px;
  outline: none;
  transition: all 0.3s ease;
  box-sizing: border-box;
}

.obsidian-login-card input:focus {
  border-color: #8b5cf6;
  box-shadow: 0 0 0 3px rgba(139, 92, 246, 0.2);
}

.obsidian-login-card input::placeholder {
  color: #4a5568;
}

.obsidian-login-card .obsidian-submit-btn {
  width: 100%;
  padding: 14px;
  background: linear-gradient(135deg, #8b5cf6, #6d28d9);
  border: none;
  border-radius: 10px;
  color: white;
  font-size: 15px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
  margin-top: 8px;
}

.obsidian-login-card .obsidian-submit-btn:hover {
  background: linear-gradient(135deg, #a78bfa, #7c3aed);
  box-shadow: 0 0 30px rgba(139, 92, 246, 0.4);
  transform: translateY(-1px);
}

.obsidian-login-card .obsidian-submit-btn:active {
  transform: translateY(0);
}

.obsidian-login-card .obsidian-error-msg {
  background: rgba(239, 68, 68, 0.1);
  border: 1px solid rgba(239, 68, 68, 0.3);
  border-radius: 10px;
  padding: 12px 16px;
  color: #fca5a5;
  font-size: 13px;
  margin-bottom: 20px;
  display: none;
}

.obsidian-login-card .obsidian-links {
  text-align: center;
  margin-top: 24px;
  color: #64748b;
  font-size: 13px;
}

.obsidian-login-card .obsidian-links a {
  color: #8b5cf6;
  text-decoration: none;
  transition: color 0.2s ease;
}

.obsidian-login-card .obsidian-links a:hover {
  color: #a78bfa;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Only activate on login/auth pages
  var isAuthPage = false;
  var currentPath = window.location.pathname;

  if (currentPath.indexOf('/auth') !== -1 ||
      currentPath.indexOf('/login') !== -1 ||
      document.querySelector('.LoginFormContainer___StyledDiv-sc-cyh04c-3') ||
      document.querySelector('[class*="LoginForm"]')) {
    isAuthPage = true;
  }

  if (!isAuthPage) return;

  // Add auth page class to body
  document.body.classList.add('obsidian-auth-page');

  // Inject sidebar
  var sidebar = document.createElement('div');
  sidebar.id = 'obsidian-sidebar-login';
  sidebar.innerHTML = `
    <div class="obsidian-sidebar">
      <div class="obsidian-brand-icon">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
        </svg>
      </div>
      <div class="obsidian-nav">
        <a class="obsidian-nav-item active" data-tooltip="Login">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/>
            <polyline points="10 17 15 12 10 7"/>
            <line x1="15" y1="12" x2="3" y2="12"/>
          </svg>
        </a>
        <a class="obsidian-nav-item" data-tooltip="Servers">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="2" y="2" width="20" height="8" rx="2" ry="2"/>
            <rect x="2" y="14" width="20" height="8" rx="2" ry="2"/>
            <line x1="6" y1="6" x2="6.01" y2="6"/>
            <line x1="6" y1="18" x2="6.01" y2="18"/>
          </svg>
        </a>
        <a class="obsidian-nav-item" data-tooltip="Community">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
            <circle cx="9" cy="7" r="4"/>
            <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
          </svg>
        </a>
        <a class="obsidian-nav-item" data-tooltip="Analytics">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="18" y1="20" x2="18" y2="10"/>
            <line x1="12" y1="20" x2="12" y2="4"/>
            <line x1="6" y1="20" x2="6" y2="14"/>
          </svg>
        </a>
        <a class="obsidian-nav-item" data-tooltip="Notifications">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
            <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
          </svg>
        </a>
      </div>
      <div class="obsidian-sidebar-bottom">
        <a class="obsidian-nav-item" data-tooltip="Dark Mode">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
          </svg>
        </a>
        <a class="obsidian-nav-item" data-tooltip="Settings">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="3"/>
            <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06A1.65 1.65 0 0 0 4.68 15a1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06A1.65 1.65 0 0 0 9 4.68a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
          </svg>
        </a>
      </div>
    </div>
    <div class="obsidian-login-area">
      <div class="obsidian-glow-orb"></div>
      <div class="obsidian-glow-orb"></div>
      <div class="obsidian-glow-orb"></div>
      <div id="obsidian-login-container"></div>
    </div>
  `;

  document.body.prepend(sidebar);

  // Move the existing React login form into our custom card
  var existingForm = document.querySelector('.LoginFormContainer___StyledDiv-sc-cyh04c-3');
  var loginContainer = document.getElementById('obsidian-login-container');

  if (existingForm && loginContainer) {
    // Create our glassmorphism card wrapper
    var card = document.createElement('div');
    card.className = 'obsidian-login-card';
    card.innerHTML = '<h1>Welcome Back</h1><p class="subtitle">Sign in to your Pterodactyl panel</p>';
    card.appendChild(existingForm.cloneNode(true));

    // Style the cloned form elements
    var submitBtn = card.querySelector('button[type="submit"]');
    if (submitBtn) {
      submitBtn.classList.add('obsidian-submit-btn');
    }

    loginContainer.appendChild(card);
  }
});
</script>
@endpush