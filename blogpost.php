<?php
	session_start();
    include('db_connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Unveiling The Pink Ribbon</title>
<link rel="stylesheet" href="styles/blogpost.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Istok+Web:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
  <header>
    <h1>Unveiling The Pink Ribbon</h1>
    <div class="author-date">
      <span class="author">By Rita Okonkwo</span>
      <span class="date">17th October, 2023</span>
    </div>
  </header>
  <main>
    <article>
      <img src="assets/blog-1.png" alt="Group holding pink ribbon" class="main-image">
      <h3>Unveiling the Pink Ribbon: A Symbol of Hope and Solidarity Against Breast Cancer</h3>
      <p>October is Breast Cancer Awareness Month, a time to raise awareness about the disease and support those affected by it. The pink ribbon has become a global symbol of hope and solidarity in the fight against breast cancer.</p>
      <h3>The History of the Pink Ribbon</h3>
      <p>The pink ribbon campaign began in 1991 when Susan G. Komen for the Cure distributed pink ribbons to participants in its Race for the Cure. The ribbon was chosen because it was a color that was not traditionally associated with any particular disease, and it was hoped that it would appeal to a wide range of people.</p>
      <p> The pink ribbon campaign quickly became a global phenomenon, and it is now used by organizations around the world to raise awareness and support for breast cancer research and prevention.</p>
      <hs>The Meaning of the Pink Ribbon</hs>
      <p>The pink ribbon has come to symbolize many things related to breast cancer, including: </p>
      <ul> 
        <li> Hope: The pink ribbon is a symbol of hope for those who are fighting breast cancer and for their loved ones. It is a reminder that they are not alone and that there are people who care about them and are supporting them.</li>
        <li> Awareness: The pink ribbon is a symbol of awareness about breast cancer. It is a reminder that breast cancer is a serious disease that can affect anyone, regardless of age, race, or gender.</li>
        <li> Solidarity: The pink ribbon is a symbol of solidarity against breast cancer. It is a reminder that we are all united in the fight against this disease.</li>
      </ul>

      <h3>How to Support the Pink Ribbon Campaign</h3>
      <P> There are many ways to support the pink ribbon campaign. Here are a few ideas:</P>
      <ul>
        <li>Donate to a breast cancer organization. There are many organizations working to raise awareness and support for breast cancer research and prevention. You can donate to a local organization or to a national organization such as Susan G. Komen for the Cure or the American Cancer Society.</li>
        <li>Volunteer your time. Many breast cancer organizations rely on volunteers to help with their work. You can volunteer to help with fundraising events, to provide support to patients and their families, or to raise awareness about breast cancer.</li>
        <li>Wear pink. Wearing pink is a simple way to show your support for the pink ribbon campaign. You can wear a pink ribbon, pink clothing, or pink accessories.</li>
        <li>Talk about breast cancer. Talk to your friends, family, and colleagues about breast cancer. Help to educate others about the disease and the importance of early detection and treatment.</li>
      </ul>
    </article>
    <aside>
      <section class="popular-posts">
        <h4>Popular Posts</h4>
        <article class="post">
            <img src="assets/blog-3.png" alt="How to spot counterfeit drugs." class="post-thumbnail">
            <div class="post-content">
              <h5 class="post-title">How to spot counterfeit drugs.</h5>
              <p class="post-excerpt">Learn the telltale signs of fake medications to ensure your safety...</p>
            </div>
          </article>
          <article class="post">
            <img src="assets/blog-2.png" alt="How to stay safe when taking medications." class="post-thumbnail">
            <div class="post-content">
              <h5 class="post-title">How to stay safe when taking medications.</h5>
              <p class="post-excerpt">Medication safety is crucial. Find out what steps you can take to stay safe...</p>
            </div>
          </article>
      </section>
      <section class="advertisement">
            <h4>Advertisement</h4>
            <div class="ad-content">
              <p>Get tested for HIV/AIDS and get free consultation. Sponsored by Vedic Hospital. Do not miss out on this opportunity! Sign up here now!</p>
              <button class="btn-signup">Sign Up</button>
            </div>
          </section>
          <section class="comments">
            <h4>Comments</h4>
            <div class="comment" id="comment-1">
              <p class="comment-author">Somide Favour</p>
              <p class="comment-text">This is so encouraging to see, I love it!</p>
            </div>
            <div class="comment" id="comment-2">
              <p class="comment-author">Akin Oba Arika</p>
              <p class="comment-text">I'm so inspired by the stories of breast cancer survivors. Their strength and resilience is truly remarkable.</p>
            </div>
           
          </section>
        </aside>
  </main>
  <footer>
    <p>Good or bad, we'd love to hear your thoughts. Find us on X (@safe_meds)</p>
    <div class="related-articles">
      <h2>Related Articles</h2>
      <div class="articles-list">
        <article class="related-article">
          <img src="assets/blog-5.png"The Future of Drug Safety">
          <h4 class="related-article-title">The Future of Drug Safety</h4>
          <p class="related-article-summary">What does the future hold for drug safety? This blog post will discuss some of the latest trends in drug safety and how they may impact the way we take medication in the future.</p>
        </article>
        <article class="related-article">
          <img src="assets/blog-6.png" alt="The HPV">
          <h4 class="related-article-title">The HPV</h4>
          <p class="related-article-summary">Human papillomavirus (HPV) is a common virus that can cause a variety of health problems, including genital warts and cervical cancer.</p>
        </article>
    </div>
  </footer>
</div>
</body>
</html>
