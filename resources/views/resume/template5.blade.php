<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebastian Bennett - Resume</title>
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
        .header .contact {
            font-size: 12px;
            margin-top: 5px;
        }
        .header .contact p {
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
            font-weight: bold; /* Makes "Dear Ms. Darcy" bold as per image */
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
        <h1>Sebastian Bennett</h1>
        <div class="contact">
            <p>403-555-1234</p>
            <p>hello@reallygreatsite.com</p>
        </div>
    </div>
    <div class="date">25th August 2025</div>
    <div class="contact-info">
        <p>Estelle Darcy</p>
        <p>Recruitment Specialist</p>
        <p>123 Anywhere St.</p>
        <p>Any City, 12345</p>
    </div>
    <div class="content">
        <p>Dear Ms. Darcy,</p>
        <p>I am writing to professionally introduce myself as a prospective employer. Your goal in writing your cover letter should be to encourage the employer to read your resume and consider you for a specific position. Keep your cover letter to one page, using concise language to convey your qualifications and enthusiasm for the role. Take care to tailor your cover letter to each job application, emphasizing relevant skills and accomplishments that align with the job description.</p>
        <p>Yes, you should mention a professional email address in your cover letter, as well as examples and events that may offer clues about your work ethic, skills, or personality. This can include questions about the position, such as the salary range, benefits, and company culture. Remember to thank the employer for their time and consideration, and include a call to action inviting them to contact you for an interview.</p>
    </div>
    <div class="signature">
        <p>Sincerely,</p>
        <p>Sebastian Bennett</p>
    </div>
</body>
</html>