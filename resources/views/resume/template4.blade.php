<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gilbert Lacroix - Resume</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 30px;
            line-height: 1.5;
            text-align: justify;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #000;
            padding-bottom: 10px;
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
        .contact {
            font-size: 12px;
            text-align: center;
            margin-bottom: 20px;
        }
        .contact p {
            margin: 2px 0;
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
            font-weight: bold; /* Makes "Dear Karen Marks" bold as per image */
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
        <h1>GILBERT LACROIX</h1>
        <p>Web Developer | INTERESTINGSITE.COM</p>
    </div>
    <div class="contact">
        <p>303.555.1234 | DENVER, CO | GILBERT@EXAMPLE.COM | WWW.INTERESTINGSITE.COM</p>
    </div>
    <div class="date">25th August 2025</div>
    <div class="contact-info">
        <p>Hiring Manager</p>
        <p>Adventure Corp.</p>
        <p>456 7th Street</p>
        <p>San Jose, CA 95101</p>
    </div>
    <div class="content">
        <p>Dear Karen Marks,</p>
        <p>I am writing to express my interest in the Web Developer position at Beyond Adventure Corp. where I’d be thrilled to contribute my dynamic, results-driven development skills and experience in a fast-paced, front-end and web development role. I have developed strong skills in building responsive, user-friendly, and scalable websites and applications, implemented custom CSS solutions to enhance user experience, and optimized applications for maximum speed and scalability.</p>
        <p>I am excited about the opportunity to contribute to Beyond Adventure’s innovative websites that meet and exceed customer expectations. My ability to develop high-quality, secure web applications, along with my expertise in programming languages, aligns with the goals of Beyond Adventure Corp. Thank you for considering my application. I look forward to discussing how my skills and experience align with the goals of Beyond Adventure.</p>
    </div>
    <div class="signature">
        <p>Sincerely,</p>
        <p>Gilbert Lacroix</p>
    </div>
</body>
</html>