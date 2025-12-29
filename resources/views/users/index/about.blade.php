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
       <section id="about-us">
  <div class="container">
    <h1>About {{ config('app.name') }}</h1>

    <p>
      <strong>{{ config('app.name') }}</strong> is a digital earning and engagement platform built to provide users with multiple
      opportunities to earn, learn, and grow online. We combine technology, education, and entertainment
      to create a transparent and user-focused ecosystem.
    </p>

    <p>
      Our platform offers diverse earning features including <strong>Click to Earn</strong>,
      <strong>TapSwap</strong>, <strong>Ludo Games</strong>, <strong>WhatsApp Earnings</strong>,
      <strong>Skill Monetization</strong>, and access to <strong>Forex training and educational signals</strong>.
      These services are designed to be accessible, fair, and rewarding for all eligible users.
    </p>

    <p>
      {{ config('app.name') }} is officially registered with the
      <strong>Small and Medium Enterprises Development Agency of Nigeria (SMEDAN)</strong>
      under registration number <strong>SUIN259182527971</strong>.
      While we operate as a recognized business entity in Nigeria, users are responsible for ensuring
      that their use of our services complies with applicable local laws and regulations.
    </p>

    <p>
      We place a strong emphasis on <strong>security, fairness, and fraud prevention</strong>.
      Automated systems, multiple accounts, or any form of abuse are strictly prohibited to protect
      the integrity of our platform and our users.
    </p>

    <p>
      Please note that <strong>{{ config('app.name') }} is not a financial institution</strong> and does not provide
      investment or financial advice. Earnings, especially those related to forex education,
      involve risk and may vary based on user participation and market conditions.
    </p>

    <p>
      At {{ config('app.name') }}, we are committed to continuous improvement and innovation. We may update or enhance
      our services from time to time to better serve our growing community while maintaining
      transparency through our published policies and terms.
    </p>
  </div>
</section>

    </section>
@endsection