export const siteContent = {
  navigation: [
    { label: "Portfolio", href: "/portfolio" },
    { label: "Shows", href: "/shows" },
    { label: "Services", href: "/services" }
  ],
  footerNavigation: [
    { label: "About", href: "/about" },
    { label: "Technology", href: "/technology" },
    { label: "Careers", href: "/careers" },
    { label: "Contact", href: "/contact" }
  ],
  pages: {
    home: {
      title: "Inventor Heads",
      eyebrow: "Creative technology studio",
      summary:
        "A rebuilt digital home for the studio's portfolio, shows, services, technology work, careers, and contact workflows.",
      heroImage: "/images/inventor-slide.jpg"
    },
    about: {
      title: "About",
      summary:
        "Inventor Heads brings production craft, visual storytelling, and technical workflows together for film, television, advertising, and digital experiences.",
      heroImage: "/images/dimond.jpg"
    },
    portfolio: {
      title: "Portfolio",
      summary:
        "Selected work and showreel material from the studio, migrated from the original WordPress portfolio templates.",
      heroImage: "/images/vfx-breakdown-scene.png"
    },
    shows: {
      title: "Shows",
      summary:
        "A cleaner showcase for TV shows, films, short films, commercials, documentaries, and video-led projects.",
      heroImage: "/images/show.jpg"
    },
    technology: {
      title: "Technology",
      summary:
        "Workflow tools, streamlining systems, and production technology content formerly managed as WordPress custom post types.",
      heroImage: "/images/slide2back.jpg"
    },
    services: {
      title: "Services",
      summary:
        "Production and post-production services presented as structured CMS entries instead of PHP query templates.",
      heroImage: "/images/try.jpg"
    },
    careers: {
      title: "Careers",
      summary:
        "Internships, training, and job listings with a streamlined application path.",
      heroImage: "/images/3D-Square-Pattern-HD-Wallpaper-02165.jpg"
    },
    team: {
      title: "Team",
      summary:
        "Management and creative team profiles migrated from the WordPress team custom post type.",
      heroImage: "/images/82322.jpg"
    },
    contact: {
      title: "Contact",
      summary:
        "Project inquiries, hiring conversations, and studio contact details in one fast frontend.",
      heroImage: "/images/contact-us-banner.jpg"
    }
  },
  collections: {
    portfolio: [
      {
        title: "Studio Showreel",
        category: "Showreel",
        image: "/images/project_image.jpg",
        vimeoUrl: "",
        vimeoEmbedUrl: "https://player.vimeo.com/video/225542556",
        downloadLabel: "Download demoreel breakdown",
        description:
          "A video-first portfolio entry carried over from the original home and portfolio pages.",
        details:
          "All the works shown in this reel are created at Inventor Heads."
      },
      {
        title: "Featured Production Work",
        category: "Production",
        image: "/images/project_image1.jpg",
        vimeoUrl: "https://vimeo.com/000000001",
        vimeoEmbedUrl: "https://player.vimeo.com/video/000000001",
        downloadLabel: "View production reel",
        description:
          "A flexible entry for case studies, breakdowns, stills, or embedded video.",
        details:
          "Use this record for production notes, client/project metadata, final videos, stills, and technical breakdown links."
      },
      {
        title: "Visual Effects Breakdown",
        category: "VFX",
        image: "/images/vfx-breakdown-scene.png",
        vimeoUrl: "https://vimeo.com/000000002",
        vimeoEmbedUrl: "https://player.vimeo.com/video/000000002",
        downloadLabel: "View VFX breakdown",
        description:
          "Designed to hold detailed before-and-after media once the original WordPress database export is available.",
        details:
          "This maps to the old portfolio breakdown area and can carry Vimeo embeds, downloadable PDFs, and case-study notes."
      }
    ],
    services: [
      {
        title: "Pre Production",
        image: "/images/sevices-post/pre1.png",
        videoEmbedUrl: "https://www.youtube.com/embed/AUoUWoAIHXU",
        description:
          "Planning, visual development, production design support, and technical preparation."
      },
      {
        title: "Production",
        image: "/images/sevices-post/pre2.png",
        description:
          "On-set creative and technical support for film, TV, advertising, and digital projects."
      },
      {
        title: "Post Production",
        image: "/images/sevices-post/pre3.png",
        description:
          "Editorial, finishing, compositing, color, and delivery workflows."
      },
      {
        title: "Visual Effects",
        image: "/images/sevices-post/pre4.png",
        description:
          "Shot design, compositing, cleanup, motion graphics, and environment work."
      }
    ],
    technologies: [
      {
        title: "Workflow Tools",
        category: "Workflow Tools",
        image: "/images/slide2.jpg",
        description:
          "Internal tools and repeatable pipelines for production teams."
      },
      {
        title: "Streamliner",
        category: "Streamliner",
        image: "/images/slide3.jpg",
        description:
          "A technology content area for process automation and delivery tracking."
      },
      {
        title: "Pipeline Support",
        category: "Pipeline",
        image: "/images/slide1.jpg",
        description:
          "CMS-managed technology articles replacing the old technology_type WordPress posts."
      }
    ],
    shows: [
      {
        title: "Mr.Buddy",
        category: "TV Shows",
        format: "Episodic",
        status: "Aired in 2018",
        network: "Pogo Network",
        year: "2018",
        source: "Recovered from legacy homepage slide content",
        legacyCategory: "TV Shows",
        image: "/images/slide1.jpg",
        description:
          "IP project listed in the legacy homepage slider as airing in 2018 for Pogo Network.",
        details:
          "The original WordPress database may contain the full Show_type post, thumbnail, excerpt, and ACF video_link. This entry preserves the title, network, year, and project note found in the PHP source.",
        videoLabel: "View show reel",
        videoUrl: "",
        videoEmbedUrl: "https://www.youtube.com/embed/AUoUWoAIHXU"
      },
      {
        title: "Boston Town",
        category: "Films",
        format: "Feature and Short",
        status: "VFX Project",
        network: "Film project",
        year: "Legacy project",
        source: "Recovered from legacy homepage slide content",
        legacyCategory: "Films",
        image: "/images/banner3.jpg",
        description: "VFX project listed in the legacy homepage slider.",
        details:
          "The source files identify Boston Town as a VFX project. Full synopsis, credits, and video embed should be imported from the WordPress Show_type database export when available.",
        videoLabel: "Watch film reel",
        videoUrl: "",
        videoEmbedUrl: ""
      },
      {
        title: "Vinnu",
        category: "TV Shows",
        format: "Web Series",
        status: "Aired in 2018",
        network: "YouTube Network",
        year: "2018",
        source: "Recovered from legacy homepage slide content",
        legacyCategory: "TV Shows",
        image: "/images/banner4.jpg",
        description:
          "Web series project listed in the legacy homepage slider as airing in 2018 for YouTube Network.",
        details:
          "The PHP source provides the title, format, year, and network note. A future WordPress export can fill in the original video_link and long-form post content.",
        videoLabel: "View web series reel",
        videoUrl: "",
        videoEmbedUrl: ""
      },
      {
        title: "TV Shows",
        category: "TV Shows",
        format: "Category Archive",
        status: "Legacy category",
        network: "Multiple",
        year: "Ongoing",
        source: "Recovered from shows.php category filters",
        legacyCategory: "TV Shows",
        image: "/images/show1.jpg",
        description:
          "Legacy Shows page category for television projects published under the WordPress Show_type post type.",
        details:
          "The old PHP template filtered Show_type posts by the category name TV Shows and opened each item in a video modal powered by the ACF video_link field.",
        videoLabel: "View category",
        videoUrl: "",
        videoEmbedUrl: ""
      },
      {
        title: "Films",
        category: "Films",
        format: "Category Archive",
        status: "Legacy category",
        network: "Multiple",
        year: "Ongoing",
        source: "Recovered from shows.php category filters",
        legacyCategory: "Films",
        image: "/images/show2.jpg",
        description:
          "Story of a night of unexpected happenings in the life of Vinay and how he manages to survive the night and stay alive.",
        details:
          "Watch it to know the struggle and survival of Vinay.",
        videoLabel: "Play film here",
        videoUrl: "",
        videoEmbedUrl: "https://www.youtube.com/embed/pZIW7H1QIiw"
      },
      {
        title: "CG Feature Film",
        category: "Films",
        format: "Feature Film",
        status: "Video available",
        network: "YouTube",
        year: "Published",
        source: "Added from provided YouTube feature film link",
        legacyCategory: "Films",
        image: "/images/project_image2.jpg",
        description:
          "CG feature film showcase added to the Shows page with an in-page player.",
        details:
          "This video is embedded directly inside the website and starts at the requested timestamp.",
        videoLabel: "Play CG feature film",
        videoUrl: "",
        videoEmbedUrl: "https://www.youtube.com/embed/tiHfnC2KTYg?start=156"
      },
      {
        title: "Short Film",
        category: "Short Film",
        format: "Short Film",
        status: "Video available",
        network: "YouTube",
        year: "Published",
        source: "Recovered from shows.php category filters",
        legacyCategory: "Short Film",
        image: "/images/film_img.png",
        description:
          "Embark on a captivating journey with Gita, Bhagavad, and Dhruv as they navigate through a game that challenges their very existence, altering their destinies forever.",
        details:
          "Explore the profound impact of this ancient game, which has transcended time, affecting lives then and now.",
        videoLabel: "Watch short film",
        videoUrl: "https://www.youtube.com/watch?v=Niw5MO1flQI",
        videoEmbedUrl: "https://www.youtube.com/embed/Niw5MO1flQI"
      },
      {
        title: "Documentry",
        category: "Documentry",
        format: "Factual",
        status: "Legacy category",
        network: "Multiple",
        year: "Ongoing",
        source: "Recovered from shows.php category filters",
        legacyCategory: "Documentry",
        image: "/images/film_img.png",
        description: "Legacy Shows page category for documentary and factual storytelling projects.",
        details:
          "The original category is misspelled as Documentry in shows.php. The new content preserves that legacy label for migration compatibility.",
        videoLabel: "Watch preview",
        videoUrl: "",
        videoEmbedUrl: ""
      }
    ],
    careers: [
      {
        title: "VFX Internship",
        type: "Internship",
        description:
          "A starter role for artists learning production workflows and studio delivery standards."
      },
      {
        title: "Production Training",
        type: "Training",
        description:
          "Structured training for creative production, post-production, and technical operations."
      },
      {
        title: "Compositing Artist",
        type: "Role",
        description:
          "A CMS-ready job listing replacing the old careers_type WordPress entries."
      }
    ],
    team: [
      {
        name: "Ashok Kumar Reddy",
        role: "Management Team",
        image: "/images/logo.png",
        linkedinUrl: "https://www.linkedin.com/in/asoka-reddy-44a1213/",
        bio:
          "Part of the Inventor Heads leadership team, guiding production, technology, and creative delivery across studio work."
      },
      {
        name: "Vani Kalavala",
        role: "Management Team",
        image: "/images/vani.JPG",
        linkedinUrl: "https://in.linkedin.com/in/vanikalvala",
        bio:
          "Part of the Inventor Heads management team, supporting studio operations, creative production, and client-facing workflows."
      }
    ]
  },
  contact: {
    email: "hello@inventorheads.com",
    phone: "+91 00000 00000",
    location: "Hyderabad, India"
  }
} as const;
