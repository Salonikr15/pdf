<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elizabeth Wallace - Resume</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 30px;
            line-height: 1.5;
            text-align: justify;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .header p {
            margin: 2px 0;
            font-size: 14px;
        }
        .date {
            text-align: right;
            font-size: 12px;
            margin-bottom: 10px;
        }
        .contact-info {
            margin-bottom: 20px;
            font-size: 12px;
            text-align: left;
        }
        .contact-info p {
            margin: 2px 0;
        }
        .content {
            font-size: 12px;
        }
        .content p {
            margin: 8px 0;
            /* No text-indent to match image alignment */
        }
        .content p:first-child {
            font-weight: bold; /* Makes "Dear Mr. Johnson" bold */
        }
        .signature {
            margin-top: 20px;
            text-align: left;
            font-size: 12px;
        }
        .signature p {
            margin: 2px 0;
        }
        /* DOMPDF compatibility */
        @page {
            margin: 20mm;
        }
        @media print {
            body {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>ELIZABETH WALLACE</h1>
        <p>Career Consultant | Resume Writer</p>
        <p><a href="mailto:elizabeth.wallace@gmail.com">elizabeth.wallace@gmail.com</a> | <a href="linkedin.com/in/elizabeth-wallace">linkedin.com/in/elizabeth-wallace</a> | (555) 555-1234</p>
    </div>
    <div class="date">October 7, 2022</div>
    <div class="contact-info">
        <p>Mr. Johnson</p>
        <p>Human Resources</p>
        <p>HeartResumes</p>
        <p>456 Employment Way</p>
        <p>Manhattan, NY 10044</p>
    </div>
    <div class="content">
        <p>Dear Mr. Johnson,</p>
        <p>I am hoping to learn about any potential employment opportunities at HeartResumes. I think highly of the company and would love to learn more about it. Based on what I already know, HeartResumes’ company culture and approach to customer service are what interest me most.</p>
        <p>As a career consultant, I’ve worn many hats but am most excited about success in client relationships. Over 1 million scans of my jobs helped my clients land better jobs, faster, which is where my passion lies.</p>
        <p>I look forward to hearing back from you. If there are no current openings or upcoming ones, please feel free to keep my resume on file and contact me in the future. I can be reached at elizabeth.wallace@gmail.com or by phone at (555) 555-1234. Thank you!</p>
    </div>
    <div class="signature">
        <p>Sincerely,</p>
        <p>Elizabeth Wallace</p>
    </div>
</body>
</html>