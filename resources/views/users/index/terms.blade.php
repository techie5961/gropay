@extends('layout.users.index')
@section('title')
    About Us
@endsection
@section('css')
    <style class="css">
         .hero-title{
            font-size:2rem;
            font-weight:900;
            text-align: center;
            background:var(--gradient);
           color:transparent;
            background-clip:text;
            -webkit-background-clip: text;
        }
    </style>
@endsection
@section('main')
    <section class="column g-10 w-full p-10">
      <section class="terms-conditions">
    <div class="legal-header">
        <span class="hero-title">Terms & Conditions</span>
    
        <div class="legal-notice">Please read these Terms and Conditions carefully before using the {{  config('app.name') }} platform.</div>
    </div>

       <div class="container">

        <!-- Terms Sections -->
                <div class="terms-section" id="acceptance">
                    <h2>1. Acceptance of Terms</h2>
                    <p>By accessing and using the {{  config('app.name') }} platform (the "Service"), you accept and agree to be bound by the terms and provisions of this agreement. In addition, when using this Service, you shall be subject to any posted guidelines or rules applicable to such services. Any participation in this Service will constitute acceptance of this agreement. If you do not agree to abide by the above, please do not use this Service.</p>
                    <p>These Terms of Service apply to all users of the Service, including without limitation users who are browsers, vendors, customers, merchants, and/or contributors of content.</p>
                </div>

                <div class="terms-section" id="eligibility">
                    <h2>2. Eligibility</h2>
                    <p>To be eligible to use the {{  config('app.name') }} Service, you must:</p>
                    <ul>
                        <li>Be at least 18 years of age</li>
                        <li>Possess the legal authority to create a binding legal obligation</li>
                        <li>Not be barred from receiving services under applicable law</li>
                        <li>Reside in a jurisdiction where the Service is available</li>
                        <li>Provide accurate and complete registration information</li>
                    </ul>
                    <div class="highlight-box">
                        <p><strong>Important:</strong> {{  config('app.name') }} is officially registered with SMEDAN (Small And Medium Enterprises Development Agency of Nigeria) with registration number SUIN259182527971. However, users are responsible for ensuring that use of our services complies with local laws and regulations in their jurisdiction.</p>
                    </div>
                </div>

                <div class="terms-section" id="account">
                    <h2>3. Account Registration</h2>
                    <p>To access certain features of the Service, you must register for an account. When you register, you agree to:</p>
                    <ul>
                        <li>Provide accurate, current, and complete information</li>
                        <li>Maintain and promptly update your account information</li>
                        <li>Maintain the security of your password and accept all risks of unauthorized access</li>
                        <li>Notify us immediately if you discover or suspect any security breaches</li>
                        <li>Take responsibility for all activities that occur under your account</li>
                    </ul>
                    <p>You may not create an account for anyone other than yourself without permission. You may not create more than one personal account. If we disable your account, you will not create another one without our permission.</p>
                </div>

                <div class="terms-section" id="services">
                    <h2>4. Services Description</h2>
                    <p>{{  config('app.name') }} provides multiple earning opportunities through various features including but not limited to:</p>
                    <ol>
                        <li><strong>Click to Earn:</strong> Users can earn MetaGro coins by clicking on designated content</li>
                        <li><strong>Forex Training:</strong> Educational content and signals for forex trading</li>
                        <li><strong>Ludo Games:</strong> Gaming platform where users can earn rewards</li>
                        <li><strong>TapSwap:</strong> Tapping mechanism to accumulate rewards</li>
                        <li><strong>WhatsApp Earnings:</strong> Monetization of social media engagement</li>
                        <li><strong>Skill Monetization:</strong> Platform for selling services and skills</li>
                    </ol>
                    <p>We reserve the right to modify, suspend, or discontinue any part of the Service at any time without prior notice.</p>
                </div>

                <div class="terms-section" id="earnings">
                    <h2>5. Earnings & Withdrawals</h2>
                    <p>Earnings on {{  config('app.name') }} are subject to the following conditions:</p>
                    <ul>
                        <li>All earnings are calculated based on the specific earning method used</li>
                        <li>Minimum withdrawal amounts apply to each earning method</li>
                        <li>Withdrawal processing times may vary (typically 1-7 business days)</li>
                        <li>We reserve the right to verify the legitimacy of earnings before processing withdrawals</li>
                        <li>Tax obligations related to earnings are the sole responsibility of the user</li>
                        <li>We may impose limits on withdrawals for security and fraud prevention</li>
                    </ul>
                    <div class="highlight-box">
                        <p><strong>Note:</strong> {{  config('app.name') }} is not a financial institution and does not provide investment advice. Earnings from forex trading involve risk, and past performance does not guarantee future results.</p>
                    </div>
                </div>

                <div class="terms-section" id="prohibited">
                    <h2>6. Prohibited Activities</h2>
                    <p>You agree not to engage in any of the following prohibited activities:</p>
                    <ul>
                        <li>Using automated systems, bots, or scripts to generate earnings</li>
                        <li>Creating multiple accounts to exploit referral systems</li>
                        <li>Engaging in fraudulent activities or misrepresentation</li>
                        <li>Attempting to circumvent security measures</li>
                        <li>Harassing, abusing, or harming another person</li>
                        <li>Violating any applicable laws or regulations</li>
                        <li>Infringing upon intellectual property rights</li>
                        <li>Distributing viruses or other harmful computer code</li>
                        <li>Collecting information about others without their consent</li>
                    </ul>
                    <p>Violation of these prohibitions may result in termination of your account and forfeiture of any earnings.</p>
                </div>

                <div class="terms-section" id="intellectual">
                    <h2>7. Intellectual Property</h2>
                    <p>The Service and its original content, features, and functionality are and will remain the exclusive property of {{  config('app.name') }} and its licensors. The Service is protected by copyright, trademark, and other laws of both Nigeria and foreign countries. Our trademarks and trade dress may not be used in connection with any product or service without the prior written consent of {{  config('app.name') }}.</p>
                    <p>You retain your rights to any content you submit, post, or display on or through the Service. By submitting content, you grant us a worldwide, non-exclusive, royalty-free license to use, reproduce, modify, and display such content in connection with the Service.</p>
                </div>

                <div class="terms-section" id="termination">
                    <h2>8. Termination</h2>
                    <p>We may terminate or suspend your account and bar access to the Service immediately, without prior notice or liability, under our sole discretion, for any reason whatsoever and without limitation, including but not limited to a breach of the Terms.</p>
                    <p>If you wish to terminate your account, you may simply discontinue using the Service. All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity, and limitations of liability.</p>
                </div>

                <div class="terms-section" id="disclaimer">
                    <h2>9. Disclaimer</h2>
                    <p>Your use of the Service is at your sole risk. The Service is provided on an "AS IS" and "AS AVAILABLE" basis. The Service is provided without warranties of any kind, whether express or implied, including, but not limited to, implied warranties of merchantability, fitness for a particular purpose, non-infringement, or course of performance.</p>
                    <p>{{  config('app.name') }}, its subsidiaries, affiliates, and its licensors do not warrant that:</p>
                    <ul>
                        <li>The Service will function uninterrupted, secure, or available at any particular time or location</li>
                        <li>Any errors or defects will be corrected</li>
                        <li>The Service is free of viruses or other harmful components</li>
                        <li>The results of using the Service will meet your requirements</li>
                    </ul>
                </div>

                <div class="terms-section" id="liability">
                    <h2>10. Limitation of Liability</h2>
                    <p>In no event shall {{  config('app.name') }}, nor its directors, employees, partners, agents, suppliers, or affiliates, be liable for any indirect, incidental, special, consequential, or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses, resulting from:</p>
                    <ul>
                        <li>Your access to or use of or inability to access or use the Service</li>
                        <li>Any conduct or content of any third party on the Service</li>
                        <li>Any content obtained from the Service</li>
                        <li>Unauthorized access, use, or alteration of your transmissions or content</li>
                    </ul>
                    <p>This limitation of liability section applies whether the alleged liability is based on contract, tort, negligence, strict liability, or any other basis, even if {{  config('app.name') }} has been advised of the possibility of such damage.</p>
                </div>

                <div class="terms-section" id="indemnification">
                    <h2>11. Indemnification</h2>
                    <p>You agree to defend, indemnify, and hold harmless {{  config('app.name') }} and its licensee and licensors, and their employees, contractors, agents, officers, and directors, from and against any and all claims, damages, obligations, losses, liabilities, costs or debt, and expenses (including but not limited to attorney's fees), resulting from or arising out of:</p>
                    <ol>
                        <li>Your use and access of the Service</li>
                        <li>Your violation of any term of these Terms</li>
                        <li>Your violation of any third-party right, including without limitation any copyright, property, or privacy right</li>
                        <li>Any claim that your content caused damage to a third party</li>
                    </ol>
                </div>

                <div class="terms-section" id="modifications">
                    <h2>12. Modifications</h2>
                    <p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material, we will provide at least 30 days' notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>
                    <p>By continuing to access or use our Service after any revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, you are no longer authorized to use the Service.</p>
                </div>

                <div class="terms-section" id="governing">
                    <h2>13. Governing Law</h2>
                    <p>These Terms shall be governed and construed in accordance with the laws of Nigeria, without regard to its conflict of law provisions.</p>
                    <p>Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect.</p>
                </div>

    </div>
</section>
    </section>
@endsection