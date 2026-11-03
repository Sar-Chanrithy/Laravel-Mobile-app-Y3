<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae - Sar Chanrithy</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Google Fonts: Georgia/Merriweather look -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #e5e9ee;
            font-family: 'Merriweather', Georgia, serif;
            color: #222222;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            padding: 30px 15px;
        }

        /* CV Card Container */
        .cv-container {
            width: 100%;
            max-width: 860px;
            background: #ffffff;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.18);
            display: flex;
            min-height: 1200px;
        }

        /* ================= LEFT COLUMN ================= */
        .left-col {
            width: 42%;
            background-color: #173244;
            color: #ffffff;
            padding: 45px 28px;
            display: flex;
            flex-direction: column;
        }

        /* Header in Left Column */
        .name-title {
            text-align: center;
            margin-bottom: 25px;
        }

        .name-title h1 {
            font-size: 1.85rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 6px;
            letter-spacing: 0.5px;
        }

        .name-title h2 {
            font-size: 1.15rem;
            font-weight: 400;
            color: #e2e8f0;
            font-style: italic;
        }

        /* Profile Photo */
        .profile-box {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }

        .profile-img {
            width: 145px;
            height: 145px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #ffffff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.35);
        }

        /* Contact Details */
        .contact-list {
            list-style: none;
            margin-bottom: 30px;
        }

        .contact-list li {
            display: flex;
            align-items: center;
            font-size: 0.8rem;
            color: #e5eaf0;
            margin-bottom: 12px;
            word-break: break-all;
            line-height: 1.4;
        }

        .contact-list li i {
            width: 22px;
            font-size: 0.9rem;
            color: #ffffff;
            margin-right: 8px;
            text-align: center;
            flex-shrink: 0;
        }

        .contact-list li a {
            color: #e5eaf0;
            text-decoration: none;
        }

        .contact-list li a:hover {
            text-decoration: underline;
        }

        /* Left Column Section Banner */
        .left-banner {
            background-color: rgba(255, 255, 255, 0.12);
            color: #ffffff;
            font-size: 0.95rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            text-align: center;
            padding: 8px 12px;
            border-radius: 4px;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        /* Summary Paragraph */
        .summary-text {
            font-size: 0.8rem;
            line-height: 1.7;
            color: #edf2f7;
            text-align: justify;
            margin-bottom: 30px;
        }

        .summary-text strong {
            color: #ffffff;
            font-weight: 700;
        }

        /* Languages */
        .languages-list {
            list-style: none;
        }

        .languages-list li {
            font-size: 0.85rem;
            color: #edf2f7;
            margin-bottom: 8px;
            padding-left: 6px;
        }

        /* ================= RIGHT COLUMN ================= */
        .right-col {
            width: 58%;
            background-color: #ffffff;
            padding: 45px 35px;
            color: #222222;
        }

        /* Right Section Banner */
        .right-banner {
            background-color: #eeeeee;
            color: #222222;
            font-size: 0.92rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            text-align: center;
            padding: 8px 14px;
            border-radius: 3px;
            margin-top: 10px;
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .right-col .section:first-child .right-banner {
            margin-top: 0;
        }

        .section {
            margin-bottom: 26px;
        }

        /* Bullet lists */
        .content-bullets {
            list-style: disc;
            padding-left: 18px;
        }

        .content-bullets li {
            font-size: 0.82rem;
            line-height: 1.6;
            color: #333333;
            margin-bottom: 10px;
        }

        .content-bullets li strong {
            color: #111111;
        }

        /* Education Blocks */
        .edu-block {
            margin-bottom: 18px;
            font-size: 0.84rem;
        }

        .edu-degree {
            font-weight: 700;
            color: #111111;
            margin-bottom: 2px;
        }

        .edu-school {
            color: #444444;
            margin-bottom: 2px;
        }

        .edu-school a {
            color: #555555;
            text-decoration: none;
            font-size: 0.78rem;
            margin-left: 4px;
        }

        .edu-year {
            color: #666666;
            font-size: 0.78rem;
        }

        /* Skills block */
        .sub-heading {
            font-size: 0.82rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #333333;
            margin-top: 8px;
            margin-bottom: 8px;
            text-align: center;
        }

        .skill-bullets {
            list-style: disc;
            padding-left: 18px;
            margin-bottom: 14px;
        }

        .skill-bullets li {
            font-size: 0.8rem;
            line-height: 1.55;
            color: #333333;
            margin-bottom: 6px;
        }

        .skill-bullets li strong {
            color: #111111;
        }

        /* Responsive Layout */
        @media (max-width: 768px) {
            .cv-container {
                flex-direction: column;
            }
            .left-col, .right-col {
                width: 100%;
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

    <div class="cv-container">
        <!-- ================= LEFT COLUMN ================= -->
        <aside class="left-col">
            <!-- Name & Title -->
            <div class="name-title">
                <h1>Sar Chanrithy</h1>
                <h2>Junior Web developer</h2>
            </div>

            <!-- Profile Photo -->
            <div class="profile-box">
                <img src="{{ asset('profile.png') }}" alt="Sar Chanrithy" class="profile-img">
            </div>

            <!-- Contact List -->
            <ul class="contact-list">
                <li>
                    <i class="fa-solid fa-envelope"></i>
                    <a href="mailto:rithysar78@gmail.com">rithysar78@gmail.com</a>
                </li>
                <li>
                    <i class="fa-solid fa-phone"></i>
                    <span>017830021</span>
                </li>
                <li>
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Phnom Penh , Stueng Mean Chey</span>
                </li>
                <li>
                    <i class="fa-solid fa-link"></i>
                    <a href="https://github.com/Sar-Chanrithy" target="_blank">github.com/Sar-Chanrithy</a>
                </li>
                <li>
                    <i class="fa-brands fa-telegram"></i>
                    <span>Sar Chanrithy</span>
                </li>
            </ul>

            <!-- SUMMARY Section -->
            <div class="left-banner">
                <i class="fa-solid fa-id-card"></i> SUMMARY
            </div>
            <p class="summary-text">
                Motivated and <strong>hardworking</strong> <strong>Information Technology</strong> <strong>student</strong> <strong>at</strong> <strong>the</strong> <strong>National</strong> <strong>University</strong> <strong>of</strong> <strong>Management</strong> <strong>(NUM)</strong> with a strong interest in <strong>Web Development</strong>. Familiar with <strong>HTML</strong>, <strong>CSS</strong>, <strong>JavaScript</strong>, <strong>and</strong> <strong>React.js</strong>, with hands-on experience building personal and academic projects. Eager to <strong>learn</strong> <strong>new</strong> <strong>technologies</strong>, gain <strong>practical</strong> <strong>experience</strong>, <strong>and</strong> <strong>contribute</strong> <strong>to</strong> <strong>real-world</strong> <strong>projects</strong> as a <strong>Web Developer Intern</strong>.
            </p>

            <!-- LANGUAGES Section -->
            <div class="left-banner">
                <i class="fa-solid fa-globe"></i> LANGUAGES
            </div>
            <ul class="languages-list">
                <li>Khmer</li>
                <li>English</li>
            </ul>
        </aside>

        <!-- ================= RIGHT COLUMN ================= -->
        <main class="right-col">
            <!-- PROJECT Section -->
            <section class="section">
                <div class="right-banner">
                    <i class="fa-solid fa-briefcase"></i> PROJECT
                </div>
                <ul class="content-bullets">
                    <li>
                        <strong>Laptop Store Website</strong> — HTML, CSS, JavaScript, Vercel
                    </li>
                    <li>
                        <strong>Clothing E-Commerce Application</strong> — React.js, Tailwind CSS, Vercel
                    </li>
                    <li>
                        <strong>Personal Portfolio Website</strong> — React.js, Tailwind CSS, JavaScript, Vercel
                    </li>
                    <li>
                        <strong>Book Store Website</strong> — Next.js, JavaScript, Tailwind CSS
                    </li>
                </ul>
            </section>

            <!-- EDUCATION Section -->
            <section class="section">
                <div class="right-banner">
                    <i class="fa-solid fa-graduation-cap"></i> EDUCATION
                </div>
                
                <div class="edu-block">
                    <div class="edu-degree">Certificate of Upper Secondary Education (Bac II)</div>
                    <div class="edu-school">Santhormok High School <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a></div>
                    <div class="edu-year">2024</div>
                </div>

                <div class="edu-block">
                    <div class="edu-degree">Associate Degree in Information Technology</div>
                    <div class="edu-school">National Institute of Entrepreneurship and Innovation (NIEI) <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a></div>
                    <div class="edu-year">2024 – 2026</div>
                </div>

                <div class="edu-block">
                    <div class="edu-degree">Bachelor of Information Technology</div>
                    <div class="edu-school">National University of Management (NUM) <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a></div>
                    <div class="edu-year">2024 – Present</div>
                </div>
            </section>

            <!-- SKILLS Section -->
            <section class="section">
                <div class="right-banner">
                    <i class="fa-solid fa-gear"></i> SKILLS
                </div>

                <div class="sub-heading">TECHNICAL SKILLS</div>
                <ul class="skill-bullets">
                    <li><strong>Programming Languages:</strong> JavaScript, Python, PHP</li>
                    <li><strong>Frontend Development:</strong> HTML5, CSS3, React.js, Next.js, Tailwind CSS, Bootstrap</li>
                    <li><strong>Backend Development:</strong> Node.js, FastAPI, Laravel</li>
                    <li><strong>Database Management:</strong> MySQL, PostgreSQL, SQLite</li>
                    <li><strong>API Development:</strong> RESTful API Development and Integration</li>
                    <li><strong>Development Tools:</strong> Git, GitHub, VS Code, Postman</li>
                    <li><strong>Deployment & Hosting:</strong> Vercel, Netlify, Render</li>
                    <li><strong>UI/UX Design Tools:</strong> Figma, Adobe XD, Photoshop, Canva</li>
                </ul>

                <div class="sub-heading">CORE STRENGTHS</div>
                <ul class="skill-bullets">
                    <li><strong>Soft Skills:</strong> Problem-Solving, Teamwork, Communication, Time Management, Adaptability</li>
                    <li><strong>AI-Assisted Development:</strong> Claude Code, Gemini</li>
                    <li><strong>Office Applications:</strong> Microsoft Word, Excel, PowerPoint</li>
                </ul>
            </section>

            <!-- INTERESTS Section -->
            <section class="section">
                <div class="right-banner">
                    <i class="fa-solid fa-rocket"></i> INTERESTS
                </div>
                <ul class="skill-bullets">
                    <li><strong>Coding & Web Development:</strong> Building websites and improving programming skills.</li>
                    <li><strong>Artificial Intelligence:</strong> Exploring AI tools to improve learning and productivity.</li>
                    <li><strong>Technology:</strong> Learning about new technologies and developer tools.</li>
                    <li><strong>Football & Fitness:</strong> Playing football to develop teamwork, discipline, and maintain a healthy lifestyle.</li>
                </ul>
            </section>

            <!-- CERTIFICATES Section -->
            <section class="section">
                <div class="right-banner">
                    <i class="fa-solid fa-certificate"></i> CERTIFICATES
                </div>
                <ul class="skill-bullets">
                    <li><strong>Frontend Web Development Certificate</strong> – ETEC Center (2025)</li>
                    <li><strong>Backend Web Development</strong> – ETEC Center (In Progress)</li>
                    <li><strong>Networking Certificate</strong> – Cisco Networking Academy (2025)</li>
                    <li><strong>English – Pre-Intermediate Level</strong></li>
                    <li><strong>English – Intermediate Level</strong></li>
                    <li><strong>English – Upper-Intermediate Level</strong></li>
                </ul>
            </section>
        </main>
    </div>

</body>
</html>
