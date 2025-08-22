<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Olivia Wilson - Marketing Manager</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Custom style for outlined circle behind letters in section titles */
    .outlined-circle {
      position: relative;
      display: inline-block;
      font-weight: 700;
      color: #374151; /* Tailwind gray-700 */
    }
    .outlined-circle::before {
      content: attr(data-letter);
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      font-size: 3rem;
      font-weight: 900;
      color: #d1d5db; /* Tailwind gray-300 */
      z-index: -1;
      user-select: none;
      opacity: 0.3;
      font-family: 'Arial Black', Arial, sans-serif;
      letter-spacing: 0;
    }
  </style>
</head>
<body class="bg-white text-gray-800 leading-relaxed font-sans max-w-6xl mx-auto p-4 md:p-8 print:p-0">

  <header class="border-b border-gray-300 pb-4 mb-8 print:border-none print:mb-0 print:pb-0">
    <h1 class="text-4xl md:text-5xl font-extrabold tracking-widest uppercase text-center relative z-10 select-none">
      OLIVIA WILSON
      <span aria-hidden="true" class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-gray-300 text-[6rem] font-black opacity-20 pointer-events-none select-none"
        style="font-family: 'Brush Script MT', cursive, serif; user-select:none; letter-spacing: 2px;">OW</span>
    </h1>
    <p class="text-center text-lg md:text-xl text-gray-600 mt-1 tracking-wide">MARKETING MANAGER</p>
  </header>

  <main class="grid grid-cols-1 md:grid-cols-12 gap-6 md:gap-10">

    <!-- Left Column -->
    <section class="md:col-span-4 border border-gray-300 p-6 md:p-8 flex flex-col justify-start space-y-10 print:border-none print:p-0">

      <!-- Contact -->
      <div>
        <h2 class="text-xl font-bold mb-4 uppercase tracking-wide">
          <span class="outlined-circle" data-letter="C">Contact</span>
        </h2>
        <ul class="space-y-2 text-gray-700 text-sm md:text-base">
          <li class="flex items-center">
            <svg class="w-5 h-5 mr-2 text-gray-500 shrink-0" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.93 19.93 0 0 1 3 5.18 2 2 0 0 1 5 3h3a2 2 0 0 1 2 1.72 12.15 12.15 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L9 11a16 16 0 0 0 6 6l1.36-1.15a2 2 0 0 1 2.11-.45 12.15 12.15 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            <span>+123-456-7890</span>
          </li>
          <li class="flex items-center">
            <svg class="w-5 h-5 mr-2 text-gray-500 shrink-0" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M4 4h16v16H4z"></path><path d="M22 4L12 13 2 4"></path></svg>
            <span>hello@reallygreatsite.com</span>
          </li>
          <li class="flex items-center">
            <svg class="w-5 h-5 mr-2 text-gray-500 shrink-0" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M21 10c0 6-9 12-9 12S3 16 3 10a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
            <span>123 Anywhere St., Any City</span>
          </li>
          <li class="flex items-center">
            <svg class="w-5 h-5 mr-2 text-gray-500 shrink-0" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15 15 0 0 1 0 20"></path></svg>
            <span>www.reallygreatsite.com</span>
          </li>
        </ul>
      </div>

      <!-- Education -->
      <div>
        <h2 class="text-xl font-bold mb-4 uppercase tracking-wide">
          <span class="outlined-circle" data-letter="E">Education</span>
        </h2>
        <div class="text-gray-800 text-sm md:text-base space-y-4">
          <div>
            <p class="font-semibold">2029 - 2030</p>
            <p class="font-bold uppercase">Borcelle University</p>
            <ul class="list-disc pl-5 mt-1">
              <li>Master of Business Management</li>
            </ul>
          </div>
          <div>
            <p class="font-semibold">2025 - 2029</p>
            <p class="font-bold uppercase">Borcelle University</p>
            <ul class="list-disc pl-5 mt-1">
              <li>Bachelor of Business Management</li>
              <li>GPA: 3.8 / 4.0</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Skills -->
      <div>
        <h2 class="text-xl font-bold mb-4 uppercase tracking-wide">
          <span class="outlined-circle" data-letter="S">Skills</span>
        </h2>
        <ul class="list-disc pl-5 space-y-1 text-gray-700 text-sm md:text-base">
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
      <div>
        <h2 class="text-xl font-bold mb-4 uppercase tracking-wide">
          <span class="outlined-circle" data-letter="L">Languages</span>
        </h2>
        <ul class="list-disc pl-5 space-y-1 text-gray-700 text-sm md:text-base">
          <li>English: Fluent</li>
          <li>French: Fluent</li>
          <li>German: Basics</li>
          <li>Spanish: Intermediate</li>
        </ul>
      </div>
    </section>

    <!-- Right Column -->
    <section class="md:col-span-8 border border-gray-300 p-6 md:p-8 flex flex-col justify-start space-y-8 print:border-none print:p-0">
      <!-- Profile Summary -->
      <div>
        <h2 class="text-xl font-bold mb-4 uppercase tracking-wide">
          <span class="outlined-circle" data-letter="P">Profile Summary</span>
        </h2>
        <p class="text-gray-700 text-sm md:text-base">
          Experienced and results-driven Marketing Manager with a proven track record in developing and executing successful marketing strategies. I am seeking a challenging role where I can contribute my skills in strategic planning, team leadership, and creative problem-solving to achieve business objectives.
        </p>
      </div>

      <!-- Work Experience -->
      <div>
        <h2 class="text-xl font-bold mb-6 uppercase tracking-wide">
          <span class="outlined-circle" data-letter="W">Work Experience</span>
        </h2>

        <article class="mb-6">
          <header class="flex justify-between items-start mb-2">
            <div>
              <h3 class="text-lg font-semibold">Borcelle Studio</h3>
              <p class="italic text-gray-700 text-sm">Marketing Manager & Specialist</p>
            </div>
            <time class="text-gray-500 text-sm">2030 - PRESENT</time>
          </header>
          <ul class="list-disc pl-5 space-y-1 text-gray-700 text-sm md:text-base">
            <li>Led the development and implementation of comprehensive marketing strategies that resulted in a 20% increase in brand visibility and a 15% growth in sales within the first year.</li>
            <li>Successfully launched and managed multiple cross-channel campaigns, including digital marketing, social media, and traditional advertising, resulting in improved customer acquisition and retention rates.</li>
          </ul>
        </article>

        <article class="mb-6">
          <header class="flex justify-between items-start mb-2">
            <div>
              <h3 class="text-lg font-semibold">Fauget Studio</h3>
              <p class="italic text-gray-700 text-sm">Marketing Manager & Specialist</p>
            </div>
            <time class="text-gray-500 text-sm">2025 - 2029</time>
          </header>
          <ul class="list-disc pl-5 space-y-1 text-gray-700 text-sm md:text-base">
            <li>Conducted market research to identify emerging trends and consumer preferences, providing valuable insights for product development and positioning.</li>
            <li>Oversaw the creation of engaging content for various platforms, collaborating with internal teams and external agencies to ensure brand consistency and relevance.</li>
          </ul>
        </article>

        <article>
          <header class="flex justify-between items-start mb-2">
            <div>
              <h3 class="text-lg font-semibold">Studio Shodwe</h3>
              <p class="italic text-gray-700 text-sm">Marketing Manager & Specialist</p>
            </div>
            <time class="text-gray-500 text-sm">2024 - 2025</time>
          </header>
          <ul class="list-disc pl-5 space-y-1 text-gray-700 text-sm md:text-base">
            <li>Developed and executed targeted marketing campaigns, resulting in a 25% increase in lead generation.</li>
            <li>Implemented SEO strategies that improved website traffic by 30%, enhancing online visibility and positioning the company.</li>
            <li>Collaborated with sales teams to create effective sales collateral, presentations, and promotional materials.</li>
          </ul>
        </article>
      </div>
    </section>
  </main>
</body>
</html>