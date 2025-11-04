# Organized Maquette Prompt: Meknes – Stories of Meknes Blog

After reviewing the features and user goals, this document organizes the requirements for creating a modern and responsive **HTML + Tailwind CSS mockup** for the blog **"Stories of Meknes"**.

---

## 1. Public Side (for Visitors / Cultural Readers)

**Goal:**  
Allow visitors to explore Meknes’ cultural and human stories, discover hidden gems, and engage with the community content.

**Design Guidelines:**  
- **Visual Theme:** Inspired by Moroccan architecture, traditional patterns, and the cultural ambiance of Meknes.  
- **Color Palette:** Warm, earthy tones (beige, red, gold, brown).  
- **Typography:** Modern, web-friendly fonts with good readability.  
- **Prioritization:** Mobile-first, clean layout, smooth user experience.  

**Sections to Include:**

### Header / Navbar
- **Logo:** “Stories of Meknes”  
- **Menu Links:** “Home”, “Culture”, “People”, “Events”, “Hidden Gems”, “Blog”, “Contact”  
- **Utilities:** Search bar and category filters  

### Hero Section
- **Background:** Featured image from Meknes’ cityscape or cultural events  
- **Title:** “Discover the Stories of Meknes”  
- **CTA Buttons:** “Explore Stories” and “Latest Articles”  

### Featured Stories / Cards
- **Layout:** Grid of cards with cover image, title, short description  
- **Action Icons:** Like, Save, Share  

**Sections:**  
- Horizontal **Trending Stories** carousel  
- Vertical **Latest Stories** list  

### Footer
- **Links:** About, Terms & Conditions, Social Media  
- **Contact Info:** Email and general contact  

---

## 2. Article Detail Page

**Goal:**  
Display the full content of a story with engaging visuals and clear interaction options.

**Design Guidelines:**  
- **Background:** Light, clean background  
- **Typography:** Elegant, readable fonts  
- **Aesthetic:** Moroccan-inspired warm tones  

**Sections to Include:**  
- **Top Section:** Large cover image with overlaid title, author, publication date, and location (with map pin icon)  
- **Main Content:** Full story text with embedded images  
- **Floating Action Buttons:** Like ❤️, Comment 💬, Share 🔗, Save ⭐  
- **Bottom Section:** Horizontal slider of related stories  
- Fully responsive design for desktop, tablet, and mobile  

---

## 3. User Profile & Favorites Page

**Goal:**  
Allow registered users to manage and review their saved content.

**Design Guidelines:**  
- Clean, minimalist layout with Moroccan accent colors  
- Responsive for desktop and tablet  

**Sections to Include:**  
- **Profile Section:** User avatar, name, quick stats (Saved Stories, Comments, Likes)  
- **Saved Stories List:** Cards with thumbnail, title, and save date  
- **Tabbed Interface:** Switch between Favorites, My Comments, My Contributions  

---

## 4. Contributor / Administrator Dashboard

**Goal:**  
Enable contributors and admins to manage content, approve community submissions, and track engagement metrics.

**Design Guidelines:**  
- Darker variation of public color palette for dashboard feel  
- Tailwind CSS components: cards, tables, modals, buttons, alerts  
- Sidebar navigation layout  

**Sections to Include:**  

### Login Page
- Centered login card  
- Fields: Email, Password  
- Button: “Login”  

### Admin Dashboard
- **Sidebar Navigation Links:** Dashboard, Manage Stories, Approve Contributions  
- **Main Content Area:**  
  - Quick stats (Total Stories, Views, Likes, Shares)  
  - Table for managing stories with Edit/Delete buttons  
  - Button to “Add New Story / Event”  

---

## Technical Details

- **Styling:** Tailwind CSS for all styling  
- **HTML Structure:** Semantic HTML5 (header, nav, main, section, footer)  
- **Modularity:** Reusable components (cards, buttons, sliders)  
- **Responsiveness:** Mobile, tablet, desktop  
- **Minimal Animations:** Tailwind transitions for hero, cards, and sliders  

---

## Optional Enhancements

- Subtle motion effects (fade-in, parallax) for hero and cards  
- Lucide or Font Awesome icons for UI elements (search, edit, share)  
- Dark mode toggle for accessibility  
- Tailwind Typography plugin for article readability  

---

## Output Format

Generate the following files:  
- `index.html` : Public homepage  
- `article.html` : Article detail page  
- `profile.html` : User profile & favorites page  
- `dashboard.html` : Admin dashboard  
- `login.html` : Admin login page  
- `stories_list.html` : Public blog listing page  

Each page should include **clear comments and section labels** for easy iteration.

---

## Theme Inspiration

The design should evoke:  
- The cultural richness and human stories of Meknes  
- Moroccan architecture and decorative accents  
- A blend of modern digital storytelling with traditional aesthetics
