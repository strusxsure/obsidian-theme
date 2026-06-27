# Obsidian Theme

A sleek dark theme with electric purple accents, glassmorphism effects, and a custom sidebar login page for Pterodactyl Panel.

Built as a **Blueprint extension** — install with a single command, just like Arix, Nebula, and other popular themes.

![Pterodactyl v1.0+](https://img.shields.io/badge/Pterodactyl-v1.0%2B-blue)
![Blueprint](https://img.shields.io/badge/Blueprint-Required-purple)
![License](https://img.shields.io/badge/License-MIT-green)

---

## Features

- **Dark Black + Electric Purple** color scheme throughout the entire panel
- **Glassmorphism login page** with animated purple glow orbs
- **Sidebar navigation** on login page with custom Font Awesome icons and hover tooltips
- **Purple accent buttons** with glow hover effects
- **Custom scrollbars** matching the dark theme
- **Smooth transitions** on all interactive elements
- **Full admin panel** theming (sidebar, navbar, tables, inputs, modals)
- **Server list** with status indicators (green/yellow/red glow effects)

---

## Prerequisites

- Pterodactyl Panel **v1.0+** (React-based)
- [Blueprint](https://blueprint.zip) installed on your panel

---

## Installation

### Step 1: Install Blueprint (one-time only)

If you already have Blueprint installed, skip to Step 2.

```bash
cd /var/www/pterodactyl

# Download Blueprint
wget "https://github.com/BlueprintFramework/framework/releases/latest/download/release.zip" -O release.zip
unzip -o release.zip

# Configure
echo 'WEBUSER="www-data";
OWNERSHIP="www-data:www-data";
USERSHELL="/bin/bash";' > .blueprintrc

# Install dependencies & run
sudo apt install -y ca-certificates curl git gnupg unzip wget zip
sudo mkdir -p /etc/apt/keyrings
curl -fsSL https://deb.nodesource.com/gpgkey/nodesource-repo.gpg.key | sudo gpg --dearmor -o /etc/apt/keyrings/nodesource.gpg
echo "deb [signed-by=/etc/apt/keyrings/nodesource.gpg] https://deb.nodesource.com/node_22.x nodistro main" | sudo tee /etc/apt/sources.list.d/nodesource.list
sudo apt update
sudo apt install -y nodejs
npm i -g yarn
yarn install

chmod +x blueprint.sh
bash blueprint.sh
```

### Step 2: Install Obsidian Theme

```bash
cd /var/www/pterodactyl
blueprint -install YOUR_GITHUB_USERNAME/obsidian-theme
```

That's it! The theme is now active. Visit your panel to see the changes.

---

## Usage

After installation, the theme applies automatically to:
- **Client Dashboard** — server list, console, files, databases, schedules, users, backups, network, startup, settings
- **Admin Panel** — sidebar, navbar, tables, forms, modals, all admin pages
- **Login Page** — custom sidebar + glassmorphism login card with purple glow effects

### Managing the Extension

```bash
# Remove the theme
blueprint -remove obsidian

# Update to latest version
blueprint -install YOUR_GITHUB_USERNAME/obsidian-theme

# Rebuild frontend (if needed)
cd /var/www/pterodactyl
yarn build:production
php artisan view:clear
```

---

## File Structure

```
obsidian-theme/
├── conf.yml                        # Blueprint extension config
├── README.md                       # This file
├── admin/
│   ├── view.blade.php              # Admin settings page
│   └── admin.style.css             # Admin panel CSS
├── client/
│   └── client.style.css            # Dashboard/client CSS (main theme)
├── assets/
│   └── icon.svg                    # Extension icon
└── wrappers/
    └── dashboard.blade.php         # Dashboard wrapper (sidebar login)
```

---

## Customization

### Changing Colors

Edit `client/client.style.css` and modify the CSS variables at the top:

```css
:root {
  --obsidian-purple: #8b5cf6;        /* Main accent color */
  --obsidian-purple-light: #a78bfa;  /* Hover/active state */
  --obsidian-purple-dark: #6d28d9;   /* Gradient dark end */
  --obsidian-bg: #0a0a0f;            /* Main background */
  --obsidian-surface: #16162a;       /* Card/surface background */
}
```

After making changes, rebuild:
```bash
cd /var/www/pterodactyl
yarn build:production
```

---

## Screenshots

> Dark black background with electric purple accents, glassmorphism login card, and sidebar navigation.

---

## License

MIT License — feel free to modify and redistribute.

---

## Credits

- [Blueprint Framework](https://blueprint.zip) — Extension system for Pterodactyl
- [Pterodactyl](https://pterodactyl.io) — Game server management panel