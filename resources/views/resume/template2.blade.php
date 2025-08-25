<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olivia Wilson - Resume</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 30px;
            line-height: 1.5;
            text-align: justify;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 20px;
            border-bottom: 1px solid #000;
            padding-bottom: 10px;
        }
        .header .name {
            text-align: left;
        }
        .header .name h1 {
            margin: 0;
            font-size: 28px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .header .name p {
            margin: 2px 0;
            font-size: 14px;
        }
        .header .contact {
            text-align: right;
            font-size: 12px;
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
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
            text-transform: uppercase;
        }
        .content {
            font-size: 12px;
        }
        .content p {
            margin: 8px 0;
            /* No text-indent to match image alignment */
        }
        .content p:first-child {
            font-weight: bold; /* Makes "Dear Helene" bold as per image */
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
        <div class="name">
            <h1>OLIVIA WILSON</h1>
            <p>Account Manager</p>
        </div>
        <div class="contact">
            <p>+123-456-7890</p>
            <p>hello@reallygreatsite.com</p>
            <p>123 Anywhere St., Any City</p>
        </div>
    </div>
    <div class="date">25th August 2025</div>
    <div class="contact-info">
        <p>Helene Paquet</p>
        <p>Hiring Manager, Really Great Place</p>
        <p>+123-456-7890</p>
        <p>hello@reallygreatsite.com</p>
        <p>123 Anywhere St., Any City</p>
    </div>
    <div class="section">
        <h2>JOB REFERENCE: SENIOR ACCOUNT MANAGER</h2>
        <div class="content">
            <p>Dear Helene,</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
        </div>
        <div class="signature">
            <p>Sincerely,</p>
            <p>Olivia Wilson</p>
            <p><em>Olivia Wilson</em></p> <!-- Placeholder for signature styling -->
        </div>
    </div>
</body>
</html>