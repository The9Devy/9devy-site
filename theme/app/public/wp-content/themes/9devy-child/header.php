<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Custom Meta Tags -->
  <meta name="description" content="9Devy LLC is a premium visual studio specializing in videography, photography, and social media optimization for luxury brands. Elevate your brand's visual story.">
  <meta name="keywords" content="9Devy LLC, visual studio, videography, photography, social media optimization, luxury brands, high-end, digital presence, creative studio, brand building, SEO, UX/UI">

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Custom Theme Styles -->
  <style>
    /* Define color palette: Black, Ivory, Gold */
    :root {
      --color-primary-dark: #1a1a1a; /* Near black */
      --color-secondary-light: #f5f5dc; /* Ivory */
      --color-accent-gold: #FFD700; /* Gold */
      --color-text-dark: #333333;
      --color-text-light: #ffffff;
    }

    /* Body font and default styling */
    body {
      font-family: 'Inter', sans-serif;
      background-color: var(--color-secondary-light);
      color: var(--color-text-dark);
      line-height: 1.6;
    }

    /* Utility classes */
    .bg-primary-dark { background-color: var(--color-primary-dark); }
    .text-accent-gold { color: var(--color-accent-gold); }
    .btn-gold {
      background-color: var(--color-accent-gold);
      color: var(--color-primary-dark);
      padding: 0.75rem 1.5rem;
      border-radius: 0.375rem;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }
    .btn-gold:hover { background-color: #e6c300; }
    /* … include any other CSS you added … */
  </style>

  <!-- JSON-LD Structured Data: Organization -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "9Devy LLC",
    "url": "https://www.9devyllc.com",
    "logo": "https://www.9devyllc.com/logo.png",
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+1-555-123-4567",
      "contactType": "Customer Service"
    },
    "sameAs": [
      "https://www.youtube.com/@9devyllc",
      "https://www.tiktok.com/@9devyllc"
    ],
    "description": "9Devy LLC is a premium visual studio specializing in videography, photography, and social media optimization for luxury brands, crafting magnetic online identities and growth infrastructure."
  }
  </script>

  <!-- JSON-LD Structured Data: Services OfferCatalog -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "serviceType": "Videography Services",
    "provider": { "@type": "Organization","name": "9Devy LLC" },
    "description": "High-end videography production for luxury brands, including corporate videos, commercials, and event coverage.",
    "areaServed": { "@type": "Place","name": "Global" },
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "9Devy LLC Service Packages",
      "itemListElement": [
        {
          "@type": "OfferCatalog",
          "name": "Videography Packages",
          "itemListElement": [
            {
              "@type": "Offer",
              "itemOffered": {"@type": "Service","name": "Elite Videography Package"},
              "priceSpecification": {"@type": "PriceSpecification","price": "3000.00","priceCurrency": "USD"}
            }
          ]
        },
        {
          "@type": "OfferCatalog",
          "name": "Photography Packages",
          "itemListElement": [
            {
              "@type": "Offer",
              "itemOffered": {"@type": "Service","name": "Signature Photography Package"},
              "priceSpecification": {"@type": "PriceSpecification","price": "2000.00","priceCurrency": "USD"}
            }
          ]
        },
        {
          "@type": "OfferCatalog",
          "name": "Social Media Optimization Packages",
          "itemListElement": [
            {
              "@type": "Offer",
              "itemOffered": {"@type": "Service","name": "Advanced Social Media Strategy"},
              "priceSpecification": {"@type": "PriceSpecification","price": "1500.00","priceCurrency": "USD"}
            }
          ]
        }
      ]
    }
  }
  </script>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="bg-primary-dark text-white sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center p-4">
      <a href="<?php echo esc_url( home_url('/') ); ?>" class="text-2xl font-bold text-accent-gold">9Devy LLC</a>
      <nav class="hidden md:flex space-x-6">
        <?php wp_nav_menu([
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => 'flex space-x-6',
          'link_before'    => '',
          'link_after'     => '',
        ]); ?>
      </nav>
      <button id="mobile-menu-button" class="md:hidden text-white">
        <!-- hamburger icon -->
        <svg class="w-6 h-6" fill="none" stroke="currentColor" …></svg>
      </button>
    </div>
    <div id="mobile-menu" class="md:hidden bg-primary-dark px-4 py-2 hidden">
      <?php wp_nav_menu([
        'theme_location' => 'primary',
        'container'      => false,
        'menu_class'     => 'flex flex-col space-y-2',
      ]); ?>
    </div>
  </header>
