<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Olivia Wilson - Marketing Manager</title>
  <style>
    :root{
      --bg: #ffffff;
      --text: #1f2937;          /* gray-800 */
      --muted: #4b5563;         /* gray-600 */
      --muted-700: #374151;     /* gray-700 */
      --border: #d1d5db;        /* gray-300 */
      --border-200: #e5e7eb;    /* gray-200 */
    }
    *{box-sizing:border-box}
    html,body{height:100%}
    body{
      margin:0;
      background:var(--bg);
      color:var(--text);
      line-height:1.7;
      font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, Helvetica Neue, Arial, "Apple Color Emoji", "Segoe UI Emoji";
    }

    /* Page container */
    .page{ max-width:72rem; margin-inline:auto; padding:1rem; }
    @media (min-width: 768px){ .page{ padding:2rem; } }

    /* Header */
    .site-header{ border-bottom:1px solid var(--border); padding-bottom:1rem; margin-bottom:2rem; position:relative; }
    .name-heading{ font-weight:800; text-transform:uppercase; letter-spacing:0.2em; text-align:center; font-size:2.25rem; line-height:1.1; position:relative; user-select:none; }
    @media (min-width:768px){ .name-heading{ font-size:3rem; } }
    .name-watermark{ position:absolute; inset:0; display:block; margin:auto; width:max-content; height:max-content; top:50%; left:50%; transform:translate(-50%,-50%); color:#d1d5db; font-size:6rem; font-weight:900; opacity:0.2; pointer-events:none; user-select:none; font-family:'Brush Script MT', cursive, serif; letter-spacing:2px; }
    .role-subtitle{ text-align:center; margin-top:0.25rem; color:#4b5563; font-size:1.125rem; letter-spacing:0.05em; }

    /* Grid layout */
    .grid{ display:grid; gap:1.5rem; }
    @media (min-width:768px){ .grid{ grid-template-columns: repeat(12, minmax(0,1fr)); gap:2.5rem; } }

    /* Cards / columns */
    .card{ border:1px solid var(--border); padding:1.5rem; }
    @media (min-width:768px){ .card{ padding:2rem; } }
    .col-left{ grid-column: 1 / -1; }
    .col-right{ grid-column: 1 / -1; }
    @media (min-width:768px){ .col-left{ grid-column: span 4; } .col-right{ grid-column: span 8; } }

    /* Blocks */
    .block{ margin-bottom:2.5rem; }
    .block:last-child{ margin-bottom:0; }

    /* Titles */
    .section-title{ font-size:1.25rem; font-weight:700; text-transform:uppercase; letter-spacing:0.05em; margin:0 0 1rem; color:var(--muted-700); }

    /* Outlined circle behind letter */
    .outlined-circle{ position:relative; display:inline-block; font-weight:700; color:var(--muted-700); }
    .outlined-circle::before{ content: attr(data-letter); position:absolute; left:50%; top:50%; transform:translate(-50%,-50%); font-size:3rem; font-weight:900; color:#d1d5db; z-index:-1; user-select:none; opacity:0.3; font-family:'Arial Black', Arial, sans-serif; letter-spacing:0; }

    /* Typography helpers */
    .para{ color:#374151; font-size:0.95rem; margin:0; }
    .period{ font-weight:600; margin:0 0 0.25rem 0; }
    .org{ font-weight:800; text-transform:uppercase; margin:0 0 0.25rem 0; }

    /* Lists */
    .list{ list-style:none; padding-left:0; margin:0; }
    .list.indented{ list-style:disc; padding-left:1.25rem; }
    .list.tight li{ margin:0.3rem 0; }

    /* Contact rows */
    .row{ display:flex; align-items:center; gap:0.5rem; color:#374151; font-size:0.95rem; }
    .icon{ width:20px; height:20px; color:#6b7280; flex:0 0 auto; }

    /* Job section */
    .job{ margin-bottom:1.25rem; }
    .job:last-child{ margin-bottom:0; }
    .job-head{ display:flex; align-items:flex-start; justify-content:space-between; gap:1rem; margin-bottom:0.5rem; }
    .job-title{ margin:0; font-size:1.1rem; font-weight:700; }
    .job-role{ margin:0; font-style:italic; color:#374151; font-size:0.95rem; }
    .job-time{ color:#6b7280; font-size:0.9rem; white-space:nowrap; }

    /* Print tweaks */
    @media print{ .site-header{ border:none; padding-bottom:0; margin-bottom:0.5rem; } .card{ border:none; padding:0; } .page{ padding:0; } }
  </style>
</head>
<body>
  <div class="page">
    <header class="site-header">
      <h1 class="name-heading">
        OLIVIA WILSON
        <span aria-hidden="true" class="name-watermark">OW</span>
      </h1>
      <p class="role-subtitle">MARKETING MANAGER</p>
    </header>

    <main class="grid">
      <!-- Left Column -->
      <section class="card col-left">
        <!-- Contact -->
        <div class="block">
          <h2 class="section-title"><span class="outlined-circle" data-letter="C">Contact</span></h2>
          <ul class="list contact-list">
            <li class="row"><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.93 19.93 0 0 1 3 5.18 2 2 0 0 1 5 3h3a2 2 0 0 1 2 1.72 12.15 12.15 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L9 11a16 16 0 0 0 6 6l1.36-1.15a2 2 0 0 1 2.11-.45 12.15 12.15 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg><span>+123-456-7890</span></li>
            <li class="row"><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M4 4h16v16H4z"></path><path d="M22 4L12 13 2 4"></path></svg><span>hello@reallygreatsite.com</span></li>
            <li class="row"><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M21 10c0 6-9 12-9 12S3 16 3 10a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg><span>123 Anywhere St., Any City</span></li>
            <li class="row"><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15 15 0 0 1 0 20"></path></svg><span>www.reallygreatsite.com</span></li>
          </ul>
        </div>

        <!-- Education -->
        <div class="block">
          <h2 class="section-title"><span class="outlined-circle" data-letter="E">Education</span></h2>
          <div class="stack">
            <div>
              <p class="period">2029 - 2030</p>
              <p class="org">Borcelle University</p>
              <ul class="list indented">
                <li>Master of Business Management</li>
              </ul>
            </div>
            <div>
              <p class="period">2025 - 2029</p>
              <p class="org">Borcelle University</p>
              <ul class="list indented">
                <li>Bachelor of Business Management</li>
                <li>GPA: 3.8 / 4.0</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Skills -->
        <div class="block">
          <h2 class="section-title"><span class="outlined-circle" data-letter="S">Skills</span></h2>
          <ul class="list indented tight">
            <li>Project Management</li>
            <li>Public Relations</li>
            <li>Teamwork</li>
            <li>Time Management</li>
            <li>Leadership</li>
            <li>Effective Communication</li>
            <li>Critical Thinking</li>
          </ul>
        </div>

        <!-- Languages -->
        <div class="block">
          <h2 class="section-title"><span class="outlined-circle" data-letter="L">Languages</span></h2>
          <ul class="list indented tight">
            <li>English: Fluent</li>
            <li>French: Fluent</li>
            <li>German: Basics</li>
            <li>Spanish: Intermediate</li>
          </ul>
        </div>
      </section>

      <!-- Right Column -->
      <section class="card col-right">
        <!-- Profile Summary -->
        <div class="block">
          <h2 class="section-title"><span class="outlined-circle" data-letter="P">Profile Summary</span></h2>
          <p class="para">Experienced and results-driven Marketing Manager with a proven track record in developing and executing successful marketing strategies. I am seeking a challenging role where I can contribute my skills in strategic planning, team leadership, and creative problem-solving to achieve business objectives.</p>
        </div>

        <!-- Work Experience -->
        <div class="block">
          <h2 class="section-title"><span class="outlined-circle" data-letter="W">Work Experience</span></h2>

          <article class="job">
            <header class="job-head">
              <div>
                <h3 class="job-title">Borcelle Studio</h3>
                <p class="job-role">Marketing Manager &amp; Specialist</p>
              </div>
              <time class="job-time">2030 - PRESENT</time>
            </header>
            <ul class="list indented tight">
              <li>Led the development and implementation of comprehensive marketing strategies that resulted in a 20% increase in brand visibility and a 15% growth in sales within the first year.</li>
              <li>Successfully launched and managed multiple cross-channel campaigns, including digital marketing, social media, and traditional advertising, resulting in improved customer acquisition and retention rates.</li>
            </ul>
          </article>

          <article class="job">
            <header class="job-head">
              <div>
                <h3 class="job-title">Fauget Studio</h3>
                <p class="job-role">Marketing Manager &amp; Specialist</p>
              </div>
              <time class="job-time">2025 - 2029</time>
            </header>
            <ul class="list indented tight">
              <li>Conducted market research to identify emerging trends and consumer preferences, providing valuable insights for product development and positioning.</li>
              <li>Oversaw the creation of engaging content for various platforms, collaborating with internal teams and external agencies to ensure brand consistency and relevance.</li>
            </ul>
          </article>

          <article class="job">
            <header class="job-head">
              <div>
                <h3 class="job-title">Studio Shodwe</h3>
                <p class="job-role">Marketing Manager &amp; Specialist</p>
              </div>
              <time class="job-time">2024 - 2025</time>
            </header>
            <ul class="list indented tight">
              <li>Developed and executed targeted marketing campaigns, resulting in a 25% increase in lead generation.</li>
              <li>Implemented SEO strategies that improved website traffic by 30%, enhancing online visibility and positioning the company.</li>
              <li>Collaborated with sales teams to create effective sales collateral, presentations, and promotional materials.</li>
            </ul>
          </article>
        </div>
      </section>
    </main>
  </div>
</body>
</html>